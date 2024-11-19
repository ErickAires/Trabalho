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



            echo "<h2>Relatório de Vendas</h2>";

            // Consulta para buscar todas as vendas realizadas
            $stmt = $pdo->query("SELECT v.id, u.nome AS usuario, p.nome AS produto, v.quantidade, v.total, 
                                v.forma_pagamento, v.data_venda 
                                FROM vendas v
                                JOIN usuarios u ON v.usuario_id = u.id
                                JOIN produtos p ON v.produto_id = p.id");

            $vendas = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($vendas) > 0) {
                // Exibir os dados de uma forma amigável em uma tabela
                echo "<table border='1' cellspacing='0' cellpadding='10'>
                        <thead>
                            <tr>
                                <th>ID da Venda</th>
                                <th>Usuário</th>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Total (R$)</th>
                                <th>Forma de Pagamento</th>
                                <th>Data da Venda</th>
                            </tr>
                        </thead>
                        <tbody>";
                
                foreach ($vendas as $venda) {
                    echo "<tr>
                            <td>" . $venda['id'] . "</td>
                            <td>" . htmlspecialchars($venda['usuario']) . "</td>
                            <td>" . htmlspecialchars($venda['produto']) . "</td>
                            <td>" . $venda['quantidade'] . "</td>
                            <td>" . number_format($venda['total'], 2, ',', '.') . "</td>
                            <td>" . htmlspecialchars($venda['forma_pagamento']) . "</td>
                            <td>" . $venda['data_venda'] . "</td>
                        </tr>";
                }

                echo "</tbody></table>";
            } else {
                echo "Nenhuma venda foi encontrada.";
            }
            echo "<br>";
            echo "<button onclick='window.print()'>Imprimir Relatório</button><br>"; 
             
            echo '<br><a href="index.php">Voltar ao Inicio</a>';


            ?>

       
   



    </div>
</body>
</html>











