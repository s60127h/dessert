<?php
//啟動session，加上@避免顯示error
@session_start();
$dbms='mysql';     //資料庫類型
$host='localhost'; //資料庫位址或IP
$dbName='sr_dessert';    //使用的資料庫
$user='root';      //資料庫帳號
$pass='';          //資料庫密碼
$dsn="$dbms:host=$host;dbname=$dbName";


try {
    $conn = new PDO($dsn, $user, $pass); //初始化PDO
    $conn->exec("SET CHARACTER SET utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "連接成功<br/>";

    } catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}

//默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
$db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));

?>