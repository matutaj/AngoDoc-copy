<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens/logo.png">
    <title>Agente Dashboard- Solicitações</title>
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
            <h1>Solicitações</h1>
            <button id="logout">Sair</button>
        </header>

        <section id="agents" class="section">
            <h2>Gerenciamento de Solicitações</h2>
        
            <table id="agents-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>BI</th>
                        <th>Data Agentamento</th>
                        <th>Nome do Agente Certificado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Linhas de agentes serão inseridas aqui dinamicamente -->
                </tbody>
            </table>
            
            <!-- Formulário para Adicionar/Editar Agente -->
            
        </section>
    </div>

    <script src="Script.js"></script>
</body>
</html>
