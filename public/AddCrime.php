<?php

include("db_connect.php");

if (isset($_POST['bclkcrime'])) {
    $crino = $_POST['CriminalNo'];
    $criname = $_POST['CriminalName'];
    $crno = $_POST['CrimeNo'];
    $crname = $_POST['CrimeCategory'];
    $crdate = $_POST['CrimeDate'];

    $sql = "INSERT INTO `crimes` (`Crino`, `Criname`, `Crno`, `Crname`, `Crdate`) VALUES ('$crino', '$criname', '$crno', '$crname', '$crdate')";

    $rs = mysqli_query($conn, $sql);

    if (!$rs) {
        echo mysqli_error($conn);
    } else {
        header("Location: Crime.php");
    }
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>

<?php include('AddData.html'); ?>

<div class="form">
    <form method="POST" action="AddCrime.php">
        <div class="contain">
            <span id="title">
                <h1>Add Crime</h1>
                <p>Please fill the details of the cime committed by the criminal</p>
            </span>
            <hr>

            <label for="Criminal Number"><b>Criminal Number: </b></label>
            <input type="text" placeholder="Enter Criminal Number" name="CriminalNo" id="Criminal Number" required>
            <br>

            <label for="Criminal Name"><b>Criminal Name: </b></label>
            <input type="text" placeholder="Enter Criminal Name" name="CriminalName" id="Criminal Name" required>
            <br>

            <label for="Crime Number"><b>Crime Number: </b></label>
            <input type="text" placeholder="Enter Crime Number" name="CrimeNo" id="Crime Number" required>
            <br>

            <label for="Category"><b>Crime Category: </b></label>
            <input type="text" placeholder="Enter Name of Category" name="CrimeCategory" id="Category" required>
            <br>

            <label for="Date"><b>Date of Crime: </b></label>
            <input type="text" placeholder="Enter Date of Crime:YYYY-MM-DD" name="CrimeDate" id="Date" required>
            <br>

            <a class=" button-1 btn btn-secondary btn-lg" href="Crime.php" role="button">Go Back</a>
			<button  class=" button-1 btn btn-success btn-lg" value="Save" name="bclkcrime">Save</button>
        </div>
    </form>
</div>

</body>

</html>