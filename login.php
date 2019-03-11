<?php session_start(); ?>

<!DOCTYPE html>
<html lang="zh-TW" class="loginbg">
<head>
    <?php include("head.php"); ?>
    <title>Log in</title>
</head>
<body>
  <?php
    //判別是否有此變數可用，且已驗證帳密正確，就轉址去首頁
    if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):
    header("location: index.php");
  ?>
  <?php else: ?>
    <div class="login">
        <div class="login-top">
            <img src="images/zip/logo-5.jpg">
        </div>
        <form method="POST" action="check_login.php" class="needs-validation" novalidate>
        <div class="userkeyin">
<!--            <img src="images/icon/sr-icon.jpg"> -->
            <div class="form-group">
                <label for="validationServer01">信箱帳號</label>
                <input type="email" class="form-control" name="account" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com" required>
<!--                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">密碼</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>               
                  <?php 
                    if(isset($_SESSION['msg'])){
                      echo $_SESSION['msg'];
                    } 
                  ?>
            </div>
            <button type="submit" class="btn btn-primary">登入</button>
        </div>
        </form>
        <br>
        <p class="create-account">還沒有帳號嗎?現在就辦一個吧!&emsp;<a href="#">註冊帳號</a></p>
    </div>

    <?php
    //if($_SERVER['REQUEST_METHOD'] == "POST"){
    //    $account = $_POST['account'];
    //    $password = $_POST['password'];
    //    echo $account.$password;
    //}    
    ?>

  <?php endif; ?>

</body>
</html>