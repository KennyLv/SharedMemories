<?php
session_start();


//��¼
if(!isset($_POST['submit'])){
    exit('����˴� <a href="login.html">��¼</a>');
}


//ע����¼
if(isset($_POST['action']) && $_GET['action'] == "logout"){
	unset($_SESSION['userid']);
	unset($_SESSION['email']);
	echo 'ע����¼�ɹ�������˴� <a href="login.html">��¼</a>';
	exit;
}

$email = htmlspecialchars($_POST['email']);
//$password = MD5($_POST['password']);
$password = $_POST['password'];

echo $email ;
echo $password ;

//�������ݿ������ļ�
include('../common/conn.php');
//����û����������Ƿ���ȷ
$check_query = mysql_query("select userid,username from user where email='$email' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
    //��¼�ɹ�
    $_SESSION['username'] =  $result['username'];
    $_SESSION['userid'] = $result['userid'];
    echo $result['username'],' ��ӭ�㣡���� <a href="myprofile.php">�û�����</a><br />';
    echo '����˴� <a href="login.php?action=logout">ע��</a> ��¼��<br />';
    exit;
} else {
    exit('��¼ʧ�ܣ�����˴� <a href="javascript:history.back(-1);">����</a> ����');
}
?>