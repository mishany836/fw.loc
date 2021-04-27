<?php
//        // РАБОТА С ORM
//    require 'rb.php';
//    $db = require '../config/config_db.php';
//    R::setup($db['dsn'], $db['user'], $db['pass'], $options);
//   //var_dump(R::testConnection());
//   R::freeze(true);
//    R::fancyDebug(TRUE);

    //Create создание данных

//      $cat = R::dispense('category');//создаем таблицу category
//      $cat->title = 'Категоия 2';//таблица со столбцом title
//      $id = R::store($cat); //сохраняем после выполненного действия
        //var_dump($id);

    //Read чтение данных
   // $cat = R::load('category', 1);
   // print_r($cat);
    //echo $cat->title; // работает как с обьектом
   // echo $cat['title']; // работает как с массивом

    //Update //изменение данных
    //$cat = R::load('category', 4);
    //echo $cat->title . '<br>';
    //$cat->title = 'Категория 4';
    //R::store($cat);
    //echo $cat->title ;

//        $cat = R::dispense('category');
//        $cat->title = 'Категоия 9';
//        $cat->id = 9;
//        R::store($cat);

    //Delete //удаление каких либо данных
//    $cat = R::load('category', 7);// загружаем нужную строку в таблице
//      R::trash($cat); //удаляет строку в таблице
    //  R::wipe('category'); // очищает таблицу

    //$cats = R::findAll('categories'); // найти все из указанной таблицы
//    $cats = R::getAssoc("SELECT * FROM categories");// поик по условию
    //$cats = R::findAll('category', 'title LIKE ?', ['%cat%']);// поиск по условию найти все в таблице где есть  %cat%
//   $cat = R::findOne('category', 'id = 2');// поик по заданному условию где id = 2
//   echo '<pre>';
//   print_r($cats);
















