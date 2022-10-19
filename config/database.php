<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'brad');
define('DB_PASS', 'abcdefg');
define('DB_NAME', 'php_dev');

//Mysqlに接続
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error){
    die('Connection Failed' . $conn->connect_error);
}else{
    echo 'Connected';
}

?>