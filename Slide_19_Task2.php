<?php
for ($i = 1; $i <=50; $i++) {
    if (($i%3) == 0){
    if ($i % 5 != 0){
        echo "<i>" . $i . "</i>" . ' ';
    }
    else{
        echo "<b>" . "<i>" . $i . "</i>" . "</b>" . ' ';
    }
}
else {
    echo $i . '';
}
}
?>