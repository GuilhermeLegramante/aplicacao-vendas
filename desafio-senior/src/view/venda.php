<?php

$doc = time();

session_start();
if (!isset($_SESSION['vendedor'])) {
    header("location: login.php");
    exit;
} else

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nova Venda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../../js/jsTabela.js"></script>
</head>

<div class="container">
    <h1>Nova Venda</h1>
    <h3>Olá, <?php echo $_SESSION['nome']; ?></h3>
    <a href="sair.php">
        <h5>Sair</h5>
    </a>
</div>

<body>
    <form id="fProduto">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <input type="hidden" name="doc" value="<?php echo $doc; ?>">
                    <h4>Venda atual: <?php echo $doc; ?></h4>
                </div>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="codigo" placeholder="Código Produto">
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="buscar" value="Buscar" onclick="return enviaCodProduto();">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="container">
        <div class="table-responsive">
            <h2>Lista de Produtos</h2>
            <table class="table table-hover" id="tbProdutos">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    </br></br>

    <div class="container">
        <div class="col-sm=2">

            <div class="col-sm-1">
                <input type="submit" class="btn btn-default" value="Cancelar" onclick="javascript:window.location.reload()">
            </div>

            <form name="fConfirma" id="fConfirma" method="post" action="../controller/VendaController.php">
                <div class="col-sm-1">
                    <input type="hidden" name="doc_2" value="<?php echo $doc; ?>">
                    <input type="submit" class="btn btn-primary" value="Confirmar Venda">
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="modal_botao_confirmar" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>



    <script>
        $('#modal_botao_confirmar').on('hidden.bs.modal', function() {
            location.reload();
        })

        $("#fConfirma").submit(function(e) {

            var url = "../controller/VendaController.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $("#fConfirma").serialize(),
                success: function(data) {

                    $(".modal-title").text('Request successful');
                    $('#modal_botao_confirmar').modal('show');
                },
                error: function(data) {

                    $(".modal-title").text('Request failed');
                    $('#modal_botao_confirmar').modal('show');
                }
            }).done(function() {

                $(".modal-title").text('');
                $(".modal-body").text('Venda confirmada!');
            });

            e.preventDefault();
        });
    </script>





</body>

</html>