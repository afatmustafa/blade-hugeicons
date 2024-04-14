# Blade Hugeicons

<a href="https://github.com/afatmustafa/blade-hugeicons/actions?query=workflow%3ATests">
    <img src="https://github.com/afatmustafa/blade-hugeicons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/afatmustafa/blade-hugeicons">
    <img src="https://img.shields.io/packagist/v/afatmustafa/blade-hugeicons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/afatmustafa/blade-hugeicons">
    <img src="https://img.shields.io/packagist/dt/afatmustafa/blade-hugeicons" alt="Total Downloads">
</a>

A package to easily make use of [Hugeicons](https://hugeicons.com/)(Free version) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [hugeicons.com](https://hugeicons.com/).

> **Note**  
> This package only includes the Hugeicons's free set, for more please visit the link. [Hugeicons Pro](https://hugeicons.com/pricing)


## Requirements

- PHP 8.2 or higher
- Laravel 10.0 or higher

## Installation

```bash
composer require afatmustafa/blade-hugeicons
```

## Blade Icons

Blade Hugeicons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade Heroicons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-hugeicons.php` config file:

```bash
php artisan vendor:publish --tag=blade-hugeicons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-hugeicons-youtube/>
```

You can also pass classes to your icon components:

```blade
<x-hugeicons-youtube class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-hugeicons-youtube style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-hugeicons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-hugeicons/youtube.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Hugeicons is developed and maintained by [Mustafa Afat](https://afat.me).

## License

Blade Hugeicons is open-sourced software licensed under [the MIT license](LICENSE.md).
