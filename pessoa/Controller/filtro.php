<?php
require $_SERVER['DOCUMENT_ROOT'].'/formulario/vendor/autoload.php';

use \Pessoa\Model\Pessoa;

if(isset($_POST['filtro'])) {
    $opcaoSlct = htmlspecialchars($_POST['filtro']);

    switch($opcaoSlct) {
        case 'nome':
            $objPessoa = Pessoa::getPessoas($where = null, $order = 'nome');
            break;
        case 'idade':
            $objPessoa = Pessoa::getPessoas($where = null, $order = 'idade');
            break;
        case 'genero-m':
            $objPessoa = Pessoa::getPessoas($where = 'genero = "M"', $order = 'nome');
            break;
        case 'genero-f':
            $objPessoa = Pessoa::getPessoas($where = 'genero = "F"', $order = 'nome');
            break;
        default:
            $objPessoa = Pessoa::getPessoas();
            break;
    }
}