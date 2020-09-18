<!DOCTYPE html>
<html lang="pr-BR">
    <head>
        <meta charset="UTF-8">
        <title>Variável e Operadores</title>
    </head>
    <body>
        <?php
        echo "Hello World!</br>";
        
        // VARIAVEIS
        $nome = "Aline de Araújo";
        $num = 10;
        $num2 = 10;
        $total = $num + $num2;
        
        // APRESENTAR VARIAVEIS COM CONCATENAÇÃO
        echo "Meu nome é " . $nome;
        echo "</br>";
        echo "E minha idade é " . $total . " anos"; 

        // USUARIO INSERE O VALOR DA VARIAVEL
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
    </body>
</html>
