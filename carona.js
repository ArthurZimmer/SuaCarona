document.addEventListener('DOMContentLoaded', function() {
    // Capturar clique no botão de adicionar carona
    document.querySelectorAll('.add-carona-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const dia = this.getAttribute('data-dia');
            const periodo = this.getAttribute('data-periodo');
            
            document.getElementById('diaSelecionado').value = dia;
            document.getElementById('periodoSelecionado').value = periodo;
        });
    });

    // Submissão do formulário de carona
    document.getElementById('formAdicionarCarona').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Lógica de envio via AJAX para cadastrar carona no banco
        fetch('cadastrar_carona.php', {
            method: 'POST',
            body: new FormData(this)
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                // Atualizar a view, mostrar caronas disponíveis
                alert('Carona cadastrada com sucesso!');
            }
        });
    });
});