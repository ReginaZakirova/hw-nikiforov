<?php
$servername = "localhost";
$username = "Nikita";
$password = "1";
$database = "autorisation";
$bd_con = mysqli_connect($servername, $username, $password, $database) or die ("Упс, Соединение не установлено");
$select_db = mysqli_select_db($bd_con, $database);
?>