
<?php

/*
	1. Анализ оценок по предмету,
	2. Кол-во двоичников, по предметам, классу, школе,
	3. Кол-во отличников по предметам, классу, школе.
*/



 
 
 if (isset($_REQUEST['action'])) {
  $action = $_REQUEST['action'];
  if ($action == 'classnum') {
  	$classnum = '5';
	$str='Мы думаем';
	$class=$_POST['class'];
	echo $str;
	echo $_POST['class'];
		echo gen_lesson_on_class_report( 5, $class);
		echo $files;
 	} 
  } 
  
   if (isset($_REQUEST['action'])) {
  $action = $_REQUEST['action'];
  if ($action == 'subname') {
  	$classnum = $_POST['subname'];
	$str='Мы думаем';
	echo $str;
		echo gen_lesson_on_class_report( 5, $subname);
		echo $files;
	} 
  }
  
  




/*  	if (($_POST['chislo']!=0)||($_POST['strok']!=0))
	{
	$puptype = 5;
  $classnum=$_POST['classnum'];
  $subname=$_POST['subname'];
  
  //echo gen_lesson_report($puptype);
  echo gen_lesson_on_class_report( 5, $classnum);
  echo gen_lesson_on_sub_report('Математика', $subname);
  
 
	} */
	
	
function pt_get($tl) 
{
	$n=$tl;
	
	$sql = 'SELECT DISTINCT last_name, first_name, middle_name FROM students, students_on_lesson where grade='.$n;
	$result = db_query($sql);
	$row = mysql_fetch_assoc($result);
	$et = implode(" ", $row);
	
	return $et;
}

function class_get($tl, $classnum) 
{
	$n=$tl;
	
	$sql = 'SELECT DISTINCT last_name, first_name, middle_name FROM students, students_on_lesson, classes where class='.$classnum.' and grade='.$n;
	$result = db_query($sql);
	$row = mysql_fetch_assoc($result);
	$et = implode(' ', $row);
	return $et;
}

function sub_get($tl, $subname) 
{
	$n=$tl;
	$sql = "SELECT DISTINCT last_name, first_name, middle_name FROM students, students_on_lesson, disciplines where discipline='.$subname.' and grade='.$tl'";
	$result = db_query($sql);
	$row = mysql_fetch_assoc($result);
	$et = implode(" ", $row);
	return $et;
}


function gen_lesson_report($puptype) {
	require 'vendor/autoload.php';
	$phpWord = new \PhpOffice\PhpWord\PhpWord();
////////////
	$phpWord->setDefaultFontName('Times New Roman');
	$phpWord->setDefaultFontSize(12);

	$properties = $phpWord->getDocInfo();

	$properties->setTitle('Отчёт');
	$properties->setCreator('Name');
	$properties->setCompany('Company');
////////////
	$sectionStyle = array();
	$section = $phpWord->addSection($sectionStyle);

///////////
	$pup = $puptype;
	$v1;
	if ($pup==2){
		$tl = 2;
		$tet = pt_get($tl);
		$v1 = "Ученики двоешники:";
	}
	else if ($pup==5){
		$tl = 5;
		$tet = pt_get($tl);
		$v1 = "Ученики с пятерками:";
	}
	$text = $tet;
	
	$title = "Отчёт";
	
////////////
	$fontStyleT = array('name'=>'Arial', 'size'=>36, 'color'=>'075776', 'bold'=>TRUE, 'italic'=>TRUE);
	$parStyleT = array('align'=>'center','spaceBefore'=>10);
	$section->addText(htmlspecialchars($title), $fontStyleT,$parStyleT);
	
	$fontStyle = array('name'=>'Arial', 'size'=>12, 'color'=>'000000', 'bold'=>TRUE, 'italic'=>TRUE);
	$parStyle = array('align'=>'left','spaceBefore'=>10);
	$section->addText(htmlspecialchars($v1), $fontStyle,$parStyle);
	
	$fontStyle = array('name' => 'Times New Roman', 'size' => 16,'color' => '000000','italic'=>true);
	$listStyle = array('listType'=>\PhpOffice\PhpWord\Style\ListItem::TYPE_BULLET_EMPTY);
	 
	$section->addListItem($text,0,$fontStyle,$listStyle);

////////////
////////////
	
	$d = date('Y-m-d h.i.s');
	$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
	$objWriter -> save('report_storage/'.$d.'.docx');
	return 'Success';
}

