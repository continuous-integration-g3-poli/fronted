# Sistema de Gestión de Asistencias

Este proyecto es una aplicación web desarrollada con Laravel para la gestión de asistencias de empleados. Permite registrar, visualizar y administrar la asistencia del personal de manera eficiente y segura.

## Características principales

- Registro y control de asistencias de empleados.
- Gestión de usuarios y empleados.
- Reportes y visualización de datos.
- Interfaz moderna y responsiva.

## Tecnologías utilizadas

- **Backend:** Laravel (PHP)
- **Frontend:** Blade, Bootstrap, JavaScript
- **Base de datos:** MySQL
- **Otros:** DataTables, Chart.js, FontAwesome

## Instalación

1. Clona el repositorio:
   ```bash
   git clone <url-del-repositorio>
   ```
2. Instala las dependencias de PHP:
   ```bash
   composer install
   ```
3. Instala las dependencias de Node.js:
   ```bash
   npm install && npm run build
   ```
4. Copia el archivo `.env.example` a `.env` y configura tus variables de entorno.
5. Genera la clave de la aplicación:
   ```bash
   php artisan key:generate
   ```
6. Ejecuta las migraciones y seeders:
   ```bash
   php artisan migrate --seed
   ```
7. Inicia el servidor de desarrollo:
   ```bash
   php artisan serve
   ```

## Estructura de carpetas principal

- `app/Http/Controllers`: Controladores de la aplicación
- `app/Models`: Modelos de Eloquent
- `resources/views`: Vistas Blade
- `public/`: Archivos públicos (CSS, JS, imágenes)
- `routes/web.php`: Definición de rutas web

## Contribuciones

¡Las contribuciones son bienvenidas! Por favor, abre un issue o un pull request para sugerencias o mejoras.

## Licencia

Este proyecto está bajo la licencia MIT.

---

<!-- Información original de Laravel eliminada para dar prioridad a la información del proyecto -->
