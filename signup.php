<?php
    session_start();
    include("connection.php");
    include("function.php");

    $user_data = $check_login($con);

?>


<!DOCTYPE html>
<head>
    <title>Sign Up</title>
</head>
<body>
<div id="box">
<div>Sign Up</div>
    <input type="text" name="user_name">
    <br>
    <input type="password" name="password">
    <input type="submit" value="Login">

    <a href="signup.php">Sign up!</a>
</div>
</body>
</html>