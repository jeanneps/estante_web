<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/configs/conexao.php';

class livros {
public $id_livro;
public $titulo;
public $autor;
public $sinopse;
public $categoria;
public $capa;



public function cadastrarLivros()
{
    try {
        $conn = Conexao::conectar();
        $sql = 'INSERT INTO livros (titulo, autor, sinopse, categoria, capa) VALUES (:titulo, :autor, :sinopse, :categoria, :capa)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':autor', $this->autor);
        $stmt->bindValue(':sinopse', $this->sinopse);
        $stmt->bindValue(':categoria', $this->categoria);
        $stmt->bindValue(':capa', $this->capa);

        $stmt->execute();
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}


static function mostrarLivros()
{
    try {
        $conn = Conexao::conectar();
        $sql = 'SELECT titulo, capa FROM livros' ;
        $stmt = $conn->prepare($sql);

        $stmt->execute();

        return $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}


static function selecionarLivro($id_livro)
{
    try {
        $conn = Conexao::conectar();
        $sql = 'SELECT * FROM livros WHERE id_livro = :id';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id_livro);

        $stmt->execute();

        $resultado = $stmt->fetch();
       
        return $resultado;

    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}
}
