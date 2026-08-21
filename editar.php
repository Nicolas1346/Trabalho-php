<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "gerenciador de campeonatos"
);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $clube = $_POST["clube"];
    $cidade = $_POST["cidade"];
    $técnico = $_POST["técnico"];
    $pontos = $_POST["pontos"];
    $vitorias = $_POST["vitorias"];
    $status = $_POST["status"];


    $sql = "UPDATE campeonato
            SET
                clube = '$clube',
                cidade = '$cidade',
                técnico = '$técnico',
                pontos = '$pontos',
                vitorias = '$vitorias',
                status = '$status'
            WHERE id = $id";

    $conn->query($sql);

    header("Location: index.php");
    exit;
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM campeonato WHERE id = $id";
    $resultado = $conn->query($sql);

    $campeonato = $resultado->fetch_assoc();
} else {
    header("Location: index.php");
    exit;
}

?>

<head>
<h2>Editar Time</h2>
<link rel="stylesheet" href="formulario.css">
<head>
    
<form method="POST">

    <input
        type="hidden"
        name="id"
        value="<?= $campeonato["id"] ?>"
    >

    Clube:
    <input
        type="text"
        name="clube"
        value="<?= $campeonato["clube"] ?>"
    >

    <br><br>

    Cidade:
    <input
        type="text"
        name="cidade"
        value="<?= $campeonato["cidade"] ?>"
    >

    <br><br>

    Técnico:
    <input
        type="text"
        name="técnico"
        value="<?= $campeonato["técnico"] ?>"
    >

    <br><br>

    Pontos:
    <input
        type="number"
        name="pontos"
        value="<?= $campeonato["pontos"] ?>"
    >

    <br><br>

    Vitórias:
    <input
        type="number"
        name="vitorias"
        value="<?= $campeonato["vitorias"] ?>"
    >

    <br><br>

    Status:
    <input
        type="text"
        name="status"
        value="<?= $campeonato["status"] ?>"
    >

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>
