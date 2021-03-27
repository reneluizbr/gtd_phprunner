<?php



$tdatatb_rotulos = array();
$tdatatb_rotulos[".searchableFields"] = array();
$tdatatb_rotulos[".ShortName"] = "tb_rotulos";
$tdatatb_rotulos[".OwnerID"] = "clie_id";
$tdatatb_rotulos[".OriginalTable"] = "tb_rotulos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_rotulos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_rotulos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_rotulos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_rotulos = array();
$fieldToolTipstb_rotulos = array();
$pageTitlestb_rotulos = array();
$placeHolderstb_rotulos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_rotulos["English"] = array();
	$fieldToolTipstb_rotulos["English"] = array();
	$placeHolderstb_rotulos["English"] = array();
	$pageTitlestb_rotulos["English"] = array();
	$fieldLabelstb_rotulos["English"]["cate_id"] = "ID";
	$fieldToolTipstb_rotulos["English"]["cate_id"] = "";
	$placeHolderstb_rotulos["English"]["cate_id"] = "";
	$fieldLabelstb_rotulos["English"]["clie_id"] = "Customer";
	$fieldToolTipstb_rotulos["English"]["clie_id"] = "";
	$placeHolderstb_rotulos["English"]["clie_id"] = "";
	$fieldLabelstb_rotulos["English"]["cate_nm"] = "Label, Tag";
	$fieldToolTipstb_rotulos["English"]["cate_nm"] = "";
	$placeHolderstb_rotulos["English"]["cate_nm"] = "";
	$fieldLabelstb_rotulos["English"]["inclu_login"] = "Included by";
	$fieldToolTipstb_rotulos["English"]["inclu_login"] = "";
	$placeHolderstb_rotulos["English"]["inclu_login"] = "";
	$fieldLabelstb_rotulos["English"]["inclu_dt"] = "Included on";
	$fieldToolTipstb_rotulos["English"]["inclu_dt"] = "";
	$placeHolderstb_rotulos["English"]["inclu_dt"] = "";
	$fieldLabelstb_rotulos["English"]["alter_login"] = "Changed by";
	$fieldToolTipstb_rotulos["English"]["alter_login"] = "";
	$placeHolderstb_rotulos["English"]["alter_login"] = "";
	$fieldLabelstb_rotulos["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_rotulos["English"]["alter_dt"] = "";
	$placeHolderstb_rotulos["English"]["alter_dt"] = "";
	$pageTitlestb_rotulos["English"]["view"] = "Tags [{%cate_id} - {%cate_nm}]";
	$pageTitlestb_rotulos["English"]["add"] = "Tags, Add new";
	$pageTitlestb_rotulos["English"]["edit"] = "Tags, Edit [{%cate_id}]";
	$pageTitlestb_rotulos["English"]["print"] = "Tags";
	$pageTitlestb_rotulos["English"]["search"] = "Tags - Advanced search";
	$pageTitlestb_rotulos["English"]["import"] = "Tags, Import";
	$pageTitlestb_rotulos["English"]["masterlist"] = "Tags [{%cate_id} - {%cate_nm}]";
	$pageTitlestb_rotulos["English"]["masterprint"] = "Tags [{%cate_id}]";
	$pageTitlestb_rotulos["English"]["list"] = "Tags";
	if (count($fieldToolTipstb_rotulos["English"]))
		$tdatatb_rotulos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_rotulos["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_rotulos["Portuguese(Brazil)"] = array();
	$placeHolderstb_rotulos["Portuguese(Brazil)"] = array();
	$pageTitlestb_rotulos["Portuguese(Brazil)"] = array();
	$fieldLabelstb_rotulos["Portuguese(Brazil)"]["cate_id"] = "ID";
	$fieldToolTipstb_rotulos["Portuguese(Brazil)"]["cate_id"] = "";
	$placeHolderstb_rotulos["Portuguese(Brazil)"]["cate_id"] = "";
	$fieldLabelstb_rotulos["Portuguese(Brazil)"]["clie_id"] = "Cliente";
	$fieldToolTipstb_rotulos["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHolderstb_rotulos["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelstb_rotulos["Portuguese(Brazil)"]["cate_nm"] = "Rótulo, Etiqueta";
	$fieldToolTipstb_rotulos["Portuguese(Brazil)"]["cate_nm"] = "";
	$placeHolderstb_rotulos["Portuguese(Brazil)"]["cate_nm"] = "";
	$fieldLabelstb_rotulos["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipstb_rotulos["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_rotulos["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_rotulos["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_rotulos["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_rotulos["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_rotulos["Portuguese(Brazil)"]["alter_login"] = "Alterado por";
	$fieldToolTipstb_rotulos["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_rotulos["Portuguese(Brazil)"]["alter_login"] = "";
	$fieldLabelstb_rotulos["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_rotulos["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_rotulos["Portuguese(Brazil)"]["alter_dt"] = "";
	$pageTitlestb_rotulos["Portuguese(Brazil)"]["view"] = "Rótulos [{%cate_id} - {%cate_nm}]";
	$pageTitlestb_rotulos["Portuguese(Brazil)"]["add"] = "Rótulos, Adicionar Novo";
	$pageTitlestb_rotulos["Portuguese(Brazil)"]["edit"] = "Rótulos, Editar [{%cate_id}]";
	$pageTitlestb_rotulos["Portuguese(Brazil)"]["print"] = "Rótulos";
	$pageTitlestb_rotulos["Portuguese(Brazil)"]["search"] = "Rótulos - Busca Avancada";
	$pageTitlestb_rotulos["Portuguese(Brazil)"]["import"] = "Rótulos, Importar";
	$pageTitlestb_rotulos["Portuguese(Brazil)"]["masterlist"] = "Rótulos [{%cate_id} - {%cate_nm}]";
	$pageTitlestb_rotulos["Portuguese(Brazil)"]["masterprint"] = "Rótulos [{%cate_id}]";
	$pageTitlestb_rotulos["Portuguese(Brazil)"]["list"] = "Rótulos";
	if (count($fieldToolTipstb_rotulos["Portuguese(Brazil)"]))
		$tdatatb_rotulos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_rotulos["Spanish"] = array();
	$fieldToolTipstb_rotulos["Spanish"] = array();
	$placeHolderstb_rotulos["Spanish"] = array();
	$pageTitlestb_rotulos["Spanish"] = array();
	$fieldLabelstb_rotulos["Spanish"]["cate_id"] = "Cate Id";
	$fieldToolTipstb_rotulos["Spanish"]["cate_id"] = "";
	$placeHolderstb_rotulos["Spanish"]["cate_id"] = "";
	$fieldLabelstb_rotulos["Spanish"]["clie_id"] = "Clie Id";
	$fieldToolTipstb_rotulos["Spanish"]["clie_id"] = "";
	$placeHolderstb_rotulos["Spanish"]["clie_id"] = "";
	$fieldLabelstb_rotulos["Spanish"]["cate_nm"] = "(es) Rótulo, Etiqueta";
	$fieldToolTipstb_rotulos["Spanish"]["cate_nm"] = "";
	$placeHolderstb_rotulos["Spanish"]["cate_nm"] = "";
	$fieldLabelstb_rotulos["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_rotulos["Spanish"]["inclu_login"] = "";
	$placeHolderstb_rotulos["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_rotulos["Spanish"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipstb_rotulos["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_rotulos["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_rotulos["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_rotulos["Spanish"]["alter_login"] = "";
	$placeHolderstb_rotulos["Spanish"]["alter_login"] = "";
	$fieldLabelstb_rotulos["Spanish"]["alter_dt"] = "Alter Dt";
	$fieldToolTipstb_rotulos["Spanish"]["alter_dt"] = "";
	$placeHolderstb_rotulos["Spanish"]["alter_dt"] = "";
	$pageTitlestb_rotulos["Spanish"]["view"] = "Rótulos [{%cate_id} - {%cate_nm}]";
	$pageTitlestb_rotulos["Spanish"]["add"] = "Rótulos, Añadir nuevo";
	$pageTitlestb_rotulos["Spanish"]["edit"] = "Rótulos, Editar [{%cate_id}]";
	$pageTitlestb_rotulos["Spanish"]["print"] = "Rótulos";
	$pageTitlestb_rotulos["Spanish"]["search"] = "Rótulos - Búsqueda avanzada";
	$pageTitlestb_rotulos["Spanish"]["import"] = "Rótulos, Importar";
	$pageTitlestb_rotulos["Spanish"]["masterlist"] = "Rótulos [{%cate_id} - {%cate_nm}]";
	$pageTitlestb_rotulos["Spanish"]["masterprint"] = "Rótulos [{%cate_id}]";
	$pageTitlestb_rotulos["Spanish"]["list"] = "Rótulos";
	if (count($fieldToolTipstb_rotulos["Spanish"]))
		$tdatatb_rotulos[".isUseToolTips"] = true;
}


	$tdatatb_rotulos[".NCSearch"] = true;



$tdatatb_rotulos[".shortTableName"] = "tb_rotulos";
$tdatatb_rotulos[".nSecOptions"] = 1;

$tdatatb_rotulos[".mainTableOwnerID"] = "clie_id";
$tdatatb_rotulos[".entityType"] = 0;

$tdatatb_rotulos[".strOriginalTableName"] = "tb_rotulos";

	



$tdatatb_rotulos[".showAddInPopup"] = false;

$tdatatb_rotulos[".showEditInPopup"] = false;

$tdatatb_rotulos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_rotulos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatatb_rotulos[".listAjax"] = true;
//	temporary
$tdatatb_rotulos[".listAjax"] = false;

	$tdatatb_rotulos[".audit"] = true;

	$tdatatb_rotulos[".locking"] = false;


$pages = $tdatatb_rotulos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_rotulos[".edit"] = true;
	$tdatatb_rotulos[".afterEditAction"] = 1;
	$tdatatb_rotulos[".closePopupAfterEdit"] = 1;
	$tdatatb_rotulos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_rotulos[".add"] = true;
$tdatatb_rotulos[".afterAddAction"] = 1;
$tdatatb_rotulos[".closePopupAfterAdd"] = 1;
$tdatatb_rotulos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_rotulos[".list"] = true;
}



$tdatatb_rotulos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_rotulos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_rotulos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_rotulos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_rotulos[".printFriendly"] = true;
}



$tdatatb_rotulos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_rotulos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_rotulos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_rotulos[".isUseAjaxSuggest"] = true;

$tdatatb_rotulos[".rowHighlite"] = true;



									

$tdatatb_rotulos[".ajaxCodeSnippetAdded"] = false;

$tdatatb_rotulos[".buttonsAdded"] = false;

$tdatatb_rotulos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_rotulos[".isUseTimeForSearch"] = false;


$tdatatb_rotulos[".badgeColor"] = "D2AF80";


$tdatatb_rotulos[".allSearchFields"] = array();
$tdatatb_rotulos[".filterFields"] = array();
$tdatatb_rotulos[".requiredSearchFields"] = array();

$tdatatb_rotulos[".googleLikeFields"] = array();
$tdatatb_rotulos[".googleLikeFields"][] = "cate_id";
$tdatatb_rotulos[".googleLikeFields"][] = "clie_id";
$tdatatb_rotulos[".googleLikeFields"][] = "cate_nm";
$tdatatb_rotulos[".googleLikeFields"][] = "inclu_login";
$tdatatb_rotulos[".googleLikeFields"][] = "inclu_dt";
$tdatatb_rotulos[".googleLikeFields"][] = "alter_login";
$tdatatb_rotulos[".googleLikeFields"][] = "alter_dt";



$tdatatb_rotulos[".tableType"] = "list";

$tdatatb_rotulos[".printerPageOrientation"] = 0;
$tdatatb_rotulos[".nPrinterPageScale"] = 100;

$tdatatb_rotulos[".nPrinterSplitRecords"] = 40;

$tdatatb_rotulos[".geocodingEnabled"] = false;










$tdatatb_rotulos[".pageSize"] = 20;

$tdatatb_rotulos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_rotulos[".strOrderBy"] = $tstrOrderBy;

$tdatatb_rotulos[".orderindexes"] = array();

$tdatatb_rotulos[".sqlHead"] = "SELECT cate_id,  	clie_id,  	cate_nm,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatatb_rotulos[".sqlFrom"] = "FROM tb_rotulos";
$tdatatb_rotulos[".sqlWhereExpr"] = "";
$tdatatb_rotulos[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatatb_rotulos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_rotulos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_rotulos[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_rotulos[".highlightSearchResults"] = true;

$tableKeystb_rotulos = array();
$tableKeystb_rotulos[] = "cate_id";
$tdatatb_rotulos[".Keys"] = $tableKeystb_rotulos;


$tdatatb_rotulos[".hideMobileList"] = array();




//	cate_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cate_id";
	$fdata["GoodName"] = "cate_id";
	$fdata["ownerTable"] = "tb_rotulos";
	$fdata["Label"] = GetFieldLabel("tb_rotulos","cate_id");
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


	$tdatatb_rotulos["cate_id"] = $fdata;
		$tdatatb_rotulos[".searchableFields"][] = "cate_id";
//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_rotulos";
	$fdata["Label"] = GetFieldLabel("tb_rotulos","clie_id");
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


	$tdatatb_rotulos["clie_id"] = $fdata;
		$tdatatb_rotulos[".searchableFields"][] = "clie_id";
//	cate_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cate_nm";
	$fdata["GoodName"] = "cate_nm";
	$fdata["ownerTable"] = "tb_rotulos";
	$fdata["Label"] = GetFieldLabel("tb_rotulos","cate_nm");
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


	$tdatatb_rotulos["cate_nm"] = $fdata;
		$tdatatb_rotulos[".searchableFields"][] = "cate_nm";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_rotulos";
	$fdata["Label"] = GetFieldLabel("tb_rotulos","inclu_login");
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


	$tdatatb_rotulos["inclu_login"] = $fdata;
		$tdatatb_rotulos[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_rotulos";
	$fdata["Label"] = GetFieldLabel("tb_rotulos","inclu_dt");
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


	$tdatatb_rotulos["inclu_dt"] = $fdata;
		$tdatatb_rotulos[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_rotulos";
	$fdata["Label"] = GetFieldLabel("tb_rotulos","alter_login");
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


	$tdatatb_rotulos["alter_login"] = $fdata;
		$tdatatb_rotulos[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_rotulos";
	$fdata["Label"] = GetFieldLabel("tb_rotulos","alter_dt");
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_rotulos["alter_dt"] = $fdata;
		$tdatatb_rotulos[".searchableFields"][] = "alter_dt";


$tables_data["tb_rotulos"]=&$tdatatb_rotulos;
$field_labels["tb_rotulos"] = &$fieldLabelstb_rotulos;
$fieldToolTips["tb_rotulos"] = &$fieldToolTipstb_rotulos;
$placeHolders["tb_rotulos"] = &$placeHolderstb_rotulos;
$page_titles["tb_rotulos"] = &$pageTitlestb_rotulos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_rotulos"] = array();
//	tb_tarefas_x_rotulos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_tarefas_x_rotulos";
		$detailsParam["dOriginalTable"] = "tb_tarefas_x_rotulos";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_tarefas_x_rotulos";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_tarefas_x_rotulos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_rotulos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_rotulos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_rotulos"][$dIndex]["masterKeys"][]="cate_id";

				$detailsTablesData["tb_rotulos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_rotulos"][$dIndex]["detailKeys"][]="cate_id";

// tables which are master tables for current table (detail)
$masterTablesData["tb_rotulos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_rotulos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cate_id,  	clie_id,  	cate_nm,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM tb_rotulos";
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
	"m_strTable" => "tb_rotulos",
	"m_srcTableName" => "tb_rotulos"
));

$proto6["m_sql"] = "cate_id";
$proto6["m_srcTableName"] = "tb_rotulos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "tb_rotulos",
	"m_srcTableName" => "tb_rotulos"
));

$proto8["m_sql"] = "clie_id";
$proto8["m_srcTableName"] = "tb_rotulos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cate_nm",
	"m_strTable" => "tb_rotulos",
	"m_srcTableName" => "tb_rotulos"
));

$proto10["m_sql"] = "cate_nm";
$proto10["m_srcTableName"] = "tb_rotulos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_rotulos",
	"m_srcTableName" => "tb_rotulos"
));

$proto12["m_sql"] = "inclu_login";
$proto12["m_srcTableName"] = "tb_rotulos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_rotulos",
	"m_srcTableName" => "tb_rotulos"
));

$proto14["m_sql"] = "inclu_dt";
$proto14["m_srcTableName"] = "tb_rotulos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_rotulos",
	"m_srcTableName" => "tb_rotulos"
));

$proto16["m_sql"] = "alter_login";
$proto16["m_srcTableName"] = "tb_rotulos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_rotulos",
	"m_srcTableName" => "tb_rotulos"
));

