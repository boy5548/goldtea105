<!DOCTYPE html>
<html lang="en">
<head>
<script src='//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>
  <script type="text/javascript" src="selectboxes.js"></script>
  <script type="text/javascript" src="index.js"></script>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>預訂外送</title>
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
 
<body>
        
        <div>
        
<br><br>


   請選擇飲品(必選)：
   <select id='drink_item'>
      <option>選擇飲品</option>
<?
include "db_config.php";
$sql = "SELECT name FROM 飲品資料";
$result = mysqli_query($db_link, $sql) or die("資料選取錯誤！".mysqli_error($db_link));
while($data=mysqli_fetch_assoc($result)){
?>
      <option value="<?echo $data['name'];?>"><?echo $data['name'];?></option>
<?
}
?>
   </select>
</div>

<br>

<div>
   請選擇甜度(必選)：
   <select id='sugar'>
      <option>選擇甜度</option>
   </select>
</div>
   
<br> 
 
<div>
   請選擇冰量(必選)：
   <select id='ice'>
      <option>選擇冰量</option>
   </select>
</div>

<br>

<div>
   選擇加料1(可選)：
   <select id='add_item1'>
   </select>
</div>

<div>
   選擇加料2(可選)：
   <select id='add_item2'>
   </select>
</div>

<div>
   選擇加料3(可選)：
   <select id='add_item3'>
   </select>
</div>

<div>
   選擇加料4(可選)：
   <select id='add_item4'>
   </select>
</div>

<br>

<div>
   請選擇數量(必選)：
   <select id='quantity'>
      <option> 0 </option>
      <option> 1 </option> <option> 2 </option> <option> 3 </option> <option> 4 </option> <option> 5 </option>
      <option> 6 </option> <option> 7 </option> <option> 8 </option> <option> 9 </option> <option> 10 </option>
      <option> 11 </option> <option> 12 </option> <option> 13 </option> <option> 14 </option> <option> 15 </option>
      <option> 16 </option> <option> 17 </option> <option> 18 </option> <option> 19 </option> <option> 20 </option>
      <option> 21 </option> <option> 22 </option> <option> 23 </option> <option> 24 </option> <option> 25 </option>
      <option> 26 </option> <option> 27 </option> <option> 28 </option> <option> 29 </option> <option> 30 </option>
      <option> 31 </option> <option> 32 </option> <option> 33 </option> <option> 34 </option> <option> 35 </option>
      <option> 36 </option> <option> 37 </option> <option> 38 </option> <option> 39 </option> <option> 40 </option>
      <option> 41 </option> <option> 42 </option> <option> 43 </option> <option> 44 </option> <option> 45 </option>
      <option> 46 </option> <option> 47 </option> <option> 48 </option> <option> 49 </option> <option> 50 </option>
   </select>
</div>

<br>

<!--	<div>
	    請選擇加料(可選)： <select id='eat_item' multiple>
        <?
		include "db_config.php";
		$sql = "SELECT name FROM 加料選項";
		$result = mysqli_query($db_link, $sql) or die("資料選取錯誤！".mysqli_error($db_link));
		while($data=mysqli_fetch_assoc($result)){
		?>
		<option value="<?echo $data['name'];?>">
			<?echo $data['name'];?>
		</option><?
		}
		?>
	</select>
	</div><br><br>   -->


<div id='response' text='價格：'>  </div>

<br>

<div id='input'>
   <button id='add_to_cart'>加入購物車</button>
</div>


<form method="POST" action="show_cart.php?tel=<?php echo $_GET["tel"]?>">
<input type="submit" value= "檢視目前訂單"/>  
</form>


<script>
var eat_item_ary = [];
var drink_price;
var tmp_price;
var add_price1=0, add_price2=0, add_price3=0, add_price4=0;
var add_select;
var count;
var tel; 


// 選擇甜度
$(document).on('change', '#drink_item', function(){
   console.log("enter select_sugar function");
   var drink_item = $('#drink_item :selected').val();
   $.ajax({
      url:"select_drink.php",				
      method:"POST",
      data:{
         drink_item:drink_item
      },					
      success:function(res){	
      console.log("res(sugar)= ", res);				
         $('#sugar').html(res);
      }
   })//end ajax
});

