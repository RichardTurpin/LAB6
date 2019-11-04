<?php
include("db.php");
require('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
session_start();
if($_SESSION['erro']==-1)
{
	$smarty->assign("Msg","Os dados introduzidos estao incorretos");
	unset($_SESSION['erro']);
}


 $smarty->display('templates/login_template.tpl');


?>