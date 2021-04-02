<?php
require_once 'vendor/PDO.php';
require_once 'vendor/function_db.php';

function explodeURL($url){
    return explode('/',$url);
}

function getArticle($url){
    $query = "SELECT * FROM `info` WHERE `url` = '$url'";
    return select($query);
}
