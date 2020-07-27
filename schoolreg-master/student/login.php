<?php

define('STUDENT_ZONE_LOGIN', true);
include_once ('../init.php');
include_once ('../include/students.php');




$loginError = '';
if (isset($_REQUEST['action'])) {
  $action = $_REQUEST['action'];
  if ($action == 'login') {
  	$pin = intval($_POST['pin_code']);
  	$student = student_login($pin);
	$student_id = student_info($pin);
    if ($student and intval($student['student_id']) != 0) {
    	$_SESSION['user'] = $student['student_id'];
		$_SESSION['user_info'] = $student_id;
		$_SESSION['user_accept'] = 3;
    	header('Location: index.php');
    	exit();
    } else {
    	$loginError = 'ПИН неверен';
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
} 
elseif ($_SESSION['user_accept']==3) {
header ('Location: ../student/index.php');
}

$renderArray = array();
$template_name = 'login.html';
$renderArray['loginError']=$loginError;

$template = $twig->loadTemplate('students/'.$template_name);
echo $template->render($renderArray);
?>
