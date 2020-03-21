<?php

require_once '../../src/dao/Database.php';
require_once '../../src/dao/DAOUsuario.php';


class UsuarioController
{

    private $daoUsuario;

    function logar()
    {
        if (isset($_POST['usuario'])) {
            $daoUsuario = new DAOUsuario();
            $usuario = addslashes($_POST['usuario']);
            $senha = addslashes($_POST['senha']);

            if (!empty($usuario) && !empty($senha)) {
                $daoUsuario->conectar($usuario, $senha);
            } else {
                echo "Preencha todos os campos!";
                return false;
            }
        } else {
            return true;
        }

        
    }

    function controlarAcesso()
    {
        session_start();
        if (isset($_SESSION['administrador'])) {
            header("location: ../../src/view/painelAdministrativo.php");
        } else if (isset($_SESSION['vendedor'])) {
            header("location: ../../src/view/venda.php");
        } else {
            header("location: ../../src/view/login.php");
            exit;
        }
    }
}

$controller = new UsuarioController();

if ($controller->logar()){
    $controller->controlarAcesso();
}

