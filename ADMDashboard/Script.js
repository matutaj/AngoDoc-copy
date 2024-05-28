// js/script.js
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>;
import Swal from "sweetalert2";
function show(event){
    document.getElementById(event).style.display='flex';
}
function hide(event){
    document.getElementById(event).style.display='none';
}
document.getElementById('logout').addEventListener('click', function() {
    Swal.fire({
        icon:'info',
        title:'Logout efetuado',
        text:'Você saiu do dashboard',
    });
    window.location.href='../cadastro.php';
});
function populateAgentsTable() {
    var agentsTableBody = document.getElementById('agents-table-body');
    agentsTableBody.innerHTML = '';

    if (typeof agentsData !== 'undefined' && agentsData.length > 0) {
        agentsData.forEach(function(agent) {
            var row = document.createElement('tr');
            row.innerHTML = '<td>' + agent.id_agente + '</td>' +
                            '<td>' + agent.nome + '</td>' +
                            '<td>' + agent.localizacao + '</td>' +
                            '<td><button onclick="editAgent(' + agent.id_agente + ')">Editar</button> ' +
                            '<button onclick="deleteAgent(' + agent.id_agente + ')">Excluir</button></td>';
            agentsTableBody.appendChild(row);
        });
    } else {
        var row = document.createElement('tr');
        row.innerHTML = '<td colspan="4">Nenhum agente encontrado</td>';
        agentsTableBody.appendChild(row);
    }
}

// Chama a função para preencher a tabela quando a página for carregada
document.addEventListener('DOMContentLoaded', function() {
    populateAgentsTable();
});
