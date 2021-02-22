<?php



$tdatatb_atividade = array();
$tdatatb_atividade[".searchableFields"] = array();
$tdatatb_atividade[".ShortName"] = "tb_atividade";
$tdatatb_atividade[".OwnerID"] = "clie_id";
$tdatatb_atividade[".OriginalTable"] = "tb_atividade";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_atividade[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list2_cartoes\",\"lista_simples\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_atividade[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list2_cartoes\",\"lista_simples\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_atividade[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_atividade = array();
$fieldToolTipstb_atividade = array();
$pageTitlestb_atividade = array();
$placeHolderstb_atividade = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_atividade["English"] = array();
	$fieldToolTipstb_atividade["English"] = array();
	$placeHolderstb_atividade["English"] = array();
	$pageTitlestb_atividade["English"] = array();
	$fieldLabelstb_atividade["English"]["ativ_id"] = "ID";
	$fieldToolTipstb_atividade["English"]["ativ_id"] = "";
	$placeHolderstb_atividade["English"]["ativ_id"] = "";
	$fieldLabelstb_atividade["English"]["clie_id"] = "Client";
	$fieldToolTipstb_atividade["English"]["clie_id"] = "";
	$placeHolderstb_atividade["English"]["clie_id"] = "";
	$fieldLabelstb_atividade["English"]["ativ_nm"] = "Name";
	$fieldToolTipstb_atividade["English"]["ativ_nm"] = "";
	$placeHolderstb_atividade["English"]["ativ_nm"] = "Task Name...";
	$fieldLabelstb_atividade["English"]["ativ_ds"] = "Description";
	$fieldToolTipstb_atividade["English"]["ativ_ds"] = "";
	$placeHolderstb_atividade["English"]["ativ_ds"] = "Task details...";
	$fieldLabelstb_atividade["English"]["lista_id"] = "List";
	$fieldToolTipstb_atividade["English"]["lista_id"] = "";
	$placeHolderstb_atividade["English"]["lista_id"] = "";
	$fieldLabelstb_atividade["English"]["stat_id"] = "Status";
	$fieldToolTipstb_atividade["English"]["stat_id"] = "";
	$placeHolderstb_atividade["English"]["stat_id"] = "";
	$fieldLabelstb_atividade["English"]["ativ_fl_ativo"] = "Active?";
	$fieldToolTipstb_atividade["English"]["ativ_fl_ativo"] = "";
	$placeHolderstb_atividade["English"]["ativ_fl_ativo"] = "";
	$fieldLabelstb_atividade["English"]["ativ_prioridade"] = "Priority";
	$fieldToolTipstb_atividade["English"]["ativ_prioridade"] = "";
	$placeHolderstb_atividade["English"]["ativ_prioridade"] = "";
	$fieldLabelstb_atividade["English"]["ativ_concluida"] = "Completed";
	$fieldToolTipstb_atividade["English"]["ativ_concluida"] = "";
	$placeHolderstb_atividade["English"]["ativ_concluida"] = "";
	$fieldLabelstb_atividade["English"]["ativ_dt_ini"] = "Start date";
	$fieldToolTipstb_atividade["English"]["ativ_dt_ini"] = "";
	$placeHolderstb_atividade["English"]["ativ_dt_ini"] = "";
	$fieldLabelstb_atividade["English"]["ativ_dt_fim"] = "End Date";
	$fieldToolTipstb_atividade["English"]["ativ_dt_fim"] = "";
	$placeHolderstb_atividade["English"]["ativ_dt_fim"] = "";
	$fieldLabelstb_atividade["English"]["inclu_dt"] = "Included in";
	$fieldToolTipstb_atividade["English"]["inclu_dt"] = "";
	$placeHolderstb_atividade["English"]["inclu_dt"] = "";
	$fieldLabelstb_atividade["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_atividade["English"]["alter_dt"] = "";
	$placeHolderstb_atividade["English"]["alter_dt"] = "";
	$fieldLabelstb_atividade["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_atividade["English"]["inclu_login"] = "";
	$placeHolderstb_atividade["English"]["inclu_login"] = "";
	$fieldLabelstb_atividade["English"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_atividade["English"]["alter_login"] = "";
	$placeHolderstb_atividade["English"]["alter_login"] = "";
	if (count($fieldToolTipstb_atividade["English"]))
		$tdatatb_atividade[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_atividade["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_atividade["Portuguese(Brazil)"] = array();
	$placeHolderstb_atividade["Portuguese(Brazil)"] = array();
	$pageTitlestb_atividade["Portuguese(Brazil)"] = array();
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["ativ_id"] = "ID";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["ativ_id"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["ativ_id"] = "";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["clie_id"] = "Cliente";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["ativ_nm"] = "Nome";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["ativ_nm"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["ativ_nm"] = "Nome da Tarefa...";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["ativ_ds"] = "Descrição";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["ativ_ds"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["ativ_ds"] = "Detalhes da Atividade...";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["lista_id"] = "Lista";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["lista_id"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["lista_id"] = "";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["stat_id"] = "Status";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["stat_id"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["stat_id"] = "";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["ativ_fl_ativo"] = "Ativo?";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["ativ_fl_ativo"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["ativ_fl_ativo"] = "";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["ativ_prioridade"] = "Prioridade";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["ativ_prioridade"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["ativ_prioridade"] = "";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["ativ_concluida"] = "Concluída";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["ativ_concluida"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["ativ_concluida"] = "";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["ativ_dt_ini"] = "Data Início";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["ativ_dt_ini"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["ativ_dt_ini"] = "";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["ativ_dt_fim"] = "Data Fim";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["ativ_dt_fim"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["ativ_dt_fim"] = "";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_atividade["Portuguese(Brazil)"]["alter_login"] = "Alterado por";
	$fieldToolTipstb_atividade["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_atividade["Portuguese(Brazil)"]["alter_login"] = "";
	if (count($fieldToolTipstb_atividade["Portuguese(Brazil)"]))
		$tdatatb_atividade[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_atividade["Spanish"] = array();
	$fieldToolTipstb_atividade["Spanish"] = array();
	$placeHolderstb_atividade["Spanish"] = array();
	$pageTitlestb_atividade["Spanish"] = array();
	$fieldLabelstb_atividade["Spanish"]["ativ_id"] = "ID";
	$fieldToolTipstb_atividade["Spanish"]["ativ_id"] = "";
	$placeHolderstb_atividade["Spanish"]["ativ_id"] = "";
	$fieldLabelstb_atividade["Spanish"]["clie_id"] = "Cliente";
	$fieldToolTipstb_atividade["Spanish"]["clie_id"] = "";
	$placeHolderstb_atividade["Spanish"]["clie_id"] = "";
	$fieldLabelstb_atividade["Spanish"]["ativ_nm"] = "Nombre";
	$fieldToolTipstb_atividade["Spanish"]["ativ_nm"] = "";
	$placeHolderstb_atividade["Spanish"]["ativ_nm"] = "";
	$fieldLabelstb_atividade["Spanish"]["ativ_ds"] = "Descripción";
	$fieldToolTipstb_atividade["Spanish"]["ativ_ds"] = "";
	$placeHolderstb_atividade["Spanish"]["ativ_ds"] = "";
	$fieldLabelstb_atividade["Spanish"]["lista_id"] = "Lista";
	$fieldToolTipstb_atividade["Spanish"]["lista_id"] = "";
	$placeHolderstb_atividade["Spanish"]["lista_id"] = "";
	$fieldLabelstb_atividade["Spanish"]["stat_id"] = "Estado";
	$fieldToolTipstb_atividade["Spanish"]["stat_id"] = "";
	$placeHolderstb_atividade["Spanish"]["stat_id"] = "";
	$fieldLabelstb_atividade["Spanish"]["ativ_fl_ativo"] = "¿Activo?";
	$fieldToolTipstb_atividade["Spanish"]["ativ_fl_ativo"] = "";
	$placeHolderstb_atividade["Spanish"]["ativ_fl_ativo"] = "";
	$fieldLabelstb_atividade["Spanish"]["ativ_prioridade"] = "Prioridad";
	$fieldToolTipstb_atividade["Spanish"]["ativ_prioridade"] = "";
	$placeHolderstb_atividade["Spanish"]["ativ_prioridade"] = "";
	$fieldLabelstb_atividade["Spanish"]["ativ_concluida"] = "Terminado";
	$fieldToolTipstb_atividade["Spanish"]["ativ_concluida"] = "";
	$placeHolderstb_atividade["Spanish"]["ativ_concluida"] = "";
	$fieldLabelstb_atividade["Spanish"]["ativ_dt_ini"] = "Fecha de inicio";
	$fieldToolTipstb_atividade["Spanish"]["ativ_dt_ini"] = "";
	$placeHolderstb_atividade["Spanish"]["ativ_dt_ini"] = "";
	$fieldLabelstb_atividade["Spanish"]["ativ_dt_fim"] = "Fecha final";
	$fieldToolTipstb_atividade["Spanish"]["ativ_dt_fim"] = "";
	$placeHolderstb_atividade["Spanish"]["ativ_dt_fim"] = "";
	$fieldLabelstb_atividade["Spanish"]["inclu_dt"] = "Incluido en";
	$fieldToolTipstb_atividade["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_atividade["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_atividade["Spanish"]["alter_dt"] = "Cambiado en";
	$fieldToolTipstb_atividade["Spanish"]["alter_dt"] = "";
	$placeHolderstb_atividade["Spanish"]["alter_dt"] = "";
	$fieldLabelstb_atividade["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_atividade["Spanish"]["inclu_login"] = "";
	$placeHolderstb_atividade["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_atividade["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_atividade["Spanish"]["alter_login"] = "";
	$placeHolderstb_atividade["Spanish"]["alter_login"] = "";
	if (count($fieldToolTipstb_atividade["Spanish"]))
		$tdatatb_atividade[".isUseToolTips"] = true;
}


	$tdatatb_atividade[".NCSearch"] = true;



$tdatatb_atividade[".shortTableName"] = "tb_atividade";
$tdatatb_atividade[".nSecOptions"] = 1;

$tdatatb_atividade[".mainTableOwnerID"] = "clie_id";
$tdatatb_atividade[".entityType"] = 0;

$tdatatb_atividade[".strOriginalTableName"] = "tb_atividade";

	



$tdatatb_atividade[".showAddInPopup"] = false;

$tdatatb_atividade[".showEditInPopup"] = false;

$tdatatb_atividade[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_atividade[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_atividade[".listAjax"] = false;
//	temporary
$tdatatb_atividade[".listAjax"] = false;

	$tdatatb_atividade[".audit"] = true;

	$tdatatb_atividade[".locking"] = false;


$pages = $tdatatb_atividade[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_atividade[".edit"] = true;
	$tdatatb_atividade[".afterEditAction"] = 0;
	$tdatatb_atividade[".closePopupAfterEdit"] = 1;
	$tdatatb_atividade[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_atividade[".add"] = true;
$tdatatb_atividade[".afterAddAction"] = 0;
$tdatatb_atividade[".closePopupAfterAdd"] = 1;
$tdatatb_atividade[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_atividade[".list"] = true;
}



$tdatatb_atividade[".strSortControlSettingsJSON"] = "";

$tdatatb_atividade[".strClickActionJSON"] = "{\"fields\":{\"alter_dt\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"alter_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ativ_concluida\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ativ_ds\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ativ_dt_fim\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ativ_dt_ini\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ativ_fl_ativo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ativ_id\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"ativ_nm\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"popup\",\"page\":\"edit\",\"table\":null,\"url\":\"\"}},\"ativ_prioridade\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"clie_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"inclu_dt\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"inclu_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"lista_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"stat_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatatb_atividade[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_atividade[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_atividade[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_atividade[".printFriendly"] = true;
}



$tdatatb_atividade[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_atividade[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_atividade[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_atividade[".isUseAjaxSuggest"] = true;

$tdatatb_atividade[".rowHighlite"] = true;



																		

$tdatatb_atividade[".ajaxCodeSnippetAdded"] = false;

$tdatatb_atividade[".buttonsAdded"] = false;

$tdatatb_atividade[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_atividade[".isUseTimeForSearch"] = false;


$tdatatb_atividade[".badgeColor"] = "daa520";


$tdatatb_atividade[".allSearchFields"] = array();
$tdatatb_atividade[".filterFields"] = array();
$tdatatb_atividade[".requiredSearchFields"] = array();

$tdatatb_atividade[".googleLikeFields"] = array();
$tdatatb_atividade[".googleLikeFields"][] = "ativ_id";
$tdatatb_atividade[".googleLikeFields"][] = "clie_id";
$tdatatb_atividade[".googleLikeFields"][] = "ativ_nm";
$tdatatb_atividade[".googleLikeFields"][] = "ativ_ds";
$tdatatb_atividade[".googleLikeFields"][] = "lista_id";
$tdatatb_atividade[".googleLikeFields"][] = "stat_id";
$tdatatb_atividade[".googleLikeFields"][] = "ativ_fl_ativo";
$tdatatb_atividade[".googleLikeFields"][] = "ativ_prioridade";
$tdatatb_atividade[".googleLikeFields"][] = "ativ_concluida";
$tdatatb_atividade[".googleLikeFields"][] = "ativ_dt_ini";
$tdatatb_atividade[".googleLikeFields"][] = "ativ_dt_fim";
$tdatatb_atividade[".googleLikeFields"][] = "inclu_login";
$tdatatb_atividade[".googleLikeFields"][] = "inclu_dt";
$tdatatb_atividade[".googleLikeFields"][] = "alter_login";
$tdatatb_atividade[".googleLikeFields"][] = "alter_dt";



$tdatatb_atividade[".tableType"] = "list";

$tdatatb_atividade[".printerPageOrientation"] = 0;
$tdatatb_atividade[".nPrinterPageScale"] = 100;

$tdatatb_atividade[".nPrinterSplitRecords"] = 40;

$tdatatb_atividade[".geocodingEnabled"] = false;










$tdatatb_atividade[".pageSize"] = 20;

$tdatatb_atividade[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_atividade[".strOrderBy"] = $tstrOrderBy;

$tdatatb_atividade[".orderindexes"] = array();

$tdatatb_atividade[".sqlHead"] = "SELECT ativ_id,  	clie_id,  	ativ_nm,  	ativ_ds,  	lista_id,  	stat_id,  	ativ_fl_ativo,  	ativ_prioridade,  	ativ_concluida,  	ativ_dt_ini,  	ativ_dt_fim,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatatb_atividade[".sqlFrom"] = "FROM tb_atividade";
$tdatatb_atividade[".sqlWhereExpr"] = "";
$tdatatb_atividade[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "EmAndamento",
	'name' => "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Em Andamento",
	'nameType' => 'Text',
	'where' => "ativ_concluida = 0",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Concluida",
	'name' => "<img src=\"images/circle_green_16.png\" alt=\"\" /> Concluída",
	'nameType' => 'Text',
	'where' => "ativ_concluida = 1",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Todas",
	'name' => "<img src=\"images/info.png\" alt=\"\" /> Todas",
	'nameType' => 'Text',
	'where' => "ativ_concluida = ativ_concluida",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdatatb_atividade[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_atividade[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_atividade[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_atividade[".highlightSearchResults"] = true;

$tableKeystb_atividade = array();
$tableKeystb_atividade[] = "ativ_id";
$tdatatb_atividade[".Keys"] = $tableKeystb_atividade;


$tdatatb_atividade[".hideMobileList"] = array();
		$tdatatb_atividade[".hideMobileList"][2] = array();
$tdatatb_atividade[".hideMobileList"][2]["ativ_ds"] = true;
		$tdatatb_atividade[".hideMobileList"][2]["alter_dt"] = true;
		$tdatatb_atividade[".hideMobileList"][3] = array();
$tdatatb_atividade[".hideMobileList"][3]["ativ_ds"] = true;
		$tdatatb_atividade[".hideMobileList"][3]["alter_dt"] = true;
		$tdatatb_atividade[".hideMobileList"][4] = array();
$tdatatb_atividade[".hideMobileList"][4]["ativ_ds"] = true;
		$tdatatb_atividade[".hideMobileList"][4]["alter_dt"] = true;
		$tdatatb_atividade[".hideMobileList"][5] = array();
$tdatatb_atividade[".hideMobileList"][5]["ativ_ds"] = true;
		$tdatatb_atividade[".hideMobileList"][5]["inclu_dt"] = true;
		$tdatatb_atividade[".hideMobileList"][5]["alter_dt"] = true;




//	ativ_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ativ_id";
	$fdata["GoodName"] = "ativ_id";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","ativ_id");
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


	$tdatatb_atividade["ativ_id"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "ativ_id";
//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","clie_id");
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


	$tdatatb_atividade["clie_id"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "clie_id";
//	ativ_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ativ_nm";
	$fdata["GoodName"] = "ativ_nm";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","ativ_nm");
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


	$tdatatb_atividade["ativ_nm"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "ativ_nm";
//	ativ_ds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ativ_ds";
	$fdata["GoodName"] = "ativ_ds";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","ativ_ds");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "ativ_ds";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativ_ds";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatatb_atividade["ativ_ds"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "ativ_ds";
//	lista_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "lista_id";
	$fdata["GoodName"] = "lista_id";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","lista_id");
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
	$edata["LookupTable"] = "tb_lista_atividades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "lista_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "lista_nm";

	

	
	$edata["LookupOrderBy"] = "lista_nm";

	
	
	
	

	
	
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_atividade["lista_id"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "lista_id";
//	stat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "stat_id";
	$fdata["GoodName"] = "stat_id";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","stat_id");
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


	$tdatatb_atividade["stat_id"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "stat_id";
//	ativ_fl_ativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ativ_fl_ativo";
	$fdata["GoodName"] = "ativ_fl_ativo";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","ativ_fl_ativo");
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


	$tdatatb_atividade["ativ_fl_ativo"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "ativ_fl_ativo";
//	ativ_prioridade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ativ_prioridade";
	$fdata["GoodName"] = "ativ_prioridade";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","ativ_prioridade");
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_atividade["ativ_prioridade"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "ativ_prioridade";
//	ativ_concluida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ativ_concluida";
	$fdata["GoodName"] = "ativ_concluida";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","ativ_concluida");
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


	$tdatatb_atividade["ativ_concluida"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "ativ_concluida";
//	ativ_dt_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ativ_dt_ini";
	$fdata["GoodName"] = "ativ_dt_ini";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","ativ_dt_ini");
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


	$tdatatb_atividade["ativ_dt_ini"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "ativ_dt_ini";
//	ativ_dt_fim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ativ_dt_fim";
	$fdata["GoodName"] = "ativ_dt_fim";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","ativ_dt_fim");
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


	$tdatatb_atividade["ativ_dt_fim"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "ativ_dt_fim";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","inclu_login");
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


	$tdatatb_atividade["inclu_login"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","inclu_dt");
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


	$tdatatb_atividade["inclu_dt"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","alter_login");
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


	$tdatatb_atividade["alter_login"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("tb_atividade","alter_dt");
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


	$tdatatb_atividade["alter_dt"] = $fdata;
		$tdatatb_atividade[".searchableFields"][] = "alter_dt";


$tables_data["tb_atividade"]=&$tdatatb_atividade;
$field_labels["tb_atividade"] = &$fieldLabelstb_atividade;
$fieldToolTips["tb_atividade"] = &$fieldToolTipstb_atividade;
$placeHolders["tb_atividade"] = &$placeHolderstb_atividade;
$page_titles["tb_atividade"] = &$pageTitlestb_atividade;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_atividade"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_atividade"] = array();



	
				$strOriginalDetailsTable="tb_lista_atividades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_lista_atividades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_lista_atividades";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_atividade"][0] = $masterParams;
				$masterTablesData["tb_atividade"][0]["masterKeys"] = array();
	$masterTablesData["tb_atividade"][0]["masterKeys"][]="lista_id";
				$masterTablesData["tb_atividade"][0]["detailKeys"] = array();
	$masterTablesData["tb_atividade"][0]["detailKeys"][]="lista_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_atividade()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ativ_id,  	clie_id,  	ativ_nm,  	ativ_ds,  	lista_id,  	stat_id,  	ativ_fl_ativo,  	ativ_prioridade,  	ativ_concluida,  	ativ_dt_ini,  	ativ_dt_fim,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM tb_atividade";
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
	"m_strName" => "ativ_id",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto6["m_sql"] = "ativ_id";
$proto6["m_srcTableName"] = "tb_atividade";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto8["m_sql"] = "clie_id";
$proto8["m_srcTableName"] = "tb_atividade";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_nm",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto10["m_sql"] = "ativ_nm";
$proto10["m_srcTableName"] = "tb_atividade";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_ds",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto12["m_sql"] = "ativ_ds";
$proto12["m_srcTableName"] = "tb_atividade";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "lista_id",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto14["m_sql"] = "lista_id";
$proto14["m_srcTableName"] = "tb_atividade";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "stat_id",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto16["m_sql"] = "stat_id";
$proto16["m_srcTableName"] = "tb_atividade";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_fl_ativo",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto18["m_sql"] = "ativ_fl_ativo";
$proto18["m_srcTableName"] = "tb_atividade";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_prioridade",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto20["m_sql"] = "ativ_prioridade";
$proto20["m_srcTableName"] = "tb_atividade";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_concluida",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto22["m_sql"] = "ativ_concluida";
$proto22["m_srcTableName"] = "tb_atividade";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_dt_ini",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto24["m_sql"] = "ativ_dt_ini";
$proto24["m_srcTableName"] = "tb_atividade";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_dt_fim",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto26["m_sql"] = "ativ_dt_fim";
$proto26["m_srcTableName"] = "tb_atividade";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto28["m_sql"] = "inclu_login";
$proto28["m_srcTableName"] = "tb_atividade";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto30["m_sql"] = "inclu_dt";
$proto30["m_srcTableName"] = "tb_atividade";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto32["m_sql"] = "alter_login";
$proto32["m_srcTableName"] = "tb_atividade";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "tb_atividade"
));

$proto34["m_sql"] = "alter_dt";
$proto34["m_srcTableName"] = "tb_atividade";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "tb_atividade";
$proto37["m_srcTableName"] = "tb_atividade";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "ativ_id";
$proto37["m_columns"][] = "clie_id";
$proto37["m_columns"][] = "ativ_nm";
$proto37["m_columns"][] = "ativ_ds";
$proto37["m_columns"][] = "lista_id";
$proto37["m_columns"][] = "stat_id";
$proto37["m_columns"][] = "ativ_fl_ativo";
$proto37["m_columns"][] = "ativ_prioridade";
$proto37["m_columns"][] = "ativ_concluida";
$proto37["m_columns"][] = "ativ_dt_ini";
$proto37["m_columns"][] = "ativ_dt_fim";
$proto37["m_columns"][] = "inclu_login";
$proto37["m_columns"][] = "inclu_dt";
$proto37["m_columns"][] = "alter_login";
$proto37["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "tb_atividade";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "tb_atividade";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_atividade";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_atividade = createSqlQuery_tb_atividade();


	
		;

															

$tdatatb_atividade[".sqlquery"] = $queryData_tb_atividade;

include_once(getabspath("include/tb_atividade_events.php"));
$tableEvents["tb_atividade"] = new eventclass_tb_atividade;
$tdatatb_atividade[".hasEvents"] = true;

?>