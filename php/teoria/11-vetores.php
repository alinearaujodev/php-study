<?php
    $n = array(4,2,7,1,3);
    $n[] = 7;
    print_r($n);

    // Criando vetor com range
    $c = range(2,10,2);
    unset($c[4]);
    foreach($c as $v){
        echo "$v ";
    }

    // Associativo
    $cad = array("nome" => "Aline", "sexo" => "f", "peso" => "50.5", "fuma" => "false");
    foreach($cad as $campo => $valor){
        echo " $campo = $valor ";
    }

?>