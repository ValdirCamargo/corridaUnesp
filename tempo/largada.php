<?php require "../settings/restricted.php"; ?>
<?php require "../settings/connection.php"; ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
     <title>Controle de Largada</title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
     <?php include "../include/favicon.php" ?>
</head>
<body class="menu">

<center>
    <?php
    $insere = "update corredores set largada = now() ";
    $executaLargada = $conn -> prepare($insere);
    $executaLargada -> execute();

    header("Location: ../include/menu.php");
    ?>

</center>

<script src="javaScript/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="javaScript/bootstrap.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>