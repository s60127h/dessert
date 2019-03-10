<?php
    //啟動session
    session_start();

    //清除session
    session_unset();

    //轉址回登入頁面
    header("location: login.php");

?>