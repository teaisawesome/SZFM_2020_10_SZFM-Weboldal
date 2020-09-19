<?php 
/**
 * 
 */
define('WEBROOT', str_replace("info/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("info/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

require(ROOT . 'core/cores.php');

require(ROOT . 'route/router.php');
require(ROOT . 'route/request.php');
require(ROOT . 'route/dispatcher.php');

$dispatcher = new Dispatcher();
$dispatcher->dispatch();
?>
