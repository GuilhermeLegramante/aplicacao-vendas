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
    <title>Painel Administrativo</title>

    <meta name="description" content="Página Painel Administrativo - aplicação controle de vendas.">
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
        <div class="logo"><a href="#">Painel Administrativo</div>
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
                    <h2>Olá, <?php echo $_SESSION['nome']; ?> </h2>
                    <p> Acesse as funcionalidades abaixo</p>
                    </br>
                    <div class="row uniform">
                        <div class="12u$">
                            <ul class="actions">
                                <li><a href="cadastro.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar Produto</a></li>
                                <li><a href="../controller/DocumentoController.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Ver Total Vendido</a></li>
                            </ul>
                        </div>
                    </div>

                    </br>

                    <a href="sair.php">
                        <h5>Sair</h5>
                    </a>
                </header>
            </section>
    </section>

    <!-- Footer -->
    <footer id="footer">


    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/jquery.poptrox.min.js"></script>
    <script src="../../js/skel.min.js"></script>
    <script src="../../js/util.js"></script>
    <script src="../../js/main.js"></script>

</body>

</html>