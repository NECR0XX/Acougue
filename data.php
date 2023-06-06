<?php
/* REVER
$Produtos = [
    ['Nome' => 'Acém',
    'Preco' => 'R$25,90'],

    ['Nome' => 'Costela', 
    'Preco' => 'R$27.90',],

    ['Nome' => 'Fraldinha', 
    'Preco' => 'R$22.45',],

    ['Nome' => 'Músculo', 
    'Preco' => 'R$20.70',],

    ['Nome' => 'Peito', 
    'Preco' => 'R$24.90',],

    ['Nome' => 'Alcatra', 
    'Preco' => 'R$49.90',],

    ['Nome' => 'Contra Filé', 
    'Preco' => 'R$26.90',],

    ['Nome' => 'Coxão Duro', 
    'Preco' => 'R$22.70',],

    ['Nome' => 'Coxão Mole', 
    'Preco' => 'R$23.70',],

    ['Nome' => 'Filé Mignon', 
    'Preco' => 'R$43.90',],

    ['Nome' => 'Lagarto', 
    'Preco' => 'R$22.90',],

    ['Nome' => 'Patinho', 
    'Preco' => 'R$23.90',],

    ['Nome' => 'Maminha', 
    'Preco' => 'R$21.60',],

    ['Nome' => 'Picaha', 
    'Preco' => 'R$32.90',],

    ['Nome' => 'Bisteca', 
    'Preco' => 'R$26.90',],

    ['Nome' => 'Barriga', 
    'Preco' => 'R$20.45',],

    ['Nome' => 'Costelinha', 
    'Preco' => 'R$29.90',],

    ['Nome' => 'Lombo', 
    'Preco' => 'R$24.90',],

    ['Nome' => 'Pernil', 
    'Preco' => 'R$19.90',],

    ['Nome' => 'Toucinho', 
    'Preco' => 'R$17.50',],

    ['Nome' => 'Linguiça Pura', 
    'Preco' => 'R$19.90',],

    ['Nome' => 'Linguiça Mista', 
    'Preco' => 'R$20.40',],

    ['Nome' => 'Linguiça Toscana', 
    'Preco' => 'R$24.90',],

    ['Nome' => 'Asa', 
    'Preco' => 'R$21.90',],

    ['Nome' => 'Coxa', 
    'Preco' => 'R$22.90',],

    ['Nome' => 'Coxinha da Asa', 
    'Preco' => 'R$20.90',],

    ['Nome' => 'Filé de Frango', 
    'Preco' => 'R$22.45',],

    ['Nome' => 'Frango à Passarinho', 
    'Preco' => 'R$27.90',],

    ['Nome' => 'Frango Inteiro', 
    'Preco' => 'R$31.90',],

    ['Nome' => 'Frango Caipira', 
    'Preco' => 'R$30.90',],

    ['Nome' => 'Sobrecoxa', 
    'Preco' => 'R$22.90',],

    ['Nome' => 'Tulipa', 
    'Preco' => 'R$20.90',],

    ['Nome' => 'Coração', 
    'Preco' => 'R$14.90',],

    ['Nome' => 'Dorço', 
    'Preco' => 'R$18.50',],

    ['Nome' => 'Fígado', 
    'Preco' => 'R$15.90',],

    ['Nome' => 'Moela', 
    'Preco' => 'R$13.90',],

    ['Nome' => 'Pé', 
    'Preco' => 'R$13.45',],

    ['Nome' => 'Filé de Tilápia', 
    'Preco' => 'R$15.90',],

    ['Nome' => 'Filé de Salmão', 
    'Preco' => 'R$17.90',],

    ['Nome' => 'Atum', 
    'Preco' => 'R$18.45',],

    ['Nome' => 'Sardinha', 
    'Preco' => 'R$20.00',],

    ['Nome' => 'Camarão', 
    'Preco' => 'R$25.90',],

    ['Nome' => 'Lagosta', 
    'Preco' => 'R$26.90',],

    ['Nome' => 'Sal Grosso', 
    'Preco' => 'R$2.99',],

    ['Nome' => 'Carvão JP Premium', 
    'Preco' => 'R$15.90',],

    ['Nome' => 'Sal de Parrilha', 
    'Preco' => 'R$21.90',],

    ['Nome' => 'Sal de Parrilha com cebola e alho', 
    'Preco' => 'R$23.90',],

    ['Nome' => 'Coca Cola', 
    'Preco' => 'R$12.00',],

    ['Nome' => 'Heineken', 
    'Preco' => 'R$8.70',],

    ['Nome' => 'Brahma', 
    'Preco' => 'R$5.00',],

    ['Nome' => 'Pepsi', 
    'Preco' => 'R$11.00',]
];
*/

if (isset($_GET['submit'])) {
    $produto = $_GET['submit'];
    $tipo = isset($_GET['Tipo1']) ? $_GET['Tipo1'] : '';
    $porcao = isset($_GET['Porcao1']) ? $_GET['Porcao1'] : '';

    echo '<table border="1">';
    echo '<thead><tr><th>Produto</th><th>Tipo</th><th>Porção</th><th colspan="2">Opções</th></tr></thead>';
    echo '<tbody>';

    if (!empty($produto)) {
        echo '<tr>';
        echo '<td>' . $produto . '</td>';
        echo '<td>' . $tipo . '</td>';
        echo '<td>' . $porcao . '</td>';
        echo '<td><a style="color:black;" href="atualizar.php?id=' . '">Atualizar</a></td>';
        echo '<td><a style="color:black;" href="deletar.php?id=' . '">Deletar</a></td>';
        echo '</tr>';
    }


    }


?>