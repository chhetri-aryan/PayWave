# Paywave - Payroll Management System

## Overview

Paywave is a **payroll management system** built with **Laravel**, designed to automate and manage employee payments. The system includes features for processing payroll, storing payment logs, and generating reports. This project also supports **gender ratio analytics** and automates payments via a scheduled task system.

The system is intended for use in any organization looking to streamline their payroll process. It also includes PDF generation for payments reports and integrates with the **Task Scheduler** to process payments automatically.

---

## Features

- **Employee Management:** Add, edit, and view employee details including salary, department, and gender.
- **Payment Processing:** Automatically process and log employee payments based on salary.
- **Payment Logs:** Track payment status and errors in a log file.
- **Gender Ratio Analytics:** View gender ratio using a dynamic pie chart.
- **PDF Report Generation:** Generate and download a PDF report of employee payments.
- **Task Scheduler Integration:** Automate payment processing using Windows Task Scheduler.

---

## Installation

### Prerequisites

1. **PHP** (7.3 or higher)
2. **Composer**
3. **Laravel** (8.x or higher)
4. **XAMPP/WAMP** or any other local server environment (optional)
5. **Node.js** and **npm** (for compiling assets)

### Step-by-Step Installation

1. **Clone the Repository:**

   First, clone the repository to your local machine using Git:

   ```bash
   git clone https://github.com/yourusername/paywave.git
   cd paywave
Install Dependencies:

Run Composer to install PHP dependencies:

bash
Copy code
composer install
Then, install frontend dependencies with npm:

bash
Copy code
npm install
Set up the Environment:

Copy the .env.example file to .env:

bash
Copy code
cp .env.example .env
Generate Application Key:

Run the following command to generate the application key:

bash
Copy code
php artisan key:generate
Set Up the Database:

Open your .env file and configure your database connection settings. Make sure you have a local MySQL database ready and update the following parameters in .env:

makefile
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=paywave_db
DB_USERNAME=root
DB_PASSWORD=
Run Migrations:

Run the migrations to create the necessary tables:

bash
Copy code
php artisan migrate
Compile Assets:

Run npm to compile your frontend assets:

bash
Copy code
npm run dev
Usage
Running the Application
You can run the application locally by using Laravel's built-in development server:

bash
Copy code
php artisan serve
Visit http://127.0.0.1:8000 in your browser to see the app in action.

Payment Processing
To simulate and process employee payments:

Use the php artisan paywave:process-payments command to simulate processing payments. The command will log payment statuses and errors.

Set up a Windows Task Scheduler or Linux Cron Job to automate payment processing on a daily schedule.

Gender Ratio Analytics
View the gender ratio chart by navigating to the Analytics section. This chart is automatically updated based on the gender data of employees stored in the database.

PDF Generation
To generate a PDF report of employee payments, you can access the Payments section and click on the Download PDF button, or you can directly access it through the URL /payments/pdf.

This will generate a downloadable PDF of the payment records.

Task Scheduler
The task scheduler is used to automate the payment processing at regular intervals. If you're using Windows Task Scheduler, follow these steps:

Open Task Scheduler on your Windows machine.

Create a new task and in the Program/script field, enter the path to your php.exe (e.g., C:\xampp\php\php.exe).

In the Arguments field, enter the following:

bash
Copy code
artisan paywave:process-payments
Set the task to run daily or at your preferred interval.

Notes
Make sure to keep the application running for scheduled tasks to execute successfully.
You can modify the scheduling logic by editing the app/Console/Kernel.php file.
Contributing
We welcome contributions to improve Paywave! Please follow these steps to contribute:

Fork the repository.
Create a new branch for your feature or bugfix.
Commit your changes with a clear commit message.
Push your changes to your forked repository.
Open a pull request with a description of the changes.
License
This project is licensed under the MIT License - see the LICENSE file for details.

Acknowledgements
Laravel for the awesome framework.
Barryvdh/laravel-dompdf for PDF generation.
Chart.js for the gender ratio chart.
