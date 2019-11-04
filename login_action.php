<?php
include("db.php");
require('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);

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
		header("Location:login.php?")
	}

}


mysql_close($db);
?>