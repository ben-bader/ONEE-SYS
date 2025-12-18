# ONEE-SYS

A Laravel-based inventory and peripheral management application used to track devices, brands, employees and sites.

## Tech Stack

- PHP (8.1+ recommended)
- Laravel
- Composer
- Node.js & npm / Vite (frontend assets)
- MySQL / MariaDB (or any supported SQL database)

## Requirements

- PHP 8.1 or newer
- Composer
- Node.js (16+) and npm or yarn
- A SQL database (MySQL/MariaDB/Postgres)

## Quick Start

1. Clone the repository

```bash
git clone <repo-url> ONEE-SYS
cd ONEE-SYS
```

2. Install PHP dependencies

```bash
composer install
```

3. Copy the example environment and set values

```bash
cp .env.example .env
# On Windows PowerShell use: Copy-Item .env.example .env
# Edit .env and set DB_*, APP_URL and other credentials
```

4. Generate application key

```bash
php artisan key:generate
```

5. Run database migrations and seeders

```bash
php artisan migrate --seed
```

6. Install front-end dependencies and build assets

```bash
npm install
npm run dev    # development
# or
npm run build  # production
```

7. Serve the application locally

```bash
php artisan serve
# then open http://127.0.0.1:8000 or the URL shown
```

## Environment / Configuration

Set these important `.env` values for development:

- `APP_NAME`
- `APP_ENV`
- `APP_URL`
- `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
- Mail and queue settings if used

## Database

This project contains migrations in the `database/migrations` folder and seeders in `database/seeders`.
Run `php artisan migrate --seed` to create tables and populate any sample data (ensure your `.env` DB settings are correct).

## Testing

Run the test suite with Pest or PHPUnit:

```bash
./vendor/bin/pest
# or
php artisan test
```

## Common Artisan Commands

- `php artisan migrate` — run pending migrations
- `php artisan db:seed` — run seeders
- `php artisan tinker` — interactive REPL
- `php artisan route:list` — list routes

## Frontend

- Entry assets are in `resources/js` and `resources/css`.
- Vite is configured (`vite.config.js`) — use `npm run dev` for local development and `npm run build` for production assets.

## Contributing

Feel free to open issues or pull requests. Please include a clear description of changes and follow repository coding standards.

## Deployment

Typical steps:

```bash
composer install --optimize-autoloader --no-dev
npm ci && npm run build
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## License

This repository does not include a license file. Add a suitable license (e.g., MIT) if you intend to publish.

## Questions / Support

If you want me to customize this README further (add architecture diagrams, environment variable examples, or CI/CD instructions), tell me what to include.
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
