<?php
require_once ('libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = 'templates/';
$smarty->config_dir = 'config/';
$smarty->cache_dir = 'cache/';
$smarty->compile_dir = 'template_c/';

$text = 'test';

$smarty->assign('text',$text);

$smarty->display('index.tpl');
?>