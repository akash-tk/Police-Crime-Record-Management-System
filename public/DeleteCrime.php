<?php

include('db_connect.php');

if (isset($_POST['dltc'])) {
    $Cno = $_POST['cno'];
    $Crno = $_POST['crno'];

    $sql = "DELETE FROM `crimes` WHERE `Crino` = '$Cno' AND `Crno` = '$Crno'";

    $rs = mysqli_query($conn, $sql);

    if (!$rs) {
        echo mysqli_error($conn);
    } else {
        header('Location: Crime.php');
    }
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>
<?php include('AddData.html'); ?>
<div class="form">
    <form method="POST" action="DeleteCrime.php">
        <div class="contain">
            <span id="title">
                <h1>Delete Crime</h1>
                <p>Please fill the details of crime to be deleted</p>
            </span>
            <hr>

            <label for="Name"><b>Criminal Number: </b></label>
            <input type="text" placeholder="Enter Criminal Number" name="cno" id="Name" required>
            <br>

            <label for="Rank"><b>Crime Number: </b></label>
            <input type="text" placeholder="Enter Crime Number" name="crno" id="Rank" required>
            <br>

            <a class=" button-1 btn btn-secondary btn-lg" href="Crime.php" role="button">Go Back</a>
            <button class=" button-1 btn btn-danger btn-lg" value="Save" name="dltc">Delete</button>
        </div>
    </form>
</div>
</body>

</html>