# PHP Beginner Projects

Welcome to the **PHP Beginner Projects** repository! This repository contains a collection of simple PHP projects designed for beginners to help you learn the fundamentals of PHP development. Each project is designed to help you understand key concepts like authentication, CRUD operations, and object-oriented programming.

## Projects

This repository includes the following projects:

### 1. **Auth System Demo**
   A basic authentication system built in PHP that demonstrates how to register, login, and manage users. This project will help you understand user authentication using sessions and simple form validation.

   **Key Features:**
   - User Registration (Sign Up)
   - User Login
   - Session Management
   - Password Hashing & Security

   **How to run:**
   - Set up a local PHP server or use XAMPP/LAMP.
   - Import the database schema from `auth_system.sql` into your MySQL database.
   - Edit the configuration file for your database connection (`config.php`).
   - Access the project through your browser at `localhost/auth_system/`.

### 2. **Library Management System**
   A simple library management system where users can manage books, borrow and return them. This project covers basic CRUD operations (Create, Read, Update, Delete) with a focus on book and user management.

   **Key Features:**
   - Add, Edit, and Delete Books
   - Book Search Functionality
   - Borrow & Return Books (Track Users' Borrowed Books)
   - Admin Panel for Managing Library Data

   **How to run:**
   - Set up a local PHP server or use XAMPP/LAMP.
   - Import the database schema from `library_management.sql` into your MySQL database.
   - Edit the configuration file for your database connection (`config.php`).
   - Access the project through your browser at `localhost/library_management/`.

### 3. **Real Estate Management System**
   A real estate management system that helps manage properties, agents, and clients. Users can view available properties, search for listings, and contact agents. It also includes an admin panel for adding and updating listings.

   **Key Features:**
   - Add, Edit, and Delete Properties
   - Property Listings with Search Filters
   - Admin Dashboard to Manage Properties & Agents
   - Simple Contact Form for Clients to Inquire About Listings

   **How to run:**
   - Set up a local PHP server or use XAMPP/LAMP.
   - Import the database schema from `real_estate_management.sql` into your MySQL database.
   - Edit the configuration file for your database connection (`config.php`).
   - Access the project through your browser at `localhost/real_estate_management/`.

## Installation

1. Clone the repository to your local machine:
   ```bash
   git clone https://github.com/yourusername/php-lessons.git
Set up a local PHP development environment:

Use a server like XAMPP, LAMP, or any other preferred PHP server.
Ensure you have a MySQL database server running.
Import the provided SQL files for each project into your MySQL database.

Configure your config.php file (usually contains database connection credentials).

Access each project by navigating to the folder in your browser, e.g., localhost/auth_system/, localhost/library_management/, or localhost/real_estate_management/.

## Technologies Used
- PHP 7.x+
- MySQL
- HTML/CSS (for front-end)

## Contributing
Feel free to fork this repository and contribute by submitting pull requests with bug fixes, improvements, or new features. If you have any questions or suggestions, don't hesitate to open an issue.

## License
This repository is open-source and available under the MIT License.
