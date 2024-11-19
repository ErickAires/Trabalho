document.addEventListener("DOMContentLoaded", function() {
    const chatBox = document.getElementById('chat-box');
    const chatInput = document.getElementById('chat-input');
    const sendBtn = document.getElementById('send-btn');

    sendBtn.addEventListener('click', function() {
        const userMessage = chatInput.value;
        if (userMessage.trim()) {
            addMessage('user', userMessage);
            chatInput.value = '';
            setTimeout(() => {
                respondToUser(userMessage);
            }, 1000);
        }
    });

    function addMessage(sender, message) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message', sender);
        messageElement.textContent = message;
        chatBox.appendChild(messageElement);
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    function respondToUser(message) {
        let botResponse = 'Olá! Como posso ajudar?';
        
        if (message.toLowerCase().includes('bom dia') || message.toLowerCase().includes('olá')) {
            botResponse = 'Bom dia! Tudo bem? Como posso ser útil?';    
        } else if (message.toLowerCase().includes('boa tarde')) {
            botResponse = 'Boa tarde! Tudo bem? Como posso ser útil?';  
        } else if (message.toLowerCase().includes('Boa noite')) {
            botResponse = 'Boa noite! Tudo bem? Como posso ser útil?';    
        } else if (message.toLowerCase().includes('como você está')) {
            botResponse = 'Eu sou apenas um bot, mas estou aqui para ajudar!';
        } else if (message.toLowerCase().includes('qual seu nome')) {
            botResponse = 'Eu sou seu assistente virtual, sempre pronto para ajudar!';
        } else {
            botResponse = 'Desculpe, não entendi. Pode reformular a pergunta?';
        }
        
        addMessage('bot', botResponse);
    }
});
