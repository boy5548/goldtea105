<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">京茶山光復店外送系統 beta版</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="menu.php">看菜單</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">線上預訂外送</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Facebook</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">官方Line</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="insert.html">新增品項</a></li>

                </ul>
            </div>
        </nav>
<br><br>
<?php
	require("db_config.php");
    $tel=$_GET['tel'];
	//echo"tel=$tel";
	$sql_query="SELECT `訂購人`, `外送時間`, `電話1`, `電話2`, `地址`, `公司名稱` FROM `顧客資料` where 電話1 = $tel or 電話2 = $tel" ;
    $result=mysqli_query($db_link, $sql_query);
    
	if(mysqli_num_rows($result)){
		 if(!result){
             echo(“Error“.mysqli_error($db_link));
             exit();
         }
         
     echo "<font size=\"5\" color=\"xxxx\"> 外送資料 </font>"; 
     echo"<br>";
     $row = mysqli_fetch_array($result);
     echo "訂購人：$row[0]</br>";
     echo "外送時間：$row[1]</br>";
     echo "電話1：$row[2]</br>";
     echo "電話2：$row[3]</br>";
     echo "地址：$row[4]</br>";
     echo "公司名稱：$row[5]</br>";
	}else{
		echo"連線出現問題·請再試一次。";
	}
   	echo "</br>";

	$sql_query="SELECT `飲品品項`, `甜度選項`, `冰塊選項`, `加料`, `數量`, `單項總價` FROM `訂購資料` where 訂購電話 = $tel";

	//if(mysqli_query($db_link, $sql_query))
	   //echo "查詢成功";
	//else
	   //echo "查詢失敗";

    $result=mysqli_query($db_link, $sql_query);
    
	if(mysqli_num_rows($result)){
    
		 if(!result1){
             echo(“Error“.mysqli_error($db_link));
             exit();
         }
        echo "<font size=\"5\" color=\"xxxx\"> 訂購飲品資料 </font>";
        echo "<br>";
        
//        echo "<div class = "table-responsive">";
//		echo "<table border=1 width=500 height=100 cellpadding=1 >";

//            echo"<td></td>";
/*			echo"<td>飲品品項</td>";
			echo"<td>甜度選項</td>";
			echo"<td>冰塊選項</td>";
			echo"<td>加料</td>";
			echo"<td>數量</td>";
			echo"<td>價格</td>";
			      echo"</tr>";*/

        $i=1;
		while($row=mysqli_fetch_array($result)){
		    "<tr class=". $row['ID'] . ">";
//            echo"<font size=\"4\" color=\"xxxx\"> $i. </font>";
            echo"-------";  echo"<br>";
            echo '<td><a href="edit.php' . $row['id'] . '">編輯</a></td>'; echo"<br>";
			echo"<font size=\"4\" color=\"xxxx\"> <td>【$row[4]杯】</font> </td>"; //杯數
			echo"<font size=\"4\" color=\"xxxx\"> <td>$row[0]</td> </font>";  //品項
			echo"<font size=\"4\" color=\"xxxx\"> <td>&nbsp&nbsp&nbsp&nbsp&nbsp$$row[5]</td> </font>"; echo"<br>";//價格
			echo"<td>$row[1]・</td>"; //甜度
			echo"<td>$row[2]</td>"; //冰塊
			if($row[3]!="   "){
			  echo"<td>・加$row[3]</td>";} //加料
			echo"<br>";
			      echo"</tr>";
			$total_cnt = $total_cnt + $row[4];
			$total_price = $total_price + $row[5];
			$i = $i+1;
		}
		echo"</table>";
	    
	    if($total_cnt/10 > 0 ){
    		$discount = $total_price/$total_cnt;
    		$discount = floor($discount/5)*5;     //計算折扣
    	}
    	$final_discount = $discount * floor($total_cnt/10);
    	$final_price = $total_price - $final_discount;

		echo"<br>";
	   
	    echo"消費金額：$total_price 元"; echo"<br>";
	    echo"折扣金額：$final_discount 元";echo"<br>"; echo"<br>";
	    echo"<font size=\"5\" color=\"xxxx\">總計： $total_cnt 杯 </font>"; echo"<br>";
	    echo"<font size=\"5\" color=\"xxxx\">應付金額：$final_price 元 </font>";  echo"<br>";

	    
//		echo"</div>";
     
	}else{
		echo"連線出現問題·請再試一次。";
	}
	
	
?>

<br><br><br>

     
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">      
        
         
                    </div>
                            <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
        
    </body>
    
    <div class="table-responsive">
  <table class="table table-bordered table-striped">
    <caption>
      List of users
    </caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <!-- ... -->
        <th scope="col">Remark</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <!-- ... -->
        <td>
          <?php echo $row[2]; ?>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <!-- ... -->
        <td>
          Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing
          industries
        </td>
      </tr>
    </tbody>
  </table>
</div>
    
</html>