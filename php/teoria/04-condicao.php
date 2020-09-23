<!DOCTYPE html>
<html lang="pr-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estrutura de Condição</title>
    </head>
    <body>
        <?php
            // ESTRUTURA DE CONTROLE IF/ELSE
            $year = $_GET["year"];
            $age = date("Y") - $year;

            if ($age < 16){
                echo "<br/>Você tem $age, então não pode votar";
            } 
            elseif ($age >= 16 && $age < 18){
                echo "<br/>Você tem $age, então pode votar se quiser";
            } 
            else {
                echo "<br/>Você tem $age, então pode votar";
            }

            // ESTRUTURA DE CONTROLE SWITCH
            $op = "+";
            $n1 = 10;
            $n2 = 5;
    
            switch ($op) {
                case "+" : 
                    echo "<br/> Soma = " . ($n1 + $n2);
                break;
                case "-":
                    echo "<br/> Subtração = " . ($n1 - $n2);
                break;
                case "*":
                    echo "<br/> Multiplicação = " . ($n1 * $n2);
                break;
                case "/":
                    echo "<br/> Divisão = " . ($n1 / $n2);
                break;
                default:
                    echo "Comando invalido!";
            }

        ?>
    </body>
</html>