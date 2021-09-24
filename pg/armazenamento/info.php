<?php
$id = (int) $_GET['id'];
$_SESSION['id'] = $id;
$consulta = mysqli_query($conexao, "SELECT d.id, d.pasta, d.cpf, d.genitor, d.armario, d.gaveta, d.prateleira, d.criacao FROM tb_documento d WHERE d.id = $id");
$documento = mysqli_fetch_assoc($consulta);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row text-right">
                <div class="col">
                </div>
            </div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./app.php" class="link">Home</a></li>
                        <li class="breadcrumb-item"><a href="?p=pg/documento/index.php" class="link">Documentos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Informações do documento</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-6 ml-auto text-right inline text-muted">
                    <a href="?p=pg/documento/editar.php&idDocumento=<?= $documento['id']; ?>" class="link" data-toggle="tooltip" data-placement="top" title="Editar informações do curso"><i class="far fa-edit pl-5 f-16"></i> Editar</a>
                    <a href="?p=pg/documento/index.php" class="link"><i class="fas fa-reply pl-5 f-16"></i> Voltar</a> &nbsp;
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h5 class="text-muted" style="margin-bottom:-2px">Pasta Funcional</h5>
                    <h3 style="font-weight:bold;"><?= mb_strtoupper($documento['pasta']); ?></h3>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h4 style="font-weight:bold"> <i class="fas fa-chevron-right f-20 mr-3"></i>Informações Gerais</h4>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-5">
            
                    <div class="col-12 mb-2">
                        <div class="row">
                            <div class="col-1 align-self-center"><i class="far fa-address-card fa-2x"></i></div>
                            <div class="col-11" style="line-height:18px;color:#666">
                                CPF<br>
                                <b><?= $documento['cpf']; ?></b>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-2">
                        <div class="row">
                            <div class="col-1 align-self-center"><i class="fas fa-user-alt fa-2x"></i></div>
                            <div class="col-11" style="line-height:18px;color:#666">
                                Genitor(a)<br>
                                <b><?= $documento['genitor']; ?></b>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-2">
                        <div class="row">
                            <div class="col-1 align-self-center"><i class="far fa-folder fa-2x"></i></div>
                            <div class="col-11" style="line-height:18px;color:#666">
                                Armário<br>
                                <b><?= strtoupper($documento['armario']); ?></b>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-2">
                        <div class="row">
                            <div class="col-1 align-self-center"><i class="far fa-folder-open fa-2x"></i></div>
                            <div class="col-11" style="line-height:18px;color:#666">
                                Gaveta<br>
                                <b><?= strtoupper($documento['gaveta']); ?></b>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-2">
                        <div class="row">
                            <div class="col-1 align-self-center"><i class="fas fa-folder-open fa-2x"></i></div>
                            <div class="col-11" style="line-height:18px;color:#666">
                                Prateleira<br>
                                <b><?= strtoupper($documento['prateleira']); ?></b>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
</div>