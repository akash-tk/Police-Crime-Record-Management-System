<?php
session_start();
$success = "";
$message = "";
include ('db_connect.php');
if (isset($_POST['createbutton'])) {
    $Username = $_POST['uname'];
	$Fullname = $_POST['fname'];
    $Pass = $_POST['pass'];
	$email = $_POST['email'];
    $sql = "INSERT INTO `users` (`Username`,`Fullname`,`Pass`,`email`) VALUES ('$Username','$Fullname','$Pass','$email')";
	$rs = mysqli_query($conn, $sql);
    if (!$rs) {
        echo mysqli_error($conn);
    } else {
		 $success = "Registration Successful.";
		 $message = "Goto Login Page";
		
    }
    
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Police Crime Record Management System</title>
    <link rel="stylesheet" type="text/css" href="Createuser.css">
</head>

<body>
    <div class="loginbox">
        <form action="Createuser.php" method="post">
            <h1>Create New User</h1>
			<label for="fullname"><b>Name</b></label>
           <input type="text" name="fname" placeholder="Enter Your Name" id="fullname" required>
           <label for="username"><b>Username</b></label>
           <input type="text" name="uname" placeholder="Enter New Username" id="username" required>
           <label for="password"><b>Password</b></label>
           <input type="password" name="pass" placeholder="Enter Strong Password" id="password" required>
		    <label for="email"><b>E-mail ID</b></label>
           <input type="text" name="email" placeholder="Enter e-mail id" id="email" required>
			<p style="color: #0000ff; text-align: center"><?php echo $success; ?></p>
			<p style="color: #0000ff; text-align: center"><?php echo $message; ?></p>
            <input type="submit" name="createbutton" value="Create User">
			 
        </form>
		<form action="Login.php" method="post">
			<input type="submit" name="login" value="Login Page">
		</form>
    </div>
</body>

</html>