# CodeIgniter 4 Project Setup Guide

This guide explains how to set up and run the CodeIgniter 4 project from scratch.

---

# Prerequisites

Make sure the following software is installed on your machine.

- PHP >= 8.2
- Composer
- MySQL / MariaDB
- Git
- Apache / Nginx / XAMPP / Laragon
- VS Code (Recommended)

Check versions:

```bash
php -v
composer -V
mysql --version
git --version
```

---

# Clone Repository

```bash
git clone <repository-url>
cd project-name
```

Example

```bash
git clone https://github.com/username/project.git
cd project
```

---

# Install Dependencies

```bash
composer install
```

> Do NOT run `composer update` unless you intentionally want to upgrade framework packages.

---

# Environment Setup

Copy the example environment file.

Linux / macOS

```bash
cp env .env
```

Windows

```cmd
copy env .env
```

If `.env` already exists, skip this step.

---

# Configure Environment

Open `.env`

```ini
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost:8080'

database.default.hostname = localhost
database.default.database = your_database
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

---

# Create Database

```sql
CREATE DATABASE project_db;
```

Update the database name inside `.env`.

---

# Run Migrations

```bash
php spark migrate
```

Rollback migration

```bash
php spark migrate:rollback
```

Refresh migrations

```bash
php spark migrate:refresh
```

Refresh and seed

```bash
php spark migrate:refresh --seed
```

---

# Run Seeders

Run a specific seeder

```bash
php spark db:seed UserSeeder
```

Run all seeders

```bash
php spark db:seed DatabaseSeeder
```

---

# Start Development Server

```bash
php spark serve
```

Open

```
http://localhost:8080
```

---

# Login Credentials

Example

```
Email:
admin@example.com

Password:
password
```

Update according to your project.

---

# Useful Spark Commands

Create Controller

```bash
php spark make:controller UserController
```

Create Model

```bash
php spark make:model UserModel
```

Create Migration

```bash
php spark make:migration CreateUsers
```

Create Seeder

```bash
php spark make:seeder UserSeeder
```

Create Filter

```bash
php spark make:filter AuthFilter
```

Create Command

```bash
php spark make:command Demo
```

List Routes

```bash
php spark routes
```

List Commands

```bash
php spark list
```

Cache Clear

```bash
php spark cache:clear
```

---

# Project Structure

```
app/
├── Config/
├── Controllers/
├── Database/
│   ├── Migrations/
│   ├── Seeds/
├── Filters/
├── Helpers/
├── Libraries/
├── Models/
├── Services/
├── Views/

public/
writable/
tests/
vendor/

spark
composer.json
.env
```

---

# Git Workflow

Clone

```bash
git clone repository-url
```

Check Status

```bash
git status
```

Create Branch

```bash
git checkout -b feature/login
```

Stage Changes

```bash
git add .
```

Commit

```bash
git commit -m "Add login feature"
```

Push

```bash
git push origin feature/login
```

Pull Latest Changes

```bash
git pull origin main
```

---

# Deployment

## Production Commands

```bash
composer install --no-dev --optimize-autoloader
```

Set Environment

```ini
CI_ENVIRONMENT = production
```

Optimize

```bash
php spark optimize
```

Clear Cache

```bash
php spark cache:clear
```

Run Migration

```bash
php spark migrate
```

Set Writable Permissions

Linux

```bash
chmod -R 775 writable
chmod -R 775 writable/cache
chmod -R 775 writable/logs
chmod -R 775 writable/session
```

---

# Common Issues

## Class not found

```bash
composer dump-autoload
```

---

## Migration not found

```bash
php spark migrate
```

---

## Seeder not found

Check namespace

```
App\Database\Seeds
```

---

## Database connection failed

Verify

- Database name
- Username
- Password
- Port
- MySQL service running

---

## Writable directory error

Make sure

```
writable/
```

has write permission.

---

## Route not found

List routes

```bash
php spark routes
```

---

## Clear Cache

```bash
php spark cache:clear
```

---

# Coding Standards

- Follow PSR-12
- Use MVC Architecture
- Keep Controllers thin
- Business logic inside Services
- Database logic inside Models
- Use Validation
- Use Migrations
- Use Seeders
- Use Environment Variables
- Never commit `.env`

---

# Recommended .gitignore

```
vendor/
.env
writable/cache/*
writable/logs/*
writable/session/*
node_modules/
```

---

# Tech Stack

- PHP 8.2+
- CodeIgniter 4
- MySQL
- Composer
- Git
- Bootstrap
- JavaScript

---

# Useful Links

CodeIgniter Documentation

https://codeigniter4.github.io/userguide/

Composer

https://getcomposer.org/

PHP

https://www.php.net/

Git

https://git-scm.com/

---

# Author

Your Name
AbulQasim Ansari

---

# License

This project is intended for educational and commercial use as per your organization's licensing policy.