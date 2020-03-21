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
    <title>Total Vendas Confirmadas</title>

    <meta name="description" content="Página Total Vendas Confirmadas - aplicação controle de vendas.">
    <meta name="keywords" content="senior sistemas, aplicação web, cadastro de produto, controle de vendas">
    <meta name="robots" content="">
    <meta name="revisit-after" content="7 day">
    <meta name="language" content="Portuguese">
    <meta name="generator" content="N/A">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="../../css/main.css">

</head>

<body>

    <!-- Header -->
    <header id="header">
        <div class="logo"><a href="#">Total de Vendas Confirmadas</div>
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
                    <h2>Valor Total: R$ <?php echo $_SESSION['total']; ?></h2>
                    </br>
                    <a href="painelAdministrativo.php">
                        <h5>Voltar ao Painel Administrativo</h5>
                    </a>
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