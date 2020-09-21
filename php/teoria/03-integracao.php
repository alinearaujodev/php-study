<html>
    <head>
        <?php    
            $color = $_GET["cor"];                
        ?>
        <style>
            span.texto {
                color: <?php echo $color; ?>;
            }
        </style>
    </head>
    <body>
        <?php
            $nome = $_GET["name"];
            $ano = $_GET["year"];
            $sexo = $_GET["sexo"]; 
            $idade = date("Y") - $ano; 
            
            echo "<span class='texto'>Olá $nome, seu sexo é $sexo e tem $idade anos</span>";
        ?>
    </body>
</html>
