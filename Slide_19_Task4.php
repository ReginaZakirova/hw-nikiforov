<?php
$sum = $b = $a = 1;
do {
    $sum += (($a += 3) / ++$b);
} while ($sum < 10);
echo $b . "<br>";
?>