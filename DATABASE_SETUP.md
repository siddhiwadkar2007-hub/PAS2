# Practical Assessment System - Database Setup Guide

## Overview
The application encountered a database connection error because the database `practical_assessment_db` hasn't been created yet.

## Solution Steps

### Method 1: Using phpMyAdmin (Recommended)
1. Open XAMPP Control Panel and ensure **MySQL** is running
2. Navigate to `http://localhost/phpmyadmin` in your browser
3. Click on **"SQL"** tab at the top
4. Copy the entire contents of `database_setup.sql` file
5. Paste it into the SQL editor in phpMyAdmin
6. Click **"Go"** button to execute the SQL script
7. The database and all tables will be created automatically

### Method 2: Using Command Line
1. Open Command Prompt/PowerShell
2. Navigate to your MySQL bin directory:
   ```
   cd "D:\xampp\mysql\bin"
   ```
3. Run the following command:
   ```
   mysql -u root -p < "D:\xampp\htdocs\practical-assesment-system\database_setup.sql"
   ```
4. Press Enter when prompted for password (leave blank and just press Enter since XAMPP default has no password)

### What Gets Created
The SQL script creates:
- **Database**: `practical_assessment_db`
- **Tables**:
  - `users` - Stores all user data (Students, Faculty, Admin, etc.)
  - `practicals` - Practical session information
  - `attendance` - Student attendance records
  - `assessments` - Assessment/marks data
  - `audit_logs` - System activity logs

### Default Login
After setup, you can login with:
- **Username**: admin
- **Password**: admin123

## Testing the Connection
1. Navigate to `http://localhost/practical-assessment-system/test_connection.php`
2. You should see: "Database Connected Successfully"

## Troubleshooting
- **Error: "Unknown database"**: Make sure you've run the SQL setup script
- **Connection error**: Ensure XAMPP MySQL service is running
- **Permission denied**: Check your MySQL username/password in `config/database.php`

## Next Steps
1. Set up proper authentication in `config/auth.php`
2. Implement user registration and login logic
3. Add form submission handlers in the admin modules
4. Create report generation functionality

---
For questions or issues, refer to the database schema in `database_setup.sql`
