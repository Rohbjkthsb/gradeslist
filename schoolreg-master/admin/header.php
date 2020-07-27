<?php

?>
<html>
  <head>
    <title>Школьный журнал</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link type="text/css" rel="stylesheet" href="../ui-theme/<?php echo $config['ui']['theme']?>/jquery-ui.css" />
    <link type="text/css" rel="stylesheet" href="../thickbox.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="../style.css" />
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/i18n/jquery-ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.js"></script>
    <script type="text/javascript" src="../js/i18n/jquery.validate-ru.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="../js/thickbox.js"></script>
  </head>
  <body>
<?php
if (isset($_SESSION['admin_id'])) {
?>

<div class="pageMain" >
<div class="table_menu">
<div class ="menu_ui"> <a href="../index.php">Главная</a></div>
	<div class="line_table"> </div>
    <div class ="menu_ui"> <a href="classes.php">Классы</a></div>
	<div class="line_table"> </div>
    <div class ="menu_ui"> <a href="teachers.php">Учителя</a></div>
	<div class="line_table"> </div>
    <div class ="menu_ui"> <a href="disciplines.php">Дисциплины</a></div>
	<div class="line_table"> </div>
    <div class ="menu_ui"> <a href="users.php">Пользователи</a></div>
	<div class="line_table"> </div>
    <div class ="menu_ui"> <a href="curriculum.php">Учебный план</a></div>
	<div class="line_table"> </div>
    <div class ="menu_ui"> <a href="report.php">Отчет</a></div>
	<div class="line_table"> </div>
    <div class ="menu_ui">&nbsp;<a href="login.php?action=logout">Выход</a>&nbsp; </div>
</div>


<div id="content_grid">
<div class= "wrapper">
<?php
}
?>
