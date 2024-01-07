<?php
// 載入db.php來連結資料庫
  session_start();
  include 'final_connect.php';
?>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="js/login.js"></script>
</head>
<body>
    
    <div class="login_page">
      <div id="container1">

        <div class="login">  
          
          <h3 class="title">登入 Login</h3>
          <form id="mlogin" method="post" action="account_login.php">
          <div class="tab"></div>
            <input type="radio" id="radio1" name="radio" value="顧客" checked/>
            <label for="radio" class="cus">顧客</label>&emsp;
            <input type="radio" id="radio2" name="radio" value="商家"/>
            <label for="radio" class="mer">商家</label>
            <div class="tab"></div>
            <input type="text" id="username" name="username" placeholder="帳號" required>
            <div class="tab"></div>
            <input type="password" id="password" name="password" placeholder="密碼" required>
            <div class="tab"></div>
            <input type="submit" value="登入" class="submit" onclick="Login()">
          </form>  

          <h5 class="log_reg" onclick="show_hide()">註冊帳號</h5>
          
        </div><!-- login end-->
      </div><!-- container1 end-->
    </div><!-- login_page end-->
    </form>
    
    
    <div class="signup_page">
      <div id="container2">

        <div class="signup">  
          
          <h3 class="title">註冊 Sign Up</h3>

          <form id="mreg" method="post" action="account_reg.php">
            <input type="radio" id="radio1" name="radio" value="顧客" onclick="choose1()" checked/>
            <label for="radio" class="cus">顧客</label>
            <input type="radio" id="radio2" name="radio" value="商家" onclick="choose2()"/>
            <label for="radio" class="cus">商家</label>
            <div class="tab"></div>
            <input type="text" id="username2" name="username" placeholder="帳號" required>
            <div class="tab"></div>
            <input type="password" id="password2" name="password" placeholder="密碼" required>
            <div class="tab"></div>
            <input type="password" id="comfirm_password" name="comfirm_password" placeholder="確認密碼" required>
            <div class="tab"></div>
            <input class="Store" type="text" id="Store" name="Store" placeholder="商店名稱" hidden>
            <div class="tab"></div> 
            <input class="Store" type="text" id="StoreDes" name="StoreDes" placeholder="商店敘述" hidden>
            <div class="tab"></div> 
            <input class="Store" type="text" id="StoreTime" name="StoreTime" placeholder="服務時間" hidden>
            <div class="tab"></div>                        
            <input type="submit" value="註冊" class="submit" onclick="Reg()">
          </form>  

          <h5 class="log_reg" onclick="show_hide()">登入帳號</h5>
          
        </div><!-- signup end-->
      </div><!-- container2 end-->
    </div><!-- signup_page end--> 

    
  </body>
</html>