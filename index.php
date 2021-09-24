<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.ico" />
  <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./vendor/components/font-awesome/css/all.css">
  <link rel="stylesheet" href="./css/dashboard.css">
  <link rel="stylesheet" href="./vendor/snapappointments/bootstrap-select/dist/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="./css/signin.css">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <title>Prefeitura de Rondonópolis - Arquivo Municipal</title>

</head>

<body>

    <div class="container" style="margin-top:-150px">

        <div class="row text-center">

            <div class="col-md-12">
                <img class="mb-4" src="./img/logo_abertura.jpg" alt="logo prefeitura secretaria educacao" width="400">
                <br><br><br><br>
                <form class="form-signin" action="./config/verifica.php" method="post">
                    <hr>

                    <div class="form-group">
                        <label for="inputEmail" class="sr-only">Usuário</label>
                        <input type="text" id="login" name="login" class="form-control" placeholder="Usu&aacute;rio" required autofocus>
                        <label for="inputPassword" class="sr-only">Senha</label>
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                    </div>
                    <br>

                    <?php include './captcha.php'; ?>

                    <br><br>
                    <button class="btn btn-lg btn-primary" type="submit">Entrar</button>
                </form>
            </div>

        </div>

        <div class="footer">
            <hr>
            <div class="row text-center">
                <div class="col-md-12">
                    Secretaria Municipal de Ciência, Tecnologia e Inovação (SECITI)<br>&copy; 2020<br><br>
                </div>
                </div>
            </div>
        </div>

    </div>

    <!-- reCaptcha Google -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>