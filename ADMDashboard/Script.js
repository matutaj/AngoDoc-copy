// js/script.js
/*
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>;
document.getElementById('logout').addEventListener('click', function() {
    alert('Você saiu do sistema.');
    // Adicione a lógica de logout aqui
});

// Adicionar evento para mostrar formulário de adição de agente
document.getElementById('add-agent-btn').addEventListener('click', function() {
    document.getElementById('agent-form-container').style.display = 'flex';
});

// Adicionar evento para cancelar adição de agente
document.getElementById('cancel-agent-btn').addEventListener('click', function() {
    document.getElementById('agent-form-container').style.display = 'none';
}); 
*/
function show(event){
    document.getElementById(event).style.display='flex';
}
function hide(event){
    document.getElementById(event).style.display='none';
}