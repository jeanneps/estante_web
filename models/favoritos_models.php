<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/configs/conexao.php';


class Favorito {
   public $id_favorito;
   public $id_usuario;
   public $id_livro;

    public function adicionarFavorito($id_usuario, $id_livro) {
        try {
        $sql = "INSERT INTO Favoritos (id_usuario, id_livro) VALUES (:id_usuario, :id_livro)";
        $stmt = $this-> $conn->prepare($sql);
        $stmt->bindValue(':id_usuario', $this->$id_usuario);
        $stmt->bindValue(':id_livro', $this->$id_livro);
        $stmt->execute();
    }   catch (PDOException $erro) {
        echo $erro->getMessage();
    }
    public function removerFavorito($id_usuario, $id_livro) {
        try {
        $sql = "DELETE FROM Favoritos WHERE id_usuario = :id_usuario AND id_livro = :id_livro";
        $stmt = $this->$conn->prepare($sql);
        $stmt->bindValue(':id_usuario', $this->$id_usuario);
        $stmt->bindValue(':id_livro', $this->$id_livro);
        $stmt->execute();
        
        }    catch (PDOException $erro) {
          echo $erro->getMessage();
        }
     }



      public function listarFavoritos($id_usuario) {
         try {
        $sql = "SELECT * FROM Favoritos WHERE id_usuario = :id_usuario";
        $stmt = $this->$conn->prepare($sql);
        $stmt->bindValue(':id_usuario', $this-> $id_usuario);
        $stmt->execute();
        $stmt->fetchAll(PDO::FETCH_ASSOC);

         }catch (PDOException $erro) {
         echo $erro->getMessage();
    }
    }

}
}

