<?php
require_once 'conexao.php';
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
        $query = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
       
        if ($usuario && password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario'] = $usuario['nome'];
            header("Location: bemvindo.php");
            exit();
        } else {
            echo "Email ou senha incorretos!";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PlayUsados - Fazer Login</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Ecommerce Template" name="keywords">
        <meta content="Bootstrap Ecommerce Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Header Start -->
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Pesquisar">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Minha Conta</a>
                                <div class="dropdown-menu">
                                    <a href="login.php" class="dropdown-item">Entrar</a>
                                    <a href="cadastro.php" class="dropdown-item">Cadastrar</a>
                                </div>
                            </div>
                            <div class="cart">
                                <a href="cart.html"></a>
                                <i class="fa fa-cart-plus"></i>
                                <span>(0)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header End -->
        
        
        <!-- Header Start -->
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                            <a href="index.html" class="nav-item nav-link active">Início</a>
                        
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">paginas</a>
                                <div class="dropdown-menu">
                                    <a href="product-list.html" class="dropdown-item">Produto</a>
                                    <a href="cart.html" class="dropdown-item">Carrinho</a>
                                    <a href="wishlist.html" class="dropdown-item">Favorito</a>
                                    <a href="login.php" class="dropdown-item">Entrar</a>
                                    <a href="cadastro.php" class="dropdown-item">Cadastrar</a>
                                    <a href="my-account.html" class="dropdown-item">Minha Conta</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Header End -->
        
        
       
        
        <!-- Login Start -->
        <div class="headercadastro">
            <div align = "center"  class="headercadastro">
                
                
                
                    <div class="fundocadastro">
                        <div class="section-header">
                            <h3>Entrar</h3>    
                        
                        </div>
                        <div class="login-form">
                            
                                <div align = "left" class="fundocadastro">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" placeholder="exemplo@gmail.com" require=""> 
                                </div>

                                <div align = "left" class="fundocadastro">
                                    <label>Senha</label>
                                    <input class="form-control" type="password" placeholder="Senha">
                                </div>

                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="newaccount">
                                        <label class="custom-control-label" for="newaccount">Mantenha-me conectado</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button class="btn">Entrar</button>
                                </div>
                            
                        </div>
                    </div>
                    
                   
                                
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
        <!-- Login End -->
        
        
       <!-- Footer Start -->
       <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                        <div align="center" class="logobaixo">
                            <a href="">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    </div>
                    

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">

                            <h1>PlayUsados</h1>
                            <p>
                                Na PlayUsados, acreditamos que a tecnologia deve ser acessível e sustentável. Oferecemos uma seleção de hardware usado, testado e de qualidade, ideal para quem busca performance sem comprometer o orçamento. Nossa missão é conectar você às melhores oportunidades em tecnologia, promovendo a reutilização e contribuindo para um futuro mais sustentável.  
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Paginas</h3>
                            <ul>
                                <li><a href="product-list.html">Produtos</a></li>
                                <li><a href="wishlist.html">Favorito</a></li>
                                <li><a href="cart.html">Carrinho</a></li>
                                <li><a href="login.php">Entrar</a></li>
                                <li><a href="cadastro.php">Cadastrar</a></li>
                                <li><a href="my-account.html">Minha Conta</a></li>
                            </ul>
                        </div>
                    </div>

                    
                    <div  align="rignt"class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Entre em Contato</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Setor comercial Sul, Bloco A, Senac Jessé Freire</p>
                                <p><i class="fa fa-envelope"></i>PlayUsados@gmail.com</p>
                                <p><i class="fa fa-phone"></i>(61)99999-9999</p>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row payment">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <p>Formas de Pagamento:</p>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Footer Bottom Start -->
        <!-- Footer Bottom End -->
        
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>