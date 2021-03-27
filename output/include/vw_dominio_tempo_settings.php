<?php



$tdatavw_dominio_tempo = array();
$tdatavw_dominio_tempo[".searchableFields"] = array();
$tdatavw_dominio_tempo[".ShortName"] = "vw_dominio_tempo";
$tdatavw_dominio_tempo[".OwnerID"] = "";
$tdatavw_dominio_tempo[".OriginalTable"] = "vw_dominio_tempo";


$defaultPages = my_json_decode( "{}" );

$tdatavw_dominio_tempo[".pagesByType"] = my_json_decode( "{}" );
$tdatavw_dominio_tempo[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatavw_dominio_tempo[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsvw_dominio_tempo = array();
$fieldToolTipsvw_dominio_tempo = array();
$pageTitlesvw_dominio_tempo = array();
$placeHoldersvw_dominio_tempo = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_dominio_tempo["English"] = array();
	$fieldToolTipsvw_dominio_tempo["English"] = array();
	$placeHoldersvw_dominio_tempo["English"] = array();
	$pageTitlesvw_dominio_tempo["English"] = array();
	$fieldLabelsvw_dominio_tempo["English"]["domi_grupo"] = "Domi Grupo";
	$fieldToolTipsvw_dominio_tempo["English"]["domi_grupo"] = "";
	$placeHoldersvw_dominio_tempo["English"]["domi_grupo"] = "";
	$fieldLabelsvw_dominio_tempo["English"]["domi_ordem"] = "Domi Ordem";
	$fieldToolTipsvw_dominio_tempo["English"]["domi_ordem"] = "";
	$placeHoldersvw_dominio_tempo["English"]["domi_ordem"] = "";
	$fieldLabelsvw_dominio_tempo["English"]["domi_valor"] = "Domi Valor";
	$fieldToolTipsvw_dominio_tempo["English"]["domi_valor"] = "";
	$placeHoldersvw_dominio_tempo["English"]["domi_valor"] = "";
	$fieldLabelsvw_dominio_tempo["English"]["domi_exibe"] = "Domi Exibe";
	$fieldToolTipsvw_dominio_tempo["English"]["domi_exibe"] = "";
	$placeHoldersvw_dominio_tempo["English"]["domi_exibe"] = "";
	$fieldLabelsvw_dominio_tempo["English"]["IDIOMA"] = "IDIOMA";
	$fieldToolTipsvw_dominio_tempo["English"]["IDIOMA"] = "";
	$placeHoldersvw_dominio_tempo["English"]["IDIOMA"] = "";
	if (count($fieldToolTipsvw_dominio_tempo["English"]))
		$tdatavw_dominio_tempo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsvw_dominio_tempo["Portuguese(Brazil)"] = array();
	$fieldToolTipsvw_dominio_tempo["Portuguese(Brazil)"] = array();
	$placeHoldersvw_dominio_tempo["Portuguese(Brazil)"] = array();
	$pageTitlesvw_dominio_tempo["Portuguese(Brazil)"] = array();
	$fieldLabelsvw_dominio_tempo["Portuguese(Brazil)"]["domi_grupo"] = "Domi Grupo";
	$fieldToolTipsvw_dominio_tempo["Portuguese(Brazil)"]["domi_grupo"] = "";
	$placeHoldersvw_dominio_tempo["Portuguese(Brazil)"]["domi_grupo"] = "";
	$fieldLabelsvw_dominio_tempo["Portuguese(Brazil)"]["domi_ordem"] = "Domi Ordem";
	$fieldToolTipsvw_dominio_tempo["Portuguese(Brazil)"]["domi_ordem"] = "";
	$placeHoldersvw_dominio_tempo["Portuguese(Brazil)"]["domi_ordem"] = "";
	$fieldLabelsvw_dominio_tempo["Portuguese(Brazil)"]["domi_valor"] = "Domi Valor";
	$fieldToolTipsvw_dominio_tempo["Portuguese(Brazil)"]["domi_valor"] = "";
	$placeHoldersvw_dominio_tempo["Portuguese(Brazil)"]["domi_valor"] = "";
	$fieldLabelsvw_dominio_tempo["Portuguese(Brazil)"]["domi_exibe"] = "Domi Exibe";
	$fieldToolTipsvw_dominio_tempo["Portuguese(Brazil)"]["domi_exibe"] = "";
	$placeHoldersvw_dominio_tempo["Portuguese(Brazil)"]["domi_exibe"] = "";
	$fieldLabelsvw_dominio_tempo["Portuguese(Brazil)"]["IDIOMA"] = "IDIOMA";
	$fieldToolTipsvw_dominio_tempo["Portuguese(Brazil)"]["IDIOMA"] = "";
	$placeHoldersvw_dominio_tempo["Portuguese(Brazil)"]["IDIOMA"] = "";
	if (count($fieldToolTipsvw_dominio_tempo["Portuguese(Brazil)"]))
		$tdatavw_dominio_tempo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvw_dominio_tempo["Spanish"] = array();
	$fieldToolTipsvw_dominio_tempo["Spanish"] = array();
	$placeHoldersvw_dominio_tempo["Spanish"] = array();
	$pageTitlesvw_dominio_tempo["Spanish"] = array();
	$fieldLabelsvw_dominio_tempo["Spanish"]["domi_grupo"] = "Domi Grupo";
	$fieldToolTipsvw_dominio_tempo["Spanish"]["domi_grupo"] = "";
	$placeHoldersvw_dominio_tempo["Spanish"]["domi_grupo"] = "";
	$fieldLabelsvw_dominio_tempo["Spanish"]["domi_ordem"] = "Domi Ordem";
	$fieldToolTipsvw_dominio_tempo["Spanish"]["domi_ordem"] = "";
	$placeHoldersvw_dominio_tempo["Spanish"]["domi_ordem"] = "";
	$fieldLabelsvw_dominio_tempo["Spanish"]["domi_valor"] = "Domi Valor";
	$fieldToolTipsvw_dominio_tempo["Spanish"]["domi_valor"] = "";
	$placeHoldersvw_dominio_tempo["Spanish"]["domi_valor"] = "";
	$fieldLabelsvw_dominio_tempo["Spanish"]["domi_exibe"] = "Domi Exibe";
	$fieldToolTipsvw_dominio_tempo["Spanish"]["domi_exibe"] = "";
	$placeHoldersvw_dominio_tempo["Spanish"]["domi_exibe"] = "";
	$fieldLabelsvw_dominio_tempo["Spanish"]["IDIOMA"] = "IDIOMA";
	$fieldToolTipsvw_dominio_tempo["Spanish"]["IDIOMA"] = "";
	$placeHoldersvw_dominio_tempo["Spanish"]["IDIOMA"] = "";
	if (count($fieldToolTipsvw_dominio_tempo["Spanish"]))
		$tdatavw_dominio_tempo[".isUseToolTips"] = true;
}


	$tdatavw_dominio_tempo[".NCSearch"] = true;



$tdatavw_dominio_tempo[".shortTableName"] = "vw_dominio_tempo";
$tdatavw_dominio_tempo[".nSecOptions"] = 0;

$tdatavw_dominio_tempo[".mainTableOwnerID"] = "";
$tdatavw_dominio_tempo[".entityType"] = 0;

$tdatavw_dominio_tempo[".strOriginalTableName"] = "vw_dominio_tempo";

	



$tdatavw_dominio_tempo[".showAddInPopup"] = false;

$tdatavw_dominio_tempo[".showEditInPopup"] = false;

$tdatavw_dominio_tempo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_dominio_tempo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_dominio_tempo[".listAjax"] = false;
//	temporary
$tdatavw_dominio_tempo[".listAjax"] = false;

	$tdatavw_dominio_tempo[".audit"] = false;

	$tdatavw_dominio_tempo[".locking"] = false;


$pages = $tdatavw_dominio_tempo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavw_dominio_tempo[".edit"] = true;
	$tdatavw_dominio_tempo[".afterEditAction"] = 1;
	$tdatavw_dominio_tempo[".closePopupAfterEdit"] = 1;
	$tdatavw_dominio_tempo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavw_dominio_tempo[".add"] = true;
$tdatavw_dominio_tempo[".afterAddAction"] = 1;
$tdatavw_dominio_tempo[".closePopupAfterAdd"] = 1;
$tdatavw_dominio_tempo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavw_dominio_tempo[".list"] = true;
}



