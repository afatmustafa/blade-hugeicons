<?php

declare(strict_types=1);

namespace Tests;

use Afatmustafa\HugeIcons\BladeHugeIconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

/**
 * Ensures Hugeicons v4 generated SVGs render visibly: root fill="none", paths carry stroke/fill.
 *
 * @see generate-icons.mjs
 */
final class V4IconSvgRenderTest extends TestCase
{
    /**
     * @return iterable<string, array{0: string}>
     */
    public static function v4IconSlugs(): iterable
    {
        yield 'container (v4 stroke-rounded)' => ['container'];
        yield 'abacus (classic set)' => ['abacus'];
        yield 'youtube (classic set)' => ['youtube'];
        yield 'add-female (stroke set)' => ['add-female'];
    }

    #[Test]
    #[DataProvider('v4IconSlugs')]
    public function it_renders_the_same_markup_as_the_package_svg_file(string $slug): void
    {
        $path = dirname(__DIR__).'/resources/svg/'.$slug.'.svg';
        $this->assertFileExists($path);

        $expected = file_get_contents($path);
        $this->assertNotFalse($expected);

        $this->assertSame($expected, svg('hugeicons-'.$slug)->toHtml());
    }

    #[Test]
    #[DataProvider('v4IconSlugs')]
    public function it_has_root_fill_none_to_avoid_default_black_fill(string $slug): void
    {
        $html = svg('hugeicons-'.$slug)->toHtml();

        $this->assertMatchesRegularExpression(
            '/<svg\b[^>]*\bfill="none"/',
            $html,
            'Root <svg> must set fill="none" so closed paths do not paint solid black.'
        );
    }

    #[Test]
    #[DataProvider('v4IconSlugs')]
    public function it_has_viewbox_and_drawable_paths(string $slug): void
    {
        $html = svg('hugeicons-'.$slug)->toHtml();

        $this->assertStringContainsString('viewBox="0 0 24 24"', $html);

        preg_match_all('/<path\b[^>]*>/', $html, $matches);
        $this->assertNotEmpty($matches[0], 'Expected at least one <path> element.');

        foreach ($matches[0] as $pathOpenTag) {
            $this->assertTrue(
                str_contains($pathOpenTag, 'stroke=') || str_contains($pathOpenTag, 'fill='),
                'Each path must declare stroke or fill so the shape is visible: '.$pathOpenTag
            );
        }
    }

    #[Test]
    public function container_icon_paths_include_stroke_width_like_hugeicons_v4(): void
    {
        $html = svg('hugeicons-container')->toHtml();

        $this->assertStringContainsString('stroke="currentColor"', $html);
        $this->assertStringContainsString('stroke-width="1.5"', $html);
    }

    #[Test]
    #[DataProvider('v4IconSlugs')]
    public function it_can_add_classes_to_icons(string $slug): void
    {
        $base = file_get_contents(dirname(__DIR__).'/resources/svg/'.$slug.'.svg');
        $this->assertNotFalse($base);

        $expected = '<svg class="w-6 h-6 text-gray-500"'.substr($base, 4);

        $result = svg('hugeicons-'.$slug, 'w-6 h-6 text-gray-500')->toHtml();

        $this->assertSame($expected, $result);
    }

    #[Test]
    #[DataProvider('v4IconSlugs')]
    public function it_can_add_styles_to_icons(string $slug): void
    {
        $base = file_get_contents(dirname(__DIR__).'/resources/svg/'.$slug.'.svg');
        $this->assertNotFalse($base);

        $expected = '<svg style="color: #555"'.substr($base, 4);

        $result = svg('hugeicons-'.$slug, ['style' => 'color: #555'])->toHtml();

        $this->assertSame($expected, $result);
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeHugeIconsServiceProvider::class,
        ];
    }
}