$proto18["m_sql"] = "alter_dt";
$proto18["m_srcTableName"] = "tb_rotulos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tb_rotulos";
$proto21["m_srcTableName"] = "tb_rotulos";
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
$proto20["m_sql"] = "tb_rotulos";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tb_rotulos";
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
$proto0["m_srcTableName"]="tb_rotulos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_rotulos = createSqlQuery_tb_rotulos();


	
		;

							

$tdatatb_rotulos[".sqlquery"] = $queryData_tb_rotulos;

include_once(getabspath("include/tb_rotulos_events.php"));
$tableEvents["tb_rotulos"] = new eventclass_tb_rotulos;
$tdatatb_rotulos[".hasEvents"] = true;

$query = &$queryData_tb_rotulos;
$table = "tb_rotulos";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.

// Rene: Restringe dados somente do mesmo cliente do usuário logado 
//      ou ALGUMA OUTRA CONDICAO ESPECIAL, se for necessario
// $_SESSION["clie_id"] 
// $_SESSION["usua_id"]
if ($_SESSION["usua_id"] != 0) {
	// OK, limita a visualizacao dos registros
	// $query->addWhere("clie_id='" . $_SESSION["clie_id"] . "'");
}
// echo "<script>alert('Funcao AfterTableInit(), $query: " . $query . "');</script>";
// echo "<script>alert('Funcao AfterTableInit(), query: " . $_SESSION["clie_id"] . "');</script>";

;
unset($query);
?>