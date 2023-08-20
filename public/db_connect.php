<?php
$conn = mysqli_connect('localhost', "root", "", 'pcrms');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
