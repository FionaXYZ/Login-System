<?php
//if there is no constant file called _CONFIG_, do not load this file
 if(!defined('__CONFIG__')){
     exit('You do not have a config file');
 }
 // sessions are always turned on
 if(!isset($_SESSION)){
	 session_start();
 }

 	// Our config is below
	// Allow errors
	error_reporting(-1);
    ini_set('display_errors', 'On');
    
 //include the DB.php file
include_once "classes/DB.php";
include_once "classes/Filter.php";

$con=DB::getConnection();
 ?>