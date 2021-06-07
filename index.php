<?php
session_start();
if (isset($_SESSION['logged_user'])){
    header('Location: /pages/userpage.php');
}
include_once('pages/header.php');
?>
	<div class="container-lg">
		<h1>Сайт конференции "TechWork"</h1>
		<p>На данном сайте, Вы можете разместить свои доклады для конференции</p>
    <p>Для продолжения работы на сайте, необходимо авторизоваться.</p>
		</form>
	</div>
</body>
</html>
