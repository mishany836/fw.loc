<!doctype html>
<html lang="ru">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php \fw\core\base\View::getMeta() ?>
   <link href="/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/public/css/main.css" rel="stylesheet" >
 </head>
<body>
<div class="container">
   <ul class="nav">
      <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
       <li class="nav-item"><a class="nav-link" href="/page/about">About</a></li>
       <li class="nav-item"><a class="nav-link" href="/admin">Admin</a></li>
       <li class="nav-item"><a class="nav-link" href="/user/signup">Signup</a></li>
     <li class="nav-item"><a class="nav-link" href="/user/login">Login</a></li>
     <li class="nav-item"><a class="nav-link" href="/user/logout">Logout</a></li>
   </ul>
<?php if (isset($_SESSION['error'])): ?>
   <div class="alert alert-danger">
      <?=$_SESSION['error']; unset($_SESSION['error'])?>
  </div>
<?php endif; ?>

<?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success">
<?=$_SESSION['success']; unset($_SESSION['success'])?>
       </div>
<?php endif; ?>



<?= $content ?>

</div>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="/public/bootstrap/js/bootstrap.min.js"></script>
<?php
    foreach ($scripts as $script){
       echo $script;
    }
?>
</body>
</html>

