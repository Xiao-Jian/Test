<?php
/**
 * Created by PhpStorm.
 * User: 肖健
 * Date: 2015/7/5
 * Time: 15:07
 */
?>

<html>
    <head>
        <title>Shop - Index</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h2>Welcome to Our Shop</h2>
        <h3>Shop - Logged</h3>
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
                echo '<a href="shopCar.php"> 查看购物车</a>';
            }
            ?>
        </fieldset>
        <h2>       </h2>
        <?php
        include("index.php");
        ?>
    </body>
</html>