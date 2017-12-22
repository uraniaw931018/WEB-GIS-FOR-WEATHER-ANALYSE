<?php

// 检查管理员帐号和密码是否正确,
$con=mysql_connect("localhost",$_POST['id'],$_POST['pw']);
	mysql_query("SET NAMES 'gbk'"); //设置数据库编码
	mysql_select_db("admin"); //选择数据库
if($con) 
{
	session_start();
	$_SESSION['Adm']=$_POST['id'];
	$_SESSION['pw']=$_POST['pw'];
	include('head.php');
	echo "<p align=center><font size='5' color='blue'>登录成功！</font></p>";
}
else { 
	// 包含头文件
	include('head.php');
    // 管理员登录失败
	echo "<table width='100%' align=center><tr><td align=center>";
	echo "帐号或密码错误，或者不是管理员帐号<br>";
    echo "<font color=red>管理员登录失败！</font><br><a href='adminlogin.php'>请重试</a>";
    echo "</td></tr></table>";
}

?>

