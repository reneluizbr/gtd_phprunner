<?php



$tdataproc_limpar_tarefas_de_lista = array();
$tdataproc_limpar_tarefas_de_lista[".searchableFields"] = array();
$tdataproc_limpar_tarefas_de_lista[".ShortName"] = "proc_limpar_tarefas_de_lista";
$tdataproc_limpar_tarefas_de_lista[".OwnerID"] = "";
$tdataproc_limpar_tarefas_de_lista[".OriginalTable"] = "proc_limpar_tarefas_de_lista";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"search\":\"search\"}" );

$tdataproc_limpar_tarefas_de_lista[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" );
$tdataproc_limpar_tarefas_de_lista[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" ) );
$tdataproc_limpar_tarefas_de_lista[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsproc_limpar_tarefas_de_lista = array();
$fieldToolTipsproc_limpar_tarefas_de_lista = array();
$pageTitlesproc_limpar_tarefas_de_lista = array();
$placeHoldersproc_limpar_tarefas_de_lista = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproc_limpar_tarefas_de_lista["English"] = array();
	$fieldToolTipsproc_limpar_tarefas_de_lista["English"] = array();
	$placeHoldersproc_limpar_tarefas_de_lista["English"] = array();
	$pageTitlesproc_limpar_tarefas_de_lista["English"] = array();
	$fieldLabelsproc_limpar_tarefas_de_lista["English"]["ID"] = "ID";
	$fieldToolTipsproc_limpar_tarefas_de_lista["English"]["ID"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["English"]["ID"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["English"]["DataHora"] = "Data Hora";
	$fieldToolTipsproc_limpar_tarefas_de_lista["English"]["DataHora"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["English"]["DataHora"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["English"]["AnterioresAData"] = "Anteriores AData";
	$fieldToolTipsproc_limpar_tarefas_de_lista["English"]["AnterioresAData"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["English"]["AnterioresAData"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["English"]["SomenteComDataConclusao"] = "Somente Com Data Conclusao";
	$fieldToolTipsproc_limpar_tarefas_de_lista["English"]["SomenteComDataConclusao"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["English"]["SomenteComDataConclusao"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["English"]["SomenteSemComentarios"] = "Somente Sem Comentarios";
	$fieldToolTipsproc_limpar_tarefas_de_lista["English"]["SomenteSemComentarios"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["English"]["SomenteSemComentarios"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["English"]["SomenteDoStatus"] = "Somente Do Status";
	$fieldToolTipsproc_limpar_tarefas_de_lista["English"]["SomenteDoStatus"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["English"]["SomenteDoStatus"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["English"]["lista_id"] = "Lista Id";
	$fieldToolTipsproc_limpar_tarefas_de_lista["English"]["lista_id"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["English"]["lista_id"] = "";
	$pageTitlesproc_limpar_tarefas_de_lista["English"]["add"] = "Proc Limpar Tarefas De Lista, Adicionar Novo";
	if (count($fieldToolTipsproc_limpar_tarefas_de_lista["English"]))
		$tdataproc_limpar_tarefas_de_lista[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"] = array();
	$fieldToolTipsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"] = array();
	$placeHoldersproc_limpar_tarefas_de_lista["Portuguese(Brazil)"] = array();
	$pageTitlesproc_limpar_tarefas_de_lista["Portuguese(Brazil)"] = array();
	$fieldLabelsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["ID"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["DataHora"] = "Data Hora";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["DataHora"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["DataHora"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["AnterioresAData"] = "Anteriores à Data";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["AnterioresAData"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["AnterioresAData"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["SomenteComDataConclusao"] = "Somente Com Data Conclusão";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["SomenteComDataConclusao"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["SomenteComDataConclusao"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["SomenteSemComentarios"] = "Somente Sem Comentários";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["SomenteSemComentarios"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["SomenteSemComentarios"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["SomenteDoStatus"] = "Somente do Status";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["SomenteDoStatus"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["SomenteDoStatus"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["lista_id"] = "Lista Id";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["lista_id"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["lista_id"] = "";
	$pageTitlesproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]["add"] = "Procedimento para Limpeza de Tarefas de uma Lista";
	if (count($fieldToolTipsproc_limpar_tarefas_de_lista["Portuguese(Brazil)"]))
		$tdataproc_limpar_tarefas_de_lista[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsproc_limpar_tarefas_de_lista["Spanish"] = array();
	$fieldToolTipsproc_limpar_tarefas_de_lista["Spanish"] = array();
	$placeHoldersproc_limpar_tarefas_de_lista["Spanish"] = array();
	$pageTitlesproc_limpar_tarefas_de_lista["Spanish"] = array();
	$fieldLabelsproc_limpar_tarefas_de_lista["Spanish"]["ID"] = "ID";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Spanish"]["ID"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Spanish"]["ID"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["Spanish"]["DataHora"] = "Data Hora";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Spanish"]["DataHora"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Spanish"]["DataHora"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["Spanish"]["AnterioresAData"] = "Anteriores AData";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Spanish"]["AnterioresAData"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Spanish"]["AnterioresAData"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["Spanish"]["SomenteComDataConclusao"] = "Somente Com Data Conclusao";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Spanish"]["SomenteComDataConclusao"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Spanish"]["SomenteComDataConclusao"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["Spanish"]["SomenteSemComentarios"] = "Somente Sem Comentarios";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Spanish"]["SomenteSemComentarios"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Spanish"]["SomenteSemComentarios"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["Spanish"]["SomenteDoStatus"] = "Somente Do Status";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Spanish"]["SomenteDoStatus"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Spanish"]["SomenteDoStatus"] = "";
	$fieldLabelsproc_limpar_tarefas_de_lista["Spanish"]["lista_id"] = "Lista Id";
	$fieldToolTipsproc_limpar_tarefas_de_lista["Spanish"]["lista_id"] = "";
	$placeHoldersproc_limpar_tarefas_de_lista["Spanish"]["lista_id"] = "";
	if (count($fieldToolTipsproc_limpar_tarefas_de_lista["Spanish"]))
		$tdataproc_limpar_tarefas_de_lista[".isUseToolTips"] = true;
}


	$tdataproc_limpar_tarefas_de_lista[".NCSearch"] = true;



$tdataproc_limpar_tarefas_de_lista[".shortTableName"] = "proc_limpar_tarefas_de_lista";
$tdataproc_limpar_tarefas_de_lista[".nSecOptions"] = 0;

$tdataproc_limpar_tarefas_de_lista[".mainTableOwnerID"] = "";
$tdataproc_limpar_tarefas_de_lista[".entityType"] = 0;

$tdataproc_limpar_tarefas_de_lista[".strOriginalTableName"] = "proc_limpar_tarefas_de_lista";

	



$tdataproc_limpar_tarefas_de_lista[".showAddInPopup"] = false;

$tdataproc_limpar_tarefas_de_lista[".showEditInPopup"] = false;

$tdataproc_limpar_tarefas_de_lista[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproc_limpar_tarefas_de_lista[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproc_limpar_tarefas_de_lista[".listAjax"] = false;
//	temporary
$tdataproc_limpar_tarefas_de_lista[".listAjax"] = false;

	$tdataproc_limpar_tarefas_de_lista[".audit"] = false;

	$tdataproc_limpar_tarefas_de_lista[".locking"] = false;


$pages = $tdataproc_limpar_tarefas_de_lista[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproc_limpar_tarefas_de_lista[".edit"] = true;
	$tdataproc_limpar_tarefas_de_lista[".afterEditAction"] = 1;
	$tdataproc_limpar_tarefas_de_lista[".closePopupAfterEdit"] = 1;
	$tdataproc_limpar_tarefas_de_lista[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproc_limpar_tarefas_de_lista[".add"] = true;
$tdataproc_limpar_tarefas_de_lista[".afterAddAction"] = 0;
$tdataproc_limpar_tarefas_de_lista[".closePopupAfterAdd"] = 1;
$tdataproc_limpar_tarefas_de_lista[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataproc_limpar_tarefas_de_lista[".list"] = true;
}



$tdataproc_limpar_tarefas_de_lista[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproc_limpar_tarefas_de_lista[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproc_limpar_tarefas_de_lista[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproc_limpar_tarefas_de_lista[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproc_limpar_tarefas_de_lista[".printFriendly"] = true;
}



$tdataproc_limpar_tarefas_de_lista[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproc_limpar_tarefas_de_lista[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproc_limpar_tarefas_de_lista[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproc_limpar_tarefas_de_lista[".isUseAjaxSuggest"] = true;

$tdataproc_limpar_tarefas_de_lista[".rowHighlite"] = true;



									

$tdataproc_limpar_tarefas_de_lista[".ajaxCodeSnippetAdded"] = false;

$tdataproc_limpar_tarefas_de_lista[".buttonsAdded"] = false;

$tdataproc_limpar_tarefas_de_lista[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproc_limpar_tarefas_de_lista[".isUseTimeForSearch"] = false;


$tdataproc_limpar_tarefas_de_lista[".badgeColor"] = "CD853F";


$tdataproc_limpar_tarefas_de_lista[".allSearchFields"] = array();
$tdataproc_limpar_tarefas_de_lista[".filterFields"] = array();
$tdataproc_limpar_tarefas_de_lista[".requiredSearchFields"] = array();

$tdataproc_limpar_tarefas_de_lista[".googleLikeFields"] = array();
$tdataproc_limpar_tarefas_de_lista[".googleLikeFields"][] = "ID";
$tdataproc_limpar_tarefas_de_lista[".googleLikeFields"][] = "DataHora";
$tdataproc_limpar_tarefas_de_lista[".googleLikeFields"][] = "AnterioresAData";
$tdataproc_limpar_tarefas_de_lista[".googleLikeFields"][] = "SomenteComDataConclusao";
$tdataproc_limpar_tarefas_de_lista[".googleLikeFields"][] = "SomenteSemComentarios";
$tdataproc_limpar_tarefas_de_lista[".googleLikeFields"][] = "SomenteDoStatus";
$tdataproc_limpar_tarefas_de_lista[".googleLikeFields"][] = "lista_id";



$tdataproc_limpar_tarefas_de_lista[".tableType"] = "list";

$tdataproc_limpar_tarefas_de_lista[".printerPageOrientation"] = 0;
$tdataproc_limpar_tarefas_de_lista[".nPrinterPageScale"] = 100;

$tdataproc_limpar_tarefas_de_lista[".nPrinterSplitRecords"] = 40;

$tdataproc_limpar_tarefas_de_lista[".geocodingEnabled"] = false;










$tdataproc_limpar_tarefas_de_lista[".pageSize"] = 20;

$tdataproc_limpar_tarefas_de_lista[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproc_limpar_tarefas_de_lista[".strOrderBy"] = $tstrOrderBy;

$tdataproc_limpar_tarefas_de_lista[".orderindexes"] = array();

$tdataproc_limpar_tarefas_de_lista[".sqlHead"] = "SELECT ID,  	DataHora,  	AnterioresAData,  	SomenteComDataConclusao,  	SomenteSemComentarios,  	SomenteDoStatus,  	lista_id";
$tdataproc_limpar_tarefas_de_lista[".sqlFrom"] = "FROM proc_limpar_tarefas_de_lista";
$tdataproc_limpar_tarefas_de_lista[".sqlWhereExpr"] = "";
$tdataproc_limpar_tarefas_de_lista[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproc_limpar_tarefas_de_lista[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproc_limpar_tarefas_de_lista[".arrGroupsPerPage"] = $arrGPP;

$tdataproc_limpar_tarefas_de_lista[".highlightSearchResults"] = true;

$tableKeysproc_limpar_tarefas_de_lista = array();
$tableKeysproc_limpar_tarefas_de_lista[] = "ID";
$tdataproc_limpar_tarefas_de_lista[".Keys"] = $tableKeysproc_limpar_tarefas_de_lista;


$tdataproc_limpar_tarefas_de_lista[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "proc_limpar_tarefas_de_lista";
	$fdata["Label"] = GetFieldLabel("proc_limpar_tarefas_de_lista","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdataproc_limpar_tarefas_de_lista["ID"] = $fdata;
		$tdataproc_limpar_tarefas_de_lista[".searchableFields"][] = "ID";
//	DataHora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DataHora";
	$fdata["GoodName"] = "DataHora";
	$fdata["ownerTable"] = "proc_limpar_tarefas_de_lista";
	$fdata["Label"] = GetFieldLabel("proc_limpar_tarefas_de_lista","DataHora");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "DataHora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DataHora";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataproc_limpar_tarefas_de_lista["DataHora"] = $fdata;
		$tdataproc_limpar_tarefas_de_lista[".searchableFields"][] = "DataHora";
//	AnterioresAData
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AnterioresAData";
	$fdata["GoodName"] = "AnterioresAData";
	$fdata["ownerTable"] = "proc_limpar_tarefas_de_lista";
	$fdata["Label"] = GetFieldLabel("proc_limpar_tarefas_de_lista","AnterioresAData");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "AnterioresAData";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AnterioresAData";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataproc_limpar_tarefas_de_lista["AnterioresAData"] = $fdata;
		$tdataproc_limpar_tarefas_de_lista[".searchableFields"][] = "AnterioresAData";
//	SomenteComDataConclusao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SomenteComDataConclusao";
	$fdata["GoodName"] = "SomenteComDataConclusao";
	$fdata["ownerTable"] = "proc_limpar_tarefas_de_lista";
	$fdata["Label"] = GetFieldLabel("proc_limpar_tarefas_de_lista","SomenteComDataConclusao");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "SomenteComDataConclusao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SomenteComDataConclusao";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproc_limpar_tarefas_de_lista["SomenteComDataConclusao"] = $fdata;
		$tdataproc_limpar_tarefas_de_lista[".searchableFields"][] = "SomenteComDataConclusao";
//	SomenteSemComentarios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SomenteSemComentarios";
	$fdata["GoodName"] = "SomenteSemComentarios";
	$fdata["ownerTable"] = "proc_limpar_tarefas_de_lista";
	$fdata["Label"] = GetFieldLabel("proc_limpar_tarefas_de_lista","SomenteSemComentarios");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "SomenteSemComentarios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SomenteSemComentarios";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproc_limpar_tarefas_de_lista["SomenteSemComentarios"] = $fdata;
		$tdataproc_limpar_tarefas_de_lista[".searchableFields"][] = "SomenteSemComentarios";
//	SomenteDoStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SomenteDoStatus";
	$fdata["GoodName"] = "SomenteDoStatus";
	$fdata["ownerTable"] = "proc_limpar_tarefas_de_lista";
	$fdata["Label"] = GetFieldLabel("proc_limpar_tarefas_de_lista","SomenteDoStatus");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "SomenteDoStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SomenteDoStatus";

	
	
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
	$edata["LookupTable"] = "tb_status_atividades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stat_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "stat_nm";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproc_limpar_tarefas_de_lista["SomenteDoStatus"] = $fdata;
		$tdataproc_limpar_tarefas_de_lista[".searchableFields"][] = "SomenteDoStatus";
//	lista_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "lista_id";
	$fdata["GoodName"] = "lista_id";
	$fdata["ownerTable"] = "proc_limpar_tarefas_de_lista";
	$fdata["Label"] = GetFieldLabel("proc_limpar_tarefas_de_lista","lista_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "lista_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lista_id";

	
	
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
	$edata["LookupTable"] = "tb_lista_atividades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "lista_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "lista_nm";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproc_limpar_tarefas_de_lista["lista_id"] = $fdata;
		$tdataproc_limpar_tarefas_de_lista[".searchableFields"][] = "lista_id";


$tables_data["proc_limpar_tarefas_de_lista"]=&$tdataproc_limpar_tarefas_de_lista;
$field_labels["proc_limpar_tarefas_de_lista"] = &$fieldLabelsproc_limpar_tarefas_de_lista;
$fieldToolTips["proc_limpar_tarefas_de_lista"] = &$fieldToolTipsproc_limpar_tarefas_de_lista;
$placeHolders["proc_limpar_tarefas_de_lista"] = &$placeHoldersproc_limpar_tarefas_de_lista;
$page_titles["proc_limpar_tarefas_de_lista"] = &$pageTitlesproc_limpar_tarefas_de_lista;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["proc_limpar_tarefas_de_lista"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["proc_limpar_tarefas_de_lista"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_proc_limpar_tarefas_de_lista()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	DataHora,  	AnterioresAData,  	SomenteComDataConclusao,  	SomenteSemComentarios,  	SomenteDoStatus,  	lista_id";
$proto0["m_strFrom"] = "FROM proc_limpar_tarefas_de_lista";
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
	"m_strName" => "ID",
	"m_strTable" => "proc_limpar_tarefas_de_lista",
	"m_srcTableName" => "proc_limpar_tarefas_de_lista"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "proc_limpar_tarefas_de_lista";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DataHora",
	"m_strTable" => "proc_limpar_tarefas_de_lista",
	"m_srcTableName" => "proc_limpar_tarefas_de_lista"
));

$proto8["m_sql"] = "DataHora";
$proto8["m_srcTableName"] = "proc_limpar_tarefas_de_lista";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AnterioresAData",
	"m_strTable" => "proc_limpar_tarefas_de_lista",
	"m_srcTableName" => "proc_limpar_tarefas_de_lista"
));

$proto10["m_sql"] = "AnterioresAData";
$proto10["m_srcTableName"] = "proc_limpar_tarefas_de_lista";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SomenteComDataConclusao",
	"m_strTable" => "proc_limpar_tarefas_de_lista",
	"m_srcTableName" => "proc_limpar_tarefas_de_lista"
));

$proto12["m_sql"] = "SomenteComDataConclusao";
$proto12["m_srcTableName"] = "proc_limpar_tarefas_de_lista";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SomenteSemComentarios",
	"m_strTable" => "proc_limpar_tarefas_de_lista",
	"m_srcTableName" => "proc_limpar_tarefas_de_lista"
));

$proto14["m_sql"] = "SomenteSemComentarios";
$proto14["m_srcTableName"] = "proc_limpar_tarefas_de_lista";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SomenteDoStatus",
	"m_strTable" => "proc_limpar_tarefas_de_lista",
	"m_srcTableName" => "proc_limpar_tarefas_de_lista"
));

$proto16["m_sql"] = "SomenteDoStatus";
$proto16["m_srcTableName"] = "proc_limpar_tarefas_de_lista";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "lista_id",
	"m_strTable" => "proc_limpar_tarefas_de_lista",
	"m_srcTableName" => "proc_limpar_tarefas_de_lista"
));

$proto18["m_sql"] = "lista_id";
$proto18["m_srcTableName"] = "proc_limpar_tarefas_de_lista";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "proc_limpar_tarefas_de_lista";
$proto21["m_srcTableName"] = "proc_limpar_tarefas_de_lista";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "DataHora";
$proto21["m_columns"][] = "AnterioresAData";
$proto21["m_columns"][] = "SomenteComDataConclusao";
$proto21["m_columns"][] = "SomenteSemComentarios";
$proto21["m_columns"][] = "SomenteDoStatus";
$proto21["m_columns"][] = "lista_id";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "proc_limpar_tarefas_de_lista";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "proc_limpar_tarefas_de_lista";
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
$proto0["m_srcTableName"]="proc_limpar_tarefas_de_lista";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_proc_limpar_tarefas_de_lista = createSqlQuery_proc_limpar_tarefas_de_lista();


	
		;

							

$tdataproc_limpar_tarefas_de_lista[".sqlquery"] = $queryData_proc_limpar_tarefas_de_lista;

include_once(getabspath("include/proc_limpar_tarefas_de_lista_events.php"));
$tableEvents["proc_limpar_tarefas_de_lista"] = new eventclass_proc_limpar_tarefas_de_lista;
$tdataproc_limpar_tarefas_de_lista[".hasEvents"] = true;

?>