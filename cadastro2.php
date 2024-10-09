
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>PlayUsados - Fazer Cadastro</title>
       

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
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Minha conta</a>
                                <div class="dropdown-menu">
                                    <a href="cadastro.html" class="dropdown-item">Entrar</a>
                                    <a href="login.html" class="dropdown-item">Cadastrar</a>
                                </div>
                            </div>
                            <div class="cart">
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
                    <a href="#" class="navbar-brand">Inicio</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                            <a href="index.html" class="nav-item nav-link active">Pagina Inicial</a>
                            <a href="product-list.html" class="nav-item nav-link">Produtos</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Páginas</a>
                                <div class="dropdown-menu">
                                    <a href="product-list.html" class="dropdown-item">Produtos</a>
                                    <a href="product-detail.html" class="dropdown-item">Detalhes do produto</a>
                                    <a href="cart.html" class="dropdown-item">Carrinho</a>
                                    <a href="wishlist.html" class="dropdown-item">Favoritos</a>
                                    <a href="checkout.html" class="dropdown-item">Caixa</a>
                                    <a href="login.html" class="dropdown-item">Entrar ou cadastrar</a>
                                    <a href="my-account.html" class="dropdown-item">Minha Conta</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contate-nos</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Header End --> 
        <div align="center" class="headercadastro">    
                    <div class="fundocadastro"> 
                        <div  class="section-header">
                            <h3>Cadastrar</h3> 
                                                            
                                <?php
                                require 'conexao.php';

                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    $nome = $_POST['nome'];
                                    $email = $_POST['email'];
                                    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

                                    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, sobrenome, email, senha, cpf,endereco,telefone) VALUES (:nome,:sobrenome, :email, :senha,:cpf,:endereco,:telefone)");
                                    if ($stmt->execute([':nome' => $nome,':sobrenome' => $sobrenome, ':email' => $email, ':senha' => $senha,':cpf' => $cpf,':endereco' => $endereco,':telefone' => $telefone])) {
                                        echo "<h1>Usuário cadastrado com sucesso!</h1>";
                                    } else {
                                        echo "Erro ao cadastrar usuário!";
                                    }
                                }
                                ?>
                          
                        </div>                     
                        <form method="POST">
                            Nome: <input type="text" name="nome" required><br>
                            Sobreome: <input type="text" name="sobrenome" required><br>
                            Email: <input type="email" name="email" required><br>
                            Senha: <input type="password" name="senha" required><br>
                            cpf: <input type="cpf" name="cpf" required><br>
                            endereco: <input type="endereco" name="endereco" required><br>
                            telefone: <input type="telefone" name="telefone" required><br>
                            <button type="submit">Cadastrar</button>
                                <button onclick="window.location.href='../index.php'">Voltar</button>
                            <button type="reset" class="btn-limpar">Limpar</button>
                        </form>

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
                            <h1>PlayUsados</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin rutrum massa. Suspendisse sollicitudin rutrum massa. Vestibulum porttitor, metus sed pretium elementum, nisi nibh sodales quam, non lobortis neque felis id mauris.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Useful Pages</h3>
                            <ul>
                                <li><a href="product.html">Product</a></li>
                                <li><a href="product-detail.html">Product Detail</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Login & Register</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Quick Links</h3>
                            <ul>
                                <li><a href="product.html">Product</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Login & Register</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Get in Touch</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Shop, Los Angeles, CA, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
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
                            <p>We Accept:</p>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <p>Secured By:</p>
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
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
