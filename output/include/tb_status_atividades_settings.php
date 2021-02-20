<?php



$tdatatb_status_atividades = array();
$tdatatb_status_atividades[".searchableFields"] = array();
$tdatatb_status_atividades[".ShortName"] = "tb_status_atividades";
$tdatatb_status_atividades[".OwnerID"] = "clie_id";
$tdatatb_status_atividades[".OriginalTable"] = "tb_status_atividades";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_status_atividades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_status_atividades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_status_atividades[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_status_atividades = array();
$fieldToolTipstb_status_atividades = array();
$pageTitlestb_status_atividades = array();
$placeHolderstb_status_atividades = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_status_atividades["English"] = array();
	$fieldToolTipstb_status_atividades["English"] = array();
	$placeHolderstb_status_atividades["English"] = array();
	$pageTitlestb_status_atividades["English"] = array();
	$fieldLabelstb_status_atividades["English"]["stat_id"] = "ID";
	$fieldToolTipstb_status_atividades["English"]["stat_id"] = "";
	$placeHolderstb_status_atividades["English"]["stat_id"] = "";
	$fieldLabelstb_status_atividades["English"]["clie_id"] = "Customer ID";
	$fieldToolTipstb_status_atividades["English"]["clie_id"] = "";
	$placeHolderstb_status_atividades["English"]["clie_id"] = "";
	$fieldLabelstb_status_atividades["English"]["stat_nm"] = "Name";
	$fieldToolTipstb_status_atividades["English"]["stat_nm"] = "";
	$placeHolderstb_status_atividades["English"]["stat_nm"] = "";
	$fieldLabelstb_status_atividades["English"]["stat_ds"] = "Description";
	$fieldToolTipstb_status_atividades["English"]["stat_ds"] = "";
	$placeHolderstb_status_atividades["English"]["stat_ds"] = "";
	$fieldLabelstb_status_atividades["English"]["stat_fl_ativo"] = "Active?";
	$fieldToolTipstb_status_atividades["English"]["stat_fl_ativo"] = "";
	$placeHolderstb_status_atividades["English"]["stat_fl_ativo"] = "";
	$fieldLabelstb_status_atividades["English"]["inclu_dt"] = "Included in";
	$fieldToolTipstb_status_atividades["English"]["inclu_dt"] = "";
	$placeHolderstb_status_atividades["English"]["inclu_dt"] = "";
	$fieldLabelstb_status_atividades["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_status_atividades["English"]["alter_dt"] = "";
	$placeHolderstb_status_atividades["English"]["alter_dt"] = "";
	$fieldLabelstb_status_atividades["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_status_atividades["English"]["inclu_login"] = "";
	$placeHolderstb_status_atividades["English"]["inclu_login"] = "";
	$fieldLabelstb_status_atividades["English"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_status_atividades["English"]["alter_login"] = "";
	$placeHolderstb_status_atividades["English"]["alter_login"] = "";
	if (count($fieldToolTipstb_status_atividades["English"]))
		$tdatatb_status_atividades[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_status_atividades["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_status_atividades["Portuguese(Brazil)"] = array();
	$placeHolderstb_status_atividades["Portuguese(Brazil)"] = array();
	$pageTitlestb_status_atividades["Portuguese(Brazil)"] = array();
	$fieldLabelstb_status_atividades["Portuguese(Brazil)"]["stat_id"] = "ID";
	$fieldToolTipstb_status_atividades["Portuguese(Brazil)"]["stat_id"] = "";
	$placeHolderstb_status_atividades["Portuguese(Brazil)"]["stat_id"] = "";
	$fieldLabelstb_status_atividades["Portuguese(Brazil)"]["clie_id"] = "ID do Cliente";
	$fieldToolTipstb_status_atividades["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHolderstb_status_atividades["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelstb_status_atividades["Portuguese(Brazil)"]["stat_nm"] = "Nome";
	$fieldToolTipstb_status_atividades["Portuguese(Brazil)"]["stat_nm"] = "";
	$placeHolderstb_status_atividades["Portuguese(Brazil)"]["stat_nm"] = "";
	$fieldLabelstb_status_atividades["Portuguese(Brazil)"]["stat_ds"] = "Descrição";
	$fieldToolTipstb_status_atividades["Portuguese(Brazil)"]["stat_ds"] = "";
	$placeHolderstb_status_atividades["Portuguese(Brazil)"]["stat_ds"] = "";
	$fieldLabelstb_status_atividades["Portuguese(Brazil)"]["stat_fl_ativo"] = "Ativo?";
	$fieldToolTipstb_status_atividades["Portuguese(Brazil)"]["stat_fl_ativo"] = "";
	$placeHolderstb_status_atividades["Portuguese(Brazil)"]["stat_fl_ativo"] = "";
	$fieldLabelstb_status_atividades["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_status_atividades["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_status_atividades["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_status_atividades["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_status_atividades["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_status_atividades["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelstb_status_atividades["Portuguese(Brazil)"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_status_atividades["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_status_atividades["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_status_atividades["Portuguese(Brazil)"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_status_atividades["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_status_atividades["Portuguese(Brazil)"]["alter_login"] = "";
	if (count($fieldToolTipstb_status_atividades["Portuguese(Brazil)"]))
		$tdatatb_status_atividades[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_status_atividades["Spanish"] = array();
	$fieldToolTipstb_status_atividades["Spanish"] = array();
	$placeHolderstb_status_atividades["Spanish"] = array();
	$pageTitlestb_status_atividades["Spanish"] = array();
	$fieldLabelstb_status_atividades["Spanish"]["stat_id"] = "ID";
	$fieldToolTipstb_status_atividades["Spanish"]["stat_id"] = "";
	$placeHolderstb_status_atividades["Spanish"]["stat_id"] = "";
	$fieldLabelstb_status_atividades["Spanish"]["clie_id"] = "Identificación del cliente";
	$fieldToolTipstb_status_atividades["Spanish"]["clie_id"] = "";
	$placeHolderstb_status_atividades["Spanish"]["clie_id"] = "";
	$fieldLabelstb_status_atividades["Spanish"]["stat_nm"] = "Nombre";
	$fieldToolTipstb_status_atividades["Spanish"]["stat_nm"] = "";
	$placeHolderstb_status_atividades["Spanish"]["stat_nm"] = "";
	$fieldLabelstb_status_atividades["Spanish"]["stat_ds"] = "Descripción";
	$fieldToolTipstb_status_atividades["Spanish"]["stat_ds"] = "";
	$placeHolderstb_status_atividades["Spanish"]["stat_ds"] = "";
	$fieldLabelstb_status_atividades["Spanish"]["stat_fl_ativo"] = "¿Activo?";
	$fieldToolTipstb_status_atividades["Spanish"]["stat_fl_ativo"] = "";
	$placeHolderstb_status_atividades["Spanish"]["stat_fl_ativo"] = "";
	$fieldLabelstb_status_atividades["Spanish"]["inclu_dt"] = "Incluido en";
	$fieldToolTipstb_status_atividades["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_status_atividades["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_status_atividades["Spanish"]["alter_dt"] = "Cambiado en";
	$fieldToolTipstb_status_atividades["Spanish"]["alter_dt"] = "";
	$placeHolderstb_status_atividades["Spanish"]["alter_dt"] = "";
	$fieldLabelstb_status_atividades["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_status_atividades["Spanish"]["inclu_login"] = "";
	$placeHolderstb_status_atividades["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_status_atividades["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_status_atividades["Spanish"]["alter_login"] = "";
	$placeHolderstb_status_atividades["Spanish"]["alter_login"] = "";
	if (count($fieldToolTipstb_status_atividades["Spanish"]))
		$tdatatb_status_atividades[".isUseToolTips"] = true;
}


	$tdatatb_status_atividades[".NCSearch"] = true;



$tdatatb_status_atividades[".shortTableName"] = "tb_status_atividades";
$tdatatb_status_atividades[".nSecOptions"] = 1;

$tdatatb_status_atividades[".mainTableOwnerID"] = "clie_id";
$tdatatb_status_atividades[".entityType"] = 0;

$tdatatb_status_atividades[".strOriginalTableName"] = "tb_status_atividades";

	



$tdatatb_status_atividades[".showAddInPopup"] = false;

$tdatatb_status_atividades[".showEditInPopup"] = false;

$tdatatb_status_atividades[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_status_atividades[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_status_atividades[".listAjax"] = false;
//	temporary
$tdatatb_status_atividades[".listAjax"] = false;

	$tdatatb_status_atividades[".audit"] = false;

	$tdatatb_status_atividades[".locking"] = false;


$pages = $tdatatb_status_atividades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_status_atividades[".edit"] = true;
	$tdatatb_status_atividades[".afterEditAction"] = 0;
	$tdatatb_status_atividades[".closePopupAfterEdit"] = 1;
	$tdatatb_status_atividades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_status_atividades[".add"] = true;
$tdatatb_status_atividades[".afterAddAction"] = 0;
$tdatatb_status_atividades[".closePopupAfterAdd"] = 1;
$tdatatb_status_atividades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_status_atividades[".list"] = true;
}



$tdatatb_status_atividades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_status_atividades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_status_atividades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_status_atividades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_status_atividades[".printFriendly"] = true;
}



$tdatatb_status_atividades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_status_atividades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_status_atividades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_status_atividades[".isUseAjaxSuggest"] = true;

$tdatatb_status_atividades[".rowHighlite"] = true;



									

$tdatatb_status_atividades[".ajaxCodeSnippetAdded"] = false;

$tdatatb_status_atividades[".buttonsAdded"] = false;

$tdatatb_status_atividades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_status_atividades[".isUseTimeForSearch"] = false;


$tdatatb_status_atividades[".badgeColor"] = "BC8F8F";


$tdatatb_status_atividades[".allSearchFields"] = array();
$tdatatb_status_atividades[".filterFields"] = array();
$tdatatb_status_atividades[".requiredSearchFields"] = array();

$tdatatb_status_atividades[".googleLikeFields"] = array();
$tdatatb_status_atividades[".googleLikeFields"][] = "stat_id";
$tdatatb_status_atividades[".googleLikeFields"][] = "clie_id";
$tdatatb_status_atividades[".googleLikeFields"][] = "stat_nm";
$tdatatb_status_atividades[".googleLikeFields"][] = "stat_ds";
$tdatatb_status_atividades[".googleLikeFields"][] = "stat_fl_ativo";
$tdatatb_status_atividades[".googleLikeFields"][] = "inclu_login";
$tdatatb_status_atividades[".googleLikeFields"][] = "inclu_dt";
$tdatatb_status_atividades[".googleLikeFields"][] = "alter_login";
$tdatatb_status_atividades[".googleLikeFields"][] = "alter_dt";



$tdatatb_status_atividades[".tableType"] = "list";

$tdatatb_status_atividades[".printerPageOrientation"] = 0;
$tdatatb_status_atividades[".nPrinterPageScale"] = 100;

$tdatatb_status_atividades[".nPrinterSplitRecords"] = 40;

$tdatatb_status_atividades[".geocodingEnabled"] = false;










$tdatatb_status_atividades[".pageSize"] = 20;

$tdatatb_status_atividades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_status_atividades[".strOrderBy"] = $tstrOrderBy;

$tdatatb_status_atividades[".orderindexes"] = array();

$tdatatb_status_atividades[".sqlHead"] = "SELECT stat_id,  	clie_id,  	stat_nm,  	stat_ds,  	stat_fl_ativo,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatatb_status_atividades[".sqlFrom"] = "FROM tb_status_atividades";
$tdatatb_status_atividades[".sqlWhereExpr"] = "";
$tdatatb_status_atividades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_status_atividades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_status_atividades[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_status_atividades[".highlightSearchResults"] = true;

$tableKeystb_status_atividades = array();
$tableKeystb_status_atividades[] = "stat_id";
$tdatatb_status_atividades[".Keys"] = $tableKeystb_status_atividades;


$tdatatb_status_atividades[".hideMobileList"] = array();




//	stat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "stat_id";
	$fdata["GoodName"] = "stat_id";
	$fdata["ownerTable"] = "tb_status_atividades";
	$fdata["Label"] = GetFieldLabel("tb_status_atividades","stat_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatatb_status_atividades["stat_id"] = $fdata;
		$tdatatb_status_atividades[".searchableFields"][] = "stat_id";
//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_status_atividades";
	$fdata["Label"] = GetFieldLabel("tb_status_atividades","clie_id");
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


	$tdatatb_status_atividades["clie_id"] = $fdata;
		$tdatatb_status_atividades[".searchableFields"][] = "clie_id";
//	stat_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "stat_nm";
	$fdata["GoodName"] = "stat_nm";
	$fdata["ownerTable"] = "tb_status_atividades";
	$fdata["Label"] = GetFieldLabel("tb_status_atividades","stat_nm");
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


	$tdatatb_status_atividades["stat_nm"] = $fdata;
		$tdatatb_status_atividades[".searchableFields"][] = "stat_nm";
//	stat_ds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "stat_ds";
	$fdata["GoodName"] = "stat_ds";
	$fdata["ownerTable"] = "tb_status_atividades";
	$fdata["Label"] = GetFieldLabel("tb_status_atividades","stat_ds");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "stat_ds";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stat_ds";

	
	
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


	$tdatatb_status_atividades["stat_ds"] = $fdata;
		$tdatatb_status_atividades[".searchableFields"][] = "stat_ds";
//	stat_fl_ativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "stat_fl_ativo";
	$fdata["GoodName"] = "stat_fl_ativo";
	$fdata["ownerTable"] = "tb_status_atividades";
	$fdata["Label"] = GetFieldLabel("tb_status_atividades","stat_fl_ativo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "stat_fl_ativo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stat_fl_ativo";

	
	
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


	$tdatatb_status_atividades["stat_fl_ativo"] = $fdata;
		$tdatatb_status_atividades[".searchableFields"][] = "stat_fl_ativo";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_status_atividades";
	$fdata["Label"] = GetFieldLabel("tb_status_atividades","inclu_login");
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


	$tdatatb_status_atividades["inclu_login"] = $fdata;
		$tdatatb_status_atividades[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_status_atividades";
	$fdata["Label"] = GetFieldLabel("tb_status_atividades","inclu_dt");
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


	$tdatatb_status_atividades["inclu_dt"] = $fdata;
		$tdatatb_status_atividades[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_status_atividades";
	$fdata["Label"] = GetFieldLabel("tb_status_atividades","alter_login");
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


	$tdatatb_status_atividades["alter_login"] = $fdata;
		$tdatatb_status_atividades[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_status_atividades";
	$fdata["Label"] = GetFieldLabel("tb_status_atividades","alter_dt");
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


	$tdatatb_status_atividades["alter_dt"] = $fdata;
		$tdatatb_status_atividades[".searchableFields"][] = "alter_dt";


$tables_data["tb_status_atividades"]=&$tdatatb_status_atividades;
$field_labels["tb_status_atividades"] = &$fieldLabelstb_status_atividades;
$fieldToolTips["tb_status_atividades"] = &$fieldToolTipstb_status_atividades;
$placeHolders["tb_status_atividades"] = &$placeHolderstb_status_atividades;
$page_titles["tb_status_atividades"] = &$pageTitlestb_status_atividades;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_status_atividades"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_status_atividades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_status_atividades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "stat_id,  	clie_id,  	stat_nm,  	stat_ds,  	stat_fl_ativo,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM tb_status_atividades";
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
	"m_strName" => "stat_id",
	"m_strTable" => "tb_status_atividades",
	"m_srcTableName" => "tb_status_atividades"
));

$proto6["m_sql"] = "stat_id";
$proto6["m_srcTableName"] = "tb_status_atividades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "tb_status_atividades",
	"m_srcTableName" => "tb_status_atividades"
));

$proto8["m_sql"] = "clie_id";
$proto8["m_srcTableName"] = "tb_status_atividades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "stat_nm",
	"m_strTable" => "tb_status_atividades",
	"m_srcTableName" => "tb_status_atividades"
));

$proto10["m_sql"] = "stat_nm";
$proto10["m_srcTableName"] = "tb_status_atividades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "stat_ds",
	"m_strTable" => "tb_status_atividades",
	"m_srcTableName" => "tb_status_atividades"
));

$proto12["m_sql"] = "stat_ds";
$proto12["m_srcTableName"] = "tb_status_atividades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "stat_fl_ativo",
	"m_strTable" => "tb_status_atividades",
	"m_srcTableName" => "tb_status_atividades"
));

$proto14["m_sql"] = "stat_fl_ativo";
$proto14["m_srcTableName"] = "tb_status_atividades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_status_atividades",
	"m_srcTableName" => "tb_status_atividades"
));

$proto16["m_sql"] = "inclu_login";
$proto16["m_srcTableName"] = "tb_status_atividades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_status_atividades",
	"m_srcTableName" => "tb_status_atividades"
));

$proto18["m_sql"] = "inclu_dt";
$proto18["m_srcTableName"] = "tb_status_atividades";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_status_atividades",
	"m_srcTableName" => "tb_status_atividades"
));

$proto20["m_sql"] = "alter_login";
$proto20["m_srcTableName"] = "tb_status_atividades";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_status_atividades",
	"m_srcTableName" => "tb_status_atividades"
));

$proto22["m_sql"] = "alter_dt";
$proto22["m_srcTableName"] = "tb_status_atividades";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tb_status_atividades";
$proto25["m_srcTableName"] = "tb_status_atividades";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "stat_id";
$proto25["m_columns"][] = "clie_id";
$proto25["m_columns"][] = "stat_nm";
$proto25["m_columns"][] = "stat_ds";
$proto25["m_columns"][] = "stat_fl_ativo";
$proto25["m_columns"][] = "inclu_login";
$proto25["m_columns"][] = "inclu_dt";
$proto25["m_columns"][] = "alter_login";
$proto25["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "tb_status_atividades";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tb_status_atividades";
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
$proto0["m_srcTableName"]="tb_status_atividades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_status_atividades = createSqlQuery_tb_status_atividades();


	
		;

									

$tdatatb_status_atividades[".sqlquery"] = $queryData_tb_status_atividades;

$tableEvents["tb_status_atividades"] = new eventsBase;
$tdatatb_status_atividades[".hasEvents"] = false;

?>