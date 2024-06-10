<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Agente Certificado</title>
    <link rel="stylesheet" href="Style.css">
    <script src="../ADMDashboard/Script.js" defer></script>
</head>

<body>
    <div class="sidebar">
        <p style="font-size: 25px; color: beige; margin-left: 20px;">Ango<span
                style="color: rgb(248, 214, 129);">Doc</span></p>
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="contaADM.php">Conta</a></li>
            <li><a href="geralADM.php">Visão Geral</a></li>
            <li><a href="agente.php">Agentes Certificados</a></li>
            <li><a href="solicitacoesADM.php">Solicitações</a></li>
            <li><a href="notificacoes.php">Notificações</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Agentes Certificados</h1>
            <button id="logout">Sair</button>
        </header>

        <section id="settings" class="section">
            <h2>Gerenciar agentes certificados</h2>
            <p>Cadastre, edite ou elimine os agentes certificados.</p>
        </section>
        <section id="agents" class="section">
            <button id="add-agent-btn" onclick="show('agent-form-container')">Adicionar Agente</button>
            <br>
            <table id="agents-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Localização</th>
                        <th>Palavra-passe</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="agents-table-body">
                    <?php
                    //Conectar ao banco de dados
                    require_once "../Config/Sql.php";
                    $sql = "SELECT * FROM agente";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['id_agente'] . "</td>";
                            echo "<td>" . $row['nome'] . "</td>";
                            echo "<td>" . $row['localizacao'] . "</td>";
                            echo "<td>" . $row['palavraPasse'] . "</td>";
                            echo "<td style='display:flex; justify-content:space-around'> 
                                   <button style='margin:2px; background-color:rgb(247, 207, 8); color:black;'>Editar</button> 
                                   <button style='margin:2px; background-color:#f44336;'>Eliminar</button> 
                              </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>Nenhum agente cadastrado</td></tr>";
                    }
                    $stmt->close();
                    ?>
                </tbody>
            </table>

            <div id="agent-form-container" class="form-container" style="display: none;">
                <h3 id="agent-form-title">Adicionar Agente</h3>
                <form id="agent-form" action="../Controller/cadastraAgente.php" method="post">
                    <input type="hidden" id="agent-id" name="id_agente">

                    <label for="agent-name">Nome:</label>
                    <input type="text" id="agent-name" name="nome" required>

                    <label for="agent-location">Localização:</label>
                    <input type="text" id="agent-location" name="localizacao" required>

                    <label for="agent-password">Palavra-passe:</label>
                    <input type="password" id="agent-password" name="palavraPasse" required>

                    <button type="submit">Salvar</button>
                    <button type="button" onclick="hide('agent-form-container')">Cancelar</button>
                </form>
            </div>
        </section>
    </div>
</body>

</html>