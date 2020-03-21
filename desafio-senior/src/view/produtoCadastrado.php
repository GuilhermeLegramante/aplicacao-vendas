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
    <meta charset="utf-8" />
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
                    <h2>Produto cadastrado com sucesso!</h2>
                    
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
        <div class="container">

        </div>
        <div class="copyright">
            &copy; <a href="https://unsplash.com">Unsplash</a> Design <a href="https://templated.co">TEMPLATED</a>
        </div>
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