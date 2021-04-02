<?php
    require_once 'vendor/PDO.php';
    require_once 'vendor/function_db.php';
    require_once 'vendor/function.php';
    $route = $_GET['route'];
    //РОУТ КОТОРЫЙ ПРОПИСАН в .htacccess

$route = (explodeURL($route));


    //main - главная
    //cat - категории
    //article - статьи


switch ($route) {
    case ($route[0] === ''):
        require_once 'templates/main.php';
        break;
    case ($route[0]== 'article' && isset($route[1])):
        $url = $route[1];
        $result = getArticle($url);
        require_once 'templates/article.php';
        break;
    case 2:
        echo "i равно 2";
        break;
    default:
        echo "i не равно 0, 1 или 2";
}


