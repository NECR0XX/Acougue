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


if (isset($_GET['submit'])) {
    $produto = $_GET['submit'];
    $tipo = isset($_GET['Tipo1']) ? $_GET['Tipo1'] : '------------------';
    $tipo2 = isset($_GET['Tipo2']) ? $_GET['Tipo2'] : '--------';
    $porcao = isset($_GET['Porcao1']) ? $_GET['Porcao1'] : '---------';

    echo '<table border="1">';
    echo '<thead><tr><th>Produto</th><th>Tipo</th><th>Tipo de Corte</th><th>Porção</th><th>Quantiddade</th><th colspan="2">Opções</th></tr></thead>';
    echo '<tbody>';

    if (!empty($produto)) {
        echo '<tr>';
        echo '<td>' . $produto . '</td>';
        echo '<td>' . $tipo2 . '</td>';
        echo '<td>' . $tipo . '</td>';
        echo '<td>' . $porcao . '</td>';
        echo '<td>' . '<form action="confirm.php" method="get">
        <input type="number" min="1" max="1000" name="qtde"></input>' . '</td>';
        echo '<td><a style="color:black;" href="atualizar.php?id=' . '">Atualizar</a></td>';
        echo '<td><a style="color:black;" href="deletar.php?id=' . '">Deletar</a></td>';
        echo '<td><a style="color:black;" href="confirm.php?id=' . '">Confirmar</a></td>';
        echo '</tr>';
    }


    }


?>