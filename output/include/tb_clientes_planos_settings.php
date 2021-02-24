<?php



$tdatatb_clientes_planos = array();
$tdatatb_clientes_planos[".searchableFields"] = array();
$tdatatb_clientes_planos[".ShortName"] = "tb_clientes_planos";
$tdatatb_clientes_planos[".OwnerID"] = "";
$tdatatb_clientes_planos[".OriginalTable"] = "tb_clientes_planos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_clientes_planos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_clientes_planos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_clientes_planos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_clientes_planos = array();
$fieldToolTipstb_clientes_planos = array();
$pageTitlestb_clientes_planos = array();
$placeHolderstb_clientes_planos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_clientes_planos["English"] = array();
	$fieldToolTipstb_clientes_planos["English"] = array();
	$placeHolderstb_clientes_planos["English"] = array();
	$pageTitlestb_clientes_planos["English"] = array();
	$fieldLabelstb_clientes_planos["English"]["clipla_id"] = "ID";
	$fieldToolTipstb_clientes_planos["English"]["clipla_id"] = "";
	$placeHolderstb_clientes_planos["English"]["clipla_id"] = "";
	$fieldLabelstb_clientes_planos["English"]["clie_id"] = "Customer ID";
	$fieldToolTipstb_clientes_planos["English"]["clie_id"] = "";
	$placeHolderstb_clientes_planos["English"]["clie_id"] = "";
	$fieldLabelstb_clientes_planos["English"]["plan_id"] = "Flat ID";
	$fieldToolTipstb_clientes_planos["English"]["plan_id"] = "";
	$placeHolderstb_clientes_planos["English"]["plan_id"] = "";
	$fieldLabelstb_clientes_planos["English"]["clipla_dt_vigenc_ini"] = "Effective Date Start";
	$fieldToolTipstb_clientes_planos["English"]["clipla_dt_vigenc_ini"] = "";
	$placeHolderstb_clientes_planos["English"]["clipla_dt_vigenc_ini"] = "";
	$fieldLabelstb_clientes_planos["English"]["clipla_dt_vigenc_fim"] = "Final Effective Date";
	$fieldToolTipstb_clientes_planos["English"]["clipla_dt_vigenc_fim"] = "";
	$placeHolderstb_clientes_planos["English"]["clipla_dt_vigenc_fim"] = "";
	$fieldLabelstb_clientes_planos["English"]["clipla_vl"] = "Plan Amount";
	$fieldToolTipstb_clientes_planos["English"]["clipla_vl"] = "";
	$placeHolderstb_clientes_planos["English"]["clipla_vl"] = "";
	$fieldLabelstb_clientes_planos["English"]["inclu_dt"] = "Included in";
	$fieldToolTipstb_clientes_planos["English"]["inclu_dt"] = "";
	$placeHolderstb_clientes_planos["English"]["inclu_dt"] = "";
	$fieldLabelstb_clientes_planos["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_clientes_planos["English"]["alter_dt"] = "";
	$placeHolderstb_clientes_planos["English"]["alter_dt"] = "";
	$fieldLabelstb_clientes_planos["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_clientes_planos["English"]["inclu_login"] = "";
	$placeHolderstb_clientes_planos["English"]["inclu_login"] = "";
	$fieldLabelstb_clientes_planos["English"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_clientes_planos["English"]["alter_login"] = "";
	$placeHolderstb_clientes_planos["English"]["alter_login"] = "";
	if (count($fieldToolTipstb_clientes_planos["English"]))
		$tdatatb_clientes_planos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_clientes_planos["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_clientes_planos["Portuguese(Brazil)"] = array();
	$placeHolderstb_clientes_planos["Portuguese(Brazil)"] = array();
	$pageTitlestb_clientes_planos["Portuguese(Brazil)"] = array();
	$fieldLabelstb_clientes_planos["Portuguese(Brazil)"]["clipla_id"] = "ID";
	$fieldToolTipstb_clientes_planos["Portuguese(Brazil)"]["clipla_id"] = "";
	$placeHolderstb_clientes_planos["Portuguese(Brazil)"]["clipla_id"] = "";
	$fieldLabelstb_clientes_planos["Portuguese(Brazil)"]["clie_id"] = "Cliente";
	$fieldToolTipstb_clientes_planos["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHolderstb_clientes_planos["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelstb_clientes_planos["Portuguese(Brazil)"]["plan_id"] = "Plano";
	$fieldToolTipstb_clientes_planos["Portuguese(Brazil)"]["plan_id"] = "";
	$placeHolderstb_clientes_planos["Portuguese(Brazil)"]["plan_id"] = "";
	$fieldLabelstb_clientes_planos["Portuguese(Brazil)"]["clipla_dt_vigenc_ini"] = "Data Vigência Início";
	$fieldToolTipstb_clientes_planos["Portuguese(Brazil)"]["clipla_dt_vigenc_ini"] = "";
	$placeHolderstb_clientes_planos["Portuguese(Brazil)"]["clipla_dt_vigenc_ini"] = "";
	$fieldLabelstb_clientes_planos["Portuguese(Brazil)"]["clipla_dt_vigenc_fim"] = "Data Vigência Final";
	$fieldToolTipstb_clientes_planos["Portuguese(Brazil)"]["clipla_dt_vigenc_fim"] = "";
	$placeHolderstb_clientes_planos["Portuguese(Brazil)"]["clipla_dt_vigenc_fim"] = "";
	$fieldLabelstb_clientes_planos["Portuguese(Brazil)"]["clipla_vl"] = "Valor Mensal";
	$fieldToolTipstb_clientes_planos["Portuguese(Brazil)"]["clipla_vl"] = "";
	$placeHolderstb_clientes_planos["Portuguese(Brazil)"]["clipla_vl"] = "";
	$fieldLabelstb_clientes_planos["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_clientes_planos["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_clientes_planos["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_clientes_planos["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_clientes_planos["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_clientes_planos["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelstb_clientes_planos["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipstb_clientes_planos["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_clientes_planos["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_clientes_planos["Portuguese(Brazil)"]["alter_login"] = "Alterado por";
	$fieldToolTipstb_clientes_planos["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_clientes_planos["Portuguese(Brazil)"]["alter_login"] = "";
	if (count($fieldToolTipstb_clientes_planos["Portuguese(Brazil)"]))
		$tdatatb_clientes_planos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_clientes_planos["Spanish"] = array();
	$fieldToolTipstb_clientes_planos["Spanish"] = array();
	$placeHolderstb_clientes_planos["Spanish"] = array();
	$pageTitlestb_clientes_planos["Spanish"] = array();
	$fieldLabelstb_clientes_planos["Spanish"]["clipla_id"] = "ID";
	$fieldToolTipstb_clientes_planos["Spanish"]["clipla_id"] = "";
	$placeHolderstb_clientes_planos["Spanish"]["clipla_id"] = "";
	$fieldLabelstb_clientes_planos["Spanish"]["clie_id"] = "Identificación del cliente";
	$fieldToolTipstb_clientes_planos["Spanish"]["clie_id"] = "";
	$placeHolderstb_clientes_planos["Spanish"]["clie_id"] = "";
	$fieldLabelstb_clientes_planos["Spanish"]["plan_id"] = "ID plana";
	$fieldToolTipstb_clientes_planos["Spanish"]["plan_id"] = "";
	$placeHolderstb_clientes_planos["Spanish"]["plan_id"] = "";
	$fieldLabelstb_clientes_planos["Spanish"]["clipla_dt_vigenc_ini"] = "Fecha de inicio efectiva";
	$fieldToolTipstb_clientes_planos["Spanish"]["clipla_dt_vigenc_ini"] = "";
	$placeHolderstb_clientes_planos["Spanish"]["clipla_dt_vigenc_ini"] = "";
	$fieldLabelstb_clientes_planos["Spanish"]["clipla_dt_vigenc_fim"] = "Fecha de vigencia final";
	$fieldToolTipstb_clientes_planos["Spanish"]["clipla_dt_vigenc_fim"] = "";
	$placeHolderstb_clientes_planos["Spanish"]["clipla_dt_vigenc_fim"] = "";
	$fieldLabelstb_clientes_planos["Spanish"]["clipla_vl"] = "Cantidad del plan";
	$fieldToolTipstb_clientes_planos["Spanish"]["clipla_vl"] = "";
	$placeHolderstb_clientes_planos["Spanish"]["clipla_vl"] = "";
	$fieldLabelstb_clientes_planos["Spanish"]["inclu_dt"] = "Incluido en";
	$fieldToolTipstb_clientes_planos["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_clientes_planos["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_clientes_planos["Spanish"]["alter_dt"] = "Cambiado en";
	$fieldToolTipstb_clientes_planos["Spanish"]["alter_dt"] = "";
	$placeHolderstb_clientes_planos["Spanish"]["alter_dt"] = "";
	$fieldLabelstb_clientes_planos["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_clientes_planos["Spanish"]["inclu_login"] = "";
	$placeHolderstb_clientes_planos["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_clientes_planos["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_clientes_planos["Spanish"]["alter_login"] = "";
	$placeHolderstb_clientes_planos["Spanish"]["alter_login"] = "";
	if (count($fieldToolTipstb_clientes_planos["Spanish"]))
		$tdatatb_clientes_planos[".isUseToolTips"] = true;
}


	$tdatatb_clientes_planos[".NCSearch"] = true;



$tdatatb_clientes_planos[".shortTableName"] = "tb_clientes_planos";
$tdatatb_clientes_planos[".nSecOptions"] = 0;

$tdatatb_clientes_planos[".mainTableOwnerID"] = "";
$tdatatb_clientes_planos[".entityType"] = 0;

$tdatatb_clientes_planos[".strOriginalTableName"] = "tb_clientes_planos";

	



$tdatatb_clientes_planos[".showAddInPopup"] = false;

$tdatatb_clientes_planos[".showEditInPopup"] = false;

$tdatatb_clientes_planos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_clientes_planos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_clientes_planos[".listAjax"] = false;
//	temporary
$tdatatb_clientes_planos[".listAjax"] = false;

	$tdatatb_clientes_planos[".audit"] = false;

	$tdatatb_clientes_planos[".locking"] = false;


$pages = $tdatatb_clientes_planos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_clientes_planos[".edit"] = true;
	$tdatatb_clientes_planos[".afterEditAction"] = 0;
	$tdatatb_clientes_planos[".closePopupAfterEdit"] = 1;
	$tdatatb_clientes_planos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_clientes_planos[".add"] = true;
$tdatatb_clientes_planos[".afterAddAction"] = 0;
$tdatatb_clientes_planos[".closePopupAfterAdd"] = 1;
$tdatatb_clientes_planos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_clientes_planos[".list"] = true;
}



$tdatatb_clientes_planos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_clientes_planos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_clientes_planos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_clientes_planos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_clientes_planos[".printFriendly"] = true;
}



$tdatatb_clientes_planos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_clientes_planos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_clientes_planos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_clientes_planos[".isUseAjaxSuggest"] = true;

$tdatatb_clientes_planos[".rowHighlite"] = true;



																											

$tdatatb_clientes_planos[".ajaxCodeSnippetAdded"] = false;

$tdatatb_clientes_planos[".buttonsAdded"] = false;

$tdatatb_clientes_planos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_clientes_planos[".isUseTimeForSearch"] = false;


$tdatatb_clientes_planos[".badgeColor"] = "4169e1";


$tdatatb_clientes_planos[".allSearchFields"] = array();
$tdatatb_clientes_planos[".filterFields"] = array();
$tdatatb_clientes_planos[".requiredSearchFields"] = array();

$tdatatb_clientes_planos[".googleLikeFields"] = array();
$tdatatb_clientes_planos[".googleLikeFields"][] = "clipla_id";
$tdatatb_clientes_planos[".googleLikeFields"][] = "clie_id";
$tdatatb_clientes_planos[".googleLikeFields"][] = "plan_id";
$tdatatb_clientes_planos[".googleLikeFields"][] = "clipla_dt_vigenc_ini";
$tdatatb_clientes_planos[".googleLikeFields"][] = "clipla_dt_vigenc_fim";
$tdatatb_clientes_planos[".googleLikeFields"][] = "clipla_vl";
$tdatatb_clientes_planos[".googleLikeFields"][] = "inclu_login";
$tdatatb_clientes_planos[".googleLikeFields"][] = "inclu_dt";
$tdatatb_clientes_planos[".googleLikeFields"][] = "alter_login";
$tdatatb_clientes_planos[".googleLikeFields"][] = "alter_dt";



$tdatatb_clientes_planos[".tableType"] = "list";

$tdatatb_clientes_planos[".printerPageOrientation"] = 0;
$tdatatb_clientes_planos[".nPrinterPageScale"] = 100;

$tdatatb_clientes_planos[".nPrinterSplitRecords"] = 40;

$tdatatb_clientes_planos[".geocodingEnabled"] = false;










$tdatatb_clientes_planos[".pageSize"] = 20;

$tdatatb_clientes_planos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_clientes_planos[".strOrderBy"] = $tstrOrderBy;

$tdatatb_clientes_planos[".orderindexes"] = array();

$tdatatb_clientes_planos[".sqlHead"] = "SELECT clipla_id,  	clie_id,  	plan_id,  	clipla_dt_vigenc_ini,  	clipla_dt_vigenc_fim,  	clipla_vl,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatatb_clientes_planos[".sqlFrom"] = "FROM tb_clientes_planos";
$tdatatb_clientes_planos[".sqlWhereExpr"] = "";
$tdatatb_clientes_planos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_clientes_planos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_clientes_planos[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_clientes_planos[".highlightSearchResults"] = true;

$tableKeystb_clientes_planos = array();
$tableKeystb_clientes_planos[] = "clipla_id";
$tdatatb_clientes_planos[".Keys"] = $tableKeystb_clientes_planos;


$tdatatb_clientes_planos[".hideMobileList"] = array();




//	clipla_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "clipla_id";
	$fdata["GoodName"] = "clipla_id";
	$fdata["ownerTable"] = "tb_clientes_planos";
	$fdata["Label"] = GetFieldLabel("tb_clientes_planos","clipla_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "clipla_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clipla_id";

	
	
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


	$tdatatb_clientes_planos["clipla_id"] = $fdata;
		$tdatatb_clientes_planos[".searchableFields"][] = "clipla_id";
//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_clientes_planos";
	$fdata["Label"] = GetFieldLabel("tb_clientes_planos","clie_id");
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


	$tdatatb_clientes_planos["clie_id"] = $fdata;
		$tdatatb_clientes_planos[".searchableFields"][] = "clie_id";
//	plan_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "plan_id";
	$fdata["GoodName"] = "plan_id";
	$fdata["ownerTable"] = "tb_clientes_planos";
	$fdata["Label"] = GetFieldLabel("tb_clientes_planos","plan_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tb_planos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "plan_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "plan_nm";

	

	
	$edata["LookupOrderBy"] = "plan_nm";

	
	
	
	

	
	
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


	$tdatatb_clientes_planos["plan_id"] = $fdata;
		$tdatatb_clientes_planos[".searchableFields"][] = "plan_id";
//	clipla_dt_vigenc_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "clipla_dt_vigenc_ini";
	$fdata["GoodName"] = "clipla_dt_vigenc_ini";
	$fdata["ownerTable"] = "tb_clientes_planos";
	$fdata["Label"] = GetFieldLabel("tb_clientes_planos","clipla_dt_vigenc_ini");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "clipla_dt_vigenc_ini";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clipla_dt_vigenc_ini";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatatb_clientes_planos["clipla_dt_vigenc_ini"] = $fdata;
		$tdatatb_clientes_planos[".searchableFields"][] = "clipla_dt_vigenc_ini";
//	clipla_dt_vigenc_fim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "clipla_dt_vigenc_fim";
	$fdata["GoodName"] = "clipla_dt_vigenc_fim";
	$fdata["ownerTable"] = "tb_clientes_planos";
	$fdata["Label"] = GetFieldLabel("tb_clientes_planos","clipla_dt_vigenc_fim");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "clipla_dt_vigenc_fim";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clipla_dt_vigenc_fim";

	
	
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


	$tdatatb_clientes_planos["clipla_dt_vigenc_fim"] = $fdata;
		$tdatatb_clientes_planos[".searchableFields"][] = "clipla_dt_vigenc_fim";
//	clipla_vl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "clipla_vl";
	$fdata["GoodName"] = "clipla_vl";
	$fdata["ownerTable"] = "tb_clientes_planos";
	$fdata["Label"] = GetFieldLabel("tb_clientes_planos","clipla_vl");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "clipla_vl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clipla_vl";

	
	
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


	$tdatatb_clientes_planos["clipla_vl"] = $fdata;
		$tdatatb_clientes_planos[".searchableFields"][] = "clipla_vl";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_clientes_planos";
	$fdata["Label"] = GetFieldLabel("tb_clientes_planos","inclu_login");
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


	$tdatatb_clientes_planos["inclu_login"] = $fdata;
		$tdatatb_clientes_planos[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_clientes_planos";
	$fdata["Label"] = GetFieldLabel("tb_clientes_planos","inclu_dt");
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


	$tdatatb_clientes_planos["inclu_dt"] = $fdata;
		$tdatatb_clientes_planos[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_clientes_planos";
	$fdata["Label"] = GetFieldLabel("tb_clientes_planos","alter_login");
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


	$tdatatb_clientes_planos["alter_login"] = $fdata;
		$tdatatb_clientes_planos[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_clientes_planos";
	$fdata["Label"] = GetFieldLabel("tb_clientes_planos","alter_dt");
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


	$tdatatb_clientes_planos["alter_dt"] = $fdata;
		$tdatatb_clientes_planos[".searchableFields"][] = "alter_dt";


$tables_data["tb_clientes_planos"]=&$tdatatb_clientes_planos;
$field_labels["tb_clientes_planos"] = &$fieldLabelstb_clientes_planos;
$fieldToolTips["tb_clientes_planos"] = &$fieldToolTipstb_clientes_planos;
$placeHolders["tb_clientes_planos"] = &$placeHolderstb_clientes_planos;
$page_titles["tb_clientes_planos"] = &$pageTitlestb_clientes_planos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_clientes_planos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_clientes_planos"] = array();



	
				$strOriginalDetailsTable="tb_clientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_clientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_clientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_clientes_planos"][0] = $masterParams;
				$masterTablesData["tb_clientes_planos"][0]["masterKeys"] = array();
	$masterTablesData["tb_clientes_planos"][0]["masterKeys"][]="clie_id";
				$masterTablesData["tb_clientes_planos"][0]["detailKeys"] = array();
	$masterTablesData["tb_clientes_planos"][0]["detailKeys"][]="clie_id";
		
	
				$strOriginalDetailsTable="tb_planos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_planos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_planos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_clientes_planos"][1] = $masterParams;
				$masterTablesData["tb_clientes_planos"][1]["masterKeys"] = array();
	$masterTablesData["tb_clientes_planos"][1]["masterKeys"][]="plan_id";
				$masterTablesData["tb_clientes_planos"][1]["detailKeys"] = array();
	$masterTablesData["tb_clientes_planos"][1]["detailKeys"][]="plan_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_clientes_planos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "clipla_id,  	clie_id,  	plan_id,  	clipla_dt_vigenc_ini,  	clipla_dt_vigenc_fim,  	clipla_vl,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM tb_clientes_planos";
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
	"m_strName" => "clipla_id",
	"m_strTable" => "tb_clientes_planos",
	"m_srcTableName" => "tb_clientes_planos"
));

$proto6["m_sql"] = "clipla_id";
$proto6["m_srcTableName"] = "tb_clientes_planos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "tb_clientes_planos",
	"m_srcTableName" => "tb_clientes_planos"
));

$proto8["m_sql"] = "clie_id";
$proto8["m_srcTableName"] = "tb_clientes_planos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "plan_id",
	"m_strTable" => "tb_clientes_planos",
	"m_srcTableName" => "tb_clientes_planos"
));

$proto10["m_sql"] = "plan_id";
$proto10["m_srcTableName"] = "tb_clientes_planos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "clipla_dt_vigenc_ini",
	"m_strTable" => "tb_clientes_planos",
	"m_srcTableName" => "tb_clientes_planos"
));

$proto12["m_sql"] = "clipla_dt_vigenc_ini";
$proto12["m_srcTableName"] = "tb_clientes_planos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "clipla_dt_vigenc_fim",
	"m_strTable" => "tb_clientes_planos",
	"m_srcTableName" => "tb_clientes_planos"
));

$proto14["m_sql"] = "clipla_dt_vigenc_fim";
$proto14["m_srcTableName"] = "tb_clientes_planos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "clipla_vl",
	"m_strTable" => "tb_clientes_planos",
	"m_srcTableName" => "tb_clientes_planos"
));

$proto16["m_sql"] = "clipla_vl";
$proto16["m_srcTableName"] = "tb_clientes_planos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_clientes_planos",
	"m_srcTableName" => "tb_clientes_planos"
));

$proto18["m_sql"] = "inclu_login";
$proto18["m_srcTableName"] = "tb_clientes_planos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_clientes_planos",
	"m_srcTableName" => "tb_clientes_planos"
));

