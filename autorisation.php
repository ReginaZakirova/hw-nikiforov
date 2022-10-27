<?php
/*if(!empty($_POST)){ 
    if($_POST['login'] == 'Nick' and $_POST['password'] == 1){ 
        session_start(); 
        $_SESSION['login'] = $_POST['login']; 
        $log = $_SESSION['login'];
        $str = "Доступ открыт   $log"; 
        //print_r($_SESSION); 
    }
    else{
       $str = "Доступ закрыт!"; 
    }
} 
/*$log = 0; 
$sessname = session_name(); 
if(isset($_COOKIE[$sessname])){ 
    session_start(); 
    $log = $_SESSION['login']; 
} 
else{ 
    $log = 'empty'; 
}*/
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
<p>
<?php 
// логины: Nikita, Regina пароль: 1
//echo md5('1');
session_start(); 
require ('connect.php'); 
if(isset($_POST['login']) and isset($_POST['password'])){ 
    $username = $_POST['login']; 
    $password = md5($_POST['password']); 
    $query = "SELECT * FROM Users WHERE User = '$username' and Password = '$password'"; 
    $result = mysqli_query($bd_con, $query) or die (mysqli_error($bd_con)); 
    $count = mysqli_num_rows($result); 
    if($count == 1) { 
        $_SESSION['Login'] = $username; 
    } 
    else{ 
        $fmsg = "Вы ввели неверный логин или пароль"; 
        echo $fmsg; 
    } 
} 
if(isset($_SESSION['Login'])){ 
    $username = $_SESSION['Login']; 
    echo "Привет  $username  "; 

} 
/*echo $str;*/ 
?>
</p>
</form>
</body>
</html>