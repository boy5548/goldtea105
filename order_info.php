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
        <script>
        const nameElement = document.getElementById('tel1');
        const tel1 = nameElement.value;
        </script>
        
		<form method="POST" action="login.php?company=<?php echo $_GET["company"]?>">
		    請輸入訂購資訊<br>
		    外送時間：
		    <form name="外送時間" method="post">
            <select name="time">
               <option> 11:00~11:30 </option>
               <option> 11:30~12:00 </option>
               <option> 12:00~12:30 </option>
               <option> 12:30~13:00 </option>
               <option> 13:00~13:30 </option>
               <option> 13:30~14:00 </option>
               <option> 14:00~14:30 </option>
               <option> 14:30~15:00 </option>
               <option> 15:00~15:30 </option>
               <option> 15:30~16:00 </option>
               <option> 16:00~16:30 </option>
               <option> 16:30~17:00 </option>
               <option> 17:00~17:30 </option>
               <option> 17:30~18:00 </option>
               <option> 18:00~18:30 </option>
               <option> 18:30~19:00 </option>
               <option> 19:00~19:30 </option>
               <option> 19:30~20:00 </option>
               <option> 20:00~20:30 </option>
               <option> 20:30~21:00 </option>
               <option> 21:00~21:30 </option>
               <option> 21:30~22:00 </option>
               <option> 22:00~22:30 </option>
               <option> 22:30~23:00 </option>
           </select><br>

		    訂購人貴姓：<input type="text" name="username"/>
		    <form name="稱謂" method="post">
            <select name="title">
               <option> 先生 </option>
               <option> 小姐 </option>
            </select><br>
		    聯絡電話(一)：<input type="tel" name="tel1"/><br>
		    聯絡電話(二)：<input type="tel" name="tel2"/><br>
		    外送地址：<input type="text" name="addr"/><br>
		    公司名稱(住家免填)：<input type="text" name="company"/><br>

            <input type="submit" value="下一步"/>

		</form>
		
     
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
