<?php
/*
 * main page template;
 */
require_once 'vendor/PDO.php';
require_once 'vendor/function_db.php';
require_once 'vendor/function.php';

$res = select('SELECT * FROM `info`');
/*echo '<pre>';
var_dump($res);
echo '</pre>';*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 mt-md-4 offset-md-2">
           <?
                foreach ($res as $value) :
           ?>
            <div class="card mb-3">
                <h3 class="card-header"><?= $value['title'] ?></h3>
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $value['descr_min']?>
                    </h5>
                </div>
                <img src="assets/img/<?= $value['image']?>" alt="" >
                <div class="card-body">
                    <p class="card-text">
                        <?= $value['description']?>
                    </p>
                </div>

                <div class="card-body">
                    <a href="/article/<?= $value['url']?>" class="card-link">Читать полностью</a>
                </div>
                <div class="card-footer text-muted">
                    ID ЗАПИСИ ->
                   <?= $value['cid']?>
                </div>
            </div>

        <?
            endforeach;
        ?>
            <button type="button" class="btn btn-success">Success</button>

        </div>
    </div>
</div>








<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

