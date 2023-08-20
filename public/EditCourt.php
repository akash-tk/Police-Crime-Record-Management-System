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
                <h1>Edit Court Data</h1>
                <p>Select Court ID</p>
            </span>

            <?php
            include('db_connect.php');
            if (isset($_GET['submit'])) {
                $courtid = ($_GET['CourtID']);
                $courtname = ($_GET['CourtName']);
                $courttype = ($_GET['CourtType']);
                $courtcity = ($_GET['CourtCity']);

                $query = mysqli_query($conn, "update courts set courtname='$courtname', courttype='$courttype', courtcity='$courtcity' where courtid='$courtid'");
            }
            $query = mysqli_query($conn, "select * from courts");
            while ($row = mysqli_fetch_array($query)) {
            echo "<b><a href='EditCourt.php?update={$row['courtid']}'>{$row['courtid']}</a></b> "; ?>&emsp;<?php } ?>
                <hr>
                <?php
                if (isset($_GET['update'])) {
                    $update = $_GET['update'];
                    $query1 = mysqli_query($conn, "select * from courts where courtid=$update");
                    while ($row1 = mysqli_fetch_array($query1)) {
                        echo "<form class='form' method='get'>";
                        echo "<input class='input' type='hidden' name='CourtID' value='{$row1['courtid']}' />";
                        echo "<label>" . "<b>Name:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='CourtName' value='{$row1['courtname']}' />";
                        echo "<br /><br />";
                        echo "<label>" . "<b>Type:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='CourtType' value='{$row1['courttype']}' />";
                        echo "<br /><br />";
                        echo "<label>" . "<b>City:</b>" . "</label>" . "<br />";
                        echo "<input class='input' type='text' name='CourtCity' value='{$row1['courtcity']}' />";
                        echo "<br />";
                        echo "<input class='submit' type='submit' name='back' value='Go Back' />";
                        ?>&emsp;<?php
                        echo "<input class='submit' type='submit' name='submit' value='Update' />";
                        echo "</form>";
                    }
                }
                if (isset($_GET['submit'])) {
                    header("Location: Court.php");
                }
                if (isset($_GET['back'])) {
                    header("Location: Court.php");
                }
                ?>
        </div>
    </div><?php
            mysqli_close($conn);
            ?>
</body>

</html>