$tdatavw_dominio_tempo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavw_dominio_tempo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavw_dominio_tempo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavw_dominio_tempo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavw_dominio_tempo[".printFriendly"] = true;
}



$tdatavw_dominio_tempo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavw_dominio_tempo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavw_dominio_tempo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavw_dominio_tempo[".isUseAjaxSuggest"] = true;

$tdatavw_dominio_tempo[".rowHighlite"] = true;



									

$tdatavw_dominio_tempo[".ajaxCodeSnippetAdded"] = false;

$tdatavw_dominio_tempo[".buttonsAdded"] = false;

$tdatavw_dominio_tempo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_dominio_tempo[".isUseTimeForSearch"] = false;


$tdatavw_dominio_tempo[".badgeColor"] = "6B8E23";


$tdatavw_dominio_tempo[".allSearchFields"] = array();
$tdatavw_dominio_tempo[".filterFields"] = array();
$tdatavw_dominio_tempo[".requiredSearchFields"] = array();

$tdatavw_dominio_tempo[".googleLikeFields"] = array();
$tdatavw_dominio_tempo[".googleLikeFields"][] = "domi_grupo";
$tdatavw_dominio_tempo[".googleLikeFields"][] = "domi_ordem";
$tdatavw_dominio_tempo[".googleLikeFields"][] = "domi_valor";



