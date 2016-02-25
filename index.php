<?php
    setcookie('nome', '', time()-3600*24);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = trim(filter_input(INPUT_POST, 'nome'));
        if (empty($nome)) {
            $error = 'Nome é obrigatório';
        } else {
            require('config/config.php');
            $chat = new Chat();
            $chat ->setNome($nome);
            if ($chat->exiteNome()) {
                $error = 'Já existe alguem usando esse nome';
            } else {
                setcookie('nome',$chat->getNome(),time()+3600*24*TEMPO_LIMITE);
                header('Location:chatindex.php');
            }
        }
    }

?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Chat Radio</title>
        <link rel="stylesheet" href="plugins/css/bootstrap.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/font-awesome.css">
    </head>
        <body>
            <div class="container">
                <div class="row text-center ">
                    <div class="col-md-12">
                        <br /><br />
                        <h2 class="tx-cabecalho"> Radio despertai povos </h2>
                        <br />
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong> Entre no chat </strong>
                                <?php
                                if (isset($error)) {
                                    echo('<p class="error" id="error"></p>'.$error);
                                }
                                ?>
                            </div>

                            <div class="panel-body">

                                <form action="" method="post" id="frm-login">
                                    <?php
                                        if (isset($_COOKIE['nome'])) {
                                            echo ' <a href="chatindex.php">Caso deseja usar o mesmo nome click aqui.</a>';
                                        }
                                    ?>

                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do usuário. " />
                                    </div>
                                    <input type="submit" class="btn btn-success btn-block"  id="login" value="Entrar"/>
                                </form>
                            </div>
                            <hr />

                        </div>

                    </div>
                </div>

            </div>
        </body>
</html>