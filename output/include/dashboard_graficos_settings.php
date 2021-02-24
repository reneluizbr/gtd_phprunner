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
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"] = array();
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Status_clie_id"] = "Clie Id";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Status_stat_id"] = "Stat Id";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Status_stat_nm"] = "Status";
	$fieldLabelsdashboard_graficos["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Status_qtde"] = "Qtde";
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdashboard_graficos["Spanish"] = array();
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Status_clie_id"] = "Clie Id";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Status_stat_id"] = "Stat Id";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Status_stat_nm"] = "Stat Nm";
	$fieldLabelsdashboard_graficos["Spanish"]["Gr_fico_Tarefas_por_Status_qtde"] = "Qtde";
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

// all search fields
$tdatadashboard_graficos[".allSearchFields"] = array();
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Status_clie_id";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Status_stat_id";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Status_stat_nm";
$tdatadashboard_graficos[".allSearchFields"][] = "Gr_fico_Tarefas_por_Status_qtde";

// good like search fields
$tdatadashboard_graficos[".googleLikeFields"] = array();
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Status_clie_id";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Status_stat_id";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Status_stat_nm";
$tdatadashboard_graficos[".googleLikeFields"][] = "Gr_fico_Tarefas_por_Status_qtde";

$tdatadashboard_graficos[".dashElements"] = array();

	$dbelement = array( "elementName" => "gr_fico_tarefas_por_status_chart", "table" => "Gráfico Tarefas por Status", 
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_1_1";

			

	$tdatadashboard_graficos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "gr_fico_tarefas_por_lista_chart", "table" => "Gráfico Tarefas por Lista", 
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_3_0";

			

	$tdatadashboard_graficos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "gr_fico_tarefas_por_prioridade_chart", "table" => "Gráfico Tarefas por Prioridade", 
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_1_0";

			

	$tdatadashboard_graficos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "gr_fico_tarefas_criadas_por_usu_rio_chart", "table" => "Gráfico Tarefas criadas por Usuário", 
		 "pageName" => "chart","type" => 1);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdatadashboard_graficos[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "gr_fico_tarefas_por_lista_search", "table" => "Gráfico Tarefas por Lista", 
		 "pageName" => "","type" => 4);
	$dbelement["cellName"] = "cell_2_0";

			

	$tdatadashboard_graficos[".dashElements"][] = $dbelement;

$tdatadashboard_graficos[".shortTableName"] = "dashboard_graficos";
$tdatadashboard_graficos[".entityType"] = 4;



$tableEvents["Dashboard_Graficos"] = new eventsBase;
$tdatadashboard_graficos[".hasEvents"] = false;


$tdatadashboard_graficos[".tableType"] = "dashboard";


			
$tdatadashboard_graficos[".addPageEvents"] = false;

$tdatadashboard_graficos[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard_Graficos"]=&$tdatadashboard_graficos;
$field_labels["Dashboard_Graficos"] = &$fieldLabelsdashboard_graficos;
$page_titles["Dashboard_Graficos"] = &$pageTitlesdashboard_graficos;

?>