<?php
namespace vendor\core;

class Router
{
    /**
     * таблица маршрутов
     * @var array
     */
    protected static $routes = [];
    /**
     * текущий маршрут
     * @var array
     */
    protected static $route = [];

    /**
     * таблица маршрутов
     * метод add добавляет маршрут в таблицу маршрутов
     * @param $regexp - регулярное выражение
     * @param array $route - указывает какой маршрут вызвать
     */
    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    /**
     * вспомогательный метод возвращает таблицу  маршрутов
     * @return array
     */
    public static function getRoutes()
    {
        return self::$routes;
    }

    /**
     * возвращает текущий маршрут с которым работает данное приложение
     * @return array
     */
    public static function getRoute()
        {
        return self::$route;
        }

    /**
     * метод ищет совпадения с запросом в таблице маршрутов
     * @param $url
     * @return bool
     */
      public static function matchRoute($url)
      {
        foreach (self::$routes as $pattern => $route)
        {
            if (preg_match("#$pattern#i", $url, $matches))
            {
                foreach ($matches as $k => $v) {
                    if (is_string($k)){
                        $route[$k] = $v;
                    }
                }
                if (!isset($route['action'])){
                    $route['action'] = 'index';
                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
                return true;
            }
        }
        return false;
      }

    /**
     * перенаправляет URL по корректному маршруту
     * @param string $url входящий URL
     * @return void
     */
    public static function dispatch($url)
    {
        $url = self::removeQueryString($url);
         if (self::matchRoute($url)) {
    $controller = 'app\controllers\\' . self::$route['controller'] . 'Controller';
    if (class_exists($controller)){
      $cObj = new $controller(self::$route);
      $action = self::lowerCamelCase(self::$route['action']) . 'Action';
      if (method_exists($cObj, $action)){
          $cObj->$action();
          $cObj->getView();
      }else{
          echo "Метод <b>$controller::$action</b> не найден";
      }
    }else{
        echo "Контроллер <b>$controller</b> не найден";
    }
         }else{
             http_response_code(404);
             include '404.html';
         }
    }
    protected static function upperCamelCase($name){
        //$name = str_replace('-', ' ', $name);// убираем дефиз и заменяем пробелом
        //$name = ucwords($name);// ucwords- делает первую букву в верхнем регистре
        //$name = str_replace(' ', '',$name); // заменяем пробел пустой строкой
       return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));

    }
    protected static function lowerCamelCase($name){
        return lcfirst(self::upperCamelCase($name));

    }
    protected static function removeQueryString($url)
        {
            if ($url) {
            $params = explode('&', $url, 2);
                if (false === strpos($params[0], '=')){
                    return rtrim($params[0], '/');
                }else{
                return '';
            }

        }

    }
}















