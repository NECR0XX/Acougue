<?php
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Agendamento Médico</title>
</head>
<body>
<div class="container-formulario">
    <h1>Agendamento Médico</h1>
    
    <?php
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $porcao = $_POST['porcao'];
        $preco = $_POST['preco'];
        $tipo = $_POST['tipo'];

        $stmt = $pdo->prepare('SELECT COUNT(*)
        FROM agendamento WHERE nome = ?');
        $stmt->execute([$nome]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            $error = 'Já existe um agendamento para essa data e horário.';
        } else {
            
            $stmt = $pdo->prepare('INSERT INTO agendamento (nome, porcao, preco, tipo) VALUES (:nome, :porcao, :preco, :tipo)');
            $stmt->execute(['nome' => $nome, 'porcao' => $porcao, 'preco' => $preco, 'tipo' => $tipo]);

            if ($stmt->rowCount ()) {
                echo '<span>Compromisso agendado com sucesso!</span>';
            } else {
                echo '<span>Erro ao agendar o compromisso. Tente novamente mais tarde.</span>';
            }
        }
        if (isset($error)) {
            echo '<span>' . $error . '</span>';
        }
    }
    ?>

    <form method="post">

    <label for="nome">Nome:</label>
    <input type="text" name="nome" required></br>

    <label for="email">Tipo:</label>
    <input type="email" name="email" required></br>

    <label for="email">Porção:</label>
    <input type="text" name="telefone" required></br>

    <label for="preco">Preço:</label>
    <input type="text" name="preco" required></br>

    
    <div>
        <button type="submit" name="submit" value="agendar">AGENDAR</button>
        <button><a href="listar.php">Listar</a></button>
    </div>
    
</form>

</div>

</body>
</html>