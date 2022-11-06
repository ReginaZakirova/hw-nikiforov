<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="keywords" content="html,css,resume">
<link rel="stylesheet" href="Styles/styles2.css">
<title>Resume</title>
</head>
<body>
    <header> 
      <div class="logo">
        <img src="Images/planet.png" class="logo">
        </div>
      <section class="navigation">
      <nav class="navigator">
        <ul>
          <li><a href="Str.php">Строки</a> </li>
          <li><a href="Cicles.php">Циклы</a> </li>
          <li><a href="Massive.php">Массивы</a> </li>
          <li><a href="table.html">Таблица Менделеева</a> </li>
          <li><a href="autorisation.php">Авторизация</a></li>
        </ul>
      </nav>
    </section>
    </header>
    <div class="Familia">
      <h1>Никифоров Никита</h1>
  </div>
<section class="Information">
<div class="Foto">
  <img class="Myfoto" src="Images/MyFoto.jpeg">
</div>
<div class="AboutMe">
  <?php 
$strAbout = "Всем привет! Немного информации обо мне. Работаю реабилитологом! В свободное от работы время занимаюсь дизайном, а также довольно успешно увлекаюсь Stand Upом, выступаю со сцены вот уже 2 года!";
$strAboutColor = mb_substr($strAbout, 0,12);
print "<span style='color:red;'> $strAboutColor  </span>";
echo mb_substr($strAbout, 12);


?>
</div>

  <div class="Otziv">
  <?php
  $str = 'Первые занятия прошли отлично! Понравилось, что в некоторой информации нужно разбираться и искать самому, что лишь побуждает больше погружаться в обучение!';
  $str_mass = explode(' ', $str);
  function otziv($str_mass){
  for($i = 0; $i < count($str_mass); $i++){
    if($i % 2 == 0)
      echo "<span style='color:red;'> $str_mass[$i]  </span>";
      else {
        echo "<span style='color:yellow;'> $str_mass[$i]  </span>";
      }
  }
}
$otziv = otziv($str_mass);
echo $otziv;

?>
  </div> 
</div>
<p>
  <?php
  $strCountVowels = "Всем привет! Немного информации обо мне. Работаю реабилитологом! В свободное от работы время занимаюсь дизайном, а также довольно успешно увлекаюсь Stand Upом, выступаю со сцены вот уже 2 года! Первые занятия прошли отлично! Понравилось, что в некоторой информации нужно разбираться и искать самому, что лишь побуждает больше погружаться в обучение ";
  /*$vowels = array('а','у','о','ы','э','я','ю','ё','и','е', 'А','У','О','Ы','Э','Я','Ю','Ё','И','Е');
  $count_vowels = 0;
  for($i = 0; $i < strlen($strCountVowels); $i++){*/
    $str_slova = explode(' ', $strCountVowels);

    //print_r($str_slova);
    function countwords($str_slova){
    for($i = 0; $i <= count($str_slova); $i++){
      echo  count($str_slova);
      break;
    }
  }
  $countwords = countwords($str_slova);
  echo " Количество слов в информации о себе   $countwords";
    
    
  ?>
</p>
</section>
    <p>
  <section class="container">
      <section class="Grid1">
          <section class="GridPic">
        <div class="picture"> <img src="Images/monkey1.png" alt="monkey1" width="300" height="200"> </div>
        <div class="description9">NFT Monkey1</div>
      </section>
      <section class="GridPic">
        <div class="picture"> <img src="Images/monkey2.jpg" alt="monkey2" width="300" height="200"> </div>
        <div class="description9">NFT Monkey2</div>
      </section>
      <section class="GridPic">
        <div class="picture"> <img src="Images/monkey3.jpg" alt="monkey3" width="300" height="200"> </div>
        <div class="description9">NFT Monkey3</div>
      </section>
      <section class="GridPic">
        <div class="picture"> <img src="Images/monkey4.jpg" alt="monkey4" width="300" height="200"> </div>
        <div class="description9">NFT Monkey4</div>
      </section>
    </section>
    </p>
    <p>
      <section class="Grid2">
        <section class="GridPic">
      <div class="picture"> <img src="Images/pic1.jpg" alt="pic1" width="300" height="200"> </div>
      <div class="description9">В понедельник на работе</div>
    </section>
    <section class="GridPic">
      <div class="picture"> <img src="Images/pic2.jpg" alt="pic2" width="300" height="200"> </div>
      <div class="description9">Охрана своей кружки в офисе</div>
    </section>
    <section class="GridPic">
      <div class="picture"> <img src="Images/pic3.jpg" alt="pic3" width="300" height="200"> </div>
      <div class="description9">Скоро пятница</div>
    </section>
    <section class="GridPic">
      <div class="picture"> <img src="Images/pic4.jpg" alt="pic4" width="300" height="200"> </div>
      <div class="description9">Вечер Пятницы</div>
    </section>
  </section>
    </p>
</body>
<footer>
<?php
$bd = date('d-m-Y', mktime(0, 0, 0, 06, 27, 1994));
echo " Мой день рождения $bd";
echo '<br>';
$nd = date('d-m-Y');
echo " Текущая дата $nd";
echo '<br>';
$datediff = date_diff(new DateTime(), new DateTime('1994-06-27'))->days;
echo 'Разница между датами' . $datediff . 'дней';
?>
</footer>
</html>