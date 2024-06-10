<?php
include '../Config/Sql.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $palavraPasse = $_POST['palavraPasse'];

    $stmt1 = $conn->prepare("SELECT nome FROM  agente");

    if ($stmt->execute()) {
        echo "<script>alert('Novo registo criado com sucesso'); </script>";
        header("../index.php");
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>