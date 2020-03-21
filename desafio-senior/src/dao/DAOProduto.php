<?php

require_once 'Database.php';
require_once '../../src/model/Produto.php';
require_once 'DAOGenerica.php';

class DAOProduto implements DAOGenerica
{

    private $produto;
    private $database;


    /**
     * Cria um produto.
     */
    function create($descricao, $preco)
    {
        $this->produto = new Produto();
        $this->produto->setDescricao($descricao);
        $this->produto->setPreco($preco);

        global $pdo;

        $database = new Database();

        $database->conectar("senior", "localhost", "root", "");

        try {
            $stmt = $pdo->prepare("INSERT INTO produto (descricao, preco) VALUES(:descricao, :preco)");
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":preco", $preco);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

            return false;
        }
    }

    /**
     * Busca o produto pelo código.
     */
    function retrieve($codigo)
    {
        global $pdo;

        $database = new Database();

        $database->conectar("senior", "localhost", "root", "");

        try {
            $stmt = $pdo->prepare("SELECT * FROM produto WHERE codigo = :c");
            $stmt->bindValue(":c", $codigo);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $dados = $stmt->fetch();
                $produto = new Produto();
                $produto->setDescricao($dados['descricao']);
                $produto->setPreco($dados['preco']);
                $produto->setCodigo($dados['codigo']);
                
                return $produto;
            } else {
                return false;
            }


            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

            return false;
        }

    }

    /**
     * Edita o produto.
     */
    function update($id)
    {
        return null;
    }

    /**
     * Exclui o produto.
     */
    function delete($id)
    {
        return null;
    }
}
