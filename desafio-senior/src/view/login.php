<!DOCTYPE html>
<html>



<head>
  <title>Cadastro de Produto</title>

  <meta name="description" content="Página de Login - aplicação controle de vendas.">
  <meta name="keywords" content="senior sistemas, aplicação web, cadastro de produto, controle de vendas">
  <meta name="robots" content="">
  <meta name="revisit-after" content="7 day">
  <meta name="language" content="Portuguese">
  <meta name="generator" content="N/A">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../../css/login.css">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">

</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">

      <div class="fadeIn first">
        <img src="../../img/logo-verde.png" id="icon" alt="User Icon" />
      </div>

      <form method="post" action="../../src/controller/UsuarioController.php">
        <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="usuário">

        <input type="password" class="fadeIn third" name="senha" placeholder="senha">

        <input type="submit" class="fadeIn fourth" value="Entrar">
      </form>

    </div>
  </div>

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>