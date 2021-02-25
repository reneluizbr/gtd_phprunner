<?php



$tdatatb_planos_valores = array();
$tdatatb_planos_valores[".searchableFields"] = array();
$tdatatb_planos_valores[".ShortName"] = "tb_planos_valores";
$tdatatb_planos_valores[".OwnerID"] = "";
$tdatatb_planos_valores[".OriginalTable"] = "tb_planos_valores";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_planos_valores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_planos_valores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_planos_valores[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_planos_valores = array();
$fieldToolTipstb_planos_valores = array();
$pageTitlestb_planos_valores = array();
$placeHolderstb_planos_valores = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_planos_valores["English"] = array();
	$fieldToolTipstb_planos_valores["English"] = array();
	$placeHolderstb_planos_valores["English"] = array();
	$pageTitlestb_planos_valores["English"] = array();
	$fieldLabelstb_planos_valores["English"]["plva_id"] = "ID";
	$fieldToolTipstb_planos_valores["English"]["plva_id"] = "";
	$placeHolderstb_planos_valores["English"]["plva_id"] = "";
	$fieldLabelstb_planos_valores["English"]["plan_id"] = "Plan ID";
	$fieldToolTipstb_planos_valores["English"]["plan_id"] = "";
	$placeHolderstb_planos_valores["English"]["plan_id"] = "";
	$fieldLabelstb_planos_valores["English"]["plva_dt_vigenc_ini"] = "Effective Date Start";
	$fieldToolTipstb_planos_valores["English"]["plva_dt_vigenc_ini"] = "";
	$placeHolderstb_planos_valores["English"]["plva_dt_vigenc_ini"] = "";
	$fieldLabelstb_planos_valores["English"]["plva_dt_vigenc_fim"] = "Final Effective Date";
	$fieldToolTipstb_planos_valores["English"]["plva_dt_vigenc_fim"] = "";
	$placeHolderstb_planos_valores["English"]["plva_dt_vigenc_fim"] = "";
	$fieldLabelstb_planos_valores["English"]["plva_vl"] = "Plan Amount";
	$fieldToolTipstb_planos_valores["English"]["plva_vl"] = "";
	$placeHolderstb_planos_valores["English"]["plva_vl"] = "";
	$fieldLabelstb_planos_valores["English"]["inclu_dt"] = "Included in";
	$fieldToolTipstb_planos_valores["English"]["inclu_dt"] = "";
	$placeHolderstb_planos_valores["English"]["inclu_dt"] = "";
	$fieldLabelstb_planos_valores["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_planos_valores["English"]["alter_dt"] = "";
	$placeHolderstb_planos_valores["English"]["alter_dt"] = "";
	$fieldLabelstb_planos_valores["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_planos_valores["English"]["inclu_login"] = "";
	$placeHolderstb_planos_valores["English"]["inclu_login"] = "";
	$fieldLabelstb_planos_valores["English"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_planos_valores["English"]["alter_login"] = "";
	$placeHolderstb_planos_valores["English"]["alter_login"] = "";
	if (count($fieldToolTipstb_planos_valores["English"]))
		$tdatatb_planos_valores[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_planos_valores["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_planos_valores["Portuguese(Brazil)"] = array();
	$placeHolderstb_planos_valores["Portuguese(Brazil)"] = array();
	$pageTitlestb_planos_valores["Portuguese(Brazil)"] = array();
	$fieldLabelstb_planos_valores["Portuguese(Brazil)"]["plva_id"] = "ID";
	$fieldToolTipstb_planos_valores["Portuguese(Brazil)"]["plva_id"] = "";
	$placeHolderstb_planos_valores["Portuguese(Brazil)"]["plva_id"] = "";
	$fieldLabelstb_planos_valores["Portuguese(Brazil)"]["plan_id"] = "ID do Plano";
	$fieldToolTipstb_planos_valores["Portuguese(Brazil)"]["plan_id"] = "";
	$placeHolderstb_planos_valores["Portuguese(Brazil)"]["plan_id"] = "";
	$fieldLabelstb_planos_valores["Portuguese(Brazil)"]["plva_dt_vigenc_ini"] = "Data Vigência Início";
	$fieldToolTipstb_planos_valores["Portuguese(Brazil)"]["plva_dt_vigenc_ini"] = "";
	$placeHolderstb_planos_valores["Portuguese(Brazil)"]["plva_dt_vigenc_ini"] = "";
	$fieldLabelstb_planos_valores["Portuguese(Brazil)"]["plva_dt_vigenc_fim"] = "Data Vigência Final";
	$fieldToolTipstb_planos_valores["Portuguese(Brazil)"]["plva_dt_vigenc_fim"] = "";
	$placeHolderstb_planos_valores["Portuguese(Brazil)"]["plva_dt_vigenc_fim"] = "";
	$fieldLabelstb_planos_valores["Portuguese(Brazil)"]["plva_vl"] = "Valor do Plano";
	$fieldToolTipstb_planos_valores["Portuguese(Brazil)"]["plva_vl"] = "";
	$placeHolderstb_planos_valores["Portuguese(Brazil)"]["plva_vl"] = "";
	$fieldLabelstb_planos_valores["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_planos_valores["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_planos_valores["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_planos_valores["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_planos_valores["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_planos_valores["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelstb_planos_valores["Portuguese(Brazil)"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_planos_valores["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_planos_valores["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_planos_valores["Portuguese(Brazil)"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_planos_valores["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_planos_valores["Portuguese(Brazil)"]["alter_login"] = "";
	if (count($fieldToolTipstb_planos_valores["Portuguese(Brazil)"]))
		$tdatatb_planos_valores[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_planos_valores["Spanish"] = array();
	$fieldToolTipstb_planos_valores["Spanish"] = array();
	$placeHolderstb_planos_valores["Spanish"] = array();
	$pageTitlestb_planos_valores["Spanish"] = array();
	$fieldLabelstb_planos_valores["Spanish"]["plva_id"] = "ID";
	$fieldToolTipstb_planos_valores["Spanish"]["plva_id"] = "";
	$placeHolderstb_planos_valores["Spanish"]["plva_id"] = "";
	$fieldLabelstb_planos_valores["Spanish"]["plan_id"] = "ID del plan";
	$fieldToolTipstb_planos_valores["Spanish"]["plan_id"] = "";
	$placeHolderstb_planos_valores["Spanish"]["plan_id"] = "";
	$fieldLabelstb_planos_valores["Spanish"]["plva_dt_vigenc_ini"] = "Fecha de inicio efectiva";
	$fieldToolTipstb_planos_valores["Spanish"]["plva_dt_vigenc_ini"] = "";
	$placeHolderstb_planos_valores["Spanish"]["plva_dt_vigenc_ini"] = "";
	$fieldLabelstb_planos_valores["Spanish"]["plva_dt_vigenc_fim"] = "Fecha de vigencia final";
	$fieldToolTipstb_planos_valores["Spanish"]["plva_dt_vigenc_fim"] = "";
	$placeHolderstb_planos_valores["Spanish"]["plva_dt_vigenc_fim"] = "";
	$fieldLabelstb_planos_valores["Spanish"]["plva_vl"] = "Cantidad del plan";
	$fieldToolTipstb_planos_valores["Spanish"]["plva_vl"] = "";
	$placeHolderstb_planos_valores["Spanish"]["plva_vl"] = "";
	$fieldLabelstb_planos_valores["Spanish"]["inclu_dt"] = "Incluido en";
	$fieldToolTipstb_planos_valores["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_planos_valores["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_planos_valores["Spanish"]["alter_dt"] = "Cambiado en";
	$fieldToolTipstb_planos_valores["Spanish"]["alter_dt"] = "";
	$placeHolderstb_planos_valores["Spanish"]["alter_dt"] = "";
	$fieldLabelstb_planos_valores["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_planos_valores["Spanish"]["inclu_login"] = "";
	$placeHolderstb_planos_valores["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_planos_valores["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_planos_valores["Spanish"]["alter_login"] = "";
	$placeHolderstb_planos_valores["Spanish"]["alter_login"] = "";
	if (count($fieldToolTipstb_planos_valores["Spanish"]))
		$tdatatb_planos_valores[".isUseToolTips"] = true;
}


	$tdatatb_planos_valores[".NCSearch"] = true;



$tdatatb_planos_valores[".shortTableName"] = "tb_planos_valores";
$tdatatb_planos_valores[".nSecOptions"] = 0;

$tdatatb_planos_valores[".mainTableOwnerID"] = "";
$tdatatb_planos_valores[".entityType"] = 0;

$tdatatb_planos_valores[".strOriginalTableName"] = "tb_planos_valores";

	



$tdatatb_planos_valores[".showAddInPopup"] = false;

$tdatatb_planos_valores[".showEditInPopup"] = false;

$tdatatb_planos_valores[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_planos_valores[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_planos_valores[".listAjax"] = false;
//	temporary
$tdatatb_planos_valores[".listAjax"] = false;

	$tdatatb_planos_valores[".audit"] = false;

	$tdatatb_planos_valores[".locking"] = false;


$pages = $tdatatb_planos_valores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_planos_valores[".edit"] = true;
	$tdatatb_planos_valores[".afterEditAction"] = 0;
	$tdatatb_planos_valores[".closePopupAfterEdit"] = 1;
	$tdatatb_planos_valores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_planos_valores[".add"] = true;
$tdatatb_planos_valores[".afterAddAction"] = 0;
$tdatatb_planos_valores[".closePopupAfterAdd"] = 1;
$tdatatb_planos_valores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_planos_valores[".list"] = true;
}



$tdatatb_planos_valores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_planos_valores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_planos_valores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_planos_valores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_planos_valores[".printFriendly"] = true;
}



$tdatatb_planos_valores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_planos_valores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_planos_valores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_planos_valores[".isUseAjaxSuggest"] = true;

$tdatatb_planos_valores[".rowHighlite"] = true;



									

$tdatatb_planos_valores[".ajaxCodeSnippetAdded"] = false;

$tdatatb_planos_valores[".buttonsAdded"] = false;

$tdatatb_planos_valores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_planos_valores[".isUseTimeForSearch"] = false;


$tdatatb_planos_valores[".badgeColor"] = "BC8F8F";


$tdatatb_planos_valores[".allSearchFields"] = array();
$tdatatb_planos_valores[".filterFields"] = array();
$tdatatb_planos_valores[".requiredSearchFields"] = array();

$tdatatb_planos_valores[".googleLikeFields"] = array();
$tdatatb_planos_valores[".googleLikeFields"][] = "plva_id";
$tdatatb_planos_valores[".googleLikeFields"][] = "plan_id";
$tdatatb_planos_valores[".googleLikeFields"][] = "plva_dt_vigenc_ini";
$tdatatb_planos_valores[".googleLikeFields"][] = "plva_dt_vigenc_fim";
$tdatatb_planos_valores[".googleLikeFields"][] = "plva_vl";
$tdatatb_planos_valores[".googleLikeFields"][] = "inclu_login";
$tdatatb_planos_valores[".googleLikeFields"][] = "inclu_dt";
$tdatatb_planos_valores[".googleLikeFields"][] = "alter_login";
$tdatatb_planos_valores[".googleLikeFields"][] = "alter_dt";



$tdatatb_planos_valores[".tableType"] = "list";

$tdatatb_planos_valores[".printerPageOrientation"] = 0;
$tdatatb_planos_valores[".nPrinterPageScale"] = 100;

$tdatatb_planos_valores[".nPrinterSplitRecords"] = 40;

$tdatatb_planos_valores[".geocodingEnabled"] = false;










$tdatatb_planos_valores[".pageSize"] = 20;

$tdatatb_planos_valores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_planos_valores[".strOrderBy"] = $tstrOrderBy;

$tdatatb_planos_valores[".orderindexes"] = array();

$tdatatb_planos_valores[".sqlHead"] = "SELECT plva_id,  	plan_id,  	plva_dt_vigenc_ini,  	plva_dt_vigenc_fim,  	plva_vl,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatatb_planos_valores[".sqlFrom"] = "FROM tb_planos_valores";
$tdatatb_planos_valores[".sqlWhereExpr"] = "";
$tdatatb_planos_valores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_planos_valores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_planos_valores[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_planos_valores[".highlightSearchResults"] = true;

$tableKeystb_planos_valores = array();
$tableKeystb_planos_valores[] = "plva_id";
$tdatatb_planos_valores[".Keys"] = $tableKeystb_planos_valores;


$tdatatb_planos_valores[".hideMobileList"] = array();




//	plva_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "plva_id";
	$fdata["GoodName"] = "plva_id";
	$fdata["ownerTable"] = "tb_planos_valores";
	$fdata["Label"] = GetFieldLabel("tb_planos_valores","plva_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "plva_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "plva_id";

	
	
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


	$tdatatb_planos_valores["plva_id"] = $fdata;
		$tdatatb_planos_valores[".searchableFields"][] = "plva_id";
//	plan_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "plan_id";
	$fdata["GoodName"] = "plan_id";
	$fdata["ownerTable"] = "tb_planos_valores";
	$fdata["Label"] = GetFieldLabel("tb_planos_valores","plan_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "plan_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "plan_id";

	
	
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


	$tdatatb_planos_valores["plan_id"] = $fdata;
		$tdatatb_planos_valores[".searchableFields"][] = "plan_id";
//	plva_dt_vigenc_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "plva_dt_vigenc_ini";
	$fdata["GoodName"] = "plva_dt_vigenc_ini";
	$fdata["ownerTable"] = "tb_planos_valores";
	$fdata["Label"] = GetFieldLabel("tb_planos_valores","plva_dt_vigenc_ini");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "plva_dt_vigenc_ini";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "plva_dt_vigenc_ini";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatb_planos_valores["plva_dt_vigenc_ini"] = $fdata;
		$tdatatb_planos_valores[".searchableFields"][] = "plva_dt_vigenc_ini";
//	plva_dt_vigenc_fim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "plva_dt_vigenc_fim";
	$fdata["GoodName"] = "plva_dt_vigenc_fim";
	$fdata["ownerTable"] = "tb_planos_valores";
	$fdata["Label"] = GetFieldLabel("tb_planos_valores","plva_dt_vigenc_fim");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "plva_dt_vigenc_fim";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "plva_dt_vigenc_fim";

	
	
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


	$tdatatb_planos_valores["plva_dt_vigenc_fim"] = $fdata;
		$tdatatb_planos_valores[".searchableFields"][] = "plva_dt_vigenc_fim";
//	plva_vl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "plva_vl";
	$fdata["GoodName"] = "plva_vl";
	$fdata["ownerTable"] = "tb_planos_valores";
	$fdata["Label"] = GetFieldLabel("tb_planos_valores","plva_vl");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "plva_vl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "plva_vl";

	
	
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


	$tdatatb_planos_valores["plva_vl"] = $fdata;
		$tdatatb_planos_valores[".searchableFields"][] = "plva_vl";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_planos_valores";
	$fdata["Label"] = GetFieldLabel("tb_planos_valores","inclu_login");
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


	$tdatatb_planos_valores["inclu_login"] = $fdata;
		$tdatatb_planos_valores[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_planos_valores";
	$fdata["Label"] = GetFieldLabel("tb_planos_valores","inclu_dt");
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


	$tdatatb_planos_valores["inclu_dt"] = $fdata;
		$tdatatb_planos_valores[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_planos_valores";
	$fdata["Label"] = GetFieldLabel("tb_planos_valores","alter_login");
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


	$tdatatb_planos_valores["alter_login"] = $fdata;
		$tdatatb_planos_valores[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_planos_valores";
	$fdata["Label"] = GetFieldLabel("tb_planos_valores","alter_dt");
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


	$tdatatb_planos_valores["alter_dt"] = $fdata;
		$tdatatb_planos_valores[".searchableFields"][] = "alter_dt";


$tables_data["tb_planos_valores"]=&$tdatatb_planos_valores;
$field_labels["tb_planos_valores"] = &$fieldLabelstb_planos_valores;
$fieldToolTips["tb_planos_valores"] = &$fieldToolTipstb_planos_valores;
$placeHolders["tb_planos_valores"] = &$placeHolderstb_planos_valores;
$page_titles["tb_planos_valores"] = &$pageTitlestb_planos_valores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_planos_valores"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_planos_valores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_planos_valores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "plva_id,  	plan_id,  	plva_dt_vigenc_ini,  	plva_dt_vigenc_fim,  	plva_vl,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM tb_planos_valores";
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
	"m_strName" => "plva_id",
	"m_strTable" => "tb_planos_valores",
	"m_srcTableName" => "tb_planos_valores"
));

$proto6["m_sql"] = "plva_id";
$proto6["m_srcTableName"] = "tb_planos_valores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "plan_id",
	"m_strTable" => "tb_planos_valores",
	"m_srcTableName" => "tb_planos_valores"
));

$proto8["m_sql"] = "plan_id";
$proto8["m_srcTableName"] = "tb_planos_valores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "plva_dt_vigenc_ini",
	"m_strTable" => "tb_planos_valores",
	"m_srcTableName" => "tb_planos_valores"
));

$proto10["m_sql"] = "plva_dt_vigenc_ini";
$proto10["m_srcTableName"] = "tb_planos_valores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "plva_dt_vigenc_fim",
	"m_strTable" => "tb_planos_valores",
	"m_srcTableName" => "tb_planos_valores"
));

$proto12["m_sql"] = "plva_dt_vigenc_fim";
$proto12["m_srcTableName"] = "tb_planos_valores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "plva_vl",
	"m_strTable" => "tb_planos_valores",
	"m_srcTableName" => "tb_planos_valores"
));

$proto14["m_sql"] = "plva_vl";
$proto14["m_srcTableName"] = "tb_planos_valores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_planos_valores",
	"m_srcTableName" => "tb_planos_valores"
));

$proto16["m_sql"] = "inclu_login";
$proto16["m_srcTableName"] = "tb_planos_valores";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_planos_valores",
	"m_srcTableName" => "tb_planos_valores"
));

$proto18["m_sql"] = "inclu_dt";
$proto18["m_srcTableName"] = "tb_planos_valores";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_planos_valores",
	"m_srcTableName" => "tb_planos_valores"
));

$proto20["m_sql"] = "alter_login";
$proto20["m_srcTableName"] = "tb_planos_valores";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_planos_valores",
	"m_srcTableName" => "tb_planos_valores"
));

$proto22["m_sql"] = "alter_dt";
$proto22["m_srcTableName"] = "tb_planos_valores";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tb_planos_valores";
$proto25["m_srcTableName"] = "tb_planos_valores";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "plva_id";
$proto25["m_columns"][] = "plan_id";
$proto25["m_columns"][] = "plva_dt_vigenc_ini";
$proto25["m_columns"][] = "plva_dt_vigenc_fim";
$proto25["m_columns"][] = "plva_vl";
$proto25["m_columns"][] = "inclu_login";
$proto25["m_columns"][] = "inclu_dt";
$proto25["m_columns"][] = "alter_login";
$proto25["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "tb_planos_valores";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tb_planos_valores";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_planos_valores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_planos_valores = createSqlQuery_tb_planos_valores();


	
		;

									

$tdatatb_planos_valores[".sqlquery"] = $queryData_tb_planos_valores;

$tableEvents["tb_planos_valores"] = new eventsBase;
$tdatatb_planos_valores[".hasEvents"] = false;

?>