<?php
/**
 * Created by PhpStorm.
 * User: ½¡
 * Date: 2015/7/6
 * Time: 14:11
 */

 $nc=trim($_GET[nc]);
?>
<?php
include("conn.php");
?>
<html>
<head>
    <title>
        Check
    </title>
    <link rel="stylesheet" type="text/css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
        <td height="50"><div align="center">

                <?php
                if($nc=="") {
                    echo "Please enter your name!";
                } else {
                    $sql=mysql_query("select * from mismatch_user where username='".$nc."'",$conn);
                    $info=mysql_fetch_array($sql);
                    if ($info == true) {
                        echo "Sorry,the name was used!";
                    } else {
                        echo "Congratulations, the name can be used.!";
                    }
                }
                ?>
            </div></td>
    </tr>
    <tr>
        <td height="50"><div align="center"><input type="button" value="OK" class="buttoncss" onClick="window.close()"></div></td>
    </tr>
</table>
</body>