<?php
namespace Pessoa\Model;

include __DIR__.'/../../app/Database/Database.php';

use \App\Database\Database;
use \PDO;

class Pessoa{
    public $id;
    public $nome;
    public $email;
    public $idade;
    public $genero;
    public $data_nasc;

    public function cadastrar() {
        $bd = new Database('pessoa');
        $this->id = $bd -> insert([
            'nome' => $this->nome,
            'email' => $this->email,
            'idade' => $this->idade,
            'genero' => $this->genero,
            'data_nasc' => $this->data_nasc
        ]);

        return true;
    }

    public function atualizar() {
        return (new Database('pessoa'))->update('id = '.$this->id, [
                                                'nome' => $this->nome,
                                                'email' => $this->email,
                                                'idade' => $this->idade,
                                                'genero' => $this->genero,
                                                'data_nasc' => $this->data_nasc
        ]);
    }

    public function excluir() {
        return (new Database('pessoa'))->delete('id = '.$this->id);
    }

    public static function getPessoas($where = null, $order = null, $limit = null) {
        return (new Database('pessoa'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getPessoa($id) {
        return (new Database('pessoa'))->select('id = '.$id)->fetchObject(self::class);
    }
}