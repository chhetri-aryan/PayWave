# Paywave - Payroll Management System
## Overview
Paywave is a **payroll management system** built with **Laravel**, designed to automate and manage employee payments. The system includes features for processing payroll, storing payment logs, and generating reports. This project also supports **gender ratio analytics** and automates payments via a scheduled task system.
The system is intended for any organization looking to streamline their payroll process. It also includes PDF generation for payment reports and integrates with the **Task Scheduler** to process payments automatically.
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
