<?php
  ob_start();
  ini_set('display_errors',1); 
  error_reporting(E_ALL);
  require 'config.php';
  require 'util/Auth.php';
  require 'util/Image.php';
 function __autoload($class){
   require LIBS.$class.".php";
 }
 
 
 
$bootstrap = new Bootstrap();

$bootstrap->init();

?>