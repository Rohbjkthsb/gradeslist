<?php



session_start();

if (file_exists(dirname(__FILE__).'/config.php')) {
	include_once 'config.php';
}

/*if (!isset($config)) {
	$prefix = '';
	if (defined('TEACHER_ZONE') or defined('ADMIN_ZONE') 
	    or defined('TEACHER_ZONE_LOGIN') or defined('ADMIN_ZONE_LOGIN')) {
		$prefix = '../';
	}
	header('Location: '.$prefix.'install/index.php');
}*/

include_once 'include/mysql_db.php';
include_once 'lib/json_encode_r.php';
include_once 'lib/utils.php';

db_connect($config['db']['db_host'], $config['db']['db_user'], $config['db']['db_passwd'], $config['db']['db_base']);
db_query('SET NAMES UTF8;');

require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$twig_loader = new Twig_Loader_Filesystem(dirname(__FILE__).'/lib/templates');
$twig = new Twig_Environment($twig_loader, array('cache' => dirname(__FILE__).'/cache', 'trim_blocks' => true, 'auto_reload' => true));

if (defined('TEACHER_ZONE')) {
  if ($_SESSION['user_accept'] == 2) {
  	$user = $_SESSION['user'];
  } else {
	header('Location: login.php');
  }
} elseif (defined('ADMIN_ZONE')) {
  if (!isset($_SESSION['admin_id'])) {
  	header('Location: login.php');
  } else {
    $admin_id = $_SESSION['admin_id'];
  }
} elseif (defined('STUDENT_ZONE')) {
  if ($_SESSION['user_accept'] == 3) {
	  $user = $_SESSION['user'];
	  $student_id = $_SESSION['user'];
  } else {
  	header('Location: login.php');
  }
} 


?>