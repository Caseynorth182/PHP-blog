<?php
require_once 'PDO.php';


//функция вывода из базы данных
function select($query) {
    global $pdo;
    $queryResult = [];
    $result = $pdo->query($query);

    if ($result > 0) {
        $db = $result->fetchAll(PDO::FETCH_ASSOC);
        $queryResult = $db;
    }
    return $queryResult;
}

//функция добовления в базу данных
function execQuery($query) {
    global $pdo;
    if (mysqli_query($conn, $query)){
        return true;
    }
    return false;
}