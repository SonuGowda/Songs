<?php
include("dbconnection.php");

	$sql = "SELECT * FROM users WHERE Email='$_GET[exampleInputEmail1]' AND Password='$_GET[exampleInputPassword1]';";
	echo $sql;
	echo $_GET[exampleInputEmail1]."vgv";
	echo $_GET[exampleInputPassword1];
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	if(mysqli_num_rows($qsql) == 1)
	{	echo "Console.log('SELECT * FROM users WHERE email=');";
		$qsql = mysqli_fetch_array($qsql);
		$_SESSION[UserName] = $qsql[UserName]; 
		
		echo "<script>alert('SELECT * FROM users WHERE email='$_GET[email]' AND password='$_GET[password]'');</script>";
			
		
		
	}
	else
	{	echo "Console.log('SELECT * FROM users WHERE email=');fail";
		echo "<script>alert('SELECT * FROM users WHERE email='$_GET[email]' AND password='$_GET[password]'');</script>";
	}

