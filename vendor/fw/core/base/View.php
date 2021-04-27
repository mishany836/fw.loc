<?php


namespace fw\core\base;


use fw\core\App;

class View
{
    /**
     * текущий маршрут и параметры(controller, action, params)
     * @var array
     */
    public $route = [];
    /**
     * текущий  вид
     * @var string
     */
    public $view;
    /**
     * текущий шаблон
     * @var string
     */
    public $layout;

    public $scripts = [];

    public static $meta = ['title' => '', 'desc' => '', 'keywords' => ''];

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;
        if ($layout === false) {
            $this->layout = false;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
        $this->view = $view;

    }

    protected function compressPage($buffer){
        $search = [
            "/(\n)+/",
            "/\r\n+/",
            "/\n(\t)+/",
            "/\n(\ )+/",
            "/\>(\n)+</",
            "/\>\r\n</",
        ];
        $replace = [
            "\n",
            "\n",
            "\n",
            "\n",
            '><',
            '><',
        ];
        return preg_replace($search, $replace,$buffer);
    }

    /**
     * метод в котором подключаем нужный нам вид и шаблон
     * @param $vars данные которые мы получили в методе - set(); в Controller
     * @throws \Exception
     */
    public function render($vars)
    {
        Lang::load(App::$app->getProperty('lang'), $this->route);
        $this->route['prefix'] = str_replace('\\','/', $this->route['prefix']);
      if (is_array($vars)) extract($vars); // проверяем является ли наша переменная массивом или нет
                                            // и распечатываем если она является таковым
        $file_view = APP . "/views/{$this->route['prefix']}{$this->route['controller']}/{$this->view}.php";
        //ob_start([$this, 'compressPage']);
        ob_start(); // функция буферизации, сохраняет вид и шаблон для того ,
                    // чтобы вид не выходилcя на экран  раньше шаблона
        {
            if (is_file($file_view)) {
                require $file_view;
            } else {
                throw new \Exception("<p>Не найден вид <b>$file_layout</b></p>", 404);

            }
            $content = ob_get_contents();// создаем переменную в которую складываем наш общий вид,
                                          // где все содержимое буфера очищается и передается
                                           // в переменную $content с которой мы будем дальше работать
                                            // в процессе разработки
        }

        ob_clean();
        //$content = ob_get_clean();

        if(false !== $this->layout) {
                $file_layout = APP . "/views/layouts/{$this->layout}.php"; // в переменную $file-layout
                                                                            // отдаем наш шаблон,
                                                                            // который мы определили по умолчанию - default в public/index.php
                                                                             // и делаем простую проверку на его существование
                if(is_file($file_layout)) {
                    $content = $this->getScript($content);
                  $scripts = [];
                  if (!empty($this->scripts[0])){
                      $scripts = $this->scripts[0];
                  }
                    require $file_layout;
                } else {

                    throw new \Exception("<p>Не найден шаблон <b>$file_layout</b></p>", 404);
                }
            }
        }
        protected function getScript($content){
        $pattern = "#<script.*?>.*?</script>#si";
        preg_match_all($pattern, $content, $this->scripts);
        if(!empty($this->scripts)){
            $content = preg_replace($pattern, '', $content);
        }
            return $content;
        }
        public static function getMeta(){
        echo '<title>' . self::$meta['title'] . '</title>
        <meta name="description" content="' . self::$meta['desc'] . '">
        <meta name="keywords" content="' . self::$meta['keywords'] . '">';
        }
    public static function setMeta($title = '', $desc = '', $keywords = ''){
            self::$meta['title'] = $title;
            self::$meta['desc'] = $desc;
            self::$meta['keywords'] = $keywords;
        }

        public function getPart($file){
            $file = APP . "/views/{$file}.php";
            if(is_file($file)) {
                require_once $file;
            } else {
                echo "File {$file} not found...";
            }
        }
    }















