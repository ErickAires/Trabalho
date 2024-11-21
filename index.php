<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LovePet</title>
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

                <?php
                require 'conexao.php';
                session_start();

                // Verifica se o usuário está logado
                if (!isset($_SESSION['usuario_id'])) {
                    header("Location: login.php");
                    exit;
                }

                // Exibir informações do usuário logado
                $stmt = $pdo->prepare("SELECT nome FROM usuarios WHERE id = :id");
                $stmt->execute([':id' => $_SESSION['usuario_id']]);
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

                echo "<h4>Bem-vindo, " . htmlspecialchars($usuario['nome']) . "!</h4>";
                ?>


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
                    <a href="index.php" class="nav-item nav-link active">Inicio</a>
                    <a href="about.html" class="nav-item nav-link">Sobre nós</a>
                    <a href="service.html" class="nav-item nav-link">Serviços</a>
                    <a href="price.php" class="nav-item nav-link">Planos</a>
                    <a href="contact.html" class="nav-item nav-link">Chat</a>  
                </div>
                <a href="login.php" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Entrar</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->




    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Sobre Nós</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Hospedagem</span> & <span class="text-secondary">Creche</span></h1>
                <h5 class="text-muted mb-3">Estamos entre as melhores opções da região para hospedagem e creche, oferecendo um atendimento diferenciado e um ambiente totalmente adaptado para o bem-estar dos animais.</h5>
                <p class="mb-4">Nosso espaço foi cuidadosamente planejado para garantir que seu animal tenha liberdade para brincar, descansar e socializar com outros pets, sempre sob a supervisão de nossa equipe.</p>
                <ul class="list-inline">
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Melhor da Região</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Serviços de Emergência</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Suporte 24hrs</h5></li>
                </ul>
                
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="img/about-1.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-2.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Nossos serviços</h4>
                <h1 class="display-4 m-0"><span class="text-primary">Sereviços</span> Premium</h1>
            </div>
            <div class="row pb-3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Hospedagem</h3>
                        <p>Deixe seu amigo de quatro patas em um ambiente seguro e acolhedor. Oferecemos uma hospedagem completa, com todo o cuidado que ele merece.</p>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-food display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Alimentação</h3>
                        <p>Com uma alimentação balanceada e de qualidade, seu pet estará sempre saudável e bem nutrido, com opções que atendem às suas necessidades específicas.</p>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Banho e Tosa</h3>
                        <p>Proporcione ao seu pet uma experiência de cuidado completa, com banhos e tosas realizadas por profissionais qualificados, para um visual impecável.</p>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-cat display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Adestramento</h3>
                        <p>Com métodos eficientes e carinho, oferecemos adestramento personalizado, ajudando seu pet a aprender novos comandos e a melhorar seu comportamento.</p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-dog display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Exercícios</h3>
                        <p>Garanta a saúde e disposição do seu pet com atividades físicas supervisionadas, feitas para estimular sua energia e bem-estar e Saúde.</p>
                     
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-vaccine display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Medicina</h3>
                        <p>Contamos com profissionais especializados para atender à saúde do seu pet, oferecendo cuidados médicos preventivos e tratamentos adequados.</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="img/feature.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Por que nos escolher?</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Cuidados especiais com</span> seu Pet</h1>
                <p class="mb-4">Seja para um curto período ou estadias mais longas, nossa creche para animais é o lugar ideal para o seu pet.</p>
                <div class="row py-2">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Melhor da Região</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Serviços Emergênciais</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Cuidados Especiais</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Suporte 24hrs</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid bg-light pt-5 pb-4">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Planos e Serviços</h4>
                <h1 class="display-4 m-0">Escolha<span class="text-primary"> Seu Plano</span></h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/price-1.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Diária</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">R$</small>39,90<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Dia</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Alimentação</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Taxí Dog</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Banho e Tosa</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Medicina veterinária</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="compra.php" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Reserve Agora</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/price-2.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-secondary mb-3">Semanal</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">R$</small>199,90<small class="align-bottom" style="font-size: 16px; line-height: 40px;">7 Dias</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Alimentação</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Taxí Dog</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Banho e Tosa</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Medicina veterinária</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="compra.php" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Reserve Agora</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/price-3.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Mensal</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">R$</small>419,90<small class="align-bottom" style="font-size: 16px; line-height: 40px;">30 Dias</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Alimentação</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Taxí Dog</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Banho e Tosa</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Medicina veterinária</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="compra.php" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Reserve Agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class="container mt-5 pt-5 pb-3">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Membros da equipe</h4>
            <h1 class="display-4 m-0">Conheça nossa<span class="text-primary"> Equipe</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="img/team-1.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Erick Aires</h5>
                            <i>Fundador e CEO</i>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="img/team-2.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Kaique Candido</h5>
                            <i>Gerente</i>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="img/team-3.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Pedro Barros</h5>
                            <i>Doutor</i>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="img/team-4.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Bruno Ernany</h5>
                            <i>Treinador</i>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light my-5 p-0 py-5">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Avaliações</h4>
                <h1 class="display-4 m-0">Relatos dos<span class="text-primary"> Clientes</span></h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>João</h5>
                            <i>Contador</i>
                        </div>
                    </div>
                    <p class="m-0">O Max adorou ficar aqui! Foi bem tratado e se divertiu bastante. Vou voltar sempre que precisar!</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Pedro</h5>
                            <i>Empresário</i>
                        </div>
                    </div>
                    <p class="m-0">A Luna foi muito bem tratada e ficou tranquila durante a minha viagem. Excelente serviço!</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Mario</h5>
                            <i>Advogado</i>
                        </div>
                    </div>
                    <p class="m-0">O Beto adorou as atividades e passeios. Ele voltou muito mais calmo e educado! Super recomendo.</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Marcos</h5>
                            <i>Professor</i>
                        </div>
                    </div>
                    <p class="m-0">A Bella foi tratada com muito carinho e atenção. Fiquei tranquilo sabendo que ela estava bem. Recomendo!</p></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    

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
                            <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
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
    <div
		
    <!-- Footer End -->


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