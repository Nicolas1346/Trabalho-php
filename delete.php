<?php

$id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Excluir Campeonato</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding-top: 100px;
        }

        .caixa {
            background-color: white;
            width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
        }

        h2 {
            margin-bottom: 20px;
        }

        .excluir {
            background-color: red;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .voltar {
            background-color: #555;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>

</head>

<body>

<div class="caixa">

    <h2>Excluir campeonato</h2>

    <p>Tem certeza que deseja excluir este campeonato?</p>

    <br>

    <a class="excluir" href="deleta.php?id=<?= $id ?>">
        Sim, excluir
    </a>

    <a class="voltar" href="index.php">
        Cancelar
    </a>

</div>

</body>

</html>
