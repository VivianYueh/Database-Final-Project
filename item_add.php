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
    <script src="item_edit.js"></script>
</head>
<body>
       
<nav>
    <ul>
    <li><a  href="index.php">Home</a></li>
    <li><a href="item.php">物品</a></li>
    <li><a href="item_edit.php">編輯物品</a></li>
    </ul>

</nav>
<form id="mfrom" method="post" action="item_edit.php">
<div class="container1">
    
<table>

        <thead>
            <tr>
                <th></th>
                <th>物品</th>
                <th>價錢</th>
                <th>物品敘述</th>
                <th>供應商</th>

                <th>供應商地址</th>
                <th>供應商電話</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><button onclick="InsertItemSave()">新增</button></td>
                <td><input type="text" id="item_name" name="item_name" value=""></td>
                <td><input type="text" id="item_price" name="item_price" value=""></td>
                <td><input type="text" id="item_des" name="item_des" value=""></td>
                <td><input type="text" id="item_sup" name="item_sup" value=""></td>
                <td><input type="text" id="item_addr" name="item_addr" value=""></td>
                <td><input type="text" id="item_ph" name="item_ph" value=""></td>
            </tr>
        </tbody>
   
    
    
</table>

</div>
</form>


</body>
</html>
