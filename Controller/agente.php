<?php
include '../Config/Sql.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $localizacao= $_POST['localizacao'];
    $palavraPasse = $_POST['palavraPasse'];

    $stmt = $conn->prepare("INSERT INTO agente (nome, localizacao, palavraPasse) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $clocalizacao, $palavraPasse);
    if ($stmt->execute()) {
        $msgType="success";
    } 
    else {
        echo "Erro: " . $stmt->error;
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
                    window.location.href = '../ADMDashboard/.php';
                }
            });
        });
    </script>";
    exit();
    $stmt->close();
    $conn->close();
}
?>
