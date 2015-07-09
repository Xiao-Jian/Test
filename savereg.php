<?php
/**
 * Created by PhpStorm.
 * User: 肖健
 * Date: 2015/7/6
 * Time: 14:05
 */

session_start();
include("conn.php");
$name=$_POST[usernc];
$pwd=$_POST[p1];
$email=$_POST[email];

$sql=mysql_query("select * from mismatch_user where username='".$name."'",$conn);
$info=mysql_fetch_array($sql);
if($info==true) {
    echo "<script>alert('The Name has been used!');history.back();</script>";
    exit;
}
else
{
    mysql_query("insert into mismatch_user (username,password,mail) values ('$name','$pwd','$email')",$conn);
    $_SESSION['username']=$name;
    echo "<script>alert('Congratulations, Register Successfully!');window.location='loged.php';</script>";
}
?>
