<pre>
<?php
    $n = array(4,2,7,1,3);
    $n[] = 7;
    print_r($n);

    // Criando vetor com range
    $c = range(2,10,2);
    unset($c[4]);
    foreach($c as $v){
        echo "$v ";
    }

    // Associativo
    $cad = array("nome" => "Aline", "sexo" => "f", "peso" => "50.5", "fuma" => "false");
    foreach($cad as $campo => $valor){
        echo " $campo = $valor ";
    }

    // Gerenciando elemetos dos vetores
    print_r($c);
    array_push($c,200); // Coloca um elemento no final do vetor
    print_r($c);

    print_r($c);
    array_pop($c); // Tira um elemento no final do vetor
    print_r($c);

    print_r($c);
    array_unshift($c, 350); // coloca um elemento no inicio do vetor
    print_r($c);

    print_r($c);
    array_shift($c); // tira um elemento no inicio do vetor
    print_r($c);

    // Ordenação de vetores
    sort($n); 
    print_r($n);

    rsort($n); // Ordem reversa
    print_r($n);

?>
</pre>