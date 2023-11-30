<?php
include 'conexao.php';

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Lista de Usuários</h2>
    <a href="adicionar.php">Adicionar Novo Usuário</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>E-mail</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['senha']}</td>
                        <td>
                            <a href='editar.php?id={$row['id']}'>Editar</a>
                            <a href='excluir.php?id={$row['id']}' onclick='return confirm(\"Tem certeza que deseja excluir este usuário?\")'>Excluir</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum usuário encontrado</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
