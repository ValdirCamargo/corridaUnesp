<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>

</body>
</html>
<?php
    include "../settings/connection.php";

    $nPeito    = $_POST['nPeito'];
    $nome      = $_POST['nome'];
    $sexo      = $_POST['sexo'];
    $categoria = $_POST['categoria'];





        $verificaID = "SELECT IDcorredores FROM corredores WHERE IDcorredores = $nPeito";
        $executaID = $conn -> prepare($verificaID);
        $executaID -> execute();

        $verificaCorredor = "SELECT nome FROM corredores WHERE nome = '$nome'";
        $executaCorredor = $conn -> prepare($verificaCorredor);
        $executaCorredor -> execute();

        $contarID = $executaID -> rowCount();
        $contarUser = $executaCorredor -> rowCount();

        if($contarID > 0) {?>
           <center> <div class="alert alert-danger">O ID que você digitou já consta no banco de dados</div></center>
           <meta HTTP-EQUIV='refresh' CONTENT='2;URL=cadastro.php'>
        <? }
        else if ($contarUser > 0) {?>
           <center> <div class="alert alert-danger">O Nome do Corredor que você digitou já consta no banco de dados</div></center>
           <meta HTTP-EQUIV='refresh' CONTENT='2;URL=cadastro.php'>
        <?}
        else {

            $insereBanco = "INSERT INTO corredores (IDcorredores, nome, categoria, sexo, data, situacao)
                            VALUES(:IDcorredores, :nome, :categoria, :sexo, now(), :situacao)";


            $executaInsere = $conn -> prepare($insereBanco);
            $executaInsere -> bindValue(':IDcorredores', $nPeito, PDO::PARAM_STR);
            $executaInsere -> bindValue(':nome', $nome, PDO::PARAM_STR);
            $executaInsere -> bindValue(':categoria', $categoria, PDO::PARAM_STR);
            $executaInsere -> bindValue(':sexo', $sexo, PDO::PARAM_STR);
            $executaInsere -> bindValue(':situacao', '1', PDO::PARAM_STR);
            $executaInsere -> execute();

            mysql_error();


            if($executaCorredor) { ?>
                <center><div class="alert alert-success">Corredor Incluido com sucesso!</div></center>
                <meta HTTP-EQUIV='refresh' CONTENT='2;URL=cadastro.php'>
            <?}
        }




?>