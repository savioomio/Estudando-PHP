<?php

error_reporting(E_ALL);

ini_set("display_errors", 1);

include_once("savio-post-dados.php");

if (!empty($_POST['form_submit'])) {
    obterDados($_POST);
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo-post</title>
</head>

<body>
    <form style="background-color:yellow" class="form" method="post" action="index.php">

        <p> FORMULÁRIO EXEMPLO POST</p>
        <p> cpf: <input type="radio" value="Sávio" name="cpf" placeholder="Digite seu cpf" required /> </p>
        <p> nome: <input type="radio" value="jdhkdhjsf"  name="nome" placeholder="Digite seu nome" required /> </p>
        <input type="hidden" name="form_submit" value="OK">
        <br><br>

        <button type="submit" class="btn">
            <b>Obter Dados Post</b>
        </button>


</body>

</html>