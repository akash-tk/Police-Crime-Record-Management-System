<?php
session_start();
$error = "";
if (isset($_POST['loginbutton'])) {
    $Username = $_POST['uname'];
    $Pass = $_POST['pass'];
    extract($_POST);
    include 'db_connect.php';
    $sql = mysqli_query($conn, "SELECT * FROM admin where Username='$Username' and Pass='$Pass'");
    $row  = mysqli_fetch_array($sql);
    if (is_array($row)) {
        $_SESSION["uname"] = $row['Username'];
        $_SESSION["Pass"] = $row['Pass'];
        mysqli_query($conn, "UPDATE role SET id = 1 where name='role'");
        header("Location: Welcome.php");
    } else {
        $error = "Invalid Username or Password";
    }

}

if (isset($_POST['backbutton'])) {
    header("Location: Login.php");
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
       
        <form action="adminlogin.php" method="post">
            <h1>ADMIN LOGIN</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
            <?php } ?>
            <label for="username"><b>Username</b></label>
            <input type="text" name="uname" placeholder="Enter Username" id="username">
            <label for="password"><b>Password</b></label>
            <input type="password" name="pass" placeholder="Enter Password" id="password">
            <p style="color: #ff0033; text-align: center"><?php echo $error; ?></p>
            <input type="submit" name="loginbutton" value="Login">
            <input type="submit" name="backbutton" value="Previous Page">
        </form>
    </div>
</body>

</html>