// 選擇冰量
$(document).on('change', '#drink_item', function(){
   console.log("enter select_ice function");
   var drink_item = $('#drink_item :selected').val();
   console.log("drink_item= ", drink_item);
   $.ajax({
      url:"select_ice.php",				
      method:"POST",
      data:{
         drink_item:drink_item
      },					
      success:function(res){	
      console.log("res(ice)= ", res);				
         $('#ice').html(res);
      }
   })//end ajax
});

// 讀取 飲品價格		
$(document).on('change', '#drink_item', function(){
   console.log("enter get_price function");
   var drink_item = $('#drink_item :selected').val();
   console.log("drink_item= ", drink_item);
   $.ajax({
      url:"get_price.php",				
      method:"POST",
      data:{
         drink_item:drink_item
      },					
      success:function(res){	
      console.log("res(price)= ", res);
//         $('#response').html('價格：'+res);  //印出飲品價格
         drink_price= res;  // 記錄飲品價格
      }
   })//end ajax
});


// 讀取 加料選項_1
$(document).on('change', '#drink_item', function(){
   console.log("enter get_eat_item function");
   $.ajax({
      url:"get_eat_item.php",				
      method:"POST",
      data:{
      },					
      success:function(res){	
      console.log("res(eat_item)= ", res);
         $('#add_item1').html(res);
      }
   })//end ajax
});

// 讀取 加料選項_2
$(document).on('change', '#drink_item', function(){
   console.log("enter get_eat_item function");
   $.ajax({
      url:"get_eat_item.php",				
      method:"POST",
      data:{
      },					
      success:function(res){	
      console.log("res(eat_item)= ", res);
         $('#add_item2').html(res);
      }
   })//end ajax
});

// 讀取 加料選項_3
$(document).on('change', '#drink_item', function(){
   console.log("enter get_eat_item function");
   $.ajax({
      url:"get_eat_item.php",				
      method:"POST",
      data:{
      },					
      success:function(res){	
      console.log("res(eat_item)= ", res);
         $('#add_item3').html(res);
      }
   })//end ajax
});

// 讀取 加料選項_4
$(document).on('change', '#drink_item', function(){
   console.log("enter get_eat_item function");
   $.ajax({
      url:"get_eat_item.php",				
      method:"POST",
      data:{
      },					
      success:function(res){	
      console.log("res(eat_item)= ", res);
         $('#add_item4').html(res);
      }
   })//end ajax
});

// 計算 加料選項_1 價格
$(document).on('change', '#add_item1', function(){
   var drink_item = $('#drink_item :selected').val();
   var sugar_item = $('#sugar :selected').val();
   var ice_item   = $('#ice :selected').val();
   var add_item1 = $('#add_item1 :selected').val();
   var add_item2 = $('#add_item2 :selected').val();
   var add_item3 = $('#add_item3 :selected').val();
   var add_item4 = $('#add_item4 :selected').val();
   var quantity = $('#quantity :selected').val();
   
   console.log("enter get_eat_item function");
   
   var eat_item = $('#add_item1 :selected').val();
        if(!eat_item){
           add_price1 = 0; //不加料
           //$('#response').html('價格：'+tmp_price1); //顯示最終金額
        }
        else if(eat_item == '波霸' || eat_item == '珍珠' || eat_item == '椰果'
           || eat_item == '粉條' || eat_item == '咖啡凍' || eat_item == '仙草凍'){
              add_price1 = 5; //加料5元
        }
        if(eat_item == '綠豆' || eat_item == '蘆薈' || eat_item == '養樂多'
           || eat_item == '手工芋圓' || eat_item == '燕麥'){
              add_price1 = 10; //加料10元
        }        

    tmp_price = (Number(drink_price) + Number(add_price1) + Number(add_price2) + Number(add_price3) + Number(add_price4)) * Number(quantity); //計算總額
    $('#response').html('品項：'+ drink_item + ' ' + sugar_item + ' ' + ice_item + '<br>' 
                        + '加料：' + add_item1 + ' ' + add_item2 + ' ' + add_item3 + ' ' + add_item4 + '<br>' 
                        + '杯數：' + quantity + '<br>'
                        + '價格：' + tmp_price);  //顯示最終細項及金額

});

