<?php
    $cont = 1;
    while ($cont <= 3){
        $v1 = $_GET["v$cont"];
        echo "Valor $cont = $v1</br>";
        $cont ++;      
    }
?>