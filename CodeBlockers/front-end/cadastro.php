
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/cadastro.css">
    <link rel="shortcut icon" href="Imagens/code_blockers_favicon.ico" type="image/x-icon"> 
    <title>Cadastro - Code Blockers</title>
</head>
<body>
    <img src="Imagens/code_blockers_logo_header.png" alt="">
    <div class="signup-container">
        <p>Cria sua conta!</p>
        <form method = "post" action = "configcadastro.php" class="input">
            <input type="text" placeholder="Nome" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Senha" required>
            <input type="password" placeholder="Confirme a senha" required>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
