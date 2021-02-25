<?php



$tdatatb_categorias = array();
$tdatatb_categorias[".searchableFields"] = array();
$tdatatb_categorias[".ShortName"] = "tb_categorias";
$tdatatb_categorias[".OwnerID"] = "";
$tdatatb_categorias[".OriginalTable"] = "tb_categorias";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_categorias[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_categorias[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_categorias[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_categorias = array();
$fieldToolTipstb_categorias = array();
$pageTitlestb_categorias = array();
$placeHolderstb_categorias = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_categorias["English"] = array();
	$fieldToolTipstb_categorias["English"] = array();
	$placeHolderstb_categorias["English"] = array();
	$pageTitlestb_categorias["English"] = array();
	$fieldLabelstb_categorias["English"]["cate_id"] = "Cate Id";
	$fieldToolTipstb_categorias["English"]["cate_id"] = "";
	$placeHolderstb_categorias["English"]["cate_id"] = "";
	$fieldLabelstb_categorias["English"]["clie_id"] = "Clie Id";
	$fieldToolTipstb_categorias["English"]["clie_id"] = "";
	$placeHolderstb_categorias["English"]["clie_id"] = "";
	$fieldLabelstb_categorias["English"]["cate_nm"] = "Cate Nm";
	$fieldToolTipstb_categorias["English"]["cate_nm"] = "";
	$placeHolderstb_categorias["English"]["cate_nm"] = "";
	$fieldLabelstb_categorias["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_categorias["English"]["inclu_login"] = "";
	$placeHolderstb_categorias["English"]["inclu_login"] = "";
	$fieldLabelstb_categorias["English"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipstb_categorias["English"]["inclu_dt"] = "";
	$placeHolderstb_categorias["English"]["inclu_dt"] = "";
	$fieldLabelstb_categorias["English"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_categorias["English"]["alter_login"] = "";
	$placeHolderstb_categorias["English"]["alter_login"] = "";
	$fieldLabelstb_categorias["English"]["alter_dt"] = "Alter Dt";
	$fieldToolTipstb_categorias["English"]["alter_dt"] = "";
	$placeHolderstb_categorias["English"]["alter_dt"] = "";
	if (count($fieldToolTipstb_categorias["English"]))
		$tdatatb_categorias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_categorias["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_categorias["Portuguese(Brazil)"] = array();
	$placeHolderstb_categorias["Portuguese(Brazil)"] = array();
	$pageTitlestb_categorias["Portuguese(Brazil)"] = array();
	$fieldLabelstb_categorias["Portuguese(Brazil)"]["cate_id"] = "Cate Id";
	$fieldToolTipstb_categorias["Portuguese(Brazil)"]["cate_id"] = "";
	$placeHolderstb_categorias["Portuguese(Brazil)"]["cate_id"] = "";
	$fieldLabelstb_categorias["Portuguese(Brazil)"]["clie_id"] = "Clie Id";
	$fieldToolTipstb_categorias["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHolderstb_categorias["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelstb_categorias["Portuguese(Brazil)"]["cate_nm"] = "Cate Nm";
	$fieldToolTipstb_categorias["Portuguese(Brazil)"]["cate_nm"] = "";
	$placeHolderstb_categorias["Portuguese(Brazil)"]["cate_nm"] = "";
	$fieldLabelstb_categorias["Portuguese(Brazil)"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_categorias["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_categorias["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_categorias["Portuguese(Brazil)"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipstb_categorias["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_categorias["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_categorias["Portuguese(Brazil)"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_categorias["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_categorias["Portuguese(Brazil)"]["alter_login"] = "";
	$fieldLabelstb_categorias["Portuguese(Brazil)"]["alter_dt"] = "Alter Dt";
	$fieldToolTipstb_categorias["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_categorias["Portuguese(Brazil)"]["alter_dt"] = "";
	if (count($fieldToolTipstb_categorias["Portuguese(Brazil)"]))
		$tdatatb_categorias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_categorias["Spanish"] = array();
	$fieldToolTipstb_categorias["Spanish"] = array();
	$placeHolderstb_categorias["Spanish"] = array();
	$pageTitlestb_categorias["Spanish"] = array();
	$fieldLabelstb_categorias["Spanish"]["cate_id"] = "Cate Id";
	$fieldToolTipstb_categorias["Spanish"]["cate_id"] = "";
	$placeHolderstb_categorias["Spanish"]["cate_id"] = "";
	$fieldLabelstb_categorias["Spanish"]["clie_id"] = "Clie Id";
	$fieldToolTipstb_categorias["Spanish"]["clie_id"] = "";
	$placeHolderstb_categorias["Spanish"]["clie_id"] = "";
	$fieldLabelstb_categorias["Spanish"]["cate_nm"] = "Cate Nm";
	$fieldToolTipstb_categorias["Spanish"]["cate_nm"] = "";
	$placeHolderstb_categorias["Spanish"]["cate_nm"] = "";
	$fieldLabelstb_categorias["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_categorias["Spanish"]["inclu_login"] = "";
	$placeHolderstb_categorias["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_categorias["Spanish"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipstb_categorias["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_categorias["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_categorias["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_categorias["Spanish"]["alter_login"] = "";
	$placeHolderstb_categorias["Spanish"]["alter_login"] = "";
	$fieldLabelstb_categorias["Spanish"]["alter_dt"] = "Alter Dt";
	$fieldToolTipstb_categorias["Spanish"]["alter_dt"] = "";
	$placeHolderstb_categorias["Spanish"]["alter_dt"] = "";
	if (count($fieldToolTipstb_categorias["Spanish"]))
		$tdatatb_categorias[".isUseToolTips"] = true;
}


	$tdatatb_categorias[".NCSearch"] = true;



$tdatatb_categorias[".shortTableName"] = "tb_categorias";
$tdatatb_categorias[".nSecOptions"] = 0;

$tdatatb_categorias[".mainTableOwnerID"] = "";
$tdatatb_categorias[".entityType"] = 0;

$tdatatb_categorias[".strOriginalTableName"] = "tb_categorias";

	



$tdatatb_categorias[".showAddInPopup"] = false;

$tdatatb_categorias[".showEditInPopup"] = false;

$tdatatb_categorias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_categorias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_categorias[".listAjax"] = false;
//	temporary
$tdatatb_categorias[".listAjax"] = false;

	$tdatatb_categorias[".audit"] = false;

	$tdatatb_categorias[".locking"] = false;


$pages = $tdatatb_categorias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_categorias[".edit"] = true;
	$tdatatb_categorias[".afterEditAction"] = 1;
	$tdatatb_categorias[".closePopupAfterEdit"] = 1;
	$tdatatb_categorias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_categorias[".add"] = true;
$tdatatb_categorias[".afterAddAction"] = 1;
$tdatatb_categorias[".closePopupAfterAdd"] = 1;
$tdatatb_categorias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_categorias[".list"] = true;
}



$tdatatb_categorias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_categorias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_categorias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_categorias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_categorias[".printFriendly"] = true;
}



$tdatatb_categorias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_categorias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_categorias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_categorias[".isUseAjaxSuggest"] = true;

$tdatatb_categorias[".rowHighlite"] = true;



									

$tdatatb_categorias[".ajaxCodeSnippetAdded"] = false;

$tdatatb_categorias[".buttonsAdded"] = false;

$tdatatb_categorias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_categorias[".isUseTimeForSearch"] = false;


$tdatatb_categorias[".badgeColor"] = "D2AF80";


$tdatatb_categorias[".allSearchFields"] = array();
$tdatatb_categorias[".filterFields"] = array();
$tdatatb_categorias[".requiredSearchFields"] = array();

$tdatatb_categorias[".googleLikeFields"] = array();
$tdatatb_categorias[".googleLikeFields"][] = "cate_id";
$tdatatb_categorias[".googleLikeFields"][] = "clie_id";
$tdatatb_categorias[".googleLikeFields"][] = "cate_nm";
$tdatatb_categorias[".googleLikeFields"][] = "inclu_login";
$tdatatb_categorias[".googleLikeFields"][] = "inclu_dt";
$tdatatb_categorias[".googleLikeFields"][] = "alter_login";
$tdatatb_categorias[".googleLikeFields"][] = "alter_dt";



$tdatatb_categorias[".tableType"] = "list";

$tdatatb_categorias[".printerPageOrientation"] = 0;
$tdatatb_categorias[".nPrinterPageScale"] = 100;

$tdatatb_categorias[".nPrinterSplitRecords"] = 40;

$tdatatb_categorias[".geocodingEnabled"] = false;










$tdatatb_categorias[".pageSize"] = 20;

$tdatatb_categorias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_categorias[".strOrderBy"] = $tstrOrderBy;

$tdatatb_categorias[".orderindexes"] = array();

$tdatatb_categorias[".sqlHead"] = "SELECT cate_id,  	clie_id,  	cate_nm,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatatb_categorias[".sqlFrom"] = "FROM tb_categorias";
$tdatatb_categorias[".sqlWhereExpr"] = "";
$tdatatb_categorias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_categorias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_categorias[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_categorias[".highlightSearchResults"] = true;

$tableKeystb_categorias = array();
$tableKeystb_categorias[] = "cate_id";
$tdatatb_categorias[".Keys"] = $tableKeystb_categorias;


$tdatatb_categorias[".hideMobileList"] = array();




//	cate_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cate_id";
	$fdata["GoodName"] = "cate_id";
	$fdata["ownerTable"] = "tb_categorias";
	$fdata["Label"] = GetFieldLabel("tb_categorias","cate_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cate_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cate_id";

	
	
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


	$tdatatb_categorias["cate_id"] = $fdata;
		$tdatatb_categorias[".searchableFields"][] = "cate_id";
//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_categorias";
	$fdata["Label"] = GetFieldLabel("tb_categorias","clie_id");
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


	$tdatatb_categorias["clie_id"] = $fdata;
		$tdatatb_categorias[".searchableFields"][] = "clie_id";
//	cate_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cate_nm";
	$fdata["GoodName"] = "cate_nm";
	$fdata["ownerTable"] = "tb_categorias";
	$fdata["Label"] = GetFieldLabel("tb_categorias","cate_nm");
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


	$tdatatb_categorias["cate_nm"] = $fdata;
		$tdatatb_categorias[".searchableFields"][] = "cate_nm";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_categorias";
	$fdata["Label"] = GetFieldLabel("tb_categorias","inclu_login");
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


	$tdatatb_categorias["inclu_login"] = $fdata;
		$tdatatb_categorias[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_categorias";
	$fdata["Label"] = GetFieldLabel("tb_categorias","inclu_dt");
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


	$tdatatb_categorias["inclu_dt"] = $fdata;
		$tdatatb_categorias[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_categorias";
	$fdata["Label"] = GetFieldLabel("tb_categorias","alter_login");
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


	$tdatatb_categorias["alter_login"] = $fdata;
		$tdatatb_categorias[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_categorias";
	$fdata["Label"] = GetFieldLabel("tb_categorias","alter_dt");
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


	$tdatatb_categorias["alter_dt"] = $fdata;
		$tdatatb_categorias[".searchableFields"][] = "alter_dt";


$tables_data["tb_categorias"]=&$tdatatb_categorias;
$field_labels["tb_categorias"] = &$fieldLabelstb_categorias;
$fieldToolTips["tb_categorias"] = &$fieldToolTipstb_categorias;
$placeHolders["tb_categorias"] = &$placeHolderstb_categorias;
$page_titles["tb_categorias"] = &$pageTitlestb_categorias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_categorias"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_categorias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_categorias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cate_id,  	clie_id,  	cate_nm,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM tb_categorias";
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
	"m_strName" => "cate_id",
	"m_strTable" => "tb_categorias",
	"m_srcTableName" => "tb_categorias"
));

$proto6["m_sql"] = "cate_id";
$proto6["m_srcTableName"] = "tb_categorias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "tb_categorias",
	"m_srcTableName" => "tb_categorias"
));

$proto8["m_sql"] = "clie_id";
$proto8["m_srcTableName"] = "tb_categorias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cate_nm",
	"m_strTable" => "tb_categorias",
	"m_srcTableName" => "tb_categorias"
));

$proto10["m_sql"] = "cate_nm";
$proto10["m_srcTableName"] = "tb_categorias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_categorias",
	"m_srcTableName" => "tb_categorias"
));

$proto12["m_sql"] = "inclu_login";
$proto12["m_srcTableName"] = "tb_categorias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_categorias",
	"m_srcTableName" => "tb_categorias"
));

$proto14["m_sql"] = "inclu_dt";
$proto14["m_srcTableName"] = "tb_categorias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_categorias",
	"m_srcTableName" => "tb_categorias"
));

$proto16["m_sql"] = "alter_login";
$proto16["m_srcTableName"] = "tb_categorias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_categorias",
	"m_srcTableName" => "tb_categorias"
));

$proto18["m_sql"] = "alter_dt";
$proto18["m_srcTableName"] = "tb_categorias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tb_categorias";
$proto21["m_srcTableName"] = "tb_categorias";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cate_id";
$proto21["m_columns"][] = "clie_id";
$proto21["m_columns"][] = "cate_nm";
$proto21["m_columns"][] = "inclu_login";
$proto21["m_columns"][] = "inclu_dt";
$proto21["m_columns"][] = "alter_login";
$proto21["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "tb_categorias";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tb_categorias";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_categorias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_categorias = createSqlQuery_tb_categorias();


	
		;

							

$tdatatb_categorias[".sqlquery"] = $queryData_tb_categorias;

$tableEvents["tb_categorias"] = new eventsBase;
$tdatatb_categorias[".hasEvents"] = false;

?>