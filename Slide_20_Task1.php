<?php
$k = 452147925258;
$sum = 0;
while ($k > 0) {
    if (!($k%2)){
        $sum = $sum + $k % 10;
    }
    $k = $k / 10; 
}    
echo "$sum";