<?php
include("db.php");

$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
session_start();

if($db)
{
	$email = $_POST['email'];
	$passDigest= substr(md5($_POST['password']),0,32);
	$query="SELECT * FROM users
			WHERE email='$email' AND password_digest = '$passDigest'";
	$result = @ mysql_query($query,$db);
	
	$nrows = mysql_num_rows($result);
	if($nrows > 0) 
	{
		   $tupple = mysql_fetch_array($result);
		   $_SESSION['name'] = $tupple['name'];
		   $_SESSION['id'] = $tupple['id'];
		   header("Location: index.php");


	} else {
		$_SESSION['erro']=-1;
		header("Location:login.php");
	}

}


mysql_close($db);
?>