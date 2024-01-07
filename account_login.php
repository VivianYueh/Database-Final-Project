<?php
    session_start();
	include 'final_connect.php';
	$username=$_POST["username"];
    $password=$_POST["password"];
    $idt=$_POST["radio"];
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	  
	  $sql = "SELECT * FROM user WHERE Name = ? and Password = ? and Identity = ?";
	  try{
        if($stmt = $db->prepare($sql)){
            $success = $stmt->execute(array($username,$password,$idt));
            if (!$success) {
                $_SESSION['is_login'] = FALSE;
                echo "登入失敗!".$stmt->errorInfo();
            }else{
                $_SESSION['is_login'] = TRUE;
                $_SESSION['account'] = $username;
                $_SESSION['identity'] = $idt;
                if($idt=="商家"){
                    $query = ("SELECT StoreCode FROM user where Name = ? and Password = ? and Identity = ?");
                    $stmt =  $db->prepare($query);
                    $stmt->execute(array($username,$password,$idt));
                    $result = $stmt->fetchAll();//以上寫法是為了防止「sql injection」
                    $_SESSION['StoreCode'] = $result['StoreCode'];
                    header('Location: Home.php');
                }
                else{
                    header('Location: Home2.php');
                }
                
            }
            }
      }catch(PDOException $e){
        Print "getMessage(): " . $e->getMessage();
      }
      
	} 
	else 
	{
        $_SESSION['msg'] = '請輸入帳號或密碼!!';
        //使用 PHP header 來轉址 返回登入頁
        header('Location: login.php');
	}	
	
	
?>