<?php
//if there is no constant file called _CONFIG_, do not load this file
if(!defined('_CONFIG_')){
    exit('You do not have a config file');
}

class DB{
    protected static $con;
    private function __construct(){
        try{
            self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_system', 'Fiona', '123' );
			self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
        }catch(PDOException $e){
            echo "could not connect to database.";exit;
        }

    }
    public static function getConnection(){
        if(!self::$con){
            new DB();
        }
        return self::$con;
    }   
}
?>