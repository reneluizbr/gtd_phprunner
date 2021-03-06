<?php
$wlExibirErros = 0;

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

		// Passo 1) tb_clientes: Incluir um cliente para o usuario de exemplo
		$wlDados = array();
		$wlUsua_id = $dadosQuery[usua_id];
		$wlUsua_username = $dadosQuery[usua_username];
		$wlUsua_email = $dadosQuery[usua_email];
		//$wlDados["clie_id"] = ???;  // No Insert o PK autoincremento pega um novo valor
		$wlDados['clie_nm_reduzido'] = 'Cliente "' . $wlUsua_username . '"'; // 'Auto cadastrado' ; //. $wlClie_id;
		$wlDados["clie_email"] = $wlUsua_email;
		$wlDados["clie_pais"] = 'A_definir';
		$wlDados["clie_endereco"] = 'Cadastrado pela Internet';
		$wlDados["clie_domi_status"] = 'CADASTRADO';
		$wlDados["clie_nm_completo"] = "Cadastrado pelo usuário ID: " . $wlUsua_id 
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
	}
	if (($wlErroDB != 'not an error') && ($wlExibirErros == 1)) {
		echo '*** ERRO ***: ' . $wlErroDB;
		echo 'Ultimo_ID_Gravado que foi recuperado da base: ' . $wlClie_id;
	}
	// Passo 2) tb_usuarios: Associar o usuario tb_usuarios.clie_id ao novo cliente incluido no passo 1
	if (1===1) {
		// Exemplo de Update do registro id=50 na tabela 'Cars'
		$wlDados = array();
		$wlDados["clie_id"] = $wlClie_id;
		DB::Update("tb_usuarios", $wlDados, "usua_id = " . $wlUsua_id );
	}
	if (($wlErroDB != 'not an error') && ($wlExibirErros == 1)) {
		echo '*** ERRO ***: ' . $wlErroDB;
	} 
	// Passo 3) tb_categorias: Incluir alguns dados de exemplo
	// Passo 4) tb_status_atividades: Incluir alguns dados de exemplo
	// Passo 5) tb_lista_atividades: Incluir alguns dados de exemplo
	// Passo 6) tb_atividades: Incluir alguns dados de exemplo
	// Passo 7) tb_categorias_x_atividades: Incluir alguns dados de exemplo
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

?>