<?php 

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    define('ROOT', dirname(__FILE__));
    require_once(ROOT . '/components/Router.php');
    require_once(ROOT . '/components/db_connect.php');

    $Router = new Router;
    $Router->run();
?>
