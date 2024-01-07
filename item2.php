<?php
// 載入db.php來連結資料庫
    include 'final_connect.php';
    $StoreCode = $_GET['StoreCode'];
?>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/item.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    
    
<nav>
    <ul>
    <li><a  href="index2.php">Home</a></li>
    <li><a href="shop.php">商城</a></li>
    <li style="position:absolute;left: 95%;"><a href="logout.php">登出</a></li>
    </ul>

</nav><br>
<div class="container1">
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>物品</th>
            <th>價錢</th>
            <th>物品敘述</th>
            <th>供應商</th>
            <th>供應商電話</th>
            <th>供應商地址</th>
        </tr>
    </thead>
    <!--<tbody>
        <tr>
            <td>1</td>
            <td>馬克杯</td>
            <td>100</td>
            <td>大象圖案的白色馬克杯</td>
        </tr>
    </tbody>-->
    <tbody>
    <?php    
        $query = ("SELECT item.ItemID,item.Name,item.Price,item.Description,item.Suppliername, itemsupplier.Address,itemsupplier.Phone FROM item left join itemsupplier on item.Suppliername = itemsupplier.Name where item.StoreCode = ?");
        $stmt =  $db->prepare($query);
        $stmt->execute(array($StoreCode));
        $result = $stmt->fetchAll();//以上寫法是為了防止「sql injection」
        for($i=0; $i<count($result); $i++){
            echo "<tr>";
            echo "<td>".$result[$i]['ItemID'].'</td>';
            echo '<td>'.$result[$i]['Name'].'</td>';
            echo '<td>'.$result[$i]['Price'].'</td>';
            echo '<td>'.$result[$i]['Description'].'</td>';
            echo '<td>'.$result[$i]['Suppliername'].'</td>';
            echo '<td>'.$result[$i]['Address'].'</td>';
            echo '<td>'.$result[$i]['Phone'].'</td>';
            echo '</tr>';
        }
    ?>
    </tbody>
</table>
</div>


</body>
</html>