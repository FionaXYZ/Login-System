<?php 
//allow the config
define('_CONFIG_',true);
//require the config
require_once "../inc/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Content-Type:application/json');

    $return=[];
    // Make sure the user does not exist. 

	// Make sure the user CAN be added AND is added 

    // Return the proper information back to JavaScrit to redirect us
    $return['redirect']='/dashboard.php';
    $return['name']="Fiona";
    echo json_encode($return,JSON_PRETTY_PRINT);exit;

}else{
    exit('test');

}

?>