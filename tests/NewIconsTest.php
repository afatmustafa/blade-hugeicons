<?php

declare(strict_types=1);

namespace Tests;

use Afatmustafa\HugeIcons\BladeHugeIconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase;
use PHPUnit\Framework\Attributes\Test;

class NewIconsTest extends TestCase
{
    #[Test]
    public function it_compiles_a_single_anonymous_component()
    {
        $expected = file_get_contents(dirname(__DIR__).'/resources/svg/add-female.svg');
        $this->assertNotFalse($expected);

        $result = svg('hugeicons-add-female')->toHtml();

        $this->assertSame($expected, $result);
    }

    #[Test]
    public function it_can_add_classes_to_icons()
    {
        $base = file_get_contents(dirname(__DIR__).'/resources/svg/add-female.svg');
        $this->assertNotFalse($base);

        $expected = '<svg class="w-6 h-6 text-gray-500"'.substr($base, 4);

        $result = svg('hugeicons-add-female', 'w-6 h-6 text-gray-500')->toHtml();

        $this->assertSame($expected, $result);
    }

    #[Test]
    public function it_can_add_styles_to_icons()
    {
        $base = file_get_contents(dirname(__DIR__).'/resources/svg/add-female.svg');
        $this->assertNotFalse($base);

        $expected = '<svg style="color: #555"'.substr($base, 4);

        $result = svg('hugeicons-add-female', ['style' => 'color: #555'])->toHtml();

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
