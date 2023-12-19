<?php
$host="localhost";
$username="root";
$password="";
$db="arichai";

$dsn="mysql:host=$host; dbname=$db;charset=utf8";

try{
    $pdo = new PDO($dsn,$username,$password);
    // echo "เชื่อมต่อสำเร็จ";
}catch(PDOException $_GET){
    echo $e->getMessage();
}

require_once "db/controller.php";
$controller = new Controller($pdo);

?>