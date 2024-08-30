<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/configs/conexao.php';
session_start();
class Auth
{

    static function login($email, $senha)
    {
        try {
            $conn = Conexao::conectar();


            $sql = 'SELECT * FROM usuarios WHERE email = :email';

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $email);

            $stmt->execute();

            $resultado = $stmt->fetch();

            if (!empty($resultado) && password_verify($senha, $resultado['senha'])) {
                $_SESSION['id_usuario'] = $resultado['id_usuario'];
                $_SESSION['email'] = $resultado['email'];
                $_SESSION['foto_perfil'] = $resultado['foto_perfil'];
                $_SESSION['nome'] = $resultado['nome'];



                header('Location: /jeane/estante_web/index.php');
                exit();
            } else {
                setcookie('aviso', 'Você errou o E-mail ou a Senha!!!', time() + 3600, '/jeane/estante_web/');
                header('Location: /jeane/estante_web/index.php');
                exit();
            }
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    static function logout()
    {
        session_unset();
        session_destroy();
        header('Location: /jeane/estante_web/index.php');
        exit();
    }

    static function estarLogado()
    {
        if (isset($_SESSION['usuario'])) {
            return true;
        }

        // if (isset($_SESSION['admin'])) {
        //     return true;
        // } else {
        //     return false;
        // }
    }
}
