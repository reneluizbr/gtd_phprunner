<?php



$tdatatb_tarefas_x_rotulos = array();
$tdatatb_tarefas_x_rotulos[".searchableFields"] = array();
$tdatatb_tarefas_x_rotulos[".ShortName"] = "tb_tarefas_x_rotulos";
$tdatatb_tarefas_x_rotulos[".OwnerID"] = "";
$tdatatb_tarefas_x_rotulos[".OriginalTable"] = "tb_tarefas_x_rotulos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_tarefas_x_rotulos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"lista_simples_rotulos\",\"lista_simples_tarefas\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_tarefas_x_rotulos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"lista_simples_rotulos\",\"lista_simples_tarefas\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_tarefas_x_rotulos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_tarefas_x_rotulos = array();
$fieldToolTipstb_tarefas_x_rotulos = array();
$pageTitlestb_tarefas_x_rotulos = array();
$placeHolderstb_tarefas_x_rotulos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_tarefas_x_rotulos["English"] = array();
	$fieldToolTipstb_tarefas_x_rotulos["English"] = array();
	$placeHolderstb_tarefas_x_rotulos["English"] = array();
	$pageTitlestb_tarefas_x_rotulos["English"] = array();
	$fieldLabelstb_tarefas_x_rotulos["English"]["caat_id"] = "ID";
	$fieldToolTipstb_tarefas_x_rotulos["English"]["caat_id"] = "";
	$placeHolderstb_tarefas_x_rotulos["English"]["caat_id"] = "";
	$fieldLabelstb_tarefas_x_rotulos["English"]["cate_id"] = "Tag ID";
	$fieldToolTipstb_tarefas_x_rotulos["English"]["cate_id"] = "";
	$placeHolderstb_tarefas_x_rotulos["English"]["cate_id"] = "";
	$fieldLabelstb_tarefas_x_rotulos["English"]["ativ_id"] = "Task";
	$fieldToolTipstb_tarefas_x_rotulos["English"]["ativ_id"] = "";
	$placeHolderstb_tarefas_x_rotulos["English"]["ativ_id"] = "";
	$fieldLabelstb_tarefas_x_rotulos["English"]["inclu_login"] = "by";
	$fieldToolTipstb_tarefas_x_rotulos["English"]["inclu_login"] = "";
	$placeHolderstb_tarefas_x_rotulos["English"]["inclu_login"] = "";
	$fieldLabelstb_tarefas_x_rotulos["English"]["inclu_dt"] = "Included on";
	$fieldToolTipstb_tarefas_x_rotulos["English"]["inclu_dt"] = "";
	$placeHolderstb_tarefas_x_rotulos["English"]["inclu_dt"] = "";
	$pageTitlestb_tarefas_x_rotulos["English"]["lista_simples_rotulos"] = "Tags for Tasks";
	$pageTitlestb_tarefas_x_rotulos["English"]["lista_simples_tarefas"] = "Tags for Tasks";
	if (count($fieldToolTipstb_tarefas_x_rotulos["English"]))
		$tdatatb_tarefas_x_rotulos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_tarefas_x_rotulos["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_tarefas_x_rotulos["Portuguese(Brazil)"] = array();
	$placeHolderstb_tarefas_x_rotulos["Portuguese(Brazil)"] = array();
	$pageTitlestb_tarefas_x_rotulos["Portuguese(Brazil)"] = array();
	$fieldLabelstb_tarefas_x_rotulos["Portuguese(Brazil)"]["caat_id"] = "ID";
	$fieldToolTipstb_tarefas_x_rotulos["Portuguese(Brazil)"]["caat_id"] = "";
	$placeHolderstb_tarefas_x_rotulos["Portuguese(Brazil)"]["caat_id"] = "";
	$fieldLabelstb_tarefas_x_rotulos["Portuguese(Brazil)"]["cate_id"] = "Rótulo, Etiqueta";
	$fieldToolTipstb_tarefas_x_rotulos["Portuguese(Brazil)"]["cate_id"] = "";
	$placeHolderstb_tarefas_x_rotulos["Portuguese(Brazil)"]["cate_id"] = "";
	$fieldLabelstb_tarefas_x_rotulos["Portuguese(Brazil)"]["ativ_id"] = "Atividade";
	$fieldToolTipstb_tarefas_x_rotulos["Portuguese(Brazil)"]["ativ_id"] = "";
	$placeHolderstb_tarefas_x_rotulos["Portuguese(Brazil)"]["ativ_id"] = "";
	$fieldLabelstb_tarefas_x_rotulos["Portuguese(Brazil)"]["inclu_login"] = "por";
	$fieldToolTipstb_tarefas_x_rotulos["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_tarefas_x_rotulos["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_tarefas_x_rotulos["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_tarefas_x_rotulos["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_tarefas_x_rotulos["Portuguese(Brazil)"]["inclu_dt"] = "";
	$pageTitlestb_tarefas_x_rotulos["Portuguese(Brazil)"]["add"] = "Rótulos por Tarefas, Adicionar Novo";
	$pageTitlestb_tarefas_x_rotulos["Portuguese(Brazil)"]["view"] = "Rótulos por Tarefas [{%caat_id}]";
	$pageTitlestb_tarefas_x_rotulos["Portuguese(Brazil)"]["print"] = "Rótulos por Tarefas";
	$pageTitlestb_tarefas_x_rotulos["Portuguese(Brazil)"]["search"] = "Rótulos por Tarefas - Busca Avancada";
	$pageTitlestb_tarefas_x_rotulos["Portuguese(Brazil)"]["import"] = "Rótulos por Tarefas, Importar";
	$pageTitlestb_tarefas_x_rotulos["Portuguese(Brazil)"]["list"] = "Rótulos por Tarefas";
	$pageTitlestb_tarefas_x_rotulos["Portuguese(Brazil)"]["lista_simples_rotulos"] = "Rótulos por Tarefas";
	$pageTitlestb_tarefas_x_rotulos["Portuguese(Brazil)"]["lista_simples_tarefas"] = "Rótulos por Tarefas";
	if (count($fieldToolTipstb_tarefas_x_rotulos["Portuguese(Brazil)"]))
		$tdatatb_tarefas_x_rotulos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_tarefas_x_rotulos["Spanish"] = array();
	$fieldToolTipstb_tarefas_x_rotulos["Spanish"] = array();
	$placeHolderstb_tarefas_x_rotulos["Spanish"] = array();
	$pageTitlestb_tarefas_x_rotulos["Spanish"] = array();
	$fieldLabelstb_tarefas_x_rotulos["Spanish"]["caat_id"] = "Caat Id";
	$fieldToolTipstb_tarefas_x_rotulos["Spanish"]["caat_id"] = "";
	$placeHolderstb_tarefas_x_rotulos["Spanish"]["caat_id"] = "";
	$fieldLabelstb_tarefas_x_rotulos["Spanish"]["cate_id"] = "(es) Rótulo ID";
	$fieldToolTipstb_tarefas_x_rotulos["Spanish"]["cate_id"] = "";
	$placeHolderstb_tarefas_x_rotulos["Spanish"]["cate_id"] = "";
	$fieldLabelstb_tarefas_x_rotulos["Spanish"]["ativ_id"] = "Ativ Id";
	$fieldToolTipstb_tarefas_x_rotulos["Spanish"]["ativ_id"] = "";
	$placeHolderstb_tarefas_x_rotulos["Spanish"]["ativ_id"] = "";
	$fieldLabelstb_tarefas_x_rotulos["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_tarefas_x_rotulos["Spanish"]["inclu_login"] = "";
	$placeHolderstb_tarefas_x_rotulos["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_tarefas_x_rotulos["Spanish"]["inclu_dt"] = "Inclu Dt";
	$fieldToolTipstb_tarefas_x_rotulos["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_tarefas_x_rotulos["Spanish"]["inclu_dt"] = "";
	$pageTitlestb_tarefas_x_rotulos["Spanish"]["add"] = "Rótulos X Tarefas, Añadir nuevo";
	$pageTitlestb_tarefas_x_rotulos["Spanish"]["view"] = "Rótulos por Tarefas [{%caat_id}]";
	$pageTitlestb_tarefas_x_rotulos["Spanish"]["print"] = "Rótulos por Tarefas";
	$pageTitlestb_tarefas_x_rotulos["Spanish"]["search"] = "Rótulos por Tarefas - Búsqueda avanzada";
	$pageTitlestb_tarefas_x_rotulos["Spanish"]["import"] = "Rótulos por Tarefas, Importar";
	$pageTitlestb_tarefas_x_rotulos["Spanish"]["list"] = "Rótulos por Tarefas";
	$pageTitlestb_tarefas_x_rotulos["Spanish"]["lista_simples_rotulos"] = "Rótulos por Tarefas";
	$pageTitlestb_tarefas_x_rotulos["Spanish"]["lista_simples_tarefas"] = "Rótulos por Tarefas";
	if (count($fieldToolTipstb_tarefas_x_rotulos["Spanish"]))
		$tdatatb_tarefas_x_rotulos[".isUseToolTips"] = true;
}


	$tdatatb_tarefas_x_rotulos[".NCSearch"] = true;



$tdatatb_tarefas_x_rotulos[".shortTableName"] = "tb_tarefas_x_rotulos";
$tdatatb_tarefas_x_rotulos[".nSecOptions"] = 0;

$tdatatb_tarefas_x_rotulos[".mainTableOwnerID"] = "";
$tdatatb_tarefas_x_rotulos[".entityType"] = 0;

$tdatatb_tarefas_x_rotulos[".strOriginalTableName"] = "tb_tarefas_x_rotulos";

	



$tdatatb_tarefas_x_rotulos[".showAddInPopup"] = false;

$tdatatb_tarefas_x_rotulos[".showEditInPopup"] = false;

$tdatatb_tarefas_x_rotulos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_tarefas_x_rotulos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatatb_tarefas_x_rotulos[".listAjax"] = true;
//	temporary
$tdatatb_tarefas_x_rotulos[".listAjax"] = false;

	$tdatatb_tarefas_x_rotulos[".audit"] = true;

	$tdatatb_tarefas_x_rotulos[".locking"] = false;


$pages = $tdatatb_tarefas_x_rotulos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_tarefas_x_rotulos[".edit"] = true;
	$tdatatb_tarefas_x_rotulos[".afterEditAction"] = 1;
	$tdatatb_tarefas_x_rotulos[".closePopupAfterEdit"] = 1;
	$tdatatb_tarefas_x_rotulos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_tarefas_x_rotulos[".add"] = true;
$tdatatb_tarefas_x_rotulos[".afterAddAction"] = 1;
$tdatatb_tarefas_x_rotulos[".closePopupAfterAdd"] = 1;
$tdatatb_tarefas_x_rotulos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_tarefas_x_rotulos[".list"] = true;
}



$tdatatb_tarefas_x_rotulos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_tarefas_x_rotulos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_tarefas_x_rotulos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_tarefas_x_rotulos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_tarefas_x_rotulos[".printFriendly"] = true;
}



$tdatatb_tarefas_x_rotulos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_tarefas_x_rotulos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_tarefas_x_rotulos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_tarefas_x_rotulos[".isUseAjaxSuggest"] = true;

$tdatatb_tarefas_x_rotulos[".rowHighlite"] = true;



																											

$tdatatb_tarefas_x_rotulos[".ajaxCodeSnippetAdded"] = false;

$tdatatb_tarefas_x_rotulos[".buttonsAdded"] = false;

$tdatatb_tarefas_x_rotulos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_tarefas_x_rotulos[".isUseTimeForSearch"] = false;


$tdatatb_tarefas_x_rotulos[".badgeColor"] = "8080ff";


$tdatatb_tarefas_x_rotulos[".allSearchFields"] = array();
$tdatatb_tarefas_x_rotulos[".filterFields"] = array();
$tdatatb_tarefas_x_rotulos[".requiredSearchFields"] = array();

$tdatatb_tarefas_x_rotulos[".googleLikeFields"] = array();
$tdatatb_tarefas_x_rotulos[".googleLikeFields"][] = "caat_id";
$tdatatb_tarefas_x_rotulos[".googleLikeFields"][] = "cate_id";
$tdatatb_tarefas_x_rotulos[".googleLikeFields"][] = "ativ_id";
$tdatatb_tarefas_x_rotulos[".googleLikeFields"][] = "inclu_login";
$tdatatb_tarefas_x_rotulos[".googleLikeFields"][] = "inclu_dt";



$tdatatb_tarefas_x_rotulos[".tableType"] = "list";

$tdatatb_tarefas_x_rotulos[".printerPageOrientation"] = 0;
$tdatatb_tarefas_x_rotulos[".nPrinterPageScale"] = 100;

$tdatatb_tarefas_x_rotulos[".nPrinterSplitRecords"] = 40;

$tdatatb_tarefas_x_rotulos[".geocodingEnabled"] = false;










$tdatatb_tarefas_x_rotulos[".pageSize"] = 20;

$tdatatb_tarefas_x_rotulos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_tarefas_x_rotulos[".strOrderBy"] = $tstrOrderBy;

$tdatatb_tarefas_x_rotulos[".orderindexes"] = array();

$tdatatb_tarefas_x_rotulos[".sqlHead"] = "SELECT caat_id,  	cate_id,  	ativ_id,  	inclu_login,  	inclu_dt";
$tdatatb_tarefas_x_rotulos[".sqlFrom"] = "FROM tb_tarefas_x_rotulos";
$tdatatb_tarefas_x_rotulos[".sqlWhereExpr"] = "";
$tdatatb_tarefas_x_rotulos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_tarefas_x_rotulos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_tarefas_x_rotulos[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_tarefas_x_rotulos[".highlightSearchResults"] = true;

$tableKeystb_tarefas_x_rotulos = array();
$tableKeystb_tarefas_x_rotulos[] = "caat_id";
$tdatatb_tarefas_x_rotulos[".Keys"] = $tableKeystb_tarefas_x_rotulos;


$tdatatb_tarefas_x_rotulos[".hideMobileList"] = array();




//	caat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "caat_id";
	$fdata["GoodName"] = "caat_id";
	$fdata["ownerTable"] = "tb_tarefas_x_rotulos";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_x_rotulos","caat_id");
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


	$tdatatb_tarefas_x_rotulos["caat_id"] = $fdata;
		$tdatatb_tarefas_x_rotulos[".searchableFields"][] = "caat_id";
//	cate_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cate_id";
	$fdata["GoodName"] = "cate_id";
	$fdata["ownerTable"] = "tb_tarefas_x_rotulos";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_x_rotulos","cate_id");
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
	$edata["LookupTable"] = "tb_rotulos";
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


	$tdatatb_tarefas_x_rotulos["cate_id"] = $fdata;
		$tdatatb_tarefas_x_rotulos[".searchableFields"][] = "cate_id";
//	ativ_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ativ_id";
	$fdata["GoodName"] = "ativ_id";
	$fdata["ownerTable"] = "tb_tarefas_x_rotulos";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_x_rotulos","ativ_id");
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


	$tdatatb_tarefas_x_rotulos["ativ_id"] = $fdata;
		$tdatatb_tarefas_x_rotulos[".searchableFields"][] = "ativ_id";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_tarefas_x_rotulos";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_x_rotulos","inclu_login");
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


	$tdatatb_tarefas_x_rotulos["inclu_login"] = $fdata;
		$tdatatb_tarefas_x_rotulos[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_tarefas_x_rotulos";
	$fdata["Label"] = GetFieldLabel("tb_tarefas_x_rotulos","inclu_dt");
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


	$tdatatb_tarefas_x_rotulos["inclu_dt"] = $fdata;
		$tdatatb_tarefas_x_rotulos[".searchableFields"][] = "inclu_dt";


$tables_data["tb_tarefas_x_rotulos"]=&$tdatatb_tarefas_x_rotulos;
$field_labels["tb_tarefas_x_rotulos"] = &$fieldLabelstb_tarefas_x_rotulos;
$fieldToolTips["tb_tarefas_x_rotulos"] = &$fieldToolTipstb_tarefas_x_rotulos;
$placeHolders["tb_tarefas_x_rotulos"] = &$placeHolderstb_tarefas_x_rotulos;
$page_titles["tb_tarefas_x_rotulos"] = &$pageTitlestb_tarefas_x_rotulos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_tarefas_x_rotulos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_tarefas_x_rotulos"] = array();



	
				$strOriginalDetailsTable="tb_rotulos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_rotulos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_rotulos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_tarefas_x_rotulos"][0] = $masterParams;
				$masterTablesData["tb_tarefas_x_rotulos"][0]["masterKeys"] = array();
	$masterTablesData["tb_tarefas_x_rotulos"][0]["masterKeys"][]="cate_id";
				$masterTablesData["tb_tarefas_x_rotulos"][0]["detailKeys"] = array();
	$masterTablesData["tb_tarefas_x_rotulos"][0]["detailKeys"][]="cate_id";
		
	
				$strOriginalDetailsTable="tb_atividade";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_atividade";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_atividade";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_tarefas_x_rotulos"][1] = $masterParams;
				$masterTablesData["tb_tarefas_x_rotulos"][1]["masterKeys"] = array();
	$masterTablesData["tb_tarefas_x_rotulos"][1]["masterKeys"][]="ativ_id";
				$masterTablesData["tb_tarefas_x_rotulos"][1]["detailKeys"] = array();
	$masterTablesData["tb_tarefas_x_rotulos"][1]["detailKeys"][]="ativ_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_tarefas_x_rotulos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "caat_id,  	cate_id,  	ativ_id,  	inclu_login,  	inclu_dt";
$proto0["m_strFrom"] = "FROM tb_tarefas_x_rotulos";
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
	"m_strTable" => "tb_tarefas_x_rotulos",
	"m_srcTableName" => "tb_tarefas_x_rotulos"
));

$proto6["m_sql"] = "caat_id";
$proto6["m_srcTableName"] = "tb_tarefas_x_rotulos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cate_id",
	"m_strTable" => "tb_tarefas_x_rotulos",
	"m_srcTableName" => "tb_tarefas_x_rotulos"
));

