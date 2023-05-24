<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

$usuarios = filter_input(INPUT_POST, 'palavra');

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM tabela_de_treinos2 WHERE name  LIKE '$usuarios%'";
$resultado_user = mysqli_query($conn, $result_user);

if (($resultado_user) and ($resultado_user->num_rows != 0)) {
	// Verificando se a consulta retornou resultados
	if (mysqli_num_rows($resultado_user) > 0) {
		// Exibindo os resultados
		while ($row = mysqli_fetch_assoc($resultado_user)) {
			echo "<li>ID: " . $row["id"] . " - Nome: " . $row["name"] . " - Dia_da_semana: " . $row["dia_semana"] . " - Nome_do_treino: " . $row["nome_treino"] . "<br></li>";
		}
	} else {
		echo "Nenhum resultado encontrado";
	}
} else {
	echo "Nenhum usuário encontrado ...";
}
