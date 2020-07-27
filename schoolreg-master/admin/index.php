<?php


define('ADMIN_ZONE', true);

include_once ('../init.php');
$renderArray = array('ui_theme' => $config['ui']['theme']);
$template_name = 'index.html';


$template = $twig->loadTemplate('admins/'.$template_name);
echo $template->render($renderArray);
?>