$tdatavw_dominio_tempo[".tableType"] = "list";

$tdatavw_dominio_tempo[".printerPageOrientation"] = 0;
$tdatavw_dominio_tempo[".nPrinterPageScale"] = 100;

$tdatavw_dominio_tempo[".nPrinterSplitRecords"] = 40;

$tdatavw_dominio_tempo[".geocodingEnabled"] = false;










$tdatavw_dominio_tempo[".pageSize"] = 20;

$tdatavw_dominio_tempo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_dominio_tempo[".strOrderBy"] = $tstrOrderBy;

$tdatavw_dominio_tempo[".orderindexes"] = array();

$tdatavw_dominio_tempo[".sqlHead"] = "SELECT domi_grupo,  	domi_ordem,  	domi_valor,  	domi_exibe,  	IDIOMA";
$tdatavw_dominio_tempo[".sqlFrom"] = "FROM vw_dominio_tempo";
$tdatavw_dominio_tempo[".sqlWhereExpr"] = "";
$tdatavw_dominio_tempo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_dominio_tempo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_dominio_tempo[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_dominio_tempo[".highlightSearchResults"] = true;

$tableKeysvw_dominio_tempo = array();
$tdatavw_dominio_tempo[".Keys"] = $tableKeysvw_dominio_tempo;


$tdatavw_dominio_tempo[".hideMobileList"] = array();




//	domi_grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "domi_grupo";
	$fdata["GoodName"] = "domi_grupo";
	$fdata["ownerTable"] = "vw_dominio_tempo";
	$fdata["Label"] = GetFieldLabel("vw_dominio_tempo","domi_grupo");
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


	$tdatavw_dominio_tempo["domi_grupo"] = $fdata;
		$tdatavw_dominio_tempo[".searchableFields"][] = "domi_grupo";
//	domi_ordem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "domi_ordem";
	$fdata["GoodName"] = "domi_ordem";
	$fdata["ownerTable"] = "vw_dominio_tempo";
	$fdata["Label"] = GetFieldLabel("vw_dominio_tempo","domi_ordem");
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


	$tdatavw_dominio_tempo["domi_ordem"] = $fdata;
		$tdatavw_dominio_tempo[".searchableFields"][] = "domi_ordem";
//	domi_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "domi_valor";
	$fdata["GoodName"] = "domi_valor";
	$fdata["ownerTable"] = "vw_dominio_tempo";
	$fdata["Label"] = GetFieldLabel("vw_dominio_tempo","domi_valor");
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


	$tdatavw_dominio_tempo["domi_valor"] = $fdata;
		$tdatavw_dominio_tempo[".searchableFields"][] = "domi_valor";
//	domi_exibe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "domi_exibe";
	$fdata["GoodName"] = "domi_exibe";
	$fdata["ownerTable"] = "vw_dominio_tempo";
	$fdata["Label"] = GetFieldLabel("vw_dominio_tempo","domi_exibe");
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


	$tdatavw_dominio_tempo["domi_exibe"] = $fdata;
	//	IDIOMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IDIOMA";
	$fdata["GoodName"] = "IDIOMA";
	$fdata["ownerTable"] = "vw_dominio_tempo";
	$fdata["Label"] = GetFieldLabel("vw_dominio_tempo","IDIOMA");
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


	$tdatavw_dominio_tempo["IDIOMA"] = $fdata;
	

$tables_data["vw_dominio_tempo"]=&$tdatavw_dominio_tempo;
$field_labels["vw_dominio_tempo"] = &$fieldLabelsvw_dominio_tempo;
$fieldToolTips["vw_dominio_tempo"] = &$fieldToolTipsvw_dominio_tempo;
$placeHolders["vw_dominio_tempo"] = &$placeHoldersvw_dominio_tempo;
$page_titles["vw_dominio_tempo"] = &$pageTitlesvw_dominio_tempo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_dominio_tempo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_dominio_tempo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_dominio_tempo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "domi_grupo,  	domi_ordem,  	domi_valor,  	domi_exibe,  	IDIOMA";
$proto0["m_strFrom"] = "FROM vw_dominio_tempo";
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
	"m_strTable" => "vw_dominio_tempo",
	"m_srcTableName" => "vw_dominio_tempo"
));

