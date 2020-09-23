<?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $media = ($n1 + $n2)/2;

    if ($media >= 7){
        $sit = "Aprovado";
    } elseif ($media >= 5 && $media < 7) {
        $sit = "Recuperação";
    } else {
        $sit = "Reprovado";
    }

    echo "A média entre $n1 e $n2 é igual a $media <br/>";
    echo "Situação do Aluno: $sit";

?>