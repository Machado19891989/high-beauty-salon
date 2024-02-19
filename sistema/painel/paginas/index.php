<?php
@session_start();
require_once("../verificar.php");
require_once("../high-beauty-salon/sistema/conexao.php");

$id_usuario = $_SESSION['id'];

$query = $pdo->query("SELECT * from usuarios where id = ''$id_usuario'");
$res = $query->fetchALL(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0) {
    $nome_usuario = $res[0]['nome'];
    $email_sistema = $res[0]['email'];
    $cpf_usuario = $res[0]['cpf'];
    $senha_usuario = $res[0]['senha'];
    $nivel_usuario = $res[0]['nivel'];
    $telefone_usuario = $res[0]['relefone'];
    $endereco_usuario = $res[0]['telefone'];
    $foto_usuario = $res[0]['foto'];
}