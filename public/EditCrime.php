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
                <h1>Edit Crime Data</h1>
                <p>Select Crime ID</p>
            </span>
            <?php
            include('db_connect.php');
            if (isset($_GET['submit'])) {
                $crino = $_GET['CriNo'];
                $criname = $_GET['CriName'];
                $crno = $_GET['CrimeNo'];
                $crname = $_GET['CrimeCategory'];
                $crdate = $_GET['CrimeDate'];
                
                $query = mysqli_query($conn, "update crimes set Criname='$criname', Crno='$crno', Crname='$crname', Crdate='$crdate' where Crino='$crino'");

            }
            $query = mysqli_query($conn, "select * from crimes");
            while ($row = mysqli_fetch_array($query)) {
            echo "<b><a href='EditCrime.php?update={$row['Crino']}'>{$row['Crino']}</a></b> "; ?>&emsp;<?php } ?>
                <hr>
                <?php
                if (isset($_GET['update'])) {
                    $update = $_GET['update'];
                    $query1 = mysqli_query($conn, "select * from crimes where Crino=$update");
                    while ($row1 = mysqli_fetch_array($query1)) {
                        echo "<form class='form' method='get'>";
                        echo "<input class='input' type='hidden' name='CriNo' value='{$row1['Crino']}' />";
                        echo "<label>" . "<b>Criminal Name:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='CriName' value='{$row1['Criname']}' />";
                        echo "<br /><br />";
                        echo "<label>" . "<b>Crime Number:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='CrimeNo' value='{$row1['Crno']}' />";
                        echo "<br /><br />";
                        echo "<label>" . "<b>Crime Category:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='CrimeCategory' value='{$row1['Crname']}' />";
                        echo "<br /><br />";
                        echo "<label>" . "<b>Date of Crime:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='CrimeDate' value='{$row1['Crdate']}' />";
                        echo "<br />";
                        echo "<input class='submit' type='submit' name='back' value='Go Back' />";
                        ?>&emsp;<?php
                        echo "<input class='submit' type='submit' name='submit' value='Update' />";
                        echo "</form>";
                    }
                }
                if (isset($_GET['submit'])) {
                    header("Location: Crime.php");
                }
                if (isset($_GET['back'])) {
                    header("Location: Crime.php");
                }
                ?>
        </div>
    </div><?php
            mysqli_close($conn);
            ?>
</body>

</html>