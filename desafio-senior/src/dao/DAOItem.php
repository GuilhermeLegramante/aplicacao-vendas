<?php

require_once 'Database.php';
require_once 'DAOGenerica.php';

class DAOItem implements DAOGenerica
{

 
    /**
     * Cria um item.
     */
    function create($produto, $documento)
    {
        global $pdo;

        $database = new Database();
        $database->conectar("senior", "localhost", "root", "");
        
        try {
            $stmt = $pdo->prepare("INSERT INTO `item` (`produto`, `documento`) VALUES (:produto, :documento)");
            $stmt->bindValue(":produto", $produto);
            $stmt->bindValue(":documento", $documento);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

            return false;
        }
    }

    /**
     * Busca o item pelo código.
     */
    function retrieve($codigo)
    {
        return null;

    }

    /**
     * Edita o item.
     */
    function update($id)
    {
        return null;
    }

    /**
     * Exclui o item.
     */
    function delete($id)
    {
        return null;
    }
}
