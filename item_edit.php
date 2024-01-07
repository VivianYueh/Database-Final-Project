<?php
// 載入db.php來連結資料庫
    include 'final_connect.php';
?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
    <script src="item_edit.js"></script>
</head>
<body>
       
<nav>
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="item.php">物品</a></li>
    <li><a href="item_edit.php">編輯物品</a></li>
    <!--<li>
        <form method="post" action="item.php">
            Search
			<input type="text" id="keyword" name="keyword" value="" placeholder="輸入搜尋關鍵字" />
			<input type="submit" value="送出">				
		</form>
    </li>-->
    </ul>
</nav>
<form id="mfrom" method="post" action="item_edit.php">
<div class="container1">
    <input type="hidden" id="ItemID" name="ItemID" value="<?php echo isset($_POST["ItemID"])?$_POST["ItemID"]:""?>">
    <button onclick="InsertItem()">新增</button>
    <table>
    <thead>
        <tr>
            <th>#</th>
            <th>物品</th>
            <th>價錢</th>
            <th>物品敘述</th>
            <th>供應商</th>
            <th>供應商地址</th>
            <th>供應商電話</th>
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
        if(isset($_POST["ItemID"]) && !empty($_POST["ItemID"])){
            $ItemID=$_POST["ItemID"];
            echo '<tr style="border-bottom:white"><td><button onclick="UpdateItem()">我要更改</button></td>';
            $query = ("SELECT item.ItemID,item.Name,item.Price,item.Description,item.Suppliername, itemsupplier.Address,itemsupplier.Phone FROM item left join itemsupplier on item.Suppliername = itemsupplier.Name where ItemID = ?");
            $stmt =  $db->prepare($query);
            $stmt->execute(array($ItemID));
            $result = $stmt->fetchAll();//以上寫法是為了防止「sql injection」
            for($i=0; $i<count($result); $i++){
                //echo '<td rowspan="2">'.$result[$i]['ItemID'].'</td>';
                echo '<td rowspan="2"><input type=text" id="item_name" name="item_name" value="'.$result[$i]['Name'].'"></td>';
                echo '<td rowspan="2"><input type=text" id="item_price" name="item_price" value="'.$result[$i]['Price'].'"></td>';
                echo '<td rowspan="2"><input type=text" id="item_des" name="item_des" value="'.$result[$i]['Description'].'"></td>';
                echo '<td rowspan="2"><input type=text" id="item_sup" name="item_sup" value="'.$result[$i]['Suppliername'].'"></td>';
                echo '<td rowspan="2"><input type=text" id="item_addr" name="item_addr" value="'.$result[$i]['Address'].'"></td>';
                echo '<td rowspan="2"><input type=text" id="item_ph" name="item_ph" value="'.$result[$i]['Phone'].'"></td>';
            }
            echo '</tr>';
            echo '<tr><td style="background-color:white;"><button onclick="DeleteItem()">我要刪除</button></td></tr>';
        }
        else{
            $query = ("SELECT item.ItemID,item.Name,item.Price,item.Description,item.Suppliername, itemsupplier.Address,itemsupplier.Phone FROM item left join itemsupplier on item.Suppliername = itemsupplier.Name ");
            $stmt =  $db->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll();//以上寫法是為了防止「sql injection」
            for($i=0; $i<count($result); $i++){
                echo "<tr>";
                echo "<td><a onclick='ChangeItem(".$result[$i]['ItemID'].")'>".$result[$i]['ItemID'].'</td>';
                echo '<td>'.$result[$i]['Name'].'</td>';
                echo '<td>'.$result[$i]['Price'].'</td>';
                echo '<td>'.$result[$i]['Description'].'</td>';
                echo '<td>'.$result[$i]['Suppliername'].'</td>';
                echo '<td>'.$result[$i]['Address'].'</td>';
                echo '<td>'.$result[$i]['Phone'].'</td>';
                echo '</tr>';
            }
        }
            
    ?>
        </tbody>
        
    </table>
</div>
</form>






</body>
</html>
