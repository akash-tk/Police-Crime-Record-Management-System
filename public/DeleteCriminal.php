<?php

include('db_connect.php');

if (isset($_POST['dltc'])) {
    $Cno = $_POST['cno'];

    $sql = "DELETE FROM `criminal` WHERE `Crino` = '$Cno'";

    $rs = mysqli_query($conn, $sql);

    if (!$rs) {
        echo mysqli_error($conn);
    } else {
        header('Location: Criminals.php');
    }
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>
<?php include('AddData.html'); ?>
<div class="form">
    <form method="POST" action="DeleteCriminal.php">
        <div class="contain">
            <span id="title">
                <h1>Delete Criminal</h1>
                <p>Please fill the details of criminal to be deleted</p>
            </span>
            <hr>

            <label for="Name"><b>Criminal ID: </b></label>
            <input type="text" placeholder="Enter Criminal ID" name="cno" id="Name" required>
            <br>

            <a class=" button-1 btn btn-secondary btn-lg" href="Criminals.php" role="button">Go Back</a>
            <button class=" button-1 btn btn-danger btn-lg" value="Save" name="dltc">Delete</button>
        </div>
    </form>
</div>
</body>

</html>