<?php

include ('db_connect.php');
if (isset($_POST['bclkcourt'])) {
    $courtid = ($_POST['CourtID']);
    $courtname = ($_POST['CourtName']);
    $courttype = ($_POST['CourtType']);
    $courtcity = ($_POST['CourtCity']);

    $sql = "INSERT INTO `courts` (`courtid`,`courtname`,`courttype`,`courtcity`) VALUES ('$courtid', '$courtname', '$courttype','$courtcity')";

    $rs = mysqli_query($conn, $sql);

    if (!$rs) {
        echo mysqli_error($conn);
    } else {
        header("Location: Court.php");
    }
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>

<?php include('AddData.html'); ?>

<div class="form" method="POST" action="AddCourt.php">
    <form method="POST" action="AddCourt.php">
        <div class="contain">
            <span id="title">
                <h1>Add Court</h1>
                <p>Please fill the details of the new court</p>
            </span>
            <hr>

            <label for="Cid"><b>Court ID: </b></label>
            <input type="text" placeholder="Enter Court ID" name="CourtID" id="Cid" required>
            <br>

            <label for="Cname"><b>Court Name: </b></label>
            <input type="text" placeholder="Enter Court Name" name="CourtName" id="Cname" required>
            <br>

            <label for="Cty"><b>Type: </b></label>
            <input type="text" placeholder="Enter Court Type" name="CourtType" id="Cty" required>
            <br>

            <label for="Ccty"><b>City: </b></label>
            <input type="text" placeholder="Enter Court City" name="CourtCity" id="Ccty" required>
            <br>

            <a class=" button-1 btn btn-secondary btn-lg" href="Court.php" role="button">Go Back</a>
			<button  class=" button-1 btn btn-success btn-lg" value="Save" name="bclkcourt">Save</button>
        </div>
    </form>
</div>

</body>

</html>