<?php
namespace core;
class  imooc{
    public static $classMap = array();
    static public function run(){
        P('ok');
        $route = new \core\route();
    }
    static public function load($class){
        //自动加载类库
        // new \core\route();
        //$class = '\core\route'
        //IMOOC.'\core\route'
        if(isset($classMap[$class])){
            return true;
        }else{
            str_replace('\\','/',$class);
            $file = IMOOC.'/'.$class.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }

    }
}