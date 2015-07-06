<?php
/**
 * Created by PhpStorm.
 * User: ½¡
 * Date: 2015/7/6
 * Time: 10:46
 */

$con = mysql_connect("localhost","root","xj01280227");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("test", $con) or die("Could not connect2: ".mysql_error());

$result = mysql_query("SELECT * FROM test");

while($row = mysql_fetch_array($result))
{
    echo $row['Firstname'] . " " . $row['Lastname'];
    echo "<br />";
}

mysql_close($con);
?>