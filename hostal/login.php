<?php
session_start();
include("db.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check user in database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Verify password
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            header("Location: dashboard.php"); // Redirect to dashboard
            exit();
        } else {
            echo "<script>alert('Invalid password!'); window.location='login.html';</script>";
        }
    } else {
        echo "<script>alert('No user found with this email!'); window.location='login.html';</script>";
    }
}
?>

<!--CREATE DATABASE hostel_db;
USE hostel_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
-->