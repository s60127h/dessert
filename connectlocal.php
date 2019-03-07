<?php
$dbms='mysql';     //数据库类型
$host='localhost'; //数据库主机名
$dbName='library';    //使用的数据库
$user='root';      //数据库连接用户名
$pass='';          //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";


try {
    $conn = new PDO($dsn, $user, $pass); //初始化一个PDO对象
    // $conn->exec("SET CHARACTER SET utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "连接成功<br/>";

    } catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}

//默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
$db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));

?>