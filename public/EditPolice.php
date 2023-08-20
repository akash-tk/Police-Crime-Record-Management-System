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
                <h1>Edit Police Data</h1>
                <p>Select Police ID</p>
            </span>

            <?php
            include('db_connect.php');
            if (isset($_GET['submit'])) {
                $Pid = $_GET['id'];
                $Pname = $_GET['Name'];
                $Pstation = $_GET['Pstation'];
                $PContact = $_GET['Contact'];

                $query = mysqli_query($conn, "update police set Poname='$Pname', policestation='$Pstation', contact='$PContact' where pid='$Pid'");
            }
            $query = mysqli_query($conn, "select * from police");
            while ($row = mysqli_fetch_array($query)) {
            echo "<b><a href='EditPolice.php?update={$row['pid']}'>{$row['pid']}</a></b> "; ?>&emsp;<?php } ?>
                <hr>
                <?php
                if (isset($_GET['update'])) {
                    $update = $_GET['update'];
                    $query1 = mysqli_query($conn, "select * from police where pid=$update");
                    while ($row1 = mysqli_fetch_array($query1)) {
                        echo "<form class='form' method='get'>";
                        echo "<input class='input' type='hidden' name='id' value='{$row1['pid']}' />";
                        echo "<label>" . "<b>Name:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='Name' value='{$row1['Poname']}' />";
                        echo "<br /><br />";
                        echo "<label>" . "<b>Police Station:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='Pstation' value='{$row1['policestation']}' />";
                        echo "<br /><br />";
                        echo "<label>" . "<b>Contact:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='Contact' value='{$row1['contact']}' />";
                        echo "<br />";
                        echo "<input class='submit' type='submit' name='back' value='Go Back' />";
                        ?>&emsp;<?php
                        echo "<input class='submit' type='submit' name='submit' value='Update' />";
                        echo "</form>";
                    }
                }
                if (isset($_GET['submit'])) {
                    header("Location: Police.php");
                }
                if (isset($_GET['back'])) {
                    header("Location: Police.php");
                }
                ?>
        </div>
    </div><?php
            mysqli_close($conn);
            ?>
</body>

</html>