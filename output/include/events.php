<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;



		$this->events["AfterSuccessfulRegistration"]=true;

		$this->events["BeforeProcessRegister"]=true;

		$this->events["BeforeProcessMenu"]=true;


//	onscreen events
		$this->events["tb_atividade_snippet"] = true;
		$this->events["tb_atividade_snippet1"] = true;
		$this->events["proc_limpar_tarefas_de_lista_snippet"] = true;
		$this->events["Dashboard_Lista_e_Tarefas_snippet1"] = true;
		$this->events["Dashboard_Lista_e_Tarefas_snippet"] = true;
		$this->events["Dashboard_Graficos_snippet"] = true;
		$this->events["Dashboard_Graficos_snippet2"] = true;
		$this->events["Dashboard_Graficos_snippet3"] = true;
		$this->events["Dashboard_Graficos_snippet1"] = true;

		$this->events["GetTablePermissions"]["tb_rotulos"] = true;

		$this->events["IsRecordEditable"]["tb_atividade"] = true;
		$this->events["IsRecordEditable"]["tb_lista_atividades"] = true;
		$this->events["IsRecordEditable"]["tb_status_atividades"] = true;
		$this->events["IsRecordEditable"]["tb_usuarios"] = true;
		$this->events["IsRecordEditable"]["tb_rotulos"] = true;

		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		
// Rene: Constantes do sistema
//constant(string, );

// Place event code here.
// Use "Add Action" button to add code snippets.

// Rene: Guarda alguns dados do usuario apos o login bem sucedido
$_SESSION["clie_id"] = $data["clie_id"];
$_SESSION["usua_id"] = $data["usua_id"];
$_SESSION["usua_nome_completo"] = $data["usua_nome_completo"];
$_SESSION["usua_domi_status"] = $data["usua_domi_status"];





// Rene: Tenta identificar e configurar o Idioma escolhido anteriormente pelo usuario
$_SESSION["language"] = mlang_getcurrentlang();
//echo "<script>alert('Idioma atual: " . $_SESSION["language"] . "');</script>";
//$_SESSION["language"]="Spanish";
//$_SESSION["language"]="Portuguese(Brazil)";
//echo "<script>alert('Idioma trocado para: " . $_SESSION["language"] . "');</script>";


// Rene: Buscar o $wlUltimoIdioma usado em tb_usuarios (Assume "English" se não tiver)
// ============================================================
$rs = DB::Query("select usua_idioma_ulti from tb_usuarios where usua_id = {$_SESSION['usua_id']}");
$wlDados = $rs->fetchAssoc();
$wlUltimoIdioma = $wlDados["usua_idioma_ulti"];
if (empty($wlUltimoIdioma)) {
	$wlUltimoIdioma = "idioma_indefinido";
} else {
	$_SESSION["language"] = $wlUltimoIdioma;
}
// ============================================================



// Rene: Atualiza a data de Ultimo Login
$wlDadoAlterar = array();
$wlDadoAlterar["usua_login_ulti"] = strftime("%Y-%m-%d %H:%M:%S"); // Ex: '2021-02-21 20:17:17';

// Chave dos registros que serão alterados na tabela
$wlChaves["usua_id"] = $data["usua_id"];

// Rene: Realiza a alteracao (update) na tabela
DB::Update("tb_usuarios", $wlDadoAlterar, $wlChaves);
//DB::Insert("cars", $data );
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// After successful registration
function AfterSuccessfulRegistration(&$userdata, &$pageObject)
{

		
// Rene:  Incluir dados iniciais do cliente (categorias, lista_atividades, atividades, categorias_x_atividades, status_atividades)
$wlNovo_usua_id = $userdata["usua_id"];
$wlNovo_usua_email = $userdata["usua_email"];
//print_r($userdata);
//   retornou os campo da tela/página (Não tem o ID do usuário na pagina, recuperar pelo email):
//       Array ( [usua_username] => rene18 [usua_senha] => rene18 [usua_email] => rene18@gmail.com )
fctCargaInicialUsuarioIncluido($wlNovo_usua_email);


// Rene: Tenta enviar um email apos o cadastramento do usuario
// **********  Send simple email  ************
$email="reneluizbr@gmail.com";
$from="admin@gtdtasks.com";
$msg="Foi cadastrado um novo usuário:\nSistema GTDTasks.";
$subject="Cadastramento de novo usuário";
$attachments = array();

// Rene: Envio de email apos o cadastramento de usuario...
// TODO: Ativar depois que estiver online no servidor
// Attachments description. The 'path' is required. Others parameters are optional.
// $attachments =  array(
//		array('path' => getabspath('files/1.jpg')),
//		array('path' => getabspath('files/2.jpg'), 'name' => 'image.jpg', 'encoding' => 'base64', 'type' => 'application/octet-stream')) ;

$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from, 'attachments' => $attachments));
// You can manually overwrite SMTP settings
// $ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from, 'attachments' => $attachments,
//     'host' => 'somehost', 'port' => 25, 'username' => 'smtpUserName', 'password' => 'password'));
if(!$ret["mailed"]) {
	// Rene: Desabilitar exibição de erro caso ocorra falha no envio do email
	// echo "<strong>Não foi possível o envio do email:<br></strong>";
	// echo $ret["message"];
}



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulRegistration

		
		
		
		
		
		
		
		
		
		
		
		

		
				// Register page: Before process
