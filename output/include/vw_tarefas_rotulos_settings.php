<?php



$tdatavw_tarefas_rotulos = array();
$tdatavw_tarefas_rotulos[".searchableFields"] = array();
$tdatavw_tarefas_rotulos[".ShortName"] = "vw_tarefas_rotulos";
$tdatavw_tarefas_rotulos[".OwnerID"] = "";
$tdatavw_tarefas_rotulos[".OriginalTable"] = "vw_tarefas_rotulos";


$defaultPages = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatavw_tarefas_rotulos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavw_tarefas_rotulos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavw_tarefas_rotulos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsvw_tarefas_rotulos = array();
$fieldToolTipsvw_tarefas_rotulos = array();
$pageTitlesvw_tarefas_rotulos = array();
$placeHoldersvw_tarefas_rotulos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_tarefas_rotulos["English"] = array();
	$fieldToolTipsvw_tarefas_rotulos["English"] = array();
	$placeHoldersvw_tarefas_rotulos["English"] = array();
	$pageTitlesvw_tarefas_rotulos["English"] = array();
	$fieldLabelsvw_tarefas_rotulos["English"]["Rotulos"] = "Rotulos";
	$fieldToolTipsvw_tarefas_rotulos["English"]["Rotulos"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["Rotulos"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["ativ_id"] = "Ativ Id";
	$fieldToolTipsvw_tarefas_rotulos["English"]["ativ_id"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["ativ_id"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["clie_id"] = "Clie Id";
	$fieldToolTipsvw_tarefas_rotulos["English"]["clie_id"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["clie_id"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["ativ_nm"] = "Ativ Nm";
	$fieldToolTipsvw_tarefas_rotulos["English"]["ativ_nm"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["ativ_nm"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["cate_nm"] = "Cate Nm";
	$fieldToolTipsvw_tarefas_rotulos["English"]["cate_nm"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["cate_nm"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["ativ_ds"] = "Ativ Ds";
	$fieldToolTipsvw_tarefas_rotulos["English"]["ativ_ds"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["ativ_ds"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["lista_id"] = "Lista Id";
	$fieldToolTipsvw_tarefas_rotulos["English"]["lista_id"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["lista_id"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["lista_nm"] = "Lista Nm";
	$fieldToolTipsvw_tarefas_rotulos["English"]["lista_nm"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["lista_nm"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["stat_id"] = "Stat Id";
	$fieldToolTipsvw_tarefas_rotulos["English"]["stat_id"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["stat_id"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["stat_nm"] = "Stat Nm";
	$fieldToolTipsvw_tarefas_rotulos["English"]["stat_nm"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["stat_nm"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["ativ_fl_ativo"] = "Ativ Fl Ativo";
	$fieldToolTipsvw_tarefas_rotulos["English"]["ativ_fl_ativo"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["ativ_fl_ativo"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["ativ_prioridade"] = "Ativ Prioridade";
	$fieldToolTipsvw_tarefas_rotulos["English"]["ativ_prioridade"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["ativ_prioridade"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["ativ_concluida"] = "Ativ Concluida";
	$fieldToolTipsvw_tarefas_rotulos["English"]["ativ_concluida"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["ativ_concluida"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["ativ_dt_ini"] = "Ativ Dt Ini";
	$fieldToolTipsvw_tarefas_rotulos["English"]["ativ_dt_ini"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["ativ_dt_ini"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["ativ_dt_fim"] = "Ativ Dt Fim";
	$fieldToolTipsvw_tarefas_rotulos["English"]["ativ_dt_fim"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["ativ_dt_fim"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipsvw_tarefas_rotulos["English"]["inclu_login"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["inclu_login"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipsvw_tarefas_rotulos["English"]["inclu_dt"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["inclu_dt"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["alter_login"] = "Alter Login";
	$fieldToolTipsvw_tarefas_rotulos["English"]["alter_login"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["alter_login"] = "";
	$fieldLabelsvw_tarefas_rotulos["English"]["alter_dt"] = "Alter Dt";
	$fieldToolTipsvw_tarefas_rotulos["English"]["alter_dt"] = "";
	$placeHoldersvw_tarefas_rotulos["English"]["alter_dt"] = "";
	if (count($fieldToolTipsvw_tarefas_rotulos["English"]))
		$tdatavw_tarefas_rotulos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"] = array();
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"] = array();
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"] = array();
	$pageTitlesvw_tarefas_rotulos["Portuguese(Brazil)"] = array();
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_id"] = "Ativ Id";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_id"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_id"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["clie_id"] = "Clie Id";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_nm"] = "Ativ Nm";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_nm"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_nm"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["cate_nm"] = "Cate Nm";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["cate_nm"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["cate_nm"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_ds"] = "Ativ Ds";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_ds"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_ds"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["lista_id"] = "Lista Id";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["lista_id"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["lista_id"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["lista_nm"] = "Lista Nm";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["lista_nm"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["lista_nm"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["stat_id"] = "Stat Id";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["stat_id"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["stat_id"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["stat_nm"] = "Stat Nm";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["stat_nm"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["stat_nm"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_fl_ativo"] = "Ativ Fl Ativo";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_fl_ativo"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_fl_ativo"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_prioridade"] = "Ativ Prioridade";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_prioridade"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_prioridade"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_concluida"] = "Ativ Concluida";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_concluida"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_concluida"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_dt_ini"] = "Ativ Dt Ini";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_dt_ini"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_dt_ini"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_dt_fim"] = "Ativ Dt Fim";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_dt_fim"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["ativ_dt_fim"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["inclu_login"] = "Inclu Login";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["alter_login"] = "Alter Login";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["alter_login"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["alter_dt"] = "Alter Dt";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelsvw_tarefas_rotulos["Portuguese(Brazil)"]["Rotulos"] = "Rotulos";
	$fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]["Rotulos"] = "";
	$placeHoldersvw_tarefas_rotulos["Portuguese(Brazil)"]["Rotulos"] = "";
	if (count($fieldToolTipsvw_tarefas_rotulos["Portuguese(Brazil)"]))
		$tdatavw_tarefas_rotulos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvw_tarefas_rotulos["Spanish"] = array();
	$fieldToolTipsvw_tarefas_rotulos["Spanish"] = array();
	$placeHoldersvw_tarefas_rotulos["Spanish"] = array();
	$pageTitlesvw_tarefas_rotulos["Spanish"] = array();
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["Rotulos"] = "Rotulos";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["Rotulos"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["Rotulos"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["ativ_id"] = "Ativ Id";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["ativ_id"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["ativ_id"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["clie_id"] = "Clie Id";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["clie_id"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["clie_id"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["ativ_nm"] = "Ativ Nm";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["ativ_nm"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["ativ_nm"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["cate_nm"] = "Cate Nm";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["cate_nm"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["cate_nm"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["ativ_ds"] = "Ativ Ds";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["ativ_ds"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["ativ_ds"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["lista_id"] = "Lista Id";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["lista_id"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["lista_id"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["lista_nm"] = "Lista Nm";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["lista_nm"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["lista_nm"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["stat_id"] = "Stat Id";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["stat_id"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["stat_id"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["stat_nm"] = "Stat Nm";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["stat_nm"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["stat_nm"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["ativ_fl_ativo"] = "Ativ Fl Ativo";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["ativ_fl_ativo"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["ativ_fl_ativo"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["ativ_prioridade"] = "Ativ Prioridade";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["ativ_prioridade"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["ativ_prioridade"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["ativ_concluida"] = "Ativ Concluida";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["ativ_concluida"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["ativ_concluida"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["ativ_dt_ini"] = "Ativ Dt Ini";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["ativ_dt_ini"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["ativ_dt_ini"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["ativ_dt_fim"] = "Ativ Dt Fim";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["ativ_dt_fim"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["ativ_dt_fim"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["inclu_login"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["inclu_login"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["inclu_dt"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["inclu_dt"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["alter_login"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["alter_login"] = "";
	$fieldLabelsvw_tarefas_rotulos["Spanish"]["alter_dt"] = "Alter Dt";
	$fieldToolTipsvw_tarefas_rotulos["Spanish"]["alter_dt"] = "";
	$placeHoldersvw_tarefas_rotulos["Spanish"]["alter_dt"] = "";
	if (count($fieldToolTipsvw_tarefas_rotulos["Spanish"]))
		$tdatavw_tarefas_rotulos[".isUseToolTips"] = true;
}


	$tdatavw_tarefas_rotulos[".NCSearch"] = true;



$tdatavw_tarefas_rotulos[".shortTableName"] = "vw_tarefas_rotulos";
$tdatavw_tarefas_rotulos[".nSecOptions"] = 0;

$tdatavw_tarefas_rotulos[".mainTableOwnerID"] = "";
$tdatavw_tarefas_rotulos[".entityType"] = 0;

$tdatavw_tarefas_rotulos[".strOriginalTableName"] = "vw_tarefas_rotulos";

	



$tdatavw_tarefas_rotulos[".showAddInPopup"] = false;

$tdatavw_tarefas_rotulos[".showEditInPopup"] = false;

$tdatavw_tarefas_rotulos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_tarefas_rotulos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_tarefas_rotulos[".listAjax"] = false;
//	temporary
$tdatavw_tarefas_rotulos[".listAjax"] = false;

	$tdatavw_tarefas_rotulos[".audit"] = false;

	$tdatavw_tarefas_rotulos[".locking"] = false;


$pages = $tdatavw_tarefas_rotulos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavw_tarefas_rotulos[".edit"] = true;
	$tdatavw_tarefas_rotulos[".afterEditAction"] = 1;
	$tdatavw_tarefas_rotulos[".closePopupAfterEdit"] = 1;
	$tdatavw_tarefas_rotulos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavw_tarefas_rotulos[".add"] = true;
$tdatavw_tarefas_rotulos[".afterAddAction"] = 1;
$tdatavw_tarefas_rotulos[".closePopupAfterAdd"] = 1;
$tdatavw_tarefas_rotulos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavw_tarefas_rotulos[".list"] = true;
}



$tdatavw_tarefas_rotulos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavw_tarefas_rotulos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavw_tarefas_rotulos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavw_tarefas_rotulos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavw_tarefas_rotulos[".printFriendly"] = true;
}



$tdatavw_tarefas_rotulos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavw_tarefas_rotulos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavw_tarefas_rotulos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavw_tarefas_rotulos[".isUseAjaxSuggest"] = true;

$tdatavw_tarefas_rotulos[".rowHighlite"] = true;



									

$tdatavw_tarefas_rotulos[".ajaxCodeSnippetAdded"] = false;

$tdatavw_tarefas_rotulos[".buttonsAdded"] = false;

$tdatavw_tarefas_rotulos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_tarefas_rotulos[".isUseTimeForSearch"] = false;


$tdatavw_tarefas_rotulos[".badgeColor"] = "DB7093";


$tdatavw_tarefas_rotulos[".allSearchFields"] = array();
$tdatavw_tarefas_rotulos[".filterFields"] = array();
$tdatavw_tarefas_rotulos[".requiredSearchFields"] = array();

$tdatavw_tarefas_rotulos[".googleLikeFields"] = array();
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "ativ_id";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "clie_id";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "ativ_nm";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "cate_nm";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "ativ_ds";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "lista_id";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "lista_nm";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "stat_id";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "stat_nm";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "ativ_fl_ativo";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "ativ_prioridade";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "ativ_concluida";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "ativ_dt_ini";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "ativ_dt_fim";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "inclu_login";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "inclu_dt";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "alter_login";
$tdatavw_tarefas_rotulos[".googleLikeFields"][] = "alter_dt";



$tdatavw_tarefas_rotulos[".tableType"] = "list";

$tdatavw_tarefas_rotulos[".printerPageOrientation"] = 0;
$tdatavw_tarefas_rotulos[".nPrinterPageScale"] = 100;

$tdatavw_tarefas_rotulos[".nPrinterSplitRecords"] = 40;

$tdatavw_tarefas_rotulos[".geocodingEnabled"] = false;










$tdatavw_tarefas_rotulos[".pageSize"] = 20;

$tdatavw_tarefas_rotulos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_tarefas_rotulos[".strOrderBy"] = $tstrOrderBy;

$tdatavw_tarefas_rotulos[".orderindexes"] = array();

$tdatavw_tarefas_rotulos[".sqlHead"] = "SELECT Rotulos,  	ativ_id,  	clie_id,  	ativ_nm,  	cate_nm,  	ativ_ds,  	lista_id,  	lista_nm,  	stat_id,  	stat_nm,  	ativ_fl_ativo,  	ativ_prioridade,  	ativ_concluida,  	ativ_dt_ini,  	ativ_dt_fim,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatavw_tarefas_rotulos[".sqlFrom"] = "FROM vw_tarefas_rotulos";
$tdatavw_tarefas_rotulos[".sqlWhereExpr"] = "";
$tdatavw_tarefas_rotulos[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatavw_tarefas_rotulos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_tarefas_rotulos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_tarefas_rotulos[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_tarefas_rotulos[".highlightSearchResults"] = true;

$tableKeysvw_tarefas_rotulos = array();
$tableKeysvw_tarefas_rotulos[] = "ativ_id";
$tdatavw_tarefas_rotulos[".Keys"] = $tableKeysvw_tarefas_rotulos;


$tdatavw_tarefas_rotulos[".hideMobileList"] = array();




//	Rotulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Rotulos";
	$fdata["GoodName"] = "Rotulos";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","Rotulos");
	$fdata["FieldType"] = 205;

	
	
	
			

		$fdata["strField"] = "Rotulos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rotulos";

	
	
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

	$edata = array("EditFormat" => "Database image");

	
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


	$tdatavw_tarefas_rotulos["Rotulos"] = $fdata;
	//	ativ_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ativ_id";
	$fdata["GoodName"] = "ativ_id";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","ativ_id");
	$fdata["FieldType"] = 3;

	
	
	
			

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavw_tarefas_rotulos["ativ_id"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "ativ_id";
//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","clie_id");
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavw_tarefas_rotulos["clie_id"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "clie_id";
//	ativ_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ativ_nm";
	$fdata["GoodName"] = "ativ_nm";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","ativ_nm");
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


	$tdatavw_tarefas_rotulos["ativ_nm"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "ativ_nm";
//	cate_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cate_nm";
	$fdata["GoodName"] = "cate_nm";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","cate_nm");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "cate_nm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cate_nm";

	
	
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


	$tdatavw_tarefas_rotulos["cate_nm"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "cate_nm";
//	ativ_ds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ativ_ds";
	$fdata["GoodName"] = "ativ_ds";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","ativ_ds");
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


	$tdatavw_tarefas_rotulos["ativ_ds"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "ativ_ds";
//	lista_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "lista_id";
	$fdata["GoodName"] = "lista_id";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","lista_id");
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavw_tarefas_rotulos["lista_id"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "lista_id";
//	lista_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lista_nm";
	$fdata["GoodName"] = "lista_nm";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","lista_nm");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "lista_nm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lista_nm";

	
	
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


	$tdatavw_tarefas_rotulos["lista_nm"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "lista_nm";
//	stat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "stat_id";
	$fdata["GoodName"] = "stat_id";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","stat_id");
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavw_tarefas_rotulos["stat_id"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "stat_id";
//	stat_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "stat_nm";
	$fdata["GoodName"] = "stat_nm";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","stat_nm");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "stat_nm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stat_nm";

	
	
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


	$tdatavw_tarefas_rotulos["stat_nm"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "stat_nm";
//	ativ_fl_ativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ativ_fl_ativo";
	$fdata["GoodName"] = "ativ_fl_ativo";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","ativ_fl_ativo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ativ_fl_ativo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_fl_ativo";

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavw_tarefas_rotulos["ativ_fl_ativo"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "ativ_fl_ativo";
//	ativ_prioridade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ativ_prioridade";
	$fdata["GoodName"] = "ativ_prioridade";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","ativ_prioridade");
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


	$tdatavw_tarefas_rotulos["ativ_prioridade"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "ativ_prioridade";
//	ativ_concluida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ativ_concluida";
	$fdata["GoodName"] = "ativ_concluida";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","ativ_concluida");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ativ_concluida";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_concluida";

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavw_tarefas_rotulos["ativ_concluida"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "ativ_concluida";
//	ativ_dt_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ativ_dt_ini";
	$fdata["GoodName"] = "ativ_dt_ini";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","ativ_dt_ini");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatavw_tarefas_rotulos["ativ_dt_ini"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "ativ_dt_ini";
//	ativ_dt_fim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ativ_dt_fim";
	$fdata["GoodName"] = "ativ_dt_fim";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","ativ_dt_fim");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatavw_tarefas_rotulos["ativ_dt_fim"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "ativ_dt_fim";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","inclu_login");
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


	$tdatavw_tarefas_rotulos["inclu_login"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","inclu_dt");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "inclu_dt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inclu_dt";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatavw_tarefas_rotulos["inclu_dt"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","alter_login");
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


	$tdatavw_tarefas_rotulos["alter_login"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "vw_tarefas_rotulos";
	$fdata["Label"] = GetFieldLabel("vw_tarefas_rotulos","alter_dt");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "alter_dt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alter_dt";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatavw_tarefas_rotulos["alter_dt"] = $fdata;
		$tdatavw_tarefas_rotulos[".searchableFields"][] = "alter_dt";


$tables_data["vw_tarefas_rotulos"]=&$tdatavw_tarefas_rotulos;
$field_labels["vw_tarefas_rotulos"] = &$fieldLabelsvw_tarefas_rotulos;
$fieldToolTips["vw_tarefas_rotulos"] = &$fieldToolTipsvw_tarefas_rotulos;
$placeHolders["vw_tarefas_rotulos"] = &$placeHoldersvw_tarefas_rotulos;
$page_titles["vw_tarefas_rotulos"] = &$pageTitlesvw_tarefas_rotulos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_tarefas_rotulos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_tarefas_rotulos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_tarefas_rotulos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Rotulos,  	ativ_id,  	clie_id,  	ativ_nm,  	cate_nm,  	ativ_ds,  	lista_id,  	lista_nm,  	stat_id,  	stat_nm,  	ativ_fl_ativo,  	ativ_prioridade,  	ativ_concluida,  	ativ_dt_ini,  	ativ_dt_fim,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM vw_tarefas_rotulos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strName" => "Rotulos",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto6["m_sql"] = "Rotulos";
$proto6["m_srcTableName"] = "vw_tarefas_rotulos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_id",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto8["m_sql"] = "ativ_id";
$proto8["m_srcTableName"] = "vw_tarefas_rotulos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto10["m_sql"] = "clie_id";
$proto10["m_srcTableName"] = "vw_tarefas_rotulos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_nm",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto12["m_sql"] = "ativ_nm";
$proto12["m_srcTableName"] = "vw_tarefas_rotulos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cate_nm",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto14["m_sql"] = "cate_nm";
$proto14["m_srcTableName"] = "vw_tarefas_rotulos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_ds",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto16["m_sql"] = "ativ_ds";
$proto16["m_srcTableName"] = "vw_tarefas_rotulos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "lista_id",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto18["m_sql"] = "lista_id";
$proto18["m_srcTableName"] = "vw_tarefas_rotulos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "lista_nm",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto20["m_sql"] = "lista_nm";
$proto20["m_srcTableName"] = "vw_tarefas_rotulos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "stat_id",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto22["m_sql"] = "stat_id";
$proto22["m_srcTableName"] = "vw_tarefas_rotulos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "stat_nm",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto24["m_sql"] = "stat_nm";
$proto24["m_srcTableName"] = "vw_tarefas_rotulos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_fl_ativo",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto26["m_sql"] = "ativ_fl_ativo";
$proto26["m_srcTableName"] = "vw_tarefas_rotulos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_prioridade",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto28["m_sql"] = "ativ_prioridade";
$proto28["m_srcTableName"] = "vw_tarefas_rotulos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_concluida",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto30["m_sql"] = "ativ_concluida";
$proto30["m_srcTableName"] = "vw_tarefas_rotulos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_dt_ini",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto32["m_sql"] = "ativ_dt_ini";
$proto32["m_srcTableName"] = "vw_tarefas_rotulos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_dt_fim",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto34["m_sql"] = "ativ_dt_fim";
$proto34["m_srcTableName"] = "vw_tarefas_rotulos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto36["m_sql"] = "inclu_login";
$proto36["m_srcTableName"] = "vw_tarefas_rotulos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto38["m_sql"] = "inclu_dt";
$proto38["m_srcTableName"] = "vw_tarefas_rotulos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto40["m_sql"] = "alter_login";
$proto40["m_srcTableName"] = "vw_tarefas_rotulos";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "vw_tarefas_rotulos",
	"m_srcTableName" => "vw_tarefas_rotulos"
));

$proto42["m_sql"] = "alter_dt";
$proto42["m_srcTableName"] = "vw_tarefas_rotulos";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "vw_tarefas_rotulos";
$proto45["m_srcTableName"] = "vw_tarefas_rotulos";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "Rotulos";
$proto45["m_columns"][] = "ativ_id";
$proto45["m_columns"][] = "clie_id";
$proto45["m_columns"][] = "ativ_nm";
$proto45["m_columns"][] = "cate_nm";
$proto45["m_columns"][] = "ativ_ds";
$proto45["m_columns"][] = "lista_id";
$proto45["m_columns"][] = "lista_nm";
$proto45["m_columns"][] = "stat_id";
$proto45["m_columns"][] = "stat_nm";
$proto45["m_columns"][] = "ativ_fl_ativo";
$proto45["m_columns"][] = "ativ_prioridade";
$proto45["m_columns"][] = "ativ_concluida";
$proto45["m_columns"][] = "ativ_dt_ini";
$proto45["m_columns"][] = "ativ_dt_fim";
$proto45["m_columns"][] = "inclu_login";
$proto45["m_columns"][] = "inclu_dt";
$proto45["m_columns"][] = "alter_login";
$proto45["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "vw_tarefas_rotulos";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "vw_tarefas_rotulos";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vw_tarefas_rotulos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_tarefas_rotulos = createSqlQuery_vw_tarefas_rotulos();


	
		;

																			

$tdatavw_tarefas_rotulos[".sqlquery"] = $queryData_vw_tarefas_rotulos;

$tableEvents["vw_tarefas_rotulos"] = new eventsBase;
$tdatavw_tarefas_rotulos[".hasEvents"] = false;

?>