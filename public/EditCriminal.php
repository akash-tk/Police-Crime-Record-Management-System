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
                <h1>Edit Criminal Data</h1>
                <p>Select Criminal ID</p>
            </span>
            <?php
            include('db_connect.php');
            if (isset($_GET['submit'])) {
                $Cid = $_GET['id'];
                $Cname = $_GET['Name'];
                $Ccomm = $_GET['comm'];
                $Cadd = $_GET['add'];
                $CNat = $_GET['nat'];

                $query = mysqli_query($conn, "update criminal set Criname='$Cname', address='$Cadd', nationality='$CNat', crimes_comm='$Ccomm' where Crino='$Cid'");
            }
            $query = mysqli_query($conn, "select * from criminal");
            while ($row = mysqli_fetch_array($query)) {
            echo "<b><a href='EditCriminal.php?update={$row['Crino']}'>{$row['Crino']}</a></b> "; ?>&emsp;<?php } ?>
                <hr>
                <?php
                if (isset($_GET['update'])) {
                    $update = $_GET['update'];
                    $query1 = mysqli_query($conn, "select * from criminal where Crino=$update");
                    while ($row1 = mysqli_fetch_array($query1)) {
                        echo "<form class='form' method='get'>";
                        echo "<input class='input' type='hidden' name='id' value='{$row1['Crino']}' />";
                        echo "<label>" . "<b>Name:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='Name' value='{$row1['Criname']}' />";
                        echo "<br /><br />";
                        echo "<label>" . "<b>Address:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='add' value='{$row1['address']}' />";
                        echo "<br /><br />";
                        echo "<label>" . "<b>Nationality:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='nat' value='{$row1['nationality']}' />";
                        echo "<br /><br />";
                        echo "<label>" . "<b>Crimes Commited:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='comm' value='{$row1['crimes_comm']}' />";
                        echo "<br />";
                        echo "<input class='submit' type='submit' name='back' value='Go Back' />";
                        ?>&emsp;<?php
                        echo "<input class='submit' type='submit' name='submit' value='Update' />";
                        echo "</form>";
                    }
                }
                if (isset($_GET['submit'])) {
                    header("Location: Criminals.php");
                }
                if (isset($_GET['back'])) {
                    header("Location: Criminals.php");
                }
                ?>
        </div>
    </div><?php
            mysqli_close($conn);
            ?>
</body>

</html>