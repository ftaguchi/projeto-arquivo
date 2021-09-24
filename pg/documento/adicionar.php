<?php

unset($_SESSION['acao']);
$_SESSION['acao'] = 'adicionar';

?>

<script type="text/javascript">
    window.onload = function() {
        CKEDITOR.replace('cont');
    };

    function limparAG() {
        var gavetas = document.querySelectorAll("input[name=gaveta]");
        var armarios = document.querySelectorAll("input[name=armario]");
        for (var i = 0; i < gavetas.length; i++){
            gavetas[i].checked = false;
            armarios[i].checked = false;
        }

    }

    function limparP() {
        var prateleiras = document.querySelectorAll("input[name=prateleira]");
         for (var i = 0; i < prateleiras.length; i++){
            prateleiras[i].checked = false;
        }
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
                        <li class="breadcrumb-item active" aria-current="page">Documentos</li>
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
                    <h1 style="font-weight:bold">[ Novo documento ]</h1>
                    <hr>
                </div>
            </div>

            <div class="row"></div>

            <form id="form" name="form" action="?p=controller/documento.php" method="post" enctype="multipart/form-data">

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="pFuncional">Pasta Funcional</label>
                        <input type="text" class="form-control text-uppercase" id="pFuncional" name="pFuncional" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control text-uppercase cpf-mask" id="cpf" name="cpf" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="genitor">Genitor(a)</label>
                        <input type="text" class="form-control text-uppercase" id="genitor" name="genitor" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="armario">Armário</label>
                        <br>
                        <input type="hidden" name="armario" value="00" selected />
                        <input type="radio" name="armario" value="01" onCLick="limparP();" />
                        <label class="text-uppercase" > Armário 01</label>
                        <br>
                        <input type="radio" name="armario" value="02" onCLick="limparP();" />
                        <label class="text-uppercase"> Armário 02</label>
                        <br>
                        <input type="radio" name="armario" value="03" onCLick="limparP();" />
                        <label class="text-uppercase"> Armário 03</label>
                        <br>
                        <input type="radio" name="armario" value="04" onCLick="limparP();" />
                        <label class="text-uppercase"> Armário 04</label>
                        <br>
                        <input type="radio" name="armario" value="05" onCLick="limparP();" />
                        <label class="text-uppercase"> Armário 05</label>
                    </div>

                    <div class="form-group col-md-4">
                    <label>Prateleira</label>
                        <br>
                        <input type="hidden" name="gaveta" value="00" selected />
                        <input type="radio" name="gaveta" value="01" onCLick="limparP();" />
                        <label class="text-uppercase"> Gaveta 01</label>
                        <br>
                        <input type="radio" name="gaveta" value="02" onCLick="limparP();" />
                        <label class="text-uppercase"> Gaveta 02</label>
                        <br>
                        <input type="radio" name="gaveta" value="03" onCLick="limparP();"/>
                        <label class="text-uppercase"> Gaveta 03</label>
                        <br>
                        <input type="radio" name="gaveta" value="04" onCLick="limparP();" />
                        <label class="text-uppercase"> Gaveta 04</label>
                        <br>
                        <input type="radio" name="gaveta" value="05" onCLick="limparP();" />
                        <label class="text-uppercase"> Gaveta 05</label>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="prateleira">Prateleira</label>
                        <br>
                        <input type="hidden" name="prateleira" value="00" selected />
                        <input type="radio" name="prateleira" value="01" onCLick="limparAG();" />
                        <label class="text-uppercase"> Prateleira 01</label>
                        <br>
                        <input type="radio" name="prateleira" value="02" onCLick="limparAG();" />
                        <label class="text-uppercase"> Prateleira 02</label>
                        <br>
                        <input type="radio" name="prateleira" value="03" onCLick="limparAG();" />
                        <label class="text-uppercase"> Prateleira 03</label>
                        <br>
                        <input type="radio" name="prateleira" value="04" onCLick="limparAG();" />
                        <label class="text-uppercase"> Prateleira 04</label>
                        <br>
                        <input type="radio" name="prateleira" value="05" onCLick="limparAG();" />
                        <label class="text-uppercase"> Prateleira 05</label>             
                    </div>
                </div>

                <hr>
                <br>
                <hr>

                <br>

                <div class="row text-right">

                    <div class="col-12">
                        <button id="add" name="add" type="submit" class="btn btn-success btn-block" style="width:150px;float:right">Salvar</button> &nbsp;&nbsp;
                    </div>
                </div>
            </form>
        </div>



    </div>

</div>

</div>