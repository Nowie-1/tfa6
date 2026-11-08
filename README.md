# Corner Store POS (IT0049 - TFA5)

A small Laravel POS with four pages: Landing (`/`), About (`/about`), Customer Accounts (`/customers`) and User Accounts (`/users`). The two account pages now read their data from a database through Eloquent models (TFA6). Migrations create the `customers` and `users` tables and seeders fill them with sample data.

## What you need

PHP 8.3 or newer (XAMPP has it), Composer, and Git.

## How to run it

1. Clone the repo and open the folder: `git clone <your-repo-url>` then `cd <folder-name>`
2. Install packages: `composer install`
3. Create your environment file: `copy .env.example .env` on Windows, or `cp .env.example .env`
4. Generate the app key: `php artisan key:generate`
5. Create the tables and sample data: `php artisan migrate --seed` (with the default SQLite setting, answer **yes** if Artisan offers to create `database/database.sqlite`). For MySQL, set `DB_CONNECTION=mysql` and the `DB_*` values in `.env` first.
6. Start the server: `php artisan serve`
7. Visit http://127.0.0.1:8000

## Database

- `customers`: id, full_name, email, phone, timestamps
- `users`: id, username (unique), full_name, timestamps

Migrations are in `database/migrations`, seeders in `database/seeders` (CustomerSeeder, UserSeeder), models in `app/Models` (Customer, User). To rebuild everything from scratch: `php artisan migrate:fresh --seed`.

## Where things are

Routes are in `routes/web.php`. Controllers are in `app/Http/Controllers` (PageController, CustomerController, UserController). Blade views are in `resources/views`, with the shared layout in `layouts/app.blade.php`.

## Live site

<your-hosted-url>
