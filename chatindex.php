<?php
    include('auth.php');
    require('config/config.php');
    $chat = new Chat();
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Chat Radio</title>
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="plugins/css/bootstrap.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/font-awesome.css">

        <script type="text/javascript" src="js/chat.js"></script>
    </head>
        <body>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        &nbsp;
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-primary"  ng-controller="ChatController">
                                    <div class="panel-heading" style="padding:0 0 0 8px;">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <h6 class="panel-title" style="display:inline;">Chat</h6>
                                        <div class="btn-group btn-group-xs pull-right">
                                            <a href="index.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></button></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-body" id="painel" style="padding:0 4px;">
                                        <div class="row">
                                            <div class="col-xs-12" style="max-height:100px;max-width:100%;overflow-y:auto;overflow-x:hidden;">
                                                <table class="table table-hover table-condensed" style="">

                                                    <tr ng-show="chatMessages.length === 0">
                                                        <td>
                                                           <?php
                                                           foreach($chat->listar() as $v) {
                                                               $ativo = ($v['nome'] == $_COOKIE['nome']) ? 'class="ativo"' :'';
                                                               printf('<p  %s> [%s] - [%s]</p>', $ativo, $v['nome'], $v['mensagem']);
                                                           }

                                                           ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <form action="" method="post">
                                            <div class="input-group input-group-sm">
                                                <input type="text" name="mensagem" id="mensagem" checked class="form-control"  placeholder="..."/>
                                                    <span class="input-group-btn">
                                                      <input type="button" id="submit" value="Enviar" class="btn btn-success"/>
                                                    </span>

                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>

        </body>
</html>