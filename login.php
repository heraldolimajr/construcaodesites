<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="logo">
            <img src="https://ifsertaope.edu.br/wp-content/uploads/2023/08/logoifsertaope.png"/>
        </div>
        <div class="menu">
            <ul>
                <li>Início</li>
                <li>Cadastre-se</li>
            </ul>
        </div>        
    </header>
    <div class="login">
        <h3>Login</h3>
        <form action="processa.php" method="POST">
            <span>Usuário:</span>    
            <input type="text">
            <span>Senha:</span>    
            <input type="password">
            <input type="submit" value="Entrar"/>
        </form>
    </div>
    <footer>
        &copy; Desenvolvido por Heraldo - O melhor de todos!
    </footer>

</body>
</html>