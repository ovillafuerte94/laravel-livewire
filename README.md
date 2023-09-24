## Laravel Livewire

A simple project with Livewire.

## Requirements

* PHP version: >= 8.1
* Composer

## Clone repository and install packages

```bash
git clone https://github.com/ovillafuerte94/laravel-livewire.git
cd laravel-livewire
composer install
npm install
npm run dev
```

## Setting up database
- Edit file `.env`. If this file does not exist you can create it by copying the content of the `.env.example` file.
- Configure the database data (name, location, user and password).

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=password
```

- Once the parameters have been configured, create a database for the project and import the tables with the following command:

```bash
php artisan migrate --seed
```

## Open in browser
Through the terminal in the project folder, execute the command
```bash
php artisan serve
```
