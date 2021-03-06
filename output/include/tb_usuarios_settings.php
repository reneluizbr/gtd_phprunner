<?php



$tdatatb_usuarios = array();
$tdatatb_usuarios[".searchableFields"] = array();
$tdatatb_usuarios[".ShortName"] = "tb_usuarios";
$tdatatb_usuarios[".OwnerID"] = "clie_id";
$tdatatb_usuarios[".OriginalTable"] = "tb_usuarios";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_usuarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_usuarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_usuarios[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_usuarios = array();
$fieldToolTipstb_usuarios = array();
$pageTitlestb_usuarios = array();
$placeHolderstb_usuarios = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_usuarios["English"] = array();
	$fieldToolTipstb_usuarios["English"] = array();
	$placeHolderstb_usuarios["English"] = array();
	$pageTitlestb_usuarios["English"] = array();
	$fieldLabelstb_usuarios["English"]["usua_id"] = "ID";
	$fieldToolTipstb_usuarios["English"]["usua_id"] = "";
	$placeHolderstb_usuarios["English"]["usua_id"] = "";
	$fieldLabelstb_usuarios["English"]["clie_id"] = "Customer ID";
	$fieldToolTipstb_usuarios["English"]["clie_id"] = "";
	$placeHolderstb_usuarios["English"]["clie_id"] = "";
	$fieldLabelstb_usuarios["English"]["usua_domi_status"] = "Domi Status";
	$fieldToolTipstb_usuarios["English"]["usua_domi_status"] = "";
	$placeHolderstb_usuarios["English"]["usua_domi_status"] = "";
	$fieldLabelstb_usuarios["English"]["usua_email"] = "Email";
	$fieldToolTipstb_usuarios["English"]["usua_email"] = "";
	$placeHolderstb_usuarios["English"]["usua_email"] = "";
	$fieldLabelstb_usuarios["English"]["usua_username"] = "Username";
	$fieldToolTipstb_usuarios["English"]["usua_username"] = "";
	$placeHolderstb_usuarios["English"]["usua_username"] = "";
	$fieldLabelstb_usuarios["English"]["usua_senha"] = "Password";
	$fieldToolTipstb_usuarios["English"]["usua_senha"] = "";
	$placeHolderstb_usuarios["English"]["usua_senha"] = "";
	$fieldLabelstb_usuarios["English"]["usua_login_ulti"] = "Last Login";
	$fieldToolTipstb_usuarios["English"]["usua_login_ulti"] = "";
	$placeHolderstb_usuarios["English"]["usua_login_ulti"] = "";
	$fieldLabelstb_usuarios["English"]["inclu_dt"] = "Included in";
	$fieldToolTipstb_usuarios["English"]["inclu_dt"] = "";
	$placeHolderstb_usuarios["English"]["inclu_dt"] = "";
	$fieldLabelstb_usuarios["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_usuarios["English"]["alter_dt"] = "";
	$placeHolderstb_usuarios["English"]["alter_dt"] = "";
	$fieldLabelstb_usuarios["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_usuarios["English"]["inclu_login"] = "";
	$placeHolderstb_usuarios["English"]["inclu_login"] = "";
	$fieldLabelstb_usuarios["English"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_usuarios["English"]["alter_login"] = "";
	$placeHolderstb_usuarios["English"]["alter_login"] = "";
	$fieldLabelstb_usuarios["English"]["wlSituacao"] = "Wl Situacao";
	$fieldToolTipstb_usuarios["English"]["wlSituacao"] = "";
	$placeHolderstb_usuarios["English"]["wlSituacao"] = "";
	if (count($fieldToolTipstb_usuarios["English"]))
		$tdatatb_usuarios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_usuarios["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"] = array();
	$placeHolderstb_usuarios["Portuguese(Brazil)"] = array();
	$pageTitlestb_usuarios["Portuguese(Brazil)"] = array();
	$fieldLabelstb_usuarios["Portuguese(Brazil)"]["usua_id"] = "ID";
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"]["usua_id"] = "";
	$placeHolderstb_usuarios["Portuguese(Brazil)"]["usua_id"] = "";
	$fieldLabelstb_usuarios["Portuguese(Brazil)"]["clie_id"] = "Cliente";
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHolderstb_usuarios["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelstb_usuarios["Portuguese(Brazil)"]["usua_domi_status"] = "Domi Status";
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"]["usua_domi_status"] = "";
	$placeHolderstb_usuarios["Portuguese(Brazil)"]["usua_domi_status"] = "";
	$fieldLabelstb_usuarios["Portuguese(Brazil)"]["usua_email"] = "Email";
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"]["usua_email"] = "";
	$placeHolderstb_usuarios["Portuguese(Brazil)"]["usua_email"] = "";
	$fieldLabelstb_usuarios["Portuguese(Brazil)"]["usua_username"] = "Username";
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"]["usua_username"] = "";
	$placeHolderstb_usuarios["Portuguese(Brazil)"]["usua_username"] = "";
	$fieldLabelstb_usuarios["Portuguese(Brazil)"]["usua_senha"] = "Senha";
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"]["usua_senha"] = "";
	$placeHolderstb_usuarios["Portuguese(Brazil)"]["usua_senha"] = "";
	$fieldLabelstb_usuarios["Portuguese(Brazil)"]["usua_login_ulti"] = "Último Login";
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"]["usua_login_ulti"] = "";
	$placeHolderstb_usuarios["Portuguese(Brazil)"]["usua_login_ulti"] = "";
	$fieldLabelstb_usuarios["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_usuarios["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_usuarios["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_usuarios["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelstb_usuarios["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_usuarios["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_usuarios["Portuguese(Brazil)"]["alter_login"] = "Alterado por";
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_usuarios["Portuguese(Brazil)"]["alter_login"] = "";
	$fieldLabelstb_usuarios["Portuguese(Brazil)"]["wlSituacao"] = "Situação";
	$fieldToolTipstb_usuarios["Portuguese(Brazil)"]["wlSituacao"] = "";
	$placeHolderstb_usuarios["Portuguese(Brazil)"]["wlSituacao"] = "";
	if (count($fieldToolTipstb_usuarios["Portuguese(Brazil)"]))
		$tdatatb_usuarios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_usuarios["Spanish"] = array();
	$fieldToolTipstb_usuarios["Spanish"] = array();
	$placeHolderstb_usuarios["Spanish"] = array();
	$pageTitlestb_usuarios["Spanish"] = array();
	$fieldLabelstb_usuarios["Spanish"]["usua_id"] = "ID";
	$fieldToolTipstb_usuarios["Spanish"]["usua_id"] = "";
	$placeHolderstb_usuarios["Spanish"]["usua_id"] = "";
	$fieldLabelstb_usuarios["Spanish"]["clie_id"] = "Identificación del cliente";
	$fieldToolTipstb_usuarios["Spanish"]["clie_id"] = "";
	$placeHolderstb_usuarios["Spanish"]["clie_id"] = "";
	$fieldLabelstb_usuarios["Spanish"]["usua_email"] = "Correo electrónico";
	$fieldToolTipstb_usuarios["Spanish"]["usua_email"] = "";
	$placeHolderstb_usuarios["Spanish"]["usua_email"] = "";
	$fieldLabelstb_usuarios["Spanish"]["usua_username"] = "Nombre de usuario";
	$fieldToolTipstb_usuarios["Spanish"]["usua_username"] = "";
	$placeHolderstb_usuarios["Spanish"]["usua_username"] = "";
	$fieldLabelstb_usuarios["Spanish"]["usua_senha"] = "Contraseña";
	$fieldToolTipstb_usuarios["Spanish"]["usua_senha"] = "";
	$placeHolderstb_usuarios["Spanish"]["usua_senha"] = "";
	$fieldLabelstb_usuarios["Spanish"]["usua_domi_status"] = "Domi Status";
	$fieldToolTipstb_usuarios["Spanish"]["usua_domi_status"] = "";
	$placeHolderstb_usuarios["Spanish"]["usua_domi_status"] = "";
	$fieldLabelstb_usuarios["Spanish"]["usua_login_ulti"] = "Último acceso";
	$fieldToolTipstb_usuarios["Spanish"]["usua_login_ulti"] = "";
	$placeHolderstb_usuarios["Spanish"]["usua_login_ulti"] = "";
	$fieldLabelstb_usuarios["Spanish"]["inclu_dt"] = "Incluido en";
	$fieldToolTipstb_usuarios["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_usuarios["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_usuarios["Spanish"]["alter_dt"] = "Cambiado en";
	$fieldToolTipstb_usuarios["Spanish"]["alter_dt"] = "";
	$placeHolderstb_usuarios["Spanish"]["alter_dt"] = "";
	$fieldLabelstb_usuarios["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_usuarios["Spanish"]["inclu_login"] = "";
	$placeHolderstb_usuarios["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_usuarios["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_usuarios["Spanish"]["alter_login"] = "";
	$placeHolderstb_usuarios["Spanish"]["alter_login"] = "";
	$fieldLabelstb_usuarios["Spanish"]["wlSituacao"] = "Wl Situacao";
	$fieldToolTipstb_usuarios["Spanish"]["wlSituacao"] = "";
	$placeHolderstb_usuarios["Spanish"]["wlSituacao"] = "";
	if (count($fieldToolTipstb_usuarios["Spanish"]))
		$tdatatb_usuarios[".isUseToolTips"] = true;
}


	$tdatatb_usuarios[".NCSearch"] = true;



$tdatatb_usuarios[".shortTableName"] = "tb_usuarios";
$tdatatb_usuarios[".nSecOptions"] = 1;

$tdatatb_usuarios[".mainTableOwnerID"] = "clie_id";
$tdatatb_usuarios[".entityType"] = 0;

$tdatatb_usuarios[".strOriginalTableName"] = "tb_usuarios";

	



$tdatatb_usuarios[".showAddInPopup"] = false;

$tdatatb_usuarios[".showEditInPopup"] = false;

$tdatatb_usuarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_usuarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_usuarios[".listAjax"] = false;
//	temporary
$tdatatb_usuarios[".listAjax"] = false;

	$tdatatb_usuarios[".audit"] = true;

	$tdatatb_usuarios[".locking"] = false;


$pages = $tdatatb_usuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_usuarios[".edit"] = true;
	$tdatatb_usuarios[".afterEditAction"] = 0;
	$tdatatb_usuarios[".closePopupAfterEdit"] = 1;
	$tdatatb_usuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_usuarios[".add"] = true;
$tdatatb_usuarios[".afterAddAction"] = 0;
$tdatatb_usuarios[".closePopupAfterAdd"] = 1;
$tdatatb_usuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_usuarios[".list"] = true;
}



$tdatatb_usuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_usuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_usuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_usuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_usuarios[".printFriendly"] = true;
}



$tdatatb_usuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_usuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_usuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_usuarios[".isUseAjaxSuggest"] = true;

$tdatatb_usuarios[".rowHighlite"] = true;



									

$tdatatb_usuarios[".ajaxCodeSnippetAdded"] = false;

$tdatatb_usuarios[".buttonsAdded"] = false;

$tdatatb_usuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_usuarios[".isUseTimeForSearch"] = false;


$tdatatb_usuarios[".badgeColor"] = "3CB371";


$tdatatb_usuarios[".allSearchFields"] = array();
$tdatatb_usuarios[".filterFields"] = array();
$tdatatb_usuarios[".requiredSearchFields"] = array();

$tdatatb_usuarios[".googleLikeFields"] = array();
$tdatatb_usuarios[".googleLikeFields"][] = "usua_id";
$tdatatb_usuarios[".googleLikeFields"][] = "clie_id";
$tdatatb_usuarios[".googleLikeFields"][] = "usua_domi_status";
$tdatatb_usuarios[".googleLikeFields"][] = "wlSituacao";
$tdatatb_usuarios[".googleLikeFields"][] = "usua_email";
$tdatatb_usuarios[".googleLikeFields"][] = "usua_username";
$tdatatb_usuarios[".googleLikeFields"][] = "usua_login_ulti";
$tdatatb_usuarios[".googleLikeFields"][] = "inclu_login";
$tdatatb_usuarios[".googleLikeFields"][] = "inclu_dt";
$tdatatb_usuarios[".googleLikeFields"][] = "alter_login";
$tdatatb_usuarios[".googleLikeFields"][] = "alter_dt";



$tdatatb_usuarios[".tableType"] = "list";

$tdatatb_usuarios[".printerPageOrientation"] = 0;
$tdatatb_usuarios[".nPrinterPageScale"] = 100;

$tdatatb_usuarios[".nPrinterSplitRecords"] = 40;

$tdatatb_usuarios[".geocodingEnabled"] = false;










$tdatatb_usuarios[".pageSize"] = 20;

$tdatatb_usuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_usuarios[".strOrderBy"] = $tstrOrderBy;

$tdatatb_usuarios[".orderindexes"] = array();

$tdatatb_usuarios[".sqlHead"] = "SELECT usua_id,  	clie_id,  	usua_domi_status,  	usua_domi_status AS wlSituacao,  	usua_email,  	usua_username,  	usua_senha,  	usua_login_ulti,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatatb_usuarios[".sqlFrom"] = "FROM tb_usuarios";
$tdatatb_usuarios[".sqlWhereExpr"] = "";
$tdatatb_usuarios[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "Todos",
	'name' => "<img src=\"images/beatles1_16.png\" alt=\"\" /> Todos",
	'nameType' => 'Text',
	'where' => "1=1",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Ativos",
	'name' => "<img src=\"images/circle_green_16.png\" alt=\"\"/> Ativos",
	'nameType' => 'Text',
	'where' => "usua_domi_status ='ATIVO'",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Cadastrados",
	'name' => "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Cadastrados",
	'nameType' => 'Text',
	'where' => "usua_domi_status ='CADASTRADO'",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdatatb_usuarios[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_usuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_usuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_usuarios[".highlightSearchResults"] = true;

$tableKeystb_usuarios = array();
$tableKeystb_usuarios[] = "usua_id";
$tdatatb_usuarios[".Keys"] = $tableKeystb_usuarios;


$tdatatb_usuarios[".hideMobileList"] = array();




//	usua_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "usua_id";
	$fdata["GoodName"] = "usua_id";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("tb_usuarios","usua_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "usua_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usua_id";

	
	
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


	$tdatatb_usuarios["usua_id"] = $fdata;
		$tdatatb_usuarios[".searchableFields"][] = "usua_id";
//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("tb_usuarios","clie_id");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "usua_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_usuarios["clie_id"] = $fdata;
		$tdatatb_usuarios[".searchableFields"][] = "clie_id";
//	usua_domi_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "usua_domi_status";
	$fdata["GoodName"] = "usua_domi_status";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("tb_usuarios","usua_domi_status");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "usua_domi_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usua_domi_status";

	
	
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
	$edata["LookupTable"] = "tb_dominios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "domi_valor";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "domi_exibe";

				$edata["LookupWhere"] = "domi_grupo = 'STATUS_USUARIO'";


	
	$edata["LookupOrderBy"] = "domi_ordem";

	
	
	
	

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "usua_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_usuarios["usua_domi_status"] = $fdata;
		$tdatatb_usuarios[".searchableFields"][] = "usua_domi_status";
//	wlSituacao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "wlSituacao";
	$fdata["GoodName"] = "wlSituacao";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("tb_usuarios","wlSituacao");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "usua_domi_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usua_domi_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
		$fdata["filterTotalFields"] = "usua_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_usuarios["wlSituacao"] = $fdata;
		$tdatatb_usuarios[".searchableFields"][] = "wlSituacao";
//	usua_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usua_email";
	$fdata["GoodName"] = "usua_email";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("tb_usuarios","usua_email");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "usua_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usua_email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "EMAIL__VALUE__J__CADASTRADO", "messageType" => "CustomID");

	
						if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatatb_usuarios["usua_email"] = $fdata;
		$tdatatb_usuarios[".searchableFields"][] = "usua_email";
//	usua_username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usua_username";
	$fdata["GoodName"] = "usua_username";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("tb_usuarios","usua_username");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "usua_username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usua_username";

	
	
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
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
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


	$tdatatb_usuarios["usua_username"] = $fdata;
		$tdatatb_usuarios[".searchableFields"][] = "usua_username";
//	usua_senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usua_senha";
	$fdata["GoodName"] = "usua_senha";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("tb_usuarios","usua_senha");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "usua_senha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usua_senha";

	
	
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
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
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


	$tdatatb_usuarios["usua_senha"] = $fdata;
		$tdatatb_usuarios[".searchableFields"][] = "usua_senha";
//	usua_login_ulti
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "usua_login_ulti";
	$fdata["GoodName"] = "usua_login_ulti";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("tb_usuarios","usua_login_ulti");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "usua_login_ulti";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usua_login_ulti";

	
	
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
		$fdata["filterTotalFields"] = "usua_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_usuarios["usua_login_ulti"] = $fdata;
		$tdatatb_usuarios[".searchableFields"][] = "usua_login_ulti";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("tb_usuarios","inclu_login");
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
		$fdata["filterTotalFields"] = "usua_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_usuarios["inclu_login"] = $fdata;
		$tdatatb_usuarios[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("tb_usuarios","inclu_dt");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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
		$fdata["filterTotalFields"] = "usua_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_usuarios["inclu_dt"] = $fdata;
		$tdatatb_usuarios[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("tb_usuarios","alter_login");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "usua_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_usuarios["alter_login"] = $fdata;
		$tdatatb_usuarios[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("tb_usuarios","alter_dt");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatatb_usuarios["alter_dt"] = $fdata;
		$tdatatb_usuarios[".searchableFields"][] = "alter_dt";


$tables_data["tb_usuarios"]=&$tdatatb_usuarios;
$field_labels["tb_usuarios"] = &$fieldLabelstb_usuarios;
$fieldToolTips["tb_usuarios"] = &$fieldToolTipstb_usuarios;
$placeHolders["tb_usuarios"] = &$placeHolderstb_usuarios;
$page_titles["tb_usuarios"] = &$pageTitlestb_usuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_usuarios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_usuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_usuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "usua_id,  	clie_id,  	usua_domi_status,  	usua_domi_status AS wlSituacao,  	usua_email,  	usua_username,  	usua_senha,  	usua_login_ulti,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM tb_usuarios";
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
	"m_strName" => "usua_id",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "tb_usuarios"
));

$proto6["m_sql"] = "usua_id";
$proto6["m_srcTableName"] = "tb_usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "tb_usuarios"
));

$proto8["m_sql"] = "clie_id";
$proto8["m_srcTableName"] = "tb_usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "usua_domi_status",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "tb_usuarios"
));

$proto10["m_sql"] = "usua_domi_status";
$proto10["m_srcTableName"] = "tb_usuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "usua_domi_status",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "tb_usuarios"
));

$proto12["m_sql"] = "usua_domi_status";
$proto12["m_srcTableName"] = "tb_usuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "wlSituacao";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usua_email",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "tb_usuarios"
));

$proto14["m_sql"] = "usua_email";
$proto14["m_srcTableName"] = "tb_usuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usua_username",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "tb_usuarios"
));

$proto16["m_sql"] = "usua_username";
$proto16["m_srcTableName"] = "tb_usuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usua_senha",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "tb_usuarios"
));

