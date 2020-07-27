<?php echo '

	<div class="login-width">
		<form action="teachers/login.php" method="post" >
			<input type="hidden" name="action" value="login" />
			<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="login100-form-title-1">
					Вход для учителей
				</span>
			</div>
			</div>

		<form class="login100-form validate-form method="post">
				<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
					
						<input class="input100" type="login" name="login"  placeholder="Введите логин">
							<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
					
					<input class="input100" type="password" name="passwd" placeholder="Введите пароль">
						<span class="focus-input100"></span>
				</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							
						</div>

						<div>
							<a href="#" class="txt1">
								Забыли пароль?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Войти
						</button>
					</div>
				</form>
				</form>
		</div>
			' ?>