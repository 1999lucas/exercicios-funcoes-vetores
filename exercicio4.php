<?php

$valor = "verde";
$vetor = ["azul", "branco", "amarelo", "rosa", "vermelho", "roxo"];

print_r($vetor);

function deletaElemento($vetor, $valor)
{
        if ($valor == $vetor[5]) {
            unset($vetor[5]);
            
            echo "<br/><br/>";

            print_r($vetor);
        } else {

            echo "<br/><br/>";

            echo "false";
        }
    }
deletaElemento($vetor, $valor);