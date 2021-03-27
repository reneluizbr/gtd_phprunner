<?php



$tdatavw_dominio_prioridade = array();
$tdatavw_dominio_prioridade[".searchableFields"] = array();
$tdatavw_dominio_prioridade[".ShortName"] = "vw_dominio_prioridade";
$tdatavw_dominio_prioridade[".OwnerID"] = "";
$tdatavw_dominio_prioridade[".OriginalTable"] = "vw_dominio_prioridade";


$defaultPages = my_json_decode( "{}" );

$tdatavw_dominio_prioridade[".pagesByType"] = my_json_decode( "{}" );
$tdatavw_dominio_prioridade[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatavw_dominio_prioridade[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsvw_dominio_prioridade = array();
$fieldToolTipsvw_dominio_prioridade = array();
$pageTitlesvw_dominio_prioridade = array();
$placeHoldersvw_dominio_prioridade = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_dominio_prioridade["English"] = array();
	$fieldToolTipsvw_dominio_prioridade["English"] = array();
	$placeHoldersvw_dominio_prioridade["English"] = array();
	$pageTitlesvw_dominio_prioridade["English"] = array();
	$fieldLabelsvw_dominio_prioridade["English"]["domi_grupo"] = "Domi Grupo";
	$fieldToolTipsvw_dominio_prioridade["English"]["domi_grupo"] = "";
	$placeHoldersvw_dominio_prioridade["English"]["domi_grupo"] = "";
	$fieldLabelsvw_dominio_prioridade["English"]["domi_ordem"] = "Domi Ordem";
	$fieldToolTipsvw_dominio_prioridade["English"]["domi_ordem"] = "";
	$placeHoldersvw_dominio_prioridade["English"]["domi_ordem"] = "";
	$fieldLabelsvw_dominio_prioridade["English"]["domi_valor"] = "Domi Valor";
	$fieldToolTipsvw_dominio_prioridade["English"]["domi_valor"] = "";
	$placeHoldersvw_dominio_prioridade["English"]["domi_valor"] = "";
	$fieldLabelsvw_dominio_prioridade["English"]["domi_exibe"] = "Domi Exibe";
	$fieldToolTipsvw_dominio_prioridade["English"]["domi_exibe"] = "";
	$placeHoldersvw_dominio_prioridade["English"]["domi_exibe"] = "";
	$fieldLabelsvw_dominio_prioridade["English"]["IDIOMA"] = "IDIOMA";
	$fieldToolTipsvw_dominio_prioridade["English"]["IDIOMA"] = "";
	$placeHoldersvw_dominio_prioridade["English"]["IDIOMA"] = "";
	if (count($fieldToolTipsvw_dominio_prioridade["English"]))
		$tdatavw_dominio_prioridade[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsvw_dominio_prioridade["Portuguese(Brazil)"] = array();
	$fieldToolTipsvw_dominio_prioridade["Portuguese(Brazil)"] = array();
	$placeHoldersvw_dominio_prioridade["Portuguese(Brazil)"] = array();
	$pageTitlesvw_dominio_prioridade["Portuguese(Brazil)"] = array();
	$fieldLabelsvw_dominio_prioridade["Portuguese(Brazil)"]["domi_grupo"] = "Domi Grupo";
	$fieldToolTipsvw_dominio_prioridade["Portuguese(Brazil)"]["domi_grupo"] = "";
	$placeHoldersvw_dominio_prioridade["Portuguese(Brazil)"]["domi_grupo"] = "";
	$fieldLabelsvw_dominio_prioridade["Portuguese(Brazil)"]["domi_ordem"] = "Domi Ordem";
	$fieldToolTipsvw_dominio_prioridade["Portuguese(Brazil)"]["domi_ordem"] = "";
	$placeHoldersvw_dominio_prioridade["Portuguese(Brazil)"]["domi_ordem"] = "";
	$fieldLabelsvw_dominio_prioridade["Portuguese(Brazil)"]["domi_valor"] = "Domi Valor";
	$fieldToolTipsvw_dominio_prioridade["Portuguese(Brazil)"]["domi_valor"] = "";
	$placeHoldersvw_dominio_prioridade["Portuguese(Brazil)"]["domi_valor"] = "";
	$fieldLabelsvw_dominio_prioridade["Portuguese(Brazil)"]["domi_exibe"] = "Domi Exibe";
	$fieldToolTipsvw_dominio_prioridade["Portuguese(Brazil)"]["domi_exibe"] = "";
	$placeHoldersvw_dominio_prioridade["Portuguese(Brazil)"]["domi_exibe"] = "";
	$fieldLabelsvw_dominio_prioridade["Portuguese(Brazil)"]["IDIOMA"] = "IDIOMA";
	$fieldToolTipsvw_dominio_prioridade["Portuguese(Brazil)"]["IDIOMA"] = "";
	$placeHoldersvw_dominio_prioridade["Portuguese(Brazil)"]["IDIOMA"] = "";
	if (count($fieldToolTipsvw_dominio_prioridade["Portuguese(Brazil)"]))
		$tdatavw_dominio_prioridade[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvw_dominio_prioridade["Spanish"] = array();
	$fieldToolTipsvw_dominio_prioridade["Spanish"] = array();
	$placeHoldersvw_dominio_prioridade["Spanish"] = array();
	$pageTitlesvw_dominio_prioridade["Spanish"] = array();
	$fieldLabelsvw_dominio_prioridade["Spanish"]["domi_grupo"] = "Domi Grupo";
	$fieldToolTipsvw_dominio_prioridade["Spanish"]["domi_grupo"] = "";
	$placeHoldersvw_dominio_prioridade["Spanish"]["domi_grupo"] = "";
	$fieldLabelsvw_dominio_prioridade["Spanish"]["domi_ordem"] = "Domi Ordem";
	$fieldToolTipsvw_dominio_prioridade["Spanish"]["domi_ordem"] = "";
	$placeHoldersvw_dominio_prioridade["Spanish"]["domi_ordem"] = "";
	$fieldLabelsvw_dominio_prioridade["Spanish"]["domi_valor"] = "Domi Valor";
	$fieldToolTipsvw_dominio_prioridade["Spanish"]["domi_valor"] = "";
	$placeHoldersvw_dominio_prioridade["Spanish"]["domi_valor"] = "";
	$fieldLabelsvw_dominio_prioridade["Spanish"]["domi_exibe"] = "Domi Exibe";
	$fieldToolTipsvw_dominio_prioridade["Spanish"]["domi_exibe"] = "";
	$placeHoldersvw_dominio_prioridade["Spanish"]["domi_exibe"] = "";
	$fieldLabelsvw_dominio_prioridade["Spanish"]["IDIOMA"] = "IDIOMA";
	$fieldToolTipsvw_dominio_prioridade["Spanish"]["IDIOMA"] = "";
	$placeHoldersvw_dominio_prioridade["Spanish"]["IDIOMA"] = "";
	if (count($fieldToolTipsvw_dominio_prioridade["Spanish"]))
		$tdatavw_dominio_prioridade[".isUseToolTips"] = true;
}


	$tdatavw_dominio_prioridade[".NCSearch"] = true;



$tdatavw_dominio_prioridade[".shortTableName"] = "vw_dominio_prioridade";
$tdatavw_dominio_prioridade[".nSecOptions"] = 0;

$tdatavw_dominio_prioridade[".mainTableOwnerID"] = "";
$tdatavw_dominio_prioridade[".entityType"] = 0;

$tdatavw_dominio_prioridade[".strOriginalTableName"] = "vw_dominio_prioridade";

	



$tdatavw_dominio_prioridade[".showAddInPopup"] = false;

$tdatavw_dominio_prioridade[".showEditInPopup"] = false;

$tdatavw_dominio_prioridade[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_dominio_prioridade[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_dominio_prioridade[".listAjax"] = false;
//	temporary
$tdatavw_dominio_prioridade[".listAjax"] = false;

	$tdatavw_dominio_prioridade[".audit"] = false;

	$tdatavw_dominio_prioridade[".locking"] = false;


$pages = $tdatavw_dominio_prioridade[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavw_dominio_prioridade[".edit"] = true;
	$tdatavw_dominio_prioridade[".afterEditAction"] = 1;
	$tdatavw_dominio_prioridade[".closePopupAfterEdit"] = 1;
	$tdatavw_dominio_prioridade[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavw_dominio_prioridade[".add"] = true;
$tdatavw_dominio_prioridade[".afterAddAction"] = 1;
$tdatavw_dominio_prioridade[".closePopupAfterAdd"] = 1;
$tdatavw_dominio_prioridade[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavw_dominio_prioridade[".list"] = true;
}



$tdatavw_dominio_prioridade[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavw_dominio_prioridade[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavw_dominio_prioridade[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavw_dominio_prioridade[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavw_dominio_prioridade[".printFriendly"] = true;
}



$tdatavw_dominio_prioridade[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavw_dominio_prioridade[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavw_dominio_prioridade[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavw_dominio_prioridade[".isUseAjaxSuggest"] = true;

$tdatavw_dominio_prioridade[".rowHighlite"] = true;



									

$tdatavw_dominio_prioridade[".ajaxCodeSnippetAdded"] = false;

$tdatavw_dominio_prioridade[".buttonsAdded"] = false;

$tdatavw_dominio_prioridade[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_dominio_prioridade[".isUseTimeForSearch"] = false;


$tdatavw_dominio_prioridade[".badgeColor"] = "4169E1";


$tdatavw_dominio_prioridade[".allSearchFields"] = array();
$tdatavw_dominio_prioridade[".filterFields"] = array();
$tdatavw_dominio_prioridade[".requiredSearchFields"] = array();

$tdatavw_dominio_prioridade[".googleLikeFields"] = array();
$tdatavw_dominio_prioridade[".googleLikeFields"][] = "domi_grupo";
$tdatavw_dominio_prioridade[".googleLikeFields"][] = "domi_ordem";
$tdatavw_dominio_prioridade[".googleLikeFields"][] = "domi_valor";



$tdatavw_dominio_prioridade[".tableType"] = "list";

$tdatavw_dominio_prioridade[".printerPageOrientation"] = 0;
$tdatavw_dominio_prioridade[".nPrinterPageScale"] = 100;

$tdatavw_dominio_prioridade[".nPrinterSplitRecords"] = 40;

$tdatavw_dominio_prioridade[".geocodingEnabled"] = false;










$tdatavw_dominio_prioridade[".pageSize"] = 20;

$tdatavw_dominio_prioridade[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_dominio_prioridade[".strOrderBy"] = $tstrOrderBy;

$tdatavw_dominio_prioridade[".orderindexes"] = array();

$tdatavw_dominio_prioridade[".sqlHead"] = "SELECT domi_grupo,  	domi_ordem,  	domi_valor,  	domi_exibe,  	IDIOMA";
$tdatavw_dominio_prioridade[".sqlFrom"] = "FROM vw_dominio_prioridade";
$tdatavw_dominio_prioridade[".sqlWhereExpr"] = "";
$tdatavw_dominio_prioridade[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_dominio_prioridade[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_dominio_prioridade[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_dominio_prioridade[".highlightSearchResults"] = true;

$tableKeysvw_dominio_prioridade = array();
$tdatavw_dominio_prioridade[".Keys"] = $tableKeysvw_dominio_prioridade;


$tdatavw_dominio_prioridade[".hideMobileList"] = array();




//	domi_grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "domi_grupo";
	$fdata["GoodName"] = "domi_grupo";
	$fdata["ownerTable"] = "vw_dominio_prioridade";
	$fdata["Label"] = GetFieldLabel("vw_dominio_prioridade","domi_grupo");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "domi_grupo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domi_grupo";

	
	
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


	$tdatavw_dominio_prioridade["domi_grupo"] = $fdata;
		$tdatavw_dominio_prioridade[".searchableFields"][] = "domi_grupo";
//	domi_ordem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "domi_ordem";
	$fdata["GoodName"] = "domi_ordem";
	$fdata["ownerTable"] = "vw_dominio_prioridade";
	$fdata["Label"] = GetFieldLabel("vw_dominio_prioridade","domi_ordem");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "domi_ordem";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domi_ordem";

	
	
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


	$tdatavw_dominio_prioridade["domi_ordem"] = $fdata;
		$tdatavw_dominio_prioridade[".searchableFields"][] = "domi_ordem";
//	domi_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "domi_valor";
	$fdata["GoodName"] = "domi_valor";
	$fdata["ownerTable"] = "vw_dominio_prioridade";
	$fdata["Label"] = GetFieldLabel("vw_dominio_prioridade","domi_valor");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "domi_valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domi_valor";

	
	
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


	$tdatavw_dominio_prioridade["domi_valor"] = $fdata;
		$tdatavw_dominio_prioridade[".searchableFields"][] = "domi_valor";
//	domi_exibe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "domi_exibe";
	$fdata["GoodName"] = "domi_exibe";
	$fdata["ownerTable"] = "vw_dominio_prioridade";
	$fdata["Label"] = GetFieldLabel("vw_dominio_prioridade","domi_exibe");
	$fdata["FieldType"] = 205;

	
	
	
			

		$fdata["strField"] = "domi_exibe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domi_exibe";

	
	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatavw_dominio_prioridade["domi_exibe"] = $fdata;
	//	IDIOMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IDIOMA";
	$fdata["GoodName"] = "IDIOMA";
	$fdata["ownerTable"] = "vw_dominio_prioridade";
	$fdata["Label"] = GetFieldLabel("vw_dominio_prioridade","IDIOMA");
	$fdata["FieldType"] = 205;

	
	
	
			

		$fdata["strField"] = "IDIOMA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDIOMA";

	
	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatavw_dominio_prioridade["IDIOMA"] = $fdata;
	

$tables_data["vw_dominio_prioridade"]=&$tdatavw_dominio_prioridade;
$field_labels["vw_dominio_prioridade"] = &$fieldLabelsvw_dominio_prioridade;
$fieldToolTips["vw_dominio_prioridade"] = &$fieldToolTipsvw_dominio_prioridade;
$placeHolders["vw_dominio_prioridade"] = &$placeHoldersvw_dominio_prioridade;
$page_titles["vw_dominio_prioridade"] = &$pageTitlesvw_dominio_prioridade;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_dominio_prioridade"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_dominio_prioridade"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_dominio_prioridade()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "domi_grupo,  	domi_ordem,  	domi_valor,  	domi_exibe,  	IDIOMA";
$proto0["m_strFrom"] = "FROM vw_dominio_prioridade";
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
	"m_strName" => "domi_grupo",
	"m_strTable" => "vw_dominio_prioridade",
	"m_srcTableName" => "vw_dominio_prioridade"
));

$proto6["m_sql"] = "domi_grupo";
$proto6["m_srcTableName"] = "vw_dominio_prioridade";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "domi_ordem",
	"m_strTable" => "vw_dominio_prioridade",
	"m_srcTableName" => "vw_dominio_prioridade"
));

$proto8["m_sql"] = "domi_ordem";
$proto8["m_srcTableName"] = "vw_dominio_prioridade";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "domi_valor",
	"m_strTable" => "vw_dominio_prioridade",
	"m_srcTableName" => "vw_dominio_prioridade"
));

$proto10["m_sql"] = "domi_valor";
$proto10["m_srcTableName"] = "vw_dominio_prioridade";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "domi_exibe",
	"m_strTable" => "vw_dominio_prioridade",
	"m_srcTableName" => "vw_dominio_prioridade"
));

$proto12["m_sql"] = "domi_exibe";
$proto12["m_srcTableName"] = "vw_dominio_prioridade";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IDIOMA",
	"m_strTable" => "vw_dominio_prioridade",
	"m_srcTableName" => "vw_dominio_prioridade"
));

$proto14["m_sql"] = "IDIOMA";
$proto14["m_srcTableName"] = "vw_dominio_prioridade";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "vw_dominio_prioridade";
$proto17["m_srcTableName"] = "vw_dominio_prioridade";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "domi_grupo";
$proto17["m_columns"][] = "domi_ordem";
$proto17["m_columns"][] = "domi_valor";
$proto17["m_columns"][] = "domi_exibe";
$proto17["m_columns"][] = "IDIOMA";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "vw_dominio_prioridade";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "vw_dominio_prioridade";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vw_dominio_prioridade";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_dominio_prioridade = createSqlQuery_vw_dominio_prioridade();


	
		;

					

$tdatavw_dominio_prioridade[".sqlquery"] = $queryData_vw_dominio_prioridade;

$tableEvents["vw_dominio_prioridade"] = new eventsBase;
$tdatavw_dominio_prioridade[".hasEvents"] = false;

?>