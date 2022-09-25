<?php
echo "Первое задание";
echo '<br>';

$i = 5;
while ($i <=13) {
    echo $i . '<br/>';
    $i++;
}
echo '<br/>';

echo "Второе задание";
echo '<br>';
$num=1000;
$i = 0;
while ($num>=50) {
    $num /= 2;
    $i++;
}
echo $num . '<br/>';
echo $i . '<br/>';
echo '<br/>';

echo "Второе задание цикл For";
echo '<br>';
for($num = 1000, $i = 0; $num >= 50; $num/2, $i++){
    $num /= 2;
}
echo $num . '<br/>';
echo $i. '<br/>';
echo "Третье задание";
echo '<br>';
$a = 5;

switch ($a){
    case '0' : echo '012345678910'; break;
    case '1' : echo '0123456789'; break;
    case '2' : echo '012345678'; break;
    case '3' : echo '01234567'; break;
    case '4' : echo '0123456'; break;
    case '5' : echo '012345'; break;
    case '6' : echo '01234'; break;
    case '7' : echo '0123'; break;
    case '8' : echo '012'; break;
    case '9' : echo '01'; break;
    case '10' : echo '0'; break;
}