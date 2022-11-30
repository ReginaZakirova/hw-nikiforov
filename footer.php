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
<div class="sitecolor">
        <form action="" method="post">
  <select name = "sitecol">
    <option value="ciancol">Циан</option>
    <option value="greencol">Зеленый</option>
    <option value="pinkcol">Розовый</option>
    <option value="original">Оригинал</option>
  
  </select>
  <input type="submit" value="Сменить цвет сайта">
        </div>
</footer>