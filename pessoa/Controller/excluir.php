<?php
require $_SERVER['DOCUMENT_ROOT'].'/formulario/vendor/autoload.php';
include __DIR__.'/../Model/Pessoa.php';

use \Pessoa\Model\Pessoa;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location: ../../index.php?status=error');
    exit;
}

$id = $_GET['id'];

$objPessoa = Pessoa::getPessoa($_GET['id']);

if(!$objPessoa instanceof Pessoa) {
    header('location: ../../index.php?=status=error');
    exit;
}

if($id > 0) {
    $objPessoa->excluir();
    header('location: ../../index.php?status=success');
    exit;
}