<?php //require_once 'link/connectlocal.php'; ?>

<!DOCTYPE html>
<html lang="zh-TW" class="loginbg">
<head>
    <?php include("head.php"); ?>
    <title>Register</title>
</head>
<body>
    <div class="login-top">
        <img src="images/index_icon/logo-5.jpg">
    </div>
    <form method="post" action="user_regester.php" id="register_form">
        <div id="user_register">
            <div class="form-group row">
                <label for="account" class="col-sm-4 col-form-label">信箱帳號</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="account" id="account" aria-describedby="emailHelp" placeholder="example@gmail.com" required>
                </div>
                <small id="emailHelp" class="form-text text-muted">請輸入現有完整信箱，往後將作為您的登入帳號</small>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">密碼</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="password" id="password" placeholder="請輸入密碼" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="check_password" class="col-sm-4 col-form-label">確認密碼</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="check_password" placeholder="再次確認密碼" required>
                </div>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">暱稱</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="name" id="name" placeholder="請輸入暱稱" required>
                </div>
            </div>
        </div>
            <div class="form-group row">
                <div class="col-xs-12" id="button">
                    <button type="submit" class="btn btn-primary">註冊</button>
                </div>
            </div>    
    </form>



</body>
</html>