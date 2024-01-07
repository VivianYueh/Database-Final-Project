<?php
	include 'final_connect.php';
	
	if (isset($_POST["ItemID"]))
	{
	  $ItemID = $_POST["ItemID"];
	  $item_name = $_POST["item_name"];
	  $item_price= $_POST["item_price"];
	  $item_des = $_POST["item_des"];
	  $item_sup = $_POST["item_sup"];
	  $item_addr = $_POST["item_addr"];
	  $item_ph = $_POST["item_ph"];

	  if($ItemID == ''){
        $ItemID = '更換玩具名稱';
	  }
	  
	  $sql = "UPDATE item LEFT JOIN itemsupplier ON item.Suppliername = itemsupplier.Name SET item.Name = ?,item.Price = ?,item.Description = ?,itemsupplier.Name = ?,itemsupplier.Address = ?,itemsupplier.Phone = ? WHERE item.ItemID = ?";
	  try{
        if($stmt = $db->prepare($sql)){
            $success = $stmt->execute(array($item_name, $item_price, $item_des, $item_sup, $item_addr, $item_ph, $ItemID));
            
            if (!$success) {
              echo "儲存失敗!".$stmt->errorInfo();
              
              $sql = "INSERT INTO itemsupplier (Name,Address,Phone) values (?,?,?) ";  
              if($stmt = $db->prepare($sql)){
              $success = $stmt->execute(array( $item_sup, $item_addr, $item_ph));
                    
              if (!$success) {
                  echo "儲存失敗!".$stmt->errorInfo();
              }else{
                  header('Location: item_edit.php');
              }
              }
            }else{
                header('Location: item_edit.php');
            }
            }
      }catch(PDOException $e){
        Print "getMessage(): " . $e->getMessage();
      }
      
	} 
	else 
	{
	  $ToyID = NULL;
	  echo "no supplied";
	}	
	
	
?>