$proto18["m_sql"] = "usua_senha";
$proto18["m_srcTableName"] = "tb_usuarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "usua_login_ulti",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "tb_usuarios"
));

$proto20["m_sql"] = "usua_login_ulti";
$proto20["m_srcTableName"] = "tb_usuarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "tb_usuarios"
));

$proto22["m_sql"] = "inclu_login";
$proto22["m_srcTableName"] = "tb_usuarios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "tb_usuarios"
));

$proto24["m_sql"] = "inclu_dt";
$proto24["m_srcTableName"] = "tb_usuarios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "tb_usuarios"
));

$proto26["m_sql"] = "alter_login";
$proto26["m_srcTableName"] = "tb_usuarios";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "tb_usuarios"
));

$proto28["m_sql"] = "alter_dt";
$proto28["m_srcTableName"] = "tb_usuarios";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tb_usuarios";
$proto31["m_srcTableName"] = "tb_usuarios";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "usua_id";
$proto31["m_columns"][] = "clie_id";
$proto31["m_columns"][] = "usua_domi_status";
$proto31["m_columns"][] = "usua_email";
$proto31["m_columns"][] = "usua_username";
$proto31["m_columns"][] = "usua_senha";
$proto31["m_columns"][] = "usua_login_ulti";
$proto31["m_columns"][] = "inclu_login";
$proto31["m_columns"][] = "inclu_dt";
$proto31["m_columns"][] = "alter_login";
$proto31["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "tb_usuarios";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "tb_usuarios";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_usuarios = createSqlQuery_tb_usuarios();


	
		;

												

$tdatatb_usuarios[".sqlquery"] = $queryData_tb_usuarios;

include_once(getabspath("include/tb_usuarios_events.php"));
$tableEvents["tb_usuarios"] = new eventclass_tb_usuarios;
$tdatatb_usuarios[".hasEvents"] = true;

?>