<?php 

require "../../vendor/autoload.php";

use Odalferro\Db\DbConnect;

DbConnect::setConfiguration('./config.php');
$pdo = DbConnect::getInstance();

var_export($pdo);



