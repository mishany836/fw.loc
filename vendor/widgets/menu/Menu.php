<?php


namespace vendor\widgets\menu;


class Menu
{
    protected $data;
    protected $tree;
    protected $menuHtml;
    protected $tpl;
    protected $container;
    protected $table;
    protected $cache;

    public function __construct()
    {
      $this->run();
    }
    public function run(){
    $this->data = \R::getAssoc("SELECT * FROM categories");
    debug($this->run());

    }
}














