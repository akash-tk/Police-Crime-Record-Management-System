<?php

include('db_connect.php');
include('role.php');

$sql = 'SELECT * FROM courts';

$result = mysqli_query($conn, $sql);

$courts = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>

<div id="main-div-1">
    <!--Heading-->
    <div>
        <h1>&nbsp;COURTS</h1>
    </div>
    <?php if ($role == 1 || $role == 3) { ?>
        <div id="div-1">
            <div class="dropdown">
            </div>
            <div id="div-button-1">
                <a class=" button-1 btn btn-success btn-lg" href="AddCourt.php" role="button">Add Data</a>
            </div>
            &nbsp;
            &nbsp;
            &nbsp;
            <div id="div-button-1">
                <a class=" button-1 btn btn-danger btn-lg" href="DeleteCourt.php" role="button">Delete Data</a>
            </div>
            &nbsp;
            &nbsp;
            &nbsp;
            <div id="div-button-1">
                <a class=" button-1 btn btn-primary btn-lg" href="EditCourt.php" role="button">Edit Data</a>
            </div>
        </div>
    <?php } ?>
</div>

<div id="main-div-2">

    <?php foreach ($courts as $court) { ?>
        <div class="div-2">
            <p><b>Court ID: </b><?php echo htmlspecialchars($court['courtid']); ?></p>
            <p><b>Court Name: </b><?php echo htmlspecialchars($court['courtname']); ?></p>
            <p><b>Type: </b><?php echo htmlspecialchars($court['courttype']); ?></p>
            <p><b>City: </b><?php echo htmlspecialchars($court['courtcity']); ?></p>
        </div>
    <?php } ?>

</div>


</body>

</html>