<?php
/**
 * Created by PhpStorm.
 * User: ��
 * Date: 2015/7/5
 * Time: 15:08
 */

//��ʹ��ע��ʱ��Ҳ�������ȿ�ʼ�Ự���ܷ��ʻỰ����
session_start();
//ʹ��һ���Ự��������¼״̬
if(isset($_SESSION['user_id'])){
    //Ҫ����Ự��������$_SESSION����ȫ�ֱ�������Ϊһ��������
    $_SESSION = array();
    //�������һ���Ựcookie��ͨ��������ʱ������Ϊ֮ǰ1��Сʱ�Ӷ�����ɾ��
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-3600);
    }
    //ʹ������session_destroy()�������ó����Ự
    session_destroy();
}
//location�ײ�ʹ������ض�����һ��ҳ��
$home_url = 'logIn.php';
header('Location:'.$home_url);
?>