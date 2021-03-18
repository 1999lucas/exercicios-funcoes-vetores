<?php

function inverteVetor(array $vetor){
$vetorInvertido = [];

for($i = (count($vetor) - 1); $i >= 0; $i --){
  $vetorInvertido[] = $vetor[$i];
}

return $vetorInvertido;

}

$vetorQualquer = ["Olá", "Dois", "Quatro", "Trinta"];

$vetorInvertido = inverteVetor($vetorQualquer);

print_r($vetorInvertido);