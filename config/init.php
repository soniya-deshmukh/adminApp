<?php
//session start
session_start();
require_once 'config.php';
//Include helper file
require_once 'helper/system-helper.php';
//autoloader for including files
function __autoload($class_name) {
require_once 'lib/'.$class_name.'.php';
} 
?>