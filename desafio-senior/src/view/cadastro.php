<?php
session_start();
if (!isset($_SESSION['administrador'])) {
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Cadastro de Produto</title>

    <meta name="description" content="Página Cadastro de Produto - aplicação controle de vendas.">
    <meta name="keywords" content="senior sistemas, aplicação web, cadastro de produto, controle de vendas">
    <meta name="robots" content="">
    <meta name="revisit-after" content="7 day">
    <meta name="language" content="Portuguese">
    <meta name="generator" content="N/A">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../../css/main.css">

</head>

<body>

    <!-- Header -->
    <header id="header">
        <div class="logo"><a href="#">Cadastro de Produto</div>
    </header>

    <!-- Main -->
    <section id="main">
        <div class="inner">
            <!-- One -->
            <section id="one" class="wrapper style1">

                <div class="image fit flush">
                    <img src="images/pic02.jpg" alt="" />
                </div>
                <header class="special">
                    <h2>Novo Produto</h2>
                    <p>Olá, <?php echo $_SESSION['nome']; ?>
                    </p>
                    </br>
                    <a href="painelAdministrativo.php">
                        <h5>Voltar ao Painel Administrativo</h5>
                    </a>
                    <a href="sair.php">
                        <h5>Sair</h5>
                    </a>
                </header>
                <div class="content">
                    <div class="inner">
                        <h3>Descrição</h3>
                        <form name="ajaxform" id="ajaxform" method="post" action="../controller/ProdutoController.php">
                            <div class="row uniform">
                                <!-- Break -->
                                <div class="12u$">
                                    <textarea name="descricao" id="message" placeholder="Descrição do produto" rows="6" required></textarea>
                                </div>
                                <!-- Break -->
                                <h3>Preço</h3>
                                <div class="6u 12u$(xsmall)">
                                    <input type="number" name="preco" id="name" value="" placeholder="Preço" required/>
                                </div>
                                <div class="12u$">
                                    <ul class="actions">
                                        <li><input type="submit" value="Cancelar" onclick="javascript:window.location.reload()" /></li>
                                        <li><input type="submit" value="Salvar" class="button special" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </section>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">

        </div>
        <div class="copyright">
            &copy; <a href="https://unsplash.com">Unsplash</a> Design <a href="https://templated.co">TEMPLATED</a>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        $("#ajaxform").submit(function(e) {

            var url = "../controller/ProdutoController.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $("#ajaxform").serialize(),
                success: function(data) {
                    alert("Produto salvo com sucesso!");

                },
                error: function(data) {
                    alert("Erro no cadastro!");
                }
            }).done(function() {
                window.location.reload();
            });

            e.preventDefault();
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/jquery.poptrox.min.js"></script>
    <script src="../../js/skel.min.js"></script>
    <script src="../../js/util.js"></script>
    <script src="../../js/main.js"></script>

</body>

</html>