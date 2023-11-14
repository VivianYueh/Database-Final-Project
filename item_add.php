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
    
<table>
<form>
        <thead>
            <tr>
                <th><label for="item">物品</label></th>
                <th><label for="cost">價錢</label></th>
                <th><label for="ides">物品敘述</label></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" id="item" name="item" value=""></td>
                <td><input type="text" id="cost" name="cost" value=""></td>
                <td><input type="text" id="ides" name="ides" value=""></td>
                <td><button type="button">新增</button></td>
            </tr>
        </tbody>
   
    </form>
    
</table>
</div>



</body>
</html>
