<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
</head>

<?php include('header.html'); ?>

<?php include('EditData.html'); ?>


<body>
    <div class="form">
        <div class="contain">
            <span id="title">
                <h1>Edit Prison Data</h1>
                <p>Select Prison ID</p>
            </span>

            <?php
            include('db_connect.php');
            if (isset($_GET['submit'])) {
                $prisonid = ($_GET['PrisonID']);
	            $prisonname = ($_GET['PrisonName']);
	            $prisontype = ($_GET['PrisonType']);
	            $prisoncity = ($_GET['PrisonCity']);

                $query = mysqli_query($conn, "update prisons set prisonname='$prisonname', prisontype='$prisontype', prisoncity='$prisoncity' where prisonid='$prisonid'");
                
            }
            $query = mysqli_query($conn, "select * from prisons");
            while ($row = mysqli_fetch_array($query)) {
            echo "<b><a href='EditPrison.php?update={$row['prisonid']}'>{$row['prisonid']}</a></b> "; ?>&emsp;<?php } ?>
                <hr>
                <?php
                if (isset($_GET['update'])) {
                    $update = $_GET['update'];
                    $query1 = mysqli_query($conn, "select * from prisons where prisonid=$update");
                    while ($row1 = mysqli_fetch_array($query1)) {
                        echo "<form class='form' method='get'>";
                        echo "<input class='input' type='hidden' name='PrisonID' value='{$row1['prisonid']}' />";
                        echo "<label>" . "<b>Name:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='PrisonName' value='{$row1['prisonname']}' />";
                        echo "<br /><br />";
                        echo "<label>" . "<b>Type:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='PrisonType' value='{$row1['prisontype']}' />";
                        echo "<br /><br />";
                        echo "<label>" . "<b>City:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='PrisonCity' value='{$row1['prisoncity']}' />";
                        echo "<br />";
                        echo "<input class='submit' type='submit' name='back' value='Go Back' />";
                        ?>&emsp;<?php
                        echo "<input class='submit' type='submit' name='submit' value='Update' />";
                        echo "</form>";
                    }
                }
                if (isset($_GET['submit'])) {
                    header("Location: Prison.php");
                }
                if (isset($_GET['back'])) {
                    header("Location: Prison.php");
                }
                ?>
        </div>
    </div><?php
            mysqli_close($conn);
            ?>
</body>

</html>