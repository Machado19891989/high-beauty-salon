<?php 
@session_start();
@require_once('verificar.php');
@require_once('../conexao.php');
echo @$_SESSION['nome'].'<br>';
echo @$_SESSION['nivel'];

?>
<br><br>
<a href="logout.php">Sair</a>