# SL Academy

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
