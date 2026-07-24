-- Practical Assessment System Database Setup
-- This file creates the database and all necessary tables

-- Create Database
CREATE DATABASE IF NOT EXISTS practical_assessment_db;
USE practical_assessment_db;

-- Create Users Table
CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    mobile VARCHAR(15) NOT NULL,
    role ENUM('Admin', 'Faculty', 'HOD', 'GFM', 'Student', 'Parent') NOT NULL,
    status ENUM('Active', 'Inactive') DEFAULT 'Active',
    photo LONGBLOB,
    zprn VARCHAR(50),
    roll_no VARCHAR(50),
    department VARCHAR(100),
    year VARCHAR(50),
    semester VARCHAR(50),
    division VARCHAR(10),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create Practicals Table
CREATE TABLE IF NOT EXISTS practicals (
    id INT PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(50) NOT NULL UNIQUE,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    department VARCHAR(100),
    year VARCHAR(50),
    semester VARCHAR(50),
    faculty_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (faculty_id) REFERENCES users(id)
);

-- Create Attendance Table
CREATE TABLE IF NOT EXISTS attendance (
    id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT NOT NULL,
    practical_id INT NOT NULL,
    date_of_attendance DATE NOT NULL,
    status ENUM('Present', 'Absent') DEFAULT 'Present',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES users(id),
    FOREIGN KEY (practical_id) REFERENCES practicals(id)
);

-- Create Assessment/Marks Table
CREATE TABLE IF NOT EXISTS assessments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT NOT NULL,
    practical_id INT NOT NULL,
    marks_obtained INT,
    total_marks INT DEFAULT 100,
    assessment_date DATE,
    assessment_type ENUM('Viva', 'Practical', 'Assignment') DEFAULT 'Practical',
    faculty_id INT,
    remarks TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES users(id),
    FOREIGN KEY (practical_id) REFERENCES practicals(id),
    FOREIGN KEY (faculty_id) REFERENCES users(id)
);

-- Create Audit Logs Table
CREATE TABLE IF NOT EXISTS audit_logs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    action VARCHAR(255) NOT NULL,
    module VARCHAR(100),
    description TEXT,
    old_value LONGTEXT,
    new_value LONGTEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Create Sample Admin User
INSERT INTO users (full_name, email, username, password, mobile, role, status) 
VALUES ('Administrator', 'admin@example.com', 'admin', MD5('admin123'), '0000000000', 'Admin', 'Active');

-- Create Indexes for Performance
CREATE INDEX idx_users_email ON users(email);
CREATE INDEX idx_users_username ON users(username);
CREATE INDEX idx_users_role ON users(role);
CREATE INDEX idx_attendance_student ON attendance(student_id);
CREATE INDEX idx_attendance_practical ON attendance(practical_id);
CREATE INDEX idx_assessments_student ON assessments(student_id);
CREATE INDEX idx_assessments_practical ON assessments(practical_id);
CREATE INDEX idx_audit_logs_user ON audit_logs(user_id);
