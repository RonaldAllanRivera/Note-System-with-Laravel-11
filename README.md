# Notes Web Application

This is a simple web application for managing notes, built using **Laravel 11**. It demonstrates CRUD functionality with user authentication and validation.

## Features  
- **Authentication**:  
  Implemented using [Laravel Breeze](https://laravel.com/docs/11.x/starter-kits#laravel-breeze) for secure and seamless login, registration, and password management.

- **CRUD Operations**:  
  Fully functional Create, Read, Update, and Delete operations for both **notes** and **notebooks**.

- **User-Specific Notes and Notebooks**:  
  - **Notes**: Linked to users via the `user_id` foreign key in the `notes` table.  
  - **Notebooks**: Linked to users via the `user_id` foreign key in the `notebooks` table.  
  - **Notebook-Note Relationship**: Notes are linked to notebooks via the `notebook_id` foreign key in the `notes` table.  
  - **Categorization**: Each note is categorized under a specific notebook, acting as its category.

- **Login Redirection**:  
  Upon successful login, users are automatically redirected to the `notes.index` page.

- **Pagination**:  
  Notes are displayed with pagination, enhancing both navigation and performance.

- **Form Validation**:  
  - Input and textarea fields are validated using Laravel’s powerful validation rules.  
  - The `@old` directive is used to retain previously entered values, ensuring a seamless user experience in case of validation errors.


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