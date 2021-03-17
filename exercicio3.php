<?php

function arrayInvertido() {
$entrada = ["Olá", 1, 2, "Trinta"];
$saida = array_reverse($entrada);

$colors = array("red", "green", "blue", "yellow");

foreach ($saida as $value) {
  echo "$value <br>";
}
}


// print_r($entrada);

// echo "<br/><br/>";

// print_r($saida);

arrayInvertido();

?>