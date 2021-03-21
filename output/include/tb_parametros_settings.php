<?php



$tdatatb_parametros = array();
$tdatatb_parametros[".searchableFields"] = array();
$tdatatb_parametros[".ShortName"] = "tb_parametros";
$tdatatb_parametros[".OwnerID"] = "";
$tdatatb_parametros[".OriginalTable"] = "tb_parametros";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_parametros[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_parametros[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_parametros[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_parametros = array();
$fieldToolTipstb_parametros = array();
$pageTitlestb_parametros = array();
$placeHolderstb_parametros = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_parametros["English"] = array();
	$fieldToolTipstb_parametros["English"] = array();
	$placeHolderstb_parametros["English"] = array();
	$pageTitlestb_parametros["English"] = array();
	$fieldLabelstb_parametros["English"]["para_id"] = "ID";
	$fieldToolTipstb_parametros["English"]["para_id"] = "";
	$placeHolderstb_parametros["English"]["para_id"] = "";
	$fieldLabelstb_parametros["English"]["para_nome"] = "Name";
	$fieldToolTipstb_parametros["English"]["para_nome"] = "";
	$placeHolderstb_parametros["English"]["para_nome"] = "";
	$fieldLabelstb_parametros["English"]["para_valor"] = "Value";
	$fieldToolTipstb_parametros["English"]["para_valor"] = "";
	$placeHolderstb_parametros["English"]["para_valor"] = "";
	$fieldLabelstb_parametros["English"]["para_ativo"] = "Active";
	$fieldToolTipstb_parametros["English"]["para_ativo"] = "";
	$placeHolderstb_parametros["English"]["para_ativo"] = "";
	$fieldLabelstb_parametros["English"]["inclu_login"] = "Included by";
	$fieldToolTipstb_parametros["English"]["inclu_login"] = "";
	$placeHolderstb_parametros["English"]["inclu_login"] = "";
	$fieldLabelstb_parametros["English"]["inclu_dt"] = "Included on";
	$fieldToolTipstb_parametros["English"]["inclu_dt"] = "";
	$placeHolderstb_parametros["English"]["inclu_dt"] = "";
	$fieldLabelstb_parametros["English"]["alter_login"] = "Changed by";
	$fieldToolTipstb_parametros["English"]["alter_login"] = "";
	$placeHolderstb_parametros["English"]["alter_login"] = "";
	$fieldLabelstb_parametros["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_parametros["English"]["alter_dt"] = "";
	$placeHolderstb_parametros["English"]["alter_dt"] = "";
	if (count($fieldToolTipstb_parametros["English"]))
		$tdatatb_parametros[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_parametros["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_parametros["Portuguese(Brazil)"] = array();
	$placeHolderstb_parametros["Portuguese(Brazil)"] = array();
	$pageTitlestb_parametros["Portuguese(Brazil)"] = array();
	$fieldLabelstb_parametros["Portuguese(Brazil)"]["para_id"] = "ID";
	$fieldToolTipstb_parametros["Portuguese(Brazil)"]["para_id"] = "";
	$placeHolderstb_parametros["Portuguese(Brazil)"]["para_id"] = "";
	$fieldLabelstb_parametros["Portuguese(Brazil)"]["para_nome"] = "Nome";
	$fieldToolTipstb_parametros["Portuguese(Brazil)"]["para_nome"] = "";
	$placeHolderstb_parametros["Portuguese(Brazil)"]["para_nome"] = "";
	$fieldLabelstb_parametros["Portuguese(Brazil)"]["para_valor"] = "Valor";
	$fieldToolTipstb_parametros["Portuguese(Brazil)"]["para_valor"] = "";
	$placeHolderstb_parametros["Portuguese(Brazil)"]["para_valor"] = "";
	$fieldLabelstb_parametros["Portuguese(Brazil)"]["para_ativo"] = "Ativo";
	$fieldToolTipstb_parametros["Portuguese(Brazil)"]["para_ativo"] = "";
	$placeHolderstb_parametros["Portuguese(Brazil)"]["para_ativo"] = "";
	$fieldLabelstb_parametros["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipstb_parametros["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_parametros["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_parametros["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_parametros["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_parametros["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_parametros["Portuguese(Brazil)"]["alter_login"] = "Alterado por";
	$fieldToolTipstb_parametros["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_parametros["Portuguese(Brazil)"]["alter_login"] = "";
	$fieldLabelstb_parametros["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_parametros["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_parametros["Portuguese(Brazil)"]["alter_dt"] = "";
	if (count($fieldToolTipstb_parametros["Portuguese(Brazil)"]))
		$tdatatb_parametros[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_parametros["Spanish"] = array();
	$fieldToolTipstb_parametros["Spanish"] = array();
	$placeHolderstb_parametros["Spanish"] = array();
	$pageTitlestb_parametros["Spanish"] = array();
	$fieldLabelstb_parametros["Spanish"]["para_id"] = "Para Id";
	$fieldToolTipstb_parametros["Spanish"]["para_id"] = "";
	$placeHolderstb_parametros["Spanish"]["para_id"] = "";
	$fieldLabelstb_parametros["Spanish"]["para_nome"] = "Para Nome";
	$fieldToolTipstb_parametros["Spanish"]["para_nome"] = "";
	$placeHolderstb_parametros["Spanish"]["para_nome"] = "";
	$fieldLabelstb_parametros["Spanish"]["para_valor"] = "Para Valor";
	$fieldToolTipstb_parametros["Spanish"]["para_valor"] = "";
	$placeHolderstb_parametros["Spanish"]["para_valor"] = "";
	$fieldLabelstb_parametros["Spanish"]["para_ativo"] = "Para Ativo";
	$fieldToolTipstb_parametros["Spanish"]["para_ativo"] = "";
	$placeHolderstb_parametros["Spanish"]["para_ativo"] = "";
	$fieldLabelstb_parametros["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_parametros["Spanish"]["inclu_login"] = "";
	$placeHolderstb_parametros["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_parametros["Spanish"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipstb_parametros["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_parametros["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_parametros["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_parametros["Spanish"]["alter_login"] = "";
	$placeHolderstb_parametros["Spanish"]["alter_login"] = "";
	$fieldLabelstb_parametros["Spanish"]["alter_dt"] = "Alter Dt";
	$fieldToolTipstb_parametros["Spanish"]["alter_dt"] = "";
	$placeHolderstb_parametros["Spanish"]["alter_dt"] = "";
	if (count($fieldToolTipstb_parametros["Spanish"]))
		$tdatatb_parametros[".isUseToolTips"] = true;
}


	$tdatatb_parametros[".NCSearch"] = true;



$tdatatb_parametros[".shortTableName"] = "tb_parametros";
$tdatatb_parametros[".nSecOptions"] = 0;

$tdatatb_parametros[".mainTableOwnerID"] = "";
$tdatatb_parametros[".entityType"] = 0;

$tdatatb_parametros[".strOriginalTableName"] = "tb_parametros";

	



$tdatatb_parametros[".showAddInPopup"] = false;

$tdatatb_parametros[".showEditInPopup"] = false;

$tdatatb_parametros[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_parametros[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatatb_parametros[".listAjax"] = true;
//	temporary
$tdatatb_parametros[".listAjax"] = false;

	$tdatatb_parametros[".audit"] = true;

	$tdatatb_parametros[".locking"] = false;


$pages = $tdatatb_parametros[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_parametros[".edit"] = true;
	$tdatatb_parametros[".afterEditAction"] = 1;
	$tdatatb_parametros[".closePopupAfterEdit"] = 1;
	$tdatatb_parametros[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_parametros[".add"] = true;
$tdatatb_parametros[".afterAddAction"] = 1;
$tdatatb_parametros[".closePopupAfterAdd"] = 1;
$tdatatb_parametros[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_parametros[".list"] = true;
}



$tdatatb_parametros[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_parametros[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_parametros[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_parametros[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_parametros[".printFriendly"] = true;
}



$tdatatb_parametros[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_parametros[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_parametros[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_parametros[".isUseAjaxSuggest"] = true;

$tdatatb_parametros[".rowHighlite"] = true;



									

$tdatatb_parametros[".ajaxCodeSnippetAdded"] = false;

$tdatatb_parametros[".buttonsAdded"] = false;

$tdatatb_parametros[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatb_parametros[".isUseTimeForSearch"] = false;


$tdatatb_parametros[".badgeColor"] = "BC8F8F";


$tdatatb_parametros[".allSearchFields"] = array();
$tdatatb_parametros[".filterFields"] = array();
$tdatatb_parametros[".requiredSearchFields"] = array();

$tdatatb_parametros[".googleLikeFields"] = array();
$tdatatb_parametros[".googleLikeFields"][] = "para_id";
$tdatatb_parametros[".googleLikeFields"][] = "para_nome";
$tdatatb_parametros[".googleLikeFields"][] = "para_valor";
$tdatatb_parametros[".googleLikeFields"][] = "para_ativo";
$tdatatb_parametros[".googleLikeFields"][] = "inclu_login";
$tdatatb_parametros[".googleLikeFields"][] = "inclu_dt";
$tdatatb_parametros[".googleLikeFields"][] = "alter_login";
$tdatatb_parametros[".googleLikeFields"][] = "alter_dt";



$tdatatb_parametros[".tableType"] = "list";

$tdatatb_parametros[".printerPageOrientation"] = 0;
$tdatatb_parametros[".nPrinterPageScale"] = 100;

$tdatatb_parametros[".nPrinterSplitRecords"] = 40;

$tdatatb_parametros[".geocodingEnabled"] = false;










$tdatatb_parametros[".pageSize"] = 20;

$tdatatb_parametros[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_parametros[".strOrderBy"] = $tstrOrderBy;

$tdatatb_parametros[".orderindexes"] = array();

$tdatatb_parametros[".sqlHead"] = "SELECT para_id,  	para_nome,  	para_valor,  	para_ativo,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatatb_parametros[".sqlFrom"] = "FROM tb_parametros";
$tdatatb_parametros[".sqlWhereExpr"] = "";
$tdatatb_parametros[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_parametros[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_parametros[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_parametros[".highlightSearchResults"] = true;

$tableKeystb_parametros = array();
$tableKeystb_parametros[] = "para_id";
$tdatatb_parametros[".Keys"] = $tableKeystb_parametros;


$tdatatb_parametros[".hideMobileList"] = array();




//	para_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "para_id";
	$fdata["GoodName"] = "para_id";
	$fdata["ownerTable"] = "tb_parametros";
	$fdata["Label"] = GetFieldLabel("tb_parametros","para_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "para_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "para_id";

	
	
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


	$tdatatb_parametros["para_id"] = $fdata;
		$tdatatb_parametros[".searchableFields"][] = "para_id";
//	para_nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "para_nome";
	$fdata["GoodName"] = "para_nome";
	$fdata["ownerTable"] = "tb_parametros";
	$fdata["Label"] = GetFieldLabel("tb_parametros","para_nome");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "para_nome";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "para_nome";

	
	
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
			$edata["EditParams"].= " maxlength=80";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "[_A-Z]+";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "THE_VALUE_IS_INVALID", "messageType" => "CustomID");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "domi_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_parametros["para_nome"] = $fdata;
		$tdatatb_parametros[".searchableFields"][] = "para_nome";
//	para_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "para_valor";
	$fdata["GoodName"] = "para_valor";
	$fdata["ownerTable"] = "tb_parametros";
	$fdata["Label"] = GetFieldLabel("tb_parametros","para_valor");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "para_valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "para_valor";

	
	
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


	$tdatatb_parametros["para_valor"] = $fdata;
		$tdatatb_parametros[".searchableFields"][] = "para_valor";
//	para_ativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "para_ativo";
	$fdata["GoodName"] = "para_ativo";
	$fdata["ownerTable"] = "tb_parametros";
	$fdata["Label"] = GetFieldLabel("tb_parametros","para_ativo");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "para_ativo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "para_ativo";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "SIM";
	$edata["LookupValues"][] = "NAO";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "para_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_parametros["para_ativo"] = $fdata;
		$tdatatb_parametros[".searchableFields"][] = "para_ativo";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_parametros";
	$fdata["Label"] = GetFieldLabel("tb_parametros","inclu_login");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "para_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_parametros["inclu_login"] = $fdata;
		$tdatatb_parametros[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_parametros";
	$fdata["Label"] = GetFieldLabel("tb_parametros","inclu_dt");
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


	$tdatatb_parametros["inclu_dt"] = $fdata;
		$tdatatb_parametros[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_parametros";
	$fdata["Label"] = GetFieldLabel("tb_parametros","alter_login");
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


	$tdatatb_parametros["alter_login"] = $fdata;
		$tdatatb_parametros[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_parametros";
	$fdata["Label"] = GetFieldLabel("tb_parametros","alter_dt");
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


	$tdatatb_parametros["alter_dt"] = $fdata;
		$tdatatb_parametros[".searchableFields"][] = "alter_dt";


$tables_data["tb_parametros"]=&$tdatatb_parametros;
$field_labels["tb_parametros"] = &$fieldLabelstb_parametros;
$fieldToolTips["tb_parametros"] = &$fieldToolTipstb_parametros;
$placeHolders["tb_parametros"] = &$placeHolderstb_parametros;
$page_titles["tb_parametros"] = &$pageTitlestb_parametros;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_parametros"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_parametros"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_parametros()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "para_id,  	para_nome,  	para_valor,  	para_ativo,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM tb_parametros";
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
	"m_strName" => "para_id",
	"m_strTable" => "tb_parametros",
	"m_srcTableName" => "tb_parametros"
));

$proto6["m_sql"] = "para_id";
$proto6["m_srcTableName"] = "tb_parametros";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "para_nome",
	"m_strTable" => "tb_parametros",
	"m_srcTableName" => "tb_parametros"
));

$proto8["m_sql"] = "para_nome";
$proto8["m_srcTableName"] = "tb_parametros";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "para_valor",
	"m_strTable" => "tb_parametros",
	"m_srcTableName" => "tb_parametros"
));

$proto10["m_sql"] = "para_valor";
$proto10["m_srcTableName"] = "tb_parametros";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "para_ativo",
	"m_strTable" => "tb_parametros",
	"m_srcTableName" => "tb_parametros"
));

$proto12["m_sql"] = "para_ativo";
$proto12["m_srcTableName"] = "tb_parametros";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_parametros",
	"m_srcTableName" => "tb_parametros"
));

$proto14["m_sql"] = "inclu_login";
$proto14["m_srcTableName"] = "tb_parametros";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_parametros",
	"m_srcTableName" => "tb_parametros"
));

$proto16["m_sql"] = "inclu_dt";
$proto16["m_srcTableName"] = "tb_parametros";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_parametros",
	"m_srcTableName" => "tb_parametros"
));

$proto18["m_sql"] = "alter_login";
$proto18["m_srcTableName"] = "tb_parametros";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_parametros",
	"m_srcTableName" => "tb_parametros"
));

$proto20["m_sql"] = "alter_dt";
$proto20["m_srcTableName"] = "tb_parametros";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "tb_parametros";
$proto23["m_srcTableName"] = "tb_parametros";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "para_id";
$proto23["m_columns"][] = "para_nome";
$proto23["m_columns"][] = "para_valor";
$proto23["m_columns"][] = "para_ativo";
$proto23["m_columns"][] = "inclu_login";
$proto23["m_columns"][] = "inclu_dt";
$proto23["m_columns"][] = "alter_login";
$proto23["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "tb_parametros";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "tb_parametros";
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
$proto0["m_srcTableName"]="tb_parametros";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_parametros = createSqlQuery_tb_parametros();


	
		;

								

$tdatatb_parametros[".sqlquery"] = $queryData_tb_parametros;

include_once(getabspath("include/tb_parametros_events.php"));
$tableEvents["tb_parametros"] = new eventclass_tb_parametros;
$tdatatb_parametros[".hasEvents"] = true;

?>