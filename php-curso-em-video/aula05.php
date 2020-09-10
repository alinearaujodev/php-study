<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variável e Operadores</title>
    </head>
    <body>
        <div>
            <?php
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];

                $m = ($n1 + $n2) / 2;

                echo "Média: $m";

                //  FUNÇÕES ARITMETICAS DO PHP

                echo "<br/>Valor Absoluto: $n1 = " . abs($n1);
                echo "<br/>$n1 <sup>$n2</sup> = " . pow($n1, $n2);
                echo "<br/>Raiz quadrada de $n1 = " . sqrt($n1);
                echo "<br/>$n2 arrendondado = " . round($n2);
                echo "<br/>Parte inteira de $n2 = " . intval($n2);
                echo "<br/>$n1 em moedas = R$ " . number_format($n1, 2);
            ?>
        </div>
    </body>
</html>