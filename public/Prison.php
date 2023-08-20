<?php

include('db_connect.php');
include('role.php');

$sql = 'SELECT * FROM prisons';

$result = mysqli_query($conn, $sql);

$prisons = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>

<div id="main-div-1">
    <!--Heading-->
    <div>
        <h1>&nbsp;PRISONS</h1>
    </div>
    <?php if ($role == 1 || $role == 2) { ?>
        <div id="div-1">
            <div class="dropdown">
            </div>
            <div id="div-button-1">
                <a class=" button-1 btn btn-success btn-lg" href="AddPrison.php" role="button">Add Data</a>
            </div>
            &nbsp;
            &nbsp;
            &nbsp;
            <div id="div-button-1">
                <a class=" button-1 btn btn-danger btn-lg" href="DeletePrison.php" role="button">Delete Data</a>
            </div>
            &nbsp;
            &nbsp;
            &nbsp;
            <div id="div-button-1">
                <a class=" button-1 btn btn-primary btn-lg" href="EditPrison.php" role="button">Edit Data</a>
            </div>
        </div>
    <?php } ?>
</div>


<div id="main-div-2">

    <?php foreach ($prisons as $prison) { ?>
        <div class="div-2">
            <p><b>Prison ID: </b><?php echo htmlspecialchars($prison['prisonid']); ?></p>
            <p><b>Prison Name: </b><?php echo htmlspecialchars($prison['prisonname']); ?></p>
            <p><b>Type: </b><?php echo htmlspecialchars($prison['prisontype']); ?></p>
            <p><b>City: </b><?php echo htmlspecialchars($prison['prisoncity']); ?></p>
        </div>
    <?php } ?>

</div>


</body>

</html>