<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["tb_clientes"] ) ) {
			$lookupTableLinks["tb_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["tb_clientes"]["tb_atividade.clie_id"] )) {
			$lookupTableLinks["tb_clientes"]["tb_atividade.clie_id"] = array();
		}
		$lookupTableLinks["tb_clientes"]["tb_atividade.clie_id"]["edit"] = array("table" => "tb_atividade", "field" => "clie_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_lista_atividades"] ) ) {
			$lookupTableLinks["tb_lista_atividades"] = array();
		}
		if( !isset( $lookupTableLinks["tb_lista_atividades"]["tb_atividade.lista_id"] )) {
			$lookupTableLinks["tb_lista_atividades"]["tb_atividade.lista_id"] = array();
		}
		$lookupTableLinks["tb_lista_atividades"]["tb_atividade.lista_id"]["edit"] = array("table" => "tb_atividade", "field" => "lista_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_status_atividades"] ) ) {
			$lookupTableLinks["tb_status_atividades"] = array();
		}
		if( !isset( $lookupTableLinks["tb_status_atividades"]["tb_atividade.stat_id"] )) {
			$lookupTableLinks["tb_status_atividades"]["tb_atividade.stat_id"] = array();
		}
		$lookupTableLinks["tb_status_atividades"]["tb_atividade.stat_id"]["edit"] = array("table" => "tb_atividade", "field" => "stat_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_dominios"] ) ) {
			$lookupTableLinks["tb_dominios"] = array();
		}
		if( !isset( $lookupTableLinks["tb_dominios"]["tb_atividade.ativ_prioridade"] )) {
			$lookupTableLinks["tb_dominios"]["tb_atividade.ativ_prioridade"] = array();
		}
		$lookupTableLinks["tb_dominios"]["tb_atividade.ativ_prioridade"]["edit"] = array("table" => "tb_atividade", "field" => "ativ_prioridade", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_dominios"] ) ) {
			$lookupTableLinks["tb_dominios"] = array();
		}
		if( !isset( $lookupTableLinks["tb_dominios"]["tb_atividade.ativ_domi_unid_tempo"] )) {
			$lookupTableLinks["tb_dominios"]["tb_atividade.ativ_domi_unid_tempo"] = array();
		}
		$lookupTableLinks["tb_dominios"]["tb_atividade.ativ_domi_unid_tempo"]["edit"] = array("table" => "tb_atividade", "field" => "ativ_domi_unid_tempo", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_dominios"] ) ) {
			$lookupTableLinks["tb_dominios"] = array();
		}
		if( !isset( $lookupTableLinks["tb_dominios"]["tb_clientes.clie_domi_status"] )) {
			$lookupTableLinks["tb_dominios"]["tb_clientes.clie_domi_status"] = array();
		}
		$lookupTableLinks["tb_dominios"]["tb_clientes.clie_domi_status"]["edit"] = array("table" => "tb_clientes", "field" => "clie_domi_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_clientes"] ) ) {
			$lookupTableLinks["tb_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["tb_clientes"]["tb_clientes_planos.clie_id"] )) {
			$lookupTableLinks["tb_clientes"]["tb_clientes_planos.clie_id"] = array();
		}
		$lookupTableLinks["tb_clientes"]["tb_clientes_planos.clie_id"]["edit"] = array("table" => "tb_clientes_planos", "field" => "clie_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_planos"] ) ) {
			$lookupTableLinks["tb_planos"] = array();
		}
		if( !isset( $lookupTableLinks["tb_planos"]["tb_clientes_planos.plan_id"] )) {
			$lookupTableLinks["tb_planos"]["tb_clientes_planos.plan_id"] = array();
		}
		$lookupTableLinks["tb_planos"]["tb_clientes_planos.plan_id"]["edit"] = array("table" => "tb_clientes_planos", "field" => "plan_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_clientes"] ) ) {
			$lookupTableLinks["tb_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["tb_clientes"]["tb_lista_atividades.clie_id"] )) {
			$lookupTableLinks["tb_clientes"]["tb_lista_atividades.clie_id"] = array();
		}
		$lookupTableLinks["tb_clientes"]["tb_lista_atividades.clie_id"]["edit"] = array("table" => "tb_lista_atividades", "field" => "clie_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_dominios"] ) ) {
			$lookupTableLinks["tb_dominios"] = array();
		}
		if( !isset( $lookupTableLinks["tb_dominios"]["tb_planos.plan_domi_tipo"] )) {
			$lookupTableLinks["tb_dominios"]["tb_planos.plan_domi_tipo"] = array();
		}
		$lookupTableLinks["tb_dominios"]["tb_planos.plan_domi_tipo"]["edit"] = array("table" => "tb_planos", "field" => "plan_domi_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_planos"] ) ) {
			$lookupTableLinks["tb_planos"] = array();
		}
		if( !isset( $lookupTableLinks["tb_planos"]["tb_planos_valores.plan_id"] )) {
			$lookupTableLinks["tb_planos"]["tb_planos_valores.plan_id"] = array();
		}
		$lookupTableLinks["tb_planos"]["tb_planos_valores.plan_id"]["edit"] = array("table" => "tb_planos_valores", "field" => "plan_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_clientes"] ) ) {
			$lookupTableLinks["tb_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["tb_clientes"]["tb_status_atividades.clie_id"] )) {
			$lookupTableLinks["tb_clientes"]["tb_status_atividades.clie_id"] = array();
		}
		$lookupTableLinks["tb_clientes"]["tb_status_atividades.clie_id"]["edit"] = array("table" => "tb_status_atividades", "field" => "clie_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_clientes"] ) ) {
			$lookupTableLinks["tb_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["tb_clientes"]["tb_usuarios.clie_id"] )) {
			$lookupTableLinks["tb_clientes"]["tb_usuarios.clie_id"] = array();
		}
		$lookupTableLinks["tb_clientes"]["tb_usuarios.clie_id"]["edit"] = array("table" => "tb_usuarios", "field" => "clie_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_dominios"] ) ) {
			$lookupTableLinks["tb_dominios"] = array();
		}
		if( !isset( $lookupTableLinks["tb_dominios"]["tb_usuarios.usua_domi_status"] )) {
			$lookupTableLinks["tb_dominios"]["tb_usuarios.usua_domi_status"] = array();
		}
		$lookupTableLinks["tb_dominios"]["tb_usuarios.usua_domi_status"]["edit"] = array("table" => "tb_usuarios", "field" => "usua_domi_status", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_clientes"] ) ) {
			$lookupTableLinks["tb_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["tb_clientes"]["gr_fico_tarefas_por_lista.clie_id"] )) {
			$lookupTableLinks["tb_clientes"]["gr_fico_tarefas_por_lista.clie_id"] = array();
		}
		$lookupTableLinks["tb_clientes"]["gr_fico_tarefas_por_lista.clie_id"]["search"] = array("table" => "Gráfico Tarefas por Lista", "field" => "clie_id", "page" => "search");
		if( !isset( $lookupTableLinks["tb_lista_atividades"] ) ) {
			$lookupTableLinks["tb_lista_atividades"] = array();
		}
		if( !isset( $lookupTableLinks["tb_lista_atividades"]["gr_fico_tarefas_por_lista.lista_id"] )) {
			$lookupTableLinks["tb_lista_atividades"]["gr_fico_tarefas_por_lista.lista_id"] = array();
		}
		$lookupTableLinks["tb_lista_atividades"]["gr_fico_tarefas_por_lista.lista_id"]["search"] = array("table" => "Gráfico Tarefas por Lista", "field" => "lista_id", "page" => "search");
		if( !isset( $lookupTableLinks["tb_status_atividades"] ) ) {
			$lookupTableLinks["tb_status_atividades"] = array();
		}
		if( !isset( $lookupTableLinks["tb_status_atividades"]["proc_limpar_tarefas_de_lista.SomenteDoStatus"] )) {
			$lookupTableLinks["tb_status_atividades"]["proc_limpar_tarefas_de_lista.SomenteDoStatus"] = array();
		}
		$lookupTableLinks["tb_status_atividades"]["proc_limpar_tarefas_de_lista.SomenteDoStatus"]["edit"] = array("table" => "proc_limpar_tarefas_de_lista", "field" => "SomenteDoStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_lista_atividades"] ) ) {
			$lookupTableLinks["tb_lista_atividades"] = array();
		}
		if( !isset( $lookupTableLinks["tb_lista_atividades"]["proc_limpar_tarefas_de_lista.lista_id"] )) {
			$lookupTableLinks["tb_lista_atividades"]["proc_limpar_tarefas_de_lista.lista_id"] = array();
		}
		$lookupTableLinks["tb_lista_atividades"]["proc_limpar_tarefas_de_lista.lista_id"]["edit"] = array("table" => "proc_limpar_tarefas_de_lista", "field" => "lista_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_clientes"] ) ) {
			$lookupTableLinks["tb_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["tb_clientes"]["gr_fico_tarefas_por_status.clie_id"] )) {
			$lookupTableLinks["tb_clientes"]["gr_fico_tarefas_por_status.clie_id"] = array();
		}
		$lookupTableLinks["tb_clientes"]["gr_fico_tarefas_por_status.clie_id"]["search"] = array("table" => "Gráfico Tarefas por Status", "field" => "clie_id", "page" => "search");
		if( !isset( $lookupTableLinks["tb_status_atividades"] ) ) {
			$lookupTableLinks["tb_status_atividades"] = array();
		}
		if( !isset( $lookupTableLinks["tb_status_atividades"]["gr_fico_tarefas_por_status.stat_id"] )) {
			$lookupTableLinks["tb_status_atividades"]["gr_fico_tarefas_por_status.stat_id"] = array();
		}
		$lookupTableLinks["tb_status_atividades"]["gr_fico_tarefas_por_status.stat_id"]["search"] = array("table" => "Gráfico Tarefas por Status", "field" => "stat_id", "page" => "search");
		if( !isset( $lookupTableLinks["tb_clientes"] ) ) {
			$lookupTableLinks["tb_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["tb_clientes"]["gr_fico_tarefas_por_prioridade.clie_id"] )) {
			$lookupTableLinks["tb_clientes"]["gr_fico_tarefas_por_prioridade.clie_id"] = array();
		}
		$lookupTableLinks["tb_clientes"]["gr_fico_tarefas_por_prioridade.clie_id"]["search"] = array("table" => "Gráfico Tarefas por Prioridade", "field" => "clie_id", "page" => "search");
		if( !isset( $lookupTableLinks["tb_clientes"] ) ) {
			$lookupTableLinks["tb_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["tb_clientes"]["gr_fico_tarefas_criadas_por_usu_rio.clie_id"] )) {
			$lookupTableLinks["tb_clientes"]["gr_fico_tarefas_criadas_por_usu_rio.clie_id"] = array();
		}
		$lookupTableLinks["tb_clientes"]["gr_fico_tarefas_criadas_por_usu_rio.clie_id"]["search"] = array("table" => "Gráfico Tarefas criadas por Usuário", "field" => "clie_id", "page" => "search");
		if( !isset( $lookupTableLinks["tb_clientes"] ) ) {
			$lookupTableLinks["tb_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["tb_clientes"]["tb_categorias.clie_id"] )) {
			$lookupTableLinks["tb_clientes"]["tb_categorias.clie_id"] = array();
		}
		$lookupTableLinks["tb_clientes"]["tb_categorias.clie_id"]["edit"] = array("table" => "tb_categorias", "field" => "clie_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_categorias"] ) ) {
			$lookupTableLinks["tb_categorias"] = array();
		}
		if( !isset( $lookupTableLinks["tb_categorias"]["tb_categorias_x_atividades.cate_id"] )) {
			$lookupTableLinks["tb_categorias"]["tb_categorias_x_atividades.cate_id"] = array();
		}
		$lookupTableLinks["tb_categorias"]["tb_categorias_x_atividades.cate_id"]["edit"] = array("table" => "tb_categorias_x_atividades", "field" => "cate_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_atividade"] ) ) {
			$lookupTableLinks["tb_atividade"] = array();
		}
		if( !isset( $lookupTableLinks["tb_atividade"]["tb_categorias_x_atividades.ativ_id"] )) {
			$lookupTableLinks["tb_atividade"]["tb_categorias_x_atividades.ativ_id"] = array();
		}
		$lookupTableLinks["tb_atividade"]["tb_categorias_x_atividades.ativ_id"]["edit"] = array("table" => "tb_categorias_x_atividades", "field" => "ativ_id", "page" => "edit");
}

?>