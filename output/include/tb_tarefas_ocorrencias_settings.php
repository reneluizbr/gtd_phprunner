<?php



$tdatatb_tarefas_ocorrencias = array();
$tdatatb_tarefas_ocorrencias[".searchableFields"] = array();
$tdatatb_tarefas_ocorrencias[".ShortName"] = "tb_tarefas_ocorrencias";
$tdatatb_tarefas_ocorrencias[".OwnerID"] = "";
$tdatatb_tarefas_ocorrencias[".OriginalTable"] = "tb_tarefas_ocorrencias";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_tarefas_ocorrencias[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\",\"lista_ocorrencias_de_tarefa\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_tarefas_ocorrencias[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\",\"lista_ocorrencias_de_tarefa\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_tarefas_ocorrencias[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_tarefas_ocorrencias = array();
$fieldToolTipstb_tarefas_ocorrencias = array();
$pageTitlestb_tarefas_ocorrencias = array();
$placeHolderstb_tarefas_ocorrencias = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_tarefas_ocorrencias["English"] = array();
	$fieldToolTipstb_tarefas_ocorrencias["English"] = array();
	$placeHolderstb_tarefas_ocorrencias["English"] = array();
	$pageTitlestb_tarefas_ocorrencias["English"] = array();
	$fieldLabelstb_tarefas_ocorrencias["English"]["ID_Ocorrencia"] = "ID Ocorrencia";
	$fieldToolTipstb_tarefas_ocorrencias["English"]["ID_Ocorrencia"] = "";
	$placeHolderstb_tarefas_ocorrencias["English"]["ID_Ocorrencia"] = "";
	$fieldLabelstb_tarefas_ocorrencias["English"]["ativ_id"] = "Ativ Id";
	$fieldToolTipstb_tarefas_ocorrencias["English"]["ativ_id"] = "";
	$placeHolderstb_tarefas_ocorrencias["English"]["ativ_id"] = "";
	$fieldLabelstb_tarefas_ocorrencias["English"]["clie_id"] = "Clie Id";
	$fieldToolTipstb_tarefas_ocorrencias["English"]["clie_id"] = "";
	$placeHolderstb_tarefas_ocorrencias["English"]["clie_id"] = "";
	$fieldLabelstb_tarefas_ocorrencias["English"]["Data_Hora"] = "Data Hora";
	$fieldToolTipstb_tarefas_ocorrencias["English"]["Data_Hora"] = "";
	$placeHolderstb_tarefas_ocorrencias["English"]["Data_Hora"] = "";
	$fieldLabelstb_tarefas_ocorrencias["English"]["Comentario"] = "Comentario";
	$fieldToolTipstb_tarefas_ocorrencias["English"]["Comentario"] = "";
	$placeHolderstb_tarefas_ocorrencias["English"]["Comentario"] = "";
	$fieldLabelstb_tarefas_ocorrencias["English"]["Concluida"] = "Concluida";
	$fieldToolTipstb_tarefas_ocorrencias["English"]["Concluida"] = "";
	$placeHolderstb_tarefas_ocorrencias["English"]["Concluida"] = "";
	$fieldLabelstb_tarefas_ocorrencias["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_tarefas_ocorrencias["English"]["inclu_login"] = "";
	$placeHolderstb_tarefas_ocorrencias["English"]["inclu_login"] = "";
	$fieldLabelstb_tarefas_ocorrencias["English"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipstb_tarefas_ocorrencias["English"]["inclu_dt"] = "";
	$placeHolderstb_tarefas_ocorrencias["English"]["inclu_dt"] = "";
	$fieldLabelstb_tarefas_ocorrencias["English"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_tarefas_ocorrencias["English"]["alter_login"] = "";
	$placeHolderstb_tarefas_ocorrencias["English"]["alter_login"] = "";
	$fieldLabelstb_tarefas_ocorrencias["English"]["alter_dt"] = "Alter Dt";
	$fieldToolTipstb_tarefas_ocorrencias["English"]["alter_dt"] = "";
	$placeHolderstb_tarefas_ocorrencias["English"]["alter_dt"] = "";
	if (count($fieldToolTipstb_tarefas_ocorrencias["English"]))
		$tdatatb_tarefas_ocorrencias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_tarefas_ocorrencias["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_tarefas_ocorrencias["Portuguese(Brazil)"] = array();
	$placeHolderstb_tarefas_ocorrencias["Portuguese(Brazil)"] = array();
	$pageTitlestb_tarefas_ocorrencias["Portuguese(Brazil)"] = array();
	$fieldLabelstb_tarefas_ocorrencias["Portuguese(Brazil)"]["ID_Ocorrencia"] = "ID";
	$fieldToolTipstb_tarefas_ocorrencias["Portuguese(Brazil)"]["ID_Ocorrencia"] = "";
	$placeHolderstb_tarefas_ocorrencias["Portuguese(Brazil)"]["ID_Ocorrencia"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Portuguese(Brazil)"]["ativ_id"] = "Atividade";
	$fieldToolTipstb_tarefas_ocorrencias["Portuguese(Brazil)"]["ativ_id"] = "";
	$placeHolderstb_tarefas_ocorrencias["Portuguese(Brazil)"]["ativ_id"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Portuguese(Brazil)"]["clie_id"] = "Cliente";
	$fieldToolTipstb_tarefas_ocorrencias["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHolderstb_tarefas_ocorrencias["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Portuguese(Brazil)"]["Data_Hora"] = "Data Hora";
	$fieldToolTipstb_tarefas_ocorrencias["Portuguese(Brazil)"]["Data_Hora"] = "";
	$placeHolderstb_tarefas_ocorrencias["Portuguese(Brazil)"]["Data_Hora"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Portuguese(Brazil)"]["Comentario"] = "Comentário";
	$fieldToolTipstb_tarefas_ocorrencias["Portuguese(Brazil)"]["Comentario"] = "";
	$placeHolderstb_tarefas_ocorrencias["Portuguese(Brazil)"]["Comentario"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Portuguese(Brazil)"]["Concluida"] = "Concluída";
	$fieldToolTipstb_tarefas_ocorrencias["Portuguese(Brazil)"]["Concluida"] = "";
	$placeHolderstb_tarefas_ocorrencias["Portuguese(Brazil)"]["Concluida"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipstb_tarefas_ocorrencias["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_tarefas_ocorrencias["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_tarefas_ocorrencias["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_tarefas_ocorrencias["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Portuguese(Brazil)"]["alter_login"] = "Alterado por";
	$fieldToolTipstb_tarefas_ocorrencias["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_tarefas_ocorrencias["Portuguese(Brazil)"]["alter_login"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_tarefas_ocorrencias["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_tarefas_ocorrencias["Portuguese(Brazil)"]["alter_dt"] = "";
	if (count($fieldToolTipstb_tarefas_ocorrencias["Portuguese(Brazil)"]))
		$tdatatb_tarefas_ocorrencias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_tarefas_ocorrencias["Spanish"] = array();
	$fieldToolTipstb_tarefas_ocorrencias["Spanish"] = array();
	$placeHolderstb_tarefas_ocorrencias["Spanish"] = array();
	$pageTitlestb_tarefas_ocorrencias["Spanish"] = array();
	$fieldLabelstb_tarefas_ocorrencias["Spanish"]["ID_Ocorrencia"] = "ID Ocorrencia";
	$fieldToolTipstb_tarefas_ocorrencias["Spanish"]["ID_Ocorrencia"] = "";
	$placeHolderstb_tarefas_ocorrencias["Spanish"]["ID_Ocorrencia"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Spanish"]["ativ_id"] = "Ativ Id";
	$fieldToolTipstb_tarefas_ocorrencias["Spanish"]["ativ_id"] = "";
	$placeHolderstb_tarefas_ocorrencias["Spanish"]["ativ_id"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Spanish"]["clie_id"] = "Clie Id";
	$fieldToolTipstb_tarefas_ocorrencias["Spanish"]["clie_id"] = "";
	$placeHolderstb_tarefas_ocorrencias["Spanish"]["clie_id"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Spanish"]["Data_Hora"] = "Data Hora";
	$fieldToolTipstb_tarefas_ocorrencias["Spanish"]["Data_Hora"] = "";
	$placeHolderstb_tarefas_ocorrencias["Spanish"]["Data_Hora"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Spanish"]["Comentario"] = "Comentario";
	$fieldToolTipstb_tarefas_ocorrencias["Spanish"]["Comentario"] = "";
	$placeHolderstb_tarefas_ocorrencias["Spanish"]["Comentario"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Spanish"]["Concluida"] = "Concluida";
	$fieldToolTipstb_tarefas_ocorrencias["Spanish"]["Concluida"] = "";
	$placeHolderstb_tarefas_ocorrencias["Spanish"]["Concluida"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_tarefas_ocorrencias["Spanish"]["inclu_login"] = "";
	$placeHolderstb_tarefas_ocorrencias["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Spanish"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipstb_tarefas_ocorrencias["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_tarefas_ocorrencias["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_tarefas_ocorrencias["Spanish"]["alter_login"] = "";
	$placeHolderstb_tarefas_ocorrencias["Spanish"]["alter_login"] = "";
	$fieldLabelstb_tarefas_ocorrencias["Spanish"]["alter_dt"] = "Alter Dt";
	$fieldToolTipstb_tarefas_ocorrencias["Spanish"]["alter_dt"] = "";
	$placeHolderstb_tarefas_ocorrencias["Spanish"]["alter_dt"] = "";
	if (count($fieldToolTipstb_tarefas_ocorrencias["Spanish"]))
		$tdatatb_tarefas_ocorrencias[".isUseToolTips"] = true;
}


	$tdatatb_tarefas_ocorrencias[".NCSearch"] = true;



$tdatatb_tarefas_ocorrencias[".shortTableName"] = "tb_tarefas_ocorrencias";
$tdatatb_tarefas_ocorrencias[".nSecOptions"] = 0;

$tdatatb_tarefas_ocorrencias[".mainTableOwnerID"] = "";
$tdatatb_tarefas_ocorrencias[".entityType"] = 0;

$tdatatb_tarefas_ocorrencias[".strOriginalTableName"] = "tb_tarefas_ocorrencias";

	



$tdatatb_tarefas_ocorrencias[".showAddInPopup"] = false;

$tdatatb_tarefas_ocorrencias[".showEditInPopup"] = false;

$tdatatb_tarefas_ocorrencias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_tarefas_ocorrencias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_tarefas_ocorrencias[".listAjax"] = false;
//	temporary
$tdatatb_tarefas_ocorrencias[".listAjax"] = false;

	$tdatatb_tarefas_ocorrencias[".audit"] = false;

	$tdatatb_tarefas_ocorrencias[".locking"] = false;


$pages = $tdatatb_tarefas_ocorrencias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_tarefas_ocorrencias[".edit"] = true;
	$tdatatb_tarefas_ocorrencias[".afterEditAction"] = 1;
	$tdatatb_tarefas_ocorrencias[".closePopupAfterEdit"] = 1;
	$tdatatb_tarefas_ocorrencias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_tarefas_ocorrencias[".add"] = true;
$tdatatb_tarefas_ocorrencias[".afterAddAction"] = 1;
$tdatatb_tarefas_ocorrencias[".closePopupAfterAdd"] = 1;
$tdatatb_tarefas_ocorrencias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_tarefas_ocorrencias[".list"] = true;
}



$tdatatb_tarefas_ocorrencias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_tarefas_ocorrencias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_tarefas_ocorrencias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_tarefas_ocorrencias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_tarefas_ocorrencias[".printFriendly"] = true;
}



$tdatatb_tarefas_ocorrencias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_tarefas_ocorrencias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_tarefas_ocorrencias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_tarefas_ocorrencias[".isUseAjaxSuggest"] = true;

$tdatatb_tarefas_ocorrencias[".rowHighlite"] = true;



																		

$tdatatb_tarefas_ocorrencias[".ajaxCodeSnippetAdded"] = false;

$tdatatb_tarefas_ocorrencias[".buttonsAdded"] = false;

$tdatatb_tarefas_ocorrencias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_tarefas_ocorrencias[".isUseTimeForSearch"] = false;


$tdatatb_tarefas_ocorrencias[".badgeColor"] = "db7093";


$tdatatb_tarefas_ocorrencias[".allSearchFields"] = array();
$tdatatb_tarefas_ocorrencias[".filterFields"] = array();
$tdatatb_tarefas_ocorrencias[".requiredSearchFields"] = array();

$tdatatb_tarefas_ocorrencias[".googleLikeFields"] = array();
$tdatatb_tarefas_ocorrencias[".googleLikeFields"][] = "ID_Ocorrencia";
$tdatatb_tarefas_ocorrencias[".googleLikeFields"][] = "ativ_id";
$tdatatb_tarefas_ocorrencias[".googleLikeFields"][] = "clie_id";
$tdatatb_tarefas_ocorrencias[".googleLikeFields"][] = "Data_Hora";
$tdatatb_tarefas_ocorrencias[".googleLikeFields"][] = "Comentario";
$tdatatb_tarefas_ocorrencias[".googleLikeFields"][] = "Concluida";
$tdatatb_tarefas_ocorrencias[".googleLikeFields"][] = "inclu_login";
$tdatatb_tarefas_ocorrencias[".googleLikeFields"][] = "inclu_dt";
$tdatatb_tarefas_ocorrencias[".googleLikeFields"][] = "alter_login";
$tdatatb_tarefas_ocorrencias[".googleLikeFields"][] = "alter_dt";



$tdatatb_tarefas_ocorrencias[".tableType"] = "list";

$tdatatb_tarefas_ocorrencias[".printerPageOrientation"] = 0;
$tdatatb_tarefas_ocorrencias[".nPrinterPageScale"] = 100;

$tdatatb_tarefas_ocorrencias[".nPrinterSplitRecords"] = 40;

$tdatatb_tarefas_ocorrencias[".geocodingEnabled"] = false;










$tdatatb_tarefas_ocorrencias[".pageSize"] = 20;

$tdatatb_tarefas_ocorrencias[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Data_Hora DESC, ID_Ocorrencia DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_tarefas_ocorrencias[".strOrderBy"] = $tstrOrderBy;

$tdatatb_tarefas_ocorrencias[".orderindexes"] = array();
	$tdatatb_tarefas_ocorrencias[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "Data_Hora");

	$tdatatb_tarefas_ocorrencias[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "ID_Ocorrencia");


$tdatatb_tarefas_ocorrencias[".sqlHead"] = "SELECT ID_Ocorrencia,  ativ_id,  clie_id,  Data_Hora,  Comentario,  Concluida,  inclu_login,  inclu_dt,  alter_login,  alter_dt";
$tdatatb_tarefas_ocorrencias[".sqlFrom"] = "FROM tb_tarefas_ocorrencias";
$tdatatb_tarefas_ocorrencias[".sqlWhereExpr"] = "";
$tdatatb_tarefas_ocorrencias[".sqlTail"] = "";

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
$tdatatb_tarefas_ocorrencias[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_tarefas_ocorrencias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_tarefas_ocorrencias[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_tarefas_ocorrencias[".highlightSearchResults"] = true;

$tableKeystb_tarefas_ocorrencias = array();
$tableKeystb_tarefas_ocorrencias[] = "ID_Ocorrencia";
$tdatatb_tarefas_ocorrencias[".Keys"] = $tableKeystb_tarefas_ocorrencias;


$tdatatb_tarefas_ocorrencias[".hideMobileList"] = array();




//	ID_Ocorrencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_Ocorrencia";
	$fdata["GoodName"] = "ID_Ocorrencia";
	$fdata["ownerTable"] = "tb_tarefas_ocorrencias";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_ocorrencias","ID_Ocorrencia");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID_Ocorrencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_Ocorrencia";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
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


	$tdatatb_tarefas_ocorrencias["ID_Ocorrencia"] = $fdata;
		$tdatatb_tarefas_ocorrencias[".searchableFields"][] = "ID_Ocorrencia";
//	ativ_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ativ_id";
	$fdata["GoodName"] = "ativ_id";
	$fdata["ownerTable"] = "tb_tarefas_ocorrencias";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_ocorrencias","ativ_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tb_atividade";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ativ_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ativ_id || '-' || ativ_nm";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "ativ_id";

		$edata["LookupDesc"] = true;

	
	
	

	
	
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


	$tdatatb_tarefas_ocorrencias["ativ_id"] = $fdata;
		$tdatatb_tarefas_ocorrencias[".searchableFields"][] = "ativ_id";
//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_tarefas_ocorrencias";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_ocorrencias","clie_id");
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
	$edata["DisplayField"] = "clie_id || '-' || clie_nm_reduzido";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "clie_id";

		$edata["LookupDesc"] = true;

	
	
	

	
	
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


	$tdatatb_tarefas_ocorrencias["clie_id"] = $fdata;
		$tdatatb_tarefas_ocorrencias[".searchableFields"][] = "clie_id";
//	Data_Hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Data_Hora";
	$fdata["GoodName"] = "Data_Hora";
	$fdata["ownerTable"] = "tb_tarefas_ocorrencias";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_ocorrencias","Data_Hora");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Data_Hora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data_Hora";

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_tarefas_ocorrencias["Data_Hora"] = $fdata;
		$tdatatb_tarefas_ocorrencias[".searchableFields"][] = "Data_Hora";
//	Comentario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Comentario";
	$fdata["GoodName"] = "Comentario";
	$fdata["ownerTable"] = "tb_tarefas_ocorrencias";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_ocorrencias","Comentario");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "Comentario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Comentario";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 40;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

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


	$tdatatb_tarefas_ocorrencias["Comentario"] = $fdata;
		$tdatatb_tarefas_ocorrencias[".searchableFields"][] = "Comentario";
//	Concluida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Concluida";
	$fdata["GoodName"] = "Concluida";
	$fdata["ownerTable"] = "tb_tarefas_ocorrencias";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_ocorrencias","Concluida");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "Concluida";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Concluida";

	
	
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


	$tdatatb_tarefas_ocorrencias["Concluida"] = $fdata;
		$tdatatb_tarefas_ocorrencias[".searchableFields"][] = "Concluida";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_tarefas_ocorrencias";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_ocorrencias","inclu_login");
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


	$tdatatb_tarefas_ocorrencias["inclu_login"] = $fdata;
		$tdatatb_tarefas_ocorrencias[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_tarefas_ocorrencias";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_ocorrencias","inclu_dt");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatatb_tarefas_ocorrencias["inclu_dt"] = $fdata;
		$tdatatb_tarefas_ocorrencias[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_tarefas_ocorrencias";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_ocorrencias","alter_login");
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


	$tdatatb_tarefas_ocorrencias["alter_login"] = $fdata;
		$tdatatb_tarefas_ocorrencias[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_tarefas_ocorrencias";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_ocorrencias","alter_dt");
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


	$tdatatb_tarefas_ocorrencias["alter_dt"] = $fdata;
		$tdatatb_tarefas_ocorrencias[".searchableFields"][] = "alter_dt";


$tables_data["tb_tarefas_ocorrencias"]=&$tdatatb_tarefas_ocorrencias;
$field_labels["tb_tarefas_ocorrencias"] = &$fieldLabelstb_tarefas_ocorrencias;
$fieldToolTips["tb_tarefas_ocorrencias"] = &$fieldToolTipstb_tarefas_ocorrencias;
$placeHolders["tb_tarefas_ocorrencias"] = &$placeHolderstb_tarefas_ocorrencias;
$page_titles["tb_tarefas_ocorrencias"] = &$pageTitlestb_tarefas_ocorrencias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_tarefas_ocorrencias"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_tarefas_ocorrencias"] = array();



	
				$strOriginalDetailsTable="tb_atividade";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_atividade";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_atividade";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_tarefas_ocorrencias"][0] = $masterParams;
				$masterTablesData["tb_tarefas_ocorrencias"][0]["masterKeys"] = array();
	$masterTablesData["tb_tarefas_ocorrencias"][0]["masterKeys"][]="ativ_id";
				$masterTablesData["tb_tarefas_ocorrencias"][0]["detailKeys"] = array();
	$masterTablesData["tb_tarefas_ocorrencias"][0]["detailKeys"][]="ativ_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_tarefas_ocorrencias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_Ocorrencia,  ativ_id,  clie_id,  Data_Hora,  Comentario,  Concluida,  inclu_login,  inclu_dt,  alter_login,  alter_dt";
$proto0["m_strFrom"] = "FROM tb_tarefas_ocorrencias";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Data_Hora DESC, ID_Ocorrencia DESC";
	
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
	"m_strName" => "ID_Ocorrencia",
	"m_strTable" => "tb_tarefas_ocorrencias",
	"m_srcTableName" => "tb_tarefas_ocorrencias"
));

$proto6["m_sql"] = "ID_Ocorrencia";
$proto6["m_srcTableName"] = "tb_tarefas_ocorrencias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_id",
	"m_strTable" => "tb_tarefas_ocorrencias",
	"m_srcTableName" => "tb_tarefas_ocorrencias"
));

$proto8["m_sql"] = "ativ_id";
$proto8["m_srcTableName"] = "tb_tarefas_ocorrencias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "tb_tarefas_ocorrencias",
	"m_srcTableName" => "tb_tarefas_ocorrencias"
));

$proto10["m_sql"] = "clie_id";
$proto10["m_srcTableName"] = "tb_tarefas_ocorrencias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Data_Hora",
	"m_strTable" => "tb_tarefas_ocorrencias",
	"m_srcTableName" => "tb_tarefas_ocorrencias"
));

$proto12["m_sql"] = "Data_Hora";
$proto12["m_srcTableName"] = "tb_tarefas_ocorrencias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Comentario",
	"m_strTable" => "tb_tarefas_ocorrencias",
	"m_srcTableName" => "tb_tarefas_ocorrencias"
));

$proto14["m_sql"] = "Comentario";
$proto14["m_srcTableName"] = "tb_tarefas_ocorrencias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Concluida",
	"m_strTable" => "tb_tarefas_ocorrencias",
	"m_srcTableName" => "tb_tarefas_ocorrencias"
));

$proto16["m_sql"] = "Concluida";
$proto16["m_srcTableName"] = "tb_tarefas_ocorrencias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_tarefas_ocorrencias",
	"m_srcTableName" => "tb_tarefas_ocorrencias"
));

$proto18["m_sql"] = "inclu_login";
$proto18["m_srcTableName"] = "tb_tarefas_ocorrencias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_tarefas_ocorrencias",
	"m_srcTableName" => "tb_tarefas_ocorrencias"
));

$proto20["m_sql"] = "inclu_dt";
$proto20["m_srcTableName"] = "tb_tarefas_ocorrencias";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_tarefas_ocorrencias",
	"m_srcTableName" => "tb_tarefas_ocorrencias"
));

$proto22["m_sql"] = "alter_login";
$proto22["m_srcTableName"] = "tb_tarefas_ocorrencias";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_tarefas_ocorrencias",
	"m_srcTableName" => "tb_tarefas_ocorrencias"
));

