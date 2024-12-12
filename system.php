<?php
require "connect.php";
global $conn;

$full_Name = isset($_POST["full_Name"]) ? $_POST["full_Name"] : null;
$dob = isset($_POST["dob"]) ? $_POST["dob"] : null;
$gender = isset($_POST["gender"]) ? $_POST["gender"] : null;
$hometown = isset($_POST["hometown"]) ? $_POST["hometown"] : null;
$level = isset($_POST["level"]) ? $_POST["level"] : null;
$group = isset($_POST["group"]) ? $_POST["group"] : null;

if(isset($full_Name, $dob, $gender, $hometown, $level, $group) && $full_Name !== '' && $dob !== '' && $gender !== '' && $hometown !== '' && $level !== '' && $group !== '')
{
    $addsql = "INSERT INTO `table_students`(`fullname`, `dob`, `gender`, `hometown`, `level`, `group`)
               VALUES ('$full_Name','$dob','$gender','$hometown','$level','$group')";
    mysqli_query($conn, $addsql);
    header("location:home.php");
}
else {

    if (!empty($_POST)) {
        $errors = [];
        if (empty($_POST['fullname'])) {
            $errors['fullname']['required'] = 'Chưa nhập họ tên';
        } else {
            if (strlen($_POST['fullname']) < 5) {
                $errors['fullname']['minlength'] = 'Nhập họ tên trên 5 ký tự';
            }
        }
        if (empty($_POST['hometown'])) {
            $errors['hometown']['required'] = 'Chưa nhập địa chỉ';
        } else {
            if (strlen($_POST['hometown']) < 5) {
                $errors['hometown']['minlength'] = 'Nhập địa chỉ quá ngắn, vui lòng nhập lại.';
            }
        }
        if (isset($_POST['gender']) && $_POST['gender'] !== '') {
            $errors['gender']['required'] = 'Chưa điền giới tính';
        }
        if (isset($_POST['level']) && $_POST['level'] !== '') {
            $errors['level']['required'] = 'Chưa điền trình độ';
        }

        if (empty($_POST['dob'])) {
            $errors['dob']['required'] = 'Chưa nhập ngày sinh';
        }
        if (empty($_POST['group'])) {
            $errors['group']['required'] = 'Chưa nhập nhóm';
        }
    }

    header("location:index.php");
}
?>
