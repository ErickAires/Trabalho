
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
                            <h1>Faça seu cadastro</h1><br>

                            <div class="form-group">
                            <div class="input-container">
                                <input type="text" class="form-control border-0 p-4" name="nome" placeholder="Nome" required>
                            </div><br>

                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" name="sobrenome" placeholder="Sobrenome" required>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" name="email" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control border-0 p-4" name="senha" placeholder="Senha" required>
                            </div>

                            <div class="form-group">           
                                <input type="tel" class="form-control border-0 p-4" name="telefone" placeholder="Telefone" required>
                            </div> 


            <?php
                    require 'conexao.php';

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $nome = $_POST['nome'];
                        $sobrenome = $_POST['sobrenome'];
                        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo "Email inválido!";
                            exit;
                        }
                        
                        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
                        if (strlen($_POST['senha']) < 6) {
                            echo "A senha deve ter pelo menos 6 caracteres.";
                            exit;
                        }

                        $telefone = preg_replace('/[^0-9]/', '', $_POST['telefone']);
                        if (strlen($telefone) < 10 || strlen($telefone) > 11) {
                            echo "Telefone inválido!";
                            exit;
                        }
                        

                        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, sobrenome, email, senha, telefone) VALUES (:nome, :sobrenome, :email, :senha, :telefone )");
                        if ($stmt->execute([':nome' => $nome, ':sobrenome' => $sobrenome, ':email' => $email, ':senha' => $senha, ':telefone' => $telefone])) {
                            echo "Cadastro bem sucedido!";
                        } else {
                            echo "Erro ao fazer cadastro!";
                        }
                    }
                    ?>

                                <div class="register-link">
                                <button type="submit" class="btn btn-dark btn-block border-0 py-3" >Cadastrar</button>
                                    <p>Já possui cadastro? <br><a href="login.php">Faça seu login</a> </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
</body>
</html>                

