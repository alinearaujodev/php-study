<!DOCTYPE html>
<html lang="pr-BR">
    <head>
        <meta charset="UTF-8">
        <title>PHP com MYSQL - SENAC</title>
    </head>
    <body>
        <header style="text-align: center">
            <h1>PHP com MYSQL - SENAC</h1>
            <h2>Página web para curso de PHP com MYSQL do Senac</h2>
            <p>BY: <a href="https://alinearaujo.dev" target="_blank">Aline Araújo Dev</a> | 2020</p>
        </header>
        
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

        // ESTRUTURA DE CONTROLE IF/ELSE
        if ($num > 0){
            echo "</br>$num é um numero positivo!";
        } 
        elseif($num < 0) {
            echo "</br>$num é um numero negativo!"; 
        }

        // ESTRUTURA DE CONTROLE SWITCH
        $op = "+";
        $n1 = 10;
        $n2 = 5;

        switch ($op) {
            case "+" : 
                echo "</br> Soma = " . ($n1 + $n2);
            break;
            case "-":
                echo "</br> Subtração = " . ($n1 - $n2);
            break;
            case "*":
                echo "</br> Multiplicação = " . ($n1 * $n2);
            break;
            case "/":
                echo "</br> Divisão = " . ($n1 / $n2);
            break;
            default:
                echo "Comando invalido!";
        }
        
        ?>
    </body>
</html>
