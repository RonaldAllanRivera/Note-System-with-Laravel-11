```markdown
# Simple Notes Web Application

This is a simple web application for managing notes, built using Laravel. It demonstrates CRUD functionality with user authentication and validation.

---

## Features
- **Authentication**: Powered by [Laravel Breeze](https://laravel.com/docs/10.x/starter-kits#laravel-breeze).
- **CRUD Operations**: Create, Read, Update, and Delete notes.
- **Login Redirection**: After logging in, users are redirected to the `notes.index` page.
- **User-Specific Notes**: The `notes` table is connected to the `users` table via the `user_id` foreign key.
- **Pagination**: Notes are paginated for better usability.
- **Form Validation**: 
  - Input and textarea fields are validated using Laravel's validation rules.
  - `@old` directive ensures old input values are retained on validation errors.

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



