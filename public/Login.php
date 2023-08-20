<?php
session_start();
if (isset($_POST['adminbutton'])) {
    header("Location: adminlogin.php");
}
if (isset($_POST['policebutton'])) {
    header("Location: policelogin.php");
}
if (isset($_POST['courtbutton'])) {
    header("Location: courtlogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Police Crime Record Management System</title>
    <link rel="stylesheet" type="text/css" href="Login.css">
</head>

<body>
    <div class="loginbox">
        <img src="avatar.jpg" class="avatar">
       
        <form action="" method="post">
            <h1>Police Crime Record</h1>
            <h1>Management System</h1>
            &nbsp;
            <h1>LOGIN</h1>
            <input type="submit" name="adminbutton" value="Chief Admin">
            <input type="submit" name="policebutton" value="Police Staff">
            <input type="submit" name="courtbutton" value="Court Staff">
        </form>
    </div>
</body>

</html>