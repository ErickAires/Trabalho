<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compra.css">
    <title>PetHouse - Finalizar Pagamento</title>
</head>
<body>
    <div class="container">
        <h1>PetHouse</h1>

        <?php
require 'conexao.php';
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login-s.php");
    exit;
}

// Processamento do formulário de cadastro de produtos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];  // Captura a quantidade informada

    $stmt = $pdo->prepare("INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)");
    if ($stmt->execute([':nome' => $nome, ':preco' => $preco, ':quantidade' => $quantidade])) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar produto!";
    }
}
?>



<h2>Cadastro de Produtos</h2>
<form method="POST">
    Nome do Produto: <input type="text" name="nome" required><br><br><br>
    Preço: <input type="number" name="preco" step="0.01" required><br><br><br>
    Quantidade em Estoque: <input type="number" name="quantidade" min="0" required><br><br><br> <!-- Campo de quantidade -->
    <button type="submit">Cadastrar Produto</button>
</form>

<hr>

<h2>Produtos Cadastrados</h2>
<?php
// Listagem de produtos cadastrados
$stmt = $pdo->query("SELECT * FROM produtos");
while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo htmlspecialchars($produto['nome']) . " - R$" . number_format($produto['preco'], 2, ',', '.') . 
         " - Estoque: " . $produto['quantidade'] . "<br>";
}
?>
<br><br>
<a href="dashboard-s.php">Voltar ao Inicio</a>



       
    



    </div>
</body>
</html>













    
