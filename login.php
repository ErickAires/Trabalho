<?php
  require 'conexao.php';
  session_start();

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se os campos foram preenchidos
    if (empty($_POST['email']) || empty($_POST['senha'])) {
        echo "Por favor, preencha todos os campos.";
    } else {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Preparar e executar a consulta
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $usuario = $stmt->fetch();

        // Verificar se o usuário existe e se a senha está correta
        if ($usuario && password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            header("Location: index.php");
            exit(); // Certifique-se de que o script não continue após o redirecionamento
        } else {
            echo "Email ou senha incorretos!";
        }
    }
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PetLover - Pet Care Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                
            </div>
            
            </div>
        </div>
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Pet</span>House</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Horario de atendimento</h6>
                        <p class="m-0">8:00hrs - 21:00hrs</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email</h6>
                        <p class="m-0">PetHouse@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Suporte</h6>
                        <p class="m-0">11 99432-1111</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Inicio</a>
                    <a href="about.html" class="nav-item nav-link">Sobre nós</a>
                    <a href="service.html" class="nav-item nav-link">Serviços</a>
                    <a href="price.php" class="nav-item nav-link">Planos</a>
                    <a href="contact.html" class="nav-item nav-link">Chat</a>   
                </div>
                <a href="login.html" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Entrar</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



<br><br>

    <!-- Booking Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">  
                    <form method="POST" class="py-5">
                                    <h1>Faça seu Login</h1>
                                <br>
                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">
                                        <input name="email" type="email" class="form-control border-0 p-4 datetimepicker-input" placeholder="E-mail" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="time" id="time" data-target-input="nearest">
                                        <input name="senha" type="password" class="form-control border-0 p-4 datetimepicker-input" placeholder="Senha" required/>
                                        <br><br>
                    
                                        <button class="btn btn-dark btn-block border-0 py-3" type="submit">Entrar</button>
                                        <div class="register-link">
                                            <p>Não possui Login?<br><a href="cadastro.php">Faça seu Cadastro</a> </p>
                                        </div>

                                    </div>
                                </form>
                   
                
                
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-4 col-md-12 mb-5">
            <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Pet</span>House</h1>
            <p class="m-0">Seja para um descanso tranquilo ou para momentos de diversão e socialização, a PetHouse é o lugar ideal para deixar seu cachorro ou gato com toda a atenção, conforto e segurança que ele merece!
            
                Nosso espaço é especialmente projetado para o bem-estar dos seus pets, oferecendo um ambiente acolhedor e estimulante, com profissionais experientes e apaixonados por animais, prontos para garantir que seu amigo de quatro patas tenha uma estadia agradável e feliz.</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Entre em contato</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Setor comercial Sul, Bloco A, Senac Jessé Freire</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>11 99432-1111</p>
                    <p><i class="fa fa-envelope mr-2"></i>PetHouse@gmail.com</p>
                    
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Links polulares</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                        <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>Sobre Nós</a>
                        <a class="text-white mb-2" href="service.html"><i class="fa fa-angle-right mr-2"></i>Nossos serviços</a>
                        <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>Nossa equipe</a>
                        <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contate-nos</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Fale conosco clicando abaixo:</h5>
                    <form action="contact.html">
                        
                            <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Inicie uma conversa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>