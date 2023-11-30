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
</head>
<body>
    <h2>Adicionar Usuário</h2>
    <form action="adicionar.php" method="post">
        E-mail: <input type="email" name="email" required>
        Senha: <input type="password" name="senha" required>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>
