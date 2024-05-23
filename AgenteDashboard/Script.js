// js/script.js
document.getElementById('logout').addEventListener('click', function() {
    alert('Você saiu do sistema.');
    // Adicione a lógica de logout aqui
});


document.getElementById('edit-btn').addEventListener('click', function() {
    var profileInfo = document.getElementById('profile-info');
    var editForm = document.getElementById('edit-form');

    profileInfo.style.display = 'none';
    editForm.style.display = 'block';

    // Preencher campos do formulário de edição com as informações atuais
    document.getElementById('edit-name').value = document.getElementById('name').textContent;
    document.getElementById('edit-location').value = document.getElementById('location').textContent;
    document.getElementById('edit-year').value = document.getElementById('year').textContent;
});

document.getElementById('profile-edit-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio do formulário

    // Atualizar as informações do perfil com os novos valores
    document.getElementById('name').textContent = document.getElementById('edit-name').value;
    document.getElementById('location').textContent = document.getElementById('edit-location').value;
    document.getElementById('year').textContent = document.getElementById('edit-year').value;

    // Mostrar novamente o perfil e ocultar o formulário de edição
    document.getElementById('profile-info').style.display = 'flex'; // Mostrar o perfil como flexbox novamente
    document.getElementById('edit-form').style.display = 'none';


    // Exibir mensagem de confirmação
    alert("Perfil atualizado com sucesso!");
});