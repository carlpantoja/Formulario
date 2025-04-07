function validarDados() {
    if(document.getElementById('nome').value == '') {
        alert('Nome não informado.');
        document.getElementById('nome').focus();
        return false;
    }

    if(document.getElementById('email').value == '') {
        alert('Email não informado.');
        document.getElementById('email').focus();
        return false;
    }

    if(document.getElementById('idade').value == '') {
        alert('Idade não informado.');
        document.getElementById('idade').focus();
        return false;
    }

    if(document.getElementById('data_nasc').value == '') {
        alert('Data de nascimento não informado.');
        document.getElementById('data_nasc').focus();
        return false;
    }
}