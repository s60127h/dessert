<!DOCTYPE html>
<html lang="zh-TW" class="loginbg">
<head>
    <?php include("head.php"); ?>
    <title>Log in</title>
</head>
<body>
    <div class="login">
        <div class="login-top">
            <img src="images/zip/logo-4.jpg">
        </div>
        <form>
        <div class="userkeyin">
<!--            <img src="images/icon/sr-icon.jpg"> -->
            <div class="form-group">
                <label for="exampleInputEmail1">信箱帳號</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com">
<!--                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">密碼</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">登入</button>
        </div>
        </form>
        <br>
        <p class="create-account">還沒有帳號嗎?現在就辦一個吧!&emsp;<a href="#">註冊帳號</a></p>
    </div>
</body>
</html>