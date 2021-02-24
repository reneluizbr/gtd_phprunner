<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard_graficos = array();
$tdatadashboard_graficos[".ShortName"] = "dashboard_graficos";

$pages = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$defaultPages = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );

$tdatadashboard_graficos[".pages"] = $pages;
$tdatadashboard_graficos[".defaultPages"] = $defaultPages;


//	field labels
$fieldLabelsdashboard_graficos = array();
$pageTitlesdashboard_graficos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdashboard_graficos["English"] = array();
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_por_Status_clie_id"] = "Clie Id";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_por_Status_stat_id"] = "Stat Id";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_por_Status_stat_nm"] = "Stat Nm";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_por_Status_qtde"] = "Qtde";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_por_Lista_clie_id"] = "Clie Id";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_por_Lista_lista_id"] = "Lista Id";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_por_Lista_lista_nm"] = "Lista Nm";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_por_Lista_Qtde"] = "Qtde";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_por_Prioridade_clie_id"] = "Clie Id";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_por_Prioridade_domi_valor"] = "Domi Valor";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_por_Prioridade_Prioridade"] = "Prioridade";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_por_Prioridade_Qtde"] = "Qtde";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_criadas_por_Usu_rio_clie_id"] = "Clie Id";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_criadas_por_Usu_rio_inclu_login"] = "Inclu Login";
	$fieldLabelsdashboard_graficos["English"]["Gr_fico_Tarefas_criadas_por_Usu_rio_qtde"] = "Qtde";
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"] = array();
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Status_clie_id"] = "Clie Id";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Status_stat_id"] = "Stat Id";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Status_stat_nm"] = "Status";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Status_qtde"] = "Qtde";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Lista_clie_id"] = "Cliente";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Lista_lista_id"] = "Lista";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Lista_lista_nm"] = "Lista";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Lista_Qtde"] = "Qtde";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Prioridade_clie_id"] = "Clie Id";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Prioridade_domi_valor"] = "Domi Valor";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Prioridade_Prioridade"] = "Prioridade";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Prioridade_Qtde"] = "Qtde";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_criadas_por_Usu_rio_clie_id"] = "Cliente";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_criadas_por_Usu_rio_inclu_login"] = "Incluído por";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_criadas_por_Usu_rio_qtde"] = "Qtde";
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdashboard_graficos["Spanish"] = array();
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Status_clie_id"] = "Clie Id";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Status_stat_id"] = "Stat Id";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Status_stat_nm"] = "Stat Nm";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Status_qtde"] = "Qtde";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Lista_clie_id"] = "Clie Id";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Lista_lista_id"] = "Lista Id";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Lista_lista_nm"] = "Lista Nm";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Lista_Qtde"] = "Qtde";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Prioridade_clie_id"] = "Clie Id";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Prioridade_domi_valor"] = "Domi Valor";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Prioridade_Prioridade"] = "Prioridade";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Prioridade_Qtde"] = "Qtde";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_criadas_por_Usu_rio_clie_id"] = "Clie Id";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_criadas_por_Usu_rio_inclu_login"] = "Inclu Login";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_criadas_por_Usu_rio_qtde"] = "Qtde";
}

