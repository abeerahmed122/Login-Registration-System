<?php
session_start();
global $connection;
include 'db.php';
include 'User.php';

$user = new User($connection);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];


        if ($user->verifyUser($username, $password)) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
            echo "Invalid username or password";
        }
    }

}
