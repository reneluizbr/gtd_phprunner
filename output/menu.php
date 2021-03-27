<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || isLoggedAsGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}





require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/tb_atividade_events.php"));
$tableEvents["tb_atividade"] = new eventclass_tb_atividade;
include_once(getabspath("include/tb_clientes_events.php"));
$tableEvents["tb_clientes"] = new eventclass_tb_clientes;
include_once(getabspath("include/tb_clientes_planos_events.php"));
$tableEvents["tb_clientes_planos"] = new eventclass_tb_clientes_planos;
include_once(getabspath("include/tb_dominios_events.php"));
$tableEvents["tb_dominios"] = new eventclass_tb_dominios;
include_once(getabspath("include/tb_lista_atividades_events.php"));
$tableEvents["tb_lista_atividades"] = new eventclass_tb_lista_atividades;
include_once(getabspath("include/tb_planos_events.php"));
$tableEvents["tb_planos"] = new eventclass_tb_planos;
include_once(getabspath("include/tb_planos_valores_events.php"));
$tableEvents["tb_planos_valores"] = new eventclass_tb_planos_valores;
include_once(getabspath("include/tb_status_atividades_events.php"));
$tableEvents["tb_status_atividades"] = new eventclass_tb_status_atividades;
include_once(getabspath("include/tb_usuarios_events.php"));
$tableEvents["tb_usuarios"] = new eventclass_tb_usuarios;
include_once(getabspath("include/proc_limpar_tarefas_de_lista_events.php"));
$tableEvents["proc_limpar_tarefas_de_lista"] = new eventclass_proc_limpar_tarefas_de_lista;
include_once(getabspath("include/tb_parametros_events.php"));
$tableEvents["tb_parametros"] = new eventclass_tb_parametros;
include_once(getabspath("include/tb_rotulos_events.php"));
$tableEvents["tb_rotulos"] = new eventclass_tb_rotulos;
include_once(getabspath("include/tb_tarefas_x_rotulos_events.php"));
$tableEvents["tb_tarefas_x_rotulos"] = new eventclass_tb_tarefas_x_rotulos;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>