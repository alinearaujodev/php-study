<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores de Atribuição</title>
    </head>
    <body>
        <?php
            // Operadores de Atribuição
            $a = 10;
            $b = 5;

            $a += $b;
            $a -= $b;
            $a *= $b;
            $a /= $b;
            $a %= $b;
            $a .= $b;

            // Exercicio 1
            $preco = $_GET["p"];

            echo "<br/>Valor do desconto: " . ($preco*10)/100;
            echo "<br/>Valor do produto com desconto: " . ($preco - ($preco*10)/100);

            // Variaveis referenciadas 
            $x = 3;
            $y = &$x;
            $y += 2;

            echo "<br/> $x";
            echo "<br/> $y";

            // Variaveis de variaveis

            $z = "abc";
            $$z = "def";

            echo "<br/>O conteudo da variavel Z = $z" ;
            echo "<br/>A variavel ABC tem o conteudo = $abc";
        ?>
    </body>
</html>