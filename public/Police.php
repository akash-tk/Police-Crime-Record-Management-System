<?php

include('db_connect.php');
include('role.php');

$sql = 'SELECT * FROM police';

$result = mysqli_query($conn, $sql);

$polices = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>

<div id="main-div-1">
    <!--Heading-->
    <div>
        <h1>&nbsp;POLICE</h1>
    </div>
    <?php if ($role == 1 || $role == 2) { ?>
        <div id="div-1">
            <div id="div-button-1">
                <a class=" button-1 btn btn-success btn-lg" href="AddPolice.php" role="button">Add Data</a>
            </div>
            &nbsp;
            &nbsp;
            &nbsp;
            <div id="div-button-1">
                <a class=" button-1 btn btn-danger btn-lg" href="DeletePolice.php" role="button">Delete Data</a>
            </div>
            &nbsp;
            &nbsp;
            &nbsp;
            <div id="div-button-1">
                <a class=" button-1 btn btn-primary btn-lg" href="EditPolice.php" role="button">Edit Data</a>
            </div>
        </div>
    <?php } ?>
</div>


<div id="main-div-2">

    <?php foreach ($polices as $police) { ?>
        <div class="div-2">
            <!-- <img src="images/<?php echo htmlspecialchars($police['image']); ?>" alt="" width=" 150" height="150"> -->
            <p><b>Police ID: </b><?php echo htmlspecialchars($police['pid']); ?></p>
            <p><b>Name: </b><?php echo htmlspecialchars($police['Poname']); ?></p>
            <p><b>Police Station: </b><?php echo htmlspecialchars($police['policestation']); ?></p>
            <p><b>Contact: </b><?php echo htmlspecialchars($police['contact']); ?></p>
        </div>
    <?php } ?>

</div>


</body>

</html>