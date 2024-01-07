<?php
  session_start();
  include 'final_connect.php';
  $item_name = $_POST["item_name"];
  $item_price= $_POST["item_price"];
  $item_des = $_POST["item_des"];
  $item_sup = $_POST["item_sup"];
  $item_addr = $_POST["item_addr"];
  $item_ph = $_POST["item_ph"];  
  if($item_name == ''){
    $item_name = '更換玩具名稱';
  }
  $sql = "INSERT IGNORE INTO itemsupplier (Name,Address,Phone) values (?,?,?) ";  
  try{
    if($stmt = $db->prepare($sql)){
        $success = $stmt->execute(array($item_sup,$item_addr,$item_ph));
        if (!$success) {
          echo "儲存失敗!".$stmt->errorInfo();
        }else{
            $ItemID = $db->lastInsertId();
            header('Location: item_edit.php');
        }
        $sql = "INSERT INTO item (ItemID,StoreCode,Name,Price,Description,Suppliername) values (NULL,?,?,?,?,?)";
        if($stmt = $db->prepare($sql)){
        $success = $stmt->execute(array($_SESSION['StoreCode'],$item_name, $item_price, $item_des,$item_sup));
        
        if (!$success) {
          echo "儲存失敗!".$stmt->errorInfo();
        }else{
            header('Location: item_edit.php');
        }
        }
        }
  }catch(PDOException $e){
    Print "getMessage(): " . $e->getMessage();
  }
  
	
?>