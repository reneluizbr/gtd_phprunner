<?php



$tdatatb_lista_atividades = array();
$tdatatb_lista_atividades[".searchableFields"] = array();
$tdatatb_lista_atividades[".ShortName"] = "tb_lista_atividades";
$tdatatb_lista_atividades[".OwnerID"] = "clie_id";
$tdatatb_lista_atividades[".OriginalTable"] = "tb_lista_atividades";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_lista_atividades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"lista_simples\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\",\"remover_tarefas_da_lista\"]}" );
$tdatatb_lista_atividades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"lista_simples\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\",\"remover_tarefas_da_lista\"]}" ) );
$tdatatb_lista_atividades[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_lista_atividades = array();
$fieldToolTipstb_lista_atividades = array();
$pageTitlestb_lista_atividades = array();
$placeHolderstb_lista_atividades = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_lista_atividades["English"] = array();
	$fieldToolTipstb_lista_atividades["English"] = array();
	$placeHolderstb_lista_atividades["English"] = array();
	$pageTitlestb_lista_atividades["English"] = array();
	$fieldLabelstb_lista_atividades["English"]["lista_id"] = "ID";
	$fieldToolTipstb_lista_atividades["English"]["lista_id"] = "";
	$placeHolderstb_lista_atividades["English"]["lista_id"] = "";
	$fieldLabelstb_lista_atividades["English"]["clie_id"] = "Customer";
	$fieldToolTipstb_lista_atividades["English"]["clie_id"] = "";
	$placeHolderstb_lista_atividades["English"]["clie_id"] = "";
	$fieldLabelstb_lista_atividades["English"]["lista_nm"] = "Name";
	$fieldToolTipstb_lista_atividades["English"]["lista_nm"] = "";
	$placeHolderstb_lista_atividades["English"]["lista_nm"] = "";
	$fieldLabelstb_lista_atividades["English"]["inclu_dt"] = "Included on";
	$fieldToolTipstb_lista_atividades["English"]["inclu_dt"] = "";
	$placeHolderstb_lista_atividades["English"]["inclu_dt"] = "";
	$fieldLabelstb_lista_atividades["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_lista_atividades["English"]["alter_dt"] = "";
	$placeHolderstb_lista_atividades["English"]["alter_dt"] = "";
	$fieldLabelstb_lista_atividades["English"]["inclu_login"] = "Included by";
	$fieldToolTipstb_lista_atividades["English"]["inclu_login"] = "";
	$placeHolderstb_lista_atividades["English"]["inclu_login"] = "";
	$fieldLabelstb_lista_atividades["English"]["alter_login"] = "Changed by";
	$fieldToolTipstb_lista_atividades["English"]["alter_login"] = "";
	$placeHolderstb_lista_atividades["English"]["alter_login"] = "";
	$pageTitlestb_lista_atividades["English"]["remover_tarefas_da_lista"] = "Task's List [{%lista_id}]";
	if (count($fieldToolTipstb_lista_atividades["English"]))
		$tdatatb_lista_atividades[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_lista_atividades["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_lista_atividades["Portuguese(Brazil)"] = array();
	$placeHolderstb_lista_atividades["Portuguese(Brazil)"] = array();
	$pageTitlestb_lista_atividades["Portuguese(Brazil)"] = array();
	$fieldLabelstb_lista_atividades["Portuguese(Brazil)"]["lista_id"] = "ID";
	$fieldToolTipstb_lista_atividades["Portuguese(Brazil)"]["lista_id"] = "";
	$placeHolderstb_lista_atividades["Portuguese(Brazil)"]["lista_id"] = "";
	$fieldLabelstb_lista_atividades["Portuguese(Brazil)"]["clie_id"] = "Cliente";
	$fieldToolTipstb_lista_atividades["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHolderstb_lista_atividades["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelstb_lista_atividades["Portuguese(Brazil)"]["lista_nm"] = "Nome";
	$fieldToolTipstb_lista_atividades["Portuguese(Brazil)"]["lista_nm"] = "";
	$placeHolderstb_lista_atividades["Portuguese(Brazil)"]["lista_nm"] = "";
	$fieldLabelstb_lista_atividades["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_lista_atividades["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_lista_atividades["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_lista_atividades["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_lista_atividades["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_lista_atividades["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelstb_lista_atividades["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipstb_lista_atividades["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_lista_atividades["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_lista_atividades["Portuguese(Brazil)"]["alter_login"] = "Alterado por";
	$fieldToolTipstb_lista_atividades["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_lista_atividades["Portuguese(Brazil)"]["alter_login"] = "";
	$pageTitlestb_lista_atividades["Portuguese(Brazil)"]["remover_tarefas_da_lista"] = "Remover atividades da lista {%lista_id} - {%lista_nm}";
	if (count($fieldToolTipstb_lista_atividades["Portuguese(Brazil)"]))
		$tdatatb_lista_atividades[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_lista_atividades["Spanish"] = array();
	$fieldToolTipstb_lista_atividades["Spanish"] = array();
	$placeHolderstb_lista_atividades["Spanish"] = array();
	$pageTitlestb_lista_atividades["Spanish"] = array();
	$fieldLabelstb_lista_atividades["Spanish"]["lista_id"] = "ID";
	$fieldToolTipstb_lista_atividades["Spanish"]["lista_id"] = "";
	$placeHolderstb_lista_atividades["Spanish"]["lista_id"] = "";
	$fieldLabelstb_lista_atividades["Spanish"]["clie_id"] = "Cliente";
	$fieldToolTipstb_lista_atividades["Spanish"]["clie_id"] = "";
	$placeHolderstb_lista_atividades["Spanish"]["clie_id"] = "";
	$fieldLabelstb_lista_atividades["Spanish"]["lista_nm"] = "Nombre";
	$fieldToolTipstb_lista_atividades["Spanish"]["lista_nm"] = "";
	$placeHolderstb_lista_atividades["Spanish"]["lista_nm"] = "";
	$fieldLabelstb_lista_atividades["Spanish"]["inclu_dt"] = "Incluido en";
	$fieldToolTipstb_lista_atividades["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_lista_atividades["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_lista_atividades["Spanish"]["alter_dt"] = "Cambiado en";
	$fieldToolTipstb_lista_atividades["Spanish"]["alter_dt"] = "";
	$placeHolderstb_lista_atividades["Spanish"]["alter_dt"] = "";
	$fieldLabelstb_lista_atividades["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_lista_atividades["Spanish"]["inclu_login"] = "";
	$placeHolderstb_lista_atividades["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_lista_atividades["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_lista_atividades["Spanish"]["alter_login"] = "";
	$placeHolderstb_lista_atividades["Spanish"]["alter_login"] = "";
	$pageTitlestb_lista_atividades["Spanish"]["remover_tarefas_da_lista"] = "Lista de actividades [{%lista_id}]";
	if (count($fieldToolTipstb_lista_atividades["Spanish"]))
		$tdatatb_lista_atividades[".isUseToolTips"] = true;
}


	$tdatatb_lista_atividades[".NCSearch"] = true;



$tdatatb_lista_atividades[".shortTableName"] = "tb_lista_atividades";
$tdatatb_lista_atividades[".nSecOptions"] = 1;

$tdatatb_lista_atividades[".mainTableOwnerID"] = "clie_id";
$tdatatb_lista_atividades[".entityType"] = 0;

$tdatatb_lista_atividades[".strOriginalTableName"] = "tb_lista_atividades";

	



$tdatatb_lista_atividades[".showAddInPopup"] = false;

$tdatatb_lista_atividades[".showEditInPopup"] = false;

$tdatatb_lista_atividades[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_lista_atividades[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatatb_lista_atividades[".listAjax"] = true;
//	temporary
$tdatatb_lista_atividades[".listAjax"] = false;

	$tdatatb_lista_atividades[".audit"] = true;

	$tdatatb_lista_atividades[".locking"] = false;


$pages = $tdatatb_lista_atividades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_lista_atividades[".edit"] = true;
	$tdatatb_lista_atividades[".afterEditAction"] = 0;
	$tdatatb_lista_atividades[".closePopupAfterEdit"] = 1;
	$tdatatb_lista_atividades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_lista_atividades[".add"] = true;
$tdatatb_lista_atividades[".afterAddAction"] = 0;
$tdatatb_lista_atividades[".closePopupAfterAdd"] = 1;
$tdatatb_lista_atividades[".afterAddActionDetTable"] = "tb_atividade";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_lista_atividades[".list"] = true;
}



$tdatatb_lista_atividades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_lista_atividades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_lista_atividades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_lista_atividades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_lista_atividades[".printFriendly"] = true;
}



$tdatatb_lista_atividades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_lista_atividades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_lista_atividades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_lista_atividades[".isUseAjaxSuggest"] = true;

$tdatatb_lista_atividades[".rowHighlite"] = true;



									

$tdatatb_lista_atividades[".ajaxCodeSnippetAdded"] = false;

$tdatatb_lista_atividades[".buttonsAdded"] = false;

$tdatatb_lista_atividades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_lista_atividades[".isUseTimeForSearch"] = false;


$tdatatb_lista_atividades[".badgeColor"] = "8FBC8B";


$tdatatb_lista_atividades[".allSearchFields"] = array();
$tdatatb_lista_atividades[".filterFields"] = array();
$tdatatb_lista_atividades[".requiredSearchFields"] = array();

$tdatatb_lista_atividades[".googleLikeFields"] = array();
$tdatatb_lista_atividades[".googleLikeFields"][] = "lista_id";
$tdatatb_lista_atividades[".googleLikeFields"][] = "clie_id";
$tdatatb_lista_atividades[".googleLikeFields"][] = "lista_nm";
$tdatatb_lista_atividades[".googleLikeFields"][] = "inclu_login";
$tdatatb_lista_atividades[".googleLikeFields"][] = "inclu_dt";
$tdatatb_lista_atividades[".googleLikeFields"][] = "alter_login";
$tdatatb_lista_atividades[".googleLikeFields"][] = "alter_dt";



$tdatatb_lista_atividades[".tableType"] = "list";

$tdatatb_lista_atividades[".printerPageOrientation"] = 0;
$tdatatb_lista_atividades[".nPrinterPageScale"] = 100;

$tdatatb_lista_atividades[".nPrinterSplitRecords"] = 40;

$tdatatb_lista_atividades[".geocodingEnabled"] = false;










$tdatatb_lista_atividades[".pageSize"] = 20;

$tdatatb_lista_atividades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_lista_atividades[".strOrderBy"] = $tstrOrderBy;

$tdatatb_lista_atividades[".orderindexes"] = array();

$tdatatb_lista_atividades[".sqlHead"] = "SELECT lista_id,  	clie_id,  	lista_nm,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatatb_lista_atividades[".sqlFrom"] = "FROM tb_lista_atividades";
$tdatatb_lista_atividades[".sqlWhereExpr"] = "";
$tdatatb_lista_atividades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_lista_atividades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_lista_atividades[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_lista_atividades[".highlightSearchResults"] = true;

$tableKeystb_lista_atividades = array();
$tableKeystb_lista_atividades[] = "lista_id";
$tdatatb_lista_atividades[".Keys"] = $tableKeystb_lista_atividades;


$tdatatb_lista_atividades[".hideMobileList"] = array();




//	lista_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "lista_id";
	$fdata["GoodName"] = "lista_id";
	$fdata["ownerTable"] = "tb_lista_atividades";
	$fdata["Label"] = GetFieldLabel("tb_lista_atividades","lista_id");
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


	$tdatatb_lista_atividades["lista_id"] = $fdata;
		$tdatatb_lista_atividades[".searchableFields"][] = "lista_id";
//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_lista_atividades";
	$fdata["Label"] = GetFieldLabel("tb_lista_atividades","clie_id");
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


	$tdatatb_lista_atividades["clie_id"] = $fdata;
		$tdatatb_lista_atividades[".searchableFields"][] = "clie_id";
//	lista_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lista_nm";
	$fdata["GoodName"] = "lista_nm";
	$fdata["ownerTable"] = "tb_lista_atividades";
	$fdata["Label"] = GetFieldLabel("tb_lista_atividades","lista_nm");
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


	$tdatatb_lista_atividades["lista_nm"] = $fdata;
		$tdatatb_lista_atividades[".searchableFields"][] = "lista_nm";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_lista_atividades";
	$fdata["Label"] = GetFieldLabel("tb_lista_atividades","inclu_login");
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


	$tdatatb_lista_atividades["inclu_login"] = $fdata;
		$tdatatb_lista_atividades[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_lista_atividades";
	$fdata["Label"] = GetFieldLabel("tb_lista_atividades","inclu_dt");
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


	$tdatatb_lista_atividades["inclu_dt"] = $fdata;
		$tdatatb_lista_atividades[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_lista_atividades";
	$fdata["Label"] = GetFieldLabel("tb_lista_atividades","alter_login");
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


	$tdatatb_lista_atividades["alter_login"] = $fdata;
		$tdatatb_lista_atividades[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_lista_atividades";
	$fdata["Label"] = GetFieldLabel("tb_lista_atividades","alter_dt");
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


	$tdatatb_lista_atividades["alter_dt"] = $fdata;
		$tdatatb_lista_atividades[".searchableFields"][] = "alter_dt";


$tables_data["tb_lista_atividades"]=&$tdatatb_lista_atividades;
$field_labels["tb_lista_atividades"] = &$fieldLabelstb_lista_atividades;
$fieldToolTips["tb_lista_atividades"] = &$fieldToolTipstb_lista_atividades;
$placeHolders["tb_lista_atividades"] = &$placeHolderstb_lista_atividades;
$page_titles["tb_lista_atividades"] = &$pageTitlestb_lista_atividades;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_lista_atividades"] = array();
//	tb_atividade
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_atividade";
		$detailsParam["dOriginalTable"] = "tb_atividade";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_atividade";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_atividade");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_lista_atividades"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_lista_atividades"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_lista_atividades"][$dIndex]["masterKeys"][]="lista_id";

				$detailsTablesData["tb_lista_atividades"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_lista_atividades"][$dIndex]["detailKeys"][]="lista_id";
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


		
	$detailsTablesData["tb_lista_atividades"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_lista_atividades"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_lista_atividades"][$dIndex]["masterKeys"][]="lista_id";

				$detailsTablesData["tb_lista_atividades"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_lista_atividades"][$dIndex]["detailKeys"][]="lista_id";

// tables which are master tables for current table (detail)
$masterTablesData["tb_lista_atividades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_lista_atividades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "lista_id,  	clie_id,  	lista_nm,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM tb_lista_atividades";
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
	"m_strTable" => "tb_lista_atividades",
	"m_srcTableName" => "tb_lista_atividades"
));

$proto6["m_sql"] = "lista_id";
$proto6["m_srcTableName"] = "tb_lista_atividades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "tb_lista_atividades",
	"m_srcTableName" => "tb_lista_atividades"
));

$proto8["m_sql"] = "clie_id";
$proto8["m_srcTableName"] = "tb_lista_atividades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lista_nm",
	"m_strTable" => "tb_lista_atividades",
	"m_srcTableName" => "tb_lista_atividades"
));

$proto10["m_sql"] = "lista_nm";
$proto10["m_srcTableName"] = "tb_lista_atividades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_lista_atividades",
	"m_srcTableName" => "tb_lista_atividades"
));

$proto12["m_sql"] = "inclu_login";
$proto12["m_srcTableName"] = "tb_lista_atividades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_lista_atividades",
	"m_srcTableName" => "tb_lista_atividades"
));

$proto14["m_sql"] = "inclu_dt";
$proto14["m_srcTableName"] = "tb_lista_atividades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_lista_atividades",
	"m_srcTableName" => "tb_lista_atividades"
));

$proto16["m_sql"] = "alter_login";
$proto16["m_srcTableName"] = "tb_lista_atividades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_lista_atividades",
	"m_srcTableName" => "tb_lista_atividades"
));

$proto18["m_sql"] = "alter_dt";
$proto18["m_srcTableName"] = "tb_lista_atividades";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tb_lista_atividades";
$proto21["m_srcTableName"] = "tb_lista_atividades";
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
$proto20["m_sql"] = "tb_lista_atividades";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tb_lista_atividades";
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
$proto0["m_srcTableName"]="tb_lista_atividades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_lista_atividades = createSqlQuery_tb_lista_atividades();


	
		;

							

$tdatatb_lista_atividades[".sqlquery"] = $queryData_tb_lista_atividades;

include_once(getabspath("include/tb_lista_atividades_events.php"));
$tableEvents["tb_lista_atividades"] = new eventclass_tb_lista_atividades;
$tdatatb_lista_atividades[".hasEvents"] = true;

?>