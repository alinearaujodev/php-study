<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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