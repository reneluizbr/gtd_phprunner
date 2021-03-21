<?php
$wlExibirErros = 1;

// Rene: forma simples de depurar algo mostrando um alert() ou confirm() na pagina
//echo "<script>if (confirm('Do you want to print this record?')) location.href='cars_view.php?editid1=".$keys["ID"]."';</script>";
//echo "<script>alert('Sendo alterado/incluido por ID: " . $userID . ", {$userNome} - {$userEmail}');</script>";

// Rene:  Incluir dados iniciais do cliente (categorias, lista_atividades, atividades, categorias_x_atividades, status_atividades)
function fctCargaInicialUsuarioIncluido($wlNovo_usua_email) {
	// Passo 1) Busca alguns dados do usuario recem cadastrado
	if (1===1) {
		$sql = "select ";
		$sql.= "  usua_id, clie_id, usua_email, usua_username";
		$sql.= "  from tb_usuarios";
		$sql.= " where usua_email = '{$wlNovo_usua_email}'";
		$rsUsuario = DB::Query($sql);
		$dadosQuery = db_fetch_array($rsUsuario);
		//echo '<br><strong>Dados do Recorset como array():</strong><br>';
		// print_r($dadosQuery);
		//   retornou os campo da tela/página (Não tem o ID do usuário na pagina, recuperar pelo email):
		//     Array ( [usua_id] => 22 [clie_id] => 0 [usua_email] => rene20@gmail.com [usua_username] => rene20 )
	}

	// Passo 2) tb_clientes: Incluir um cliente para o usuario de exemplo
	if (1===1) {
		$wlDados = array();
		$wlUsua_id = $dadosQuery[usua_id];
		$wlUsua_username = $dadosQuery[usua_username];
		$wlUsua_email = $dadosQuery[usua_email];
		//$wlDados["clie_id"] = ???;  // No Insert o PK autoincremento pega um novo valor
		$wlDados['clie_nm_reduzido'] = GetCustomLabel("carga_inicial_cliente_nome") . ' ('.$wlUsua_username.')'; // 'Auto cadastrado' ; //. $wlClie_id;
		$wlDados["clie_email"] = $wlUsua_email;
		$wlDados["clie_pais"] = GetCustomLabel ('carga_inicial_cliente_pais');
		$wlDados["clie_endereco"] = GetCustomLabel('carga_inicial_cliente_endereco');
		$wlDados["clie_domi_status"] = 'CADASTRADO';
		$wlDados["clie_nm_completo"] = GetCustomLabel("carga_inicial_cliente_endereco_completo") . ': ' . $wlUsua_id
			. ", username: '{$wlUsua_username}'";
		//echo '<br><strong>Montando o Insert em Clientes:</strong><br>';
		//print_r($wlDados);

		$wlErroDB = "";
		DB::Insert("tb_clientes", $wlDados );
		$wlErroDB = DB::LastError();
	}

	// Se tiver ocorrido erro, exibe na pagina... APENAS DURANTE DEV!!! TODO: gravar um log e enviar email para o Admin
	if (($wlErroDB != 'not an error') && ($wlExibirErros == 1)) {
		echo "<hr>";
		echo '<br><br><strong><em>Resumo das mensagens de depuração:</em></strong>';
		echo '<br><br><strong>Montando o Insert em Clientes:</strong><br>';
		print_r($wlDados);

		echo '<br><br><strong>Dados do Recorset como array():</strong><br>';
		print_r($dadosQuery);

		echo '<br><br><strong>Último Erro DB::LastError:</strong><br>';
		echo $wlErroDB;
		echo "<hr>";
		return false;  // TODO: Testar melhor esta situação, gravar um log e enviar email para o Admin
	}
	// Busca o ID do Cliente recem incluido, que fica na tabela de controle "sqlite_sequence" do SQLite
	if (1===1) {
		$sql  = "select ";
		$sql .= "  seq AS Ultimo_ID_Gravado";
		$sql .= "  from sqlite_sequence";
		$sql .= " where name = 'tb_clientes'";
		$rsID = DB::Query($sql);  // retorna um RecorSet...
		$wlArr= db_fetch_array($rsID); // ... que deve ser convertido para um Array()...
		$wlClie_id = $wlArr['Ultimo_ID_Gravado'];  // ...opcionaLmente o valor pode ir para uma variavel
		if (($wlErroDB != 'not an error') && ($wlExibirErros == 1)) {
			echo '*** ERRO ***: ' . $wlErroDB;
			echo 'Ultimo_ID_Gravado que foi recuperado da base: ' . $wlClie_id;
		}
	}
	// Passo 3) tb_usuarios: Associar o usuario tb_usuarios.clie_id ao novo cliente incluido no passo 1
	if (1===1) {
		// Exemplo de Update do registro id=50 na tabela 'Cars'
		$wlDados = array();
		$wlDados["clie_id"] = $wlClie_id;
		DB::Update("tb_usuarios", $wlDados, "usua_id = " . $wlUsua_id );
		if (($wlErroDB != 'not an error') && ($wlExibirErros == 1)) {
			echo '*** ERRO ***: ' . $wlErroDB;
		}
	}
	// Passo 4) tb_categorias: Incluir alguns dados de exemplo
	if (1===1) {
		$wlErroDB = "";
		$wlDados = array();
		$wlDados["clie_id"] = $wlClie_id;
		$wlDados["cate_nm"] = GetCustomLabel('carga_inicial_categoria_1') . ' ('.$wlUsua_username.')';
		DB::Insert("tb_categorias", $wlDados );
		$wlDados["clie_id"] = $wlClie_id;
		$wlDados["cate_nm"] = GetCustomLabel('carga_inicial_categoria_2') . ' ('.$wlUsua_username.')';
		DB::Insert("tb_categorias", $wlDados );
		$wlErroDB = DB::LastError();
		if (($wlErroDB != 'not an error') && ($wlExibirErros == 1)) {
			echo '*** ERRO ***: ' . $wlErroDB;
		}
	}

	// Passo 5) tb_status_atividades: Incluir alguns dados de exemplo
	if (1===1) {
		$wlErroDB = "";
		$wlDados = array();
		$wlDados["clie_id"] = $wlClie_id;
		$wlDados["stat_nm"] = GetCustomLabel('carga_inicial_status_1') . ' ('.$wlUsua_username.')';
		$wlDados["stat_ds"] = GetCustomLabel('carga_inicial_status_1_detalhe');
		DB::Insert("tb_status_atividades", $wlDados );

		$wlDados["clie_id"] = $wlClie_id;
		$wlDados["stat_nm"] = GetCustomLabel('carga_inicial_status_2') . ' ('.$wlUsua_username.')';
		$wlDados["stat_ds"] = GetCustomLabel('carga_inicial_status_2_detalhe');
		DB::Insert("tb_status_atividades", $wlDados );

		$wlDados["clie_id"] = $wlClie_id;
		$wlDados["stat_nm"] = GetCustomLabel('carga_inicial_status_3') . ' ('.$wlUsua_username.')';
		$wlDados["stat_ds"] = GetCustomLabel('carga_inicial_status_3_detalhe');
		DB::Insert("tb_status_atividades", $wlDados );
		$wlErroDB = DB::LastError();
		if (($wlErroDB != 'not an error') && ($wlExibirErros == 1)) {
			echo '*** ERRO ***: ' . $wlErroDB;
		}
	}

	// Passo 6) tb_lista_atividades: Incluir alguns dados de exemplo
	if (1===1) {
		$wlErroDB = "";
		$wlDados = array();
		$wlDados["clie_id"] = $wlClie_id;
		$wlDados["lista_nm"] = GetCustomLabel('carga_inicial_lista_nome_1') . ' ('.$wlUsua_username.')';
		DB::Insert("tb_lista_atividades", $wlDados );

		$wlDados["clie_id"] = $wlClie_id;
		$wlDados["lista_nm"] = GetCustomLabel('carga_inicial_lista_nome_2') . ' ('.$wlUsua_username.')';
		DB::Insert("tb_lista_atividades", $wlDados );
		$wlErroDB = DB::LastError();
		if (($wlErroDB != 'not an error') && ($wlExibirErros == 1)) {
			echo '*** ERRO ***: ' . $wlErroDB;
		}
	}


	// Passo 7) tb_atividades: Incluir alguns dados de exemplo
	if (1===1) {
		$rs = DB::Query("select min(stat_id) from tb_status_atividades where clie_id = {$wlClie_id}");
		$wlDados = $rs->fetchNumeric();
		$wlStatusCadastrada = $wlDados[0];

		$rs = DB::Query("select min(lista_id) from tb_lista_atividades where clie_id = {$wlClie_id}");
		$wlDados = $rs->fetchNumeric();
		$wlListaLivro = $wlDados[0];

		$wlErroDB = "";
		$wlDados = array();
		$wlDados["clie_id"]     = $wlClie_id;
		$wlDados["stat_id"]     = $wlStatusCadastrada;
		$wlDados["ativ_nm"]     = GetCustomLabel("carga_inicial_ler_livro_1") . ' ('.$wlUsua_username.')';
		$wlDados["ativ_ds"]     = GetCustomLabel("carga_inicial_ler_livro_1_detalhe");
		$wlDados["lista_id"]    = $wlListaLivro ;
		$wlDados["ativ_dt_ini"] = strftime("%Y-%m-%d %H:%M:%S");
		DB::Insert("tb_atividade", $wlDados );

		$wlDados = array();
		$wlDados["clie_id"]     = $wlClie_id;
		$wlDados["stat_id"]     = $wlStatusCadastrada;
		$wlDados["ativ_nm"]     = GetCustomLabel("carga_inicial_ler_livro_2") . ' ('.$wlUsua_username.')';
		$wlDados["ativ_ds"]     = GetCustomLabel("carga_inicial_ler_livro_2_detalhe");
		$wlDados["lista_id"]    = $wlListaLivro ;
		$wlDados["ativ_dt_ini"] = strftime("%Y-%m-%d %H:%M:%S");
		DB::Insert("tb_atividade", $wlDados );
		if (($wlErroDB != 'not an error') && ($wlExibirErros == 1)) {
			echo '*** ERRO ***: ' . $wlErroDB;
		}
	}

	// Passo 8) tb_categorias_x_atividades: Incluir alguns dados de exemplo
	if (1===1) {
		$rs = DB::Query("select min(cate_id) from tb_categorias where clie_id = {$wlClie_id}");
		$wlDados = $rs->fetchNumeric();
		$wlCategoriaLivros = $wlDados[0];

		$rs = DB::Query("select ativ_id from tb_atividade where clie_id = {$wlClie_id}");
		while($wlRS_atividades = $rs->fetchNumeric() )
		{
			$wlAtivi_id = $wlRS_atividades[0];

			$wlDados = array();
			$wlDados["cate_id"]     = $wlCategoriaLivros;
			$wlDados["ativ_id"]     = $wlAtivi_id;
			DB::Insert("tb_categorias_x_atividades", $wlDados );
			if (($wlErroDB != 'not an error') && ($wlExibirErros == 1)) {
				echo '*** ERRO ***: ' . $wlErroDB;
			}
		}
	}

}

