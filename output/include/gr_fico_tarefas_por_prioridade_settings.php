<?php



$tdatagr_fico_tarefas_por_prioridade = array();
$tdatagr_fico_tarefas_por_prioridade[".searchableFields"] = array();
$tdatagr_fico_tarefas_por_prioridade[".ShortName"] = "gr_fico_tarefas_por_prioridade";
$tdatagr_fico_tarefas_por_prioridade[".OwnerID"] = "";
$tdatagr_fico_tarefas_por_prioridade[".OriginalTable"] = "tb_atividade";


$defaultPages = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );

$tdatagr_fico_tarefas_por_prioridade[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatagr_fico_tarefas_por_prioridade[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatagr_fico_tarefas_por_prioridade[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsgr_fico_tarefas_por_prioridade = array();
$fieldToolTipsgr_fico_tarefas_por_prioridade = array();
$pageTitlesgr_fico_tarefas_por_prioridade = array();
$placeHoldersgr_fico_tarefas_por_prioridade = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgr_fico_tarefas_por_prioridade["English"] = array();
	$fieldToolTipsgr_fico_tarefas_por_prioridade["English"] = array();
	$placeHoldersgr_fico_tarefas_por_prioridade["English"] = array();
	$pageTitlesgr_fico_tarefas_por_prioridade["English"] = array();
	$fieldLabelsgr_fico_tarefas_por_prioridade["English"]["clie_id"] = "Clie Id";
	$fieldToolTipsgr_fico_tarefas_por_prioridade["English"]["clie_id"] = "";
	$placeHoldersgr_fico_tarefas_por_prioridade["English"]["clie_id"] = "";
	$fieldLabelsgr_fico_tarefas_por_prioridade["English"]["Qtde"] = "Qtde";
	$fieldToolTipsgr_fico_tarefas_por_prioridade["English"]["Qtde"] = "";
	$placeHoldersgr_fico_tarefas_por_prioridade["English"]["Qtde"] = "";
	$fieldLabelsgr_fico_tarefas_por_prioridade["English"]["domi_valor"] = "Domi Valor";
	$fieldToolTipsgr_fico_tarefas_por_prioridade["English"]["domi_valor"] = "";
	$placeHoldersgr_fico_tarefas_por_prioridade["English"]["domi_valor"] = "";
	$fieldLabelsgr_fico_tarefas_por_prioridade["English"]["Prioridade"] = "Prioridade";
	$fieldToolTipsgr_fico_tarefas_por_prioridade["English"]["Prioridade"] = "";
	$placeHoldersgr_fico_tarefas_por_prioridade["English"]["Prioridade"] = "";
	if (count($fieldToolTipsgr_fico_tarefas_por_prioridade["English"]))
		$tdatagr_fico_tarefas_por_prioridade[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"] = array();
	$fieldToolTipsgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"] = array();
	$placeHoldersgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"] = array();
	$pageTitlesgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"] = array();
	$fieldLabelsgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]["clie_id"] = "Clie Id";
	$fieldToolTipsgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHoldersgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelsgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]["Qtde"] = "Qtde";
	$fieldToolTipsgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]["Qtde"] = "";
	$placeHoldersgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]["Qtde"] = "";
	$fieldLabelsgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]["domi_valor"] = "Domi Valor";
	$fieldToolTipsgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]["domi_valor"] = "";
	$placeHoldersgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]["domi_valor"] = "";
	$fieldLabelsgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]["Prioridade"] = "Prioridade";
	$fieldToolTipsgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]["Prioridade"] = "";
	$placeHoldersgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]["Prioridade"] = "";
	if (count($fieldToolTipsgr_fico_tarefas_por_prioridade["Portuguese(Brazil)"]))
		$tdatagr_fico_tarefas_por_prioridade[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgr_fico_tarefas_por_prioridade["Spanish"] = array();
	$fieldToolTipsgr_fico_tarefas_por_prioridade["Spanish"] = array();
	$placeHoldersgr_fico_tarefas_por_prioridade["Spanish"] = array();
	$pageTitlesgr_fico_tarefas_por_prioridade["Spanish"] = array();
	$fieldLabelsgr_fico_tarefas_por_prioridade["Spanish"]["clie_id"] = "Clie Id";
	$fieldToolTipsgr_fico_tarefas_por_prioridade["Spanish"]["clie_id"] = "";
	$placeHoldersgr_fico_tarefas_por_prioridade["Spanish"]["clie_id"] = "";
	$fieldLabelsgr_fico_tarefas_por_prioridade["Spanish"]["Qtde"] = "Qtde";
	$fieldToolTipsgr_fico_tarefas_por_prioridade["Spanish"]["Qtde"] = "";
	$placeHoldersgr_fico_tarefas_por_prioridade["Spanish"]["Qtde"] = "";
	$fieldLabelsgr_fico_tarefas_por_prioridade["Spanish"]["domi_valor"] = "Domi Valor";
	$fieldToolTipsgr_fico_tarefas_por_prioridade["Spanish"]["domi_valor"] = "";
	$placeHoldersgr_fico_tarefas_por_prioridade["Spanish"]["domi_valor"] = "";
	$fieldLabelsgr_fico_tarefas_por_prioridade["Spanish"]["Prioridade"] = "Prioridade";
	$fieldToolTipsgr_fico_tarefas_por_prioridade["Spanish"]["Prioridade"] = "";
	$placeHoldersgr_fico_tarefas_por_prioridade["Spanish"]["Prioridade"] = "";
	if (count($fieldToolTipsgr_fico_tarefas_por_prioridade["Spanish"]))
		$tdatagr_fico_tarefas_por_prioridade[".isUseToolTips"] = true;
}


	$tdatagr_fico_tarefas_por_prioridade[".NCSearch"] = true;

	$tdatagr_fico_tarefas_por_prioridade[".ChartRefreshTime"] = 0;


