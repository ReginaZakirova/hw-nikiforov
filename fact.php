<?php
session_start();
$_SESSION['lastvisit'] = "Fact";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fact</title>
</head>
<body>
    <h1>Мы находимся на страницe fact</h1>
    <p>Привет
		<?php
		echo $_SESSION['Login'];?></p>
</body>
</html>