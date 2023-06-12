<?php
session_start();

if (isset($_POST['produto_key'])) {
  $produto_key = $_POST['produto_key'];

  if (isset($_SESSION['produtosSelecionados'][$produto_key])) {
    unset($_SESSION['produtosSelecionados'][$produto_key]);
  }
}

header("Location: carrinho.php"); // Redireciona de volta para a página do carrinho
exit();
?>