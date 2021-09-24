<?php

if ($_SESSION['acao'] == 'adicionar') {

    $pasta = $_POST['pFuncional'];
    $cpf = $_POST['cpf'];
    $genitor = $_POST['genitor'];
    $armario = $_POST['armario'];
    $gaveta = $_POST['gaveta'];
    $prateleira = $_POST['prateleira'];

    $stmt = mysqli_prepare($conexao, "INSERT INTO tb_documento (pasta, cpf, genitor, armario, gaveta, prateleira, criacao) VALUES (?, ?, ?, ?, ?, ?, CURRENT_TIME())");
    mysqli_stmt_bind_param($stmt, "sssiii", $pasta, $cpf, $genitor, $armario, $gaveta, $prateleira);
    $resultado = mysqli_stmt_execute($stmt);

    if ($resultado) {
        header("Location:?p=pg/documento/index.php");
    } else {
        header("Location:?p=pg/documento/adicionar.php&erro");
    }
}

if ($_SESSION['acao'] == 'editar') {

    $idDocumento = $_SESSION['id'];
    $pasta = $_POST['pFuncional'];
    $cpf = $_POST['cpf'];
    $genitor = $_POST['genitor'];
    $armario = $_POST['armario'];
    $gaveta = $_POST['gaveta'];
    $prateleira = $_POST['prateleira'];

    $resultado = mysqli_query($conexao, "UPDATE tb_documento SET pasta = '$pasta', cpf = '$cpf', genitor = '$genitor', armario = '$armario', gaveta = '$gaveta', prateleira = '$prateleira' WHERE id = $idDocumento");
    if ($resultado) {
        header("Location:?p=pg/documento/index.php");
    } else {
        header("Location:?p=pg/documento/adicionar.php&erro");
    }

    unset($_SESSION['id']);

}
