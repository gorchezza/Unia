<?php 

$driver = 'mysql';
$host = 'localhost';
$db_name = 'unia';
$db_user = 'root';
$db_pass = 'mysql';
$charset = 'utf8';

// $dsn = "$driver:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try{
    $pdo = new PDO(
        "$driver:host=$host; dbname=$db_name; charset=$charset", $db_user, $db_pass, $options
    );
}catch (PDOException $i){
    die("Ошибка подключенрия к базе данных");
}

?>