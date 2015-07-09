<?php
/**
 * Created by PhpStorm.
 * User: 肖健
 * Date: 2015/7/5
 * Time: 15:08
 */

//启动session
session_start();

if(isset($_SESSION['user_id'])){
    $_SESSION = array();

    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-3600);
    }

    session_destroy();
}

$home_url = 'logIn.php';
header('Location:'.$home_url);
?>