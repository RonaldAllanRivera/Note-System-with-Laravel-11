# Notes Web Application

This is a simple web application for managing notes, built using **Laravel 11**. It demonstrates CRUD functionality with user authentication and validation.

---

## Features
- **Authentication**:  
  Implemented using [Laravel Breeze](https://laravel.com/docs/11.x/starter-kits#laravel-breeze) for secure and seamless login and registration.

- **CRUD Operations**:  
  Manage notes and notebooks with Create, Read, Update, and Delete functionality.

- **User-Specific Notes and Notebooks**:  
  - Notes are linked to users via the `user_id` foreign key in the `notes` table.  
  - Notebooks are categorized and linked to users via the `user_id` foreign key in the `notebooks` table.

- **Login Redirection**:  
  Users are automatically redirected to the `notes.index` page upon successful login.

- **Pagination**:  
  Notes are displayed with pagination for improved navigation and performance.

- **Form Validation**:  
  - Input fields are validated using Laravel's robust validation rules.  
  - The `@old` directive ensures that previously entered values are retained in case of validation errors.

---


## Installation and Setup

### **1. Clone the Repository**
```bash
git clone https://github.com/your-username/notes-app.git
cd notes-app
```

### **2. Install Dependencies**
Install PHP dependencies:
```bash
composer install
```

Install Node.js dependencies:
```bash
npm install
```

### **3. Set Up Environment**
Copy the `.env.example` file and configure your environment:
```bash
cp .env.example .env
php artisan key:generate
```

Set up your database credentials in the `.env` file.

### **4. Run Migrations**
Run database migrations to create the necessary tables:
```bash
php artisan migrate
```

---

## Running the Application

### **1. Start the Laravel Development Server**
```bash
php artisan serve
```

### **2. Start Vite for Asset Watching**
Run Vite in development mode to compile and watch assets:
```bash
npm run watch
```

Visit `http://localhost:8000` in your browser to access the application.

---

## Additional Notes
- Ensure your database is set up correctly and the `.env` file is configured.
- Authentication is required to access the notes functionality.
- Notes are paginated for better performance.
- Validation errors are displayed directly on the form with old input values retained.