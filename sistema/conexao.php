<?php
$banco = 'barbearia';
$usuario = 'root';
$senha = '';
$servidor = 'localhost';




try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} catch (Exception $e) {
    echo 'Não conectado ao banco de dados! <br><br>' .$e;
}

//variaveis do sistema
$nome_sistema = "High Beauty Salon";
$email_sistema = "contato@gmail.com";
?>