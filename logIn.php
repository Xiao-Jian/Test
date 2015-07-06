<?php
/**
 * Created by PhpStorm.
 * User: 健
 * Date: 2015/7/5
 * Time: 15:07
 */

//插入连接数据库的相关信息
include("conn.php");
//开启一个会话
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$error_msg = "";
//如果用户未登录，即未设置$_SESSION['user_id']时，执行以下代码
if(!isset($_SESSION['user_id'])){
    if(isset($_POST['submit'])){//用户提交登录表单时执行如下代码

        $user_username = test_input($_POST['username']);
        $user_password = test_input($_POST['password']);

        $data = mysql_query("select * from mismatch_user");
        //若查到的记录正好为一条，则设置SESSION，同时进行页面重定向
        while($row = mysql_fetch_array($data)) {
            if ($row['username'] == $user_username && $row['password'] == $user_password) {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                $home_url = 'loged.php';
                header('Location: ' . $home_url);
            } else {//若查到的记录不对，则设置错误信息
                $error_msg = 'Sorry, you must enter a valid username and password to log in.';
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
<!--通过$_SESSION['user_id']进行判断，如果用户未登录，则显示登录表单，让用户输入用户名和密码-->
<?php
if(!isset($_SESSION['user_id'])){
    echo '<p class="error">'.$error_msg.'</p>';
    ?>
    <!-- $_SERVER['PHP_SELF']代表用户提交表单时，调用自身php文件 -->
    <form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
            <legend>Log In</legend>

            <label for="username">Username:</label>
            <!-- 如果用户已输过用户名，则回显用户名 -->
            <input type="text" id="username" name="username"
                   value="<?php if(!empty($user_username)) echo $user_username; ?>" />

            <br/>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"/>

        </fieldset>
        <input type="submit" value="Login" name="submit"/>
        <input type="submit" value="Register" name="register"/>
    </form>
<?php
}
?>
</body>
</html>