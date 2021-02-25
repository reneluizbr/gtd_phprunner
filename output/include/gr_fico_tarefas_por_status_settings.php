<?php



$tdatagr_fico_tarefas_por_status = array();
$tdatagr_fico_tarefas_por_status[".searchableFields"] = array();
$tdatagr_fico_tarefas_por_status[".ShortName"] = "gr_fico_tarefas_por_status";
$tdatagr_fico_tarefas_por_status[".OwnerID"] = "";
$tdatagr_fico_tarefas_por_status[".OriginalTable"] = "tb_atividade";


$defaultPages = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );

$tdatagr_fico_tarefas_por_status[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatagr_fico_tarefas_por_status[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatagr_fico_tarefas_por_status[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsgr_fico_tarefas_por_status = array();
$fieldToolTipsgr_fico_tarefas_por_status = array();
$pageTitlesgr_fico_tarefas_por_status = array();
$placeHoldersgr_fico_tarefas_por_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgr_fico_tarefas_por_status["English"] = array();
	$fieldToolTipsgr_fico_tarefas_por_status["English"] = array();
	$placeHoldersgr_fico_tarefas_por_status["English"] = array();
	$pageTitlesgr_fico_tarefas_por_status["English"] = array();
	$fieldLabelsgr_fico_tarefas_por_status["English"]["stat_nm"] = "Stat Nm";
	$fieldToolTipsgr_fico_tarefas_por_status["English"]["stat_nm"] = "";
	$placeHoldersgr_fico_tarefas_por_status["English"]["stat_nm"] = "";
	$fieldLabelsgr_fico_tarefas_por_status["English"]["qtde"] = "Qtde";
	$fieldToolTipsgr_fico_tarefas_por_status["English"]["qtde"] = "";
	$placeHoldersgr_fico_tarefas_por_status["English"]["qtde"] = "";
	$fieldLabelsgr_fico_tarefas_por_status["English"]["clie_id"] = "Clie Id";
	$fieldToolTipsgr_fico_tarefas_por_status["English"]["clie_id"] = "";
	$placeHoldersgr_fico_tarefas_por_status["English"]["clie_id"] = "";
	$fieldLabelsgr_fico_tarefas_por_status["English"]["stat_id"] = "Stat Id";
	$fieldToolTipsgr_fico_tarefas_por_status["English"]["stat_id"] = "";
	$placeHoldersgr_fico_tarefas_por_status["English"]["stat_id"] = "";
	if (count($fieldToolTipsgr_fico_tarefas_por_status["English"]))
		$tdatagr_fico_tarefas_por_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsgr_fico_tarefas_por_status["Portuguese(Brazil)"] = array();
	$fieldToolTipsgr_fico_tarefas_por_status["Portuguese(Brazil)"] = array();
	$placeHoldersgr_fico_tarefas_por_status["Portuguese(Brazil)"] = array();
	$pageTitlesgr_fico_tarefas_por_status["Portuguese(Brazil)"] = array();
	$fieldLabelsgr_fico_tarefas_por_status["Portuguese(Brazil)"]["stat_nm"] = "Status";
	$fieldToolTipsgr_fico_tarefas_por_status["Portuguese(Brazil)"]["stat_nm"] = "";
	$placeHoldersgr_fico_tarefas_por_status["Portuguese(Brazil)"]["stat_nm"] = "";
	$fieldLabelsgr_fico_tarefas_por_status["Portuguese(Brazil)"]["qtde"] = "Qtde";
	$fieldToolTipsgr_fico_tarefas_por_status["Portuguese(Brazil)"]["qtde"] = "";
	$placeHoldersgr_fico_tarefas_por_status["Portuguese(Brazil)"]["qtde"] = "";
	$fieldLabelsgr_fico_tarefas_por_status["Portuguese(Brazil)"]["clie_id"] = "Clie Id";
	$fieldToolTipsgr_fico_tarefas_por_status["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHoldersgr_fico_tarefas_por_status["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelsgr_fico_tarefas_por_status["Portuguese(Brazil)"]["stat_id"] = "Stat Id";
	$fieldToolTipsgr_fico_tarefas_por_status["Portuguese(Brazil)"]["stat_id"] = "";
	$placeHoldersgr_fico_tarefas_por_status["Portuguese(Brazil)"]["stat_id"] = "";
	if (count($fieldToolTipsgr_fico_tarefas_por_status["Portuguese(Brazil)"]))
		$tdatagr_fico_tarefas_por_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgr_fico_tarefas_por_status["Spanish"] = array();
	$fieldToolTipsgr_fico_tarefas_por_status["Spanish"] = array();
	$placeHoldersgr_fico_tarefas_por_status["Spanish"] = array();
	$pageTitlesgr_fico_tarefas_por_status["Spanish"] = array();
	$fieldLabelsgr_fico_tarefas_por_status["Spanish"]["stat_nm"] = "Stat Nm";
	$fieldToolTipsgr_fico_tarefas_por_status["Spanish"]["stat_nm"] = "";
	$placeHoldersgr_fico_tarefas_por_status["Spanish"]["stat_nm"] = "";
	$fieldLabelsgr_fico_tarefas_por_status["Spanish"]["qtde"] = "Qtde";
	$fieldToolTipsgr_fico_tarefas_por_status["Spanish"]["qtde"] = "";
	$placeHoldersgr_fico_tarefas_por_status["Spanish"]["qtde"] = "";
	$fieldLabelsgr_fico_tarefas_por_status["Spanish"]["clie_id"] = "Clie Id";
	$fieldToolTipsgr_fico_tarefas_por_status["Spanish"]["clie_id"] = "";
	$placeHoldersgr_fico_tarefas_por_status["Spanish"]["clie_id"] = "";
	$fieldLabelsgr_fico_tarefas_por_status["Spanish"]["stat_id"] = "Stat Id";
	$fieldToolTipsgr_fico_tarefas_por_status["Spanish"]["stat_id"] = "";
	$placeHoldersgr_fico_tarefas_por_status["Spanish"]["stat_id"] = "";
	if (count($fieldToolTipsgr_fico_tarefas_por_status["Spanish"]))
		$tdatagr_fico_tarefas_por_status[".isUseToolTips"] = true;
}


	$tdatagr_fico_tarefas_por_status[".NCSearch"] = true;

	$tdatagr_fico_tarefas_por_status[".ChartRefreshTime"] = 0;


$tdatagr_fico_tarefas_por_status[".shortTableName"] = "gr_fico_tarefas_por_status";
$tdatagr_fico_tarefas_por_status[".nSecOptions"] = 0;

$tdatagr_fico_tarefas_por_status[".mainTableOwnerID"] = "";
$tdatagr_fico_tarefas_por_status[".entityType"] = 3;

$tdatagr_fico_tarefas_por_status[".strOriginalTableName"] = "tb_atividade";

	



$tdatagr_fico_tarefas_por_status[".showAddInPopup"] = false;

$tdatagr_fico_tarefas_por_status[".showEditInPopup"] = false;

$tdatagr_fico_tarefas_por_status[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagr_fico_tarefas_por_status[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagr_fico_tarefas_por_status[".listAjax"] = false;
//	temporary
$tdatagr_fico_tarefas_por_status[".listAjax"] = false;

	$tdatagr_fico_tarefas_por_status[".audit"] = false;

	$tdatagr_fico_tarefas_por_status[".locking"] = false;


$pages = $tdatagr_fico_tarefas_por_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagr_fico_tarefas_por_status[".edit"] = true;
	$tdatagr_fico_tarefas_por_status[".afterEditAction"] = 1;
	$tdatagr_fico_tarefas_por_status[".closePopupAfterEdit"] = 1;
	$tdatagr_fico_tarefas_por_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagr_fico_tarefas_por_status[".add"] = true;
$tdatagr_fico_tarefas_por_status[".afterAddAction"] = 1;
$tdatagr_fico_tarefas_por_status[".closePopupAfterAdd"] = 1;
$tdatagr_fico_tarefas_por_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagr_fico_tarefas_por_status[".list"] = true;
}



$tdatagr_fico_tarefas_por_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagr_fico_tarefas_por_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagr_fico_tarefas_por_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagr_fico_tarefas_por_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagr_fico_tarefas_por_status[".printFriendly"] = true;
}



$tdatagr_fico_tarefas_por_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagr_fico_tarefas_por_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagr_fico_tarefas_por_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagr_fico_tarefas_por_status[".isUseAjaxSuggest"] = true;




									

$tdatagr_fico_tarefas_por_status[".ajaxCodeSnippetAdded"] = false;

$tdatagr_fico_tarefas_por_status[".buttonsAdded"] = false;

$tdatagr_fico_tarefas_por_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagr_fico_tarefas_por_status[".isUseTimeForSearch"] = false;


$tdatagr_fico_tarefas_por_status[".badgeColor"] = "778899";


$tdatagr_fico_tarefas_por_status[".allSearchFields"] = array();
$tdatagr_fico_tarefas_por_status[".filterFields"] = array();
$tdatagr_fico_tarefas_por_status[".requiredSearchFields"] = array();

$tdatagr_fico_tarefas_por_status[".googleLikeFields"] = array();
$tdatagr_fico_tarefas_por_status[".googleLikeFields"][] = "clie_id";
$tdatagr_fico_tarefas_por_status[".googleLikeFields"][] = "stat_id";
$tdatagr_fico_tarefas_por_status[".googleLikeFields"][] = "stat_nm";
$tdatagr_fico_tarefas_por_status[".googleLikeFields"][] = "qtde";



$tdatagr_fico_tarefas_por_status[".tableType"] = "chart";

$tdatagr_fico_tarefas_por_status[".printerPageOrientation"] = 0;
$tdatagr_fico_tarefas_por_status[".nPrinterPageScale"] = 100;

$tdatagr_fico_tarefas_por_status[".nPrinterSplitRecords"] = 40;

$tdatagr_fico_tarefas_por_status[".geocodingEnabled"] = false;



// chart settings
$tdatagr_fico_tarefas_por_status[".chartType"] = "2DPie";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagr_fico_tarefas_por_status[".strOrderBy"] = $tstrOrderBy;

$tdatagr_fico_tarefas_por_status[".orderindexes"] = array();

$tdatagr_fico_tarefas_por_status[".sqlHead"] = "SELECT \"at\".clie_id,  \"at\".stat_id,  stat_nm,  COUNT(\"at\".ativ_id) AS qtde";
$tdatagr_fico_tarefas_por_status[".sqlFrom"] = "FROM tb_atividade AS \"at\"  , tb_status_atividades AS st";
$tdatagr_fico_tarefas_por_status[".sqlWhereExpr"] = "(\"at\".stat_id = st.stat_id)";
$tdatagr_fico_tarefas_por_status[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "Todas",
	'name' => "<img src=\"images/info.png\" alt=\"\" /> Todas",
	'nameType' => 'Text',
	'where' => "ativ_concluida = ativ_concluida",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Nao_Concluidas",
	'name' => "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Não Concluídas",
	'nameType' => 'Text',
	'where' => "ativ_concluida = 0",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Concluidas",
	'name' => "<img src=\"images/circle_green_16.png\" alt=\"\" /> Concluídas",
	'nameType' => 'Text',
	'where' => "ativ_concluida = 1",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatagr_fico_tarefas_por_status[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagr_fico_tarefas_por_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagr_fico_tarefas_por_status[".arrGroupsPerPage"] = $arrGPP;

$tdatagr_fico_tarefas_por_status[".highlightSearchResults"] = true;

$tableKeysgr_fico_tarefas_por_status = array();
$tdatagr_fico_tarefas_por_status[".Keys"] = $tableKeysgr_fico_tarefas_por_status;


$tdatagr_fico_tarefas_por_status[".hideMobileList"] = array();




//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_por_Status","clie_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "clie_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"at\".clie_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatagr_fico_tarefas_por_status["clie_id"] = $fdata;
		$tdatagr_fico_tarefas_por_status[".searchableFields"][] = "clie_id";
//	stat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "stat_id";
	$fdata["GoodName"] = "stat_id";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_por_Status","stat_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "stat_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"at\".stat_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatagr_fico_tarefas_por_status["stat_id"] = $fdata;
		$tdatagr_fico_tarefas_por_status[".searchableFields"][] = "stat_id";
//	stat_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "stat_nm";
	$fdata["GoodName"] = "stat_nm";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_por_Status","stat_nm");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatagr_fico_tarefas_por_status["stat_nm"] = $fdata;
		$tdatagr_fico_tarefas_por_status[".searchableFields"][] = "stat_nm";
//	qtde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "qtde";
	$fdata["GoodName"] = "qtde";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_por_Status","qtde");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "qtde";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(\"at\".ativ_id)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatagr_fico_tarefas_por_status["qtde"] = $fdata;
		$tdatagr_fico_tarefas_por_status[".searchableFields"][] = "qtde";

	$tdatagr_fico_tarefas_por_status[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Gráfico Tarefas por Status</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatagr_fico_tarefas_por_status[".chartXml"] .= '<attr value="0">
			<attr value="name">qtde</attr>';
	$tdatagr_fico_tarefas_por_status[".chartXml"] .= '</attr>';
	$tdatagr_fico_tarefas_por_status[".chartXml"] .= '<attr value="1">
		<attr value="name">stat_nm</attr>
	</attr>';
	$tdatagr_fico_tarefas_por_status[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatagr_fico_tarefas_por_status[".chartXml"] .= '<attr value="head">'.xmlencode("Tarefas por Status").'</attr>
<attr value="foot">'.xmlencode("Quantidades por Status").'</attr>
<attr value="y_axis_label">'.xmlencode("clie_id").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatagr_fico_tarefas_por_status[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatagr_fico_tarefas_por_status[".chartXml"] .= '<attr value="0">
		<attr value="name">clie_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_por_Status","clie_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_tarefas_por_status[".chartXml"] .= '<attr value="1">
		<attr value="name">stat_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_por_Status","stat_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_tarefas_por_status[".chartXml"] .= '<attr value="2">
		<attr value="name">stat_nm</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_por_Status","stat_nm")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_tarefas_por_status[".chartXml"] .= '<attr value="3">
		<attr value="name">qtde</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_por_Status","qtde")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatagr_fico_tarefas_por_status[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Gráfico Tarefas por Status</attr>
<attr value="short_table_name">gr_fico_tarefas_por_status</attr>
</attr>

</chart>';

$tables_data["Gráfico Tarefas por Status"]=&$tdatagr_fico_tarefas_por_status;
$field_labels["Gr_fico_Tarefas_por_Status"] = &$fieldLabelsgr_fico_tarefas_por_status;
$fieldToolTips["Gr_fico_Tarefas_por_Status"] = &$fieldToolTipsgr_fico_tarefas_por_status;
$placeHolders["Gr_fico_Tarefas_por_Status"] = &$placeHoldersgr_fico_tarefas_por_status;
$page_titles["Gr_fico_Tarefas_por_Status"] = &$pageTitlesgr_fico_tarefas_por_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Gráfico Tarefas por Status"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Gráfico Tarefas por Status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_gr_fico_tarefas_por_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"at\".clie_id,  \"at\".stat_id,  stat_nm,  COUNT(\"at\".ativ_id) AS qtde";
$proto0["m_strFrom"] = "FROM tb_atividade AS \"at\"  , tb_status_atividades AS st";
$proto0["m_strWhere"] = "(\"at\".stat_id = st.stat_id)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "\"at\".stat_id = st.stat_id";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "stat_id",
	"m_strTable" => "at",
	"m_srcTableName" => "Gráfico Tarefas por Status"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= st.stat_id";
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
	"m_strName" => "clie_id",
	"m_strTable" => "at",
	"m_srcTableName" => "Gráfico Tarefas por Status"
));

$proto6["m_sql"] = "\"at\".clie_id";
$proto6["m_srcTableName"] = "Gráfico Tarefas por Status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "stat_id",
	"m_strTable" => "at",
	"m_srcTableName" => "Gráfico Tarefas por Status"
));

$proto8["m_sql"] = "\"at\".stat_id";
$proto8["m_srcTableName"] = "Gráfico Tarefas por Status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "stat_nm"
));

$proto10["m_sql"] = "stat_nm";
$proto10["m_srcTableName"] = "Gráfico Tarefas por Status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_COUNT";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ativ_id",
	"m_strTable" => "at",
	"m_srcTableName" => "Gráfico Tarefas por Status"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "COUNT(\"at\".ativ_id)";
$proto12["m_srcTableName"] = "Gráfico Tarefas por Status";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "qtde";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "tb_atividade";
$proto16["m_srcTableName"] = "Gráfico Tarefas por Status";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "ativ_id";
$proto16["m_columns"][] = "clie_id";
$proto16["m_columns"][] = "ativ_nm";
$proto16["m_columns"][] = "ativ_ds";
$proto16["m_columns"][] = "lista_id";
$proto16["m_columns"][] = "stat_id";
$proto16["m_columns"][] = "ativ_fl_ativo";
$proto16["m_columns"][] = "ativ_prioridade";
$proto16["m_columns"][] = "ativ_concluida";
$proto16["m_columns"][] = "ativ_dt_ini";
$proto16["m_columns"][] = "ativ_dt_fim";
$proto16["m_columns"][] = "inclu_login";
$proto16["m_columns"][] = "inclu_dt";
$proto16["m_columns"][] = "alter_login";
$proto16["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "tb_atividade AS \"at\"";
$proto15["m_alias"] = "at";
$proto15["m_srcTableName"] = "Gráfico Tarefas por Status";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
												$proto19=array();
$proto19["m_link"] = "SQLL_CROSSJOIN";
			$proto20=array();
$proto20["m_strName"] = "tb_status_atividades";
$proto20["m_srcTableName"] = "Gráfico Tarefas por Status";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "stat_id";
$proto20["m_columns"][] = "clie_id";
$proto20["m_columns"][] = "stat_nm";
$proto20["m_columns"][] = "stat_ds";
$proto20["m_columns"][] = "stat_fl_ativo";
$proto20["m_columns"][] = "inclu_login";
$proto20["m_columns"][] = "inclu_dt";
$proto20["m_columns"][] = "alter_login";
$proto20["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "tb_status_atividades AS st";
$proto19["m_alias"] = "st";
$proto19["m_srcTableName"] = "Gráfico Tarefas por Status";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "at",
	"m_srcTableName" => "Gráfico Tarefas por Status"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "stat_id",
	"m_strTable" => "at",
	"m_srcTableName" => "Gráfico Tarefas por Status"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "stat_nm",
	"m_strTable" => "st",
	"m_srcTableName" => "Gráfico Tarefas por Status"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Gráfico Tarefas por Status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gr_fico_tarefas_por_status = createSqlQuery_gr_fico_tarefas_por_status();


	
		;

				

$tdatagr_fico_tarefas_por_status[".sqlquery"] = $queryData_gr_fico_tarefas_por_status;

$tableEvents["Gráfico Tarefas por Status"] = new eventsBase;
$tdatagr_fico_tarefas_por_status[".hasEvents"] = false;

?>