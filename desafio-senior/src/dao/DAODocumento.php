<?php

require_once 'Database.php';
require_once 'DAOGenerica.php';
require_once 'DAOProduto.php';

class DAODocumento implements DAOGenerica
{

    private $venda;
    private $database;

    /**
     * Cria um documento.
     */
    function create($numero, $confirmado)
    {
        global $pdo;

        $database = new Database();

        $database->conectar("senior", "localhost", "root", "");

        try {
            $stmt = $pdo->prepare("INSERT INTO `documento` (`numero`, `confirmado`) VALUES (:numero, :confirmado)");
            $stmt->bindValue(":numero", $numero);
            $stmt->bindValue(":confirmado", $confirmado);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

            return false;
        }
    }

    function confirmarVenda($doc)
    {
        global $pdo;

        $database = new Database();

        $database->conectar("senior", "localhost", "root", "");

        try {
            $stmt = $pdo->prepare("UPDATE `documento` SET `confirmado` = '1' WHERE `documento`.`numero` = :d");
            $stmt->bindValue(":d", $doc);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

            return false;
        }
    }

    function inserirValorVenda($doc, $valor)
    {
        $daoDocumento = new DAODocumento();
        $total = $daoDocumento->buscarValor($doc);
        $valorTotal = $total + $valor;

        global $pdo;

        $database = new Database();

        $database->conectar("senior", "localhost", "root", "");

        try {
            $stmt = $pdo->prepare("UPDATE `documento` SET `total` = :v WHERE `documento`.`numero` = :d");
            $stmt->bindValue(":d", $doc);
            $stmt->bindValue(":v", $valorTotal);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

            return false;
        }
    }

    function buscarTotalVendasConfirmadas()
    {
        global $pdo;

        $database = new Database();

        $database->conectar("senior", "localhost", "root", "");

        try {
            $stmt = $pdo->prepare("SELECT SUM(`total`) FROM `documento` WHERE `confirmado` = 1");
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $dados = $stmt->fetch();
                $total = $dados[0];
                return $total;
            } 
            
            return false;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

            return false;
        }
    }


    function buscarValor($numero)
    {
        global $pdo;

        $database = new Database();

        $database->conectar("senior", "localhost", "root", "");

        try {
            $stmt = $pdo->prepare("SELECT `total`FROM `documento` WHERE `documento`.`numero` = :d");
            $stmt->bindValue(":d", $numero);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $dados = $stmt->fetch();
                $total = $dados['total'];
                return $total;
            } 
            
            return false;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

            return false;
        }
    }



    /**
     * Busca o documento pelo código.
     */
    function retrieve($numero)
    {
        global $pdo;

        $database = new Database();

        $database->conectar("senior", "localhost", "root", "");

        try {
            $stmt = $pdo->prepare("SELECT * FROM documento WHERE numero = :n");
            $stmt->bindValue(":n", $numero);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $dados = $stmt->fetch();
                $documento = new Documento();
                $documento->setNumero($dados['numero']);
                $documento->setTotal($dados['total']);
                $documento->setConfirmado($dados['confirmado']);

                return $documento;
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
     * Edita o documento.
     */
    function update($id)
    {
        return null;
    }

    /**
     * Exclui o documento.
     */
    function delete($id)
    {
        return null;
    }
}
