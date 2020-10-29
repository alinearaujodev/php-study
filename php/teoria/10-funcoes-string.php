<?php

    // Função printf - escreve na tela, assim como a linguagem C
    $prod = "Leite";
    $preco = 4.15;

    printf("O %s custa R$ %.2f", $prod, $preco);

    // Função print_r - Mostra detalhes de uma variavél (array)
    $x[0] = 5;
    $x[1] = 2;
    $x[2] = 9;

    echo "<br/>";
    print_r($x);
    echo "<br/>";
    var_dump($x);
    echo "<br/>";
    var_export($x);

    // Funcao trim - Elimina espaços em branco da string
    $nome = "  Aline de Araújo  ";
    echo (strlen($nome));
    echo $novo = trim($nome);

    // Função srt_word_count - Conta as palavra de uma string
    $frase  = "eu vou estudar PHP";
    $cont = str_word_count($frase, 0);
        // 0 - retorna o numero exato de palavras / 1 - retorna cada palavra dentro de um array / 2 - retorna cada letra de uma plavara dentro do indice do array
    echo $cont;

    // Função ucwords - deixa as primeiras letras de todas as palavras em maiusculo
    // Funcao ucfirst - deixa a primeira letra da primeira a palavra em maiusculo
    echo ucwords($frase);
    echo ucfirst($frase);

    // Função stripos - procura a posicao de determinada string
    echo $pos = stripos($frase, "php");
?>