<?php
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Image/Baked_Potato.webp" type="image/png">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Açougue Carne Quadrada - Cadastro</title>
</head>
<body>
<div class="container-formulario">
<section>
        <div class="base">
    <?php
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $cpf = $_POST['cpf'];

        $stmt = $pdo->prepare('SELECT COUNT(*)
        FROM cadastro WHERE email = ?
        AND cpf = ?');
        $stmt->execute([$email, $cpf]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            $error = 'Já existe uma conta com este email e cpf.';
        } else {
            
            $stmt = $pdo->prepare('INSERT INTO cadastro (nome, email, senha, estado, cidade, cpf) VALUES (:nome, :email, :senha, :estado, :cidade, :cpf)');
            $stmt->execute(['nome' => $nome, 'email' => $email, 'senha' => $senha, 'estado' => $estado, 'cidade' => $cidade, 'cpf' => $cpf]);

            if ($stmt->rowCount ()) {
                echo '<span><p class="sucess">Conta criada com sucesso!</p></span>';
            } else {
                echo '<span>Erro ao criar a conta. Tente novamente mais tarde.</span>';
            }
        }
        if (isset($error)) {
            echo '<span>' . $error . '</span>';
        }
    }
    ?>


            <div class="titu"><p>Açougue Carne Quadrada</p></div>
            <form method="post">
            <div class="name"><input type="text" name="nome" placeholder="Nome" required></br></div>

            <div class="email"><input type="email" name="email" placeholder="E-mail" required></br></div>

            <div class="senha"><input type="password" name="senha" placeholder="Senha" required></br></div>

            <div class="estado"><input type="text" name="estado" placeholder="Estado" required></br></div>

            <div class="cidade"><input type="text" name="cidade" placeholder="Cidade" required></br></div>

            <div class="cpf"><input type="text" name="cpf" placeholder="CPF" required></br></div>

            <div class="back"><a href="index.html">Voltar</a></br></div>
            
            <div class="log"><a href="login.html">Logar</a></br></div>
            
            <button type="submit" name="submit" value="agendar">CADASTRAR</button>
            </form>
        </div>
    </section>

</div>

</body>
</html>