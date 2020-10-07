<?php
    $a = $_GET["inicio"];
    $b = $_GET["fim"];
    $c = $_GET["valor"];

    while ($a <= $b){
        echo "$a ";
        $a +=$c;
    }

?>