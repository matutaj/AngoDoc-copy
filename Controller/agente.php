<?php
include '../Config/Sql.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $localizacao= $_POST['localizacao'];
    $palavraPasse = $_POST['palavraPasse'];

    $stmt = $conn->prepare("INSERT INTO agente (nome, localizacao, palavraPasse) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $localizacao, $palavraPasse);
    if ($stmt->execute()) {
        $msgType="success";
        $msg="Cadastro efectuado";
    } 
    else {
        $msg="Ocorreu algum erro. Verifique as informações e tente novamente";
        $msgType="error";
    }

    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Resultado',
                text: '$msg',
                icon: '$msgType',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../ADMDashboard/agente.php';
                }
            });
        });
    </script>";
    $conn->close();
}
else {
    // Selecionar e exibir todos os registros da tabela bilhete
    $sql = "SELECT id_agente, nome,localizacao,palavraPasse FROM agente";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir dados de cada linha
        echo "<table>";
        echo "<tr><th>Número de agente</th><th>Nome</th><th>Localização</th><th>Password</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_agente"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["localizacao"] . "</td>";
            echo "<td>" . $row["palavraPasse"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 resultados";
    }

    $conn->close();
}
?>
