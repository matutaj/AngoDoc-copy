<?php
include '../Config/Sql.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['texto'];

    $stmt = $conn->prepare("INSERT INTO mensagem (texto) VALUES (?)");
    $stmt->bind_param("s", $texto);

    if ($stmt->execute()) {
        echo "Mensagem enviada";
        echo"<script>window.location.href='index.ph'</script>";
        header("location: index.php");
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
