<?php 

require "../../vendor/autoload.php";
use Odalferro\Db\DbConnect;
use Odalferro\Db\config;

$connect = DbConnect::setConfiguration('config.php');
$pdo = DbConnect::getInstance();

var_dump($connect);


