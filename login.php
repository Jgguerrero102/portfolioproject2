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
            $query = "select * from users where user_nname = '$user_name' limit 1";
            $result= mysqli_query($con, $query);

            if($result){
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data ['password'] === $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id']
                        header("Location: login.php");
                        die;
                    }
                }
            }
        } else {
            echo "Please enter valid info";
        }
    }

?>


<!DOCTYPE html>
<head>
    <title>Login</title>
</head>
<body>
<div id="box">
<div>Login</div>
    <input type="text" name="user_name">
    <br>
    <input type="password" name="password">
    <input type="submit" value="Login">

    <a href="login.php">Login</a>
</div>
</body>
</html>