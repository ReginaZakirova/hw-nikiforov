<?php
$login = $_POST['Login'];
$pass = $_POST['password'];
//if(isset($_POST['login'] == Nik) && isset($_POST['password'] == 777))
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href = "Styles/autorizstyle.css">
    <title>Авторизация и Регистрация</title>
    
</head>
<body>
<form  action="" method="post">
<label for="">Логин</label>
<input type="text" name="login" placeholder = "Введите свой логин">
<label for="">Пароль</label>
<input type="password" name = "password" placeholder = "Введите пароль">
<button>Войти</button>
<p>
    У вас нет аккаунта? <a href="register.php">Зарегестрируйтесь</a>
</p>
</form>
</body>
</html>