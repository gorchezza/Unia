<?php

session_start();
require 'connect.php';

// функция для красивого выводы данных
function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

// Проверка выполнения запроса к БД
function dbCheckError($query){
    $errInfo = $query->errorInfo();

    if ($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}

// Запрос на получение данных одной таблицы
function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";
    if (!empty($params)){
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)){
                $value = "'" . $value . "'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key=$value";
            }else {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

// Запрос на получение данных с одной строки таблицы
function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";
    if (!empty($params)){
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)){
                $value = "'" . $value . "'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key=$value";
            }else {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}

// Добавление в таблицу новой строки
function insert($table, $params){
    global $pdo;
    $sql = "";

    $coll = '';
    $mask = '';

    $i = 0;
    foreach ($params as $key => $value) {
        if ($i == 0){
            if (is_numeric($value)){
                $coll = $coll . $key;
                $mask = $mask . $value;
            }else {
                $coll = $coll . $key;
                $mask = $mask . "'".$value."'";
            }
        }else{
            if (is_numeric($value)){
                $coll = $coll . ", ".$key;
                $mask = $mask . ", ".$value;
            }else {
                $coll = $coll . ", ".$key;
                $mask = $mask . ", '".$value."'";
            }
        }
        $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
        $i++;
    }
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $pdo->lastInsertId();
}

// Обновление данных в выбранной строке
function update($table, $id, $params){
    global $pdo;
    $sql = "";
    $coll_update = "";
    $i = 0;
    foreach ($params as $key => $value) {
        if ($i === 0){
            $coll_update = $coll_update . $key . " = " . "'".$value."'";
        }else {
            $coll_update = $coll_update . ", " . $key . " = " . "'".$value."'";
        }
        $i++;
    }
    $sql = "UPDATE $table SET $coll_update WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

// Удаление строки
function delete($table, $id){
    global $pdo;
    $sql = "DELETE FROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

?>