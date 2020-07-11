
<?php
//if there is no constant file called _CONFIG_, do not load this file
if(!defined('__CONFIG__')){
    exit('You do not have a config file');
}
class Page{
    // force the user to be logged in or be redirected
    static function ForceLogin(){
        if(isset($_SESSION['user_id'])){
            // user is allowed here
        }else{
            //user is not allowed here
            header("Location:/login.php");exit;
        } 
    }
    static function ForceDashboard(){
        if(isset($_SESSION['user_id'])){
            // user is allowed here but redirect anyway
            header("Location:/dashboard.php");exit;
        }else{
            //user is not allowed here
        
        } 
    }
    }

?>


