<?php

// ������Ա�ʺź������Ƿ���ȷ,
$con=mysql_connect("localhost",$_POST['id'],$_POST['pw']);
	mysql_query("SET NAMES 'gbk'"); //�������ݿ����
	mysql_select_db("admin"); //ѡ�����ݿ�
if($con) 
{
	session_start();
	$_SESSION['Adm']=$_POST['id'];
	$_SESSION['pw']=$_POST['pw'];
	include('head.php');
	echo "<p align=center><font size='5' color='blue'>��¼�ɹ���</font></p>";
}
else { 
	// ����ͷ�ļ�
	include('head.php');
    // ����Ա��¼ʧ��
	echo "<table width='100%' align=center><tr><td align=center>";
	echo "�ʺŻ�������󣬻��߲��ǹ���Ա�ʺ�<br>";
    echo "<font color=red>����Ա��¼ʧ�ܣ�</font><br><a href='adminlogin.php'>������</a>";
    echo "</td></tr></table>";
}

?>

