<?php



$tdatatb_tarefa1 = array();
$tdatatb_tarefa1[".searchableFields"] = array();
$tdatatb_tarefa1[".ShortName"] = "tb_tarefa1";
$tdatatb_tarefa1[".OwnerID"] = "clie_id";
$tdatatb_tarefa1[".OriginalTable"] = "tb_tarefa";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );

$tdatatb_tarefa1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\",\"list2_cartoes\",\"lista_simples\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatb_tarefa1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\",\"list2_cartoes\",\"lista_simples\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatb_tarefa1[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_tarefa1 = array();
$fieldToolTipstb_tarefa1 = array();
$pageTitlestb_tarefa1 = array();
$placeHolderstb_tarefa1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_tarefa1["English"] = array();
	$fieldToolTipstb_tarefa1["English"] = array();
	$placeHolderstb_tarefa1["English"] = array();
	$pageTitlestb_tarefa1["English"] = array();
	$fieldLabelstb_tarefa1["English"]["ativ_id"] = "ID";
	$fieldToolTipstb_tarefa1["English"]["ativ_id"] = "";
	$placeHolderstb_tarefa1["English"]["ativ_id"] = "";
	$fieldLabelstb_tarefa1["English"]["clie_id"] = "Client";
	$fieldToolTipstb_tarefa1["English"]["clie_id"] = "";
	$placeHolderstb_tarefa1["English"]["clie_id"] = "Name without spaces. eg: TIPO_NAT";
	$fieldLabelstb_tarefa1["English"]["ativ_nm"] = "Name";
	$fieldToolTipstb_tarefa1["English"]["ativ_nm"] = "";
	$placeHolderstb_tarefa1["English"]["ativ_nm"] = "Order number";
	$fieldLabelstb_tarefa1["English"]["ativ_ds"] = "Description";
	$fieldToolTipstb_tarefa1["English"]["ativ_ds"] = "";
	$placeHolderstb_tarefa1["English"]["ativ_ds"] = "String without spaces (en)";
	$fieldLabelstb_tarefa1["English"]["lista_id"] = "List";
	$fieldToolTipstb_tarefa1["English"]["lista_id"] = "";
	$placeHolderstb_tarefa1["English"]["lista_id"] = "Display name";
	$fieldLabelstb_tarefa1["English"]["stat_id"] = "Status";
	$fieldToolTipstb_tarefa1["English"]["stat_id"] = "";
	$placeHolderstb_tarefa1["English"]["stat_id"] = "";
	$fieldLabelstb_tarefa1["English"]["ativ_fl_ativo"] = "Active?";
	$fieldToolTipstb_tarefa1["English"]["ativ_fl_ativo"] = "";
	$placeHolderstb_tarefa1["English"]["ativ_fl_ativo"] = "";
	$fieldLabelstb_tarefa1["English"]["ativ_prioridade"] = "Priority";
	$fieldToolTipstb_tarefa1["English"]["ativ_prioridade"] = "";
	$placeHolderstb_tarefa1["English"]["ativ_prioridade"] = "";
	$fieldLabelstb_tarefa1["English"]["ativ_concluida"] = "Completed";
	$fieldToolTipstb_tarefa1["English"]["ativ_concluida"] = "";
	$placeHolderstb_tarefa1["English"]["ativ_concluida"] = "";
	$fieldLabelstb_tarefa1["English"]["ativ_dt_ini"] = "Start date";
	$fieldToolTipstb_tarefa1["English"]["ativ_dt_ini"] = "";
	$placeHolderstb_tarefa1["English"]["ativ_dt_ini"] = "";
	$fieldLabelstb_tarefa1["English"]["ativ_dt_fim"] = "End Date";
	$fieldToolTipstb_tarefa1["English"]["ativ_dt_fim"] = "";
	$placeHolderstb_tarefa1["English"]["ativ_dt_fim"] = "";
	$fieldLabelstb_tarefa1["English"]["inclu_dt"] = "Included on";
	$fieldToolTipstb_tarefa1["English"]["inclu_dt"] = "";
	$placeHolderstb_tarefa1["English"]["inclu_dt"] = "";
	$fieldLabelstb_tarefa1["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_tarefa1["English"]["alter_dt"] = "";
	$placeHolderstb_tarefa1["English"]["alter_dt"] = "";
	$fieldLabelstb_tarefa1["English"]["inclu_login"] = "Included by";
	$fieldToolTipstb_tarefa1["English"]["inclu_login"] = "";
	$placeHolderstb_tarefa1["English"]["inclu_login"] = "";
	$fieldLabelstb_tarefa1["English"]["alter_login"] = "Changed by";
	$fieldToolTipstb_tarefa1["English"]["alter_login"] = "";
	$placeHolderstb_tarefa1["English"]["alter_login"] = "";
	$fieldLabelstb_tarefa1["English"]["ativ_domi_unid_tempo"] = "Time Unit";
	$fieldToolTipstb_tarefa1["English"]["ativ_domi_unid_tempo"] = "";
	$placeHolderstb_tarefa1["English"]["ativ_domi_unid_tempo"] = "";
	$fieldLabelstb_tarefa1["English"]["ativ_tempo_estimado"] = "Estimated Time";
	$fieldToolTipstb_tarefa1["English"]["ativ_tempo_estimado"] = "";
	$placeHolderstb_tarefa1["English"]["ativ_tempo_estimado"] = "";
	$fieldLabelstb_tarefa1["English"]["ativ_tempo_real"] = "Time Spent";
	$fieldToolTipstb_tarefa1["English"]["ativ_tempo_real"] = "";
	$placeHolderstb_tarefa1["English"]["ativ_tempo_real"] = "";
	if (count($fieldToolTipstb_tarefa1["English"]))
		$tdatatb_tarefa1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"] = array();
	$placeHolderstb_tarefa1["Portuguese(Brazil)"] = array();
	$pageTitlestb_tarefa1["Portuguese(Brazil)"] = array();
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["ativ_id"] = "ID";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["ativ_id"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["ativ_id"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["clie_id"] = "Cliente";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["clie_id"] = "Nome sem espaços. ex: TIPO_NAT";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["ativ_nm"] = "Nome";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["ativ_nm"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["ativ_nm"] = "Ordem Sequencial";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["ativ_ds"] = "Descrição";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["ativ_ds"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["ativ_ds"] = "Nome sem espaços. ex: ATIVA";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["lista_id"] = "Lista";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["lista_id"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["lista_id"] = "Nome de exibição: ex: Ativo Ok";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["stat_id"] = "Status";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["stat_id"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["stat_id"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["ativ_fl_ativo"] = "Ativo?";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["ativ_fl_ativo"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["ativ_fl_ativo"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["ativ_prioridade"] = "Prioridade";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["ativ_prioridade"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["ativ_prioridade"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["ativ_concluida"] = "Concluída";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["ativ_concluida"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["ativ_concluida"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["ativ_dt_ini"] = "Data Início";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["ativ_dt_ini"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["ativ_dt_ini"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["ativ_dt_fim"] = "Data Fim";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["ativ_dt_fim"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["ativ_dt_fim"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["alter_login"] = "Alterado por";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["alter_login"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["ativ_domi_unid_tempo"] = "Unid Tempo";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["ativ_domi_unid_tempo"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["ativ_domi_unid_tempo"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["ativ_tempo_estimado"] = "Tempo Estimado";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["ativ_tempo_estimado"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["ativ_tempo_estimado"] = "";
	$fieldLabelstb_tarefa1["Portuguese(Brazil)"]["ativ_tempo_real"] = "Tempo Real";
	$fieldToolTipstb_tarefa1["Portuguese(Brazil)"]["ativ_tempo_real"] = "";
	$placeHolderstb_tarefa1["Portuguese(Brazil)"]["ativ_tempo_real"] = "";
	if (count($fieldToolTipstb_tarefa1["Portuguese(Brazil)"]))
		$tdatatb_tarefa1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_tarefa1["Spanish"] = array();
	$fieldToolTipstb_tarefa1["Spanish"] = array();
	$placeHolderstb_tarefa1["Spanish"] = array();
	$pageTitlestb_tarefa1["Spanish"] = array();
	$fieldLabelstb_tarefa1["Spanish"]["ativ_id"] = "ID";
	$fieldToolTipstb_tarefa1["Spanish"]["ativ_id"] = "";
	$placeHolderstb_tarefa1["Spanish"]["ativ_id"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["clie_id"] = "Cliente";
	$fieldToolTipstb_tarefa1["Spanish"]["clie_id"] = "";
	$placeHolderstb_tarefa1["Spanish"]["clie_id"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["ativ_nm"] = "Nombre";
	$fieldToolTipstb_tarefa1["Spanish"]["ativ_nm"] = "";
	$placeHolderstb_tarefa1["Spanish"]["ativ_nm"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["ativ_ds"] = "Descripción";
	$fieldToolTipstb_tarefa1["Spanish"]["ativ_ds"] = "";
	$placeHolderstb_tarefa1["Spanish"]["ativ_ds"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["lista_id"] = "Lista";
	$fieldToolTipstb_tarefa1["Spanish"]["lista_id"] = "";
	$placeHolderstb_tarefa1["Spanish"]["lista_id"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["stat_id"] = "Estado";
	$fieldToolTipstb_tarefa1["Spanish"]["stat_id"] = "";
	$placeHolderstb_tarefa1["Spanish"]["stat_id"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["ativ_fl_ativo"] = "¿Activo?";
	$fieldToolTipstb_tarefa1["Spanish"]["ativ_fl_ativo"] = "";
	$placeHolderstb_tarefa1["Spanish"]["ativ_fl_ativo"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["ativ_prioridade"] = "Prioridad";
	$fieldToolTipstb_tarefa1["Spanish"]["ativ_prioridade"] = "";
	$placeHolderstb_tarefa1["Spanish"]["ativ_prioridade"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["ativ_concluida"] = "Terminado";
	$fieldToolTipstb_tarefa1["Spanish"]["ativ_concluida"] = "";
	$placeHolderstb_tarefa1["Spanish"]["ativ_concluida"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["ativ_dt_ini"] = "Fecha de inicio";
	$fieldToolTipstb_tarefa1["Spanish"]["ativ_dt_ini"] = "";
	$placeHolderstb_tarefa1["Spanish"]["ativ_dt_ini"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["ativ_dt_fim"] = "Fecha final";
	$fieldToolTipstb_tarefa1["Spanish"]["ativ_dt_fim"] = "";
	$placeHolderstb_tarefa1["Spanish"]["ativ_dt_fim"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["inclu_dt"] = "Incluido en";
	$fieldToolTipstb_tarefa1["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_tarefa1["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["alter_dt"] = "Cambiado en";
	$fieldToolTipstb_tarefa1["Spanish"]["alter_dt"] = "";
	$placeHolderstb_tarefa1["Spanish"]["alter_dt"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_tarefa1["Spanish"]["inclu_login"] = "";
	$placeHolderstb_tarefa1["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_tarefa1["Spanish"]["alter_login"] = "";
	$placeHolderstb_tarefa1["Spanish"]["alter_login"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["ativ_domi_unid_tempo"] = "Ativ Domi Unid Tempo";
	$fieldToolTipstb_tarefa1["Spanish"]["ativ_domi_unid_tempo"] = "";
	$placeHolderstb_tarefa1["Spanish"]["ativ_domi_unid_tempo"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["ativ_tempo_estimado"] = "Ativ Tempo Estimado";
	$fieldToolTipstb_tarefa1["Spanish"]["ativ_tempo_estimado"] = "";
	$placeHolderstb_tarefa1["Spanish"]["ativ_tempo_estimado"] = "";
	$fieldLabelstb_tarefa1["Spanish"]["ativ_tempo_real"] = "Ativ Tempo Real";
	$fieldToolTipstb_tarefa1["Spanish"]["ativ_tempo_real"] = "";
	$placeHolderstb_tarefa1["Spanish"]["ativ_tempo_real"] = "";
	if (count($fieldToolTipstb_tarefa1["Spanish"]))
		$tdatatb_tarefa1[".isUseToolTips"] = true;
}


	$tdatatb_tarefa1[".NCSearch"] = true;



$tdatatb_tarefa1[".shortTableName"] = "tb_tarefa1";
$tdatatb_tarefa1[".nSecOptions"] = 1;

$tdatatb_tarefa1[".mainTableOwnerID"] = "clie_id";
$tdatatb_tarefa1[".entityType"] = 0;

$tdatatb_tarefa1[".strOriginalTableName"] = "tb_tarefa";

	



$tdatatb_tarefa1[".showAddInPopup"] = false;

$tdatatb_tarefa1[".showEditInPopup"] = false;

$tdatatb_tarefa1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_tarefa1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatatb_tarefa1[".listAjax"] = true;
//	temporary
$tdatatb_tarefa1[".listAjax"] = false;

	$tdatatb_tarefa1[".audit"] = true;

	$tdatatb_tarefa1[".locking"] = false;


$pages = $tdatatb_tarefa1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_tarefa1[".edit"] = true;
	$tdatatb_tarefa1[".afterEditAction"] = 0;
	$tdatatb_tarefa1[".closePopupAfterEdit"] = 1;
	$tdatatb_tarefa1[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_tarefa1[".add"] = true;
$tdatatb_tarefa1[".afterAddAction"] = 0;
$tdatatb_tarefa1[".closePopupAfterAdd"] = 1;
$tdatatb_tarefa1[".afterAddActionDetTable"] = "tb_categorias_x_atividades";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_tarefa1[".list"] = true;
}



$tdatatb_tarefa1[".strSortControlSettingsJSON"] = "[{\"fields\":[{\"desc\":false,\"field\":\"ativ_id\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"clie_id\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"ativ_nm\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"lista_id\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"stat_id\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"ativ_prioridade\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"ativ_concluida\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"ativ_dt_ini\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"ativ_dt_fim\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"ativ_domi_unid_tempo\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"inclu_login\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"inclu_dt\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"alter_login\"}],\"label\":\"\"},{\"fields\":[{\"desc\":false,\"field\":\"alter_dt\"}],\"label\":\"\"}]";

$tdatatb_tarefa1[".strClickActionJSON"] = "{\"fields\":{\"alter_dt\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"alter_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ativ_concluida\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ativ_ds\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ativ_dt_fim\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ativ_dt_ini\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ativ_fl_ativo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ativ_id\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"tb_categorias_x_atividades\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"tb_categorias_x_atividades\",\"url\":\"\"}},\"ativ_nm\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"tb_categorias_x_atividades\"},\"openData\":{\"how\":\"popup\",\"page\":\"view\",\"table\":\"tb_categorias_x_atividades\",\"url\":\"\"}},\"ativ_prioridade\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"clie_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"inclu_dt\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"inclu_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"lista_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"stat_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"tb_categorias_x_atividades\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"tb_categorias_x_atividades\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatatb_tarefa1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_tarefa1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_tarefa1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_tarefa1[".printFriendly"] = true;
}



$tdatatb_tarefa1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_tarefa1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_tarefa1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_tarefa1[".isUseAjaxSuggest"] = true;

$tdatatb_tarefa1[".rowHighlite"] = true;



																		

$tdatatb_tarefa1[".ajaxCodeSnippetAdded"] = false;

$tdatatb_tarefa1[".buttonsAdded"] = false;

$tdatatb_tarefa1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_tarefa1[".isUseTimeForSearch"] = false;


$tdatatb_tarefa1[".badgeColor"] = "daa520";


$tdatatb_tarefa1[".allSearchFields"] = array();
$tdatatb_tarefa1[".filterFields"] = array();
$tdatatb_tarefa1[".requiredSearchFields"] = array();

$tdatatb_tarefa1[".googleLikeFields"] = array();
$tdatatb_tarefa1[".googleLikeFields"][] = "ativ_id";
$tdatatb_tarefa1[".googleLikeFields"][] = "clie_id";
$tdatatb_tarefa1[".googleLikeFields"][] = "ativ_nm";
$tdatatb_tarefa1[".googleLikeFields"][] = "ativ_ds";
$tdatatb_tarefa1[".googleLikeFields"][] = "lista_id";
$tdatatb_tarefa1[".googleLikeFields"][] = "stat_id";
$tdatatb_tarefa1[".googleLikeFields"][] = "ativ_fl_ativo";
$tdatatb_tarefa1[".googleLikeFields"][] = "ativ_prioridade";
$tdatatb_tarefa1[".googleLikeFields"][] = "ativ_concluida";
$tdatatb_tarefa1[".googleLikeFields"][] = "ativ_dt_ini";
$tdatatb_tarefa1[".googleLikeFields"][] = "ativ_dt_fim";
$tdatatb_tarefa1[".googleLikeFields"][] = "ativ_domi_unid_tempo";
$tdatatb_tarefa1[".googleLikeFields"][] = "ativ_tempo_estimado";
$tdatatb_tarefa1[".googleLikeFields"][] = "ativ_tempo_real";
$tdatatb_tarefa1[".googleLikeFields"][] = "inclu_login";
$tdatatb_tarefa1[".googleLikeFields"][] = "inclu_dt";
$tdatatb_tarefa1[".googleLikeFields"][] = "alter_login";
$tdatatb_tarefa1[".googleLikeFields"][] = "alter_dt";



$tdatatb_tarefa1[".tableType"] = "list";

$tdatatb_tarefa1[".printerPageOrientation"] = 0;
$tdatatb_tarefa1[".nPrinterPageScale"] = 100;

$tdatatb_tarefa1[".nPrinterSplitRecords"] = 40;

$tdatatb_tarefa1[".geocodingEnabled"] = false;










$tdatatb_tarefa1[".pageSize"] = 20;

$tdatatb_tarefa1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ativ_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_tarefa1[".strOrderBy"] = $tstrOrderBy;

$tdatatb_tarefa1[".orderindexes"] = array();
	$tdatatb_tarefa1[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "ativ_id");


$tdatatb_tarefa1[".sqlHead"] = "SELECT ativ_id,  clie_id,  ativ_nm,  ativ_ds,  lista_id,  stat_id,  ativ_fl_ativo,  ativ_prioridade,  ativ_concluida,  ativ_dt_ini,  ativ_dt_fim,  ativ_domi_unid_tempo,  ativ_tempo_estimado,  ativ_tempo_real,  inclu_login,  inclu_dt,  alter_login,  alter_dt";
$tdatatb_tarefa1[".sqlFrom"] = "FROM tb_tarefa";
$tdatatb_tarefa1[".sqlWhereExpr"] = "";
$tdatatb_tarefa1[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "Todas",
	'name' => "<img src=\"images/info.png\" alt=\"\" /> Todas",
	'nameType' => 'Text',
	'where' => "1 = 1",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Nao_Concluidas",
	'name' => "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Não Concluídas",
	'nameType' => 'Text',
	'where' => "ativ_concluida = 0",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Concluidas",
	'name' => "<img src=\"images/circle_green_16.png\" alt=\"\" /> Concluídas",
	'nameType' => 'Text',
	'where' => "ativ_concluida = 1",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdatatb_tarefa1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_tarefa1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_tarefa1[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_tarefa1[".highlightSearchResults"] = true;

$tableKeystb_tarefa1 = array();
$tdatatb_tarefa1[".Keys"] = $tableKeystb_tarefa1;


$tdatatb_tarefa1[".hideMobileList"] = array();
		$tdatatb_tarefa1[".hideMobileList"][2] = array();
$tdatatb_tarefa1[".hideMobileList"][2]["ativ_ds"] = true;
		$tdatatb_tarefa1[".hideMobileList"][2]["ativ_concluida"] = true;
		$tdatatb_tarefa1[".hideMobileList"][2]["ativ_dt_ini"] = true;
		$tdatatb_tarefa1[".hideMobileList"][2]["ativ_dt_fim"] = true;
		$tdatatb_tarefa1[".hideMobileList"][2]["inclu_login"] = true;
		$tdatatb_tarefa1[".hideMobileList"][2]["inclu_dt"] = true;
		$tdatatb_tarefa1[".hideMobileList"][2]["alter_login"] = true;
		$tdatatb_tarefa1[".hideMobileList"][2]["alter_dt"] = true;
		$tdatatb_tarefa1[".hideMobileList"][3] = array();
$tdatatb_tarefa1[".hideMobileList"][3]["clie_id"] = true;
		$tdatatb_tarefa1[".hideMobileList"][3]["ativ_ds"] = true;
		$tdatatb_tarefa1[".hideMobileList"][3]["ativ_fl_ativo"] = true;
		$tdatatb_tarefa1[".hideMobileList"][3]["ativ_prioridade"] = true;
		$tdatatb_tarefa1[".hideMobileList"][3]["ativ_concluida"] = true;
		$tdatatb_tarefa1[".hideMobileList"][3]["ativ_dt_ini"] = true;
		$tdatatb_tarefa1[".hideMobileList"][3]["ativ_dt_fim"] = true;
		$tdatatb_tarefa1[".hideMobileList"][3]["inclu_login"] = true;
		$tdatatb_tarefa1[".hideMobileList"][3]["inclu_dt"] = true;
		$tdatatb_tarefa1[".hideMobileList"][3]["alter_login"] = true;
		$tdatatb_tarefa1[".hideMobileList"][3]["alter_dt"] = true;
		$tdatatb_tarefa1[".hideMobileList"][4] = array();
$tdatatb_tarefa1[".hideMobileList"][4]["clie_id"] = true;
		$tdatatb_tarefa1[".hideMobileList"][4]["ativ_ds"] = true;
		$tdatatb_tarefa1[".hideMobileList"][4]["ativ_fl_ativo"] = true;
		$tdatatb_tarefa1[".hideMobileList"][4]["ativ_prioridade"] = true;
		$tdatatb_tarefa1[".hideMobileList"][4]["ativ_concluida"] = true;
		$tdatatb_tarefa1[".hideMobileList"][4]["ativ_dt_ini"] = true;
		$tdatatb_tarefa1[".hideMobileList"][4]["ativ_dt_fim"] = true;
		$tdatatb_tarefa1[".hideMobileList"][4]["inclu_login"] = true;
		$tdatatb_tarefa1[".hideMobileList"][4]["inclu_dt"] = true;
		$tdatatb_tarefa1[".hideMobileList"][4]["alter_login"] = true;
		$tdatatb_tarefa1[".hideMobileList"][4]["alter_dt"] = true;
		$tdatatb_tarefa1[".hideMobileList"][5] = array();
$tdatatb_tarefa1[".hideMobileList"][5]["clie_id"] = true;
		$tdatatb_tarefa1[".hideMobileList"][5]["ativ_ds"] = true;
		$tdatatb_tarefa1[".hideMobileList"][5]["ativ_fl_ativo"] = true;
		$tdatatb_tarefa1[".hideMobileList"][5]["ativ_prioridade"] = true;
		$tdatatb_tarefa1[".hideMobileList"][5]["ativ_concluida"] = true;
		$tdatatb_tarefa1[".hideMobileList"][5]["ativ_dt_ini"] = true;
		$tdatatb_tarefa1[".hideMobileList"][5]["ativ_dt_fim"] = true;
		$tdatatb_tarefa1[".hideMobileList"][5]["inclu_login"] = true;
		$tdatatb_tarefa1[".hideMobileList"][5]["inclu_dt"] = true;
		$tdatatb_tarefa1[".hideMobileList"][5]["alter_login"] = true;
		$tdatatb_tarefa1[".hideMobileList"][5]["alter_dt"] = true;




//	ativ_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ativ_id";
	$fdata["GoodName"] = "ativ_id";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","ativ_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ativ_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["ativ_id"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "ativ_id";
//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","clie_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "clie_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clie_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tb_clientes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "clie_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "clie_nm_reduzido";

				$edata["LookupWhere"] = "clie_id = 3";


	
	$edata["LookupOrderBy"] = "clie_nm_reduzido";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["clie_id"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "clie_id";
//	ativ_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ativ_nm";
	$fdata["GoodName"] = "ativ_nm";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","ativ_nm");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "ativ_nm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_nm";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["ativ_nm"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "ativ_nm";
//	ativ_ds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ativ_ds";
	$fdata["GoodName"] = "ativ_ds";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","ativ_ds");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "ativ_ds";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_ds";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 60;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
		$edata["insertNull"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["ativ_ds"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "ativ_ds";
//	lista_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "lista_id";
	$fdata["GoodName"] = "lista_id";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","lista_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "lista_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lista_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tb_lista_tarefa";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "lista_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "lista_nm";

	

	
	$edata["LookupOrderBy"] = "lista_nm";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "ativ_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["lista_id"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "lista_id";
//	stat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "stat_id";
	$fdata["GoodName"] = "stat_id";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","stat_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "stat_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stat_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tb_status_atividades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stat_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "stat_nm";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "ativ_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["stat_id"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "stat_id";
//	ativ_fl_ativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ativ_fl_ativo";
	$fdata["GoodName"] = "ativ_fl_ativo";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","ativ_fl_ativo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ativ_fl_ativo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_fl_ativo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["ativ_fl_ativo"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "ativ_fl_ativo";
//	ativ_prioridade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ativ_prioridade";
	$fdata["GoodName"] = "ativ_prioridade";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","ativ_prioridade");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "ativ_prioridade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_prioridade";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tb_dominios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "domi_valor";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "domi_exibe";

				$edata["LookupWhere"] = "domi_grupo = 'PRIORIDADE_ATIVIDADE'";


	
	$edata["LookupOrderBy"] = "domi_ordem";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "ativ_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["ativ_prioridade"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "ativ_prioridade";
//	ativ_concluida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ativ_concluida";
	$fdata["GoodName"] = "ativ_concluida";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","ativ_concluida");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ativ_concluida";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_concluida";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["ativ_concluida"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "ativ_concluida";
//	ativ_dt_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ativ_dt_ini";
	$fdata["GoodName"] = "ativ_dt_ini";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","ativ_dt_ini");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "ativ_dt_ini";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_dt_ini";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 20;
	$edata["LastYearFactor"] = 50;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["ativ_dt_ini"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "ativ_dt_ini";
//	ativ_dt_fim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ativ_dt_fim";
	$fdata["GoodName"] = "ativ_dt_fim";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","ativ_dt_fim");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "ativ_dt_fim";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_dt_fim";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 20;
	$edata["LastYearFactor"] = 50;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["ativ_dt_fim"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "ativ_dt_fim";
//	ativ_domi_unid_tempo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ativ_domi_unid_tempo";
	$fdata["GoodName"] = "ativ_domi_unid_tempo";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","ativ_domi_unid_tempo");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "ativ_domi_unid_tempo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_domi_unid_tempo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tb_dominios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "domi_valor";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "domi_exibe";

				$edata["LookupWhere"] = "domi_grupo = \"TEMPO_UNIDADE\"";


	
	$edata["LookupOrderBy"] = "domi_ordem";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "ativ_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["ativ_domi_unid_tempo"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "ativ_domi_unid_tempo";
//	ativ_tempo_estimado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ativ_tempo_estimado";
	$fdata["GoodName"] = "ativ_tempo_estimado";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","ativ_tempo_estimado");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ativ_tempo_estimado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_tempo_estimado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "ativ_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["ativ_tempo_estimado"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "ativ_tempo_estimado";
//	ativ_tempo_real
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ativ_tempo_real";
	$fdata["GoodName"] = "ativ_tempo_real";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","ativ_tempo_real");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ativ_tempo_real";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_tempo_real";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=3";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "ativ_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["ativ_tempo_real"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "ativ_tempo_real";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","inclu_login");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "inclu_login";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inclu_login";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["inclu_login"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","inclu_dt");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "inclu_dt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inclu_dt";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 20;
	$edata["LastYearFactor"] = 50;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "domi_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["inclu_dt"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","alter_login");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "alter_login";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alter_login";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["alter_login"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_tarefa","alter_dt");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "alter_dt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alter_dt";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 20;
	$edata["LastYearFactor"] = 50;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "domi_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefa1["alter_dt"] = $fdata;
		$tdatatb_tarefa1[".searchableFields"][] = "alter_dt";


$tables_data["tb_tarefa"]=&$tdatatb_tarefa1;
$field_labels["tb_tarefa"] = &$fieldLabelstb_tarefa1;
$fieldToolTips["tb_tarefa"] = &$fieldToolTipstb_tarefa1;
$placeHolders["tb_tarefa"] = &$placeHolderstb_tarefa1;
$page_titles["tb_tarefa"] = &$pageTitlestb_tarefa1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_tarefa"] = array();
//	tb_categorias_x_atividades
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_categorias_x_atividades";
		$detailsParam["dOriginalTable"] = "tb_categorias_x_atividades";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_categorias_x_atividades";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_categorias_x_atividades");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_tarefa"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_tarefa"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_tarefa"][$dIndex]["masterKeys"][]="ativ_id";

				$detailsTablesData["tb_tarefa"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_tarefa"][$dIndex]["detailKeys"][]="ativ_id";

// tables which are master tables for current table (detail)
$masterTablesData["tb_tarefa"] = array();



	
				$strOriginalDetailsTable="tb_lista_tarefa";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_lista_tarefa";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_lista_tarefa";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_tarefa"][0] = $masterParams;
				$masterTablesData["tb_tarefa"][0]["masterKeys"] = array();
	$masterTablesData["tb_tarefa"][0]["masterKeys"][]="lista_id";
				$masterTablesData["tb_tarefa"][0]["detailKeys"] = array();
	$masterTablesData["tb_tarefa"][0]["detailKeys"][]="lista_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_tarefa1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ativ_id,  clie_id,  ativ_nm,  ativ_ds,  lista_id,  stat_id,  ativ_fl_ativo,  ativ_prioridade,  ativ_concluida,  ativ_dt_ini,  ativ_dt_fim,  ativ_domi_unid_tempo,  ativ_tempo_estimado,  ativ_tempo_real,  inclu_login,  inclu_dt,  alter_login,  alter_dt";
$proto0["m_strFrom"] = "FROM tb_tarefa";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ativ_id DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_id",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto6["m_sql"] = "ativ_id";
$proto6["m_srcTableName"] = "tb_tarefa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto8["m_sql"] = "clie_id";
$proto8["m_srcTableName"] = "tb_tarefa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_nm",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto10["m_sql"] = "ativ_nm";
$proto10["m_srcTableName"] = "tb_tarefa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_ds",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto12["m_sql"] = "ativ_ds";
$proto12["m_srcTableName"] = "tb_tarefa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "lista_id",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto14["m_sql"] = "lista_id";
$proto14["m_srcTableName"] = "tb_tarefa";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "stat_id",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto16["m_sql"] = "stat_id";
$proto16["m_srcTableName"] = "tb_tarefa";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_fl_ativo",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto18["m_sql"] = "ativ_fl_ativo";
$proto18["m_srcTableName"] = "tb_tarefa";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_prioridade",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto20["m_sql"] = "ativ_prioridade";
$proto20["m_srcTableName"] = "tb_tarefa";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_concluida",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto22["m_sql"] = "ativ_concluida";
$proto22["m_srcTableName"] = "tb_tarefa";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_dt_ini",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto24["m_sql"] = "ativ_dt_ini";
$proto24["m_srcTableName"] = "tb_tarefa";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_dt_fim",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto26["m_sql"] = "ativ_dt_fim";
$proto26["m_srcTableName"] = "tb_tarefa";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_domi_unid_tempo",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto28["m_sql"] = "ativ_domi_unid_tempo";
$proto28["m_srcTableName"] = "tb_tarefa";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_tempo_estimado",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto30["m_sql"] = "ativ_tempo_estimado";
$proto30["m_srcTableName"] = "tb_tarefa";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_tempo_real",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto32["m_sql"] = "ativ_tempo_real";
$proto32["m_srcTableName"] = "tb_tarefa";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto34["m_sql"] = "inclu_login";
$proto34["m_srcTableName"] = "tb_tarefa";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto36["m_sql"] = "inclu_dt";
$proto36["m_srcTableName"] = "tb_tarefa";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto38["m_sql"] = "alter_login";
$proto38["m_srcTableName"] = "tb_tarefa";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto40["m_sql"] = "alter_dt";
$proto40["m_srcTableName"] = "tb_tarefa";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "tb_tarefa";
$proto43["m_srcTableName"] = "tb_tarefa";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "ativ_id";
$proto43["m_columns"][] = "clie_id";
$proto43["m_columns"][] = "ativ_nm";
$proto43["m_columns"][] = "ativ_ds";
$proto43["m_columns"][] = "lista_id";
$proto43["m_columns"][] = "stat_id";
$proto43["m_columns"][] = "ativ_fl_ativo";
$proto43["m_columns"][] = "ativ_prioridade";
$proto43["m_columns"][] = "ativ_concluida";
$proto43["m_columns"][] = "ativ_dt_ini";
$proto43["m_columns"][] = "ativ_dt_fim";
$proto43["m_columns"][] = "ativ_domi_unid_tempo";
$proto43["m_columns"][] = "ativ_tempo_estimado";
$proto43["m_columns"][] = "ativ_tempo_real";
$proto43["m_columns"][] = "inclu_login";
$proto43["m_columns"][] = "inclu_dt";
$proto43["m_columns"][] = "alter_login";
$proto43["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "tb_tarefa";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "tb_tarefa";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "ativ_id",
	"m_strTable" => "tb_tarefa",
	"m_srcTableName" => "tb_tarefa"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 0;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tb_tarefa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_tarefa1 = createSqlQuery_tb_tarefa1();


	
		;

																		

$tdatatb_tarefa1[".sqlquery"] = $queryData_tb_tarefa1;

include_once(getabspath("include/tb_tarefa1_events.php"));
$tableEvents["tb_tarefa"] = new eventclass_tb_tarefa1;
$tdatatb_tarefa1[".hasEvents"] = true;

?>