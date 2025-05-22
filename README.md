# Laravel CRUD Application

A simple Laravel CRUD application to manage portfolio projects.

**Live Demo:** [View the live project here](https://crud-app.free.nf/)

## Features

-   Add new projects
-   Edit existing projects
-   Delete projects
-   View list of all projects
-   View details of a single project

## Important

This project uses:

-   Laravel 12.15.0
-   PHP 8.2.12
-   MySQL 8.2.12

## Prerequisites

### 1. Install XAMPP

XAMPP includes PHP, MySQL, and Apache server which are required to run Laravel applications.

-   Download XAMPP from the [official website](https://www.apachefriends.org/download.html)
-   Follow the installation wizard to install XAMPP on your system

### 2. Install Composer

Composer is a dependency manager for PHP that Laravel uses.

-   Download Composer from the [official website](https://getcomposer.org/download/)
-   If you're on Windows, download and run the Composer-Setup.exe installer
-   If you're on macOS or Linux, follow the command-line installation instructions
-   Verify installation by running `composer --version` in your terminal

### 3. Start XAMPP

-   Start the Apache and MySQL services from the XAMPP Control Panel

## Setup Instructions

1. Clone the repository

```bash
git clone https://github.com/mahmud-ashiq/crud_application.git
cd crud_application
```

2. Install dependencies

```bash
composer install
```

3. Create a copy of `.env` file

```bash
copy .env.example .env
```
or
```bash
cp .env.example .env
```

4. Generate application key

```bash
php artisan key:generate
```

5. Configure your database in the `.env` file

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_app
DB_USERNAME=root
DB_PASSWORD=your_password default is null
```

6. Run migrations

```bash
php artisan migrate
```

7. Start the development server

```bash
php artisan serve
```

8. Visit `http://localhost:8000` in your browser

## Database Name

The database used for this project is named `crud_app`.
