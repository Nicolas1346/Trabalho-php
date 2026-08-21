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

<h2>Gerenciador campeonatos</h2>

<link rel="stylesheet" href="style.css">

<a href="cadastro.php">
    Cadastrar clube 
</a>
<br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>clube</th>
        <th>cidade</th>
        <th>técnico</th>
        <th>pontos</th>
        <th>vitorias</th>
        <th>status</th>
        <th>ações</th>
<?php foreach ($resultado as $campeonato) { ?>
        <tr>
            <td>
                <?= $campeonato['id'] ?>
            </td>

            <td>
                <?= $campeonato['clube'] ?>
            </td>

            <td>
                <?= $campeonato['cidade'] ?>
            </td>
            
            <td>
                <?= $campeonato['técnico'] ?>
            </td>

            <td>
                <?= $campeonato['pontos'] ?>
            </td>

            <td>
                <?= $campeonato['vitorias'] ?>
            </td>

            <td>
                <?= $campeonato['status'] ?>
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
