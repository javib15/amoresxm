document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("form").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
    evento.preventDefault();
    var name = document.getElementById('name').value;
    if (name.length == 0) {
        alert('Please complete name');
        return;
    }
    var email = document.getElementById('email').value;
    if (email.length == 0) {
        alert('Please complete Email');
        return;
    }
    var message = document.getElementById('date').value;
    if (message.length == 0) {
        alert('Please complete reservation date');
        return;
    }
    alert('Message Send');
    this.submit();
}