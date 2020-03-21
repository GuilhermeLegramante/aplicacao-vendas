<?php

require_once '../../src/dao/Database.php';
require_once '../../src/dao/DAODocumento.php';
require_once '../../src/dao/DAOItem.php';
require_once '../../src/model/Venda.php';


class VendaController
{
    private $daoDocumento;
    private $daoItem;

    public function confirmarVenda()
    {
        $doc = $_POST['doc_2'];
        $daoDocumento = new DAODocumento();
        return $daoDocumento->confirmarVenda($doc);
    }

}

$vendaController = new VendaController();

if ($vendaController->confirmarVenda()) {
    echo "Venda Confirmada";
}

