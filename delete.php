<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "gerenciador de campeonatos"
);

$id = $_GET["id"];

$sql = "DELETE FROM campeonato
        WHERE id = $id";

$conn->query($sql);

header("Location: index.php");

exit;
