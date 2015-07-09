<?php
/**
 * Created by PhpStorm.
 * User: 肖健
 * Date: 2015/7/5
 * Time: 15:07
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

$error_msg = "";
//判断用户是否已经设置cookie，如果未设置$_COOKIE['user_id']时，执行以下代码
if(!isset($_SESSION['user_id'])){
    if(isset($_POST['submit'])){
        //判断用户是否提交登录表单，如果是则执行如下代码
        $user_username = test_input($_POST['username']);
        $user_password = test_input($_POST['password']);

        $data = mysql_query("select * from mismatch_user");
        while($row = mysql_fetch_array($data)) {
            if ($row['username'] == $user_username && $row['password'] == $user_password) {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                $home_url = 'loged.php';
                header('Location: ' . $home_url);
            } else {//若未查到匹配的记录，则设置错误信息
                $error_msg = '对不起，您的用户名或密码有错！';
            }
        }
    }
    if(isset($_POST['register'])) {
        $home_url = 'register.php';
        header('Location: ' . $home_url);
    }
}else{//如果用户已经登录，则直接跳转到已经登录页面
    $home_url = 'loged.php';
    header('Location: '.$home_url);
}
?>
<html>
    <head>
        <title>Shop - Log In</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h2>Welcome to Our Shop</h2>
        <h3>Shop - Log In</h3>
        <!--通过$_COOKIE['user_id']进行判断，如果用户未登录，则显示登录表单，让用户输入用户名和密码-->
<?php
if(!isset($_SESSION['user_id'])){
    echo '<p class="error">'.$error_msg.'</p>';
    ?>
    <!-- $_SERVER['PHP_SELF']代表用户提交表单时，调用自身php文件-->
    <form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
            <legend>Log In</legend>

            <label for="username">用户：</label>
            <!--如果用户已输过用户名，则回显用户名-->
            <input type="text" id="username" name="username"
                   value="<?php if(!empty($user_username)) echo $user_username; ?>" />

            <br/>

            <label for="password">密码：</label>
            <input type="password" id="password" name="password"/>

        </fieldset>
        <input type="submit" value="登录" name="submit"/>
        <input type="submit" value="注册" name="register"/>
    </form>
    <?php
    }
    include("index.php");
    ?>
    </body>
</html>