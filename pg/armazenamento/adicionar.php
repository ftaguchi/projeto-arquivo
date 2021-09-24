<?php

unset($_SESSION['acao']);
$_SESSION['acao'] = 'adicionar';

?>

<script type="text/javascript">
    window.onload = function() {
        CKEDITOR.replace('cont');
    };

    function limparAG() {
        document.getElementById("numeroP").disabled=true;
        document.getElementById("localP").disabled=true;
        document.getElementById("numeroA").disabled=false;
        document.getElementById("gaveta").disabled=false;
        document.getElementById("localA").disabled=false;
    }

    function limparP() {
        document.getElementById("numeroA").disabled=true;
        document.getElementById("gaveta").disabled=true;
        document.getElementById("localA").disabled=true;
        document.getElementById("numeroP").disabled=false;
        document.getElementById("localP").disabled=false;
    }

</script>

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
                        <li class="breadcrumb-item active" aria-current="page">Armazenamento</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-4 ml-auto text-right inline text-muted">
                    <a href="?p=pg/documento/index.php" class="link"><i class="fas fa-reply"></i> Voltar</a> &nbsp;
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1 style="font-weight:bold">[ Novo armazenamento ]</h1>
                    <hr>
                </div>
            </div>

            <div class="row"></div>
            <form id="form" name="form" action="?p=controller/armazenamento.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="prateleira">Selecione o tipo do armazenamento:</label>
                        <br>
                        <input type="radio" name="armazenamento" value="01" onClick="limparAG();" />
                        <label class="text-uppercase">Armário</label>
                        <br>
                        <input type="radio" name="armazenamento" value="02" onClick="limparP();" />
                        <label class="text-uppercase">Prateleira</label>
                        <br>      
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="pFuncional">Prateleira (Número)</label>
                        <input type="text" class="form-control text-uppercase" id="numeroP" name="numeroP" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="cpf">Local</label>
                        <input type="text" class="form-control text-uppercase" id="localP" name="localP" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="pFuncional">Armário (Número)</label>
                        <input type="text" class="form-control text-uppercase" id="numeroA" name="numeroA" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="pFuncional">Quantidade de Gavetas</label>
                        <input type="text" class="form-control text-uppercase" id="gaveta" name="gaveta" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="cpf">Local</label>
                        <input type="text" class="form-control text-uppercase" id="localA" name="localA" required>
                    </div>
                </div>
                            
                <div class="form-group col-md-6">
                         <button id="add" name="add" type="submit" class="btn btn-success btn-block" style="width:150px;float:right">Salvar</button> &nbsp;&nbsp;
                    </div>
                </div>
                <hr>
                <br>
                <hr>
                <br>
            </form>
        </div>



    </div>

</div>

</div>