// Rene: Guarda dados de log antes de incluir um registro
function fctConfigura_Usuario( &$usuarioLogin = NULL, &$dataHoraAtual = NULL) {
//function fctConfigura_Usuario( &$usuarioID = 0, string &$dataHoraAtual = NULL) {
	// Rene: Busca dados do usuario logado
	$userDados = Security::currentUserData();
	$userNome  = $userDados['usua_username']; // $userDados['username'];
	$userEmail = $userDados['usua_email'];    // $userDados['fullname'];
	$userID    = $userDados['usua_id'];  //
	// $_SESSION["usuarioID"] = $userData[ID];  //

	// Retorna dados populados em variaveis por referencia
	$usuarioLogin = $userNome;
	$dataHoraAtual = strftime("%Y-%m-%d %H:%M:%S");  // Ex: '2020-05-19 19:19:19'

	// Para eventual depuracao
	//print_r($userDados);

	// Rene: forma simples de depurar algo mostrando um alert() ou confirm() na pagina
	//echo "<script>if (confirm('Do you want to print this record?')) location.href='cars_view.php?editid1=".$keys["ID"]."';</script>";
	//echo "<script>alert('Sendo alterado/incluido por ID: " . $userID . ", {$userNome} - {$userEmail}');</script>";
}


function fctApenasExemplosSQL () {
	/*
	// Exemplo de Select (returns record as array with numeric keys: 0 => value, 1=>value; )
	$rs = DB::Query("select * from carsmake");
	while( $data = $rs->fetchNumeric() )
	{
		echo $data[0];
		echo $data[1];
	}

	// Exemplo de Insert
	$data = array();
	$data["make"] = $oldvalues["make"];
	$data["model"] = $oldvalues["model"];
	$data["price"] = $oldvalues["price"];
	DB::Insert("copy_of_cars", $data );

	// Exemplo de Update do registro id=50 na tabela 'Cars'
	$data = array();
	$keyvalues = array();
	$data["make"] = "Toyota";
	$data["model"]  = "RAV4";
	$data["price"] = 16000;
	$keyvalues["id"] = 50;
	DB::Update("cars", $data, $keyvalues );
	DB::Update("cars", $data, "id=50" );


	// Exemplo de Delete
	$data = array();
	$data["id"] = 50;
	DB::Delete("cars", $data );

	// Sintaxe mais simples
	DB::Delete("cars", "id=50" );
*/
}

