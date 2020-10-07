<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estrutra de Repetição no PHP</title>
    </head>
    <body>
        <div>
            <form action="05-repeticao1p.php" method="GET">
                <?php 
                    $c = 1;
                    while ($c <=3){
                        echo "<label>Valor $c:</label>
                        <input type='number' name='v$c'></br></br>";
                        $c ++;
                    }                 
                ?>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>