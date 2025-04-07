<?php
header('Access-Control-Allow-Origin: *');
require __DIR__.'/vendor/autoload.php';
include __DIR__.'/pessoa/Model/Pessoa.php';

use \Pessoa\Model\Pessoa;

$objPessoa = Pessoa::getPessoas();

include __DIR__.'/includes/header.php';
include __DIR__.'/pessoa/View/listagem.php';
include __DIR__.'/includes/footer.php';