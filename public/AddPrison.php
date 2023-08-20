<?php
include ('db_connect.php');

if (isset($_POST['bclkprison'])) {
	$prisonid = ($_POST['PrisonID']);
	$prisonname = ($_POST['PrisonName']);
	$prisontype = ($_POST['PrisonType']);
	$prisoncity = ($_POST['PrisonCity']);

	$sql = "INSERT INTO `prisons` (`prisonid`,`prisonname`,`prisontype`,`prisoncity`) VALUES ('$prisonid', '$prisonname', '$prisontype','$prisoncity')";

	$rs = mysqli_query($conn, $sql);

	if (!$rs) {
		echo mysqli_error($conn);
	} else {
		header("Location: Prison.php");
	}
}
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>

<?php include('AddData.html'); ?>

<div class="form">
	<form method="POST" action="AddPrison.php">
		<div class="contain">
			<span id="title">
				<h1>Add Prison</h1>
				<p>Please fill the details of the new prison</p>
			</span>
			<hr>

			<label for="Prison ID"><b>Prison ID: </b></label>
			<input type="text" placeholder="Enter Prison ID" name="PrisonID" id="Pid" required>
			<br>

			<label for="Prison Name"><b>Prison Name: </b></label>
			<input type="text" placeholder="Enter Prison Name" name="PrisonName" id="Pname" required>
			<br>

			<label for="Type"><b>Type: </b></label>
			<input type="text" placeholder="Enter Prison Type" name="PrisonType" id="Pty" required>
			<br>

			<label for="City"><b>City: </b></label>
			<input type="text" placeholder="Enter Prison City" name="PrisonCity" id="Pcty" required>

			<a class=" button-1 btn btn-secondary btn-lg" href="Prison.php" role="button">Go Back</a>
			<button  class=" button-1 btn btn-success btn-lg" value="Save" name="bclkprison">Save</button>
		</div>
	</form>
</div>

</body>

</html>