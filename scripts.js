
javascript
document.getElementById('capture-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;

    if (email) {
        document.getElementById('capture-form').classList.add('hidden');
        document.getElementById('success-message').classList.remove('hidden');
        // Aqui você pode adicionar uma lógica para enviar o e-mail para seu servidor ou serviço de email marketing.
        console.log('Email capturado:', email);
    }
});