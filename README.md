# LawyrProject

A Laravel-based platform for **bar association management, public complaint submission, and legal administrative workflows**.

## Overview

LawyrProject is a web application designed to support legal and administrative workflows within a bar association environment.

The platform provides tools for managing users, handling public complaints, managing administrative processes, and organizing internal workflows.

## Features

* 🔐 Authentication and user management
* 📝 Public complaint submission
* 📋 Complaint management and tracking
* 👥 User and administrative management
* 🔄 Administrative workflows
* 🗃️ Database-backed data management
* ⚡ Reactive interfaces with Livewire
* 🛡️ Role-based access and application security
* 📱 Responsive web interface

## Tech Stack

* **PHP 8.4**
* **Laravel 12**
* **Livewire 3**
* **MySQL**
* **Blade**
* **Tailwind CSS**
* **Composer**

## Project Structure

The project follows the standard Laravel application structure, with additional application-specific components for complaint management and administrative workflows.

## Installation

### Requirements

Make sure the following are installed:

* PHP 8.4+
* Composer
* MySQL
* Node.js and npm

### Setup

Clone the repository:

```bash
git clone https://github.com/amin-fakouri/LawyrProject.git
cd LawyrProject
```

Install PHP dependencies:

```bash
composer install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your database credentials in `.env`, then run:

```bash
php artisan migrate
```

Install and build frontend dependencies:

```bash
npm install
npm run build
```

Create the storage symlink:

```bash
php artisan storage:link
```

Start the development server:

```bash
php artisan serve
```

## Security

This repository is currently **private**.

Sensitive configuration such as environment variables, API keys, database credentials, and application secrets must never be committed to the repository.

If you discover a security issue, please report it privately to the project owner rather than opening a public issue.

## License

This project is proprietary software.

The source code is not licensed for unrestricted commercial use, redistribution, resale, hosting, or creation of derivative commercial products without permission from the copyright holder.

© 2026 Amin Fakouri. All rights reserved.
