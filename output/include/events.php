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




//	onscreen events
		$this->events["tb_atividade_snippet"] = true;
		$this->events["tb_atividade_snippet1"] = true;
		$this->events["proc_limpar_tarefas_de_lista_snippet"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

// Rene: Guarda alguns dados do usuario apos o login bem sucedido
$_SESSION["clie_id"] = $data["clie_id"];
$_SESSION["usua_id"] = $data["usua_id"];
$_SESSION["usua_nome_completo"] = $data["usua_nome_completo"];
$_SESSION["usua_domi_status"] = $data["usua_domi_status"];
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

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




}
?>
