<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('logout.html');	
?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    #showcase {
        background-image: url('bg4.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 0 20px;
    }

    #showcase h1 {
		color: black;
		text-shadow: 2px 2px #fff;
		-webkit-text-stroke: 1px white;
		font-weight: 900;
		font-size: 40px;
		line-height: 2;
    }

    #showcase p {
        font-size: 27px;
        line-height: 2;
    }

	.btn {
		margin-bottom: 5px;
		border: none;
		outline: none;
		height: 50px;
		width: 300px;
  		background-color: rgba(0, 0, 0, 0.6);
		color: white;
		font-weight: 500;
		font-size: 25px;
		border-radius: 10px;
		transition: all 0.2s;
	}

	.btn:hover {
		cursor: pointer;
		color: black;
 		background-color: rgba(0, 75, 150, 0.6);
	}

	#content {
		position:relative;
	}

	.ribbon {
		position:absolute;
		top:0;
		left:0;
	}
</style>
<div id="content">
		<img src="logo.png" class="ribbon" alt="" />
	</div>
<header id="showcase">
    <h1>Welcome To Police Crime Record Management System</h1>
	<form method="POST" action="Police.php">
		<button class="btn"><i class="fa-solid fa-user-tie"></i> Police Information</button>
	</form>
	<form method="POST" action="Criminals.php">
		<button class="btn"><i class="fa-solid fa-user-ninja"></i>  Criminal Information</button>
	</form>
	<form method="POST" action="Crime.php">
		<button class="btn"><i class="fa-solid fa-handcuffs"></i> Crime Information</button>
	</form>	
	<form method="POST" action="Court.php">
		<button class="btn"><i class="fa-solid fa-scale-balanced"></i> Court Information</button>
	</form>
	<form method="POST" action="Prison.php">
		<button class="btn"><i class="fa-solid fa-building-shield"></i> Prison Information</button>
	</form>
	
</header>
</body>

</html>