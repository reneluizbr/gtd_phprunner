<?php
	// Rene: Busca dados do usuario para exibir no rodape das páginas
	$userData = Security::currentUserData();
	$usuarioLogin = $userData["usua_username"];
	// $_SESSION["usuarioID"] = $userData[ID];  //
	// print_r($userData);
	if ($usuarioLogin === null) {
		$usuarioLogin = "Visitante";
		$usuarioNome  = '';
	} else {
		$usuarioNome  = '('.$userData["usua_email"].')';
	}
?>

<!-- Rene: Exibe dados do usuario para exibir no rodape das páginas -->
<div class="rodape_centralizado">
	<hr style="height:2px;border-width:0;color:gray;background-color:#e4eee3">

	<!-- Controle de Fiado - 2021.02.12 Build 1530 --> 
	<!-- Controle de Fiado - 2021.02.11 Build 1857 --> 
	<!-- Controle de Fiado - 2020.10.04 Build 1512 -->
	<!-- GTDTasks © - Build 2020.09.07a - Copyright 2020 (10.3) -->
	<?php 
		echo "Olá <strong>{$usuarioLogin}</strong> <em>{$usuarioNome}</em>";
		// echo '</br>'; 
		echo ' - ';
		echo strftime("%Y-%m-%d %H:%M:%S"); //strftime('Y-m-d H:i:S'); Ex: '2020-05-19 19:19:19'
		echo '</br>';
		echo '<div style="color:#42ace9">' . GetCustomLabel ("VERSAO_SISTEMA") . '</div>';

		//phpinfo();

	?>
</div>
