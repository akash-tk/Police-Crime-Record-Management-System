<?php

include('db_connect.php');
include('role.php');

$sql = 'SELECT * FROM criminal';

$result = mysqli_query($conn, $sql);

$criminals = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>

<div id="main-div-1">
    <!--Heading-->
    <div>
        <h1>&nbsp;CRIMINALS</h1>
    </div>

    <div id="div-1">
        <div class="dropdown">
        </div>
        <div id="div-button-1">
            <a class=" button-1 btn btn-success btn-lg" href="AddCriminal.php" role="button">Add Data</a>
        </div>
        &nbsp;
        &nbsp;
        &nbsp;
        <div id="div-button-1">
            <a class=" button-1 btn btn-danger btn-lg" href="DeleteCriminal.php" role="button">Delete Data</a>
        </div>
        &nbsp;
        &nbsp;
        &nbsp;
        <div id="div-button-1">
            <a class=" button-1 btn btn-primary btn-lg" href="EditCriminal.php" role="button">Edit Data</a>
        </div>
        &nbsp;
        &nbsp;
        &nbsp;
        <div id="div-button-1">
            <a class=" button-1 btn btn-secondary btn-lg" href="OldCriminal.php" role="button">Old Data</a>
        </div>
    </div>

</div>

<div id="main-div-2">

    <?php foreach ($criminals as $criminal) { ?>
        <div class="div-2">
            <p><b>Criminal ID: </b><?php echo htmlspecialchars($criminal['Crino']); ?></p>
            <p><b>Criminal Name: </b><?php echo htmlspecialchars($criminal['Criname']); ?></p>
            <p><b>Address: </b><?php echo htmlspecialchars($criminal['address']); ?></p>
            <p><b>Nationality: </b><?php echo htmlspecialchars($criminal['nationality']); ?></p>
            <p><b>Crimes Comitted: </b><?php echo htmlspecialchars($criminal['crimes_comm']); ?></p>
        </div>
    <?php } ?>

</div>


</body>

</html>