<?php
session_start();
global $connection;
include 'db.php';
include 'User.php';

$user = new User($connection);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $password = $_POST['password'];

    if ($user->createusers($username, $fullname, $email, $birthdate, $password)) {
        echo "User registered successfully";

    } else {
        echo "Error registering user";
    }
}


