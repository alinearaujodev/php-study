<?php
    $estados = isset($_GET["estados"])?$_GET["estados"]:0;

    switch ($estados){
        case "AC":
        case "AM":
            echo "O estado fica na <strong>Região Norte</strong>";
        break;
        case "BA":
        case "PI":
            echo "O estado fica na <strong>Região Nordeste</strong>";
        break;
        case "DF":
        case "GO":
            echo "O estado fica na <strong>Região Centro-Oeste</strong>";
        break;
        case "SP":
        case "RJ":
            echo "O estado fica na <strong>Região Sudeste</strong>";
        break;
        case "SC":
        case "PR":
            echo "O estado fica na <strong>Região Sul</strong>";
        break;
        default:
            echo "Estado não informado!";
    }

?>