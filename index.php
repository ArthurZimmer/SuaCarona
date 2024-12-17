<?php
include_once "sessao.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Início - SuaCarona</title>
    
    <?php
    include_once "header.php";
    ?>

    <!-- Adicionar CSS personalizado para caronas -->
    <style>
        .carona-disponivel {
            display: flex;
            flex-direction: column;
            align-items: start;
            padding: 8px 12px;
            margin-bottom: 8px;
            border-radius: 6px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .carona-disponivel:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            background-color: #00B98E;
        }

        .carona-disponivel:hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
        }

        /* Estilos para períodos do calendário de caronas */
        .card-body > div {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        /* Estilo específico para Manhã */
        .card-body > div:nth-child(1) {
            background-color: rgba(0, 185, 142, 0.1); /* Tom suave de verde primário */
            border-left: 4px solid #00B98E;
        }

        /* Estilo específico para Tarde */
        .card-body > div:nth-child(2) {
            background-color: rgba(255, 105, 34, 0.1); /* Tom suave de laranja secundário */
            border-left: 4px solid #FF6922;
        }

        /* Estilo específico para Noite */
        .card-body > div:nth-child(3) {
            background-color: rgba(14, 46, 80, 0.1); /* Tom suave de azul escuro */
            border-left: 4px solid #0E2E50;
        }

        /* Hover states for periods with more distinct colors */
        .card-body > div:nth-child(1):hover {
            background-color: rgba(0, 185, 142, 0.2); /* Enhanced green */
            border-left-color: #00a876;
            box-shadow: 0 4px 6px rgba(0, 185, 142, 0.1);
        }

        .card-body > div:nth-child(2):hover {
            background-color: rgba(255, 105, 34, 0.2); /* Enhanced orange */
            border-left-color: #ff4500;
            box-shadow: 0 4px 6px rgba(255, 105, 34, 0.1);
        }

        .card-body > div:nth-child(3):hover {
            background-color: rgba(14, 46, 80, 0.2); /* Enhanced dark blue */
            border-left-color: #1a5f7a;
            box-shadow: 0 4px 6px rgba(14, 46, 80, 0.1);
        }

        /* Título dos períodos com estilo */
        .card-body h6 {
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Botão de adicionar carona com transição suave */
        .add-carona-btn {
            margin-top: 10px;
            transition: all 0.3s ease;
            opacity: 0.7;
        }

        .add-carona-btn:hover {
            opacity: 1;
            transform: scale(1.05);
        }

        .add-carona-btn {
            position: relative;
        }

        .notification-badge {
            position: absolute;
            top: 50%; /* Center vertically */
            right: 10px; /* Move slightly away from the right edge */
            transform: translateY(100%); /* Ensure exact vertical centering */
            margin-right: 20px;
            padding: 4px 6px;
            font-size: 0.7rem;
            border-radius: 50%;
        }

        .navbar .btn-primary.navbar-exit-btn {
            transform: translateY(50%);
            padding-top: 6px;
            padding-bottom: 6px;
            height: 36px;
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container-l bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/logo-projeto-2 (3).png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">SuaCarona</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Início</a>
                        <a href="sobreLogado.php" class="nav-item nav-link">Sobre nós</a>
                        <a href="faleconoscologado.html" class="nav-item nav-link">Fale conosco</a>
                        <a href="#" class="btn btn-primary px-3 d-none d-lg-flex align-items-center navbar-exit-btn" data-bs-toggle="modal" data-bs-target="#sairModal">Sair</a>            </nav>
        </div>
        
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0" style="margin-top: 50px;">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-3 animated fadeIn mb-4">Qual vai ser a<span class="text-primary"> SuaCarona</span>?</h1>
                    <a href="#" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Me matricular</a>
                </div>
                <div class="col-md-6 animated fadeIn" style="height: 700px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27751.745591241277!2d-51.164140200000006!3d-29.6046107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95194546d6bcc2c7%3A0x44ee55d9e5d4b98e!2sIvoti%2C%20RS%2C%2093900-000!5e0!3m2!1spt-BR!2sbr!4v1724354710349!5m2!1spt-BR!2sbr" width="760" height="690" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Rotina Semanal Start -->
        <div class="container-xxl py-5">
            <div class="container" id="rotina-semanal">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 750px;">
                    <h1 class="mb-2" style = "margin-top: 100px;">Rotina Semanal de Caronas</h1>
                </div>
                <div class="row g-4" id="rotinaSemanal">
                    <?php 
                    $diasSemana = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
                    $periodos = ['Manhã', 'Tarde', 'Noite'];

                    foreach ($diasSemana as $dia) {
                        echo "<div class='col-lg-2 col-sm-6 wow fadeInUp' data-wow-delay='0.1s'>";
                        echo "<div class='card h-100'>";
                        echo "<div class='card-header bg-primary text-white text-center'>{$dia}</div>";
                        echo "<div class='card-body d-flex flex-column'>";

                        foreach ($periodos as $periodo) {
                            echo "<div class='mb-3'>";
                            echo "<h6 class='text-center'>{$periodo}</h6>";
                            
                            // Container for existing caronas
                            echo "<div id='caronas-{$dia}-{$periodo}' class='mb-2'>";
                            echo "</div>";
                            
                            // Add carona button
                            echo "<button 
                                class='btn btn-outline-primary w-100 add-carona-btn' 
                                data-bs-toggle='modal' 
                                data-bs-target='#adicionarCaronaModal'
                                data-dia='{$dia}' 
                                data-periodo='{$periodo}'
                            >
                                <i class='fa-regular fa-square-plus me-2'></i></button>";
                            
                            echo "</div>";
                        }
                        
                        echo "</div>"; // card-body
                        echo "</div>"; // card
                        echo "</div>"; // col
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Rotina Semanal End -->

        <!-- Modal Adicionar Carona -->
        <div class="modal fade" id="adicionarCaronaModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Adicionar Carona</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formAdicionarCarona">
                            <input type="hidden" id="diaSelecionado" name="dia">
                            <input type="hidden" id="periodoSelecionado" name="periodo">
                            
                            <div class="mb-3">
                                <label>Local de Partida</label>
                                <select class="form-select" name="cidade" required>
                                    <option value="Ivoti">Ivoti</option>
                                    <option value="Dois Irmãos">Dois Irmãos</option>
                                    <option value="Estância Velha">Estância Velha</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label>Hora</label>
                                <input type="time" class="form-control" name="hora" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Cadastrar Carona</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Detalhes Carona -->
        <div class="modal fade" id="detalhesCaronaModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detalhes da Carona</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body" id="detalhesCaronaCorpo">
                        <!-- Conteúdo dinâmico será inserido aqui -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Editar Carona -->
        <div class="modal fade" id="editarCaronaModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Carona</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formEditarCarona">
                            <input type="hidden" name="caronaId">
                            
                            <div class="mb-3">
                                <label>Dia</label>
                                <select class="form-select" name="dia" required>
                                    <option value="Segunda">Segunda</option>
                                    <option value="Terça">Terça</option>
                                    <option value="Quarta">Quarta</option>
                                    <option value="Quinta">Quinta</option>
                                    <option value="Sexta">Sexta</option>
                                    <option value="Sábado">Sábado</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label>Período</label>
                                <select class="form-select" name="periodo" required>
                                    <option value="Manhã">Manhã</option>
                                    <option value="Tarde">Tarde</option>
                                    <option value="Noite">Noite</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label>Local de Partida</label>
                                <select class="form-select" name="cidade" required>
                                    <option value="Ivoti">Ivoti</option>
                                    <option value="Dois Irmãos">Dois Irmãos</option>
                                    <option value="Estância Velha">Estância Velha</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label>Hora</label>
                                <input type="time" class="form-control" name="hora" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Atualizar Carona</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Confirmar Saída -->
        <div class="modal fade" id="sairModal" tabindex="-1" style="z-index: 10000;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirmar Saída</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja sair da sua conta?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="logout.php" class="btn btn-primary">Confirmar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <?php 
            include_once "footer.php";
        ?>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Custom Carona Script -->
    <script>

        document.addEventListener("DOMContentLoaded", function () {
            const matricularButton = document.querySelector(".btn-primary[href='#']");
            matricularButton.addEventListener("click", function (event) {
                event.preventDefault(); // Evita comportamento padrão do link
                const target = document.getElementById("rotina-semanal");
                if (target) {
                    target.scrollIntoView({ behavior: "smooth" });
                }
            });
        });

        function configurarNotificacoesPeriodicas() {
            // Verificar solicitações a cada 30 segundos
            setInterval(verificarSolicitacoesPendentes, 500);
        }

        function verificarSolicitacoesPendentes() {
            fetch('buscar_solicitacoes_pendentes.php')
            .then(response => response.json())
            .then(solicitacoes => {
                // Remove existing badges
                document.querySelectorAll('.notification-badge').forEach(badge => badge.remove());

                solicitacoes.forEach(solicitacao => {
                    const container = document.getElementById(`caronas-${solicitacao.DIA}-${solicitacao.PERIODO}`);
                    if (container) {
                        const caronaButtons = container.querySelectorAll('.carona-disponivel');
                        
                        caronaButtons.forEach(button => {
                            // Check if this button belongs to the user with pending solicitations
                            if (button.getAttribute('data-carona-usuario-id') == solicitacao.idUSUARIO) {
                                const badge = document.createElement('span');
                                badge.classList.add('notification-badge', 'badge', 'bg-danger', 'position-absolute', 'top-0', 'end-0');
                                badge.textContent = solicitacao.TOTAL_SOLICITACOES;
                                
                                // Ensure button has relative positioning
                                button.style.position = 'relative';
                                button.appendChild(badge);
                            }
                        });
                    }
                });
            })
            .catch(error => console.error('Erro ao verificar solicitações:', error));
        }

        function carregarCaronas() {
            fetch('buscar_caronas.php')
            .then(response => response.json())
            .then(caronas => {
                const diasSemana = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
                const periodos = ['Manhã', 'Tarde', 'Noite'];

                // Limpar caronas existentes
                diasSemana.forEach(dia => {
                    periodos.forEach(periodo => {
                        const container = document.getElementById(`caronas-${dia}-${periodo}`);
                        container.innerHTML = '';
                    });
                });

                // Popular caronas
                caronas.forEach(carona => {
                    const container = document.getElementById(`caronas-${carona.DIA}-${carona.PERIODO}`);
                    if (container) {
                        const caronaEl = document.createElement('button');
                        caronaEl.classList.add(
                            'btn', 
                            'btn-outline-success', 
                            'w-100', 
                            'mb-2', 
                            'carona-disponivel'
                        );
                        caronaEl.innerHTML = `
                            <span class="d-block fw-bold">${carona.NOME}</span>
                            <small class="text-muted">${carona.HORA}</small>
                        `;
                        caronaEl.setAttribute('data-carona-id', carona.idCARONA);
                        caronaEl.setAttribute('data-carona-usuario-id', carona.idUSUARIO);
                        caronaEl.addEventListener('click', () => mostrarDetalhesCarona(carona));
                        container.appendChild(caronaEl);
                    }
                });
            });
            verificarSolicitacoesPendentes();
        }

    // Adicione estas funções ao seu script
    function aprovarSolicitacao(solicitacaoId) {
            fetch('aprovar_solicitacao.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `solicitacaoId=${solicitacaoId}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Solicitação aprovada com sucesso!');
                    window.location.href = 'index.php';
                    // Recarregar detalhes da carona
                    carregarCaronas();
                } else {
                    alert('Erro: ' + data.message);
                }
            });
            verificarSolicitacoesPendentes()
        }

        function rejeitarSolicitacao(solicitacaoId) {
            fetch('rejeitar_solicitacao.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `solicitacaoId=${solicitacaoId}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Solicitação rejeitada com sucesso!');
                    window.location.href = 'index.php';

                    // Recarregar detalhes da carona
                    carregarCaronas();
                } else {
                    alert('Erro: ' + data.message);
                }
            });
            verificarSolicitacoesPendentes()
        }

    function solicitarCarona(caronaId) {
            console.log('Solicitando carona:', caronaId); 
            fetch('solicitar_carona.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `caronaId=${caronaId}`
            })
            .then(response => {
                // Log do status da resposta
                console.log('Status da resposta:', response.status);
                return response.json();
            })
            .then(data => {
                console.log('Dados recebidos:', data);
                if (data.success) {
                    alert('Solicitação de carona enviada com sucesso!');
                } else {
                    alert('Erro: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Erro na solicitação:', error);
                alert('Erro ao solicitar carona. Verifique o console.');
            });
        }

    document.addEventListener('DOMContentLoaded', function() {
        carregarCaronas();
        configurarNotificacoesPeriodicas();
        // Capturar clique no botão de adicionar carona
        document.querySelectorAll('.add-carona-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                // Apenas processa o evento se for o botão de adicionar (+)
                if (e.currentTarget.classList.contains('add-carona-btn')) {
                    const dia = this.getAttribute('data-dia');
                    const periodo = this.getAttribute('data-periodo');
                    
                    document.getElementById('diaSelecionado').value = dia;
                    document.getElementById('periodoSelecionado').value = periodo;
                }
            });
        });

        // Submissão do formulário de carona
        document.getElementById('formAdicionarCarona').addEventListener('submit', function(e) {
            e.preventDefault();
            
            fetch('cadastrar_carona.php', {
                method: 'POST',
                body: new FormData(this)
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    alert('Carona cadastrada com sucesso!');
                    carregarCaronas();
                    // Fechar o modal de adicionar carona
                    var addCaronaModal = bootstrap.Modal.getInstance(document.getElementById('adicionarCaronaModal'));
                    if (addCaronaModal) {
                        addCaronaModal.hide();
                    }
                } else {
                    alert('Erro ao cadastrar carona: ' + data.message);
                }
            });
        });

        // Carregar caronas ao iniciar
        carregarCaronas();

        function carregarCaronas() {
            fetch('buscar_caronas.php')
            .then(response => response.json())
            .then(caronas => {
                const diasSemana = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
                const periodos = ['Manhã', 'Tarde', 'Noite'];

                // Limpar caronas existentes
                diasSemana.forEach(dia => {
                    periodos.forEach(periodo => {
                        const container = document.getElementById(`caronas-${dia}-${periodo}`);
                        container.innerHTML = '';
                    });
                });
                // Popular caronas
                caronas.forEach(carona => {
                    const container = document.getElementById(`caronas-${carona.DIA}-${carona.PERIODO}`);
                    if (container) {
                        const caronaEl = document.createElement('button');
                        caronaEl.classList.add(
                            'btn', 
                            'btn-outline-success', 
                            'w-100', 
                            'mb-2', 
                            'carona-disponivel'
                        );
                        caronaEl.innerHTML = `
                            <span class="d-block fw-bold">${carona.NOME}</span>
                            <small class="text-muted">${carona.HORA}</small>
                        `;
                        caronaEl.setAttribute('data-carona-id', carona.idCARONA);
                        caronaEl.setAttribute('data-carona-usuario-id', carona.idUSUARIO);
                        caronaEl.addEventListener('click', () => mostrarDetalhesCarona(carona));
                        container.appendChild(caronaEl);
                    }
                });
            });
            verificarSolicitacoesPendentes()
        }

        function mostrarDetalhesCarona(carona) {
            // Fetch current user ID
            fetch('get_current_user_id.php')
            .then(response => response.json())
            .then(userData => {
                // Buscar solicitações para esta carona
                fetch(`buscar_solicitacoes_carona.php?caronaId=${carona.idCARONA}`)
                .then(response => response.json())
                .then(solicitacoes => {
                    const modal = new bootstrap.Modal(document.getElementById('detalhesCaronaModal'));
                    const corpo = document.getElementById('detalhesCaronaCorpo');
                    
                    // Determine if the current user is the carona owner
                    const isOwner = userData.id === carona.idUSUARIO;
                    
                    // Create modal content based on ownership
                    let modalContent = `
                        <p><strong>Motorista:</strong> ${carona.NOME}</p>
                        <p><strong>Dia:</strong> ${carona.DIA}</p>
                        <p><strong>Período:</strong> ${carona.PERIODO}</p>
                        <p><strong>Hora:</strong> ${carona.HORA}</p>
                        <p><strong>Cidade:</strong> ${carona.CIDADE}</p>
                    `;

                    // Adicionar solicitações se existirem e o usuário for o dono
                    if (isOwner && solicitacoes.length > 0) {
                        modalContent += `<h6>Solicitações de Carona</h6>`;
                        solicitacoes.forEach(solicitacao => {
                            modalContent += `
                                <div class="alert alert-info d-flex justify-content-between align-items-center">
                                    ${solicitacao.NOME} ${solicitacao.SOBRENOME}
                                    <div>
                                        <button class="btn btn-success btn-sm me-2" onclick="aprovarSolicitacao(${solicitacao.idSOLICITACAO})">Aprovar</button>
                                        <button class="btn btn-danger btn-sm" onclick="rejeitarSolicitacao(${solicitacao.idSOLICITACAO})">Rejeitar</button>
                                    </div>
                                </div>
                            `;
                        });
                    }

                    // Add buttons based on ownership
                    if (isOwner) {
                        modalContent += `
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-success me-2" onclick="editarCarona(${carona.idCARONA})">Editar Carona</button>
                                <button class="btn btn-danger" onclick="excluirCarona(${carona.idCARONA})">Excluir Carona</button>
                            </div>
                        `;
                    } else {
                        modalContent += `
                            <button class="btn btn-primary mt-3" onclick="solicitarCarona(${carona.idCARONA})">Solicitar Carona</button>
                        `;
                    }

                    corpo.innerHTML = modalContent;
                    modal.show();
                });
            });
        }

        // Função para editar carona (abrirá um modal de edição)
        window.editarCarona = function(caronaId) {
            fetch(`buscar_carona.php?id=${caronaId}`)
            .then(response => response.json())
            .then(carona => {
                // Criar modal de edição
                const editModal = new bootstrap.Modal(document.getElementById('editarCaronaModal'));
                const editForm = document.getElementById('formEditarCarona');
                
                // Preencher formulário com dados atuais
                editForm.querySelector('input[name="caronaId"]').value = caronaId;
                editForm.querySelector('select[name="dia"]').value = carona.DIA;
                editForm.querySelector('select[name="periodo"]').value = carona.PERIODO;
                editForm.querySelector('select[name="cidade"]').value = carona.CIDADE;
                editForm.querySelector('input[name="hora"]').value = carona.HORA;

                // Fechar o modal de detalhes
                const detalhesModal = bootstrap.Modal.getInstance(document.getElementById('detalhesCaronaModal'));
                if (detalhesModal) {
                    detalhesModal.hide();
                }

                // Mostrar modal de edição
                editModal.show();
            });
        }

        // Função para excluir carona
        window.excluirCarona = function(caronaId) {
            if (confirm('Tem certeza que deseja excluir esta carona?')) {
                fetch('excluir_carona.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `caronaId=${caronaId}`
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Carona excluída com sucesso!');
                        carregarCaronas();
                        // Fechar o modal de detalhes
                        const detalhesModal = bootstrap.Modal.getInstance(document.getElementById('detalhesCaronaModal'));
                        if (detalhesModal) {
                            detalhesModal.hide();
                        }
                    } else {
                        alert('Erro ao excluir carona: ' + data.message);
                    }
                });
            }
        }

        

    });

    // Add this to your existing script in index.php
    document.getElementById('formEditarCarona').addEventListener('submit', function(e) {
        e.preventDefault();
        
        fetch('atualizar_carona.php', {
            method: 'POST',
            body: new FormData(this)
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                alert('Carona atualizada com sucesso!');
                window.location.href = 'index.php';
                
                // Recarrega as caronas imediatamente
                carregarCaronas();
                
                // Fechar o modal de edição
                var editCaronaModal = bootstrap.Modal.getInstance(document.getElementById('editarCaronaModal'));
                if (editCaronaModal) {
                    editCaronaModal.hide();
                }
            } else {
                alert('Erro ao atualizar carona: ' + data.message);
            }
        });
    });
    </script>

    <?php
    mysqli_close($conn);
    ?>

</body>

</html>