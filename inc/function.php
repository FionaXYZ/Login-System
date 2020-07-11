<?php
// force the user to be logged in or be redirected
function ForceLogin(){
    if(isset($_SESSION['user_id'])){
        // user is allowed here
    }else{
        //user is not allowed here
        header("Location:/login.php");exit;
    } 
}
function ForceDashboard(){
    if(isset($_SESSION['user_id'])){
        // user is allowed here but redirect anyway
        header("Location:/dashboard.php");exit;
    }else{
        //user is not allowed here
       
    } 
}
?>