function show(eventId) {
    document.getElementById(eventId).style.display = 'flex';
}

function hide(eventId) {
    document.getElementById(eventId).style.display = 'none';
}

document.getElementById('logout').addEventListener('click', function() {
    Swal.fire({
        icon: 'info',
        title: 'Logout efetuado',
        text: 'Você saiu do dashboard',
    });
    window.location.href = '../cadastro.php';
});
