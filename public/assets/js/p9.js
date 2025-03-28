const messageInput = document.getElementById('message-input');
const sendButton = document.getElementById('send-button');
const chatMessages = document.getElementById('chat-messages');

sendButton.addEventListener('click', sendMessage);

messageInput.addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        sendMessage();
    }
});

function sendMessage() {
    const messageText = messageInput.value.trim();
    if (messageText) {
        appendMessage(messageText, 'sent');
        messageInput.value = '';
        setTimeout(() => {
            appendMessage('تم استلام رسالتك.', 'received');
        }, 1000);
    }
}

function appendMessage(messageText, messageType) {
    const messageElement = document.createElement('div');
    messageElement.classList.add('message', messageType);
    messageElement.textContent = messageText;
    chatMessages.appendChild(messageElement);
    chatMessages.scrollTop = chatMessages.scrollHeight; 
}