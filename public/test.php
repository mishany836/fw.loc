<?php
        // РАБОТА С ORM
    require 'rb.php';
    $db = require '../config/config_db.php';
    R::setup($db['dsn'], $db['user'], $db['pass'], $options);
   //var_dump(R::testConnection());
    R::freeze(true);
    R::fancyDebug(TRUE);

    //Create

    //   $cat = R::dispense('category');
    //    $cat->title = 'Категоия 4';
    //    $id = R::store($cat); //сохраняем после выполненного действия
    //    var_dump($id);

    //Read
   // $cat = R::load('category', 2);
   // print_r($cat);
    //echo $cat->title; // работает как с обьектом
   // echo $cat['title']; // работает как с массивом

    //Update
    //$cat = R::load('category', 4);
    //echo $cat->title . '<br>';
    //$cat->title = 'Категория 4';
    //R::store($cat);
    //echo $cat->title ;
    //
    //    $cat = R::dispense('category');
    //    $cat->title = 'Категоия 3!!!';
    //    $cat->id = 3;
    //    R::store($cat);

    //Delete
    //$cat = R::load('category', 4);// загружаем нужную строку в таблице
    //  R::trash($cat); //удаляет строку в таблице
    //  R::wipe('category'); // очищает таблицу

    //$cats = R::findAll('category'); // найти все из указанной таблицы
    //$cats = R::findAll('category', 'id > ?', [2]);// поик по условию
    //$cats = R::findAll('category', 'title LIKE ?', ['%cat%']);// поиск по условию найти все в таблице где есть  %cat%
//    $cat = R::findOne('category', 'id = 2');// поик по заданному условию где id = 2
//    echo '<pre>';
//    print_r($cat);
















