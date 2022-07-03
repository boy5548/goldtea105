<?php
include "db_config.php";

$sql= "SELECT name FROM 飲品資料";
$result = mysqli_query($db_link, $sql) or die("result1 取出資料失敗！".mysqli_error($db_link));
//$data = mysqli_fetch_assoc($result);
//$str = implode("",$data);

while($data=mysqli_fetch_assoc($result)){
   $res1 .= "
      <option value='{$data['name']}'>{$data['name']}</option>
   ";//將對應的型號項目遞迴列出
};
echo $res1;//將型號項目丟回給ajax

?>