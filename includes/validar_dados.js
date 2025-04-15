function validarDados() {
    if(document.getElementById('idade').value == '') {
        alert('Idade não informado.');
        document.getElementById('idade').focus();
        return false;
    }
}