<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="cadastro.css" />
    <title>Login - Loja de Tênis</title>
  </head>
  <body>
    <div class="login-container">
      <h2>Login</h2>
      <form method = "post" action = "configcadastro.php" class="input">
        <input type="email" name="email" placeholder="E-mail" required />
        <input type="number" name="cpf" placeholder="cpf" required />
        <input type="password" name="senha" placeholder="Senha" required />
        <input type="password" name="senha" placeholder="confirmar senha" required />
        <button type="submit">Entrar</button>
      </form>
    </div>
  </body>
</html>
