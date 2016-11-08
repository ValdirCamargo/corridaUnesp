<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>Autenticação de Usuário</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/customizado.css" rel="stylesheet">
    <?php include "include/favicon.php" ?>
</head>
<body>
	<center>
        <div class="login panel panel-default">
            <div class="login-titulo panel-heading">
            	<h3 class="panel-title">Insira seus dados de usuário para acessar o software!</h3>
            </div>
            <div class="panel-body">
            	<div class="campos-login">
                	<form method="post" action="settings/userAuthent.php">
                        <input type="text" class="form-control" name="login" placeholder="Login">
                        <input type="password" class="form-control" name="senha" placeholder="Senha">
                        <input type="submit" class="button-acessar btn btn-default" value="Acessar"/>
                	</form>
                </div>
            </div>
        </div>
    </center>
    <script src="javaScript/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="javaScript/bootstrap.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>