$proto8["m_sql"] = "cate_id";
$proto8["m_srcTableName"] = "tb_tarefas_x_rotulos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ativ_id",
	"m_strTable" => "tb_tarefas_x_rotulos",
	"m_srcTableName" => "tb_tarefas_x_rotulos"
));

$proto10["m_sql"] = "ativ_id";
$proto10["m_srcTableName"] = "tb_tarefas_x_rotulos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_tarefas_x_rotulos",
	"m_srcTableName" => "tb_tarefas_x_rotulos"
));

$proto12["m_sql"] = "inclu_login";
$proto12["m_srcTableName"] = "tb_tarefas_x_rotulos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_tarefas_x_rotulos",
	"m_srcTableName" => "tb_tarefas_x_rotulos"
));

$proto14["m_sql"] = "inclu_dt";
$proto14["m_srcTableName"] = "tb_tarefas_x_rotulos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tb_tarefas_x_rotulos";
$proto17["m_srcTableName"] = "tb_tarefas_x_rotulos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "caat_id";
$proto17["m_columns"][] = "cate_id";
$proto17["m_columns"][] = "ativ_id";
$proto17["m_columns"][] = "inclu_login";
$proto17["m_columns"][] = "inclu_dt";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tb_tarefas_x_rotulos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tb_tarefas_x_rotulos";
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
$proto0["m_srcTableName"]="tb_tarefas_x_rotulos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_tarefas_x_rotulos = createSqlQuery_tb_tarefas_x_rotulos();


	
		;

					

$tdatatb_tarefas_x_rotulos[".sqlquery"] = $queryData_tb_tarefas_x_rotulos;

include_once(getabspath("include/tb_tarefas_x_rotulos_events.php"));
$tableEvents["tb_tarefas_x_rotulos"] = new eventclass_tb_tarefas_x_rotulos;
$tdatatb_tarefas_x_rotulos[".hasEvents"] = true;

?>