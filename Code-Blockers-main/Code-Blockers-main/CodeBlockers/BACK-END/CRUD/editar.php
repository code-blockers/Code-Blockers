<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row["email"];
        $senha = $row["senha"];
    } else {
        echo "Usuário não encontrado";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $email = $_POST["email"];
    $senha =($_POST["senha"]); // Hash da senha

    $sql = "UPDATE usuarios SET email='$email', senha='$senha' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: exibir.php");
        exit();
    } else {
        echo "Erro ao atualizar usuário: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="editar.css">
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

    <div class="edit-user"> 
        <h2>Editar Usuário</h2>
        <form action="editar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            E-mail: <input type="email" name="email" value="<?php echo $email; ?>" required>
            Senha: <input type="password" name="senha" value="<?php echo $senha; ?>" required>
            <br>
            <input type="submit" value="Salvar Alterações">
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
