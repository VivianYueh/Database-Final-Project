<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./item.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
       
<nav>
    <ul>
    <li><a  href="index.php">Home</a></li>
    <li><a href="item.php">物品</a></li>
    <li><a href="item_edit.php">編輯物品</a></li>
    </ul>

</nav>

<div class="container1">
    <button type="button" onclick="location.href='item_add.php'">新增</button>
    <table>
        <form action="" method="post">
            <thead>
                <tr>
                    <th></th>
                    <th>#</th>
                    <th>物品</th>
                    <th>價錢</th>
                    <th>物品敘述</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="submit" name="submit-btn1" value="我要更改" /></button></td>
                    <td rowspan="2"><input type="text" id="num" name="num" value="1"></td>
                    <td rowspan="2"><input type="text" id="item_name" name="item_name" value="馬克杯"></td>
                    <td rowspan="2"><input type="text" id="item_cost" name="item_cost" value="100"></td>
                    <td rowspan="2"><input type="text" id="item_des" name="item_des" value="大象圖案的白色馬克杯"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit-btn2" value="我要刪除" /></td>
                </tr>
            </tbody>
        </form>
        
        
    </table>
</div>

<?php
if (isset($_POST["submit-btn1"])) {
    # 依欄位名稱取得資料
    echo $_POST["item_name"];
}

  
?>



</body>
</html>
