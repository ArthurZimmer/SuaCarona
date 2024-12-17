<?php 
    include_once "sessao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Início - SuaCarona</title>
    
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
                        <a href="index.html" class="nav-item nav-link active">Início</a>
                        <a href="oquenossomos.html" class="nav-item nav-link">O que nós somos</a>
                        <div class="nav-item dropdown">
                       <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.html" class="dropdown-item">Property List</a>
                                <a href="property-type.html" class="dropdown-item">Property Type</a>
                                <a href="property-agent.html" class="dropdown-item">Property Agent</a>
                            </div> -->
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Ajuda</a>
        
                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <!-- Dropdown - User Information <?php echo $foto;?> -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="perfil.php">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Perfil
                                        </a>
        <!--                                <a class="dropdown-item" href="#">
                                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Settings
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Activity Log
                                        </a>-->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="sair.php" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Sair
                                        </a>
                                    </div>
                                </li>
                    </div>
                    <a href="login.php" class="btn btn-primary px-3 d-none d-lg-flex">Entrar</a>
                </div>
            </nav>
        </div>
        
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
        <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-left: 14rem; margin-top: 10rem;">
                        <h1 class="h2 mb-0 text-gray-800">Perfil de usuário</h1>
                    </div>

                    <?php
                    // totalizadores
					$id = $_SESSION['id'];
					$sql = "SELECT * FROM usuarios WHERE idUSUARIO=$id";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
						$nome = $row[1];
						$email = $row[2];
						$senha = $row[3];
					}
					?>

                    <!-- Content Row -->
                    <div class="row" style="margin-left: 13rem;">
                        <div class="col-xl-3 col-lg-5">
                            <div class="card shadow mb-4">

                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Perfil</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#fotoModal">
										<!--<img src="<" alt="Admin" class="rounded-circle" width="150">-->
										</a>
                                        <div class="mt-3">
                                            <h4><?php echo $nome;?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Area Chart -->
                        <div class="col-xl-7 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Informações</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form class="user" action="perfil_alterar.php" method="post">
                                    <div class="row" style="margin-top: 1.6rem;">
                                        <input type="text" class="form-control form-control-user" 
											id="nome" name="nome" value="<?php echo $nome;?>" 
											placeholder="Nome do usuário">
                                        </div>
                                        <hr>
                                        <div class="row">
                                        
                                        <input type="email" class="form-control form-control-user" 
											id="email" name="email" value="<?php echo $email;?>" 
											placeholder="E-mail" required>

                                        </div>
                                        <hr>
                                        <div class="row">
                                        <input type="password" class="form-control form-control-user"
											id="senha" name="senha" value="<?php echo $senha;?>" 
											placeholder="Senha" required>
                                        </div>
                                        <hr>
                                        
                                        <div class="form-group row">
                                            <input type="hidden" name="codigo" value="<?php echo $id;?>">
                                            <button type="submit" class="btn btn-info btn-user">
                                                <b>Salvar</b>
                                            </button>
                                            &nbsp;&nbsp;
                                            <a href="index.php" class="btn btn-secondary btn-user">
										        <b>Voltar</b>
									        </a>
								        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Pie Chart -->
                    </div>
        </div>
        <!-- Header End -->
      
        <!-- Testimonial End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Entre em contato</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Rua SuaCarona, 145, Bom Jardim, Ivoti</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+55 051 985520217</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>SuaCarona@Gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Links</h5>
                        <a class="btn btn-link text-white-50" href="">Sobre Nós</a>
                        <a class="btn btn-link text-white-50" href="">Entrar em Contato</a>
                        <a class="btn btn-link text-white-50" href="">Nossos Serviços</a>
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
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Página Incial</a>
                                <a href="">Cookies</a>
                                <a href="">Ajuda</a>
                                <a href="">FQAs</a>
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

    <?php
    mysqli_close($conn);
    ?>
    
</body>

</html>