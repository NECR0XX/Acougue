<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Image/Baked_Potato.webp" type="image/png">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Açougue Carne Quadrada</title>
</head>
<body>
    
    <!-- MENU -->
<section class="menu">
    <div class="logo"><a href="index2.html"><img src="Image/Açougue_Carne_quadrada-removebg-preview.png"></a></div>
    <div class="iconc"><a href="cow2.html"><img src="Image/Cow-icon.jpg"></a></div>
    <div class="iconp"><a href="pig2.html"><img src="Image/Pig-icon.jpg"></a></div>
    <div class="icong"><a href="chicken2.html"><img src="Image/Chicken-icon.jpg"></a></div>
    <div class="iconf"><a href="fish2.html"><img src="Image/Tropical_Fish.webp"></a></div>
    
    <!-- LOGOUT -->
    <div class="s">
        <a href="index.html">
          <div class="retangulos"></div>
          <p>SAIR</p>
        </a>
      </div>

      <!-- CARRINHO -->
      <div class="carrinho"><a href="carrinho.php"><img src="Image/carrinho.png"></a></div>
</section>

<!-- ANIMATED -->
<div class="animated">
  <div class="anima-track">
    <div class="anima"><img src="Image/Cooked_Porkchop.webp"></div>
    <div class="anima"><img src="Image/Steak.webp"></div>
    <div class="anima"><img src="Image/Cooked_Salmon.webp"></div>
    <div class="anima"><img src="Image/Cooked_Chicken.webp"></div>
    <div class="anima"><img src="Image/Carrot.png"></div>
    <div class="anima"><img src="Image/Baked_Potato.webp"></div>
    <div class="anima"><img src="Image/Cooked_Cod.webp"></div>
    <div class="anima"><img src="Image/Cooked_Chicken.webp"></div>
    <div class="anima"><img src="Image/Steak.webp"></div>
    <div class="anima"><img src="Image/Cooked_Salmon.webp"></div>
    <div class="anima"><img src="Image/Cooked_Porkchop.webp"></div>
    <div class="anima"><img src="Image/Carrot.png"></div>
  </div>
</div>

<?php
session_start();

if (isset($_GET['id'])) {
    $produtoId = $_GET['id'];

    // Recuperar o array de produtos selecionados da sessão
    $produtosSelecionados = isset($_SESSION['produtosSelecionados']) ? $_SESSION['produtosSelecionados'] : array();

    // Percorrer o array de produtos selecionados
    foreach ($produtosSelecionados as $key => $produto) {
        // Verificar se o ID do produto coincide
        if ($key == $produtoId) {
            // Remover o produto do array
            unset($produtosSelecionados[$key]);
            break;
        }
    }

    // Atualizar o array de produtos selecionados na sessão
    $_SESSION['produtosSelecionados'] = $produtosSelecionados;
}

// Redirecionar de volta para a página carrinho.php após a exclusão
header("Location: carrinho.php");
exit();
?>

<!-- RODAPÉ -->
<section class="sidebarf">
  <div class="rd"><p>Açougue Carne Quadrada LTDA, CNPJ 34.105.818/0001-90 - Todos os direitos reservados.</p></div>
  <div class="rd2"><img src="Image/instagram.png"></div>
  <div class="rd3"><img src="Image/face2.png"></div>
</section>

</body>
</html>