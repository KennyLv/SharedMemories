<?php
/*****************************
*���ݿ�����
*****************************/
//$conn = @mysql_connect("sql113.byethost15.com","b15_14447457","qwertyui1");
$conn = @mysql_connect("localhost","root","123456");
if (!$conn){
    die("�������ݿ�ʧ�ܣ�" . mysql_error());
}
mysql_select_db("webgame", $conn);
//�ַ�ת��������
mysql_query("set character set 'gbk'");
//д��
mysql_query("set names 'gbk'");
?>