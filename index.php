<?php
   session_start();
   include("connection.php");
   include("function.php");

   $user_data = $check_login($con);

?>


<!DOCTYPE html>
<head>
    <title>Portfolio 2</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <br>
    <h1>Welcome <?php echo $user_data['user_name'];></h1>
</body>
</html>