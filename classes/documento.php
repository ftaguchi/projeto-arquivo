<?php

namespace documentos;

class Documento
{
    public function cadastrar($pasta, $cpf, $genitor, $armario, $gaveta, $prateleira, $criacao)
    {
        $query = mysqli_prepare($conexao, " INSERT INTO curso VALUES (?, ?, ?, ?, ?, ?, CURRENT_TIME() )";
        mysqli_stmt_bind_param($query, $pasta, $cpf, $genitor, $armario, $gaveta, $prateleira,CURRENT_TIME() );
        mysqli_stmt_execute($query);
    }
}