// 計算 加料選項_2 價格
$(document).on('change', '#add_item2', function(){
   var drink_item = $('#drink_item :selected').val();
   var sugar_item = $('#sugar :selected').val();
   var ice_item   = $('#ice :selected').val();
   var add_item1 = $('#add_item1 :selected').val();
   var add_item2 = $('#add_item2 :selected').val();
   var add_item3 = $('#add_item3 :selected').val();
   var add_item4 = $('#add_item4 :selected').val();
   var quantity = $('#quantity :selected').val();
   
   console.log("enter get_eat_item function");
   
   var eat_item = $('#add_item2 :selected').val();
        if(!eat_item){
           add_price2 = 0; //不加料
        }
        else if(eat_item == '波霸' || eat_item == '珍珠' || eat_item == '椰果'
           || eat_item == '粉條' || eat_item == '咖啡凍' || eat_item == '仙草凍'){
              add_price2 = 5; //加料5元
        }
        if(eat_item == '綠豆' || eat_item == '蘆薈' || eat_item == '養樂多'
           || eat_item == '手工芋圓' || eat_item == '燕麥'){
              add_price2 = 10; //加料10元
        }        
    tmp_price = (Number(drink_price) + Number(add_price1) + Number(add_price2) + Number(add_price3) + Number(add_price4)) * Number(quantity); //計算總額
    $('#response').html('品項：'+ drink_item + ' ' + sugar_item + ' ' + ice_item + '<br>' 
                        + '加料：' + add_item1 + ' ' + add_item2 + ' ' + add_item3 + ' ' + add_item4 + '<br>' 
                        + '杯數：' + quantity + '<br>'
                        + '價格：'+tmp_price);  //顯示最終細項及金額
});

// 計算 加料選項_3 價格
$(document).on('change', '#add_item3', function(){
   var drink_item = $('#drink_item :selected').val();
   var sugar_item = $('#sugar :selected').val();
   var ice_item   = $('#ice :selected').val();
   var add_item1 = $('#add_item1 :selected').val();
   var add_item2 = $('#add_item2 :selected').val();
   var add_item3 = $('#add_item3 :selected').val();
   var add_item4 = $('#add_item4 :selected').val();
   var quantity = $('#quantity :selected').val();
   
   console.log("enter get_eat_item function");
   
   var eat_item = $('#add_item3 :selected').val();
        if(!eat_item){
           add_price3 = 0; //不加料
        }
        else if(eat_item == '波霸' || eat_item == '珍珠' || eat_item == '椰果'
           || eat_item == '粉條' || eat_item == '咖啡凍' || eat_item == '仙草凍'){
              add_price3 = 5; //加料5元
        }
        if(eat_item == '綠豆' || eat_item == '蘆薈' || eat_item == '養樂多'
           || eat_item == '手工芋圓' || eat_item == '燕麥'){
              add_price3 = 10; //加料10元
        }        
    tmp_price = (Number(drink_price) + Number(add_price1) + Number(add_price2) + Number(add_price3) + Number(add_price4)) * Number(quantity); //計算總額
    $('#response').html('品項：'+ drink_item + ' ' + sugar_item + ' ' + ice_item + '<br>' 
                        + '加料：' + add_item1 + ' ' + add_item2 + ' ' + add_item3 + ' ' + add_item4 + '<br>' 
                        + '杯數：' + quantity + '<br>'
                        + '價格：'+tmp_price);  //顯示最終細項及金額
});

