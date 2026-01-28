CREATE DATABASE workforce_db;
USE workforce_db;

CREATE TABLE employees (
 employee_id INT PRIMARY KEY,
 name VARCHAR(50),
 shift VARCHAR(20)
);

CREATE TABLE tasks (
 task_id INT PRIMARY KEY,
 task_name VARCHAR(50)
);

CREATE TABLE attendance (
 id INT AUTO_INCREMENT PRIMARY KEY,
 employee_id INT,
 task_id INT,
 hours_worked INT,
 completion_status VARCHAR(20),
 work_date DATE
);