<?php
/**
 * Created by PhpStorm.
 * User: 肖健
 * Date: 2015/7/9
 * Time: 10:01
 */

//导入数据库配置文件
include("conn.php");
//启动session
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SESSION[username]==""){
    echo "<script>alert('请先登录后购物！');history.back();</script>";
    exit;
}

$user_username=$_SESSION['username'];
$na=strval($_GET[name]);

$sql=mysql_query("select * from goods where name='".$na."'",$conn);
$info=mysql_fetch_array($sql);
if($info[number]<=0){
    echo "<script>alert('该商品已售完！');history.back();</script>";
    exit;
}
$price=$info[price];
$image=test_input($info[image]);

$sql1=mysql_query("select * from shop_car where username='".$user_username."'",$conn);
$info1=mysql_fetch_array($sql1);
$flag=1;
while($info1[name]==$na){
    echo "<script>alert('该商品已在您的购物车中！');history.back();</script>";
    $flag=0;
    exit;
}
if($flag==1) {
    mysql_query("insert into shop_car (username,name,price,image) values ('$user_username','$na','$price','$image')",$conn);
}

header("location:shopCar.php");
?>