$tdatagr_fico_tarefas_por_prioridade[".shortTableName"] = "gr_fico_tarefas_por_prioridade";
$tdatagr_fico_tarefas_por_prioridade[".nSecOptions"] = 0;

$tdatagr_fico_tarefas_por_prioridade[".mainTableOwnerID"] = "";
$tdatagr_fico_tarefas_por_prioridade[".entityType"] = 3;

$tdatagr_fico_tarefas_por_prioridade[".strOriginalTableName"] = "tb_atividade";

	



$tdatagr_fico_tarefas_por_prioridade[".showAddInPopup"] = false;

$tdatagr_fico_tarefas_por_prioridade[".showEditInPopup"] = false;

$tdatagr_fico_tarefas_por_prioridade[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagr_fico_tarefas_por_prioridade[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagr_fico_tarefas_por_prioridade[".listAjax"] = false;
//	temporary
$tdatagr_fico_tarefas_por_prioridade[".listAjax"] = false;

	$tdatagr_fico_tarefas_por_prioridade[".audit"] = false;

	$tdatagr_fico_tarefas_por_prioridade[".locking"] = false;


$pages = $tdatagr_fico_tarefas_por_prioridade[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagr_fico_tarefas_por_prioridade[".edit"] = true;
	$tdatagr_fico_tarefas_por_prioridade[".afterEditAction"] = 1;
	$tdatagr_fico_tarefas_por_prioridade[".closePopupAfterEdit"] = 1;
	$tdatagr_fico_tarefas_por_prioridade[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagr_fico_tarefas_por_prioridade[".add"] = true;
$tdatagr_fico_tarefas_por_prioridade[".afterAddAction"] = 1;
$tdatagr_fico_tarefas_por_prioridade[".closePopupAfterAdd"] = 1;
$tdatagr_fico_tarefas_por_prioridade[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagr_fico_tarefas_por_prioridade[".list"] = true;
}



$tdatagr_fico_tarefas_por_prioridade[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagr_fico_tarefas_por_prioridade[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagr_fico_tarefas_por_prioridade[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagr_fico_tarefas_por_prioridade[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagr_fico_tarefas_por_prioridade[".printFriendly"] = true;
}



$tdatagr_fico_tarefas_por_prioridade[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagr_fico_tarefas_por_prioridade[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagr_fico_tarefas_por_prioridade[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagr_fico_tarefas_por_prioridade[".isUseAjaxSuggest"] = true;




									

$tdatagr_fico_tarefas_por_prioridade[".ajaxCodeSnippetAdded"] = false;

$tdatagr_fico_tarefas_por_prioridade[".buttonsAdded"] = false;

$tdatagr_fico_tarefas_por_prioridade[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagr_fico_tarefas_por_prioridade[".isUseTimeForSearch"] = false;


$tdatagr_fico_tarefas_por_prioridade[".badgeColor"] = "CD5C5C";


$tdatagr_fico_tarefas_por_prioridade[".allSearchFields"] = array();
$tdatagr_fico_tarefas_por_prioridade[".filterFields"] = array();
$tdatagr_fico_tarefas_por_prioridade[".requiredSearchFields"] = array();

$tdatagr_fico_tarefas_por_prioridade[".googleLikeFields"] = array();
$tdatagr_fico_tarefas_por_prioridade[".googleLikeFields"][] = "clie_id";
$tdatagr_fico_tarefas_por_prioridade[".googleLikeFields"][] = "domi_valor";
$tdatagr_fico_tarefas_por_prioridade[".googleLikeFields"][] = "Prioridade";
$tdatagr_fico_tarefas_por_prioridade[".googleLikeFields"][] = "Qtde";



$tdatagr_fico_tarefas_por_prioridade[".tableType"] = "chart";

$tdatagr_fico_tarefas_por_prioridade[".printerPageOrientation"] = 0;
$tdatagr_fico_tarefas_por_prioridade[".nPrinterPageScale"] = 100;

$tdatagr_fico_tarefas_por_prioridade[".nPrinterSplitRecords"] = 40;

$tdatagr_fico_tarefas_por_prioridade[".geocodingEnabled"] = false;



// chart settings
$tdatagr_fico_tarefas_por_prioridade[".chartType"] = "2DDoughnut";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagr_fico_tarefas_por_prioridade[".strOrderBy"] = $tstrOrderBy;

$tdatagr_fico_tarefas_por_prioridade[".orderindexes"] = array();

$tdatagr_fico_tarefas_por_prioridade[".sqlHead"] = "SELECT A.clie_id,  domi_valor,  domi_exibe || ' (' || COUNT(A.ativ_id) || ')' AS Prioridade,  COUNT(A.ativ_id) AS Qtde";
$tdatagr_fico_tarefas_por_prioridade[".sqlFrom"] = "FROM tb_atividade AS A  , tb_dominios AS D";
$tdatagr_fico_tarefas_por_prioridade[".sqlWhereExpr"] = "(A.ativ_prioridade = D.domi_valor)  AND D.domi_grupo = 'PRIORIDADE_ATIVIDADE'";
$tdatagr_fico_tarefas_por_prioridade[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "Todas",
	'name' => "<img src=\"images/info.png\" alt=\"\" /> Todas",
	'nameType' => 'Text',
	'where' => "ativ_concluida = ativ_concluida",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Nao_Concluidas",
	'name' => "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Não Concluídas",
	'nameType' => 'Text',
	'where' => "ativ_concluida = 0",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Concluidas",
	'name' => "<img src=\"images/circle_green_16.png\" alt=\"\" /> Concluídas",
	'nameType' => 'Text',
	'where' => "ativ_concluida = 1",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatagr_fico_tarefas_por_prioridade[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagr_fico_tarefas_por_prioridade[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagr_fico_tarefas_por_prioridade[".arrGroupsPerPage"] = $arrGPP;

$tdatagr_fico_tarefas_por_prioridade[".highlightSearchResults"] = true;

$tableKeysgr_fico_tarefas_por_prioridade = array();
$tdatagr_fico_tarefas_por_prioridade[".Keys"] = $tableKeysgr_fico_tarefas_por_prioridade;


$tdatagr_fico_tarefas_por_prioridade[".hideMobileList"] = array();




//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_por_Prioridade","clie_id");
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


	$tdatagr_fico_tarefas_por_prioridade["clie_id"] = $fdata;
		$tdatagr_fico_tarefas_por_prioridade[".searchableFields"][] = "clie_id";
//	domi_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "domi_valor";
	$fdata["GoodName"] = "domi_valor";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_por_Prioridade","domi_valor");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "domi_valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domi_valor";

	
	
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


	$tdatagr_fico_tarefas_por_prioridade["domi_valor"] = $fdata;
		$tdatagr_fico_tarefas_por_prioridade[".searchableFields"][] = "domi_valor";
//	Prioridade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Prioridade";
	$fdata["GoodName"] = "Prioridade";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_por_Prioridade","Prioridade");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "Prioridade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domi_exibe || ' (' || COUNT(A.ativ_id) || ')'";

	
	
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


	$tdatagr_fico_tarefas_por_prioridade["Prioridade"] = $fdata;
		$tdatagr_fico_tarefas_por_prioridade[".searchableFields"][] = "Prioridade";
//	Qtde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Qtde";
	$fdata["GoodName"] = "Qtde";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_por_Prioridade","Qtde");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "Qtde";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(A.ativ_id)";

	
	
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


	$tdatagr_fico_tarefas_por_prioridade["Qtde"] = $fdata;
		$tdatagr_fico_tarefas_por_prioridade[".searchableFields"][] = "Qtde";

	$tdatagr_fico_tarefas_por_prioridade[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Gráfico Tarefas por Prioridade</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatagr_fico_tarefas_por_prioridade[".chartXml"] .= '<attr value="0">
			<attr value="name">Qtde</attr>';
	$tdatagr_fico_tarefas_por_prioridade[".chartXml"] .= '</attr>';
	$tdatagr_fico_tarefas_por_prioridade[".chartXml"] .= '<attr value="1">
		<attr value="name">Prioridade</attr>
	</attr>';
	$tdatagr_fico_tarefas_por_prioridade[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatagr_fico_tarefas_por_prioridade[".chartXml"] .= '<attr value="head">'.xmlencode("Tarefas por Prioridade").'</attr>
<attr value="foot">'.xmlencode("Quantidades por Prioridade").'</attr>
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
$tdatagr_fico_tarefas_por_prioridade[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatagr_fico_tarefas_por_prioridade[".chartXml"] .= '<attr value="0">
		<attr value="name">clie_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_por_Prioridade","clie_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_tarefas_por_prioridade[".chartXml"] .= '<attr value="1">
		<attr value="name">domi_valor</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_por_Prioridade","domi_valor")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_tarefas_por_prioridade[".chartXml"] .= '<attr value="2">
		<attr value="name">Prioridade</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_por_Prioridade","Prioridade")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_tarefas_por_prioridade[".chartXml"] .= '<attr value="3">
		<attr value="name">Qtde</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_por_Prioridade","Qtde")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatagr_fico_tarefas_por_prioridade[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Gráfico Tarefas por Prioridade</attr>
<attr value="short_table_name">gr_fico_tarefas_por_prioridade</attr>
</attr>

</chart>';

$tables_data["Gráfico Tarefas por Prioridade"]=&$tdatagr_fico_tarefas_por_prioridade;
$field_labels["Gr_fico_Tarefas_por_Prioridade"] = &$fieldLabelsgr_fico_tarefas_por_prioridade;
$fieldToolTips["Gr_fico_Tarefas_por_Prioridade"] = &$fieldToolTipsgr_fico_tarefas_por_prioridade;
$placeHolders["Gr_fico_Tarefas_por_Prioridade"] = &$placeHoldersgr_fico_tarefas_por_prioridade;
$page_titles["Gr_fico_Tarefas_por_Prioridade"] = &$pageTitlesgr_fico_tarefas_por_prioridade;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Gráfico Tarefas por Prioridade"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Gráfico Tarefas por Prioridade"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_gr_fico_tarefas_por_prioridade()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "A.clie_id,  domi_valor,  domi_exibe || ' (' || COUNT(A.ativ_id) || ')' AS Prioridade,  COUNT(A.ativ_id) AS Qtde";
$proto0["m_strFrom"] = "FROM tb_atividade AS A  , tb_dominios AS D";
$proto0["m_strWhere"] = "(A.ativ_prioridade = D.domi_valor)  AND D.domi_grupo = 'PRIORIDADE_ATIVIDADE'";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(A.ativ_prioridade = D.domi_valor)  AND D.domi_grupo = 'PRIORIDADE_ATIVIDADE'";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(A.ativ_prioridade = D.domi_valor)  AND D.domi_grupo = 'PRIORIDADE_ATIVIDADE'"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "A.ativ_prioridade = D.domi_valor";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ativ_prioridade",
	"m_strTable" => "A",
	"m_srcTableName" => "Gráfico Tarefas por Prioridade"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= D.domi_valor";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "D.domi_grupo = 'PRIORIDADE_ATIVIDADE'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "domi_grupo",
	"m_strTable" => "D",
	"m_srcTableName" => "Gráfico Tarefas por Prioridade"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 'PRIORIDADE_ATIVIDADE'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "A",
	"m_srcTableName" => "Gráfico Tarefas por Prioridade"
));

$proto10["m_sql"] = "A.clie_id";
$proto10["m_srcTableName"] = "Gráfico Tarefas por Prioridade";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "domi_valor"
));

$proto12["m_sql"] = "domi_valor";
$proto12["m_srcTableName"] = "Gráfico Tarefas por Prioridade";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "domi_exibe || ' (' || COUNT(A.ativ_id) || ')'"
));

$proto14["m_sql"] = "domi_exibe || ' (' || COUNT(A.ativ_id) || ')'";
$proto14["m_srcTableName"] = "Gráfico Tarefas por Prioridade";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Prioridade";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_COUNT";
$proto17["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ativ_id",
	"m_strTable" => "A",
	"m_srcTableName" => "Gráfico Tarefas por Prioridade"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(A.ativ_id)";
$proto16["m_srcTableName"] = "Gráfico Tarefas por Prioridade";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Qtde";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "tb_atividade";
$proto20["m_srcTableName"] = "Gráfico Tarefas por Prioridade";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ativ_id";
$proto20["m_columns"][] = "clie_id";
$proto20["m_columns"][] = "ativ_nm";
$proto20["m_columns"][] = "ativ_ds";
$proto20["m_columns"][] = "lista_id";
$proto20["m_columns"][] = "stat_id";
$proto20["m_columns"][] = "ativ_fl_ativo";
$proto20["m_columns"][] = "ativ_prioridade";
$proto20["m_columns"][] = "ativ_concluida";
$proto20["m_columns"][] = "ativ_dt_ini";
$proto20["m_columns"][] = "ativ_dt_fim";
$proto20["m_columns"][] = "inclu_login";
$proto20["m_columns"][] = "inclu_dt";
$proto20["m_columns"][] = "alter_login";
$proto20["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "tb_atividade AS A";
$proto19["m_alias"] = "A";
$proto19["m_srcTableName"] = "Gráfico Tarefas por Prioridade";
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
												$proto23=array();
$proto23["m_link"] = "SQLL_CROSSJOIN";
			$proto24=array();
$proto24["m_strName"] = "tb_dominios";
$proto24["m_srcTableName"] = "Gráfico Tarefas por Prioridade";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "domi_id";
$proto24["m_columns"][] = "domi_grupo";
$proto24["m_columns"][] = "domi_ordem";
$proto24["m_columns"][] = "domi_valor";
$proto24["m_columns"][] = "domi_exibe";
$proto24["m_columns"][] = "inclu_login";
$proto24["m_columns"][] = "inclu_dt";
$proto24["m_columns"][] = "alter_login";
$proto24["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "tb_dominios AS D";
$proto23["m_alias"] = "D";
$proto23["m_srcTableName"] = "Gráfico Tarefas por Prioridade";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "A",
	"m_srcTableName" => "Gráfico Tarefas por Prioridade"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "domi_valor",
	"m_strTable" => "D",
	"m_srcTableName" => "Gráfico Tarefas por Prioridade"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "domi_exibe",
	"m_strTable" => "D",
	"m_srcTableName" => "Gráfico Tarefas por Prioridade"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Gráfico Tarefas por Prioridade";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gr_fico_tarefas_por_prioridade = createSqlQuery_gr_fico_tarefas_por_prioridade();


	
		;

				

$tdatagr_fico_tarefas_por_prioridade[".sqlquery"] = $queryData_gr_fico_tarefas_por_prioridade;

$tableEvents["Gráfico Tarefas por Prioridade"] = new eventsBase;
$tdatagr_fico_tarefas_por_prioridade[".hasEvents"] = false;

?>