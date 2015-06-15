<?php

session_start();
include'connect.php';

if(!empty($_POST))
	{
	
	$username=$_POST['username'];
	$password=($_POST['password']);
	
	$sql = "select * from user where username='".$username."' and password='".$password."'";
	#echo $sql."<br/>";
	$query = mysql_query($sql) or die (mysql_error());
	
	//cek query valid atau tidak
	if($query)
		{
		$row=mysql_numrows($query);
		
		//jika $row > 0 atau username dan password ditemukan
		if($row > 0){
			$SESSION['isLoggedIn']=1;
			$SESSION['username']=$username;
			header('Location: ins.php');
		}else{
			echo "username atau password salah";
			}
		}
	}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<title> LORYSIDE</title>

<body>
<div class="header">


</div>

<div class="content1">
</div>
<div class="navigation">
<a href="produk.php">Produk</a>
<a href="ins.php">Input Data</a>
<a href="transaksi.php">Transaksi</a>
<a href="ins.php">Input Data</a>
<a href="transaksi.php">Transaksi</a>
<a href="logout.php">Logout</a>
</div>
<div class="content2">

					<center><text align="left"><font size="20">LOGIN ADMIN</font><br></text><br>
					<div class="wrap">
	<form name="form" action="" method="post">
	<table border="0">
	<tr><th bgcolor="white">Username</th><th> :</th><th><input type="text" name="username"/></th></tr>
	<tr><th bgcolor="white">Password</th><th> :</th><th><input type="password" name="password"/></th></tr>
	<tr><th colspan="3" align="right"><input type="submit" value="login" name="button"/></th></tr>
	</table>
	</form>


</div>
</div>
</body>
<div class="footer">
Copyright 
</div>
</html>

