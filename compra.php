<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PetHouse - Finalizar Pagamento</title>
</head>
<body>
    <div class="container">
        <h1>PetHouse</h1>
        <form class="compra">
            <label for="userEmail">E-mail do Usuário:</label>
            <input type="email" id="userEmail" name="userEmail" required>

            <label for="petType">Tipo de Pet:</label>   
            <select id="petType" name="petType" required>
                <option value="" disabled selected>Selecione o tipo de pet</option>
                <option value="cachorro">Cachorro</option>
                <option value="gato">Gato</option>
            </select>

            <label for="petName">Nome do Pet:</label>
            <input type="text" id="petName" name="petName" required>

            <label for="petAge">Idade do Pet:</label>
            <input type="number" id="petAge" name="petAge" required>

            <h2>Escolha um Plano</h2>
            <div class="plan-options">

                <label for="planos">Tipos de planos:</label>
            <select id="planos" name="planos" required>
                <option value="" disabled selected>Selecione o plano</option>
                <option value="cachorro">Basico</option>
                <option value="gato">Intermediario</option>
                <option value="gato">Premium</option>
            </select>
                
            </div>

            <h2>Opções de Pagamento</h2>
            <div class="payment-options">
                
                <label for="creditCard">Cartão de Crédito</label>
                <input type="radio" id="creditCard" name="payment" value="creditCard" required>

                
                <label for="debitCard">Cartão de Débito</label>
                <input type="radio" id="debitCard" name="payment" value="debitCard">
            </div>

            <div class="card-info" id="cardInfo">
                <label for="cardNumber">Número do Cartão:</label>
                <input type="text" id="cardNumber" name="cardNumber" required>

                <label for="cardHolder">Nome do Titular:</label>
                <input type="text" id="cardHolder" name="cardHolder" required>

                <label for="expiryDate">Data de Validade:</label>
                <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/AA" required>

                <label for="cvv">Código de Segurança (CVV):</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <br></br>
            <button type="submit" class="submit-button">Finalizar Pagamento</button>
        </form>
    </div>

    <script>
        // Script para mostrar/ocultar informações do cartão com base na opção de pagamento selecionada
        const paymentOptions = document.querySelectorAll('input[name="payment"]');
        const cardInfo = document.getElementById('cardInfo');

        paymentOptions.forEach(option => {
            option.addEventListener('change', () => {
                if (option.value === 'creditCard' || option.value === 'debitCard') {
                    cardInfo.style.display = 'block';
                } else {
                    cardInfo.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>