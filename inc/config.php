<?php
//if there is no constant file called _CONFIG_, do not load this file
 if(!defined('_CONFIG_')){
     exit('You do not have a config file');
 }
 //include the DB.php file
include_once "classes/DB.php";

$con=DB::getConnection();
 ?>