<?php



$tdatagr_fico_tarefas_por_lista = array();
$tdatagr_fico_tarefas_por_lista[".searchableFields"] = array();
$tdatagr_fico_tarefas_por_lista[".ShortName"] = "gr_fico_tarefas_por_lista";
$tdatagr_fico_tarefas_por_lista[".OwnerID"] = "";
$tdatagr_fico_tarefas_por_lista[".OriginalTable"] = "tb_atividade";


$defaultPages = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );

$tdatagr_fico_tarefas_por_lista[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatagr_fico_tarefas_por_lista[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatagr_fico_tarefas_por_lista[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsgr_fico_tarefas_por_lista = array();
$fieldToolTipsgr_fico_tarefas_por_lista = array();
$pageTitlesgr_fico_tarefas_por_lista = array();
$placeHoldersgr_fico_tarefas_por_lista = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgr_fico_tarefas_por_lista["English"] = array();
	$fieldToolTipsgr_fico_tarefas_por_lista["English"] = array();
	$placeHoldersgr_fico_tarefas_por_lista["English"] = array();
	$pageTitlesgr_fico_tarefas_por_lista["English"] = array();
	$fieldLabelsgr_fico_tarefas_por_lista["English"]["clie_id"] = "Customer";
	$fieldToolTipsgr_fico_tarefas_por_lista["English"]["clie_id"] = "";
	$placeHoldersgr_fico_tarefas_por_lista["English"]["clie_id"] = "";
	$fieldLabelsgr_fico_tarefas_por_lista["English"]["lista_id"] = "List";
	$fieldToolTipsgr_fico_tarefas_por_lista["English"]["lista_id"] = "";
	$placeHoldersgr_fico_tarefas_por_lista["English"]["lista_id"] = "";
	$fieldLabelsgr_fico_tarefas_por_lista["English"]["lista_nm"] = "List Name";
	$fieldToolTipsgr_fico_tarefas_por_lista["English"]["lista_nm"] = "";
	$placeHoldersgr_fico_tarefas_por_lista["English"]["lista_nm"] = "";
	$fieldLabelsgr_fico_tarefas_por_lista["English"]["Qtde"] = "Qty";
	$fieldToolTipsgr_fico_tarefas_por_lista["English"]["Qtde"] = "";
	$placeHoldersgr_fico_tarefas_por_lista["English"]["Qtde"] = "";
	if (count($fieldToolTipsgr_fico_tarefas_por_lista["English"]))
		$tdatagr_fico_tarefas_por_lista[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsgr_fico_tarefas_por_lista["Portuguese(Brazil)"] = array();
	$fieldToolTipsgr_fico_tarefas_por_lista["Portuguese(Brazil)"] = array();
	$placeHoldersgr_fico_tarefas_por_lista["Portuguese(Brazil)"] = array();
	$pageTitlesgr_fico_tarefas_por_lista["Portuguese(Brazil)"] = array();
	$fieldLabelsgr_fico_tarefas_por_lista["Portuguese(Brazil)"]["clie_id"] = "Cliente";
	$fieldToolTipsgr_fico_tarefas_por_lista["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHoldersgr_fico_tarefas_por_lista["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelsgr_fico_tarefas_por_lista["Portuguese(Brazil)"]["lista_id"] = "Lista";
	$fieldToolTipsgr_fico_tarefas_por_lista["Portuguese(Brazil)"]["lista_id"] = "";
	$placeHoldersgr_fico_tarefas_por_lista["Portuguese(Brazil)"]["lista_id"] = "";
	$fieldLabelsgr_fico_tarefas_por_lista["Portuguese(Brazil)"]["lista_nm"] = "Lista";
	$fieldToolTipsgr_fico_tarefas_por_lista["Portuguese(Brazil)"]["lista_nm"] = "";
	$placeHoldersgr_fico_tarefas_por_lista["Portuguese(Brazil)"]["lista_nm"] = "";
	$fieldLabelsgr_fico_tarefas_por_lista["Portuguese(Brazil)"]["Qtde"] = "Qtde";
	$fieldToolTipsgr_fico_tarefas_por_lista["Portuguese(Brazil)"]["Qtde"] = "";
	$placeHoldersgr_fico_tarefas_por_lista["Portuguese(Brazil)"]["Qtde"] = "";
	if (count($fieldToolTipsgr_fico_tarefas_por_lista["Portuguese(Brazil)"]))
		$tdatagr_fico_tarefas_por_lista[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgr_fico_tarefas_por_lista["Spanish"] = array();
	$fieldToolTipsgr_fico_tarefas_por_lista["Spanish"] = array();
	$placeHoldersgr_fico_tarefas_por_lista["Spanish"] = array();
	$pageTitlesgr_fico_tarefas_por_lista["Spanish"] = array();
	$fieldLabelsgr_fico_tarefas_por_lista["Spanish"]["clie_id"] = "Clie Id";
	$fieldToolTipsgr_fico_tarefas_por_lista["Spanish"]["clie_id"] = "";
	$placeHoldersgr_fico_tarefas_por_lista["Spanish"]["clie_id"] = "";
	$fieldLabelsgr_fico_tarefas_por_lista["Spanish"]["lista_id"] = "Lista Id";
	$fieldToolTipsgr_fico_tarefas_por_lista["Spanish"]["lista_id"] = "";
	$placeHoldersgr_fico_tarefas_por_lista["Spanish"]["lista_id"] = "";
	$fieldLabelsgr_fico_tarefas_por_lista["Spanish"]["lista_nm"] = "Lista Nm";
	$fieldToolTipsgr_fico_tarefas_por_lista["Spanish"]["lista_nm"] = "";
	$placeHoldersgr_fico_tarefas_por_lista["Spanish"]["lista_nm"] = "";
	$fieldLabelsgr_fico_tarefas_por_lista["Spanish"]["Qtde"] = "Qtde";
	$fieldToolTipsgr_fico_tarefas_por_lista["Spanish"]["Qtde"] = "";
	$placeHoldersgr_fico_tarefas_por_lista["Spanish"]["Qtde"] = "";
	if (count($fieldToolTipsgr_fico_tarefas_por_lista["Spanish"]))
		$tdatagr_fico_tarefas_por_lista[".isUseToolTips"] = true;
}


	$tdatagr_fico_tarefas_por_lista[".NCSearch"] = true;

	$tdatagr_fico_tarefas_por_lista[".ChartRefreshTime"] = 0;


$tdatagr_fico_tarefas_por_lista[".shortTableName"] = "gr_fico_tarefas_por_lista";
$tdatagr_fico_tarefas_por_lista[".nSecOptions"] = 0;

$tdatagr_fico_tarefas_por_lista[".mainTableOwnerID"] = "";
$tdatagr_fico_tarefas_por_lista[".entityType"] = 3;

$tdatagr_fico_tarefas_por_lista[".strOriginalTableName"] = "tb_atividade";

	



$tdatagr_fico_tarefas_por_lista[".showAddInPopup"] = false;

$tdatagr_fico_tarefas_por_lista[".showEditInPopup"] = false;

$tdatagr_fico_tarefas_por_lista[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagr_fico_tarefas_por_lista[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagr_fico_tarefas_por_lista[".listAjax"] = false;
//	temporary
$tdatagr_fico_tarefas_por_lista[".listAjax"] = false;

	$tdatagr_fico_tarefas_por_lista[".audit"] = false;

	$tdatagr_fico_tarefas_por_lista[".locking"] = false;


$pages = $tdatagr_fico_tarefas_por_lista[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagr_fico_tarefas_por_lista[".edit"] = true;
	$tdatagr_fico_tarefas_por_lista[".afterEditAction"] = 1;
	$tdatagr_fico_tarefas_por_lista[".closePopupAfterEdit"] = 1;
	$tdatagr_fico_tarefas_por_lista[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagr_fico_tarefas_por_lista[".add"] = true;
$tdatagr_fico_tarefas_por_lista[".afterAddAction"] = 1;
$tdatagr_fico_tarefas_por_lista[".closePopupAfterAdd"] = 1;
$tdatagr_fico_tarefas_por_lista[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagr_fico_tarefas_por_lista[".list"] = true;
}



$tdatagr_fico_tarefas_por_lista[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagr_fico_tarefas_por_lista[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagr_fico_tarefas_por_lista[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagr_fico_tarefas_por_lista[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagr_fico_tarefas_por_lista[".printFriendly"] = true;
}



$tdatagr_fico_tarefas_por_lista[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagr_fico_tarefas_por_lista[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagr_fico_tarefas_por_lista[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagr_fico_tarefas_por_lista[".isUseAjaxSuggest"] = true;




																		

$tdatagr_fico_tarefas_por_lista[".ajaxCodeSnippetAdded"] = false;

$tdatagr_fico_tarefas_por_lista[".buttonsAdded"] = false;

$tdatagr_fico_tarefas_por_lista[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagr_fico_tarefas_por_lista[".isUseTimeForSearch"] = false;


$tdatagr_fico_tarefas_por_lista[".badgeColor"] = "edca00";


$tdatagr_fico_tarefas_por_lista[".allSearchFields"] = array();
$tdatagr_fico_tarefas_por_lista[".filterFields"] = array();
$tdatagr_fico_tarefas_por_lista[".requiredSearchFields"] = array();

$tdatagr_fico_tarefas_por_lista[".googleLikeFields"] = array();
$tdatagr_fico_tarefas_por_lista[".googleLikeFields"][] = "clie_id";
$tdatagr_fico_tarefas_por_lista[".googleLikeFields"][] = "lista_id";
$tdatagr_fico_tarefas_por_lista[".googleLikeFields"][] = "lista_nm";
$tdatagr_fico_tarefas_por_lista[".googleLikeFields"][] = "Qtde";



$tdatagr_fico_tarefas_por_lista[".tableType"] = "chart";

$tdatagr_fico_tarefas_por_lista[".printerPageOrientation"] = 0;
$tdatagr_fico_tarefas_por_lista[".nPrinterPageScale"] = 100;

$tdatagr_fico_tarefas_por_lista[".nPrinterSplitRecords"] = 40;

$tdatagr_fico_tarefas_por_lista[".geocodingEnabled"] = false;



// chart settings
$tdatagr_fico_tarefas_por_lista[".chartType"] = "2DDoughnut";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagr_fico_tarefas_por_lista[".strOrderBy"] = $tstrOrderBy;

$tdatagr_fico_tarefas_por_lista[".orderindexes"] = array();

$tdatagr_fico_tarefas_por_lista[".sqlHead"] = "SELECT A.clie_id, A.lista_id, L.lista_nm, COUNT(A.lista_id) AS Qtde";
$tdatagr_fico_tarefas_por_lista[".sqlFrom"] = "FROM tb_atividade AS A , tb_lista_atividades AS L";
$tdatagr_fico_tarefas_por_lista[".sqlWhereExpr"] = "(A.lista_id = L.lista_id)";
$tdatagr_fico_tarefas_por_lista[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "Todas",
	'name' => "_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS3",
	'nameType' => 'CustomID',
	'where' => "ativ_concluida = ativ_concluida",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Nao_Concluidas",
	'name' => "_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS2",
	'nameType' => 'CustomID',
	'where' => "ativ_concluida = 0",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Concluidas",
	'name' => "_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS2",
	'nameType' => 'CustomID',
	'where' => "ativ_concluida = 1",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatagr_fico_tarefas_por_lista[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagr_fico_tarefas_por_lista[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagr_fico_tarefas_por_lista[".arrGroupsPerPage"] = $arrGPP;

$tdatagr_fico_tarefas_por_lista[".highlightSearchResults"] = true;

$tableKeysgr_fico_tarefas_por_lista = array();
$tdatagr_fico_tarefas_por_lista[".Keys"] = $tableKeysgr_fico_tarefas_por_lista;


$tdatagr_fico_tarefas_por_lista[".hideMobileList"] = array();




//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_por_Lista","clie_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "clie_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A.clie_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatagr_fico_tarefas_por_lista["clie_id"] = $fdata;
		$tdatagr_fico_tarefas_por_lista[".searchableFields"][] = "clie_id";
//	lista_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lista_id";
	$fdata["GoodName"] = "lista_id";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_por_Lista","lista_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "lista_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A.lista_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tb_lista_atividades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "lista_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "lista_nm";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatagr_fico_tarefas_por_lista["lista_id"] = $fdata;
		$tdatagr_fico_tarefas_por_lista[".searchableFields"][] = "lista_id";
//	lista_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lista_nm";
	$fdata["GoodName"] = "lista_nm";
	$fdata["ownerTable"] = "tb_lista_atividades";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_por_Lista","lista_nm");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "lista_nm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "L.lista_nm";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatagr_fico_tarefas_por_lista["lista_nm"] = $fdata;
		$tdatagr_fico_tarefas_por_lista[".searchableFields"][] = "lista_nm";
//	Qtde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Qtde";
	$fdata["GoodName"] = "Qtde";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_por_Lista","Qtde");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "Qtde";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(A.lista_id)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "More than";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
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


	$tdatagr_fico_tarefas_por_lista["Qtde"] = $fdata;
		$tdatagr_fico_tarefas_por_lista[".searchableFields"][] = "Qtde";

	$tdatagr_fico_tarefas_por_lista[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Gráfico Tarefas por Lista</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatagr_fico_tarefas_por_lista[".chartXml"] .= '<attr value="0">
			<attr value="name">Qtde</attr>';
	$tdatagr_fico_tarefas_por_lista[".chartXml"] .= '</attr>';
	$tdatagr_fico_tarefas_por_lista[".chartXml"] .= '<attr value="1">
		<attr value="name">lista_nm</attr>
	</attr>';
	$tdatagr_fico_tarefas_por_lista[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatagr_fico_tarefas_por_lista[".chartXml"] .= '<attr value="head">'.xmlencode(GetCustomLabel("GR_FICO_TAREFAS_POR_LISTA_HEADER")).'</attr>
<attr value="foot">'.xmlencode(GetCustomLabel("GR_FICO_TAREFAS_POR_LISTA_FOOTER")).'</attr>
<attr value="y_axis_label">'.xmlencode("ativ_id").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatagr_fico_tarefas_por_lista[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatagr_fico_tarefas_por_lista[".chartXml"] .= '<attr value="0">
		<attr value="name">clie_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_por_Lista","clie_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_tarefas_por_lista[".chartXml"] .= '<attr value="1">
		<attr value="name">lista_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_por_Lista","lista_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_tarefas_por_lista[".chartXml"] .= '<attr value="2">
		<attr value="name">lista_nm</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_por_Lista","lista_nm")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_tarefas_por_lista[".chartXml"] .= '<attr value="3">
		<attr value="name">Qtde</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_por_Lista","Qtde")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatagr_fico_tarefas_por_lista[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Gráfico Tarefas por Lista</attr>
<attr value="short_table_name">gr_fico_tarefas_por_lista</attr>
</attr>

</chart>';

$tables_data["Gráfico Tarefas por Lista"]=&$tdatagr_fico_tarefas_por_lista;
$field_labels["Gr_fico_Tarefas_por_Lista"] = &$fieldLabelsgr_fico_tarefas_por_lista;
$fieldToolTips["Gr_fico_Tarefas_por_Lista"] = &$fieldToolTipsgr_fico_tarefas_por_lista;
$placeHolders["Gr_fico_Tarefas_por_Lista"] = &$placeHoldersgr_fico_tarefas_por_lista;
$page_titles["Gr_fico_Tarefas_por_Lista"] = &$pageTitlesgr_fico_tarefas_por_lista;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Gráfico Tarefas por Lista"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Gráfico Tarefas por Lista"] = array();



	
				$strOriginalDetailsTable="tb_lista_atividades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_lista_atividades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_lista_atividades";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Gráfico Tarefas por Lista"][0] = $masterParams;
				$masterTablesData["Gráfico Tarefas por Lista"][0]["masterKeys"] = array();
	$masterTablesData["Gráfico Tarefas por Lista"][0]["masterKeys"][]="lista_id";
				$masterTablesData["Gráfico Tarefas por Lista"][0]["detailKeys"] = array();
	$masterTablesData["Gráfico Tarefas por Lista"][0]["detailKeys"][]="lista_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_gr_fico_tarefas_por_lista()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "A.clie_id, A.lista_id, L.lista_nm, COUNT(A.lista_id) AS Qtde";
$proto0["m_strFrom"] = "FROM tb_atividade AS A , tb_lista_atividades AS L";
$proto0["m_strWhere"] = "(A.lista_id = L.lista_id)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "A.lista_id = L.lista_id";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "lista_id",
	"m_strTable" => "A",
	"m_srcTableName" => "Gráfico Tarefas por Lista"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= L.lista_id";
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
	"m_strName" => "clie_id",
	"m_strTable" => "A",
	"m_srcTableName" => "Gráfico Tarefas por Lista"
));

$proto6["m_sql"] = "A.clie_id";
$proto6["m_srcTableName"] = "Gráfico Tarefas por Lista";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "lista_id",
	"m_strTable" => "A",
	"m_srcTableName" => "Gráfico Tarefas por Lista"
));

$proto8["m_sql"] = "A.lista_id";
$proto8["m_srcTableName"] = "Gráfico Tarefas por Lista";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lista_nm",
	"m_strTable" => "L",
	"m_srcTableName" => "Gráfico Tarefas por Lista"
));

$proto10["m_sql"] = "L.lista_nm";
$proto10["m_srcTableName"] = "Gráfico Tarefas por Lista";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_COUNT";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "lista_id",
	"m_strTable" => "A",
	"m_srcTableName" => "Gráfico Tarefas por Lista"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "COUNT(A.lista_id)";
$proto12["m_srcTableName"] = "Gráfico Tarefas por Lista";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Qtde";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "tb_atividade";
$proto16["m_srcTableName"] = "Gráfico Tarefas por Lista";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "ativ_id";
$proto16["m_columns"][] = "clie_id";
$proto16["m_columns"][] = "ativ_nm";
$proto16["m_columns"][] = "ativ_ds";
$proto16["m_columns"][] = "lista_id";
$proto16["m_columns"][] = "stat_id";
$proto16["m_columns"][] = "ativ_fl_ativo";
$proto16["m_columns"][] = "ativ_prioridade";
$proto16["m_columns"][] = "ativ_concluida";
$proto16["m_columns"][] = "ativ_dt_ini";
$proto16["m_columns"][] = "ativ_dt_fim";
$proto16["m_columns"][] = "ativ_domi_unid_tempo";
$proto16["m_columns"][] = "ativ_tempo_estimado";
$proto16["m_columns"][] = "ativ_tempo_real";
$proto16["m_columns"][] = "inclu_login";
$proto16["m_columns"][] = "inclu_dt";
$proto16["m_columns"][] = "alter_login";
$proto16["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "tb_atividade AS A";
$proto15["m_alias"] = "A";
$proto15["m_srcTableName"] = "Gráfico Tarefas por Lista";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
												$proto19=array();
$proto19["m_link"] = "SQLL_CROSSJOIN";
			$proto20=array();
$proto20["m_strName"] = "tb_lista_atividades";
$proto20["m_srcTableName"] = "Gráfico Tarefas por Lista";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "lista_id";
$proto20["m_columns"][] = "clie_id";
$proto20["m_columns"][] = "lista_nm";
$proto20["m_columns"][] = "inclu_login";
$proto20["m_columns"][] = "inclu_dt";
$proto20["m_columns"][] = "alter_login";
$proto20["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "tb_lista_atividades AS L";
$proto19["m_alias"] = "L";
$proto19["m_srcTableName"] = "Gráfico Tarefas por Lista";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "A",
	"m_srcTableName" => "Gráfico Tarefas por Lista"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "lista_id",
	"m_strTable" => "A",
	"m_srcTableName" => "Gráfico Tarefas por Lista"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "lista_nm",
	"m_strTable" => "L",
	"m_srcTableName" => "Gráfico Tarefas por Lista"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Gráfico Tarefas por Lista";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gr_fico_tarefas_por_lista = createSqlQuery_gr_fico_tarefas_por_lista();


	
		;

				

$tdatagr_fico_tarefas_por_lista[".sqlquery"] = $queryData_gr_fico_tarefas_por_lista;

$tableEvents["Gráfico Tarefas por Lista"] = new eventsBase;
$tdatagr_fico_tarefas_por_lista[".hasEvents"] = false;

?>