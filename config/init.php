<?php session_start();
    // config
    require_once 'config.php';

    // helpers
    require_once 'helpers/system_helper.php';

    function my_autoloader($class) {
        include 'lib/' . $class . '.php';
    }
    
    spl_autoload_register('my_autoloader');
?>