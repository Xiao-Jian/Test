<?php
/**
 * Created by PhpStorm.
 * User: ��
 * Date: 2015/7/5
 * Time: 15:07
 */

//�����������ݿ�������Ϣ
include("conn.php");
//����һ���Ự
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$error_msg = "";
//����û�δ��¼����δ����$_SESSION['user_id']ʱ��ִ�����´���
if(!isset($_SESSION['user_id'])){
    if(isset($_POST['submit'])){//�û��ύ��¼��ʱִ�����´���

        $user_username = test_input($_POST['username']);
        $user_password = test_input($_POST['password']);

        $data = mysql_query("select * from mismatch_user");
        //���鵽�ļ�¼����Ϊһ����������SESSION��ͬʱ����ҳ���ض���
        while($row = mysql_fetch_array($data)) {
            if ($row['username'] == $user_username && $row['password'] == $user_password) {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                $home_url = 'loged.php';
                header('Location: ' . $home_url);
            } else {//���鵽�ļ�¼���ԣ������ô�����Ϣ
                $error_msg = 'Sorry, you must enter a valid username and password to log in.';
            }
        }
    }
    if(isset($_POST['register'])) {
        $home_url = 'register.php';
        header('Location: ' . $home_url);
    }
}else{//����û��Ѿ���¼����ֱ����ת���Ѿ���¼ҳ��
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
<!--ͨ��$_SESSION['user_id']�����жϣ�����û�δ��¼������ʾ��¼�������û������û���������-->
<?php
if(!isset($_SESSION['user_id'])){
    echo '<p class="error">'.$error_msg.'</p>';
    ?>
    <!-- $_SERVER['PHP_SELF']�����û��ύ��ʱ����������php�ļ� -->
    <form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
            <legend>Log In</legend>

            <label for="username">Username:</label>
            <!-- ����û�������û�����������û��� -->
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