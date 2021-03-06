<?php



$tdatagr_fico_tarefas_criadas_por_usu_rio = array();
$tdatagr_fico_tarefas_criadas_por_usu_rio[".searchableFields"] = array();
$tdatagr_fico_tarefas_criadas_por_usu_rio[".ShortName"] = "gr_fico_tarefas_criadas_por_usu_rio";
$tdatagr_fico_tarefas_criadas_por_usu_rio[".OwnerID"] = "";
$tdatagr_fico_tarefas_criadas_por_usu_rio[".OriginalTable"] = "tb_atividade";


$defaultPages = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );

$tdatagr_fico_tarefas_criadas_por_usu_rio[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatagr_fico_tarefas_criadas_por_usu_rio[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatagr_fico_tarefas_criadas_por_usu_rio[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio = array();
$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio = array();
$pageTitlesgr_fico_tarefas_criadas_por_usu_rio = array();
$placeHoldersgr_fico_tarefas_criadas_por_usu_rio = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio["English"] = array();
	$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["English"] = array();
	$placeHoldersgr_fico_tarefas_criadas_por_usu_rio["English"] = array();
	$pageTitlesgr_fico_tarefas_criadas_por_usu_rio["English"] = array();
	$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio["English"]["qtde"] = "Qtde";
	$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["English"]["qtde"] = "";
	$placeHoldersgr_fico_tarefas_criadas_por_usu_rio["English"]["qtde"] = "";
	$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio["English"]["clie_id"] = "Clie Id";
	$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["English"]["clie_id"] = "";
	$placeHoldersgr_fico_tarefas_criadas_por_usu_rio["English"]["clie_id"] = "";
	$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["English"]["inclu_login"] = "";
	$placeHoldersgr_fico_tarefas_criadas_por_usu_rio["English"]["inclu_login"] = "";
	if (count($fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["English"]))
		$tdatagr_fico_tarefas_criadas_por_usu_rio[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"] = array();
	$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"] = array();
	$placeHoldersgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"] = array();
	$pageTitlesgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"] = array();
	$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"]["qtde"] = "Qtde";
	$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"]["qtde"] = "";
	$placeHoldersgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"]["qtde"] = "";
	$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"]["clie_id"] = "Cliente";
	$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHoldersgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHoldersgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"]["inclu_login"] = "";
	if (count($fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["Portuguese(Brazil)"]))
		$tdatagr_fico_tarefas_criadas_por_usu_rio[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio["Spanish"] = array();
	$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["Spanish"] = array();
	$placeHoldersgr_fico_tarefas_criadas_por_usu_rio["Spanish"] = array();
	$pageTitlesgr_fico_tarefas_criadas_por_usu_rio["Spanish"] = array();
	$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio["Spanish"]["qtde"] = "Qtde";
	$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["Spanish"]["qtde"] = "";
	$placeHoldersgr_fico_tarefas_criadas_por_usu_rio["Spanish"]["qtde"] = "";
	$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio["Spanish"]["clie_id"] = "Clie Id";
	$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["Spanish"]["clie_id"] = "";
	$placeHoldersgr_fico_tarefas_criadas_por_usu_rio["Spanish"]["clie_id"] = "";
	$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["Spanish"]["inclu_login"] = "";
	$placeHoldersgr_fico_tarefas_criadas_por_usu_rio["Spanish"]["inclu_login"] = "";
	if (count($fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio["Spanish"]))
		$tdatagr_fico_tarefas_criadas_por_usu_rio[".isUseToolTips"] = true;
}


	$tdatagr_fico_tarefas_criadas_por_usu_rio[".NCSearch"] = true;

	$tdatagr_fico_tarefas_criadas_por_usu_rio[".ChartRefreshTime"] = 0;


$tdatagr_fico_tarefas_criadas_por_usu_rio[".shortTableName"] = "gr_fico_tarefas_criadas_por_usu_rio";
$tdatagr_fico_tarefas_criadas_por_usu_rio[".nSecOptions"] = 0;

$tdatagr_fico_tarefas_criadas_por_usu_rio[".mainTableOwnerID"] = "";
$tdatagr_fico_tarefas_criadas_por_usu_rio[".entityType"] = 3;

$tdatagr_fico_tarefas_criadas_por_usu_rio[".strOriginalTableName"] = "tb_atividade";

	



$tdatagr_fico_tarefas_criadas_por_usu_rio[".showAddInPopup"] = false;

$tdatagr_fico_tarefas_criadas_por_usu_rio[".showEditInPopup"] = false;

$tdatagr_fico_tarefas_criadas_por_usu_rio[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagr_fico_tarefas_criadas_por_usu_rio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagr_fico_tarefas_criadas_por_usu_rio[".listAjax"] = false;
//	temporary
$tdatagr_fico_tarefas_criadas_por_usu_rio[".listAjax"] = false;

	$tdatagr_fico_tarefas_criadas_por_usu_rio[".audit"] = false;

	$tdatagr_fico_tarefas_criadas_por_usu_rio[".locking"] = false;


$pages = $tdatagr_fico_tarefas_criadas_por_usu_rio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagr_fico_tarefas_criadas_por_usu_rio[".edit"] = true;
	$tdatagr_fico_tarefas_criadas_por_usu_rio[".afterEditAction"] = 1;
	$tdatagr_fico_tarefas_criadas_por_usu_rio[".closePopupAfterEdit"] = 1;
	$tdatagr_fico_tarefas_criadas_por_usu_rio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagr_fico_tarefas_criadas_por_usu_rio[".add"] = true;
$tdatagr_fico_tarefas_criadas_por_usu_rio[".afterAddAction"] = 1;
$tdatagr_fico_tarefas_criadas_por_usu_rio[".closePopupAfterAdd"] = 1;
$tdatagr_fico_tarefas_criadas_por_usu_rio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagr_fico_tarefas_criadas_por_usu_rio[".list"] = true;
}



$tdatagr_fico_tarefas_criadas_por_usu_rio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagr_fico_tarefas_criadas_por_usu_rio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagr_fico_tarefas_criadas_por_usu_rio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagr_fico_tarefas_criadas_por_usu_rio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagr_fico_tarefas_criadas_por_usu_rio[".printFriendly"] = true;
}



$tdatagr_fico_tarefas_criadas_por_usu_rio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagr_fico_tarefas_criadas_por_usu_rio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagr_fico_tarefas_criadas_por_usu_rio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagr_fico_tarefas_criadas_por_usu_rio[".isUseAjaxSuggest"] = true;




									

$tdatagr_fico_tarefas_criadas_por_usu_rio[".ajaxCodeSnippetAdded"] = false;

$tdatagr_fico_tarefas_criadas_por_usu_rio[".buttonsAdded"] = false;

$tdatagr_fico_tarefas_criadas_por_usu_rio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagr_fico_tarefas_criadas_por_usu_rio[".isUseTimeForSearch"] = false;


$tdatagr_fico_tarefas_criadas_por_usu_rio[".badgeColor"] = "DAA520";


$tdatagr_fico_tarefas_criadas_por_usu_rio[".allSearchFields"] = array();
$tdatagr_fico_tarefas_criadas_por_usu_rio[".filterFields"] = array();
$tdatagr_fico_tarefas_criadas_por_usu_rio[".requiredSearchFields"] = array();

$tdatagr_fico_tarefas_criadas_por_usu_rio[".googleLikeFields"] = array();
$tdatagr_fico_tarefas_criadas_por_usu_rio[".googleLikeFields"][] = "clie_id";
$tdatagr_fico_tarefas_criadas_por_usu_rio[".googleLikeFields"][] = "inclu_login";
$tdatagr_fico_tarefas_criadas_por_usu_rio[".googleLikeFields"][] = "qtde";



$tdatagr_fico_tarefas_criadas_por_usu_rio[".tableType"] = "chart";

$tdatagr_fico_tarefas_criadas_por_usu_rio[".printerPageOrientation"] = 0;
$tdatagr_fico_tarefas_criadas_por_usu_rio[".nPrinterPageScale"] = 100;

$tdatagr_fico_tarefas_criadas_por_usu_rio[".nPrinterSplitRecords"] = 40;

$tdatagr_fico_tarefas_criadas_por_usu_rio[".geocodingEnabled"] = false;



// chart settings
$tdatagr_fico_tarefas_criadas_por_usu_rio[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagr_fico_tarefas_criadas_por_usu_rio[".strOrderBy"] = $tstrOrderBy;

$tdatagr_fico_tarefas_criadas_por_usu_rio[".orderindexes"] = array();

$tdatagr_fico_tarefas_criadas_por_usu_rio[".sqlHead"] = "SELECT clie_id,  inclu_login,  COUNT(ativ_id) AS qtde";
$tdatagr_fico_tarefas_criadas_por_usu_rio[".sqlFrom"] = "FROM tb_atividade AS \"at\"";
$tdatagr_fico_tarefas_criadas_por_usu_rio[".sqlWhereExpr"] = "(1 =1)";
$tdatagr_fico_tarefas_criadas_por_usu_rio[".sqlTail"] = "";

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
$tdatagr_fico_tarefas_criadas_por_usu_rio[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagr_fico_tarefas_criadas_por_usu_rio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagr_fico_tarefas_criadas_por_usu_rio[".arrGroupsPerPage"] = $arrGPP;

$tdatagr_fico_tarefas_criadas_por_usu_rio[".highlightSearchResults"] = true;

$tableKeysgr_fico_tarefas_criadas_por_usu_rio = array();
$tdatagr_fico_tarefas_criadas_por_usu_rio[".Keys"] = $tableKeysgr_fico_tarefas_criadas_por_usu_rio;


$tdatagr_fico_tarefas_criadas_por_usu_rio[".hideMobileList"] = array();




//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_criadas_por_Usu_rio","clie_id");
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


	$tdatagr_fico_tarefas_criadas_por_usu_rio["clie_id"] = $fdata;
		$tdatagr_fico_tarefas_criadas_por_usu_rio[".searchableFields"][] = "clie_id";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_atividade";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_criadas_por_Usu_rio","inclu_login");
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


	$tdatagr_fico_tarefas_criadas_por_usu_rio["inclu_login"] = $fdata;
		$tdatagr_fico_tarefas_criadas_por_usu_rio[".searchableFields"][] = "inclu_login";
//	qtde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "qtde";
	$fdata["GoodName"] = "qtde";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Gr_fico_Tarefas_criadas_por_Usu_rio","qtde");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "qtde";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(ativ_id)";

	
	
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


	$tdatagr_fico_tarefas_criadas_por_usu_rio["qtde"] = $fdata;
		$tdatagr_fico_tarefas_criadas_por_usu_rio[".searchableFields"][] = "qtde";

	$tdatagr_fico_tarefas_criadas_por_usu_rio[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Gráfico Tarefas criadas por Usuário</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatagr_fico_tarefas_criadas_por_usu_rio[".chartXml"] .= '<attr value="0">
			<attr value="name">qtde</attr>';
	$tdatagr_fico_tarefas_criadas_por_usu_rio[".chartXml"] .= '</attr>';
	$tdatagr_fico_tarefas_criadas_por_usu_rio[".chartXml"] .= '<attr value="1">
		<attr value="name">inclu_login</attr>
	</attr>';
	$tdatagr_fico_tarefas_criadas_por_usu_rio[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatagr_fico_tarefas_criadas_por_usu_rio[".chartXml"] .= '<attr value="head">'.xmlencode("Tarefas criadas por Usuário").'</attr>
<attr value="foot">'.xmlencode("Quantidades por Usuário").'</attr>
<attr value="y_axis_label">'.xmlencode("clie_id").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
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
$tdatagr_fico_tarefas_criadas_por_usu_rio[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatagr_fico_tarefas_criadas_por_usu_rio[".chartXml"] .= '<attr value="0">
		<attr value="name">clie_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_criadas_por_Usu_rio","clie_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_tarefas_criadas_por_usu_rio[".chartXml"] .= '<attr value="1">
		<attr value="name">inclu_login</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_criadas_por_Usu_rio","inclu_login")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_tarefas_criadas_por_usu_rio[".chartXml"] .= '<attr value="2">
		<attr value="name">qtde</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_Tarefas_criadas_por_Usu_rio","qtde")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatagr_fico_tarefas_criadas_por_usu_rio[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Gráfico Tarefas criadas por Usuário</attr>
<attr value="short_table_name">gr_fico_tarefas_criadas_por_usu_rio</attr>
</attr>

</chart>';

$tables_data["Gráfico Tarefas criadas por Usuário"]=&$tdatagr_fico_tarefas_criadas_por_usu_rio;
$field_labels["Gr_fico_Tarefas_criadas_por_Usu_rio"] = &$fieldLabelsgr_fico_tarefas_criadas_por_usu_rio;
$fieldToolTips["Gr_fico_Tarefas_criadas_por_Usu_rio"] = &$fieldToolTipsgr_fico_tarefas_criadas_por_usu_rio;
$placeHolders["Gr_fico_Tarefas_criadas_por_Usu_rio"] = &$placeHoldersgr_fico_tarefas_criadas_por_usu_rio;
$page_titles["Gr_fico_Tarefas_criadas_por_Usu_rio"] = &$pageTitlesgr_fico_tarefas_criadas_por_usu_rio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Gráfico Tarefas criadas por Usuário"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Gráfico Tarefas criadas por Usuário"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_gr_fico_tarefas_criadas_por_usu_rio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "clie_id,  inclu_login,  COUNT(ativ_id) AS qtde";
$proto0["m_strFrom"] = "FROM tb_atividade AS \"at\"";
$proto0["m_strWhere"] = "(1 =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "1 =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_strTable" => "at",
	"m_srcTableName" => "Gráfico Tarefas criadas por Usuário"
));

$proto6["m_sql"] = "clie_id";
$proto6["m_srcTableName"] = "Gráfico Tarefas criadas por Usuário";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "at",
	"m_srcTableName" => "Gráfico Tarefas criadas por Usuário"
));

$proto8["m_sql"] = "inclu_login";
$proto8["m_srcTableName"] = "Gráfico Tarefas criadas por Usuário";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ativ_id",
	"m_strTable" => "at",
	"m_srcTableName" => "Gráfico Tarefas criadas por Usuário"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(ativ_id)";
$proto10["m_srcTableName"] = "Gráfico Tarefas criadas por Usuário";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "qtde";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "tb_atividade";
$proto14["m_srcTableName"] = "Gráfico Tarefas criadas por Usuário";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "ativ_id";
$proto14["m_columns"][] = "clie_id";
$proto14["m_columns"][] = "ativ_nm";
$proto14["m_columns"][] = "ativ_ds";
$proto14["m_columns"][] = "lista_id";
$proto14["m_columns"][] = "stat_id";
$proto14["m_columns"][] = "ativ_fl_ativo";
$proto14["m_columns"][] = "ativ_prioridade";
$proto14["m_columns"][] = "ativ_concluida";
$proto14["m_columns"][] = "ativ_dt_ini";
$proto14["m_columns"][] = "ativ_dt_fim";
$proto14["m_columns"][] = "ativ_domi_unid_tempo";
$proto14["m_columns"][] = "ativ_tempo_estimado";
$proto14["m_columns"][] = "ativ_tempo_real";
$proto14["m_columns"][] = "inclu_login";
$proto14["m_columns"][] = "inclu_dt";
$proto14["m_columns"][] = "alter_login";
$proto14["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "tb_atividade AS \"at\"";
$proto13["m_alias"] = "at";
$proto13["m_srcTableName"] = "Gráfico Tarefas criadas por Usuário";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "at",
	"m_srcTableName" => "Gráfico Tarefas criadas por Usuário"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto0["m_groupby"][]=$obj;
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "at",
	"m_srcTableName" => "Gráfico Tarefas criadas por Usuário"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Gráfico Tarefas criadas por Usuário";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gr_fico_tarefas_criadas_por_usu_rio = createSqlQuery_gr_fico_tarefas_criadas_por_usu_rio();


	
		;

			

$tdatagr_fico_tarefas_criadas_por_usu_rio[".sqlquery"] = $queryData_gr_fico_tarefas_criadas_por_usu_rio;

$tableEvents["Gráfico Tarefas criadas por Usuário"] = new eventsBase;
$tdatagr_fico_tarefas_criadas_por_usu_rio[".hasEvents"] = false;

?>