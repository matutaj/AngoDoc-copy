<?php
include '../Config/Sql.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $dataNasc = $_POST['dataNasc'];
    $dataFalecimento=$_POST['dataFalecimento'];
    $genero = $_POST['genero'];
    $naturalidade = $_POST['naturalidade'];
    $cedula = $_POST['cedula'];
    $cemiterio = $_POST['cemiterio'];
    $hospital = $_POST['naturalidade'];

    $stmt = $conn->prepare("INSERT INTO certidao (cedula, nome, dataNasc, dataFalecimento, genero, Naturalidade, hospital,cemiterio) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssss", $cedula, $nome, $dataNasc, $dataFalecimento, $genero, $naturalidade, $hospital,$cemiterio);

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
