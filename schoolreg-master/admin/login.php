<?php

define('ADMIN_ZONE_LOGIN', true);
include_once ('../init.php');
include_once ('../include/users.php');

$loginError = '';
if (isset($_REQUEST['action'])) {
  $action = $_REQUEST['action'];
  if ($action == 'login') {
  	$user = user_login(substr($_POST['login'], 0, 25), $_POST['passwd']);
  	
    if ($user and intval($user['user_id']) != 0) {
    	$_SESSION['admin_id'] = $user['user_id'];
    	header('Location: index.php');
    	exit();
    } else {
    	$loginError = 'Пароль/логин неверен';
    }
  } elseif ($action == 'logout') {
    unset($_SESSION['admin_id']);
    header('Location: index.php');
    exit();
  }

}

$renderArray = array();
$template_name = 'login.html';
$renderArray['loginError']=$loginError;

$template = $twig->loadTemplate('admins/'.$template_name);
echo $template->render($renderArray);
?>
