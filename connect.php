<?php
    session_start();
    $user = 'root';//資料庫使用者名稱
    $password = 'Vivian991215';//資料庫的密碼
    try{
        $db= new PDO('mysql:host=127.0.0.1;dbname=finalproject;charset=utf8',$user,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }
    catch(PDOException $e){//若上述程式碼出現錯誤，便會執行以下動作
        Print "ERROR!:". $e->getMessage();
        die();
    }
?>

