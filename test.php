<?php
require_once "connect.php";
global $conn;
$a="select * from table_students";
$rl=mysqli_query($conn,$a);
$tong=mysqli_num_rows($rl);
$trang_hientai=isset($_GET['page'])?$_GET['page']:1;
echo $trang_hientai ."                  " ;
$top=isset($_GET['top'])?$_GET['top']:1;
echo $top;