$proto24["m_sql"] = "alter_dt";
$proto24["m_srcTableName"] = "tb_tarefas_ocorrencias";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "tb_tarefas_ocorrencias";
$proto27["m_srcTableName"] = "tb_tarefas_ocorrencias";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ID_Ocorrencia";
$proto27["m_columns"][] = "ativ_id";
$proto27["m_columns"][] = "clie_id";
$proto27["m_columns"][] = "Data_Hora";
$proto27["m_columns"][] = "Comentario";
$proto27["m_columns"][] = "Concluida";
$proto27["m_columns"][] = "inclu_login";
$proto27["m_columns"][] = "inclu_dt";
$proto27["m_columns"][] = "alter_login";
$proto27["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "tb_tarefas_ocorrencias";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "tb_tarefas_ocorrencias";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "Data_Hora",
	"m_strTable" => "tb_tarefas_ocorrencias",
	"m_srcTableName" => "tb_tarefas_ocorrencias"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "ID_Ocorrencia",
	"m_strTable" => "tb_tarefas_ocorrencias",
	"m_srcTableName" => "tb_tarefas_ocorrencias"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tb_tarefas_ocorrencias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_tarefas_ocorrencias = createSqlQuery_tb_tarefas_ocorrencias();


	
		;

										

$tdatatb_tarefas_ocorrencias[".sqlquery"] = $queryData_tb_tarefas_ocorrencias;

$tableEvents["tb_tarefas_ocorrencias"] = new eventsBase;
$tdatatb_tarefas_ocorrencias[".hasEvents"] = false;

?>