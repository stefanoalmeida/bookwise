<?php

class Livro {
    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $imagem;

    public $usuario_id;

    public function query($where, $params) {
        $database = new DB(config('database'));
    
        return $database->query("select * from livros where $where", self::class, $params);
    }

    public static function findById($id) {
        return (new self)->query('id = :id', ['id' => $id])->fetch();
    }

    public static function findAll($filtro) {
        return (new self)->query('titulo like :filtro', ['filtro' => "%$filtro%"])->fetchAll();
    }

    public static function getMyBooks($usuario_id) {
        return (new self)->query('usuario_id = :usuario_id', ['usuario_id' => $usuario_id])->fetchAll();
    }
}

