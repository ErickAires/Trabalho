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

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto_id = $_POST['produto_id'];
    $quantidade_vendida = $_POST['quantidade'];
    $forma_pagamento = $_POST['forma_pagamento'];

    // Verifica se o produto existe e se há quantidade suficiente em estoque
    $stmt = $pdo->prepare("SELECT preco, quantidade FROM produtos WHERE id = :produto_id");
    $stmt->execute([':produto_id' => $produto_id]);
    $produto = $stmt->fetch();

    if ($produto) {
        if ($produto['quantidade'] >= $quantidade_vendida) {
            // Calcula o total da venda
            $total = $produto['preco'] * $quantidade_vendida;

            // Registra a venda
            $stmt = $pdo->prepare("INSERT INTO vendas (usuario_id, produto_id, quantidade, forma_pagamento, total, data_venda) 
                                   VALUES (:usuario_id, :produto_id, :quantidade, :forma_pagamento, :total, NOW())");
            $stmt->execute([
                ':usuario_id' => $_SESSION['usuario_id'],
                ':produto_id' => $produto_id,
                ':quantidade' => $quantidade_vendida,
                ':forma_pagamento' => $forma_pagamento,
                ':total' => $total
            ]);

            // Subtrai a quantidade vendida do estoque
            $novo_estoque = $produto['quantidade'] - $quantidade_vendida;
            $stmt = $pdo->prepare("UPDATE produtos SET quantidade = :novo_estoque WHERE id = :produto_id");
            $stmt->execute([':novo_estoque' => $novo_estoque, ':produto_id' => $produto_id]);

            echo "Compra realizada com sucesso! Total: R$" . number_format($total, 2, ',', '.') . "<br>";
           
        } else {
            echo "Erro: Quantidade insuficiente em estoque!";
        }
    } else {
        echo "Produto não encontrado!";
    }
}
?>

<form method="POST">
    Produto:
    <select name="produto_id">
        <?php
        $stmt = $pdo->query("SELECT id, nome FROM produtos");
        while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value='" . $produto['id'] . "'>" . htmlspecialchars($produto['nome']) . "</option>";
        }
        ?>
    </select><br><br><br>
    Quantidade: <input type="number" name="quantidade" required><br><br><br>
    Forma de Pagamento:
    <select name="forma_pagamento">
        <option value="Cartão">Cartão</option>
        <option value="Dinheiro">Dinheiro</option>
    </select><br><br><br>
    <button type="submit">Finalizar Venda</button>
	<a href="index.php">Voltar ao Dashboard</a>
</form>


    </div>
</body>
</html>