function fctStringsCarga() {
/* Strings de Carga Inicial:
	PORTUGUES:
		carga_inicial_cliente_nome: "Cliente"
		carga_inicial_cliente_pais: "A_definir"
		carga_inicial_cliente_endereco: "Cadastrado pela Internet"
		carga_inicial_cliente_endereco_completo: "Cadastrado pelo usuário ID"
		carga_inicial_categoria_1: "Livros"
		carga_inicial_categoria_2: "Pessoal"
		carga_inicial_status_1 : "Cadastrada"
		carga_inicial_status_1_detalhe : "Tarefa apenas cadastrada mas não iniciada"
		carga_inicial_status_2 : "Em Andamento"
		carga_inicial_status_2_detalhe : "Tarefa que já foi iniciada e está em andamento"
		carga_inicial_status_3 : "Concluída"
		carga_inicial_status_3_detalhe : "Tarefa que já foi concluída"
		carga_inicial_lista_nome_1: "Livros a serem lidos neste ano"
		carga_inicial_lista_nome_2: "Manutenções do meu carro"
		carga_inicial_ler_livro_1 : "Ler o livro 'O Pequeno Príncipe'"
		carga_inicial_ler_livro_1_detalhe : "'O Pequeno Príncipe' é um clássico que nunca li... Até agora."
		carga_inicial_ler_livro_2 : "Ler o livro 'Pai Rico, Pai Pobre'"
		carga_inicial_ler_livro_2_detalhe : "Livro que ajuda na educação financeira."

	INGLES:
		carga_inicial_cliente_nome: "Customer"
		carga_inicial_cliente_pais: "To_define"
		carga_inicial_cliente_endereco: "Registered on the Internet"
		carga_inicial_cliente_endereco_completo: "Registered by user ID"
		carga_inicial_categoria_1: "Books"
		carga_inicial_categoria_2: "Personal"
		carga_inicial_status_1 : "Register"
		carga_inicial_status_1_detalhe : "Task only registered but not started"
		carga_inicial_status_2 : "In progress"
		carga_inicial_status_2_detalhe : "Task that has already started and is in progress"
		carga_inicial_status_3 : "Completed"
		carga_inicial_status_3_detalhe : "Task that has already been completed"
		carga_inicial_lista_nome_1: "Books to be read this year"
		carga_inicial_lista_nome_2: "Maintenance of my car"
		carga_inicial_ler_livro_1 : "Read the book 'Hamlet (Sheakspeare)'"
		carga_inicial_ler_livro_1_detalhe : "'Hamlet (Sheakspeare)' is a classic that never read ... Until now."
		carga_inicial_ler_livro_2 : "Read the book 'Rich Dad, Poor Dad'"
		carga_inicial_ler_livro_2_detalhe : "Book that helps in financial education."

	ESPANHOL:
		carga_inicial_cliente_nome: "(es) Cliente"
		carga_inicial_cliente_pais: "(es) A definir"
		carga_inicial_cliente_endereco: "(es) Registrado por Internet"
		carga_inicial_cliente_endereco_completo: "(es) Registrado por ID de usuario"
		carga_inicial_categoria_1: "(es) Libros"
		carga_inicial_categoria_2: "(es) Personal"
		carga_inicial_status_1 : "(es) Registrarse"
		carga_inicial_status_1_detalhe : "(es) Tarea solo registrada pero no iniciada"
		carga_inicial_status_2 : "(es) En proceso"
		carga_inicial_status_2_detalhe : "(es) Tarea que ya ha comenzado y está en curso"
		carga_inicial_status_3 : "(es) Terminado"
		carga_inicial_status_3_detalhe : "(es) Tarea que ya se completó"
		carga_inicial_lista_nome_1: "(es) Libros para leer este año"
		carga_inicial_lista_nome_2: "(es) Mantenimiento de mi auto"
		carga_inicial_ler_livro_1 : "(es) Leer el libro 'Pablo Neruda'"
		carga_inicial_ler_livro_1_detalhe : "(es) 'Pablo Neruda' es un clásico que nunca había leído ... hasta ahora."
		carga_inicial_ler_livro_2 : "(es) Lea el libro 'Padre rico, papá pobre'"
		carga_inicial_ler_livro_2_detalhe : "(es) Libro que ayuda en educación financiera."


*/
}

?>