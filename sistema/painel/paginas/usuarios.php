<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="usuarios-css.css">
    <title>Usuarios</title>
</head>
<body>
    

<?php
@session_start();
require_once('../verificar.php');
require_once('../conexao.php');

$pag = 'usuarios';
?>

<div class="">
    <a class="btn btn-primary" href="">Novo usuario</a>
</div>

<div class="bs-example widget-shadow" style="padding: 15px;" id="lister">

</div>



<!--modal inserir-->
<div class="modal fade" id="modalInserir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">
                    <span id="titulo_inserir"></span>
                </h4>
                <button id="btn-fechar-perfil" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" style="border-bottom: 1px solid #cac7c7;">
                    <div class="col-md-8">
                        <span><b>Email:</b></span>
                        <span id="email_dados"></span>
                    </div>
                    <div class="col-md-4">
                        <span><b>Senha:</b></span>
                        <span id="senha_dados"></span>
                    </div>
                </div>
                <div class="row" style="border-bottom: 1px solid #cac7c7;">
                    <div class="col-md-6">
                        <span><b>CPF:</b></span>
                        <span id="cpf_dados"></span>
                    </div>
                    <div class="row" style="border-bottom: 1px solid #cac7c7;">
                        <div class="col-md-6">
                            <span><b>Telefone:</b></span>
                            <span id="telefone_dados"></span>
                        </div>
                    </div>
                    <div>
                    <div class="row" style="border-bottom: 1px solid #cac7c7;">
                    <div class="col-md-4"></div>
                    <span><b>Nivel</b></span>
                    <span id="nivel_dados"></span>
                    </div>
                    <div class="col-md-3"></div>
                    <span><b>Ativo:</b></span>
                    <span id="ativo_dados"></span>
                </div>
                <div class="col-md-5">
                <span><b>Cadastro:</b></span>
                <span id="data_dados"></span>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid #cac7c7;">
            <div class="col-md-12">
            <span><b>Endereço:</b></span>
            <span id="endereco_dados"></span>
            </div>
            <div class="row">
            <div class="col-md-12">
            <img width="250px" id="target_mostrar">
            </div>
            </div>
            </div>
        </div>
        </div></div>
    </div></div>

</div></div></body>
</html>