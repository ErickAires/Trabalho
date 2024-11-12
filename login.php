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
        <div class="container-fluid bg-light">
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
    </body>
</html>                

