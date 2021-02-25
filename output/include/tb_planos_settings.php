<?php



$tdatatb_planos = array();
$tdatatb_planos[".searchableFields"] = array();
$tdatatb_planos[".ShortName"] = "tb_planos";
$tdatatb_planos[".OwnerID"] = "";
$tdatatb_planos[".OriginalTable"] = "tb_planos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_planos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_planos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_planos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_planos = array();
$fieldToolTipstb_planos = array();
$pageTitlestb_planos = array();
$placeHolderstb_planos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_planos["English"] = array();
	$fieldToolTipstb_planos["English"] = array();
	$placeHolderstb_planos["English"] = array();
	$pageTitlestb_planos["English"] = array();
	$fieldLabelstb_planos["English"]["plan_id"] = "ID";
	$fieldToolTipstb_planos["English"]["plan_id"] = "";
	$placeHolderstb_planos["English"]["plan_id"] = "";
	$fieldLabelstb_planos["English"]["plan_nm"] = "Plan Name";
	$fieldToolTipstb_planos["English"]["plan_nm"] = "";
	$placeHolderstb_planos["English"]["plan_nm"] = "";
	$fieldLabelstb_planos["English"]["plan_ds"] = "Description";
	$fieldToolTipstb_planos["English"]["plan_ds"] = "";
	$placeHolderstb_planos["English"]["plan_ds"] = "";
	$fieldLabelstb_planos["English"]["inclu_dt"] = "Included in";
	$fieldToolTipstb_planos["English"]["inclu_dt"] = "";
	$placeHolderstb_planos["English"]["inclu_dt"] = "";
	$fieldLabelstb_planos["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_planos["English"]["alter_dt"] = "";
	$placeHolderstb_planos["English"]["alter_dt"] = "";
	$fieldLabelstb_planos["English"]["plan_domi_tipo"] = "Plan Domi Tipo";
	$fieldToolTipstb_planos["English"]["plan_domi_tipo"] = "";
	$placeHolderstb_planos["English"]["plan_domi_tipo"] = "";
	$fieldLabelstb_planos["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_planos["English"]["inclu_login"] = "";
	$placeHolderstb_planos["English"]["inclu_login"] = "";
	$fieldLabelstb_planos["English"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_planos["English"]["alter_login"] = "";
	$placeHolderstb_planos["English"]["alter_login"] = "";
	if (count($fieldToolTipstb_planos["English"]))
		$tdatatb_planos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_planos["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_planos["Portuguese(Brazil)"] = array();
	$placeHolderstb_planos["Portuguese(Brazil)"] = array();
	$pageTitlestb_planos["Portuguese(Brazil)"] = array();
	$fieldLabelstb_planos["Portuguese(Brazil)"]["plan_id"] = "ID";
	$fieldToolTipstb_planos["Portuguese(Brazil)"]["plan_id"] = "";
	$placeHolderstb_planos["Portuguese(Brazil)"]["plan_id"] = "";
	$fieldLabelstb_planos["Portuguese(Brazil)"]["plan_nm"] = "Nome do Plano";
	$fieldToolTipstb_planos["Portuguese(Brazil)"]["plan_nm"] = "";
	$placeHolderstb_planos["Portuguese(Brazil)"]["plan_nm"] = "";
	$fieldLabelstb_planos["Portuguese(Brazil)"]["plan_ds"] = "Descrição";
	$fieldToolTipstb_planos["Portuguese(Brazil)"]["plan_ds"] = "";
	$placeHolderstb_planos["Portuguese(Brazil)"]["plan_ds"] = "";
	$fieldLabelstb_planos["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_planos["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_planos["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_planos["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_planos["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_planos["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelstb_planos["Portuguese(Brazil)"]["plan_domi_tipo"] = "Plan Domi Tipo";
	$fieldToolTipstb_planos["Portuguese(Brazil)"]["plan_domi_tipo"] = "";
	$placeHolderstb_planos["Portuguese(Brazil)"]["plan_domi_tipo"] = "";
	$fieldLabelstb_planos["Portuguese(Brazil)"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_planos["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_planos["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_planos["Portuguese(Brazil)"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_planos["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_planos["Portuguese(Brazil)"]["alter_login"] = "";
	if (count($fieldToolTipstb_planos["Portuguese(Brazil)"]))
		$tdatatb_planos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_planos["Spanish"] = array();
	$fieldToolTipstb_planos["Spanish"] = array();
	$placeHolderstb_planos["Spanish"] = array();
	$pageTitlestb_planos["Spanish"] = array();
	$fieldLabelstb_planos["Spanish"]["plan_id"] = "ID";
	$fieldToolTipstb_planos["Spanish"]["plan_id"] = "";
	$placeHolderstb_planos["Spanish"]["plan_id"] = "";
	$fieldLabelstb_planos["Spanish"]["plan_nm"] = "Nombre del plan";
	$fieldToolTipstb_planos["Spanish"]["plan_nm"] = "";
	$placeHolderstb_planos["Spanish"]["plan_nm"] = "";
	$fieldLabelstb_planos["Spanish"]["plan_ds"] = "Descripción";
	$fieldToolTipstb_planos["Spanish"]["plan_ds"] = "";
	$placeHolderstb_planos["Spanish"]["plan_ds"] = "";
	$fieldLabelstb_planos["Spanish"]["inclu_dt"] = "Incluido en";
	$fieldToolTipstb_planos["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_planos["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_planos["Spanish"]["alter_dt"] = "Cambiado en";
	$fieldToolTipstb_planos["Spanish"]["alter_dt"] = "";
	$placeHolderstb_planos["Spanish"]["alter_dt"] = "";
	$fieldLabelstb_planos["Spanish"]["plan_domi_tipo"] = "Plan Domi Tipo";
	$fieldToolTipstb_planos["Spanish"]["plan_domi_tipo"] = "";
	$placeHolderstb_planos["Spanish"]["plan_domi_tipo"] = "";
	$fieldLabelstb_planos["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_planos["Spanish"]["inclu_login"] = "";
	$placeHolderstb_planos["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_planos["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_planos["Spanish"]["alter_login"] = "";
	$placeHolderstb_planos["Spanish"]["alter_login"] = "";
	if (count($fieldToolTipstb_planos["Spanish"]))
		$tdatatb_planos[".isUseToolTips"] = true;
}


	$tdatatb_planos[".NCSearch"] = true;



$tdatatb_planos[".shortTableName"] = "tb_planos";
$tdatatb_planos[".nSecOptions"] = 0;

$tdatatb_planos[".mainTableOwnerID"] = "";
$tdatatb_planos[".entityType"] = 0;

$tdatatb_planos[".strOriginalTableName"] = "tb_planos";

	



$tdatatb_planos[".showAddInPopup"] = false;

$tdatatb_planos[".showEditInPopup"] = false;

$tdatatb_planos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_planos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_planos[".listAjax"] = false;
//	temporary
$tdatatb_planos[".listAjax"] = false;

	$tdatatb_planos[".audit"] = false;

	$tdatatb_planos[".locking"] = false;


$pages = $tdatatb_planos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_planos[".edit"] = true;
	$tdatatb_planos[".afterEditAction"] = 0;
	$tdatatb_planos[".closePopupAfterEdit"] = 1;
	$tdatatb_planos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_planos[".add"] = true;
$tdatatb_planos[".afterAddAction"] = 0;
$tdatatb_planos[".closePopupAfterAdd"] = 1;
$tdatatb_planos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_planos[".list"] = true;
}



$tdatatb_planos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_planos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_planos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_planos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_planos[".printFriendly"] = true;
}



$tdatatb_planos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_planos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_planos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_planos[".isUseAjaxSuggest"] = true;

$tdatatb_planos[".rowHighlite"] = true;



									

$tdatatb_planos[".ajaxCodeSnippetAdded"] = false;

$tdatatb_planos[".buttonsAdded"] = false;

$tdatatb_planos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_planos[".isUseTimeForSearch"] = false;


$tdatatb_planos[".badgeColor"] = "778899";


$tdatatb_planos[".allSearchFields"] = array();
$tdatatb_planos[".filterFields"] = array();
$tdatatb_planos[".requiredSearchFields"] = array();

$tdatatb_planos[".googleLikeFields"] = array();
$tdatatb_planos[".googleLikeFields"][] = "plan_id";
$tdatatb_planos[".googleLikeFields"][] = "plan_domi_tipo";
$tdatatb_planos[".googleLikeFields"][] = "plan_nm";
$tdatatb_planos[".googleLikeFields"][] = "plan_ds";
$tdatatb_planos[".googleLikeFields"][] = "inclu_login";
$tdatatb_planos[".googleLikeFields"][] = "inclu_dt";
$tdatatb_planos[".googleLikeFields"][] = "alter_login";
$tdatatb_planos[".googleLikeFields"][] = "alter_dt";



$tdatatb_planos[".tableType"] = "list";

$tdatatb_planos[".printerPageOrientation"] = 0;
$tdatatb_planos[".nPrinterPageScale"] = 100;

$tdatatb_planos[".nPrinterSplitRecords"] = 40;

$tdatatb_planos[".geocodingEnabled"] = false;










$tdatatb_planos[".pageSize"] = 20;

$tdatatb_planos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_planos[".strOrderBy"] = $tstrOrderBy;

$tdatatb_planos[".orderindexes"] = array();

$tdatatb_planos[".sqlHead"] = "SELECT plan_id,  	plan_domi_tipo,  	plan_nm,  	plan_ds,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatatb_planos[".sqlFrom"] = "FROM tb_planos";
$tdatatb_planos[".sqlWhereExpr"] = "";
$tdatatb_planos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_planos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_planos[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_planos[".highlightSearchResults"] = true;

$tableKeystb_planos = array();
$tableKeystb_planos[] = "plan_id";
$tdatatb_planos[".Keys"] = $tableKeystb_planos;


$tdatatb_planos[".hideMobileList"] = array();




//	plan_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "plan_id";
	$fdata["GoodName"] = "plan_id";
	$fdata["ownerTable"] = "tb_planos";
	$fdata["Label"] = GetFieldLabel("tb_planos","plan_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatatb_planos["plan_id"] = $fdata;
		$tdatatb_planos[".searchableFields"][] = "plan_id";
//	plan_domi_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "plan_domi_tipo";
	$fdata["GoodName"] = "plan_domi_tipo";
	$fdata["ownerTable"] = "tb_planos";
	$fdata["Label"] = GetFieldLabel("tb_planos","plan_domi_tipo");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "plan_domi_tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "plan_domi_tipo";

	
	
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


	$tdatatb_planos["plan_domi_tipo"] = $fdata;
		$tdatatb_planos[".searchableFields"][] = "plan_domi_tipo";
//	plan_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "plan_nm";
	$fdata["GoodName"] = "plan_nm";
	$fdata["ownerTable"] = "tb_planos";
	$fdata["Label"] = GetFieldLabel("tb_planos","plan_nm");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "plan_nm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "plan_nm";

	
	
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


	$tdatatb_planos["plan_nm"] = $fdata;
		$tdatatb_planos[".searchableFields"][] = "plan_nm";
//	plan_ds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "plan_ds";
	$fdata["GoodName"] = "plan_ds";
	$fdata["ownerTable"] = "tb_planos";
	$fdata["Label"] = GetFieldLabel("tb_planos","plan_ds");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "plan_ds";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "plan_ds";

	
	
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


	$tdatatb_planos["plan_ds"] = $fdata;
		$tdatatb_planos[".searchableFields"][] = "plan_ds";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_planos";
	$fdata["Label"] = GetFieldLabel("tb_planos","inclu_login");
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


	$tdatatb_planos["inclu_login"] = $fdata;
		$tdatatb_planos[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_planos";
	$fdata["Label"] = GetFieldLabel("tb_planos","inclu_dt");
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


	$tdatatb_planos["inclu_dt"] = $fdata;
		$tdatatb_planos[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_planos";
	$fdata["Label"] = GetFieldLabel("tb_planos","alter_login");
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


	$tdatatb_planos["alter_login"] = $fdata;
		$tdatatb_planos[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_planos";
	$fdata["Label"] = GetFieldLabel("tb_planos","alter_dt");
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


	$tdatatb_planos["alter_dt"] = $fdata;
		$tdatatb_planos[".searchableFields"][] = "alter_dt";


$tables_data["tb_planos"]=&$tdatatb_planos;
$field_labels["tb_planos"] = &$fieldLabelstb_planos;
$fieldToolTips["tb_planos"] = &$fieldToolTipstb_planos;
$placeHolders["tb_planos"] = &$placeHolderstb_planos;
$page_titles["tb_planos"] = &$pageTitlestb_planos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_planos"] = array();
//	tb_clientes_planos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_clientes_planos";
		$detailsParam["dOriginalTable"] = "tb_clientes_planos";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_clientes_planos";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_clientes_planos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_planos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_planos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_planos"][$dIndex]["masterKeys"][]="plan_id";

				$detailsTablesData["tb_planos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_planos"][$dIndex]["detailKeys"][]="plan_id";

// tables which are master tables for current table (detail)
$masterTablesData["tb_planos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_planos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "plan_id,  	plan_domi_tipo,  	plan_nm,  	plan_ds,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM tb_planos";
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
	"m_strName" => "plan_id",
	"m_strTable" => "tb_planos",
	"m_srcTableName" => "tb_planos"
));

$proto6["m_sql"] = "plan_id";
$proto6["m_srcTableName"] = "tb_planos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "plan_domi_tipo",
	"m_strTable" => "tb_planos",
	"m_srcTableName" => "tb_planos"
));

$proto8["m_sql"] = "plan_domi_tipo";
$proto8["m_srcTableName"] = "tb_planos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "plan_nm",
	"m_strTable" => "tb_planos",
	"m_srcTableName" => "tb_planos"
));

$proto10["m_sql"] = "plan_nm";
$proto10["m_srcTableName"] = "tb_planos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "plan_ds",
	"m_strTable" => "tb_planos",
	"m_srcTableName" => "tb_planos"
));

$proto12["m_sql"] = "plan_ds";
$proto12["m_srcTableName"] = "tb_planos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_planos",
	"m_srcTableName" => "tb_planos"
));

$proto14["m_sql"] = "inclu_login";
$proto14["m_srcTableName"] = "tb_planos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_planos",
	"m_srcTableName" => "tb_planos"
));

$proto16["m_sql"] = "inclu_dt";
$proto16["m_srcTableName"] = "tb_planos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_planos",
	"m_srcTableName" => "tb_planos"
));

$proto18["m_sql"] = "alter_login";
$proto18["m_srcTableName"] = "tb_planos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_planos",
	"m_srcTableName" => "tb_planos"
));

$proto20["m_sql"] = "alter_dt";
$proto20["m_srcTableName"] = "tb_planos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "tb_planos";
$proto23["m_srcTableName"] = "tb_planos";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "plan_id";
$proto23["m_columns"][] = "plan_domi_tipo";
$proto23["m_columns"][] = "plan_nm";
$proto23["m_columns"][] = "plan_ds";
$proto23["m_columns"][] = "inclu_login";
$proto23["m_columns"][] = "inclu_dt";
$proto23["m_columns"][] = "alter_login";
$proto23["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "tb_planos";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "tb_planos";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_planos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_planos = createSqlQuery_tb_planos();


	
		;

								

$tdatatb_planos[".sqlquery"] = $queryData_tb_planos;

$tableEvents["tb_planos"] = new eventsBase;
$tdatatb_planos[".hasEvents"] = false;

?>