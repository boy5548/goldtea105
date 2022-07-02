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
        <br><br><br>

<input type ="button" onclick="history.back()" value="回到上一頁" style="width:140px;height:70px;">
<input type="button" onclick="location.href='insert.html'" value="新增菜單" style="width:140px;height:70px;">
</input>

<br/>
<br/>
<br/>

<br>【所有菜單】<br/>
<?php
	echo "<br>";    //斷行
echo $_POST["category"];

	require("db_config.php");
    $query="SELECT * FROM 飲品資料";
    $result=mysqli_query($db_link, $query);
    
	if(mysqli_num_rows($result)){
		 if(!result1){
             echo(“Error“.mysqli_error($db_link));
             exit();
         }
         
		echo "<table border=1 width=500 cellpadding=2>";
		echo "<tr>
			<td>品項名稱</td>
			<td>分類</td>
		    <td>價格</td>
		    <td>甜度</td>
		    <td>冰塊</td>
		      </tr>";
		while($row=mysqli_fetch_array($result)){
			echo "<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
				<td>$row[4]</td>
			      </tr>";
		}
		echo"</table>";
	}else{
		echo"發生錯誤·請再試一次。";
	}
	
	echo "<br>";    //斷行
	
	
	$query1="SELECT COUNT(name) FROM 飲品資料";
	$result1=mysqli_query($db_link, $query1);
			echo "<tr>
			<td>共有</td>
		      </tr>";
	while($row=mysqli_fetch_array($result1)){
			echo "<tr>
				<td>$row[0]</td>
				</tr>";
    }
    echo "<tr><td>個品項</td></tr>";
?>






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
</html>