<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard- Conta</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

    <div class="sidebar">
        <p style="font-size: 25px; color: beige; margin-left: 20px;">Ango<span style="color: rgb(248, 214, 129);">Doc</span>

        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="contaADM.php">Conta</a></li>
            <li><a href="geralADM.php">Visão Geral</a></li>
            <li><a href="agente.php">Agentes Certificados</a></li>
            <li><a href="bilhetesADM.php">Bilhetes</a></li>
            <li><a href="passaportesADM.php">Passaportes</a></li>
            <li><a href="certidoesADM.php">Certidões</a></li>
            <li><a href="notificacoes.php">Notificações</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Bem-vindo, Admin</h1>
            <button id="logout">Sair</button>
        </header>

        <section id="overview" class="section">
            <div class="container">
                <div id="profile-info">
                    <div class="info-group">
                        <label for="profile-pic">Imagem de Perfil:</label><br>
                        <img id="profile-pic" src="../Imagens/IMG-20231202-WA0076.jpg" alt="Perfil do Agente Certificado">
                    </div>
                    <div class="info-group">
                        <label for="name">Nome:</label>
                        <span id="name">Ângelo Kamussumbo</span>
                    </div>
                    <div class="info-group">
                        <label for="location">Localização:</label>
                        <span id="location">Luanda, Angola</span>
                    </div>
                    <div class="info-group">
                        <label for="year">Ano de Existência:</label>
                        <span id="year">2012</span>
                    </div>
                    
                    <button id="edit-btn">Editar</button>
                </div> 
            </div>
    
            <div id="edit-form" style="display: none;">
                <h2>Editar Perfil</h2>
                <form id="profile-edit-form">
                    <div class="form-group">
                        <label for="edit-name">Nome:</label>
                        <input type="text" id="edit-name" name="edit-name">
                    </div><br>
                    <div class="form-group">
                        <label for="edit-location">Localização:</label>
                        <input type="text" id="edit-location" name="edit-location">
                    </div><br>
                    <div class="form-group">
                        <label for="edit-year">Ano de Existência:</label>
                        <input type="text" id="edit-year" name="edit-year">
                    </div><br>
                    <div class="form-group">
                        <label for="edit-profile-pic">Imagem de Perfil:</label>
                        <input type="file" id="edit-profile-pic" accept="image/*">
                        <img id="edit-preview" src="#" alt="Preview" style="display: none; max-width: 100px;">
                    </div>
                    <button type="submit">Salvar</button>
                </form>
            </div>
    
        </div>
    
        </section>

    </div>

    <script src="Script.js"></script>
</body>
</html>
