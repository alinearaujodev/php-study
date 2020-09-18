<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, text-html">
        <meta http-equiv="Content-Type">
        <title>Cadastro da Atividade 4</title>
    </head>
    <body>
        <header>
            <h1>Os dados informados são: </h1>
        </header>
        <main>
            <?php
                $nome = $_POST["txtNome"];
                $cpf = $_POST["txtCPF"];
                $nasc = $_POST["txtNasc"];
                $sexo = $_POST["sexo"];
                $endereco = $_POST["txtEndereco"];
                $estado = $_POST["listEstados"];
                $cinema = $_POST["cinema"];
                $esporte = $_POST["esportes"];
                $musica = $_POST["musica"];
                $tec = $_POST["tec"];
                $login = $_POST["txtLogin"];
                $senha = $_POST["txtSenha"];
                $confsenha = $_POST["txtCsenha"];

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
                if ($endereco == ""){
                    echo "Informe o Endereço<br/>";
                    $camposOK = false;
                }

                // Senhas conferem
                if ($senha != $confsenha){
                    echo "As senhas não conferem! <br/>"; 
                    $camposOK = false;
                }

                // Mostrar os valores em tabela
                if ($camposOK) {
                    echo "<table border='0' cellpadding='5'>";
                    echo "<tr><td>Nome: </td><td><strong>$nome</strong></td></tr>";
                    echo "<tr><td>CPF: </td><td><strong>$cpf</strong></td></tr>";
                    echo "<tr><td>Endereço: </td><td><strong>$endereco</strong></td></tr>";
                    echo "<tr><td>Estado: </td><td><strong>$estado</strong></td></tr>";
                    echo "<tr><td>Data de Nasc.: </td><td><strong>$nasc</strong></td></tr>";
                    echo "<tr><td>Sexo: </td><td><strong>$sexo</strong></td></tr>";
                    echo "<tr><td>Login: </td><td><strong>$login</strong></td></tr>";
                    echo "<tr><td>Senha: </td><td><strong>$senha</strong></td></tr>";
                }

                // Return dos Checkbox
                echo "<tr><td>Áreas de Interesse</td><td><strong>";
                if ($cinema == true){
                    echo "Cinema <br/>";
                }
                if ($esporte == true){
                    echo "Esportes <br/>";
                } 
                if ($musica == true){
                    echo "Música <br/>";
                }
                if ($tec == true){
                    echo "Tecnologia <br/>";
                }
                echo "</strong></td></tr></table>";
            ?>
        </main>
        <footer style="text-align: center" >
            <hr>
            <p>Copyright 2020</p>
        </footer>
    </body>
</html>