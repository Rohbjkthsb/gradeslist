<?php


define('ADMIN_ZONE', true);

include_once ('../init.php');
include 'header.php';
include_once ('../include/report/report.php');
?>
<div align="center">
<span class="head_top">Отчёты:</span>
<table id="rounded-corner">

<div>
 
 
 <?php
  $str='';

?>


<form action="report.php" method="POST">
<input type="hidden" name="action" value="classnum" />
<p>Номер класса: <input type="number" name="class" /></p>
<input type="submit"  class="button_admin " value="Создать отчёт">
</form>
<form action="report.php" method="POST">
<input type="hidden" name="action" value="subname" />

<p>Название предмета: <input type="text" name="sub" /></p>
<input type="submit" name = "subname" class="button_admin " value="Создать отчёт">
</form>
   
<?php
	echo $str;
?>

</div>

	
</table>
</div>
<?php
 include_once 'footer.php';
?>