$proto6["m_sql"] = "domi_grupo";
$proto6["m_srcTableName"] = "vw_dominio_tempo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "domi_ordem",
	"m_strTable" => "vw_dominio_tempo",
	"m_srcTableName" => "vw_dominio_tempo"
));

$proto8["m_sql"] = "domi_ordem";
$proto8["m_srcTableName"] = "vw_dominio_tempo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "domi_valor",
	"m_strTable" => "vw_dominio_tempo",
	"m_srcTableName" => "vw_dominio_tempo"
));

$proto10["m_sql"] = "domi_valor";
$proto10["m_srcTableName"] = "vw_dominio_tempo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "domi_exibe",
	"m_strTable" => "vw_dominio_tempo",
	"m_srcTableName" => "vw_dominio_tempo"
));

$proto12["m_sql"] = "domi_exibe";
$proto12["m_srcTableName"] = "vw_dominio_tempo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IDIOMA",
	"m_strTable" => "vw_dominio_tempo",
	"m_srcTableName" => "vw_dominio_tempo"
));

$proto14["m_sql"] = "IDIOMA";
$proto14["m_srcTableName"] = "vw_dominio_tempo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "vw_dominio_tempo";
$proto17["m_srcTableName"] = "vw_dominio_tempo";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "domi_grupo";
$proto17["m_columns"][] = "domi_ordem";
$proto17["m_columns"][] = "domi_valor";
$proto17["m_columns"][] = "domi_exibe";
$proto17["m_columns"][] = "IDIOMA";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "vw_dominio_tempo";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "vw_dominio_tempo";
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
$proto0["m_srcTableName"]="vw_dominio_tempo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_dominio_tempo = createSqlQuery_vw_dominio_tempo();


	
		;

					

$tdatavw_dominio_tempo[".sqlquery"] = $queryData_vw_dominio_tempo;

$tableEvents["vw_dominio_tempo"] = new eventsBase;
$tdatavw_dominio_tempo[".hasEvents"] = false;

?>