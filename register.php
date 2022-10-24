<?php
$login = $_POST['Login'];
$_GET['pass'] = md5($_GET['pass']);
if($login == 'Nick' && $_GET['pass'] == 777){

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href = "Styles/autorizstyle.css">
    <title>Регистрация</title>
    
</head>
<body>
<form  action="" method="post">
<label for="">Логин</label>
<input type="text" placeholder = "Введите свой логин">
<label for="">Пароль</label>
<input type="password" placeholder = "Введите пароль">
<button>Войти</button>
<p>
    У вас уже есть аккаунт? <a href="autorisation.php">Авторизуйтесь</a>
</p>
</form>
</body>
</html>