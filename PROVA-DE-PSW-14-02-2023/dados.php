<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <title>Resutado do Formulario</title>
</head>

<body>
  <h1 class="titlo">Personal Tek:</h1>


  <?php    
  $empresa = $_POST['empresa'];
  echo "<span><h2>Razáo Social da empresa:</h2><h3>$empresa</h3></span>";
  ?>
   

  <table>
    <tbody>

    <?php

    // Recebendo as informações do formulário de contato


    $CNPJCPF = $_POST['CNPJ/CPF'];
    $Nome = $_POST['Nome'];
    $Email = $_POST['E-mail'];
    $Telefone = $_POST['Telefone'];
    $Endereço = $_POST['Endereço'];
    $numero = $_POST['numero'];
    $Bairro = $_POST['Bairro'];
    $CEP = $_POST['CEP'];
    $Cidade = $_POST['Cidade'];
    $Estado = $_POST['Estado'];
    $representante = $_POST['representante'];
    $Cargo = $_POST['Cargo'];
    $início = $_POST['início'];
    $término = $_POST['término'];
    $Cursos = $_POST['Cursos'];
    $Carga = $_POST['Carga'];

    // Exibindo as informações para o usuário


    echo "<tr><td><b>CNPJ/CPF:</b></b></td><td> $CNPJCPF </td></tr>";

    echo "<tr><td><b>Nome fantasia:</b></td><td> $Nome </td></tr>";

    echo "<tr><td><b>E-mail:</b></td><td> $Email </td></tr>";

    echo "<tr><td><b>Telefone:</b></td><td> $Telefone </td></tr>";

    echo "<tr><td><b>Endereço:</b></td><td> $Endereço </td></tr>";

    echo "<tr><td><b>N°:</b></td><td> $numero </td></tr>";
    
    echo "<tr><td><b>Bairro:</b></td><td> $Bairro </td></tr>";

    echo "<tr><td><b>CEP:</b></td><td> $CEP </td></tr>";

    echo "<tr><td><b>Cidade:</b></td><td> $Cidade </td></tr>";

    echo "<tr><td><b>Estado:</b></td><td> $Estado </td></tr>";

    echo "<tr><td><b>Nome do representante legal da empresa:</b></td><td> $representante </td></tr>";

    echo "<tr><td><b>Cargo do representante legal da empresa:</b></td><td> $Cargo </td></tr>";

    echo "<tr><td><b>Data de início do convénio:</b></td><td> $início </td></tr>";

    echo "<tr><td><b>Data de término do convénio:</b></td><td> $término </td></tr>";

    echo "<tr><td><b>Cursos permitidos para estágio:</b></td><td> $Cursos </td></tr>";
    
    echo "<tr><td><b>Carga horária diária máxima disponibilizada:</b></td><td> $Carga </td></tr>";

    ?>

</body>

</html>