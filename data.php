<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Document</title> 
</head>
<body>
<?php

$Produtos = [
    ['Preco' => 'R$25,90'],

    ['Preco' => 'R$27.90',],

    ['Preco' => 'R$22.45',],

    ['Preco' => 'R$20.70',],

    ['Preco' => 'R$24.90',],

    ['Preco' => 'R$49.90',],

    ['Preco' => 'R$26.90',],

    ['Preco' => 'R$22.70',],

    ['Preco' => 'R$23.70',],

    ['Preco' => 'R$43.90',],

    ['Preco' => 'R$22.90',],

    ['Preco' => 'R$23.90',],

    ['Preco' => 'R$21.60',],

    ['Preco' => 'R$32.90',],

    ['Preco' => 'R$26.90',],

    ['Preco' => 'R$20.45',],

    ['Preco' => 'R$29.90',],

    ['Preco' => 'R$24.90',],

    ['Preco' => 'R$19.90',],

    ['Preco' => 'R$17.50',],

    ['Preco' => 'R$19.90',],

    ['Preco' => 'R$20.40',],

    ['Preco' => 'R$24.90',],

    ['Preco' => 'R$21.90',],

    ['Preco' => 'R$22.90',],

    ['Preco' => 'R$20.90',],

    ['Preco' => 'R$22.45',],

    ['Preco' => 'R$27.90',],

    ['Preco' => 'R$31.90',],

    ['Preco' => 'R$30.90',],

    ['Preco' => 'R$22.90',],

    ['Preco' => 'R$20.90',],

    ['Preco' => 'R$14.90',],

    ['Preco' => 'R$18.50',],

    ['Preco' => 'R$15.90',],

    ['Preco' => 'R$13.90',],

    ['Preco' => 'R$13.45',],

    ['Preco' => 'R$15.90',],

    ['Preco' => 'R$17.90',],

    ['Preco' => 'R$18.45',],

    ['Preco' => 'R$20.00',],

    ['Preco' => 'R$25.90',],

    ['Preco' => 'R$26.90',],

    ['Preco' => 'R$2.99',],

    ['Preco' => 'R$15.90',],

    ['Preco' => 'R$21.90',],

    ['Preco' => 'R$23.90',],

    ['Preco' => 'R$12.00',],

    ['Preco' => 'R$8.70',],

    ['Preco' => 'R$5.00',],

    ['Preco' => 'R$11.00',]
];
//$Produtos[1]['Preco']


session_start(); // Iniciar a sessão (se ainda não estiver iniciada)

if (isset($_GET['submit'])) {
    $produto = $_GET['submit'];
    $tipo = isset($_GET['Tipo']) ? $_GET['Tipo'] : '-----';
    $tipo2 = isset($_GET['Tipo2']) ? $_GET['Tipo2'] : '-----';
    $porcao = isset($_GET['Porcao']) ? $_GET['Porcao'] : '-----';

    $produtosSelecionados = isset($_SESSION['produtosSelecionados']) ? $_SESSION['produtosSelecionados'] : array();
    $produtoAtual = array(
        'produto' => $produto,
        'tipo' => $tipo,
        'tipo2' => $tipo2,
        'porcao' => $porcao
    );
    $produtosSelecionados[] = $produtoAtual;

    $_SESSION['produtosSelecionados'] = $produtosSelecionados;
}


echo '<table border="1">';
echo '<thead><tr><th>Produto</th><th>Temperatura</th><th>Tipo de Corte</th><th>Porção</th><th>Preço</th><th>Quantidade</th><th colspan="1">Opções</th></tr></thead>';
echo '<tbody>';

foreach ($_SESSION['produtosSelecionados'] as $key => $produto) {
    echo '<tr>';
    echo '<td>' . $produto['produto'] . '</td>';
    echo '<td>' . $produto['tipo2'] . '</td>';
    echo '<td>' . $produto['tipo'] . '</td>';
    $separar = explode(':', $produto['porcao']);
    echo '<td>' . $separar[0] . '</td>';
    echo '<td>' . $separar[1] . '</td>';
    echo '<td><input type="number" name="qtd" value="1" min="1" max="100"></td>';
    echo "<form method='POST' action='deletar.php'>";
    echo "<input type='hidden' name='produto_key' value='" . $key . "'>";
    echo "<td><div class='if'><button type='submit'>Remover</button></div></td>";
    echo "</form>";
    echo '</tr>';
}

echo '</tbody></table>';

echo '<form action="index2.html">';
echo '<td><div class="if"><button type="submit">Adicionar Produtos</td>';
echo '</form>';
echo '<td><div class="if"><button type="submit"><a href="cfeita.html">Continuar</a></td>';



?>
</body>
</html>