function BeforeProcessRegister(&$pageObject)
{

		
// Rene: Configuração do Timezone para Brasil, sem horario de verao
date_default_timezone_set('america/Recife');
// ... mas na página de Registro não funciona... ainda registra a hora +3


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessRegister

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Welcome page: Before process
function BeforeProcessMenu(&$pageObject)
{

		
// Place event code here.
// Use "Add Action" button to add code snippets.

// Rene: Tenta identificar e configurar o Idioma escolhido anteriormente pelo usuario
//$_SESSION["language"] = mlang_getcurrentlang();
//echo "<script>alert('Idioma atual: " . $_SESSION["language"] . "');</script>";

// Este evento ocorre quando o menu é aberto a primeira vez ou quando o idioma é trocado
//Rene: Busca o $wlUltimoIdioma usado em tb_usuarios
// ============================================================
$wlUsua_id = $_SESSION['usua_id'];
$wlErroDB = "";
$rs = DB::Query("select usua_idioma_ulti from tb_usuarios where usua_id = " . $wlUsua_id);
$wlErroDB = DB::LastError();
if (($wlErroDB != 'not an error') /*&& ($wlExibirErros == 1)*/) {
		echo '*** ERRO select usua_idioma_ulti() ***: ' . $wlErroDB;
		// echo "<script>alert('ERRO select usua_idioma_ulti(): " . $wlErroDB . "');</script>";
}
$wlDados = $rs->fetchAssoc();
$wlUltimoIdioma = $wlDados["usua_idioma_ulti"];
//echo "<script>alert('Idioma lido do rs do Banco: " . $wlUltimoIdioma . "');</script>";
if (empty($wlUltimoIdioma)) {
	$wlUltimoIdioma = "idioma_indefinido";
}
//echo "<script>alert('Idioma atual da Sessão: " . $_SESSION["language"] . "');</script>";
//echo "<script>alert('Idioma do Banco: " . $wlUltimoIdioma . "');</script>";

if ($_SESSION["language"] != $wlUltimoIdioma) {
	$wlUltimoIdioma = $_SESSION["language"];
	$wlUsua_id = $_SESSION['usua_id'];
	$wlDados   = array();
	$wlDados["usua_idioma_ulti"] = $wlUltimoIdioma;
	$wlErroDB = "";
	DB::Update("tb_usuarios", $wlDados, "usua_id = " . $wlUsua_id );
	$wlErroDB = DB::LastError();
	if (($wlErroDB != 'not an error') /*&& ($wlExibirErros == 1)*/) {
			echo '*** ERRO Update BeforeProcessMenu() ***: ' . $wlErroDB;
	}
}


;		
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_tb_atividade_snippet(&$params)
	{
	// Put your code here.
// Rene: exibindo usuario ativo na tela de inclusao de atividades
echo "Login, " . $_SESSION["usua_nome_completo"];
	;
}
	function event_tb_atividade_snippet1(&$params)
	{
	echo "Your message";

// Put your code here.
$wlhtml = '<!DOCTYPE html>
<body>
  <div class="app">
    <header>
        <h1>Drag and Drop de cartões PHPRunner.</h1>
    </header>
    <div class="cls_listas">
        <div id="raia_01" class="cls_raia">
            <span class="cls_raia_titulo">Raia 01 - Em Análise</span>
            <div id="cartao_01" class="cls_draggable" draggable="true">
                <p>Nome: <b>Renê Luiz</b>
                    <a href="http://source.unsplash.com/random/150x150">alterar</a>
                </p>
                <p>Item posição: <b>1</b></p>
                <img src="http://source.unsplash.com/random/150x150" alt="" srcset="">
                <p id="id_posicao">Cartão não movimentado ainda...</p>
            </div>
            <div id="cartao_02" class="cls_draggable" draggable="true">
                <p>Nome: <b>Clayton Eduardo</b>
                   <a href="http://source.unsplash.com/random/150x150">alterar</a>
                </p>
                <p>Item posição: <b>2</b></p>
                <img src="http://source.unsplash.com/random/149x149" alt="" srcset="">
                <p id="id_posicao">Cartão não movimentado ainda...</p>
            </div>
        </div>
        <div id="raia_02" class="cls_raia">
            <span class="cls_raia_titulo">Raia 02 - Desenvolvimento</span>
            <div id="cartao_03" class="cls_draggable" draggable="true">Item posição: 3
                <p id="id_posicao">Cartão não movimentado ainda...</p>
            </div>
            <div id="cartao_04" class="cls_draggable" draggable="true">Item posição: 4
                <p id="id_posicao">Cartão não movimentado ainda...</p>
            </div>
        </div>
        <div id="raia_03" class="cls_raia">
            <span class="cls_raia_titulo">Raia 03 - Concluído</span>
        </div>
    </div>
  </div>
  <script src="include/custom_functions.js"></script>
</body>
</html>';

echo $wlhtml;
	;
}
	function event_proc_limpar_tarefas_de_lista_snippet(&$params)
	{
	// Rene: Mostra o ID e o Nome da Lista Ativa
$wlListaAtiva = $_SESSION['par_lista_id'] . ' - ' . $_SESSION['par_lista_nm'];
echo "Lista ativa: " . $wlListaAtiva
	;
}
	function event_Dashboard_Lista_e_Tarefas_snippet1(&$params)
	{
	$header = "Quantidade de Tarefas";

$res = DB::query("select count(lista_id) as qtde FROM tb_lista_atividades");
$data = $res->fetchAssoc();
$res = "<div class='info-box'>";
//$res.= "<span class='info-img img_bgcolor_red glyphicon glyphicon-shopping-cart'></span>";
$res.= "<span class='info-img img_bgcolor_blue glyphicon glyphicon-tags'></span>";
$res.= "<div class='dashtext'>";
$res.= "Listas: ";
$res.= "<b>" . $data["qtde"] . "</b>";
$res.= "</div>";
$res.= "</div>";
echo $res;


	;
}
	function event_Dashboard_Lista_e_Tarefas_snippet(&$params)
	{
	$header = "Quantidade de Tarefas";

$res = DB::query("select count(ativ_id) as qtde FROM tb_atividade");
$data = $res->fetchAssoc();
$res = "<div class='info-box'>";
//$res.= "<span class='info-img img_bgcolor_red glyphicon glyphicon-shopping-cart'></span>";
$res.= "<span class='info-img img_bgcolor_red glyphicon glyphicon-tags'></span>";
$res.= "<div class='dashtext'>";
$res.= "Tarefas: ";
$res.= "<b>" . $data["qtde"] . "</b>";
$res.= "</div>";
$res.= "</div>";
echo $res;


	;
}
	function event_Dashboard_Graficos_snippet(&$params)
	{
	$header = GetCustomLabel ("CL_quantidade_de_listas");

$res = DB::query("select count(lista_id) as qtde FROM tb_lista_atividades");
$data = $res->fetchAssoc();
$res = "<div class='info-box'>";
//$res.= "<span class='info-img img_bgcolor_red glyphicon glyphicon-shopping-cart'></span>";
$res.= "<span class='info-img img_bgcolor_blue glyphicon glyphicon-tags'></span>";
$res.= "<div class='dashtext'>";
$res.= GetCustomLabel ("CL_listas") . ": ";
$res.= "<b>" . $data["qtde"] . "</b>";
$res.= "</div>";
$res.= "</div>";
echo $res;


	;
}
	function event_Dashboard_Graficos_snippet2(&$params)
	{
	// Query de teste e para buscar ultimos 30 dias na tabela de atividades
$query = "select datetime('now','localtime'), datetime('now','-30 day','localtime')";
$query = "select count(*) as qtde from tb_atividade where ativ_dt_ini >= datetime('now','-30 day','localtime')";
//echo $query; //Debug
// Qtde de Tarefas iniciadas nos últimos 30 dias (ativ_dt_ini >= now()-30days???)
$header = GetCustomLabel ("CL_tarefas_iniciadas_ultimos_30_dias"); //"Tarefas Iniciadas nos últimos 30 dias";

$res = DB::query($query);
$data = $res->fetchAssoc();
//print_r($data); //Debug
$res = "<div class='info-box'>";
//$res.= "<span class='info-img img_bgcolor_red glyphicon glyphicon-shopping-cart'></span>";
$res.= "<span class='info-img img_bgcolor_green glyphicon glyphicon-share'></span>";
$res.= "<div class='dashtext'>";
$res.= GetCustomLabel ("CL_iniciadas") . ": ";
$res.= "<b>" . $data["qtde"] . "</b>";
$res.= "</div>";
$res.= "</div>";
echo $res;


	;
}
	function event_Dashboard_Graficos_snippet3(&$params)
	{
	// Query de teste e para buscar ultimos 30 dias na tabela de atividades
$query = "select datetime('now','localtime'), datetime('now','-30 day','localtime')";
$query = "select count(*) as qtde from tb_atividade where ativ_dt_fim >= datetime('now','-30 day','localtime')";
//echo $query; //Debug
// Qtde de Tarefas iniciadas nos últimos 30 dias (ativ_dt_ini >= now()-30days???)
$header = GetCustomLabel ("CL_tarefas_encerradas_ultimos_30_dias");  //"Tarefas Encerradas nos últimos 30 dias";

$res = DB::query($query);
$data = $res->fetchAssoc();
//print_r($data); //Debug
$res = "<div class='info-box'>";
//$res.= "<span class='info-img img_bgcolor_red glyphicon glyphicon-shopping-cart'></span>";
$res.= "<span class='info-img img_bgcolor_blue glyphicon glyphicon-check'></span>";
$res.= "<div class='dashtext'>";
$res.= GetCustomLabel ("CL_encerradas") . ": ";
$res.= "<b>" . $data["qtde"] . "</b>";
$res.= "</div>";
$res.= "</div>";
echo $res;
	;
}
	function event_Dashboard_Graficos_snippet1(&$params)
	{
	$header = GetCustomLabel ("CL_quantidade_de_tarefas");

$res = DB::query("select count(ativ_id) as qtde FROM tb_atividade");
$data = $res->fetchAssoc();
$res = "<div class='info-box'>";
//$res.= "<span class='info-img img_bgcolor_red glyphicon glyphicon-shopping-cart'></span>";
$res.= "<span class='info-img img_bgcolor_red glyphicon glyphicon-tags'></span>";
$res.= "<div class='dashtext'>";
$res.= GetCustomLabel ("CL_tarefas") . ": ";
$res.= "<b>" . $data["qtde"] . "</b>";
$res.= "</div>";
$res.= "</div>";
echo $res;


	;
}




	function GetTablePermissions($permissions, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "tb_rotulos")
		{
			

// Place event code here.
// Use "Add Action" button to add code snippets.

// RENE: Teste de permissões. Nao consegui fazer funcionar o DELETE em Categorias
// $permissions = "AEDSP";

return $permissions;;
		}
		return $permissions;
	}
	function IsRecordEditable($values, $isEditable, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "tb_atividade")
		{
			

// Place event code here.
// Use "Add Action" button to add code snippets.

// Rene: Habilita o DELETE e exibe o ícone Edit no Grid (para paginas que exibem somente os dados do proprio cliente!)
$isEditable = true;

return $isEditable;;
		}
		if($table == "tb_lista_atividades")
		{
			

// Place event code here.
// Use "Add Action" button to add code snippets.

// Rene: Habilita o DELETE e exibe o ícone Edit no Grid (para paginas que exibem somente os dados do proprio cliente!)
$isEditable = true;

return $isEditable;;
		}
		if($table == "tb_status_atividades")
		{
			

// Place event code here.
// Use "Add Action" button to add code snippets.

// Rene: Habilita o DELETE e exibe o ícone Edit no Grid (para paginas que exibem somente os dados do proprio cliente!)
$isEditable = true;

return $isEditable;;
		}
		if($table == "tb_usuarios")
		{
			

// Place event code here.
// Use "Add Action" button to add code snippets.

// Rene: Habilita o DELETE e exibe o ícone Edit no Grid (para paginas que exibem somente os dados do proprio cliente!)
$isEditable = true;

return $isEditable;;
		}
		if($table == "tb_rotulos")
		{
			

// Place event code here.
// Use "Add Action" button to add code snippets.

// Rene: Habilita o DELETE e exibe o ícone Edit no Grid (para paginas que exibem somente os dados do proprio cliente!)
$isEditable = true;

return $isEditable;;
		}
		return $isEditable;
	}
}
?>
