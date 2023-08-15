## Livewire Fundamentals
Couply is a simple app to work with Figma, Tailwind CSS, & Livewire fundamentals. This is a small project that will not scale further other than for learning purposes.

# Installation
The project is setup with [Laravel 10.x](https://laravel.com/docs/10.x/installation) hence PHP ^8.1 is required.

Run the following commands

```
composer install
npm install & npm run dev
cp .env.example .env
php artisan key:generate
```

Create a database with a name of your choice and fill the following .env property with your database name

```
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Finally, run the database migrations and serve your application.

```
php artisan migrate:fresh
```

## Design Inspiration & Credits
- **[DesignCourse](https://www.youtube.com/watch?v=o1nCmiW6auE/)**
