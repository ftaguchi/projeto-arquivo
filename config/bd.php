<?php

session_start();

// DADOS PARA CONEXÃO COM BANCO DE DADOS MYSQL
$hostname = "localhost";
$bancodedados = "arquivo";
$usuario = "root";
$senha = "";
$conexao = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
if (!$conexao) {
    echo '<div style="width:400px;margin:0 auto;text-align:center">Erro na conexão com o banco de dados, procure o administrador do sistema</div>';
    exit();
}
