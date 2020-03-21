<?php

class Database
{

    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        try {
            $pdo = new PDO("mysql:dbname=" . $nome . ";host=" . $host, $usuario, $senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }

    public function logar($usuario, $senha)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :u AND senha = :s");
        $sql->bindValue(":u", $usuario);
        $sql->bindValue(":s", $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch();
            session_start();
            if ($dados['tipo'] == '2') {
                $_SESSION['administrador'] = $dados['id_usuario'];
                $_SESSION['nome'] = $dados['nome'];
            } else if ($dados['tipo'] == '1') {
                $_SESSION['vendedor'] = $dados['id_usuario'];
                $_SESSION['nome'] = $dados['nome'];
            }

            return true; // logado com sucesso

        } else {
            return false; // não logou
        }
    }

    public function inserir($tabela)
    { 

    }
}
