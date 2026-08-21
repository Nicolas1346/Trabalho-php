<?php
$conn = new mysqli(
    "localhost", 
    "root", 
    "", 
    "gerenciador de campeonatos");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $clube = $_POST["clube"];
    $cidade = $_POST["cidade"];
    $técnico = $_POST["técnico"];
    $pontos = $_POST["pontos"];
    $vitorias = $_POST["vitorias"];
    $status = $_POST["status"];

    $sql = "INSERT INTO campeonato (clube, cidade, técnico, pontos, vitorias, status)
            VALUES ('$clube', '$cidade', '$técnico', '$pontos', '$vitorias', '$status')";

    $conn->query($sql);

    header("Location: index.php");
    exit;
}
?>

<h2>Cadastro Time</h2>

<form method="POST">
    Clube: <input type="text" name="clube"><br><br>
    Cidade: <input type="text" name="cidade"><br><br>
    Técnico: <input type="text" name="técnico"><br><br>
    Pontos: <input type="number" name="pontos"><br><br>
    Vitórias: <input type="number" name="vitorias"><br><br>
    Status: <input type="text" name="status"><br><br>

    <button type="submit">Cadastrar</button>
</form>
