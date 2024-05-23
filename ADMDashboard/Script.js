// js/script.js
document.getElementById('logout').addEventListener('click', function() {
    alert('Você saiu do sistema.');
    // Adicione a lógica de logout aqui
});

// Adicionar evento para mostrar formulário de adição de agente
document.getElementById('add-agent-btn').addEventListener('click', function() {
    document.getElementById('agent-form-container').style.display = 'block';
    document.getElementById('agent-form-title').innerText = 'Adicionar Agente';
    document.getElementById('agent-form').reset();
    document.getElementById('agent-id').value = '';
});

// Adicionar evento para cancelar adição de agente
document.getElementById('cancel-agent-btn').addEventListener('click', function() {
    document.getElementById('agent-form-container').style.display = 'none';
});

// Adicionar evento para enviar formulário de agente
document.getElementById('agent-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const agentId = document.getElementById('agent-id').value;
    const agentName = document.getElementById('agent-name').value;
    const agentLocation = document.getElementById('agent-location').value;
    const agentPassword = document.getElementById('agent-password').value;

    if (agentId) {
        updateAgent(agentId, agentName, agentLocation, agentPassword);
    } else {
        addAgent(agentName, agentLocation, agentPassword);
    }

    document.getElementById('agent-form-container').style.display = 'none';
    document.getElementById('agent-form').reset();
    document.getElementById('agent-id').value = '';
});

// Função para adicionar um novo agente
function addAgent(name, location, password) {
    const agentTable = document.getElementById('agents-table').getElementsByTagName('tbody')[0];
    const newRow = agentTable.insertRow();
    newRow.innerHTML = `
        <td>1</td>
        <td>${name}</td>
        <td>${location}</td>
        <td>
            <button onclick="editAgent(this)">Editar</button>
            <button onclick="deleteAgent(this)">Excluir</button>
        </td>
    `;
}

// Função para editar um agente existente
function editAgent(button) {
    const row = button.parentNode.parentNode;
    const agentId = row.cells[0].innerText;
    const agentName = row.cells[1].innerText;
    const agentLocation = row.cells[2].innerText;

    document.getElementById('agent-id').value = agentId;
    document.getElementById('agent-name').value = agentName;
    document.getElementById('agent-location').value = agentLocation;
    document.getElementById('agent-password').value = '';

    document.getElementById('agent-form-title').innerText = 'Editar Agente';
    document.getElementById('agent-form-container').style.display = 'block';
}

// Função para atualizar um agente existente
function updateAgent(id, name, location, password) {
    const agentTable = document.getElementById('agents-table').getElementsByTagName('tbody')[0];
    for (let i = 0; i < agentTable.rows.length; i++) {
        if (agentTable.rows[i].cells[0].innerText === id) {
            agentTable.rows[i].cells[1].innerText = name;
            agentTable.rows[i].cells[2].innerText = location;
            break;
        }
    }
}

// Função para excluir um agente
function deleteAgent(button) {
    const row = button.parentNode.parentNode;
    row.remove();
}
/*----------------Revisão Geral-------------*/
// Dados de exemplo para preencher a tabela (substitua com seus próprios dados)
const data = [
    { usuario: 'João', certidao: '123456', agente: 'Maria', estado: 'SP', data: '2024-05-01' },
    { usuario: 'Ana', certidao: '654321', agente: 'Pedro', estado: 'RJ', data: '2024-05-15' },
    { usuario: 'Carlos', certidao: '987654', agente: 'Mariana', estado: 'MG', data: '2024-05-30' }
];

// Função para preencher a tabela com os dados
function populateTable() {
    const tableBody = document.querySelector('#dashboard-table tbody');
    data.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.usuario}</td>
            <td>${item.certidao}</td>
            <td>${item.agente}</td>
            <td>${item.estado}</td>
            <td>${item.data}</td>
        `;
        tableBody.appendChild(row);
    });
}

// Chama a função para preencher a tabela quando a página carrega
window.addEventListener('load', populateTable);
