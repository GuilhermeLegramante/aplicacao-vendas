<?php

require_once '../../src/dao/Database.php';
require_once '../../src/dao/DAODocumento.php';
require_once '../../src/dao/DAOItem.php';
require_once '../../src/model/Venda.php';


class VendaController
{
    private $daoDocumento;
    private $daoItem;

    public function buscarTotalVendasConfirmadas()
    {
        $daoDocumento = new DAODocumento();
        $total = $daoDocumento->buscarTotalVendasConfirmadas(); 
        return $total;
    }

}

$vendaController = new VendaController();
$total = $vendaController->buscarTotalVendasConfirmadas();

session_start();
$_SESSION['total'] = $total;

header("location: ../view/totalVendas.php");