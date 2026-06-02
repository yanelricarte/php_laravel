# Sitio web con Laravel

Proyecto inicial desarrollado con Laravel para practicar **rutas, controladores, vistas Blade** y la publicación en GitHub. Es un sitio de varias páginas (inicio, materias y contacto) con un layout base reutilizable.

## Tecnologías utilizadas

- PHP 8
- Laravel
- Composer
- Blade
- Git y GitHub

## Funcionalidades

- Página de inicio
- Página de materias
- Página de contacto
- Layout base reutilizable
- Navegación entre secciones
- Datos enviados desde el controlador a las vistas

## Estructura del proyecto

| Carpeta / archivo | Para qué sirve |
|---|---|
| `routes/web.php` | Define las rutas (qué URL muestra cada página) |
| `app/Http/Controllers/PageController.php` | El controlador: recibe la petición y envía datos a la vista |
| `resources/views/` | Las vistas Blade (`inicio`, `materias`, `contacto`) |
| `resources/views/layouts/app.blade.php` | El layout base que comparten todas las páginas |

## Instalación del proyecto

1. Clonar el repositorio:

   ```bash
   git clone https://github.com/yanelricarte/php_laravel.git
   cd php_laravel
   ```

2. Instalar las dependencias de PHP:

   ```bash
   composer install
   ```

3. Crear el archivo de entorno y generar la clave de la aplicación:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Levantar el servidor de desarrollo:

   ```bash
   php artisan serve
   ```

5. Abrir en el navegador: <http://localhost:8000>

## Rutas disponibles

| URL | Página |
|---|---|
| `/` | Inicio |
| `/materias` | Materias |
| `/contacto` | Contacto |
