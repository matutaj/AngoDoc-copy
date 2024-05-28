// js/script.js
document.getElementById('logout').addEventListener('click', function() {
    Swal.fire({
        icon:'info',
        title:'Logout efetuado',
        text:'Você saiu do dashboard',
    });
    window.location.href='../cadastro.php';
});