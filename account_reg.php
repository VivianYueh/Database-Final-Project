<?php
  session_start();
	include 'final_connect.php';
    $idt=$_POST["radio"];
	  $username=$_POST["username"];
    $password=$_POST["password"];
    $password2=$_POST["comfirm_password"];
    
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
        if($password==$password2){
            if($idt=="商家"){
                $StoreCode=$_POST["Store"];
                $StoreDes=$_POST["StoreDes"];
                $StoreTime=$_POST["StoreTime"];
                $sql = "INSERT INTO user (UserID, Identity,Name,Password,StoreCode) values (NULL,?,?,?,?) ";  
                try{
                  if($stmt = $db->prepare($sql)){
                      $success = $stmt->execute(array($idt,$username,$password,$StoreCode));
                      if (!$success) {
                          $_SESSION['is_reg'] = FALSE;
                          echo "註冊失敗!".$stmt->errorInfo();
                      }else{
                        $query = ("SELECT UserID FROM user where Name = ? and Password = ? and Identity = ?");
                        $stmt =  $db->prepare($query);
                        $stmt->execute(array($username,$password,$idt));
                        $result = $stmt->fetchAll();//以上寫法是為了防止「sql injection」
                        $_SESSION['UserID'] = $result[0]['UserID'];
                        $sql = "INSERT INTO depstore (UserID,StoreCode,Description,ServiceHours) values (?,?,?,?) ";  
                        try{
                          $stmt = $db->prepare($sql);
                          $success = $stmt->execute(array($_SESSION['UserID'],$StoreCode,$StoreDes,$StoreTime));
                          $_SESSION['is_reg'] = TRUE;
                          $_SESSION['account'] = $username;
                          $_SESSION['identity'] = $idt;
                          $_SESSION['StoreCode'] = $StoreCode;
                          $query = ("SELECT StoreCode FROM user where Name = ? and Password = ? and Identity = ?");
                          $stmt =  $db->prepare($query);
                          $stmt->execute(array($username,$password,$idt));
                          $result = $stmt->fetchAll();//以上寫法是為了防止「sql injection」
                          $_SESSION['StoreCode'] = $result[0]['StoreCode'];
                          header('Location: Home.php');
                        }catch(PDOException $e){
                          Print "getMessage(): " . $e->getMessage();
                        }
                        
                          
                      }
                    }
                }catch(PDOException $e){
                  Print "getMessage(): " . $e->getMessage();
                }
              }
              else if($idt=="顧客"){
                $sql = "INSERT INTO user (UserID, Identity,Name,Password,StoreCode) values (NULL,?,?,?,NULL) ";  
                try{
                  if($stmt = $db->prepare($sql)){
                      $success = $stmt->execute(array($idt,$username,$password));
                      if (!$success) {
                          $_SESSION['is_reg'] = FALSE;
                          echo "註冊失敗!".$stmt->errorInfo();
                      }else{
                          $_SESSION['is_reg'] = TRUE;
                          $_SESSION['account'] = $username;
                          $_SESSION['identity'] = $idt;
                          //$_SESSION['StoreCode'] = $StoreCode;
                          $query = ("SELECT StoreCode FROM user where Name = ? and Password = ? and Identity = ?");
                              $stmt =  $db->prepare($query);
                              $stmt->execute(array($username,$password,$idt));
                              $result = $stmt->fetchAll();//以上寫法是為了防止「sql injection」
                              $_SESSION['account'] = $result[0]['Name'];
                              header('Location: Home2.php');
                          
                      }
                      }
                }catch(PDOException $e){
                  Print "getMessage(): " . $e->getMessage();
                }
              }
        }
        else 
        {
            $_SESSION['msg'] = '請輸入相同密碼!!';
            echo '<script language="javascript">';
            echo 'alert("請輸入相同密碼!!")';
            echo '</script>';
            //使用 PHP header 來轉址 返回登入頁
            header('Location: reg.php');
        }	
	} 
	else 
	{
        $_SESSION['msg'] = '請輸入完整資訊!!';
        echo '<script language="javascript">';
        echo 'alert("請輸入完整資訊!!")';
        echo '</script>';
        //使用 PHP header 來轉址 返回登入頁
        header('Location: reg.php');
	}	
	
	
?>