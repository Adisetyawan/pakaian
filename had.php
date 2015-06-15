<?php
session_start();
include 'connect.php';

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
			header('Location: Hadministration.php');
		}else{
			echo "username atau password salah";
			}
		}
	}
?>

<html>
<head>
<title>LoginAdministration</title>
<link rel="stylesheet" href="style/styleku.css"></style>
</head>
<body background="images/oo.jpg">
	<ul class="navbar">
		<li><H2><font color="Black">MENU</font></h2>
		<li><a href="home.php">Home Page</a>
		<li><a href="syr.php">Persyaratan</a>
		<li><a href="rtl.php">Rental</a>
		<li><a href="had.php">Login</a>
		</ul>
		<div id="footer">
		<marquee><b>Rental Motor Dan Mobil Praktis Lewan Media Online</b></marquee>
		</div>
		<div id="content">
					<H1><img src="images/hdr.jpg"></h1>
					<center><text align="left"><font size="20">LOGIN ADMINISTRATION</font><br></text><br>
					<div class="wrap">
	<form name="form" action="" method="post">
	<table border="0">
	<tr><th>Username</th><th> :</th><th><input type="text" name="username"/></th></tr>
	<tr><th>Password</th><th> :</th><th><input type="password" name="password"/></th></tr>
	<tr><th colspan="3" align="right"><input type="submit" value="login" name="button"/></th></tr>
	</table>
	</form>
					
			</div>
<address> 
CopyRight@FauzieHermawan | Mei 2015</address>
</body>
</html>