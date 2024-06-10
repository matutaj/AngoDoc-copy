<?php
require_once "config/Sql.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $senha = $_POST['palavraPasse'];

    $sql = "SELECT id_bi, palavraPasse FROM adm WHERE nome = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nome);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($senha == $row['palavraPasse']) {
            // Senha correta, iniciar a sessão
            session_start();
            $_SESSION['id_bi'] = $row['id_bi'];
            $_SESSION['loggedin'] = true;
            header("Location: ADMDashboard/contaADM.php");
            exit;
        } else {
            // Senha incorreta, redirecionar de volta para a página de login com mensagem de erro
            echo "senha errada";
            header("Location: cadastro.php");
            exit;
        }
    } else {
        // Nome de usuário não encontrado, redirecionar de volta para a página de login com mensagem de erro
        header("Location: cadastro.php");
        exit;
    }
}
?>

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

            <form action="cadastro.php" method="post">
                <div class="user-box">
                    <input type="text" name="nome" required="">
                    <label>Nome do usuário</label>
                </div>
                <div class="user-box">
                    <input type="password" name="palavraPasse" required="">
                    <label>Palavra-passe</label>
                </div>
                <center>
                    <button type="submit">
                        <p>Entrar</p>
                        <span></span>
                    </button>
                </center>
            </form>
        </div>
</body>

</html>