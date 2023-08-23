

document.addEventListener("DOMContentLoaded", function () {
    const chatbox = document.getElementById("chatbox");
    const userInputForm = document.getElementById("userInputForm");
    const userInput = document.getElementById("userInput");

    userInputForm.addEventListener("submit", function (event) {
        event.preventDefault();
        const message = userInput.value;

        displayUserMessage(message);
        getBotResponse(message);

        userInput.value = "";
    });

    function displayUserMessage(message) {    
        chatbox.innerHTML += `<div class="d-flex flex-row justify-content-start mt-3"><p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">You: ${message}</p></div>`;
        
    }

    function appendBotResponse(botResponse) {
        
        chatbox.innerHTML += `<div class="d-flex flex-row justify-content-end mb-4 pt-1"><p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">${botResponse}</p></div>`;
        appendMessage(botMessage);
    }

    function appendMessage(message) {
        const messageContainer = document.createElement("p");
        messageContainer.textContent = message;
        chatbox.appendChild(messageContainer);
    }

    function getBotResponse(userMessage) {
        fetch('code.php', {
            method: 'POST',
            body: new URLSearchParams({ user_input: userMessage }),
        })
        .then(response => response.text())
        .then(botResponse => {
            appendBotResponse(botResponse);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
});

