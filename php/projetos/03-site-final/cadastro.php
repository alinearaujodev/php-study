<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 , text-html">
        <meta http-equiv="Content-Type">
        <title>Confirmação de Cadastro</title>
    </head>
    <body>
        <?php
            $nome = $GET["nome"];
            $cpf = $GET["cpf"];
            $email = $GET["email"];
            $mensagem = $GET["mensagem"];

            // Validar campos
            $camposOK = true;
            if ($nome == ""){
                echo "Informe o nome<br/>";
                $camposOK = false;
            }
            if ($cpf == ""){
                echo "Informe o CPF<br/>";
                $camposOK = false;
            }
            if ($email == ""){
                echo "Informe o Email<br/>";
                $camposOK = false;
            }

            // Confirmar cadastro
            if ($camposOK) {
                echo "<h1>Seu Cadastro foi confirmado com sucesso!</h1>";
            }
        ?>
    </body>
</html>
