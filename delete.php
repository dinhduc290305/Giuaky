<?php
require_once('connect.php');
global $conn;
$hid=$_GET['hid'];
$delete_sql="DELETE FROM table_students WHERE id='$hid'";
mysqli_query($conn,$delete_sql);
header("location:home.php");