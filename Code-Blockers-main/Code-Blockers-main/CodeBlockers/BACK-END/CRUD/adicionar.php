<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = ($_POST["senha"]); // Hash da senha

    $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        header("Location: exibir.php");
        exit();
    } else {
        echo "Erro ao adicionar usuário: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Usuário</title>
    <link rel="stylesheet" href="adicionar.css">
</head>
<body>

    <nav role="navigation" class="primary-navigation">
      <ul>
        <li><a href="cadastro.php">CADASTRAR</a></li>
        <li><a href="login.php">ENTRAR</a></li>
        <li><a href="home.php">HOME</a></li>
        <li><a href="#">NIKE &dtrif;</a>
          <ul class="dropdown">
            <li><a href="jordanprodutos.php">AIR JORDAN</a></li>
            <li><a href="airforce.php">AIR FORCE</a></li>
            <li><a href="infantil.php">INFANTIL</a></li>
            <li><a href="maisvendidos.php">MAIS VENDIDOS</a></li>
          </ul>
        </li>
        <li><a href="carrinho.php">CARRINHO</a></li>
       
      </ul>
    
    </nav>

    <div class="add-user">
      <h2>Adicionar Usuário</h2>
      <form action="adicionar.php" method="post">
          E-mail: <input type="email" name="email" required>
          Senha: <input type="password" name="senha" required>
          <br> 
          <input type="submit" value="Adicionar">
      </form>
    </div>

    <footer>
        <div class="footer">

        <div class="row">
        <ul>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        </ul>
        </div>

        <div class="row">
        7SSO QUE É DAORA Copyright © 2023 - All rights reserved || Designed By: Roccio
        </div>
        </div>
    </footer>

</body>
</html>
