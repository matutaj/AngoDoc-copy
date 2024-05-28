<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens/logo.png">
    <title>Agente Dashboard -Visão Geral</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="sidebar">
        <p style="font-size: 25px; color: beige; margin-left: 20px;">Ango<span style="color: rgb(248, 214, 129);">Doc</span>
            <h2>Agente Dashboard</h2>
        <ul>
            <li><a href="conta.php">Conta</a></li>
            <li><a href="geral.php">Visão Geral</a></li>
            <li><a href="solicitacoes.php">Solicitações</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Visão Geral</h1>
            <button id="logout">Sair</button>
        </header>

        <h1>Revisão Geral</h1>
        <table id="dashboard-table">
            <thead>
                <tr>
                    <th>Nome do Usuário</th>
                    <th>Número da Certidão</th>
                    <th>Agente</th>
                    <th>Estado</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <!-- Linhas de dados serão inseridas aqui dinamicamente -->
            </tbody>
        </table>
    </div>

    <script src="Script.js"></script>
</body>
</html>
