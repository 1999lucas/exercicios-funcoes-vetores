<?php

$nome = isset($_POST["nome"]) ? $_POST["nome"] :  NULL;

$cidadeSelecionada = isset($_POST["cidades"]) ? $_POST["cidades"] : NULL;

$listaCidades = [
    1 => "Jandira",
    2 => "Itapevi",
    3 => "Barueri",
    4 => "Osasco",
    5 => "Cotia",
    6 => "Santana de Parnaíba",
    7 => "Carapicuíba",
    8 => "São Paulo",
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    
</head>

<body>
    <form method="POST">
        <h1> Nome: </h1>
        <div class="input-group">
            <label for="nome"></label>
            <h1><input type="text" name="nome" id="nome" placeholder="Digite o seu nome aqui" required /></h1>
        </div>



        <label for="cidades">
            <h1>Onde você mora?</h1>
        </label>
        <select id="cidades" autofocus name="cidades" required>

            <option value="">Selecione sua Cidade</option>
            <?php

            foreach ($listaCidades as $chave => $cidade) {
            ?>
                <option value="<?= $chave ?>"><?= $cidade ?></option>

            <?php
            }

            ?>

        </select>
        <button>Enviar</button>
        <div id="ln"></div>
        <h1>
            <font size="4">
                <?php
                if (isset($nome, $listaCidades[$cidadeSelecionada])) {
                echo "Olá " . $nome . " de " . $listaCidades[$cidadeSelecionada] . ", seja bem-vindo.";
                }else{
                    return;
                }
                ?>
        </h1>
        </font>
    </form>
</body>

</html>