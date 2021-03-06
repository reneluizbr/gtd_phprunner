<?php



$tdatatb_categorias_x_atividades = array();
$tdatatb_categorias_x_atividades[".searchableFields"] = array();
$tdatatb_categorias_x_atividades[".ShortName"] = "tb_categorias_x_atividades";
$tdatatb_categorias_x_atividades[".OwnerID"] = "";
$tdatatb_categorias_x_atividades[".OriginalTable"] = "tb_categorias_x_atividades";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_categorias_x_atividades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"lista_simples\",\"lista_simples_tarefas\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_categorias_x_atividades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"lista_simples\",\"lista_simples_tarefas\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_categorias_x_atividades[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_categorias_x_atividades = array();
$fieldToolTipstb_categorias_x_atividades = array();
$pageTitlestb_categorias_x_atividades = array();
$placeHolderstb_categorias_x_atividades = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_categorias_x_atividades["English"] = array();
	$fieldToolTipstb_categorias_x_atividades["English"] = array();
	$placeHolderstb_categorias_x_atividades["English"] = array();
	$pageTitlestb_categorias_x_atividades["English"] = array();
	$fieldLabelstb_categorias_x_atividades["English"]["caat_id"] = "Caat Id";
	$fieldToolTipstb_categorias_x_atividades["English"]["caat_id"] = "";
	$placeHolderstb_categorias_x_atividades["English"]["caat_id"] = "";
	$fieldLabelstb_categorias_x_atividades["English"]["cate_id"] = "Cate Id";
	$fieldToolTipstb_categorias_x_atividades["English"]["cate_id"] = "";
	$placeHolderstb_categorias_x_atividades["English"]["cate_id"] = "";
	$fieldLabelstb_categorias_x_atividades["English"]["ativ_id"] = "Ativ Id";
	$fieldToolTipstb_categorias_x_atividades["English"]["ativ_id"] = "";
	$placeHolderstb_categorias_x_atividades["English"]["ativ_id"] = "";
	$fieldLabelstb_categorias_x_atividades["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_categorias_x_atividades["English"]["inclu_login"] = "";
	$placeHolderstb_categorias_x_atividades["English"]["inclu_login"] = "";
	$fieldLabelstb_categorias_x_atividades["English"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipstb_categorias_x_atividades["English"]["inclu_dt"] = "";
	$placeHolderstb_categorias_x_atividades["English"]["inclu_dt"] = "";
	if (count($fieldToolTipstb_categorias_x_atividades["English"]))
		$tdatatb_categorias_x_atividades[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_categorias_x_atividades["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_categorias_x_atividades["Portuguese(Brazil)"] = array();
	$placeHolderstb_categorias_x_atividades["Portuguese(Brazil)"] = array();
	$pageTitlestb_categorias_x_atividades["Portuguese(Brazil)"] = array();
	$fieldLabelstb_categorias_x_atividades["Portuguese(Brazil)"]["caat_id"] = "Id";
	$fieldToolTipstb_categorias_x_atividades["Portuguese(Brazil)"]["caat_id"] = "";
	$placeHolderstb_categorias_x_atividades["Portuguese(Brazil)"]["caat_id"] = "";
	$fieldLabelstb_categorias_x_atividades["Portuguese(Brazil)"]["cate_id"] = "Categoria";
	$fieldToolTipstb_categorias_x_atividades["Portuguese(Brazil)"]["cate_id"] = "";
	$placeHolderstb_categorias_x_atividades["Portuguese(Brazil)"]["cate_id"] = "";
	$fieldLabelstb_categorias_x_atividades["Portuguese(Brazil)"]["ativ_id"] = "Atividade";
	$fieldToolTipstb_categorias_x_atividades["Portuguese(Brazil)"]["ativ_id"] = "";
	$placeHolderstb_categorias_x_atividades["Portuguese(Brazil)"]["ativ_id"] = "";
	$fieldLabelstb_categorias_x_atividades["Portuguese(Brazil)"]["inclu_login"] = "por";
	$fieldToolTipstb_categorias_x_atividades["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_categorias_x_atividades["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_categorias_x_atividades["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_categorias_x_atividades["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_categorias_x_atividades["Portuguese(Brazil)"]["inclu_dt"] = "";
	if (count($fieldToolTipstb_categorias_x_atividades["Portuguese(Brazil)"]))
		$tdatatb_categorias_x_atividades[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_categorias_x_atividades["Spanish"] = array();
	$fieldToolTipstb_categorias_x_atividades["Spanish"] = array();
	$placeHolderstb_categorias_x_atividades["Spanish"] = array();
	$pageTitlestb_categorias_x_atividades["Spanish"] = array();
	$fieldLabelstb_categorias_x_atividades["Spanish"]["caat_id"] = "Caat Id";
	$fieldToolTipstb_categorias_x_atividades["Spanish"]["caat_id"] = "";
	$placeHolderstb_categorias_x_atividades["Spanish"]["caat_id"] = "";
	$fieldLabelstb_categorias_x_atividades["Spanish"]["cate_id"] = "Cate Id";
	$fieldToolTipstb_categorias_x_atividades["Spanish"]["cate_id"] = "";
	$placeHolderstb_categorias_x_atividades["Spanish"]["cate_id"] = "";
	$fieldLabelstb_categorias_x_atividades["Spanish"]["ativ_id"] = "Ativ Id";
	$fieldToolTipstb_categorias_x_atividades["Spanish"]["ativ_id"] = "";
	$placeHolderstb_categorias_x_atividades["Spanish"]["ativ_id"] = "";
	$fieldLabelstb_categorias_x_atividades["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_categorias_x_atividades["Spanish"]["inclu_login"] = "";
	$placeHolderstb_categorias_x_atividades["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_categorias_x_atividades["Spanish"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipstb_categorias_x_atividades["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_categorias_x_atividades["Spanish"]["inclu_dt"] = "";
	if (count($fieldToolTipstb_categorias_x_atividades["Spanish"]))
		$tdatatb_categorias_x_atividades[".isUseToolTips"] = true;
}


	$tdatatb_categorias_x_atividades[".NCSearch"] = true;



$tdatatb_categorias_x_atividades[".shortTableName"] = "tb_categorias_x_atividades";
$tdatatb_categorias_x_atividades[".nSecOptions"] = 0;

$tdatatb_categorias_x_atividades[".mainTableOwnerID"] = "";
$tdatatb_categorias_x_atividades[".entityType"] = 0;

$tdatatb_categorias_x_atividades[".strOriginalTableName"] = "tb_categorias_x_atividades";

	



$tdatatb_categorias_x_atividades[".showAddInPopup"] = false;

$tdatatb_categorias_x_atividades[".showEditInPopup"] = false;

$tdatatb_categorias_x_atividades[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_categorias_x_atividades[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_categorias_x_atividades[".listAjax"] = false;
//	temporary
$tdatatb_categorias_x_atividades[".listAjax"] = false;

	$tdatatb_categorias_x_atividades[".audit"] = false;

	$tdatatb_categorias_x_atividades[".locking"] = false;


$pages = $tdatatb_categorias_x_atividades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_categorias_x_atividades[".edit"] = true;
	$tdatatb_categorias_x_atividades[".afterEditAction"] = 1;
	$tdatatb_categorias_x_atividades[".closePopupAfterEdit"] = 1;
	$tdatatb_categorias_x_atividades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_categorias_x_atividades[".add"] = true;
$tdatatb_categorias_x_atividades[".afterAddAction"] = 1;
$tdatatb_categorias_x_atividades[".closePopupAfterAdd"] = 1;
$tdatatb_categorias_x_atividades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_categorias_x_atividades[".list"] = true;
}



$tdatatb_categorias_x_atividades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_categorias_x_atividades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_categorias_x_atividades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_categorias_x_atividades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_categorias_x_atividades[".printFriendly"] = true;
}



$tdatatb_categorias_x_atividades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_categorias_x_atividades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_categorias_x_atividades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_categorias_x_atividades[".isUseAjaxSuggest"] = true;

$tdatatb_categorias_x_atividades[".rowHighlite"] = true;



																											

$tdatatb_categorias_x_atividades[".ajaxCodeSnippetAdded"] = false;

$tdatatb_categorias_x_atividades[".buttonsAdded"] = false;

$tdatatb_categorias_x_atividades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_categorias_x_atividades[".isUseTimeForSearch"] = false;


$tdatatb_categorias_x_atividades[".badgeColor"] = "4682b4";


$tdatatb_categorias_x_atividades[".allSearchFields"] = array();
$tdatatb_categorias_x_atividades[".filterFields"] = array();
$tdatatb_categorias_x_atividades[".requiredSearchFields"] = array();

$tdatatb_categorias_x_atividades[".googleLikeFields"] = array();
$tdatatb_categorias_x_atividades[".googleLikeFields"][] = "caat_id";
$tdatatb_categorias_x_atividades[".googleLikeFields"][] = "cate_id";
$tdatatb_categorias_x_atividades[".googleLikeFields"][] = "ativ_id";
$tdatatb_categorias_x_atividades[".googleLikeFields"][] = "inclu_login";
$tdatatb_categorias_x_atividades[".googleLikeFields"][] = "inclu_dt";



$tdatatb_categorias_x_atividades[".tableType"] = "list";

$tdatatb_categorias_x_atividades[".printerPageOrientation"] = 0;
$tdatatb_categorias_x_atividades[".nPrinterPageScale"] = 100;

$tdatatb_categorias_x_atividades[".nPrinterSplitRecords"] = 40;

$tdatatb_categorias_x_atividades[".geocodingEnabled"] = false;










$tdatatb_categorias_x_atividades[".pageSize"] = 20;

$tdatatb_categorias_x_atividades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_categorias_x_atividades[".strOrderBy"] = $tstrOrderBy;

$tdatatb_categorias_x_atividades[".orderindexes"] = array();

$tdatatb_categorias_x_atividades[".sqlHead"] = "SELECT caat_id,  	cate_id,  	ativ_id,  	inclu_login,  	inclu_dt";
$tdatatb_categorias_x_atividades[".sqlFrom"] = "FROM tb_categorias_x_atividades";
$tdatatb_categorias_x_atividades[".sqlWhereExpr"] = "";
$tdatatb_categorias_x_atividades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_categorias_x_atividades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_categorias_x_atividades[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_categorias_x_atividades[".highlightSearchResults"] = true;

$tableKeystb_categorias_x_atividades = array();
$tableKeystb_categorias_x_atividades[] = "caat_id";
$tdatatb_categorias_x_atividades[".Keys"] = $tableKeystb_categorias_x_atividades;


$tdatatb_categorias_x_atividades[".hideMobileList"] = array();




//	caat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "caat_id";
	$fdata["GoodName"] = "caat_id";
	$fdata["ownerTable"] = "tb_categorias_x_atividades";
	$fdata["Label"] = GetFieldLabel("tb_categorias_x_atividades","caat_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "caat_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caat_id";

	
	
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


	$tdatatb_categorias_x_atividades["caat_id"] = $fdata;
		$tdatatb_categorias_x_atividades[".searchableFields"][] = "caat_id";
//	cate_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cate_id";
	$fdata["GoodName"] = "cate_id";
	$fdata["ownerTable"] = "tb_categorias_x_atividades";
	$fdata["Label"] = GetFieldLabel("tb_categorias_x_atividades","cate_id");
	$fdata["FieldType"] = 3;

	
	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tb_categorias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "cate_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cate_nm";

	

	
	$edata["LookupOrderBy"] = "cate_nm";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "caat_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_categorias_x_atividades["cate_id"] = $fdata;
		$tdatatb_categorias_x_atividades[".searchableFields"][] = "cate_id";
//	ativ_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ativ_id";
	$fdata["GoodName"] = "ativ_id";
	$fdata["ownerTable"] = "tb_categorias_x_atividades";
	$fdata["Label"] = GetFieldLabel("tb_categorias_x_atividades","ativ_id");
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


	$tdatatb_categorias_x_atividades["ativ_id"] = $fdata;
		$tdatatb_categorias_x_atividades[".searchableFields"][] = "ativ_id";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_categorias_x_atividades";
	$fdata["Label"] = GetFieldLabel("tb_categorias_x_atividades","inclu_login");
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "caat_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_categorias_x_atividades["inclu_login"] = $fdata;
		$tdatatb_categorias_x_atividades[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_categorias_x_atividades";
	$fdata["Label"] = GetFieldLabel("tb_categorias_x_atividades","inclu_dt");
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_categorias_x_atividades["inclu_dt"] = $fdata;
		$tdatatb_categorias_x_atividades[".searchableFields"][] = "inclu_dt";


$tables_data["tb_categorias_x_atividades"]=&$tdatatb_categorias_x_atividades;
$field_labels["tb_categorias_x_atividades"] = &$fieldLabelstb_categorias_x_atividades;
$fieldToolTips["tb_categorias_x_atividades"] = &$fieldToolTipstb_categorias_x_atividades;
$placeHolders["tb_categorias_x_atividades"] = &$placeHolderstb_categorias_x_atividades;
$page_titles["tb_categorias_x_atividades"] = &$pageTitlestb_categorias_x_atividades;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_categorias_x_atividades"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_categorias_x_atividades"] = array();



	
				$strOriginalDetailsTable="tb_atividade";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_atividade";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_atividade";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_categorias_x_atividades"][0] = $masterParams;
				$masterTablesData["tb_categorias_x_atividades"][0]["masterKeys"] = array();
	$masterTablesData["tb_categorias_x_atividades"][0]["masterKeys"][]="ativ_id";
				$masterTablesData["tb_categorias_x_atividades"][0]["detailKeys"] = array();
	$masterTablesData["tb_categorias_x_atividades"][0]["detailKeys"][]="ativ_id";
		
	
				$strOriginalDetailsTable="tb_categorias";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_categorias";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_categorias";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_categorias_x_atividades"][1] = $masterParams;
				$masterTablesData["tb_categorias_x_atividades"][1]["masterKeys"] = array();
	$masterTablesData["tb_categorias_x_atividades"][1]["masterKeys"][]="cate_id";
				$masterTablesData["tb_categorias_x_atividades"][1]["detailKeys"] = array();
	$masterTablesData["tb_categorias_x_atividades"][1]["detailKeys"][]="cate_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_categorias_x_atividades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "caat_id,  	cate_id,  	ativ_id,  	inclu_login,  	inclu_dt";
$proto0["m_strFrom"] = "FROM tb_categorias_x_atividades";
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
	"m_strName" => "caat_id",
	"m_strTable" => "tb_categorias_x_atividades",
	"m_srcTableName" => "tb_categorias_x_atividades"
));

$proto6["m_sql"] = "caat_id";
$proto6["m_srcTableName"] = "tb_categorias_x_atividades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cate_id",
	"m_strTable" => "tb_categorias_x_atividades",
	"m_srcTableName" => "tb_categorias_x_atividades"
));

$proto8["m_sql"] = "cate_id";
$proto8["m_srcTableName"] = "tb_categorias_x_atividades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_id",
	"m_strTable" => "tb_categorias_x_atividades",
	"m_srcTableName" => "tb_categorias_x_atividades"
));

$proto10["m_sql"] = "ativ_id";
$proto10["m_srcTableName"] = "tb_categorias_x_atividades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_categorias_x_atividades",
	"m_srcTableName" => "tb_categorias_x_atividades"
));

$proto12["m_sql"] = "inclu_login";
$proto12["m_srcTableName"] = "tb_categorias_x_atividades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_categorias_x_atividades",
	"m_srcTableName" => "tb_categorias_x_atividades"
));

$proto14["m_sql"] = "inclu_dt";
$proto14["m_srcTableName"] = "tb_categorias_x_atividades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tb_categorias_x_atividades";
$proto17["m_srcTableName"] = "tb_categorias_x_atividades";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "caat_id";
$proto17["m_columns"][] = "cate_id";
$proto17["m_columns"][] = "ativ_id";
$proto17["m_columns"][] = "inclu_login";
$proto17["m_columns"][] = "inclu_dt";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tb_categorias_x_atividades";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tb_categorias_x_atividades";
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
$proto0["m_srcTableName"]="tb_categorias_x_atividades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_categorias_x_atividades = createSqlQuery_tb_categorias_x_atividades();


	
		;

					

$tdatatb_categorias_x_atividades[".sqlquery"] = $queryData_tb_categorias_x_atividades;

include_once(getabspath("include/tb_categorias_x_atividades_events.php"));
$tableEvents["tb_categorias_x_atividades"] = new eventclass_tb_categorias_x_atividades;
$tdatatb_categorias_x_atividades[".hasEvents"] = true;

?>