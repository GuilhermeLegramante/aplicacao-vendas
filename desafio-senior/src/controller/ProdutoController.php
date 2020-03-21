<?php

require_once '../../src/dao/Database.php';
require_once '../../src/dao/DAOProduto.php';
require_once '../../src/dao/DAODocumento.php';
require_once '../../src/dao/DAOItem.php';
require_once '../../src/model/Produto.php';


class ProdutoController
{
    private $daoProduto;

    public function salvar()
    {
        if (isset($_POST['descricao'])) {

            $descricao = addslashes($_POST['descricao']);
            $preco = addslashes($_POST['preco']);

            $daoProduto = new DAOProduto();
            $daoProduto->create($descricao, $preco);

            header("location: ../view/produtoCadastrado.php");
        } else {
            return false;
        }
    }

    public function buscarProduto($codigo)
    {
        $daoProduto = new DAOProduto();

        $produto = $daoProduto->retrieve($codigo);

        return $produto;
    }

    public function buscarPrecoProduto($codigo)
    {
        $daoProduto = new DAOProduto();

        $produto = $daoProduto->retrieve($codigo);

        return $produto->getPreco();
    }

    public function criarDocumento($doc)
    {
        $daoDocumento = new DAODocumento();
        $daoDocumento->create($doc, 0);
    }

    public function criarItem($produto, $documento)
    {
        $daoItem = new DAOItem();
        $daoItem->create($produto, $documento);
    }

    public function recuperaProduto($id)
    {
        $daoProduto = new DAOProduto();
        $produto = $daoProduto->retrieve($id);
        return $produto;
    }

}

$produtoController = new ProdutoController();
$produtoController->salvar();

if (isset($_POST['codigo']) && isset($_POST['doc'])) {
    $doc = $_POST['doc'];
    $cod_prod = addslashes($_POST['codigo']);

    $produtoController->criarDocumento($doc);
    $produtoController->criarItem($cod_prod, $doc);

    $precoProduto = $produtoController->buscarPrecoProduto($cod_prod);

    $daoDocumento = new DAODocumento();
    $daoDocumento->inserirValorVenda($doc, $precoProduto);
    
}

if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];

    $produto = $produtoController->buscarProduto($codigo);

    $descricao = $produto->getDescricao();
    $preco = $produto->getPreco();
    $codigo = $produto->getCodigo();

    $dados = $codigo . "," . $descricao . "," . $preco;

    print_r(json_encode($dados));
}
