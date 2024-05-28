<?php
include '../Config/Sql.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $dataNasc = $_POST['dataNasc'];
    $genero = $_POST['genero'];
    $morada = $_POST['morada'];
    $naturalidade = $_POST['naturalidade'];
    $cedula = $_POST['cedula'];
    $nomePai = $_POST['nomePai'];
    $nomeMae = $_POST['nomeMae'];

    $stmt = $conn->prepare("INSERT INTO bilhete (id_soli, cedula, nome, dataNasc, morada, genero, naturalidade, nomePai, nomeMae) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iisssssss", $id_soli, $cedula, $nome, $dataNasc, $morada, $genero, $naturalidade, $nomePai, $nomeMae);

    if ($stmt->execute()) {
        echo "Novo registro criado com sucesso";
        header("../index.php");
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
