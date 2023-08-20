<?php
include('db_connect.php');
if (isset($_POST['policebclk'])) {
    $Pid = $_POST['id'];
    $Pname = $_POST['Name'];
    $Pstation = $_POST['Pstation'];
    $PContact = $_POST['Contact'];

    // $image = $_FILES['image']['name'];
    // $image_tmp_name = $_FILES['image']['tmp_name'];
    // $image_size = $_FILES['image']['size'];
    // $image_folder = 'images/' . $image;

    // $sql = "INSERT INTO `police` (`pid`,`Poname`, `policestation`, `contact`, `image`) VALUES ('$Pid','$Pname',  '$Pstation', '$PContact', '$image')";
    $sql = "INSERT INTO `police` (`pid`,`Poname`, `policestation`, `contact`) VALUES ('$Pid','$Pname',  '$Pstation', '$PContact')";

    $rs = mysqli_query($conn, $sql);

    if (!$rs) {
        echo mysqli_error($conn);
    } else {
        // move_uploaded_file($image_tmp_name, $image_folder);
        header("Location: Police.php");
    }
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>

<?php include('AddData.html'); ?>

<div class="form">
    <form method="POST" action="AddPolice.php" enctype="multipart/form-data">
        <div class="contain">
            <span id="title">
                <h1>Add Police</h1>
                <p>Please fill the details of the new police</p>
            </span>
            <hr>

            <label for="id"><b>Police ID: </b></label>
            <input type="text" placeholder="Enter ID" name="id" id="id" required>
            <br>

            <label for="Name"><b>Name: </b></label>
            <input type="text" placeholder="Enter Name" name="Name" id="nm" required>
            <br>

            <label for="Pstation"><b>Police Station: </b></label>
            <input type="text" placeholder="Enter Police Station" name="Pstation" id="Ps" required>
            <br>

            <label for="Contact"><b>Contact Number: </b></label>
            <input type="text" placeholder="Enter Contact Number" name="Contact" id="ctc" required>
            <br>

            <!-- <label for="image"><b>Please upload a single picture of the police:</b></label>
            <input type="file" name="image" id="image" accept="image/png, image/jpeg" required> -->
            <a class=" button-1 btn btn-secondary btn-lg" href="Police.php" role="button">Go Back</a>
            <button class=" button-1 btn btn-success btn-lg" value="Save" name="policebclk">Save</button>
        </div>
    </form>
</div>
</body>

</html>