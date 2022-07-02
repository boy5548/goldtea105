<?php
include "db_config.php";

$drink_item = $_POST['drink_item'];

$sql= "SELECT ice FROM 飲品資料 WHERE name = '$drink_item'";
$result = mysqli_query($db_link, $sql) or die("result1 取出資料失敗！".mysqli_error($db_link));
$data = mysqli_fetch_assoc($result);
$str = implode("",$data);

$sql = "SELECT * FROM $str";
$result = mysqli_query($db_link, $sql) or die("result2 取出資料失敗！".mysqli_error($db_link));

$res1 = "";//把準備回傳的變數res準備好

while($data=mysqli_fetch_assoc($result)){
   $res1 .= "
      <option value='{$data['選項']}'>{$data['選項']}</option>
   ";//將對應的型號項目遞迴列出
};
echo $res1;//將型號項目丟回給ajax

?>