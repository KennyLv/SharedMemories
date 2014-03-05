<?php
/*****************************
*数据库连接
*****************************/
//$conn = @mysql_connect("sql113.byethost15.com","b15_14447457","qwertyui1");
$conn = @mysql_connect("localhost","root","123456");
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}
mysql_select_db("webgame", $conn);
//字符转换，读库
mysql_query("set character set 'gbk'");
//写库
mysql_query("set names 'gbk'");
?>