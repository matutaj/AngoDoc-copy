<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="style-cadastro.css">
    <link rel="icon" href="Imagens/logo.png">
    <script src="Script.js" defer></script>
    <title>Cadastro</title>
</head>

<body>
    <header>
        <nav>
            <a href="index.php">
                <p style="font-size: 30px; color: beige;">Ango<span style="color: rgb(248, 214, 129);">Doc</span>
                </p>
            </a>
            <ul>
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="index.php#selectBI">
                    <li>Documentos</li>
                </a>
                <a href="index.php#mapa">
                    <li>Agentes Certificados</li>
                </a>
            </ul>
        </nav>
        <div class="login-box">

            <form>
                <div class="user-box">
                    <input type="text" name="nome" required="">
                    <label>Nome do usuário</label>
                </div>
                <div class="user-box">
                    <input type="password" name="palavraPasse" required="">
                    <label>Palavra-passe</label>
                </div>
                <center>
                    <a href="../Controller.cadastrarAgente.php">
                        Entrar
                        <span></span>
                    </a>
                </center>
                  
            </form>
        </div>
</body>

</html>