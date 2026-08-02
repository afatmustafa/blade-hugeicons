

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

Un paquete para utilizar fácilmente [Hugeicons](https://hugeicons.com/) (versión gratuita) en tus vistas de Laravel Blade.

El paquete incluye actualmente 6.200 iconos SVG obtenidos de `@hugeicons/core-free-icons` v4.2.2. Para ver la lista completa, consulta [el directorio SVG](resources/svg) o previsualiza los iconos en [hugeicons.com](https://hugeicons.com/).

> **Nota**
> Este paquete solo incluye el conjunto gratuito de Hugeicons. Para iconos adicionales, consulta [Hugeicons Pro](https://hugeicons.com?via=afat).


## Requisitos

- PHP 8.1 o superior
- Laravel 10, 11, 12 o 13

## Instalación

```bash
composer require afatmustafa/blade-hugeicons
```

## Blade Icons

Blade Hugeicons utiliza Blade Icons en su núcleo. Consulta [la documentación de Blade Icons](https://github.com/blade-ui-kit/blade-icons) para conocer funcionalidades adicionales. También recomendamos [habilitar la caché de iconos](https://github.com/blade-ui-kit/blade-icons#caching) al usar esta biblioteca.

## Configuración

Blade Hugeicons también ofrece la posibilidad de utilizar funciones de Blade Icons, como clases predeterminadas, atributos predeterminados, etc. Si deseas configurar estas opciones, publica el archivo de configuración `blade-hugeicons.php`:

```bash
php artisan vendor:publish --tag=blade-hugeicons-config
```

## Uso

Los iconos se pueden utilizar como componentes Blade auto-cerrados que se compilarán como iconos SVG:

```blade
<x-hugeicons-youtube/>
```

También puedes pasar clases a tus componentes de icono:

```blade
<x-hugeicons-youtube class="w-6 h-6 text-gray-500"/>
```

Incluso puedes usar estilos en línea:

```blade
<x-hugeicons-youtube style="color: #555"/>
```

También puedes personalizar el grosor del trazo (`stroke-width`) del icono de varias maneras:

```blade
<x-hugeicons-youtube stroke-width="1.5"/>
<x-hugeicons-youtube class="stroke-2"/>
<x-hugeicons-youtube style="stroke-width: 2px"/>
```

Además, se pueden utilizar todos los atributos SVG estándar, lo que facilita controlar el tamaño, color, estilo del trazo y más:

```blade
<x-hugeicons-youtube stroke-width="1.5" width="24" height="24" color="red" stroke-linecap="round"/>
```

### Iconos SVG sin procesar

Si deseas utilizar los iconos SVG sin procesar como activos, puedes publicarlos mediante:

```bash
php artisan vendor:publish --tag=blade-hugeicons --force
```

Luego, úsalos en tus vistas de la siguiente manera:

```blade
<img src="{{ asset('vendor/blade-hugeicons/youtube.svg') }}" width="10" height="10"/>
```

## Registro de cambios

Consulta el [CHANGELOG](CHANGELOG.md) en este repositorio para ver todos los cambios recientes.

## Mantenedores

Blade Hugeicons es desarrollado y mantenido por [Mustafa Afat](https://afat.me).

## Licencia

Blade Hugeicons es software de código abierto licenciado bajo [la licencia MIT](LICENSE.md).
