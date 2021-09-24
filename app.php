<?php

//error_reporting(0);

require_once 'config/bd.php';
require_once 'autoload.php';

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Cuiaba');

?>

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
  <script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <title>Prefeitura de Rondonópolis - Gestão de Certificados</title>

</head>

<body>

  <div class="backgroundEscuro"></div>

  <div class="load">
    <i class="fa fa-cog fa-spin fa-3x"></i>
    <span class="sr-only">Loading...</span>
  </div>


  <?php include_once './pg/menu-topo.php'; ?>

  <main>

    <?php

    if (isset($_GET['p'])) {
      require_once $_GET['p'];
    } else {
      require_once 'pg/home.php';
    }

    mysqli_close($conexao);

    ?>

  </main>

  <footer></footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="./vendor//twbs/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="./js/jquery.validate.min.js"></script>
  <script src="./js/additional-methods.min.js"></script>
  <script src="./js/localization/messages_pt_BR.min.js"></script>
  <script src="./js/jquery.mask.min.js"></script>
  <script src="./js/holder.min.js"></script>
  <script src="./js/localfilereader.js"></script>
  <script src="./js/mask.js"></script>
  <script src="./js/jquery.maskMoney.min.js"></script>

  <script src="./vendor/snapappointments/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

  <script>
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
      setTimeout(function() {
        var msg = document.getElementsByClassName("tempo-alerta");
        while (msg.length > 0) {
          msg[0].parentNode.removeChild(msg[0]);
        }
      }, 2500);
    })
  </script>

  <script>
    $(document).ready(function() {
      $(".backgroundEscuro").fadeOut("slow");
      $(".load").fadeOut("slow");
    });
  </script>


  <script>
    $("#reset").on("click", function() {
      $('#cursosativos[] option').prop('selected', function() {
        return this.defaultSelected;
      });
    });
  </script>

</body>

</html>