<?php 
    echo "for loop";
    $a = 0;
    for($i=1;$i<=100;$i++){
        $a = $a +$i;
    }
    echo $a;

    echo "while loop";
    $a = 0;
    $i = 1;
    while($i<=100){
        $a = $a + $i;
        $i++;
    }
    echo $a;

?>    