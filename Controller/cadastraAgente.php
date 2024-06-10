<?php
include '../Config/Sql.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $localizacao = $_POST['localizacao'];
    $palavraPasse = $_POST['palavraPasse'];

    $stmt = $conn->prepare("INSERT INTO agente (nome, localizacao, palavraPasse) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $localizacao, $palavraPasse);
    if ($stmt->execute()) {
        $msgType = "success";
        $msg = "Cadastro efectuado";
    } else {
        $msg = "Ocorreu algum erro. Verifique as informações e tente novamente";
        $msgType = "error";
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

?> */
