# PHP MySQL CRUD Application

## Student Name

**Nityendra Singh Panwar**

---

## Aim

Write server-side scripts in PHP to perform form validation and create a database-driven application using PHP and MySQL to execute **Insert, Update, Delete, and Search** operations.

---

## Objectives

* Understand the fundamentals of **Server-Side Scripting**
* Learn **database connectivity using PHP and MySQL**
* Perform **Insert, Update, Delete, and Search** operations on a database

---

## Theory

### PHP Architecture

PHP follows a **Client–Server Architecture**:

1. The user sends a request through a web browser
2. The request is forwarded to the web server (**Apache in XAMPP**)
3. The **PHP Engine** processes the request
4. If required, PHP communicates with the **MySQL Database**
5. The processed response (**HTML/CSS/JS**) is returned to the browser

---

## Steps for Database Connectivity in PHP

### 1. Start XAMPP Services

Ensure the following services are running:

* Apache
* MySQL

---

### 2. Create Database

Use **phpMyAdmin** to create the required database.

---

### 3. Establish Connection in PHP

```php
$conn = mysqli_connect("localhost", "root", "", "database_name");
```

---

### 4. Check Connection

```php
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
```

---

### 5. Execute SQL Queries

Perform database operations such as:

* `INSERT`
* `UPDATE`
* `DELETE`
* `SELECT`

---

### 6. Close Database Connection

```php
mysqli_close($conn);
```

---

## Expected Outcome

A fully functional PHP-MySQL web application capable of performing CRUD operations with proper server-side validation.

---

## Run the Application

Start Apache and MySQL in XAMPP, then access the project via:

```bash
http://localhost/your_project_folder
```
