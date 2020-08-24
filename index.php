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
        
        // Variáveis
        $nome = "Aline de Araújo";
        $num = 10;
        $num2 = 10;
        $total = $num + $num2;
        
        // Apresentar variáveis com concatenação
        echo "Meu nome é " . $nome;
        echo "</br>";
        echo "E minha idade é " . $total . " anos";
        
        ?>
    </body>
</html>