// 計算 加料選項_4 價格
$(document).on('change', '#add_item4', function(){
   var drink_item = $('#drink_item :selected').val();
   var sugar_item = $('#sugar :selected').val();
   var ice_item   = $('#ice :selected').val();
   var add_item1 = $('#add_item1 :selected').val();
   var add_item2 = $('#add_item2 :selected').val();
   var add_item3 = $('#add_item3 :selected').val();
   var add_item4 = $('#add_item4 :selected').val();
   var quantity = $('#quantity :selected').val();
   
   console.log("enter get_eat_item function");
   
   var eat_item = $('#add_item4 :selected').val();
        if(!eat_item){
           add_price4 = 0; //不加料
        }
        else if(eat_item == '波霸' || eat_item == '珍珠' || eat_item == '椰果'
           || eat_item == '粉條' || eat_item == '咖啡凍' || eat_item == '仙草凍'){
              add_price4 = 5; //加料5元
        }
        if(eat_item == '綠豆' || eat_item == '蘆薈' || eat_item == '養樂多'
           || eat_item == '手工芋圓' || eat_item == '燕麥'){
              add_price4 = 10; //加料10元
        }        
    tmp_price = (Number(drink_price) + Number(add_price1) + Number(add_price2) + Number(add_price3) + Number(add_price4)) * Number(quantity); //計算總額
    $('#response').html('品項：'+ drink_item + ' ' + sugar_item + ' ' + ice_item + '<br>' 
                        + '加料：' + add_item1 + ' ' + add_item2 + ' ' + add_item3 + ' ' + add_item4 + '<br>' 
                        + '杯數：' + quantity + '<br>'
                        + '價格：'+tmp_price);  //顯示最終細項及金額
});


// 計算數量 及 顯示總價
$(document).on('change', '#quantity', function(){
   var drink_item = $('#drink_item :selected').val();
   var sugar_item = $('#sugar :selected').val();
   var ice_item   = $('#ice :selected').val();
   var add_item1 = $('#add_item1 :selected').val();
   var add_item2 = $('#add_item2 :selected').val();
   var add_item3 = $('#add_item3 :selected').val();
   var add_item4 = $('#add_item4 :selected').val();
   var quantity = $('#quantity :selected').val();
   
   console.log("enter quantity function");
   
    tmp_price = (Number(drink_price) + Number(add_price1) + Number(add_price2) + Number(add_price3) + Number(add_price4)) * Number(quantity) ; //計算總額
    $('#response').html('品項：'+ drink_item + ' ' + sugar_item + ' ' + ice_item + '<br>' 
                        + '加料：' + add_item1 + ' ' + add_item2 + ' ' + add_item3 + ' ' + add_item4 + '<br>' 
                        + '杯數：' + quantity + '<br>'
                        + '價格：' + tmp_price);  //顯示最終細項及金額
});

// 加入購物車
$(document).on('click', '#add_to_cart', function(){
   var drink_item = $('#drink_item :selected').val();
   var sugar_item = $('#sugar :selected').val();
   var ice_item   = $('#ice :selected').val();
   var add_item1 = $('#add_item1 :selected').val();
   var add_item2 = $('#add_item2 :selected').val();
   var add_item3 = $('#add_item3 :selected').val();
   var add_item4 = $('#add_item4 :selected').val();
   var quantity = $('#quantity :selected').val();
   
   let write_ary = new Array(7) //宣告寫入陣列
   
   write_ary[0] = "<?php echo $_GET["tel"]?>"; 
   write_ary[1] = drink_item;
   write_ary[2] = sugar_item;
   write_ary[3] = ice_item;
   write_ary[4] = add_item1 + ' ' + add_item2 + ' ' + add_item3 + ' ' + add_item4 ;
   write_ary[5] = quantity;
   write_ary[6] = (Number(drink_price) + Number(add_price1) + Number(add_price2) + Number(add_price3) + Number(add_price4)) * Number(quantity);
   
   $.ajax({
      url:"wt_drink_to_db.php",				
      method:"POST",
      data:{
            write_ary : write_ary
      },					
      success:function(res){	
      console.log("res(eat_item)= ", res);
      alert("加入成功");
      }
   })//end ajax   
   

   //console.log("write[6]= ", write_ary[6]);

}); 




// 測試用
$(document).on('change', '#add_item1', function(){
   console.log("enter add_item1 function");
   const nameElement = document.getElementById('response');
   //if($('#add_item1 :selected').val()=="波霸")
      //alert(nameElement.value);
});



   
</script>

        
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