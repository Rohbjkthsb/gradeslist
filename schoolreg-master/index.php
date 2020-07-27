<?php

define('SCHOOL_ZONE', true);
include_once ('init.php');
include_once ('header.php');
?>

<div class="page">
	
	<div id="siteAds"> <p align="right">ЭЛЕКТРОННЫЙ ЖУРНАЛ ВШЯ </p> 
	<form>
	<?php if (empty($_SESSION['user']) == true) echo ''?>
  <a href="<?php 
  if (empty($_SESSION[user] ==0)) 
  {
	  if ($_SESSION['user_accept'] ==1)
	  {
		  echo "admin/index.php";
	  }
	  elseif ($_SESSION['user_accept'] ==2)
	  {
		  echo "teachers/index.php";
	  }
	  elseif ($_SESSION['user_accept'] ==3)
	  {
		  echo "student/index.php";
	  }
  }
  else echo "#login"; ?>"><div class = "span-shadow" >Начать</div></a>
	</form>

	</div>
	
	<div id="login">
      <div id="okno">
        <br>
        <a href="#" class="close" id="close_okno">Закрыть окно</a>
		<div id="student_okno"> 
		
		<?php include_once ('/login/login_student.php')?>
			
		
		</div>
		
<div id="teacher_okno"> 
	<?php include_once ('/login/login_teacher.php')?>
			
</div></div>
      </div>
    
	<article  id="pageHead" >  
		<div class ="dropdown">
			
		<?php if (empty($_SESSION['user_info']) != true) echo '<div class="login_auth"> 
			Привет, '.$_SESSION['user_info'].'  <a href="teachers/login.php?action=logout">(Выйти) </a></div>'; 
			else echo '<a href="#login"><button class="mainmenubtn"> Войти как </button> </a>
			<div style="z-index:1; margin-top:5px; margin-left:29%;"> или получить <a href="#" > приглашение </a></div>'; ?>
			
		</div>		 
	</article>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>	
	
<?php include_once ('footer.php'); ?>