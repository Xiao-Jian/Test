<?php
/**
 * Created by PhpStorm.
 * User: 肖健
 * Date: 2015/7/6
 * Time: 10:15
 */

$conn=mysql_connect("localhost","root","xj01280227") or die("数据库连接错误".mysql_error());
mysql_select_db("test",$conn) or die("数据库连接错误".mysql_error());
mysql_query("set character set gb2312");
mysql_query("set names gb2312");
?>