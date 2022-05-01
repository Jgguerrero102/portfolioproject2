<?php
    session_start();
    include("connection.php");
    include("function.php");

    $user_data = $check_login($con);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username= $_POST['user_name'];
        $$_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            $user_id= random_num(20);
            $query = "insert into users (user_id,user_name,password) values ($user_id,$user_name,$password)";
            mysqli_query($query);
            header("Location: login.php");
        } else {
            echo "Please enter valid info";
        }
    }

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