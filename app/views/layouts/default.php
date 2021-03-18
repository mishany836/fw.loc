<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php \vendor\core\base\View::getMeta() ?>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet" >
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   </head>
<body>
<div class="container">
    <?php if (!empty($menu)): ?>
        <ul class="nav nav-pills ">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="page/about">About</a></li>
        <?php foreach ($menu as $item): ?>
            <li class=" nav-link">
                <a class="nav-link " aria-current="page" href="category/<?= $item['$id'] ?>"><?= $item['title'] ?></a></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
<h1>Hello, world!</h1>

<?= $content ?>

</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

<?php
    foreach ($scripts as $script){
        echo $scripts;
    }
?>
</body>
</html>


















