<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teste_pesquisa";

// Criando conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checando conexão
if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}


if (isset($_POST['search'])) {
  $search_term = $_POST['search'];
  $search_dia = $_POST['search_dia'];

  // Preparando a consulta SQL
  if (!empty($search_dia)) {
    $sql = "SELECT * FROM tabela_de_treinos2 WHERE name LIKE '$search_term%' AND (dia_semana LIKE '%$search_dia%' OR '$search_dia' = '')";
  } else {
    $sql = "SELECT * FROM tabela_de_treinos2 WHERE name LIKE '$search_term%'";

  }

  // Executando a consulta SQL
  $result = mysqli_query($conn, $sql);

  // Verificando se a consulta retornou resultados
  if (mysqli_num_rows($result) > 0) {
    // Exibindo os resultados
    while ($row = mysqli_fetch_assoc($result)) {
      echo "ID: " . $row["id"] . " - Nome: " . $row["name"] . " - Dia_da_semana: " . $row["dia_semana"] . " - Nome_do_treino: " . $row["nome_treino"] . "<br>";
    }
  } else {
    echo "Nenhum resultado encontrado";
  }
}

mysqli_close($conn);

?>

<!-- HTML com o formulário de pesquisa -->
<form method="post">
  <input type="search" name="search" placeholder="Digite um nome de usuário...">
  <div class="dia">
    <select name="search_dia">
      <option value="">Todos os dias da semana</option>
      <option value="Segunda">Segunda-feira</option>
      <option value="Terça">Terça-feira</option>
      <option value="Quarta">Quarta-feira</option>
      <option value="Quinta">Quinta-feira</option>
      <option value="Sexta">Sexta-feira</option>
      <option value="Sábado">Sábado</option>
    </select>
    <button type="submit">Pesquisar</button>
  </div>
</form>
