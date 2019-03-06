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
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</body>
</html>