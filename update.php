<?php
require_once('connect.php');
global $conn;
$hmid=$_POST["hid"];
$full_Name = $_POST["full_Name"];
$dob = $_POST["dob"];
$gender =$_POST["gender"];
$hometown =$_POST["hometown"];
$level =$_POST["level"];
$group =$_POST["group"];

if(isset($full_Name, $dob, $gender, $hometown, $level, $group) && $full_Name !== '' && $dob !== '' && $gender !== '' && $hometown !== '' && $level !== '' && $group !== '') {
    $update_sql = "UPDATE table_students SET `fullname`='$full_Name', `dob`='$dob', `gender`='$gender', `hometown`='$hometown', `level`='$level', `group`='$group' WHERE id='$hmid' ";
    if (mysqli_query($conn, $update_sql)) {
        echo "Cập nhật thành công!";
        header("Location: home.php");

    } else {
        echo "Lỗi: " . mysqli_error($conn);
        exit;
    }
}
else{
    echo ("Vui lòng điền đầy đủ thông tin.");
    exit;
}
?>