$proto20["m_sql"] = "inclu_dt";
$proto20["m_srcTableName"] = "tb_clientes_planos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_clientes_planos",
	"m_srcTableName" => "tb_clientes_planos"
));

$proto22["m_sql"] = "alter_login";
$proto22["m_srcTableName"] = "tb_clientes_planos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_clientes_planos",
	"m_srcTableName" => "tb_clientes_planos"
));

$proto24["m_sql"] = "alter_dt";
$proto24["m_srcTableName"] = "tb_clientes_planos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "tb_clientes_planos";
$proto27["m_srcTableName"] = "tb_clientes_planos";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "clipla_id";
$proto27["m_columns"][] = "clie_id";
$proto27["m_columns"][] = "plan_id";
$proto27["m_columns"][] = "clipla_dt_vigenc_ini";
$proto27["m_columns"][] = "clipla_dt_vigenc_fim";
$proto27["m_columns"][] = "clipla_vl";
$proto27["m_columns"][] = "inclu_login";
$proto27["m_columns"][] = "inclu_dt";
$proto27["m_columns"][] = "alter_login";
$proto27["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "tb_clientes_planos";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "tb_clientes_planos";
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
$proto0["m_srcTableName"]="tb_clientes_planos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_clientes_planos = createSqlQuery_tb_clientes_planos();


	
		;

										

$tdatatb_clientes_planos[".sqlquery"] = $queryData_tb_clientes_planos;

$tableEvents["tb_clientes_planos"] = new eventsBase;
$tdatatb_clientes_planos[".hasEvents"] = false;

?>