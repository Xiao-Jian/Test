<?php
/**
 * Created by PhpStorm.
 * User: ��
 * Date: 2015/7/5
 * Time: 15:07
 */

//ʹ�ûỰ�ڴ洢�ı���ֵ֮ǰ�����ȿ����Ự
session_start();
//ʹ��һ���Ự��������¼״̬
if(isset($_SESSION['username'])){
    echo 'You are Logged as '.$_SESSION['username'].'<br/>';
    //�����Log Out��,��ת��logOutҳ�����ע��
    echo '<a href="logOut.php"> Log Out('.$_SESSION['username'].')</a>';
}
/**���ѵ�¼ҳ���У����������û���session��$_SESSION['username']��
 * $_SESSION['user_id']�����ݿ���в�ѯ���������ö�ö�����*/

?>