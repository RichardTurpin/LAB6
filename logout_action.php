<?php
	 require('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
 session_start();
 session_destroy();
$smarty->assign('Msg',"See you back soon!");
$smarty->display('templates/message_template.tpl');
?>