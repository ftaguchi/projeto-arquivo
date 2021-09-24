<?php
$id = (int) $_GET['idDocumento'];

unset($_SESSION['acao']);
$_SESSION['acao'] = 'editar';
$_SESSION['id'] = $id;

$consulta = mysqli_query($conexao, "SELECT d.id, d.pasta, d.cpf, d.genitor, d.armario, d.gaveta, d.prateleira FROM tb_documento d WHERE d.id = $id");
$documento = mysqli_fetch_assoc($consulta);

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
                    <a href="javascript:history.back()" class="link"><i class="fas fa-reply"></i> Voltar</a> &nbsp;
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1 style="font-weight:bold">[ Editar documento ]</h1>
                    <hr>
                </div>
            </div>

            <div class="row"></div>

            <form id="form" name="form" action="?p=controller/documento.php" method="post" enctype="multipart/form-data">

                <div class="form-row"></div>

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="pFuncional">Pasta Funcional</label>
                        <input type="text" class="form-control text-uppercase" id="pFuncional" name="pFuncional" value="<?= $documento['pasta']; ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control text-uppercase cpf-mask" id="cpf" name="cpf" value="<?= $documento['cpf']; ?>" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="genitor">Genitor(a)</label>
                        <input type="text" class="form-control text-uppercase" id="genitor" name="genitor" value="<?= $documento['genitor']; ?>" required>
                    </div>
                </div>

                <?php
                    $armario = $documento['armario'];
                    $gaveta = $documento['gaveta'];
                    $prateleira = $documento['prateleira'];
                ?>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="armario">Armário</label>
                        <br>
                        <input type="radio" name="armario" id="armario" value="01" onCLick="limparP();"
                        <?php echo ($armario=="01")? "checked" : null;?>>
                        <label class="text-uppercase" > Armário 01</label>
                        <br>
                        <input type="radio" name="armario" id="armario" value="02" onCLick="limparP();"
                        <?php echo ($armario=="02")? "checked" : null;?>>
                        <label class="text-uppercase"> Armário 02</label>
                        <br>
                        <input type="radio" name="armario" id="armario" value="03" onCLick="limparP();"
                        <?php echo ($armario=="03")? "checked" : null;?>>
                        <label class="text-uppercase"> Armário 03</label>
                        <br>
                        <input type="radio" name="armario" id="armario" value="04" onCLick="limparP();"
                        <?php echo ($armario=="04")? "checked" : null;?>>
                        <label class="text-uppercase"> Armário 04</label>
                        <br>
                        <input type="radio" name="armario" id="armario" value="05" onCLick="limparP();"
                        <?php echo ($armario=="05")? "checked" : null;?>>
                        <label class="text-uppercase"> Armário 05</label>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="gaveta">Gaveta</label>
                        <br>
                        <input type="radio" name="gaveta" id="gaveta" value="01" onCLick="limparP();"
                        <?php echo ($gaveta=="01")? "checked" : null;?>>
                        <label class="text-uppercase" > Gaveta 01</label>
                        <br>
                        <input type="radio" name="gaveta" id="gaveta" value="02" onCLick="limparP();"
                        <?php echo ($gaveta=="02")? "checked" : null;?>>
                        <label class="text-uppercase" > Gaveta 02</label>
                        <br>
                        <input type="radio" name="gaveta" id="gaveta" value="03" onCLick="limparP();"
                        <?php echo ($gaveta=="03")? "checked" : null;?>>
                        <label class="text-uppercase" > Gaveta 03</label>
                        <br>
                        <input type="radio" name="gaveta" id="gaveta" value="04" onCLick="limparP();"
                        <?php echo ($gaveta=="04")? "checked" : null;?>>
                        <label class="text-uppercase" > Gaveta 04</label>
                        <br>
                        <input type="radio" name="gaveta" id="gaveta" value="05" onCLick="limparP();"
                        <?php echo ($gaveta=="05")? "checked" : null;?>>
                        <label class="text-uppercase" > Gaveta 05</label>
                        <br>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="prateleira">Prateleira</label>
                        <br>
                        <input type="radio" name="prateleira" id="prateleira" value="01" onCLick="limparAG();"
                        <?php echo ($prateleira=="01")? "checked" : null;?>>
                        <label class="text-uppercase" > Prateleira 01</label>
                        <br>
                        <input type="radio" name="prateleira" id="prateleira" value="02" onCLick="limparAG();"
                        <?php echo ($prateleira=="02")? "checked" : null;?>>
                        <label class="text-uppercase" > Prateleira 02</label>
                        <br>
                        <input type="radio" name="prateleira" id="prateleira" value="03" onCLick="limparAG();"
                        <?php echo ($prateleira=="03")? "checked" : null;?>>
                        <label class="text-uppercase" > Prateleira 03</label>
                        <br>
                        <input type="radio" name="prateleira" id="prateleira" value="04" onCLick="limparAG();"
                        <?php echo ($prateleira=="04")? "checked" : null;?>>
                        <label class="text-uppercase" > Prateleira 04</label>
                        <br>
                        <input type="radio" name="prateleira" id="prateleira" value="05" onCLick="limparAG();"
                        <?php echo ($prateleira=="05")? "checked" : null;?>>
                        <label class="text-uppercase" > Prateleira 05</label>
                    </div>
                </div>

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