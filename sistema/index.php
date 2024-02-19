<?php
require_once("conexao.php");
//inserir usuario adm caso não tenha
$senha = '123';
$senha_crip = md5($senha);

$query = $pdo->query("SELECT * from usuarios where nivel = 'Administrador'");
$res = $query->fetchALL(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if ($total_reg == 0) {
    echo 'Tem mais registros' . $total_reg;
}

$pdo->query("INSERT INTO usuarios SET nome = 'Bruno Machado', email = '$email_sistema', cpf='000-000-000-00', senha = '$senha', senha_crip = '$senha_crip', nivel = 'Administrador', data = curDate(), ativo = 'Sim'")

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/login-css.css">
    <link rel="stylesheet" type="text/css" href="css/login-css2.css">
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />-->
    <script src="js/javascript.js"></script>
    <script src="js/javascript2.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <title>Faça seu login</title>
</head>

<body>
    <div>
        <h1><?php echo $nome_sistema; ?></h1>

    </div><br>    <div class="voltar">
        <a href="http://localhost/high-beauty-salon/index.php"><!--editar-->
        <button>Voltar ao inicio.</button>
    </a>
    </div><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <img class="login-entrar" src="img/login.png" alt="" width="70px" height="60px" >
                    <div class="d-flex justify-content-end social_icon">
                        <span><a href=""><img class="social" src="img/face.png" alt="Facebook"></a></span>
                        <span><a href=""><img class="social" src="img/insta.png" alt="Instagram"></a></span>
                        <span><a href=""><img class="social" src="img/whats.png" alt="Whatsapp"></a></span>
                        <span><a href=""><img class="social" src="img/youtube.png" alt="Youtube" width: 50px; height="50px"></a></span>
                    </div>
                </div>
                <div class="card-body">
                    <form accept-charset="UTF-8" role="form" action="autenticar.php" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="img/pessoa-login-2.png" alt=""></span>
                            </div>
                            <input type="text" class="form-control" placeholder="E-mail ou CPF" name="email">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">&#128273;</span>
                            </div>
                            <input type="password" class="form-control" placeholder="senha" name="senha">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Conectar-se" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Não tem conta?<a href="#">Inscrever-se</a>
                    </div>
                    <!--link modal-->
                    <div class="d-flex justify-content-center">
                        <a title="Clique para recuperar a sua senha" href="#" data-toggle="modal" data-target="#myModal">Esqueceu a senha?</a>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

</body>

</html>

<!--Modal-->
<div id="myModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Recuperar senha.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post">
                <div class="modal-body">

                    <input placeholder="Digite seu e-mail para recuperar sua senha" type="email" class="form-control" name="email" required>
                    <div id="msg-recuperar"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Salvar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </form>
        </div>
    </div>
</div>