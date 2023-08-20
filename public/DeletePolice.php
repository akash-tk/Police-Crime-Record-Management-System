<?php

include('db_connect.php');

if (isset($_POST['dltc'])) {
    $Cno = $_POST['cno'];

    $sql = "DELETE FROM `police` WHERE `pid` = '$Cno'";

    $rs = mysqli_query($conn, $sql);

    if (!$rs) {
        echo mysqli_error($conn);
    } else {
        header('Location: Police.php');
    }
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>
<?php include('AddData.html'); ?>
<div class="form">
    <form method="POST" action="DeletePolice.php">
        <div class="contain">
            <span id="title">
                <h1>Delete Police</h1>
                <p>Please fill the details of police to be deleted</p>
            </span>
            <hr>

            <label for="Name"><b>Police ID: </b></label>
            <input type="text" placeholder="Enter Police ID" name="cno" id="Name" required>
            <br>

            <a class=" button-1 btn btn-secondary btn-lg" href="Police.php" role="button">Go Back</a>
            <button class=" button-1 btn btn-danger btn-lg" value="Save" name="dltc">Delete</button>
        </div>
    </form>
</div>
</body>

</html>