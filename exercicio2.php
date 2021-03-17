<?php
 
 function Nome() {
    $nome = ["João", "Maria", "Camila", "Roberto"];
    $nomeEspecifico = "Lucas";

    if (in_array("Roberto", $nome)) {
        echo "true";
    }else{
        if (in_array("João", $nome)) {
            echo "false";
    }
    }
}
Nome();