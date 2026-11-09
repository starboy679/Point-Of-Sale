# Al Dukkan – Smart Sales & Inventory Management System

A web-based sales and inventory management system designed to help small stores manage products, inventory, sales, and invoices efficiently.

## 🌐 Live Demo
https://dukkan.xo.je/

## ✨ Features

- User authentication and role-based access control.
- Dashboard with sales and inventory statistics.
- Product and category management.
- Inventory tracking and low-stock alerts.
- Point of Sale (POS) with shopping cart and checkout.
- Sales records and invoice details.
- Sales reports and top-selling products.

## 👥 User Roles

- **Admin:** Full system access and management.
- **Cashier:** Handles sales and POS operations.
- **Inventory Manager:** Manages inventory and products.

## 🛠️ Technologies

- PHP 8.2+
- Laravel 12
- MySQL
- HTML, CSS, JavaScript
- Bootstrap / Blade
- Vite

## 💻 Local Installation

1. Clone the repository:

   `git clone https://github.com/starboy679/Point-Of-Sale.git`

2. Enter the project directory:

   `cd Point-Of-Sale`

3. Install dependencies:

   `composer install`

4. Create your environment file:

   `cp .env.example .env`

5. Generate the application key:

   `php artisan key:generate`

6. Configure your database in `.env`.

7. Run migrations:

   `php artisan migrate`

8. Install frontend dependencies:

   `npm install`

9. Build frontend assets:

   `npm run build`

10. Start the development server:

    `php artisan serve`

## 🔒 Security

Never upload `.env` or expose database credentials and application keys.

## 📌 Repository

https://github.com/starboy679/Point-Of-Sale