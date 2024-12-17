<!DOCTYPE html>
<html lang="pt br">

<head>
    <meta charset="utf-8">
    <title>Sobre - SuaCarona</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon_carona/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon_carona/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon_carona/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon_carona/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon_carona/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon_carona/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon_carona/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon_carona/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_carona/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon_carona/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_carona/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon_carona/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_carona/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
                    <a href="index.php" class="nav-item nav-link ">Início</a>
                    <a href="oquenossomos.html" class="nav-item nav-link active">Sobre nós</a>
                    <a href="faleconoscologado.html" class="nav-item nav-link ">Fale conosco</a>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="perfil.html">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Perfil
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="sair.php" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Sair
                            </a>
                        </div>
                    </li>
                </div>
                <a href="index.html" class="btn btn-primary px-3 d-none d-lg-flex">Sair</a>
            </div>
                </div>
                <a href="login.php" class="btn btn-primary px-3 d-none d-lg-flex">Entrar</a>
            </div>
        </nav>
    </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">O que é o SuaCarona?</h1> 
                    <p class="mb-4" style="margin-right: 40px; margin-top: 30px;">Uma aplicação destinada para alunos com dificuldades em seu transporte para determinada escola. Aqui além de diminuir o consumo de gasolina e ajudando o meio ambiente, os alunos podem ter a chance de estudar em lugares de difícil acesso por conta do transporte.</p>

                        <nav aria-label="breadcrumb animated fadeIn">
                       <!-- <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">About</li>
                        </ol> -->
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/CARONA2.jpg" alt="">
                </div>
            </div>
        </div>
        <style>
            .navbar {
                border-radius: 15px; 
                overflow: hidden; 
            }
    
            .navbar-nav .nav-item {
                border-radius: 15px; 
            }
    
            .navbar-toggler {
                border-radius: 15px; 
            }
    
            .navbar-collapse {
                border-radius: 15px;
            }
        </style>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img/carona.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Qual o nosso propósito?</h1>
                        <p class="mb-4">O nosso objetivo parte de um princípio de colaborar com a sociedade, utilizando a nossa aplicação, fatores importantes para todo ser humano seriam mais aproveitados. Objetivos do projeto logo abaixo:</p>

                        <p><i class="fa fa-check text-primary me-3"></i> +  Tempo</p>
                        <p><i class="fa fa-check text-primary me-3"></i> +  Colaboração</p>
                        <p><i class="fa fa-check text-primary me-3"></i> -  Poluição</p>
                        <p><i class="fa fa-check text-primary me-3"></i> -  Acidentes</p>
                        
                        
        <!--                <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Call to Action Start
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/call-to-action.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contate nosso gerente de vendas B2B</h1>
                                    <p>Se você tiver interesse na proposta e gostaria de adotar a metodologia em sua instituição, contate nosso gerente de vendas B2B!</p>
                                </div>
                                <a href="" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Ligue</a>
                                <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Marque uma reunião</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     Call to Action End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Desenvolvedores</h1>
                  <!--<p></p>-->  
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/imagemJoão.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">João Gabriel Marino Metz</h5>
                                <small>Dev</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/FotoZimmerCerta.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Arthur Lehnhart Zimmer</h5>
                                <small>Dev</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/fotoTernus2x.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Gustavo Pies Ternus</h5>
                                <small>Dev</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/FotoFrizzo.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Guilherme Frizzo Gardin</h5>
                                <small>Dev e Gestor</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Entre em contato</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Rua SuaCarona, 145, Bom Jardim, Ivoti</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+55 051 985520217</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>suacarona@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Links</h5>
                        <a class="btn btn-link text-white-50" href="oquenossomos.html">Sobre Nós</a>
                        <a class="btn btn-link text-white-50" href="contact.html">Entrar em Contato</a>
                        <a class="btn btn-link text-white-50" href="serviço.html">Nossos Serviços</a>
                        <a class="btn btn-link text-white-50" href="">Política de Privacidade</a>
                        <a class="btn btn-link text-white-50" href="">Termos e Condições</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="index.php">SuaCarona</a>, Todos os Direitos Reservados.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.html">Página Inicial</a>
                                <a href="">Cookies</a>
                                <a href="contact.html">Ajuda</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</body>

</html>