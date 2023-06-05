<?php
$Nome = [
    'Nome1' => 'Acém','Preco1' => '',
    'Nome2' => 'Costela', 'Preco2' => '',
    'Nome3' => 'Fraldinha', 'Preco3' => '',
    'Nome4' => 'Músculo', 'Preco4' => '',
    'Nome5' => 'Peito', 'Preco5' => '',
    'Nome6' => 'Alcatra', 'Preco6' => '',
    'Nome7' => 'Contra Filé', 'Preco7' => '',
    'Nome8' => 'Coxão Duro', 'Preco8' => '',
    'Nome9' => 'Coxão Mole', 'Preco9' => '',
    'Nome10' => 'Filé Mignon', 'Preco10' => '',
    'Nome11' => 'Lagarto', 'Preco11' => '',
    'Nome12' => 'Patinho', 'Preco12' => '',
    'Nome13' => 'Maminha', 'Preco13' => '',
    'Nome14' => 'Picaha', 'Preco14' => '',
    'Nome15' => 'Bisteca', 'Preco15' => '',
    'Nome16' => 'Barriga', 'Preco16' => '',
    'Nome17' => 'Costelinha', 'Preco17' => '',
    'Nome18' => 'Lombo', 'Preco18' => '',
    'Nome19' => 'Pernil', 'Preco19' => '',
    'Nome20' => 'Toucinho', 'Preco20' => '',
    'Nome21' => 'Linguiça Pura', 'Preco21' => '',
    'Nome22' => 'Linguiça Mista', 'Preco22' => '',
    'Nome23' => 'Linguiça Toscana', 'Preco23' => '',
    'Nome24' => 'Asa', 'Preco24' => '',
    'Nome25' => 'Coxa', 'Preco25' => '',
    'Nome26' => 'Coxinha da Asa', 'Preco26' => '',
    'Nome27' => 'Filé de Frango', 'Preco27' => '',
    'Nome28' => 'Frango à Passarinho', 'Preco28' => '',
    'Nome29' => 'Frango Inteiro', 'Preco29' => '',
    'Nome30' => 'Frango Caipira', 'Preco30' => '',
    'Nome31' => 'Sobrecoxa', 'Preco31' => '',
    'Nome32' => 'Tulipa', 'Preco32' => '',
    'Nome33' => 'Coração', 'Preco33' => '',
    'Nome34' => 'Dorço', 'Preco34' => '',
    'Nome35' => 'Fígado', 'Preco35' => '',
    'Nome36' => 'Moela', 'Preco36' => '',
    'Nome37' => 'Pé', 'Preco37' => '',
    'Nome38' => 'Filé de Tilápia', 'Preco38' => '',
    'Nome39' => 'Filé de Salmão', 'Preco39' => '',
    'Nome40' => 'Atum', 'Preco40' => '',
    'Nome41' => 'Sardinha', 'Preco41' => '',
    'Nome42' => 'Camarão', 'Preco42' => '',
    'Nome43' => 'Lagosta', 'Preco43' => '',
    'Nome44' => 'Sal Grosso', 'Preco44' => '',
    'Nome45' => 'Carvão JP Premium', 'Preco45' => '',
    'Nome46' => 'Sal de Parrilha', 'Preco46' => '',
    'Nome47' => 'Sal de Parrilha com cebola e alho', 'Preco47' => '',
    'Nome48' => 'Coca Cola', 'Preco48' => '',
    'Nome49' => 'Heineken', 'Preco49' => '',
    'Nome50' => 'Brahma', 'Preco50' => '',
    'Nome51' => 'Pepsi', 'Preco51' => '',
];

$Preco = [
    
];

$Porcao = "";
$Tipo = "";

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['submit'])) {

    $Porcao = $_GET['Porcao'] ?? "";
    $Tipo = $_GET['Tipo'] ?? "";

}

echo "<strong>Nome:</strong> " . $Nome . "<br>";
echo "<strong>Porção:</strong> " . $Porcao . "<br>";
echo "<strong>Tipo:</strong> " . $Tipo . "<br>";
echo "<strong>Preço:</strong> " . $Preco . "<br>";

/* echo "<strong>O valor total das frutas é:</strong> R$" . number_format($total_value, 2); */
?>