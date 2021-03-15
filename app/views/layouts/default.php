<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$meta['title']?></title>
    <meta name="description" content="<?= $meta['desc']?>">
    <meta name="keywords" content="<?= $meta['keywords']?>">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link href="/css/main.css" rel="stylesheet" >
</head>
<body>
<div class="container">
    <?php if (!empty($menu)): ?>
        <ul class="nav nav-pills ">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="page/about">About</a></li>
        <?php foreach ($menu as $item):?>
            <li class=" nav-link">
                <a class="nav-link " aria-current="page" href="category/<?= $item['$id'] ?>"><?= $item['title'] ?></a></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
<h1>Hello, world!</h1>
<?=$content?>


<script src="/bootstrap/js/bootstrap.min.js"></script>
</div>
</body>
</html>