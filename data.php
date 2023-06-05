<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['submit'])) {
    $Nome = $_GET['Nome'] ?? "";
    $Porcao = $_GET['Porcao'] ?? "";
    $Tipo = $_GET['Tipo'] ?? "";
    $Preco = $_GET['Preco'] ?? "";
}

echo "<strong>Nome:</strong> " . $Nome . "<br>";
echo "<strong>Porção:</strong> " . $Porcao . "<br>";
echo "<strong>Tipo:</strong> " . $Tipo . "<br>";
echo "<strong>Preço:</strong> " . $Preco . "<br>";

/* echo "<strong>O valor total das frutas é:</strong> R$" . number_format($total_value, 2); */
?>