<?php
    session_start();
    include_once('header.php');
?>
	<div class="container">
		<h1 class="text-center">Регистрация</h1>
		<form action="../php/registration.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <label class="form-label">Имя пользователя</label>
                <input type="text" class="form-control" name="username" placeholder="Ваше имя" <? if (isset($_COOKIE['username'])) echo 'value="'.$_COOKIE['username'].'"'?>>
            </div>
            <div class="row mt-2">
                <label class="form-label">E-Mail</label>
                <input type="text" class="form-control" name="mail" placeholder="Ваша почта" <? if (isset($_COOKIE['mail'])) echo 'value="'.$_COOKIE['mail'].'"'?>>
            </div>
            <div class="row mt-2">
                <label class="form-label">Пароль для входа</label>
                <input type="password" class="form-control" name="password" placeholder="от 6 букв и цифр" <? if (isset($_COOKIE['password'])) echo 'value="'.$_COOKIE['password'].'"'?>>
            </div>
            <div class="row mt-2">
                <label class="form-label">Подтвердите пароль</label>
                <input type="password" class="form-control" name="password_confirm" placeholder="от 6 букв и цифр">
            </div>
            <div class="form-check mt-2 mb-2">
                <input class="form-check-input" type="checkbox" name="processing" value="yes" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Я согласен на обработку персональных данных
                </label>
            </div>
			<button class="btn btn-primary mb-3">Зарегистрироваться</button>
			<?php
            if(isset($_SESSION['message'])){
				echo '<p class = "msg"> ' . $_SESSION['message'] .' </p>';
				unset($_SESSION['message']);
			}
			?>
		</form>
	</div>
</body>
</html>
