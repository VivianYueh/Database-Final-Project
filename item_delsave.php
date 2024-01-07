<?php
	include 'final_connect.php';
	
	if (isset($_POST["ItemID"]) && !empty($_POST["ItemID"]))
	{
	  $ItemID = $_POST["ItemID"];
	  
	  $sql = "DELETE FROM item WHERE ItemID = ?";
      try{
        if($stmt = $db->prepare($sql)){
            $success = $stmt->execute(array($ItemID));
              
              if (!$success) {
                echo "刪除失敗!".$stmt->errorInfo();
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