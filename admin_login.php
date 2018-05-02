<?php
	session_start();
	$admin_nm=$_POST["admin_name"];
	$admin_paswd=$_POST["admin_pwd"];
	
	if(($admin_nm=="admin" && $admin_paswd=="admin"))
	{
		$_SESSION['admin_name']=$admin_nm;
		header('location:admin.php');
	}
	else
	{
		//echo "<script> alert('Invalid Username and Password'); </script>";
		header('location:admin_page.php');
	}
?>