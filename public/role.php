<?php
session_start();
include 'db_connect.php';
$rolesql = mysqli_query($conn, "SELECT id FROM role WHERE name='role'");
$roleid = mysqli_fetch_array($rolesql);
$role = $roleid['id'];
// echo $role;
?>