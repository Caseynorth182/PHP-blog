<?php
    require_once 'vendor/PDO.php';
    require_once 'vendor/function_db.php';
    require_once 'vendor/function.php';
    $route = $_GET['route'];
    //РОУТ КОТОРЫЙ ПРОПИСАН в .htacccess
    /*var_dump($route);*/




    //main - главная
    //cat - категории
    //article - статьи


switch ($route) {
    case null:
        require_once 'templates/main.php';
        break;
    case 1:
        echo "i равно 1";
        break;
    case 2:
        echo "i равно 2";
        break;
    default:
        echo "i не равно 0, 1 или 2";
}


