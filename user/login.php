<?php
session_start();


//登录
if(!isset($_POST['submit'])){
    exit('点击此处 <a href="login.html">登录</a>');
}


//注销登录
if(isset($_POST['action']) && $_GET['action'] == "logout"){
	unset($_SESSION['userid']);
	unset($_SESSION['email']);
	echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
	exit;
}

$email = htmlspecialchars($_POST['email']);
//$password = MD5($_POST['password']);
$password = $_POST['password'];

echo $email ;
echo $password ;

//包含数据库连接文件
include('../common/conn.php');
//检测用户名及密码是否正确
$check_query = mysql_query("select userid,username from user where email='$email' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
    //登录成功
    $_SESSION['username'] =  $result['username'];
    $_SESSION['userid'] = $result['userid'];
    echo $result['username'],' 欢迎你！进入 <a href="myprofile.php">用户中心</a><br />';
    echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>