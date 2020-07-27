<?php

 
function get_teachers_list()
{
  $sql = "SELECT * FROM teachers ORDER BY 5, 3, 4";
  $res = db_query($sql);
  $teachers_list = array();
  while($row = mysql_fetch_assoc($res)){
    $teachers_list[] = $row;
  }
  return $teachers_list;
}

function teacher_login($login, $password) {
	$sql = "SELECT teacher_id FROM teachers WHERE login='%s' AND passwd='%s'";
	$res = db_query($sql,$login,md5($password));
	$row = mysql_fetch_assoc($res);
	return $row;
}
function teacher_info ($login, $password)
{
	if (true==teacher_login($login,$password)) {
	$sql = "SELECT first_name, middle_name, last_name FROM teachers WHERE login = '%s' AND passwd='%s'";
	$res = db_query($sql,$login,md5($password));
	
	$row = mysql_fetch_array($res);
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$info = $first_name.' '.$last_name;
	
	return $info;
	
	}
	
}
?>