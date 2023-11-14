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
        <thead>
            <tr>
                <th>#</th>
                <th>物品</th>
                <th>價錢</th>
                <th>物品敘述</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><a href="item_mdysave.php">馬克杯</a></td>
                <td>100</td>
                <td>大象圖案的白色馬克杯</td>
            </tr>
        </tbody>
        
    </table>
</div>





</body>
</html>
