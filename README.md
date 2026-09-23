<p align="center">
	<a href="https://laravel.com"><img src="https://laravel.com/img/logomark.min.svg" width="120" alt="Laravel logo"></a>
</p>

<p align="center">
	<img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png" width="92" alt="Bootstrap logo">
</p>

<h1 align="center">SL Academy</h1>

<p align="center">
	<strong>A modern institute management system for every grade, role, and learning journey.</strong>
</p>

<p align="center">
	<img src="https://img.shields.io/badge/Laravel-12-FF2D20?logo=laravel&logoColor=white" alt="Laravel 12">
	<img src="https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php&logoColor=white" alt="PHP 8.2 or later">
	<img src="https://img.shields.io/badge/Tailwind_CSS-UI-06B6D4?logo=tailwindcss&logoColor=white" alt="Tailwind CSS">
	<img src="https://img.shields.io/badge/Bootstrap-reference-7952B3?logo=bootstrap&logoColor=white" alt="Bootstrap reference">
</p>

SL Academy is a Laravel-based institute management system for managing an online school experience from Grade 1 through Grade 11. It provides public information and course pages alongside authenticated dashboards for administrators, teachers, students, and registrars.

## Features

- Public home, about, contact, and course pages
- User registration, login, email verification, and profile management
- Role-based access control with `admin`, `teacher`, `student`, and `registrar` roles
- Admin management of users, roles, and permissions
- Teacher profile management
- Shared authenticated dashboard
- Responsive Blade and Tailwind CSS interface

## Built With

- Laravel 12
- PHP 8.2+
- Laravel Breeze
- Spatie Laravel Permission
- Blade
- Tailwind CSS
- Vite

<p align="center">
	<img src="https://skillicons.dev/icons?i=laravel,php,bootstrap,tailwind,vite" alt="Laravel, PHP, Bootstrap, Tailwind CSS, and Vite">
</p>

## Getting Started

### Requirements

- PHP 8.2 or later
- Composer
- Node.js and npm
- A supported database, or SQLite for local development

### Installation

```bash
git clone https://github.com/your-username/your-repository.git
cd your-repository
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run build
php artisan serve
```

Open `http://localhost:8000` in your browser.

For local development with Laravel's concurrent services, use:

```bash
composer run dev
```

## Demo Accounts

The database seeder creates the following accounts:

| Role | Email | Password |
| --- | --- | --- |
| Admin | admin@example.com | admin123 |
| Teacher | teacher@example.com | teacher123 |
| Student | student1@example.com | student123 |
| Registrar | registrar@example.com | registrar123 |

Change these credentials before using the application outside local development.

## Testing

Run the test suite with:

```bash
php artisan test
```

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).
