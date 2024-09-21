var chatHistory = [];

function sendMessage() {
    var userInput = document.getElementById("user-input").value;

    if (userInput !== "") {
        appendMessage("user", userInput);
        simulateBotResponse(userInput);
        document.getElementById("user-input").value = "";
    }
}

function simulateBotResponse(userInput) {
    // En este ejemplo, simplemente respondemos con mensajes predefinidos.
    var botResponse = getBotResponse(userInput);
    appendMessage("bot", botResponse);
}

function getBotResponse(userInput) {
    userInput = userInput.toLowerCase();

    if (userInput.includes("hola")) {
        return "¡Hola! ¿En qué puedo ayudarte?";
    } else if (userInput.includes("cómo puedo hacer las reservas online")) {
        return "Puedes realizar tus compras accediendo al login del cliente.";
    } else if (userInput.includes("si no tengo cuenta")) {
        return "Puedes crear tu cuenta de la misma manera si aún no la tienes.";
    } else if (userInput.includes("chau")) {
        return "Adiós, fue un gusto ayudarte.";
    } else if (userInput.includes("me voy")) {
        return "¡Vete entonces! Si tienes más preguntas, estoy aquí.";
    } else {
        return "Lo siento, no entendí. ¿Puedes reformular tu pregunta?";
    }
}

function appendMessage(sender, message) {
    var chatBody = document.getElementById("chat-body");
    var newMessage = document.createElement("div");
    newMessage.className = sender;
    newMessage.innerHTML = message;
    chatBody.appendChild(newMessage);
    chatHistory.push({ sender: sender, message: message });
    chatBody.scrollTop = chatBody.scrollHeight;
}

var chatContainer = document.getElementById("chat-container");

function toggleChat() {
    if (chatContainer.style.display === "none" || chatContainer.style.display === "") {
        chatContainer.style.display = "block";
    } else {
        chatContainer.style.display = "none";
    }
}

// Resto de tu código JavaScript
