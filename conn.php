<?php
/**
 * Created by PhpStorm.
 * User: ��
 * Date: 2015/7/6
 * Time: 10:15
 */

$conn=mysql_connect("localhost","root","xj01280227") or die("���ݿ���������Ӵ���".mysql_error());
mysql_select_db("test",$conn) or die("���ݿ���ʴ���".mysql_error());
mysql_query("set character set gb2312");
mysql_query("set names gb2312");
?>