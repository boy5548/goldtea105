<?php
include "db_config.php";

$write_ary = $_POST['write_ary'];

//echo "write_ary[0]= $write_ary[0]";

$sql= "INSERT INTO `訂購資料`(`訂購電話`, `飲品品項`, `甜度選項`, `冰塊選項`, `加料`, `數量`, `單項總價`) VALUES ('$write_ary[0]','$write_ary[1]','$write_ary[2]','$write_ary[3]','$write_ary[4]','$write_ary[5]','$write_ary[6]')";
$result = mysqli_query($db_link, $sql) or die("result1 取出資料失敗！".mysqli_error($db_link));
?>