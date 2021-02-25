<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard_lista_e_tarefas = array();
$tdatadashboard_lista_e_tarefas[".ShortName"] = "dashboard_lista_e_tarefas";

$pages = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$defaultPages = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );

$tdatadashboard_lista_e_tarefas[".pages"] = $pages;
$tdatadashboard_lista_e_tarefas[".defaultPages"] = $defaultPages;


//	field labels
$fieldLabelsdashboard_lista_e_tarefas = array();
$pageTitlesdashboard_lista_e_tarefas = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdashboard_lista_e_tarefas["English"] = array();
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsdashboard_lista_e_tarefas["Portuguese(Brazil)"] = array();
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdashboard_lista_e_tarefas["Spanish"] = array();
}

//	search fields
$tdatadashboard_lista_e_tarefas[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"tb_lista_atividades", "field"=>"lista_id" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_lista_atividades_lista_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_lista_atividades", "field"=>"clie_id" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_lista_atividades_clie_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_lista_atividades", "field"=>"lista_nm" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_lista_atividades_lista_nm"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_lista_atividades", "field"=>"inclu_login" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_lista_atividades_inclu_login"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_lista_atividades", "field"=>"inclu_dt" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_lista_atividades_inclu_dt"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_lista_atividades", "field"=>"alter_login" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_lista_atividades_alter_login"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_lista_atividades", "field"=>"alter_dt" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_lista_atividades_alter_dt"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"ativ_id" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_ativ_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"clie_id" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_clie_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"ativ_nm" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_ativ_nm"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"ativ_ds" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_ativ_ds"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"lista_id" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_lista_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"stat_id" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_stat_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"ativ_fl_ativo" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_ativ_fl_ativo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"ativ_prioridade" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_ativ_prioridade"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"ativ_concluida" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_ativ_concluida"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"ativ_dt_ini" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_ativ_dt_ini"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"ativ_dt_fim" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_ativ_dt_fim"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"inclu_login" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_inclu_login"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"inclu_dt" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_inclu_dt"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"alter_login" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_alter_login"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tb_atividade", "field"=>"alter_dt" );
$tdatadashboard_lista_e_tarefas[".searchFields"]["tb_atividade_alter_dt"] = $dashField;

// all search fields
$tdatadashboard_lista_e_tarefas[".allSearchFields"] = array();
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_lista_atividades_lista_id";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_lista_atividades_clie_id";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_lista_atividades_lista_nm";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_lista_atividades_inclu_login";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_lista_atividades_inclu_dt";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_lista_atividades_alter_login";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_lista_atividades_alter_dt";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_ativ_id";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_clie_id";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_ativ_nm";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_ativ_ds";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_lista_id";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_stat_id";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_ativ_fl_ativo";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_ativ_prioridade";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_ativ_concluida";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_ativ_dt_ini";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_ativ_dt_fim";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_inclu_login";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_inclu_dt";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_alter_login";
$tdatadashboard_lista_e_tarefas[".allSearchFields"][] = "tb_atividade_alter_dt";

// good like search fields
$tdatadashboard_lista_e_tarefas[".googleLikeFields"] = array();
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_lista_atividades_lista_id";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_lista_atividades_clie_id";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_lista_atividades_lista_nm";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_lista_atividades_inclu_login";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_lista_atividades_inclu_dt";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_lista_atividades_alter_login";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_lista_atividades_alter_dt";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_ativ_id";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_clie_id";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_ativ_nm";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_ativ_ds";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_lista_id";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_stat_id";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_ativ_fl_ativo";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_ativ_prioridade";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_ativ_concluida";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_ativ_dt_ini";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_ativ_dt_fim";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_inclu_login";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_inclu_dt";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_alter_login";
$tdatadashboard_lista_e_tarefas[".googleLikeFields"][] = "tb_atividade_alter_dt";

$tdatadashboard_lista_e_tarefas[".dashElements"] = array();

	$dbelement = array( "elementName" => "tb_lista_atividades_list", "table" => "tb_lista_atividades", 
		 "pageName" => "lista_simples","type" => 0);
	$dbelement["cellName"] = "cell_2_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 1 > 0;
	$dbelement["popupEdit"] = 1 > 0;
	$dbelement["popupView"] = 1 > 0;
	
	$dbelement["updateSelected"] = 0 > 0;


	$tdatadashboard_lista_e_tarefas[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "tb_atividade_list", "table" => "tb_atividade", 
		 "pageName" => "lista_simples","type" => 0);
	$dbelement["cellName"] = "cell_3_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 1 > 0;
	$dbelement["popupEdit"] = 1 > 0;
	$dbelement["popupView"] = 1 > 0;
	
	$dbelement["updateSelected"] = 0 > 0;

$dbelement["masterTable"] = "tb_lista_atividades";

	$tdatadashboard_lista_e_tarefas[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "dashboard_lista_e_tarefas_snippet", "table" => "Dashboard_Lista_e_Tarefas", 
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "cell_0_1";

				$dbelement["snippetId"] = "Dashboard_Lista_e_Tarefas_snippet";


	$tdatadashboard_lista_e_tarefas[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "dashboard_lista_e_tarefas_snippet1", "table" => "Dashboard_Lista_e_Tarefas", 
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "cell_0_0";

				$dbelement["snippetId"] = "Dashboard_Lista_e_Tarefas_snippet1";


	$tdatadashboard_lista_e_tarefas[".dashElements"][] = $dbelement;

$tdatadashboard_lista_e_tarefas[".shortTableName"] = "dashboard_lista_e_tarefas";
$tdatadashboard_lista_e_tarefas[".entityType"] = 4;




include_once(getabspath("include/dashboard_lista_e_tarefas_events.php"));
$tableEvents["Dashboard_Lista_e_Tarefas"] = new eventclass_dashboard_lista_e_tarefas;
$tdatadashboard_lista_e_tarefas[".hasEvents"] = true;


$tdatadashboard_lista_e_tarefas[".tableType"] = "dashboard";


			
$tdatadashboard_lista_e_tarefas[".addPageEvents"] = false;

$tdatadashboard_lista_e_tarefas[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard_Lista_e_Tarefas"]=&$tdatadashboard_lista_e_tarefas;
$field_labels["Dashboard_Lista_e_Tarefas"] = &$fieldLabelsdashboard_lista_e_tarefas;
$page_titles["Dashboard_Lista_e_Tarefas"] = &$pageTitlesdashboard_lista_e_tarefas;

?>