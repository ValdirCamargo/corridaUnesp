<?php require "../settings/restricted.php"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>Menu de Acesso</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <?php include "favicon.php" ?>
</head>
<body class="menu">
	<center>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="jumbotron">
                    <h3>Software de Aferição de Tempo de Provas de Corrida - UNESP 2016</h3>
                    <div>

                        <div class="botoes">

                            <a href="#" class="thumbnail">
                                <span class="glyphicon glyphicon-user"></span>
                                Usuário
                            </a>
                            <a href="../corredores/cadastro.php" class="thumbnail">
                                <span class="glyphicon glyphicon-heart"></span>
                                Corredores
                            </a>
                            <a href="#" class="thumbnail">
                                <span class="glyphicon glyphicon-time"></span>
                                Aferição do Tempo
                            </a>
                            <a href="../tempo/largada.php" class="thumbnail">
                                <span class="glyphicon glyphicon-play"></span>
                                Controle de Largada
                            </a>
                            <a href="../settings/exit.php" class="btn btn-danger">
                                <span class="glyphicon glyphicon-time"></span>
                                Sair do Software
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>

    </center>
    <script src="javaScript/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="javaScript/bootstrap.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>