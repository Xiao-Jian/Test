<?php
/**
 * Created by PhpStorm.
 * User: 肖健
 * Date: 2015/7/9
 * Time: 10:00
 */

//导入数据库配置
include("conn.php");
//启动session
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SESSION[username]=="") {
    echo "<script>alert('请先登录后购物！');history.back();</script>";
    exit;
}
?>
<html>
    <head>
        <title>Shop - ShopCar</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
    <h2>Welcome to Our Shop</h2>
    <h3>Shop - ShopCar</h3>
    <fieldset>
        <legend>Logged</legend>
        <?php
        //启动session
        session_start();
        //如果用户已输过用户名，则回显用户名
        if(isset($_SESSION['username'])){
            echo '您已登录用户 '.$_SESSION['username'].'<br/>';
            //点击“Log Out”，则转到logOut.php页面进行cookie的注销
            echo '<a href="logOut.php"> 登出('.$_SESSION['username'].')</a>';
            echo '<a href="logIn.php"> 回到主页</a>';
        }
        ?>
    </fieldset>
    <h2>       </h2>
    </body>

    <table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="561" align="center" valign="top" bgcolor="#FFFFFF"><table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                </table>
                <table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
                    <form name="form1" method="post" action="shopCar.php">
                        <tr>
                            <td bgcolor="#F5F5F5"><table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="557" height="438" align="center" valign="top" bgcolor="#F5F5F5"><table width="557"  border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td width="553" bgcolor="#FFFFFF"><table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td height="10" background="images/line1.gif"></td>
                                                                <?php
                                                                echo "购物车";
                                                                ?>
                                                            </tr>

                                                            <table width="550" border="00" align="center" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                                    <?php
                                                                                    $user_username = test_input($_SESSION['username']);
                                                                                    $sql=mysql_query("select * from shop_car");
                                                                                    $flag1=1;
                                                                                    while($info=mysql_fetch_array($sql)) {
                                                                                            $flag1=0;
                                                                                            if($info['username']==$user_username) {
                                                                                                ?>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <table width="270" border="0" cellspacing="10" cellpadding="1">
                                                                                                            <tr>
                                                                                                                <td width="130" rowspan="5">
                                                                                                                    <div align="center">
                                                                                                                        <?php
                                                                                                                        if (trim($info[image] == "")) {
                                                                                                                            echo "暂无图片";
                                                                                                                        } else {
                                                                                                                            ?>
                                                                                                                            <img src="<?php echo $info[image]; ?>" width="80" height="80" border="0">
                                                                                                                        <?php
                                                                                                                        }
                                                                                                                        ?>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td width="11" height="16">&nbsp;</td>
                                                                                                                <td width="124"><font color="000000">名称：<width="10"height="10"><?php echo $info[name]; ?></font></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td height="16">&nbsp;</td>
                                                                                                                <td><font color="#000000">价格：</font><font color="FF6501"><?php echo $info[price]; ?></font></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td height="16">&nbsp;</td>
                                                                                                                <td>
                                                                                                                    <a href="deleteShopCar.php?name=<?php echo "$info[name]";?>"> 移出购物车</a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                            <a href="https://cashierzth.alipay.com/standard/fastpay/fastPayCashier.htm?outBizNo=2015070921001004970009869910&timeStamp=1436431497568&bizIdentity=trade20001&orderId=0709fba3a7266aa23507788011057971&country=CN">去付款</a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php
                                                                                            }
                                                                                    }
                                                                                    if($flag1==1) {
                                                                                        echo "购物车暂无商品!";
                                                                                    }
                                                                                    ?>
                                                                        </table>
                                                                </tr>
                                                            </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </form>
                </table></td>
        </tr>
    </table>
    <?php
    include("bottom.php");
    ?>
</html>