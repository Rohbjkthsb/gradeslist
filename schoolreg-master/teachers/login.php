<?php


define('TEACHER_ZONE_LOGIN', true);
include_once ('../init.php');
include_once ('../include/teachers.php');

$loginError = '';

$submitted_username = '';  





if (isset($_REQUEST['action'])) {
  $action = $_REQUEST['action'];
  if ($action == 'login') {
  	$teacher = teacher_login(substr($_POST['login'], 0, 25), $_POST['passwd']);
  	$user = teacher_info(substr($_POST['login'], 0, 25), $_POST['passwd']);
    if ($teacher and intval($teacher['teacher_id']) != 0) {
    	$_SESSION['user'] = $teacher['teacher_id'];
		$_SESSION['user_info'] = $user;
		$_SESSION['user_accept'] = 2;
    	header('Location: index.php');
    	exit();
    } else {
    	$loginError = 'Пароль/логин неверен';
    }
  } elseif ($action == 'logout') {
    unset($_SESSION['user']);
	unset($_SESSION['user_info']);
	unset ($_SESSION['user_accept']);
    header('Location: ../');
    exit();
  }
}

if ($_SESSION['user_accept'] == 1) {
header ('Location: ../admin/index.php'); }
elseif ($_SESSION['user_accept']==2) {
header ('Location: ../teachers/index.php');
} elseif ($_SESSION['user_accept']==3) {
header ('Location: ../student/index.php');
}




$renderArray = array();
$template_name = 'login.html';
$renderArray['loginError']=$loginError;

$template = $twig->loadTemplate('teachers/'.$template_name);
echo $template->render($renderArray);
?>
