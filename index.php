<?php 

$conn = new mysqli(
    '127.0.0.1',
    'root',
    '',
    'gerenciador de campeonatos'
);

$sql = 'SELECT id, clube, cidade, técnico, pontos, vitorias, status
        FROM campeonato';

$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Gerenciador de Campeonatos</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>Gerenciador de Campeonatos</h2>

    <a href="cadastro.php">
        Cadastrar clube
    </a>

    <br><br>

    <table>

        <tr>
            <th>ID</th>
            <th>Clube</th>
            <th>Cidade</th>
            <th>Técnico</th>
            <th>Pontos</th>
            <th>Vitórias</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($resultado as $campeonato) { ?>

        <tr>

            <td>
                <?= $campeonato['id'] ?>
            </td>

            <td>
                <?= htmlspecialchars($campeonato['clube']) ?>
            </td>

            <td>
                <?= htmlspecialchars($campeonato['cidade']) ?>
            </td>

            <td>
                <?= htmlspecialchars($campeonato['técnico']) ?>
            </td>

            <td>
                <?= $campeonato['pontos'] ?>
            </td>

            <td>
                <?= $campeonato['vitorias'] ?>
            </td>

            <td>
                <?= htmlspecialchars($campeonato['status']) ?>
            </td>

            <td>

                <a href="editar.php?id=<?= $campeonato['id'] ?>">
                    Editar
                </a>

                <a href="delete.php?id=<?= $campeonato['id'] ?>">
                    Excluir
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>