//	search fields
$tdatadashboard_graficos[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas por Status", "field"=>"clie_id" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_por_Status_clie_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas por Status", "field"=>"stat_id" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_por_Status_stat_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas por Status", "field"=>"stat_nm" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_por_Status_stat_nm"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas por Status", "field"=>"qtde" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_por_Status_qtde"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas por Lista", "field"=>"clie_id" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_por_Lista_clie_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas por Lista", "field"=>"lista_id" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_por_Lista_lista_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas por Lista", "field"=>"lista_nm" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_por_Lista_lista_nm"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas por Lista", "field"=>"Qtde" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_por_Lista_Qtde"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas por Prioridade", "field"=>"clie_id" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_por_Prioridade_clie_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas por Prioridade", "field"=>"domi_valor" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_por_Prioridade_domi_valor"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas por Prioridade", "field"=>"Prioridade" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_por_Prioridade_Prioridade"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas por Prioridade", "field"=>"Qtde" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_por_Prioridade_Qtde"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas criadas por Usuário", "field"=>"clie_id" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_criadas_por_Usu_rio_clie_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas criadas por Usuário", "field"=>"inclu_login" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_criadas_por_Usu_rio_inclu_login"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Gráfico Tarefas criadas por Usuário", "field"=>"qtde" );
$tdatadashboard_graficos[".searchFields"]["Gr_fico_Tarefas_criadas_por_Usu_rio_qtde"] = $dashField;

// all search fields
$tdatadashboard_graficos[".allSearchFields"] = array();
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Status_clie_id";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Status_stat_id";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Status_stat_nm";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Status_qtde";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Lista_clie_id";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Lista_lista_id";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Lista_lista_nm";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Lista_Qtde";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Prioridade_clie_id";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Prioridade_domi_valor";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Prioridade_Prioridade";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Prioridade_Qtde";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_criadas_por_Usu_rio_clie_id";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_criadas_por_Usu_rio_inclu_login";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_criadas_por_Usu_rio_qtde";

// good like search fields
$tdatadashboard_graficos[".googleLikeFields"] = array();
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Status_clie_id";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Status_stat_id";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Status_stat_nm";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Status_qtde";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Lista_clie_id";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Lista_lista_id";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Lista_lista_nm";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Lista_Qtde";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Prioridade_clie_id";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Prioridade_domi_valor";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Prioridade_Prioridade";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Prioridade_Qtde";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_criadas_por_Usu_rio_clie_id";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_criadas_por_Usu_rio_inclu_login";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_criadas_por_Usu_rio_qtde";

$tdatadashboard_graficos[".dashElements"] = array();

	$dbelement = array( "elementName" => "gr_fico_tarefas_por_status_chart", "table" => "Gráfico Tarefas por Status", 
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_3_1";

			

	$tdatadashboard_graficos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "gr_fico_tarefas_por_lista_chart", "table" => "Gráfico Tarefas por Lista", 
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_5_0";

			

	$tdatadashboard_graficos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "gr_fico_tarefas_por_prioridade_chart", "table" => "Gráfico Tarefas por Prioridade", 
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_3_0";

			

	$tdatadashboard_graficos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "gr_fico_tarefas_criadas_por_usu_rio_chart", "table" => "Gráfico Tarefas criadas por Usuário", 
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_2_0";

			

	$tdatadashboard_graficos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "gr_fico_tarefas_por_lista_search", "table" => "Gráfico Tarefas por Lista", 
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "cell_4_0";

			

	$tdatadashboard_graficos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "dashboard_graficos_snippet", "table" => "Dashboard_Graficos", 
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "cell_0_0";

				$dbelement["snippetId"] = "Dashboard_Graficos_snippet";


	$tdatadashboard_graficos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "dashboard_graficos_snippet1", "table" => "Dashboard_Graficos", 
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "cell_0_1";

				$dbelement["snippetId"] = "Dashboard_Graficos_snippet1";


	$tdatadashboard_graficos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "dashboard_graficos_snippet2", "table" => "Dashboard_Graficos", 
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "cell_1_0";

				$dbelement["snippetId"] = "Dashboard_Graficos_snippet2";


	$tdatadashboard_graficos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "dashboard_graficos_snippet3", "table" => "Dashboard_Graficos", 
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "cell_1_1";

				$dbelement["snippetId"] = "Dashboard_Graficos_snippet3";


	$tdatadashboard_graficos[".dashElements"][] = $dbelement;

$tdatadashboard_graficos[".shortTableName"] = "dashboard_graficos";
$tdatadashboard_graficos[".entityType"] = 4;




include_once(getabspath("include/dashboard_graficos_events.php"));
$tableEvents["Dashboard_Graficos"] = new eventclass_dashboard_graficos;
$tdatadashboard_graficos[".hasEvents"] = true;


$tdatadashboard_graficos[".tableType"] = "dashboard";


			
$tdatadashboard_graficos[".addPageEvents"] = false;

$tdatadashboard_graficos[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard_Graficos"]=&$tdatadashboard_graficos;
$field_labels["Dashboard_Graficos"] = &$fieldLabelsdashboard_graficos;
$page_titles["Dashboard_Graficos"] = &$pageTitlesdashboard_graficos;

?>