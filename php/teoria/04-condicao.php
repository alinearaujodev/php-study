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
            $sexo = isset($GET["sexo"])?$_GET["sexo"]:0;
    
            switch ($sexo) {
                case 1 : 
                    echo "<br/>Sexo: Masculino";
                break;
                case 2:
                    echo "<br/>Sexo: Feminino";
                break;
                default:
                    echo "<br/>Sexo não informado!";
            }

        ?>
    </body>
</html>