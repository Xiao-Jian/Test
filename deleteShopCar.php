<?php
/**
 * Created by PhpStorm.
 * User: 健
 * Date: 2015/7/9
 * Time: 14:28
 */

//导入数据库配置
include("conn.php");
//启动session
session_start();

$na=strval($_GET[name]);
$exec="delete from shop_car where name='$na'";
mysql_query($exec,$conn);

header("location:shopCar.php");
?>