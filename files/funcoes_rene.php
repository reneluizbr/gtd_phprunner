<?php

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


/*
$values['inclu_id'] = $_SESSION['usua_id'];
$values['inclu_dt'] = strftime("%Y-%m-%d %H:%M:%S"); //strftime('Y-m-d H:i:S'); Ex: '2020-05-19 19:19:19'
*/

}

?>