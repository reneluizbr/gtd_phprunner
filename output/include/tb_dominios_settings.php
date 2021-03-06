<?php



$tdatatb_dominios = array();
$tdatatb_dominios[".searchableFields"] = array();
$tdatatb_dominios[".ShortName"] = "tb_dominios";
$tdatatb_dominios[".OwnerID"] = "";
$tdatatb_dominios[".OriginalTable"] = "tb_dominios";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_dominios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_dominios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_dominios[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_dominios = array();
$fieldToolTipstb_dominios = array();
$pageTitlestb_dominios = array();
$placeHolderstb_dominios = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_dominios["English"] = array();
	$fieldToolTipstb_dominios["English"] = array();
	$placeHolderstb_dominios["English"] = array();
	$pageTitlestb_dominios["English"] = array();
	$fieldLabelstb_dominios["English"]["domi_id"] = "ID";
	$fieldToolTipstb_dominios["English"]["domi_id"] = "";
	$placeHolderstb_dominios["English"]["domi_id"] = "";
	$fieldLabelstb_dominios["English"]["domi_grupo"] = "Group";
	$fieldToolTipstb_dominios["English"]["domi_grupo"] = "";
	$placeHolderstb_dominios["English"]["domi_grupo"] = "";
	$fieldLabelstb_dominios["English"]["domi_ordem"] = "Order";
	$fieldToolTipstb_dominios["English"]["domi_ordem"] = "";
	$placeHolderstb_dominios["English"]["domi_ordem"] = "";
	$fieldLabelstb_dominios["English"]["domi_valor"] = "Value";
	$fieldToolTipstb_dominios["English"]["domi_valor"] = "";
	$placeHolderstb_dominios["English"]["domi_valor"] = "";
	$fieldLabelstb_dominios["English"]["domi_exibe"] = "Exhibition";
	$fieldToolTipstb_dominios["English"]["domi_exibe"] = "";
	$placeHolderstb_dominios["English"]["domi_exibe"] = "";
	$fieldLabelstb_dominios["English"]["inclu_dt"] = "Included in";
	$fieldToolTipstb_dominios["English"]["inclu_dt"] = "";
	$placeHolderstb_dominios["English"]["inclu_dt"] = "";
	$fieldLabelstb_dominios["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_dominios["English"]["alter_dt"] = "";
	$placeHolderstb_dominios["English"]["alter_dt"] = "";
	$fieldLabelstb_dominios["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_dominios["English"]["inclu_login"] = "";
	$placeHolderstb_dominios["English"]["inclu_login"] = "";
	$fieldLabelstb_dominios["English"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_dominios["English"]["alter_login"] = "";
	$placeHolderstb_dominios["English"]["alter_login"] = "";
	$pageTitlestb_dominios["English"]["view"] = "Domínio {%domi_id} - {\$domi_grupo}, {%domi_valor}";
	$pageTitlestb_dominios["English"]["edit"] = "Domínio, Editar [{%domi_id} - {%domi_grupo}, {%domi_valor}]";
	if (count($fieldToolTipstb_dominios["English"]))
		$tdatatb_dominios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_dominios["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_dominios["Portuguese(Brazil)"] = array();
	$placeHolderstb_dominios["Portuguese(Brazil)"] = array();
	$pageTitlestb_dominios["Portuguese(Brazil)"] = array();
	$fieldLabelstb_dominios["Portuguese(Brazil)"]["domi_id"] = "ID";
	$fieldToolTipstb_dominios["Portuguese(Brazil)"]["domi_id"] = "";
	$placeHolderstb_dominios["Portuguese(Brazil)"]["domi_id"] = "";
	$fieldLabelstb_dominios["Portuguese(Brazil)"]["domi_grupo"] = "Grupo";
	$fieldToolTipstb_dominios["Portuguese(Brazil)"]["domi_grupo"] = "Nome sem espaços";
	$placeHolderstb_dominios["Portuguese(Brazil)"]["domi_grupo"] = "Nome sem espaços. ex: TIPO_NAT";
	$fieldLabelstb_dominios["Portuguese(Brazil)"]["domi_ordem"] = "Ordem";
	$fieldToolTipstb_dominios["Portuguese(Brazil)"]["domi_ordem"] = "Número de ordem";
	$placeHolderstb_dominios["Portuguese(Brazil)"]["domi_ordem"] = "Ordem Sequencial";
	$fieldLabelstb_dominios["Portuguese(Brazil)"]["domi_valor"] = "Valor";
	$fieldToolTipstb_dominios["Portuguese(Brazil)"]["domi_valor"] = "String sem espaços";
	$placeHolderstb_dominios["Portuguese(Brazil)"]["domi_valor"] = "Nome sem espaços. ex: ATIVA";
	$fieldLabelstb_dominios["Portuguese(Brazil)"]["domi_exibe"] = "Exibição";
	$fieldToolTipstb_dominios["Portuguese(Brazil)"]["domi_exibe"] = "Nome de exibição";
	$placeHolderstb_dominios["Portuguese(Brazil)"]["domi_exibe"] = "Nome de exibição: ex: Ativo Ok";
	$fieldLabelstb_dominios["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_dominios["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_dominios["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_dominios["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_dominios["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_dominios["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelstb_dominios["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipstb_dominios["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_dominios["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_dominios["Portuguese(Brazil)"]["alter_login"] = "Alterado por";
	$fieldToolTipstb_dominios["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_dominios["Portuguese(Brazil)"]["alter_login"] = "";
	$pageTitlestb_dominios["Portuguese(Brazil)"]["view"] = "Domínio {%domi_id} - {%domi_grupo} => {%domi_valor}";
	$pageTitlestb_dominios["Portuguese(Brazil)"]["edit"] = "Domínio, Editar [{%domi_id} - {%domi_grupo} => {%domi_valor}]";
	if (count($fieldToolTipstb_dominios["Portuguese(Brazil)"]))
		$tdatatb_dominios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_dominios["Spanish"] = array();
	$fieldToolTipstb_dominios["Spanish"] = array();
	$placeHolderstb_dominios["Spanish"] = array();
	$pageTitlestb_dominios["Spanish"] = array();
	$fieldLabelstb_dominios["Spanish"]["domi_id"] = "ID";
	$fieldToolTipstb_dominios["Spanish"]["domi_id"] = "";
	$placeHolderstb_dominios["Spanish"]["domi_id"] = "";
	$fieldLabelstb_dominios["Spanish"]["domi_grupo"] = "Grupo";
	$fieldToolTipstb_dominios["Spanish"]["domi_grupo"] = "";
	$placeHolderstb_dominios["Spanish"]["domi_grupo"] = "";
	$fieldLabelstb_dominios["Spanish"]["domi_ordem"] = "Orden";
	$fieldToolTipstb_dominios["Spanish"]["domi_ordem"] = "";
	$placeHolderstb_dominios["Spanish"]["domi_ordem"] = "";
	$fieldLabelstb_dominios["Spanish"]["domi_valor"] = "Valor";
	$fieldToolTipstb_dominios["Spanish"]["domi_valor"] = "";
	$placeHolderstb_dominios["Spanish"]["domi_valor"] = "";
	$fieldLabelstb_dominios["Spanish"]["domi_exibe"] = "Exposición";
	$fieldToolTipstb_dominios["Spanish"]["domi_exibe"] = "";
	$placeHolderstb_dominios["Spanish"]["domi_exibe"] = "";
	$fieldLabelstb_dominios["Spanish"]["inclu_dt"] = "Incluido en";
	$fieldToolTipstb_dominios["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_dominios["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_dominios["Spanish"]["alter_dt"] = "Cambiado en";
	$fieldToolTipstb_dominios["Spanish"]["alter_dt"] = "";
	$placeHolderstb_dominios["Spanish"]["alter_dt"] = "";
	$fieldLabelstb_dominios["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_dominios["Spanish"]["inclu_login"] = "";
	$placeHolderstb_dominios["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_dominios["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_dominios["Spanish"]["alter_login"] = "";
	$placeHolderstb_dominios["Spanish"]["alter_login"] = "";
	$pageTitlestb_dominios["Spanish"]["view"] = "Domínio {%domi_id} - {\$domi_grupo}, {%domi_valor}";
	$pageTitlestb_dominios["Spanish"]["edit"] = "Domínio, Editar [{%domi_id} - {%domi_grupo}, {%domi_valor}]";
	if (count($fieldToolTipstb_dominios["Spanish"]))
		$tdatatb_dominios[".isUseToolTips"] = true;
}


	$tdatatb_dominios[".NCSearch"] = true;



$tdatatb_dominios[".shortTableName"] = "tb_dominios";
$tdatatb_dominios[".nSecOptions"] = 0;

$tdatatb_dominios[".mainTableOwnerID"] = "";
$tdatatb_dominios[".entityType"] = 0;

$tdatatb_dominios[".strOriginalTableName"] = "tb_dominios";

	



$tdatatb_dominios[".showAddInPopup"] = false;

$tdatatb_dominios[".showEditInPopup"] = false;

$tdatatb_dominios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_dominios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_dominios[".listAjax"] = false;
//	temporary
$tdatatb_dominios[".listAjax"] = false;

	$tdatatb_dominios[".audit"] = false;

	$tdatatb_dominios[".locking"] = false;


$pages = $tdatatb_dominios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_dominios[".edit"] = true;
	$tdatatb_dominios[".afterEditAction"] = 0;
	$tdatatb_dominios[".closePopupAfterEdit"] = 1;
	$tdatatb_dominios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_dominios[".add"] = true;
$tdatatb_dominios[".afterAddAction"] = 0;
$tdatatb_dominios[".closePopupAfterAdd"] = 1;
$tdatatb_dominios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_dominios[".list"] = true;
}



$tdatatb_dominios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_dominios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_dominios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_dominios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_dominios[".printFriendly"] = true;
}



$tdatatb_dominios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_dominios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_dominios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_dominios[".isUseAjaxSuggest"] = true;

$tdatatb_dominios[".rowHighlite"] = true;



									

$tdatatb_dominios[".ajaxCodeSnippetAdded"] = false;

$tdatatb_dominios[".buttonsAdded"] = false;

$tdatatb_dominios[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatb_dominios[".isUseTimeForSearch"] = false;


$tdatatb_dominios[".badgeColor"] = "DB7093";


$tdatatb_dominios[".allSearchFields"] = array();
$tdatatb_dominios[".filterFields"] = array();
$tdatatb_dominios[".requiredSearchFields"] = array();

$tdatatb_dominios[".googleLikeFields"] = array();
$tdatatb_dominios[".googleLikeFields"][] = "domi_id";
$tdatatb_dominios[".googleLikeFields"][] = "domi_grupo";
$tdatatb_dominios[".googleLikeFields"][] = "domi_ordem";
$tdatatb_dominios[".googleLikeFields"][] = "domi_valor";
$tdatatb_dominios[".googleLikeFields"][] = "domi_exibe";
$tdatatb_dominios[".googleLikeFields"][] = "inclu_login";
$tdatatb_dominios[".googleLikeFields"][] = "inclu_dt";
$tdatatb_dominios[".googleLikeFields"][] = "alter_login";
$tdatatb_dominios[".googleLikeFields"][] = "alter_dt";



$tdatatb_dominios[".tableType"] = "list";

$tdatatb_dominios[".printerPageOrientation"] = 0;
$tdatatb_dominios[".nPrinterPageScale"] = 100;

$tdatatb_dominios[".nPrinterSplitRecords"] = 40;

$tdatatb_dominios[".geocodingEnabled"] = false;










$tdatatb_dominios[".pageSize"] = 20;

$tdatatb_dominios[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY domi_grupo, domi_ordem";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_dominios[".strOrderBy"] = $tstrOrderBy;

$tdatatb_dominios[".orderindexes"] = array();
	$tdatatb_dominios[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "domi_grupo");

	$tdatatb_dominios[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "domi_ordem");


$tdatatb_dominios[".sqlHead"] = "SELECT domi_id,  domi_grupo,  domi_ordem,  domi_valor,  domi_exibe,  inclu_login,  inclu_dt,  alter_login,  alter_dt";
$tdatatb_dominios[".sqlFrom"] = "FROM tb_dominios";
$tdatatb_dominios[".sqlWhereExpr"] = "";
$tdatatb_dominios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_dominios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_dominios[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_dominios[".highlightSearchResults"] = true;

$tableKeystb_dominios = array();
$tableKeystb_dominios[] = "domi_id";
$tdatatb_dominios[".Keys"] = $tableKeystb_dominios;


$tdatatb_dominios[".hideMobileList"] = array();




//	domi_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "domi_id";
	$fdata["GoodName"] = "domi_id";
	$fdata["ownerTable"] = "tb_dominios";
	$fdata["Label"] = GetFieldLabel("tb_dominios","domi_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "domi_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domi_id";

	
	
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


	$tdatatb_dominios["domi_id"] = $fdata;
		$tdatatb_dominios[".searchableFields"][] = "domi_id";
//	domi_grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "domi_grupo";
	$fdata["GoodName"] = "domi_grupo";
	$fdata["ownerTable"] = "tb_dominios";
	$fdata["Label"] = GetFieldLabel("tb_dominios","domi_grupo");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "domi_grupo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domi_grupo";

	
	
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
				$edata["validateAs"]["regExp"] = "[A-Za-z_]+";
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "domi_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_dominios["domi_grupo"] = $fdata;
		$tdatatb_dominios[".searchableFields"][] = "domi_grupo";
//	domi_ordem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "domi_ordem";
	$fdata["GoodName"] = "domi_ordem";
	$fdata["ownerTable"] = "tb_dominios";
	$fdata["Label"] = GetFieldLabel("tb_dominios","domi_ordem");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "domi_ordem";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domi_ordem";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

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


	$tdatatb_dominios["domi_ordem"] = $fdata;
		$tdatatb_dominios[".searchableFields"][] = "domi_ordem";
//	domi_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "domi_valor";
	$fdata["GoodName"] = "domi_valor";
	$fdata["ownerTable"] = "tb_dominios";
	$fdata["Label"] = GetFieldLabel("tb_dominios","domi_valor");
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
				$edata["validateAs"]["regExp"] = "[A-Za-z_]+";
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


	$tdatatb_dominios["domi_valor"] = $fdata;
		$tdatatb_dominios[".searchableFields"][] = "domi_valor";
//	domi_exibe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "domi_exibe";
	$fdata["GoodName"] = "domi_exibe";
	$fdata["ownerTable"] = "tb_dominios";
	$fdata["Label"] = GetFieldLabel("tb_dominios","domi_exibe");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "domi_exibe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domi_exibe";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatatb_dominios["domi_exibe"] = $fdata;
		$tdatatb_dominios[".searchableFields"][] = "domi_exibe";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_dominios";
	$fdata["Label"] = GetFieldLabel("tb_dominios","inclu_login");
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
		$fdata["filterTotalFields"] = "domi_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_dominios["inclu_login"] = $fdata;
		$tdatatb_dominios[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_dominios";
	$fdata["Label"] = GetFieldLabel("tb_dominios","inclu_dt");
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


	$tdatatb_dominios["inclu_dt"] = $fdata;
		$tdatatb_dominios[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_dominios";
	$fdata["Label"] = GetFieldLabel("tb_dominios","alter_login");
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


	$tdatatb_dominios["alter_login"] = $fdata;
		$tdatatb_dominios[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_dominios";
	$fdata["Label"] = GetFieldLabel("tb_dominios","alter_dt");
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


	$tdatatb_dominios["alter_dt"] = $fdata;
		$tdatatb_dominios[".searchableFields"][] = "alter_dt";


$tables_data["tb_dominios"]=&$tdatatb_dominios;
$field_labels["tb_dominios"] = &$fieldLabelstb_dominios;
$fieldToolTips["tb_dominios"] = &$fieldToolTipstb_dominios;
$placeHolders["tb_dominios"] = &$placeHolderstb_dominios;
$page_titles["tb_dominios"] = &$pageTitlestb_dominios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_dominios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_dominios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_dominios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "domi_id,  domi_grupo,  domi_ordem,  domi_valor,  domi_exibe,  inclu_login,  inclu_dt,  alter_login,  alter_dt";
$proto0["m_strFrom"] = "FROM tb_dominios";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY domi_grupo, domi_ordem";
	
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
	"m_strName" => "domi_id",
	"m_strTable" => "tb_dominios",
	"m_srcTableName" => "tb_dominios"
));

$proto6["m_sql"] = "domi_id";
$proto6["m_srcTableName"] = "tb_dominios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "domi_grupo",
	"m_strTable" => "tb_dominios",
	"m_srcTableName" => "tb_dominios"
));

$proto8["m_sql"] = "domi_grupo";
$proto8["m_srcTableName"] = "tb_dominios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "domi_ordem",
	"m_strTable" => "tb_dominios",
	"m_srcTableName" => "tb_dominios"
));

$proto10["m_sql"] = "domi_ordem";
$proto10["m_srcTableName"] = "tb_dominios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "domi_valor",
	"m_strTable" => "tb_dominios",
	"m_srcTableName" => "tb_dominios"
));

$proto12["m_sql"] = "domi_valor";
$proto12["m_srcTableName"] = "tb_dominios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "domi_exibe",
	"m_strTable" => "tb_dominios",
	"m_srcTableName" => "tb_dominios"
));

$proto14["m_sql"] = "domi_exibe";
$proto14["m_srcTableName"] = "tb_dominios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_dominios",
	"m_srcTableName" => "tb_dominios"
));

$proto16["m_sql"] = "inclu_login";
$proto16["m_srcTableName"] = "tb_dominios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_dominios",
	"m_srcTableName" => "tb_dominios"
));

$proto18["m_sql"] = "inclu_dt";
$proto18["m_srcTableName"] = "tb_dominios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_dominios",
	"m_srcTableName" => "tb_dominios"
));

$proto20["m_sql"] = "alter_login";
$proto20["m_srcTableName"] = "tb_dominios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_dominios",
	"m_srcTableName" => "tb_dominios"
));

$proto22["m_sql"] = "alter_dt";
$proto22["m_srcTableName"] = "tb_dominios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tb_dominios";
$proto25["m_srcTableName"] = "tb_dominios";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "domi_id";
$proto25["m_columns"][] = "domi_grupo";
$proto25["m_columns"][] = "domi_ordem";
$proto25["m_columns"][] = "domi_valor";
$proto25["m_columns"][] = "domi_exibe";
$proto25["m_columns"][] = "inclu_login";
$proto25["m_columns"][] = "inclu_dt";
$proto25["m_columns"][] = "alter_login";
$proto25["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "tb_dominios";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tb_dominios";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "domi_grupo",
	"m_strTable" => "tb_dominios",
	"m_srcTableName" => "tb_dominios"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 1;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "domi_ordem",
	"m_strTable" => "tb_dominios",
	"m_srcTableName" => "tb_dominios"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 1;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tb_dominios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_dominios = createSqlQuery_tb_dominios();


	
		;

									

$tdatatb_dominios[".sqlquery"] = $queryData_tb_dominios;

include_once(getabspath("include/tb_dominios_events.php"));
$tableEvents["tb_dominios"] = new eventclass_tb_dominios;
$tdatatb_dominios[".hasEvents"] = true;

?>