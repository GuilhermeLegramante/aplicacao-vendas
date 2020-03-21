<!DOCTYPE html>
<html lang="en">

<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../../css/login.css">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
</body>

</html>