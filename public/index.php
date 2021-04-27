<?php
   // session_start();
    use \fw\core\Router;

    $query = rtrim($_SERVER['QUERY_STRING'], '/');
/**
 * константы указывающие нужный путь по указанному маршруту
 */
    define("DEBUG", 1);
    define('WWW', __DIR__);
    define('CORE', dirname(__DIR__) . '/vendor/fw/core');
    define('ROOT', dirname(__DIR__));
    define('LIBS', dirname(__DIR__) . '/vendor/fw/Libs');
    define('APP', dirname(__DIR__) . '/app');
    define('CACHE', dirname(__DIR__) . '/tmp/cache');
    define('LAYOUT', 'blog');
    define('ADMIN', 'http://fw.loc/admin');
/**
 * подключаем функции вывода массива на экран
 * и функцию автозагрузки файлов
 */
   require '../vendor/fw/Libs/functions.php';
    require __DIR__ . '/../vendor/autoload.php';


   new \fw\core\App;

   Router::add('^page/?(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Page']);
   Router::add('^page/(?P<alias>[a-z-]+)$', ['controller' => 'Page', 'action' => 'view']);
   Router::add('^news/view/(?P<id>[0-9]+)/?$', ['controller' => 'News', 'action' => 'view']);
   Router::add('^detail/view/(?P<id>[0-9]+)/?$', ['controller' => 'Detail', 'action' => 'view']);
   Router::add('^service/view/(?P<id>[0-9]+)/?$', ['controller' => 'Service', 'action' => 'index']);
/**
 * default routs
 * регулярка с указанными маршрутоми для admin
 */
   Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
    Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);
/**
 * регулярка с маршрутом ведущая на основную страницу
 */
   Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
   Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

/**
 * перенаправляет URL по корректному маршруту
 * @param string $url входящий URL
 * @return void
 */
    Router::dispatch($query);







