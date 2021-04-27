<?php


namespace fw\core;


class Registry
    {
        use TSingleton; // trait - для избежания дублирования кода

        protected static $properties = [];

     public function setProperty($name, $value){
         self::$properties[$name] = $value;
     }

     public function getProperty($name){
         if(isset(self::$properties[$name])){
             return self::$properties[$name];
         }
         return null;
     }
     public function getProperties(){
         return self::$properties;
     }
        public function __get($name)
        {
            if (is_object(self::$objects[$name])) {
                return self::$objects[$name];
            }
        }

        public function __set($name, $object)
        {
            if (!isset(self::$objects[$name])){
                self::$objects[$name] = new $object;
            }
        }


        public function getList()
        {
            echo '<pre>';
            var_dump(self::$objects);
            echo '</pre>';
        }


    }