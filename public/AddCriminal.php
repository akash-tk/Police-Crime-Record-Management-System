<?php

$msg="";

include ('db_connect.php');
if(isset($_POST['bclkcri']))
{
	$Crimno = $_POST['No'];
	$Crimname = $_POST['Name'];
	$Ccommited = $_POST['Ccommited'];
	$Adress = $_POST['Adress'];
	$Nationality = $_POST['Nationality'];

	$sql = "INSERT INTO `criminal` (`Crino`, `Criname`, `crimes_comm`,`address`,`nationality`) VALUES ('$Crimno', '$Crimname', '$Ccommited', '$Adress', '$Nationality')";

	$rs = mysqli_query($conn, $sql);

	

	if(!$rs)
    {
        echo mysqli_error($conn);
    }
    else
    {
		header("Location: Criminals.php");
    }
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>

<?php include('AddData.html'); ?>

<div class="form">
    	<form method="Post" action="AddCriminal.php" enctype="multipart/form-data">
    		<div class = "contain">
				<span id="title">
    			<h1>Add Criminal</h1>
    			<p>Please fill the details of the new criminal</p>
				</span>
    			<hr>
				<label for="No"><b>Criminal Number: </b></label>
    			<input type="text" placeholder="Enter Criminal Number" name="No" id="No" required>
				<br>

    			<label for="Name"><b>Criminal Name: </b></label>
    			<input type="text" placeholder="Enter Name" name="Name" id="Name" required>
    			<br>

			    <label for="Ccommited"><b>Crimes Commited: </b></label>
			    <input type="text" placeholder="Enter Crimes Commited" name="Ccommited" id="Ccommited" required>
			    <br>

			    <label for="Adress"><b>Adress: </b></label>
			    <input type="text" placeholder="Enter Adress" name="Adress" id="Adress" required>
			    <br>

			    <label for="Nationality"><b>Nationality: </b></label>
			    <input type="text" placeholder="Enter Nationality" name="Nationality" id="Nationality" required>

			   
			    <a class=" button-1 btn btn-secondary btn-lg" href="Criminals.php" role="button">Go Back</a>
                <button  class=" button-1 btn btn-success btn-lg" value="Save" name="bclkcri">Save</button>
			</div>
		</form>
	</div>
</body>
</html>