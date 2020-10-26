<?php
    soma (3,4);                                     

    // Procedimento
    function soma ($a, $b){
        $s = $a + $b;
        echo $s;
    }

    $r = s (10,5,2,7,3);
    echo "</br>$r";  

    // Funcão 
    function s (){
        $p = func_get_args();
        $t = func_num_args();
        $soma = 0;

        for ($i=0; $i<$t; $i++){
            $soma += $p[$i];
        }

        return $soma;
    }

    $a = 3;
    $x = teste ($a);
    echo "</br>Passagem por Valor";
    echo "</br>Valor de A é $a"; 
    echo "</br>Valor de X é $x"; 
    echo "</br>";

    // Passagem por Valor 
    function teste ($x){
        $x+=2;
        return $x;
    }

    t($a);
    echo "</br>Passagem por Referência";
    echo "</br>Valor de A é $a"; 
    echo "</br>Valor de X é $x"; 

    // Passagem por Referência
    function t (&$x){
        $x+=2;
        return $x;
    }

    // Rotinas Externas
    include "09-rotinas-externas.php";
    echo "</br></br>";
    echo "Rotinas Externas";
    echo "</br>";
    hello();
?>