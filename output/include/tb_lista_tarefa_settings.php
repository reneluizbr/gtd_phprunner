<?php



$tdatatb_lista_tarefa = array();
$tdatatb_lista_tarefa[".searchableFields"] = array();
$tdatatb_lista_tarefa[".ShortName"] = "tb_lista_tarefa";
$tdatatb_lista_tarefa[".OwnerID"] = "clie_id";
$tdatatb_lista_tarefa[".OriginalTable"] = "tb_lista_tarefa";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_lista_tarefa[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"lista_simples\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\",\"remover_tarefas_da_lista\"]}" );
$tdatatb_lista_tarefa[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"lista_simples\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\",\"remover_tarefas_da_lista\"]}" ) );
$tdatatb_lista_tarefa[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_lista_tarefa = array();
$fieldToolTipstb_lista_tarefa = array();
$pageTitlestb_lista_tarefa = array();
$placeHolderstb_lista_tarefa = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_lista_tarefa["English"] = array();
	$fieldToolTipstb_lista_tarefa["English"] = array();
	$placeHolderstb_lista_tarefa["English"] = array();
	$pageTitlestb_lista_tarefa["English"] = array();
	$fieldLabelstb_lista_tarefa["English"]["lista_id"] = "ID";
	$fieldToolTipstb_lista_tarefa["English"]["lista_id"] = "";
	$placeHolderstb_lista_tarefa["English"]["lista_id"] = "";
	$fieldLabelstb_lista_tarefa["English"]["clie_id"] = "Customer";
	$fieldToolTipstb_lista_tarefa["English"]["clie_id"] = "";
	$placeHolderstb_lista_tarefa["English"]["clie_id"] = "";
	$fieldLabelstb_lista_tarefa["English"]["lista_nm"] = "Name";
	$fieldToolTipstb_lista_tarefa["English"]["lista_nm"] = "";
	$placeHolderstb_lista_tarefa["English"]["lista_nm"] = "";
	$fieldLabelstb_lista_tarefa["English"]["inclu_dt"] = "Included on";
	$fieldToolTipstb_lista_tarefa["English"]["inclu_dt"] = "";
	$placeHolderstb_lista_tarefa["English"]["inclu_dt"] = "";
	$fieldLabelstb_lista_tarefa["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_lista_tarefa["English"]["alter_dt"] = "";
	$placeHolderstb_lista_tarefa["English"]["alter_dt"] = "";
	$fieldLabelstb_lista_tarefa["English"]["inclu_login"] = "Included by";
	$fieldToolTipstb_lista_tarefa["English"]["inclu_login"] = "";
	$placeHolderstb_lista_tarefa["English"]["inclu_login"] = "";
	$fieldLabelstb_lista_tarefa["English"]["alter_login"] = "Changed by";
	$fieldToolTipstb_lista_tarefa["English"]["alter_login"] = "";
	$placeHolderstb_lista_tarefa["English"]["alter_login"] = "";
	$pageTitlestb_lista_tarefa["English"]["remover_tarefas_da_lista"] = "Task's List [{%lista_id}]";
	if (count($fieldToolTipstb_lista_tarefa["English"]))
		$tdatatb_lista_tarefa[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_lista_tarefa["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_lista_tarefa["Portuguese(Brazil)"] = array();
	$placeHolderstb_lista_tarefa["Portuguese(Brazil)"] = array();
	$pageTitlestb_lista_tarefa["Portuguese(Brazil)"] = array();
	$fieldLabelstb_lista_tarefa["Portuguese(Brazil)"]["lista_id"] = "ID";
	$fieldToolTipstb_lista_tarefa["Portuguese(Brazil)"]["lista_id"] = "";
	$placeHolderstb_lista_tarefa["Portuguese(Brazil)"]["lista_id"] = "";
	$fieldLabelstb_lista_tarefa["Portuguese(Brazil)"]["clie_id"] = "Cliente";
	$fieldToolTipstb_lista_tarefa["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHolderstb_lista_tarefa["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelstb_lista_tarefa["Portuguese(Brazil)"]["lista_nm"] = "Nome";
	$fieldToolTipstb_lista_tarefa["Portuguese(Brazil)"]["lista_nm"] = "";
	$placeHolderstb_lista_tarefa["Portuguese(Brazil)"]["lista_nm"] = "";
	$fieldLabelstb_lista_tarefa["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_lista_tarefa["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_lista_tarefa["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_lista_tarefa["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_lista_tarefa["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_lista_tarefa["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelstb_lista_tarefa["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipstb_lista_tarefa["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_lista_tarefa["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_lista_tarefa["Portuguese(Brazil)"]["alter_login"] = "Alterado por";
	$fieldToolTipstb_lista_tarefa["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_lista_tarefa["Portuguese(Brazil)"]["alter_login"] = "";
	$pageTitlestb_lista_tarefa["Portuguese(Brazil)"]["remover_tarefas_da_lista"] = "Remover atividades da lista {%lista_id} - {%lista_nm}";
	if (count($fieldToolTipstb_lista_tarefa["Portuguese(Brazil)"]))
		$tdatatb_lista_tarefa[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_lista_tarefa["Spanish"] = array();
	$fieldToolTipstb_lista_tarefa["Spanish"] = array();
	$placeHolderstb_lista_tarefa["Spanish"] = array();
	$pageTitlestb_lista_tarefa["Spanish"] = array();
	$fieldLabelstb_lista_tarefa["Spanish"]["lista_id"] = "ID";
	$fieldToolTipstb_lista_tarefa["Spanish"]["lista_id"] = "";
	$placeHolderstb_lista_tarefa["Spanish"]["lista_id"] = "";
	$fieldLabelstb_lista_tarefa["Spanish"]["clie_id"] = "Cliente";
	$fieldToolTipstb_lista_tarefa["Spanish"]["clie_id"] = "";
	$placeHolderstb_lista_tarefa["Spanish"]["clie_id"] = "";
	$fieldLabelstb_lista_tarefa["Spanish"]["lista_nm"] = "Nombre";
	$fieldToolTipstb_lista_tarefa["Spanish"]["lista_nm"] = "";
	$placeHolderstb_lista_tarefa["Spanish"]["lista_nm"] = "";
	$fieldLabelstb_lista_tarefa["Spanish"]["inclu_dt"] = "Incluido en";
	$fieldToolTipstb_lista_tarefa["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_lista_tarefa["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_lista_tarefa["Spanish"]["alter_dt"] = "Cambiado en";
	$fieldToolTipstb_lista_tarefa["Spanish"]["alter_dt"] = "";
	$placeHolderstb_lista_tarefa["Spanish"]["alter_dt"] = "";
	$fieldLabelstb_lista_tarefa["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_lista_tarefa["Spanish"]["inclu_login"] = "";
	$placeHolderstb_lista_tarefa["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_lista_tarefa["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_lista_tarefa["Spanish"]["alter_login"] = "";
	$placeHolderstb_lista_tarefa["Spanish"]["alter_login"] = "";
	$pageTitlestb_lista_tarefa["Spanish"]["remover_tarefas_da_lista"] = "Lista de actividades [{%lista_id}]";
	if (count($fieldToolTipstb_lista_tarefa["Spanish"]))
		$tdatatb_lista_tarefa[".isUseToolTips"] = true;
}


	$tdatatb_lista_tarefa[".NCSearch"] = true;



$tdatatb_lista_tarefa[".shortTableName"] = "tb_lista_tarefa";
$tdatatb_lista_tarefa[".nSecOptions"] = 1;

$tdatatb_lista_tarefa[".mainTableOwnerID"] = "clie_id";
$tdatatb_lista_tarefa[".entityType"] = 0;

$tdatatb_lista_tarefa[".strOriginalTableName"] = "tb_lista_tarefa";

	



$tdatatb_lista_tarefa[".showAddInPopup"] = false;

$tdatatb_lista_tarefa[".showEditInPopup"] = false;

$tdatatb_lista_tarefa[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_lista_tarefa[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatatb_lista_tarefa[".listAjax"] = true;
//	temporary
$tdatatb_lista_tarefa[".listAjax"] = false;

	$tdatatb_lista_tarefa[".audit"] = true;

	$tdatatb_lista_tarefa[".locking"] = false;


$pages = $tdatatb_lista_tarefa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_lista_tarefa[".edit"] = true;
	$tdatatb_lista_tarefa[".afterEditAction"] = 0;
	$tdatatb_lista_tarefa[".closePopupAfterEdit"] = 1;
	$tdatatb_lista_tarefa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_lista_tarefa[".add"] = true;
$tdatatb_lista_tarefa[".afterAddAction"] = 0;
$tdatatb_lista_tarefa[".closePopupAfterAdd"] = 1;
$tdatatb_lista_tarefa[".afterAddActionDetTable"] = "tb_atividade";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_lista_tarefa[".list"] = true;
}



$tdatatb_lista_tarefa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_lista_tarefa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_lista_tarefa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_lista_tarefa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_lista_tarefa[".printFriendly"] = true;
}



$tdatatb_lista_tarefa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_lista_tarefa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_lista_tarefa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_lista_tarefa[".isUseAjaxSuggest"] = true;

$tdatatb_lista_tarefa[".rowHighlite"] = true;



									

$tdatatb_lista_tarefa[".ajaxCodeSnippetAdded"] = false;

$tdatatb_lista_tarefa[".buttonsAdded"] = false;

$tdatatb_lista_tarefa[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_lista_tarefa[".isUseTimeForSearch"] = false;


$tdatatb_lista_tarefa[".badgeColor"] = "8FBC8B";


$tdatatb_lista_tarefa[".allSearchFields"] = array();
$tdatatb_lista_tarefa[".filterFields"] = array();
$tdatatb_lista_tarefa[".requiredSearchFields"] = array();

$tdatatb_lista_tarefa[".googleLikeFields"] = array();
$tdatatb_lista_tarefa[".googleLikeFields"][] = "lista_id";
$tdatatb_lista_tarefa[".googleLikeFields"][] = "clie_id";
$tdatatb_lista_tarefa[".googleLikeFields"][] = "lista_nm";
$tdatatb_lista_tarefa[".googleLikeFields"][] = "inclu_login";
$tdatatb_lista_tarefa[".googleLikeFields"][] = "inclu_dt";
$tdatatb_lista_tarefa[".googleLikeFields"][] = "alter_login";
$tdatatb_lista_tarefa[".googleLikeFields"][] = "alter_dt";



$tdatatb_lista_tarefa[".tableType"] = "list";

$tdatatb_lista_tarefa[".printerPageOrientation"] = 0;
$tdatatb_lista_tarefa[".nPrinterPageScale"] = 100;

$tdatatb_lista_tarefa[".nPrinterSplitRecords"] = 40;

$tdatatb_lista_tarefa[".geocodingEnabled"] = false;










$tdatatb_lista_tarefa[".pageSize"] = 20;

$tdatatb_lista_tarefa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_lista_tarefa[".strOrderBy"] = $tstrOrderBy;

$tdatatb_lista_tarefa[".orderindexes"] = array();

$tdatatb_lista_tarefa[".sqlHead"] = "SELECT lista_id,  	clie_id,  	lista_nm,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatatb_lista_tarefa[".sqlFrom"] = "FROM tb_lista_tarefa";
$tdatatb_lista_tarefa[".sqlWhereExpr"] = "";
$tdatatb_lista_tarefa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_lista_tarefa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_lista_tarefa[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_lista_tarefa[".highlightSearchResults"] = true;

$tableKeystb_lista_tarefa = array();
$tableKeystb_lista_tarefa[] = "lista_id";
$tdatatb_lista_tarefa[".Keys"] = $tableKeystb_lista_tarefa;


$tdatatb_lista_tarefa[".hideMobileList"] = array();




//	lista_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "lista_id";
	$fdata["GoodName"] = "lista_id";
	$fdata["ownerTable"] = "tb_lista_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_lista_tarefa","lista_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatatb_lista_tarefa["lista_id"] = $fdata;
		$tdatatb_lista_tarefa[".searchableFields"][] = "lista_id";
//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_lista_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_lista_tarefa","clie_id");
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


	$tdatatb_lista_tarefa["clie_id"] = $fdata;
		$tdatatb_lista_tarefa[".searchableFields"][] = "clie_id";
//	lista_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lista_nm";
	$fdata["GoodName"] = "lista_nm";
	$fdata["ownerTable"] = "tb_lista_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_lista_tarefa","lista_nm");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "lista_nm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lista_nm";

	
	
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


	$tdatatb_lista_tarefa["lista_nm"] = $fdata;
		$tdatatb_lista_tarefa[".searchableFields"][] = "lista_nm";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_lista_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_lista_tarefa","inclu_login");
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


	$tdatatb_lista_tarefa["inclu_login"] = $fdata;
		$tdatatb_lista_tarefa[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_lista_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_lista_tarefa","inclu_dt");
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


	$tdatatb_lista_tarefa["inclu_dt"] = $fdata;
		$tdatatb_lista_tarefa[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_lista_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_lista_tarefa","alter_login");
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


	$tdatatb_lista_tarefa["alter_login"] = $fdata;
		$tdatatb_lista_tarefa[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_lista_tarefa";
	$fdata["Label"] = GetFieldLabel("tb_lista_tarefa","alter_dt");
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


	$tdatatb_lista_tarefa["alter_dt"] = $fdata;
		$tdatatb_lista_tarefa[".searchableFields"][] = "alter_dt";


$tables_data["tb_lista_tarefa"]=&$tdatatb_lista_tarefa;
$field_labels["tb_lista_tarefa"] = &$fieldLabelstb_lista_tarefa;
$fieldToolTips["tb_lista_tarefa"] = &$fieldToolTipstb_lista_tarefa;
$placeHolders["tb_lista_tarefa"] = &$placeHolderstb_lista_tarefa;
$page_titles["tb_lista_tarefa"] = &$pageTitlestb_lista_tarefa;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_lista_tarefa"] = array();
//	tb_tarefa
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_tarefa";
		$detailsParam["dOriginalTable"] = "tb_tarefa";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_tarefa1";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_tarefa");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_lista_tarefa"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_lista_tarefa"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_lista_tarefa"][$dIndex]["masterKeys"][]="lista_id";

				$detailsTablesData["tb_lista_tarefa"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_lista_tarefa"][$dIndex]["detailKeys"][]="lista_id";
//	Gráfico Tarefas por Lista
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Gráfico Tarefas por Lista";
		$detailsParam["dOriginalTable"] = "tb_atividade";



			$detailsParam["dType"]=PAGE_CHART;
		$detailsParam["dShortTable"] = "gr_fico_tarefas_por_lista";
	$detailsParam["dCaptionTable"] = GetTableCaption("Gr_fico_Tarefas_por_Lista");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_lista_tarefa"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_lista_tarefa"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_lista_tarefa"][$dIndex]["masterKeys"][]="lista_id";

				$detailsTablesData["tb_lista_tarefa"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_lista_tarefa"][$dIndex]["detailKeys"][]="lista_id";

// tables which are master tables for current table (detail)
$masterTablesData["tb_lista_tarefa"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_lista_tarefa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "lista_id,  	clie_id,  	lista_nm,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM tb_lista_tarefa";
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
	"m_strName" => "lista_id",
	"m_strTable" => "tb_lista_tarefa",
	"m_srcTableName" => "tb_lista_tarefa"
));

$proto6["m_sql"] = "lista_id";
$proto6["m_srcTableName"] = "tb_lista_tarefa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "tb_lista_tarefa",
	"m_srcTableName" => "tb_lista_tarefa"
));

$proto8["m_sql"] = "clie_id";
$proto8["m_srcTableName"] = "tb_lista_tarefa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lista_nm",
	"m_strTable" => "tb_lista_tarefa",
	"m_srcTableName" => "tb_lista_tarefa"
));

$proto10["m_sql"] = "lista_nm";
$proto10["m_srcTableName"] = "tb_lista_tarefa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_lista_tarefa",
	"m_srcTableName" => "tb_lista_tarefa"
));

$proto12["m_sql"] = "inclu_login";
$proto12["m_srcTableName"] = "tb_lista_tarefa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_lista_tarefa",
	"m_srcTableName" => "tb_lista_tarefa"
));

$proto14["m_sql"] = "inclu_dt";
$proto14["m_srcTableName"] = "tb_lista_tarefa";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_lista_tarefa",
	"m_srcTableName" => "tb_lista_tarefa"
));

$proto16["m_sql"] = "alter_login";
$proto16["m_srcTableName"] = "tb_lista_tarefa";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_lista_tarefa",
	"m_srcTableName" => "tb_lista_tarefa"
));

$proto18["m_sql"] = "alter_dt";
$proto18["m_srcTableName"] = "tb_lista_tarefa";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tb_lista_tarefa";
$proto21["m_srcTableName"] = "tb_lista_tarefa";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "lista_id";
$proto21["m_columns"][] = "clie_id";
$proto21["m_columns"][] = "lista_nm";
$proto21["m_columns"][] = "inclu_login";
$proto21["m_columns"][] = "inclu_dt";
$proto21["m_columns"][] = "alter_login";
$proto21["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "tb_lista_tarefa";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tb_lista_tarefa";
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
$proto0["m_srcTableName"]="tb_lista_tarefa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_lista_tarefa = createSqlQuery_tb_lista_tarefa();


	
		;

							

$tdatatb_lista_tarefa[".sqlquery"] = $queryData_tb_lista_tarefa;

include_once(getabspath("include/tb_lista_tarefa_events.php"));
$tableEvents["tb_lista_tarefa"] = new eventclass_tb_lista_tarefa;
$tdatatb_lista_tarefa[".hasEvents"] = true;

?>