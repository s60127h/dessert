<?php
  //啟動session
  session_start();

  $db_account = "123@gmail.com";
  $db_password = "123";


  //使用者確定有輸入帳號密碼
  if(isset($_POST["account"]) && isset($_POST["password"])){
      //資料庫帳密比對正確
      if($_POST["account"] == $db_account && $_POST["password"] == $db_password){
          //若輸入的帳密正確，轉址去首頁
          $_SESSION['is_login'] = TRUE;
          header('location: index.php');
      }
      //資料庫帳密比對錯誤
      else
      {
        $_SESSION['is_login'] = FALSE;

        $_SESSION['msg'] = "<div class='error'>密碼錯誤，請再試一次。</div>";
        
        header("location: login.php");
      }
  }
  else
  {
      header("location: login.php");
  }

?>