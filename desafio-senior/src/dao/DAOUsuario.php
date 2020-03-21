<?php

require_once 'Database.php';
require_once '../model/Usuario.php';
require_once 'DAOGenerica.php';

class DAOUsuario implements DAOGenerica
{

    private $usuario;

    function conectar($usuario, $senha)
    {
        $database = new Database();

        $database->conectar("senior", "localhost", "root", "");
        if ($database->msgErro == "") {
            if ($database->logar($usuario, md5($senha))) {
                header("location: ../../src/controller/UsuarioController.php");
            } else {
                echo "Email e/ou Senha incorretos.";
            }
        } else {

            echo "Erro: " . $database->msgErro;
        }
    }



    /**
     * Cria um usuário.
     */
    function create($usuario, $senha)
    {

        return null;
    }

    /**
     * Busca o usuário pelo ID.
     */
    function retrieve($id)
    {
        return null;
    }

    /**
     * Edita o usuário.
     */
    function update($id)
    {
        return null;
    }

    /**
     * Exclui o usuário.
     */
    function delete($id)
    {
        return null;
    }
}
