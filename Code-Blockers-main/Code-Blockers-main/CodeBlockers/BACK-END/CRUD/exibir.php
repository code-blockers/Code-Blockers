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
    <link rel="stylesheet" href="exibir.css">
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

    <div class="user-list">
      <h2>Lista de Usuários</h2>
      <a href="adicionar.php">Adicionar Novo Usuário</a>
      <br>
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
