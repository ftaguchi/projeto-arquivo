<?php

unset($_POST["basic-addon2"]);
if (!empty(array_filter($_POST))) {
    $key = $_POST['campo-pesquisa'];
    $complemento = "AND pasta LIKE '%$key%' OR genitor LIKE '%$key%'";
} else {
    $complemento = "";
}

$consulta = mysqli_query($conexao, "SELECT d.id, d.pasta, d.cpf, d.genitor, d.armario, d.gaveta, d.prateleira, d.criacao FROM tb_documento d WHERE d.id>=1 $complemento ORDER BY d.id");
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
                        <li class="breadcrumb-item active" aria-current="page">Documento </li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-4 ml-auto text-right text-muted d-flex justify-content-end">
                    <a href="?p=pg/documento/adicionar.php" class="link inline"><i class="fas fa-plus"></i> Adicionar</a> &nbsp;&nbsp;&nbsp;
                    <div class="dropdown">
                        <a href="?p=pg/documento/editar" class="link dropdown-toggle" id="pesquisa" data-toggle="dropdown"><i class="fas fa-search"></i> Pesquisar</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-sem-borda" aria-labelledby="pesquisa">
                            <form action="?p=pg/documento/index.php" method="post">
                                <div class="input-group" style="width:350px">
                                    <input id="campo-pesquisa" name="campo-pesquisa" type="text" class="form-control" placeholder="Informe o nome" aria-label="" aria-describedby="basic-addon2" style="font-size:13px">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text" id="basic-addon2" name="basic-addon2"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1 style="font-weight:bold">[ Documentos ]</h1>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pasta Funcional</th>
                                <th scope="col" class="text-center">Armário</th>
                                <th scope="col" class="text-center">Gaveta</th>
                                <th scope="col" class="text-center">Prateleira</th>
                                <th scope="col" class="text-center">CPF</th>
                                <th scope="col" class="text-center">Genitora</th>
                                <th scope="col" class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            while ($linha = mysqli_fetch_assoc($consulta)) {
                                
                                if ($linha['armario']>0){
                                    $linha['armario']=$linha['armario'];
                                }else{
                                    $linha['armario']="";
                                }

                                if ($linha['gaveta']>0){
                                    $linha['gaveta']=$linha['gaveta'];
                                }else{
                                    $linha['gaveta']="";
                                }

                                if ($linha['prateleira']>0){
                                    $linha['prateleira']=$linha['prateleira'];
                                }else{
                                    $linha['prateleira']="";
                                }

                                echo '<tr>
                                            <td scope="col">'.$linha['id'].'</td>
                                            <td><span style="font-size:13px;font-weight:500;color:#4d4d4d">' . mb_strtoupper($linha['pasta']) . '</span></td>
                                            <td class="text-center">'.$linha['armario'].'</td>
                                            <td class="text-center">'.$linha['gaveta'].'</td>
                                            <td class="text-center">'.$linha['prateleira'].'</td>
                                            <td class="text-center">'.$linha['cpf'].'</td>
                                            <td class="text-center">'.$linha['genitor'].'</td>
                                            <td class="text-center">
                                                <a href="?p=pg/documento/info.php&id=' . $linha['id'] . '" class="link" data-toggle="tooltip" data-placement="top" title="Visualizar informações do documento"><i class="far far fa-folder-open pl-3 f-18"></i></a>
                                            </td>
                                        </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>