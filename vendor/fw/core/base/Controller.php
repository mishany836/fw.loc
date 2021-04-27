<?php


namespace fw\core\base;


abstract class Controller
{
    /**
     * текущий маршрут и параметры(controller, action, params)
     * @var array
     */
    public  $route = [];
    /**
     * вид
     * @var
     */
    public $view;
    /**
     * текущий шаблон
     * @var string
     */
    public  $layout;
    /**
     * любые пользовательские данные из Базы Данных (title, name, и т.д)
     * пользовательские данные
     * @var array
     */
    public  $vars = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }
    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view); // создаем обьект вида
        $vObj->render($this->vars); // вызываем вид через метод render()
    }

    /**
     * наполняет данную переменную пользовательскими данными
     * @param $vars
     */
    public function set($vars){
    $this->vars = $vars;
    }
    public function isAjax(){
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }
    public function loadView($view, $vars = []){
        extract($vars);
        require APP . "/views/{$this->route['controller']}/{$view}.php";
    }
}





















