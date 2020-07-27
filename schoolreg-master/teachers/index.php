<?php


define('TEACHER_ZONE', true);
include_once ('../init.php');
include_once ('../include/classes.php');

$renderArray = array();
$classes_list = get_classe_list_from_teacher($user);
$template_name = 'index.html';
$renderArray['classes_list']=$classes_list;

$template = $twig->loadTemplate('teachers/'.$template_name);
echo $template->render($renderArray);
?>
