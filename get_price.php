<?php

include "db_config.php";

$drink_item = $_POST['drink_item'];

$sql= "SELECT price FROM 飲品資料 WHERE name = '$drink_item'";
$result = mysqli_query($db_link, $sql) or die("result 取出資料失敗！".mysqli_error($db_link));


$res = "";//把準備回傳的變數res準備好

$data=mysqli_fetch_assoc($result);
$res = implode("",$data);

echo "$res";//將型號項目丟回給ajax

?>