<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade 14/09/20</title>
    </head>
    <body>
        <?php
            // Exercício Echo - escrever na tela
            echo "<h1>Página de teste</h1>";
            echo "<p>Paragrafo em HTML</p>";
            echo "<font color=green>";
            echo "Mensagem solta em verde </br>";
            echo "</font>";
            echo "FIM";

            // Exercício If and Else and Switch - comando de controle (condição)
            $a = 5; $b = 7; $c = 3;
            if ($a > $b){
                echo "</br>A é maior que B";
            }
            elseif ($a > $c){
                echo "</br>A é maior que C";
            }
            else {
                echo "</br>A é menor que B e C";
            }

            $n1 = 10; $n2 = 5;
            $op = "*";

            switch ($op){
                case "+":
                    echo "</br>Soma = " . ($n1+$n2);
                break;
                case "-":
                    echo "</br>Subtração = " . ($n1-$n2);
                break;
                case "*":
                    echo "</br>Multiplicação = " . ($n1*$n2);
                break;
                case "/":
                    echo "</br>Divisão = " . ($n1/$n2);
                break;
                default:
                    echo "</br>Comando invalido!";
                break;
            }

            // Exercícios While, Do...While and For - comando de repetição
            $i = 0; $f = 15;
            $i2 = 15; $f2 = 0;
            while ($i < $f){
                $i++;
                $f--;
                echo "</br>I - $i F - $f";
            }

            do {
                $i2--;
                $f2++;
                echo "</br>I2 - $i2 F2 - $f2";
            } while ($i2 > $f2);

        ?>
    </body>
</html>