function gen_lesson_on_class_report($puptype, $classnum) {
	require 'vendor/autoload.php';
	$phpWord = new \PhpOffice\PhpWord\PhpWord();
////////////
	$phpWord->setDefaultFontName('Times New Roman');
	$phpWord->setDefaultFontSize(12);

	$properties = $phpWord->getDocInfo();

	$properties->setTitle('Отчёт');
	$properties->setCreator('Name');
	$properties->setCompany('Company');
////////////
	$sectionStyle = array();
	$section = $phpWord->addSection($sectionStyle);

///////////
	$pup = $puptype;
	$v1;
	if ($pup==2){
		$tl = 2;
		$tet = class_get($tl, $classnum);
		$v1 = "Ученики двоешники по классу:";
	}
	else if ($pup==5){
		$tl = 5;
		$tet = class_get($tl, $classnum);
		$v1 = "Ученики с пятерками по классу:";
	}
	$text = $tet;
	
	$title = "Отчёт";
	
////////////
	$fontStyleT = array('name'=>'Arial', 'size'=>36, 'color'=>'075776', 'bold'=>TRUE, 'italic'=>TRUE);
	$parStyleT = array('align'=>'center','spaceBefore'=>10);
	$section->addText(htmlspecialchars($title), $fontStyleT,$parStyleT);
	
	$fontStyle = array('name'=>'Arial', 'size'=>12, 'color'=>'000000', 'bold'=>TRUE, 'italic'=>TRUE);
	$parStyle = array('align'=>'left','spaceBefore'=>10);
	$section->addText(htmlspecialchars($v1), $fontStyle,$parStyle);
	
	$fontStyle = array('name' => 'Times New Roman', 'size' => 16,'color' => '000000','italic'=>true);
	$listStyle = array('listType'=>\PhpOffice\PhpWord\Style\ListItem::TYPE_BULLET_EMPTY);
	 
	$section->addListItem($text,0,$fontStyle,$listStyle);

////////////
////////////
	
	$d = date('Y-m-d h.i.s');
	$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
	$objWriter -> save('report_storage/'.$d.'.docx');
	return 'Success';
}

function gen_lesson_on_sub_report($puptype, $subname) {
	require 'vendor/autoload.php';
	$phpWord = new \PhpOffice\PhpWord\PhpWord();
////////////
	$phpWord->setDefaultFontName('Times New Roman');
	$phpWord->setDefaultFontSize(12);

	$properties = $phpWord->getDocInfo();

	$properties->setTitle('Отчёт');
	$properties->setCreator('Name');
	$properties->setCompany('Company');
////////////
	$sectionStyle = array();
	$section = $phpWord->addSection($sectionStyle);

///////////
	$pup = $puptype;
	$v1;
	if ($pup==2){
		$tl = 2;
		$tet = sub_get($tl, $subname);
		$v1 = "Ученики двоешники по предмету:";
	}
	else if ($pup==5){
		$tl = 5;
		$tet = sub_get($tl, $subname);
		$v1 = "Ученики с пятерками по предмету:";
	}
	$text = $tet;
	
	$title = "Отчёт";
	
////////////
	$fontStyleT = array('name'=>'Arial', 'size'=>36, 'color'=>'075776', 'bold'=>TRUE, 'italic'=>TRUE);
	$parStyleT = array('align'=>'center','spaceBefore'=>10);
	$section->addText(htmlspecialchars($title), $fontStyleT,$parStyleT);
	
	$fontStyle = array('name'=>'Arial', 'size'=>12, 'color'=>'000000', 'bold'=>TRUE, 'italic'=>TRUE);
	$parStyle = array('align'=>'left','spaceBefore'=>10);
	$section->addText(htmlspecialchars($v1), $fontStyle,$parStyle);
	
	$fontStyle = array('name' => 'Times New Roman', 'size' => 16,'color' => '000000','italic'=>true);
	$listStyle = array('listType'=>\PhpOffice\PhpWord\Style\ListItem::TYPE_BULLET_EMPTY);
	 
	$section->addListItem($text,0,$fontStyle,$listStyle);

////////////
////////////
	
	$d = date('Y-m-d h.i.s');
	$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
	$objWriter -> save('report_storage/'.$d.'.docx');
	return 'Выполнено';
}


	



	
?>