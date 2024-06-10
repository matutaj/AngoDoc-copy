<?php
require_once "config/Sql.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $senha = $_POST['palavraPasse'];

    $sql = "SELECT id_bi, palavraPasse FROM adm WHERE nome = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nome);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($senha == $row['palavraPasse']) {
            // Senha correta, iniciar a sessão
            session_start();
            $_SESSION['id_bi'] = $row['id_bi'];
            $_SESSION['loggedin'] = true;
            header("Location: ADMDashboard/contaADM.php");
            exit;
        } else {
            // Senha incorreta, redirecionar de volta para a página de login com mensagem de erro
            echo "
            <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\">
            Swal.fire({
                icon: 'error',
                title: 'Erro de Login',
                text: 'Verifique a palavra Passe'
            }).then(function() {
                window.location = 'cadastro.php'; // Redirecione para a página de login
            });
            </script>";
            exit;
        }
    } else {
        // Nome de usuário não encontrado, redirecionar de volta para a página de login com mensagem de erro
        echo "
        <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Erro de Login',
            text: 'Usuário não encontrado'
        }).then(function() {
            window.location = 'cadastro.php'; // Redirecione para a página de login
        });
        </script>";
        exit;
    }
}
?>