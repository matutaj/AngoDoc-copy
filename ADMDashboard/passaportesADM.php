<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Solicitações</title>
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
            <h1>Solicitações</h1>
            <button id="logout">Sair</button>
        </header>

        <section id="agents" class="section">
            <h2>Gerenciamento de Passaportes</h2>
        
            <table id="agents-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Nº da cédula</th>
                        <th>Data de Nascimento</th>
                        <th>Género</th>
                        <th>Naturalidade</th>
                        <th>Morada</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="agents-table-body">
                    <?php
                    //Conectar ao banco de dados
                    require_once "../Config/Sql.php";
                    $sql = "SELECT nome,cedula,dataNasc,genero,naturalidade,morada FROM passaporte";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['nome'] . "</td>";
                            echo "<td>" . $row['cedula'] . "</td>";
                            echo "<td>" . $row['dataNasc'] . "</td>";
                            echo "<td>" . $row['genero'] . "</td>";
                            echo "<td>" . $row['naturalidade'] . "</td>";
                            echo "<td>" . $row['morada'] . "</td>";
                            echo "<td style='display:flex; justify-content:space-around'> 
                                   <button style='margin:2px; background-color:rgb(247, 207, 8); color:black;'>Validar</button> 
                                   <button style='margin:2px; background-color:#f44336;'>Recusar</button> 
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
        </section>
    </div>

    <script src="Script.js"></script>
</body>
</html>
