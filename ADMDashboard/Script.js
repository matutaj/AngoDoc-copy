const { default: Swal } = require("sweetalert2");
src = 'https://cdn.jsdelivr.net/npm/sweetalert2@11';
function showModal() {
    document.getElementById('agentModal').style.display = "block";
}

function closeModal() {
    document.getElementById('agentModal').style.display = "none";
}
function leave() {
    Swal.fire({
        title: 'Sair do perfil?',
        text: "Deseja sair do perfil?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, sair',
        cancelButtonText: 'Não'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../index.php';
        }
    });
}