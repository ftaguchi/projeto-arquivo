<?php
    $counter = mysqli_query($conexao, "SELECT COUNT(*) AS id FROM tb_documento");
    $num = mysqli_fetch_array($counter);
    $count = $num["id"];

    $arquivo = mysqli_query($conexao, "SELECT COUNT(*) AS id FROM tb_documento WHERE criacao = CURDATE()");
    $res = mysqli_fetch_array($arquivo);
    $resultado = $res["id"];
?>

<div class="container">

    <div class="row">

        <div class="col-md-12">


            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 border-bottom">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="link">Home</a></li>
                    </ol>
                </nav>
            </div>

            <br>
            <div class="col-md-12">

                <div class="row mx-auto d-flex justify-content-left">

                    <div class="card-dashboard card-stats shadow-sm ml-4 bg-white rounded" style="float:left;width: 16.4rem; border:1px solid #ccc">
                        <div class="card-body">
                            <div class="row text-left">
                                <div class="col">
                                    <h6 class="card-title text-uppercase text-muted mb-0 text-right" style="float:right"><b>Documentos</b><br><small>cadastrados</small></h6>
                                    <div style="clear:both"></div>
                                    <i class="fa fa-book fa-5x" style="margin:-22px 0 0 0; float:left;color:#ddd"></i>
                                    <span id="acompanhamentosAtivos" class="h2 font-weight-bold mb-0 number" style="font-size:45px;color:gray;float:right">
                                       <?php echo $count; ?>
                                    </span>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-dashboard card-stats shadow-sm ml-4 bg-white rounded" style="float:left;width: 16.4rem; border:1px solid #ccc">
                        <div class="card-body">
                            <div class="row text-left">
                                <div class="col">
                                    <h6 class="card-title text-uppercase text-muted mb-0 text-right" style="float:right"><b>Documentos</b><br><small>arquivados hoje</small></h6>
                                    <div style="clear:both"></div>
                                    <i class="fa fa-book fa-5x" style="margin:-22px 0 0 0; float:left;color:#ddd"></i>
                                    <span id="acompanhamentosAtivos" class="h2 font-weight-bold mb-0 number" style="font-size:45px;color:gray;float:right">
                                       <?php echo $resultado; ?>
                                    </span>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>