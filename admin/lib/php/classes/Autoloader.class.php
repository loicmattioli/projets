<?php
class Autoloader{
    //fonction qui appelle la méthode de changement
    //automatique des classes
    static function register(){
        spl_autoload_register(array(__CLASS__,'autoload'));
    }

    static function autoload($classname){
        require $classname.".class.php";
    }
}
