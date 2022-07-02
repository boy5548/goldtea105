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

	$time=$_POST['time'];
	$username=$_POST['username'];
	$tel1=$_POST['tel1'];
	$tel2=$_POST['tel2'];
	$addr=$_POST['addr'];
	$company=$_POST['company'];
	
//	echo "time=$time</br>";
	
	require("db_config.php");
	$sql_query="INSERT INTO `顧客資料`(`訂購人`, `外送時間`, `電話1`, `電話2`, `地址`, `公司名稱`) VALUES ('$username','$time','$tel1','$tel2','$addr','$company')";

	if(mysqli_query($db_link, $sql_query))
	   echo "";
	else
	   echo "";


    $result=mysqli_query($db_link,"SELECT `訂購人`, `外送時間`, `電話1`, `電話2`, `地址`, `公司名稱` FROM 顧客資料 where 電話1 = $tel1");
    
	if(mysqli_num_rows($result)){
    
		 if(!result1){
             echo(“Error“.mysqli_error($db_link));
             exit();
         }
         

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
    <center><font size="5">以上資訊是否正確？</front>
                       <div class="subheading mb-5">
                    <a class="btn btn-outline-primary btn-lg" href="order_drink.php?company=<?php echo $_GET["company"];?> && tel=<?php echo $tel1; ?>" role="button">正確無誤，前往點餐</a>
                    <a class="btn btn-outline-primary btn-lg" href="order_info.php?company=<?php echo $_GET["company"]?>" role="button">資料有誤，返回重填</a></center>
                  
                    </div>
                   
                   
    <form action="#" method="post">
    <div>
        <button onclick="clickMe(event)">下一步</button>
    </div>
    </form> 
                    
     <script>
    function clickMe (event) {
        event.preventDefault();
        
        let value01 = document.getElementById('my_input').value
        console.log(value01);
        <script language="javascript">document.location.href="order_drink.php?company=<?php echo $_GET["company"]?> && tel=<?php echo $tel1 ?>";</script>
    }
    </script>
    
    
</html>