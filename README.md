# Notes Web Application

This is an open-source web application for managing notes, developed with **Laravel 11**. It provides CRUD functionality for notes and notebooks, along with user authentication and validation.

## Features

- **Authentication**:
  - Utilizes [Laravel Breeze](https://laravel.com/docs/11.x/starter-kits#laravel-breeze) for pre-configured authentication flows, including login, registration, password reset, and email verification.

- **CRUD Functionality**:
  - **Notes**: Create, Read, Update, and Delete operations.
  - **Notebooks**: Create operation only.

- **Database Relationships**:
  - **User-Note**: Notes are linked to users via a `user_id` foreign key in the `notes` table.
  - **User-Notebook**: Notebooks are linked to users via a `user_id` foreign key in the `notebooks` table.
  - **Notebook-Note**: Notes are categorized under notebooks through a `notebook_id` foreign key in the `notes` table.

- **Pagination**:
  - Implements Laravel’s `paginate()` for efficient data retrieval and structured navigation.

- **Form Validation**:
  - Implements server-side validation using Laravel validation rules.
  - Ensures input persistence with the `@old` directive in Blade templates during validation errors.

- **Soft Deletes**:
  - Enables soft deletion for notes, allowing recovery of accidentally deleted items.

- **Asset Management**:
  - Uses [Vite](https://vitejs.dev/) for asset bundling and live reloading during development.
  - Integrates Tailwind CSS for responsive and utility-first styling.

---

## Installation and Setup

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/notes-app.git
cd notes-app
```

### 2. Install Dependencies
#### PHP Dependencies:
```bash
composer install
```

#### Node.js Dependencies:
```bash
npm install
```

### 3. Configure Environment
Copy the `.env.example` file to `.env` and set up the required environment variables:
```bash
cp .env.example .env
php artisan key:generate
```

Update database credentials in the `.env` file.

### 4. Run Database Migrations
Run migrations to create the required database tables:
```bash
php artisan migrate
```

---

## Running the Application

### 1. Start the Development Server
```bash
php artisan serve
```

### 2. Compile Assets with Vite
Run Vite to compile and watch for asset changes:
```bash
npm run watch
```

Access the application at `http://localhost:8000`.

---

## Package Information

### Dependencies
#### Node.js (`package.json`):
- **Vite**: Modern asset bundler for development and production builds.
- **Tailwind CSS**: Utility-first CSS framework.
- **Alpine.js**: Lightweight JavaScript framework for interactive UIs.

#### PHP (`composer.json`):
- **Laravel Framework**: Core framework for building the application.
- **Laravel Breeze**: Lightweight authentication scaffolding.
- **PHPUnit**: Testing framework for automated testing.

---

## Additional Notes

- **Authentication**: Only authenticated users can access note-related functionality.
- **Database Configuration**: Ensure the database is set up and credentials are correctly configured in `.env`.
- **Development Tools**:
  - Use `php artisan serve` for starting the server.
  - Use `npm run watch` for real-time asset compilation during development.