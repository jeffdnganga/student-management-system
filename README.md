<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Hi there! I'm glad you're here :)

Thank you for checking out my repo on a simple Student Management System built using Laravel. Laravel is a web application framework with expressive, elegant syntax. I believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

To test out my project, kindly follow these steps;

Clone the repository into your local machine/computer.
Open phpMyAdmin and create a new database called 'student-management-system'
Open your favourite terminal in the project folder you cloned for this project and type this command 'php artisan migrate' to migrate/create the tables required by this system in the database you just created.
Navigate to the 'fee_payment_models' table and create a new trigger 'SET new.Fee_balance = new.Term_fee - new.Amount_paid' -> this trigger will automatically calculate the fees balance whenever a new fees amount is inserted in the table.
Finally, run 'php artisan serve' in the terminal to test out the proect on your favourite browser!
