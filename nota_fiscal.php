
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

            echo "Nota Fiscal:<br>";

            $stmt = $pdo->query("SELECT v.id, u.nome AS usuario, p.nome AS produto, v.quantidade, v.total, v.data_venda 
                                FROM vendas v
                                JOIN usuarios u ON v.usuario_id = u.id
                                JOIN produtos p ON v.produto_id = p.id");
            while ($venda = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "Nota Fiscal #" . $venda['id'] . "<br>";
                echo "Usuário: " . htmlspecialchars($venda['usuario']) . "<br>";
                echo "Produto: " . htmlspecialchars($venda['produto']) . "<br>";
                echo "Quantidade: " . $venda['quantidade'] . "<br>";
                echo "Total: R$" . number_format($venda['total'], 2, ',', '.') . "<br>";
                echo "Data da Venda: " . $venda['data_venda'] . "<br><br>";
            }
            ?>
            <a href="index.php">Voltar ao Inicio</a>

                


    </div>
</body>
</html>








