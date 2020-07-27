<?php
define('STUDENT_ZONE', true);
include_once ('init.php');
$renderArray = array('ui_theme' => $config['ui']['theme']);
$template_name = 'login_index.html';

$template = $twig->loadTemplate('admins/'.$template_name);
echo $template->render($renderArray);

?>