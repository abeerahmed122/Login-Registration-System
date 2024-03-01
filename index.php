<!DOCTYPE HTML>
<html>
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form action="login.php" method="post">
    <lable for="username">Username</lable>
    <input  class="same"  id="username" type="text" placeholder="Enter your username"><br>
    <lable for="pass">Password</lable>
    <input class="same" id="pass" type="password" placeholder="Enter your password"><br>
    <input class="button" type="submit" value="Login" >
</form>
    <p>Don't have an account? <a href="signup.php">Sign up here</a></p>

</div>
</body>
</html>