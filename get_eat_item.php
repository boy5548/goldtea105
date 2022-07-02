<?php
echo"enter get_eat_item.php";

include "db_config.php";

$sql= "SELECT name FROM 加料選項";
$result = mysqli_query($db_link, $sql) or die("result1 取出資料失敗！".mysqli_error($db_link));

$res = "";//把準備回傳的變數res準備好

while($data=mysqli_fetch_assoc($result)){
   $res .= "
      <option value='{$data['name']}'>{$data['name']}</option>
   ";//將對應的型號項目遞迴列出
};
echo $res;//將型號項目丟回給ajax

?>