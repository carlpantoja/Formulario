<?php
require $_SERVER['DOCUMENT_ROOT'].'/formulario/vendor/autoload.php';
include __DIR__.'/../Model/Pessoa.php';

use \Pessoa\Model\Pessoa;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location: ../../index.php?status=error');
    exit;
}

$objPessoa = Pessoa::getPessoa($_GET['id']);

if(!$objPessoa instanceof Pessoa) {
    header('location: ../../index.php?status=error');
    exit;
}

if(isset($_POST['nome'], $_POST['email'], $_POST['idade'], $_POST['genero'], $_POST['data_nasc'])) {
    $objPessoa->nome = $_POST['nome'];
    $objPessoa->email = $_POST['email'];
    $objPessoa->idade = $_POST['idade'];
    $objPessoa->genero = $_POST['genero'];
    $objPessoa->data_nasc = $_POST['data_nasc'];
    $objPessoa->atualizar();

    header('location: ../../index.php?status=success');
    exit;
}

include $_SERVER['DOCUMENT_ROOT'].'/formulario/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'].'/formulario/pessoa/View/formulario.php';
include $_SERVER['DOCUMENT_ROOT'].'/formulario/includes/footer.php';