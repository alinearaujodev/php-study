<?php
    $valor = $_GET["valores"];
    $c = 0;
    do {
        $resp = $valor*$c;
        echo "$valor X $c = $resp</br>";
        $c++;
    } while ($c <= 10);
?>

