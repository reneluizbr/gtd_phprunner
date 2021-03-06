<?php



$tdatatb_clientes = array();
$tdatatb_clientes[".searchableFields"] = array();
$tdatatb_clientes[".ShortName"] = "tb_clientes";
$tdatatb_clientes[".OwnerID"] = "clie_id";
$tdatatb_clientes[".OriginalTable"] = "tb_clientes";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"lista_cartoes\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatb_clientes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"lista_cartoes\",\"cartao_cliente\",\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_clientes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"lista_cartoes\",\"cartao_cliente\",\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_clientes[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstb_clientes = array();
$fieldToolTipstb_clientes = array();
$pageTitlestb_clientes = array();
$placeHolderstb_clientes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_clientes["English"] = array();
	$fieldToolTipstb_clientes["English"] = array();
	$placeHolderstb_clientes["English"] = array();
	$pageTitlestb_clientes["English"] = array();
	$fieldLabelstb_clientes["English"]["clie_id"] = "ID";
	$fieldToolTipstb_clientes["English"]["clie_id"] = "";
	$placeHolderstb_clientes["English"]["clie_id"] = "";
	$fieldLabelstb_clientes["English"]["clie_nm_reduzido"] = "Name";
	$fieldToolTipstb_clientes["English"]["clie_nm_reduzido"] = "";
	$placeHolderstb_clientes["English"]["clie_nm_reduzido"] = "";
	$fieldLabelstb_clientes["English"]["clie_email"] = "Email";
	$fieldToolTipstb_clientes["English"]["clie_email"] = "";
	$placeHolderstb_clientes["English"]["clie_email"] = "";
	$fieldLabelstb_clientes["English"]["clie_endereco"] = "Address";
	$fieldToolTipstb_clientes["English"]["clie_endereco"] = "";
	$placeHolderstb_clientes["English"]["clie_endereco"] = "";
	$fieldLabelstb_clientes["English"]["clie_pais"] = "Parents";
	$fieldToolTipstb_clientes["English"]["clie_pais"] = "";
	$placeHolderstb_clientes["English"]["clie_pais"] = "";
	$fieldLabelstb_clientes["English"]["clie_domi_status"] = "Domain Status";
	$fieldToolTipstb_clientes["English"]["clie_domi_status"] = "";
	$placeHolderstb_clientes["English"]["clie_domi_status"] = "";
	$fieldLabelstb_clientes["English"]["clie_nm_completo"] = "Full name";
	$fieldToolTipstb_clientes["English"]["clie_nm_completo"] = "";
	$placeHolderstb_clientes["English"]["clie_nm_completo"] = "";
	$fieldLabelstb_clientes["English"]["clie_fones_contato"] = "Contact Headphones";
	$fieldToolTipstb_clientes["English"]["clie_fones_contato"] = "";
	$placeHolderstb_clientes["English"]["clie_fones_contato"] = "";
	$fieldLabelstb_clientes["English"]["inclu_dt"] = "Included in";
	$fieldToolTipstb_clientes["English"]["inclu_dt"] = "";
	$placeHolderstb_clientes["English"]["inclu_dt"] = "";
	$fieldLabelstb_clientes["English"]["alter_dt"] = "Changed on";
	$fieldToolTipstb_clientes["English"]["alter_dt"] = "";
	$placeHolderstb_clientes["English"]["alter_dt"] = "";
	$fieldLabelstb_clientes["English"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_clientes["English"]["inclu_login"] = "";
	$placeHolderstb_clientes["English"]["inclu_login"] = "";
	$fieldLabelstb_clientes["English"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_clientes["English"]["alter_login"] = "";
	$placeHolderstb_clientes["English"]["alter_login"] = "";
	if (count($fieldToolTipstb_clientes["English"]))
		$tdatatb_clientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_clientes["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_clientes["Portuguese(Brazil)"] = array();
	$placeHolderstb_clientes["Portuguese(Brazil)"] = array();
	$pageTitlestb_clientes["Portuguese(Brazil)"] = array();
	$fieldLabelstb_clientes["Portuguese(Brazil)"]["clie_id"] = "ID";
	$fieldToolTipstb_clientes["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHolderstb_clientes["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelstb_clientes["Portuguese(Brazil)"]["clie_nm_reduzido"] = "Nome";
	$fieldToolTipstb_clientes["Portuguese(Brazil)"]["clie_nm_reduzido"] = "";
	$placeHolderstb_clientes["Portuguese(Brazil)"]["clie_nm_reduzido"] = "";
	$fieldLabelstb_clientes["Portuguese(Brazil)"]["clie_email"] = "Email";
	$fieldToolTipstb_clientes["Portuguese(Brazil)"]["clie_email"] = "";
	$placeHolderstb_clientes["Portuguese(Brazil)"]["clie_email"] = "";
	$fieldLabelstb_clientes["Portuguese(Brazil)"]["clie_endereco"] = "Endereço";
	$fieldToolTipstb_clientes["Portuguese(Brazil)"]["clie_endereco"] = "";
	$placeHolderstb_clientes["Portuguese(Brazil)"]["clie_endereco"] = "";
	$fieldLabelstb_clientes["Portuguese(Brazil)"]["clie_pais"] = "País";
	$fieldToolTipstb_clientes["Portuguese(Brazil)"]["clie_pais"] = "";
	$placeHolderstb_clientes["Portuguese(Brazil)"]["clie_pais"] = "";
	$fieldLabelstb_clientes["Portuguese(Brazil)"]["clie_domi_status"] = "Status";
	$fieldToolTipstb_clientes["Portuguese(Brazil)"]["clie_domi_status"] = "";
	$placeHolderstb_clientes["Portuguese(Brazil)"]["clie_domi_status"] = "";
	$fieldLabelstb_clientes["Portuguese(Brazil)"]["clie_nm_completo"] = "Nome Completo";
	$fieldToolTipstb_clientes["Portuguese(Brazil)"]["clie_nm_completo"] = "";
	$placeHolderstb_clientes["Portuguese(Brazil)"]["clie_nm_completo"] = "";
	$fieldLabelstb_clientes["Portuguese(Brazil)"]["clie_fones_contato"] = "Fones de Contato";
	$fieldToolTipstb_clientes["Portuguese(Brazil)"]["clie_fones_contato"] = "";
	$placeHolderstb_clientes["Portuguese(Brazil)"]["clie_fones_contato"] = "";
	$fieldLabelstb_clientes["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipstb_clientes["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHolderstb_clientes["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelstb_clientes["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipstb_clientes["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHolderstb_clientes["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelstb_clientes["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipstb_clientes["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHolderstb_clientes["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelstb_clientes["Portuguese(Brazil)"]["alter_login"] = "Alterado por";
	$fieldToolTipstb_clientes["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHolderstb_clientes["Portuguese(Brazil)"]["alter_login"] = "";
	if (count($fieldToolTipstb_clientes["Portuguese(Brazil)"]))
		$tdatatb_clientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstb_clientes["Spanish"] = array();
	$fieldToolTipstb_clientes["Spanish"] = array();
	$placeHolderstb_clientes["Spanish"] = array();
	$pageTitlestb_clientes["Spanish"] = array();
	$fieldLabelstb_clientes["Spanish"]["clie_id"] = "ID";
	$fieldToolTipstb_clientes["Spanish"]["clie_id"] = "";
	$placeHolderstb_clientes["Spanish"]["clie_id"] = "";
	$fieldLabelstb_clientes["Spanish"]["clie_nm_reduzido"] = "Nombre";
	$fieldToolTipstb_clientes["Spanish"]["clie_nm_reduzido"] = "";
	$placeHolderstb_clientes["Spanish"]["clie_nm_reduzido"] = "";
	$fieldLabelstb_clientes["Spanish"]["clie_email"] = "Correo electrónico";
	$fieldToolTipstb_clientes["Spanish"]["clie_email"] = "";
	$placeHolderstb_clientes["Spanish"]["clie_email"] = "";
	$fieldLabelstb_clientes["Spanish"]["clie_endereco"] = "Habla a";
	$fieldToolTipstb_clientes["Spanish"]["clie_endereco"] = "";
	$placeHolderstb_clientes["Spanish"]["clie_endereco"] = "";
	$fieldLabelstb_clientes["Spanish"]["clie_pais"] = "Padres";
	$fieldToolTipstb_clientes["Spanish"]["clie_pais"] = "";
	$placeHolderstb_clientes["Spanish"]["clie_pais"] = "";
	$fieldLabelstb_clientes["Spanish"]["clie_domi_status"] = "Estado del dominio";
	$fieldToolTipstb_clientes["Spanish"]["clie_domi_status"] = "";
	$placeHolderstb_clientes["Spanish"]["clie_domi_status"] = "";
	$fieldLabelstb_clientes["Spanish"]["clie_nm_completo"] = "Nombre completo";
	$fieldToolTipstb_clientes["Spanish"]["clie_nm_completo"] = "";
	$placeHolderstb_clientes["Spanish"]["clie_nm_completo"] = "";
	$fieldLabelstb_clientes["Spanish"]["clie_fones_contato"] = "Auriculares de contacto";
	$fieldToolTipstb_clientes["Spanish"]["clie_fones_contato"] = "";
	$placeHolderstb_clientes["Spanish"]["clie_fones_contato"] = "";
	$fieldLabelstb_clientes["Spanish"]["inclu_dt"] = "Incluido en";
	$fieldToolTipstb_clientes["Spanish"]["inclu_dt"] = "";
	$placeHolderstb_clientes["Spanish"]["inclu_dt"] = "";
	$fieldLabelstb_clientes["Spanish"]["alter_dt"] = "Cambiado en";
	$fieldToolTipstb_clientes["Spanish"]["alter_dt"] = "";
	$placeHolderstb_clientes["Spanish"]["alter_dt"] = "";
	$fieldLabelstb_clientes["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipstb_clientes["Spanish"]["inclu_login"] = "";
	$placeHolderstb_clientes["Spanish"]["inclu_login"] = "";
	$fieldLabelstb_clientes["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipstb_clientes["Spanish"]["alter_login"] = "";
	$placeHolderstb_clientes["Spanish"]["alter_login"] = "";
	if (count($fieldToolTipstb_clientes["Spanish"]))
		$tdatatb_clientes[".isUseToolTips"] = true;
}


	$tdatatb_clientes[".NCSearch"] = true;



$tdatatb_clientes[".shortTableName"] = "tb_clientes";
$tdatatb_clientes[".nSecOptions"] = 1;

$tdatatb_clientes[".mainTableOwnerID"] = "clie_id";
$tdatatb_clientes[".entityType"] = 0;

$tdatatb_clientes[".strOriginalTableName"] = "tb_clientes";

	



$tdatatb_clientes[".showAddInPopup"] = false;

$tdatatb_clientes[".showEditInPopup"] = false;

$tdatatb_clientes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_clientes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_clientes[".listAjax"] = false;
//	temporary
$tdatatb_clientes[".listAjax"] = false;

	$tdatatb_clientes[".audit"] = true;

	$tdatatb_clientes[".locking"] = false;


$pages = $tdatatb_clientes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_clientes[".edit"] = true;
	$tdatatb_clientes[".afterEditAction"] = 0;
	$tdatatb_clientes[".closePopupAfterEdit"] = 1;
	$tdatatb_clientes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_clientes[".add"] = true;
$tdatatb_clientes[".afterAddAction"] = 0;
$tdatatb_clientes[".closePopupAfterAdd"] = 1;
$tdatatb_clientes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_clientes[".list"] = true;
}



$tdatatb_clientes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_clientes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_clientes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_clientes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_clientes[".printFriendly"] = true;
}



$tdatatb_clientes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_clientes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_clientes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_clientes[".isUseAjaxSuggest"] = true;

$tdatatb_clientes[".rowHighlite"] = true;



									

$tdatatb_clientes[".ajaxCodeSnippetAdded"] = false;

$tdatatb_clientes[".buttonsAdded"] = false;

$tdatatb_clientes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_clientes[".isUseTimeForSearch"] = false;


$tdatatb_clientes[".badgeColor"] = "CD853F";


$tdatatb_clientes[".allSearchFields"] = array();
$tdatatb_clientes[".filterFields"] = array();
$tdatatb_clientes[".requiredSearchFields"] = array();

$tdatatb_clientes[".googleLikeFields"] = array();
$tdatatb_clientes[".googleLikeFields"][] = "clie_id";
$tdatatb_clientes[".googleLikeFields"][] = "clie_nm_reduzido";
$tdatatb_clientes[".googleLikeFields"][] = "clie_email";
$tdatatb_clientes[".googleLikeFields"][] = "clie_endereco";
$tdatatb_clientes[".googleLikeFields"][] = "clie_pais";
$tdatatb_clientes[".googleLikeFields"][] = "clie_domi_status";
$tdatatb_clientes[".googleLikeFields"][] = "clie_nm_completo";
$tdatatb_clientes[".googleLikeFields"][] = "clie_fones_contato";
$tdatatb_clientes[".googleLikeFields"][] = "inclu_login";
$tdatatb_clientes[".googleLikeFields"][] = "inclu_dt";
$tdatatb_clientes[".googleLikeFields"][] = "alter_login";
$tdatatb_clientes[".googleLikeFields"][] = "alter_dt";



$tdatatb_clientes[".tableType"] = "list";

$tdatatb_clientes[".printerPageOrientation"] = 0;
$tdatatb_clientes[".nPrinterPageScale"] = 100;

$tdatatb_clientes[".nPrinterSplitRecords"] = 40;

$tdatatb_clientes[".geocodingEnabled"] = false;










$tdatatb_clientes[".pageSize"] = 20;

$tdatatb_clientes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_clientes[".strOrderBy"] = $tstrOrderBy;

$tdatatb_clientes[".orderindexes"] = array();

$tdatatb_clientes[".sqlHead"] = "SELECT clie_id,  	clie_nm_reduzido,  	clie_email,  	clie_endereco,  	clie_pais,  	clie_domi_status,  	clie_nm_completo,  	clie_fones_contato,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$tdatatb_clientes[".sqlFrom"] = "FROM tb_clientes";
$tdatatb_clientes[".sqlWhereExpr"] = "";
$tdatatb_clientes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_clientes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_clientes[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_clientes[".highlightSearchResults"] = true;

$tableKeystb_clientes = array();
$tableKeystb_clientes[] = "clie_id";
$tdatatb_clientes[".Keys"] = $tableKeystb_clientes;


$tdatatb_clientes[".hideMobileList"] = array();




//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_clientes";
	$fdata["Label"] = GetFieldLabel("tb_clientes","clie_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatatb_clientes["clie_id"] = $fdata;
		$tdatatb_clientes[".searchableFields"][] = "clie_id";
//	clie_nm_reduzido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clie_nm_reduzido";
	$fdata["GoodName"] = "clie_nm_reduzido";
	$fdata["ownerTable"] = "tb_clientes";
	$fdata["Label"] = GetFieldLabel("tb_clientes","clie_nm_reduzido");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "clie_nm_reduzido";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clie_nm_reduzido";

	
	
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


	$tdatatb_clientes["clie_nm_reduzido"] = $fdata;
		$tdatatb_clientes[".searchableFields"][] = "clie_nm_reduzido";
//	clie_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "clie_email";
	$fdata["GoodName"] = "clie_email";
	$fdata["ownerTable"] = "tb_clientes";
	$fdata["Label"] = GetFieldLabel("tb_clientes","clie_email");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "clie_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clie_email";

	
	
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


	$tdatatb_clientes["clie_email"] = $fdata;
		$tdatatb_clientes[".searchableFields"][] = "clie_email";
//	clie_endereco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "clie_endereco";
	$fdata["GoodName"] = "clie_endereco";
	$fdata["ownerTable"] = "tb_clientes";
	$fdata["Label"] = GetFieldLabel("tb_clientes","clie_endereco");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "clie_endereco";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clie_endereco";

	
	
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


	$tdatatb_clientes["clie_endereco"] = $fdata;
		$tdatatb_clientes[".searchableFields"][] = "clie_endereco";
//	clie_pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "clie_pais";
	$fdata["GoodName"] = "clie_pais";
	$fdata["ownerTable"] = "tb_clientes";
	$fdata["Label"] = GetFieldLabel("tb_clientes","clie_pais");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "clie_pais";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clie_pais";

	
	
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


	$tdatatb_clientes["clie_pais"] = $fdata;
		$tdatatb_clientes[".searchableFields"][] = "clie_pais";
//	clie_domi_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "clie_domi_status";
	$fdata["GoodName"] = "clie_domi_status";
	$fdata["ownerTable"] = "tb_clientes";
	$fdata["Label"] = GetFieldLabel("tb_clientes","clie_domi_status");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "clie_domi_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clie_domi_status";

	
	
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "domi_valor";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "domi_ordem||'-'||domi_exibe";

				$edata["LookupWhere"] = "domi_grupo = \"CLIENTE_STATUS\"";


		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "domi_ordem";

	
	
	
	

	
	
	
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


	$tdatatb_clientes["clie_domi_status"] = $fdata;
		$tdatatb_clientes[".searchableFields"][] = "clie_domi_status";
//	clie_nm_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "clie_nm_completo";
	$fdata["GoodName"] = "clie_nm_completo";
	$fdata["ownerTable"] = "tb_clientes";
	$fdata["Label"] = GetFieldLabel("tb_clientes","clie_nm_completo");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "clie_nm_completo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clie_nm_completo";

	
	
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


	$tdatatb_clientes["clie_nm_completo"] = $fdata;
		$tdatatb_clientes[".searchableFields"][] = "clie_nm_completo";
//	clie_fones_contato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "clie_fones_contato";
	$fdata["GoodName"] = "clie_fones_contato";
	$fdata["ownerTable"] = "tb_clientes";
	$fdata["Label"] = GetFieldLabel("tb_clientes","clie_fones_contato");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "clie_fones_contato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clie_fones_contato";

	
	
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


	$tdatatb_clientes["clie_fones_contato"] = $fdata;
		$tdatatb_clientes[".searchableFields"][] = "clie_fones_contato";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_clientes";
	$fdata["Label"] = GetFieldLabel("tb_clientes","inclu_login");
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


	$tdatatb_clientes["inclu_login"] = $fdata;
		$tdatatb_clientes[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_clientes";
	$fdata["Label"] = GetFieldLabel("tb_clientes","inclu_dt");
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
		$fdata["filterTotalFields"] = "clie_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_clientes["inclu_dt"] = $fdata;
		$tdatatb_clientes[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_clientes";
	$fdata["Label"] = GetFieldLabel("tb_clientes","alter_login");
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


	$tdatatb_clientes["alter_login"] = $fdata;
		$tdatatb_clientes[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_clientes";
	$fdata["Label"] = GetFieldLabel("tb_clientes","alter_dt");
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


	$tdatatb_clientes["alter_dt"] = $fdata;
		$tdatatb_clientes[".searchableFields"][] = "alter_dt";


$tables_data["tb_clientes"]=&$tdatatb_clientes;
$field_labels["tb_clientes"] = &$fieldLabelstb_clientes;
$fieldToolTips["tb_clientes"] = &$fieldToolTipstb_clientes;
$placeHolders["tb_clientes"] = &$placeHolderstb_clientes;
$page_titles["tb_clientes"] = &$pageTitlestb_clientes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_clientes"] = array();
//	tb_clientes_planos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_clientes_planos";
		$detailsParam["dOriginalTable"] = "tb_clientes_planos";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_clientes_planos";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_clientes_planos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_clientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_clientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_clientes"][$dIndex]["masterKeys"][]="clie_id";

				$detailsTablesData["tb_clientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_clientes"][$dIndex]["detailKeys"][]="clie_id";

// tables which are master tables for current table (detail)
$masterTablesData["tb_clientes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_clientes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "clie_id,  	clie_nm_reduzido,  	clie_email,  	clie_endereco,  	clie_pais,  	clie_domi_status,  	clie_nm_completo,  	clie_fones_contato,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt";
$proto0["m_strFrom"] = "FROM tb_clientes";
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
	"m_strName" => "clie_id",
	"m_strTable" => "tb_clientes",
	"m_srcTableName" => "tb_clientes"
));

$proto6["m_sql"] = "clie_id";
$proto6["m_srcTableName"] = "tb_clientes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_nm_reduzido",
	"m_strTable" => "tb_clientes",
	"m_srcTableName" => "tb_clientes"
));

$proto8["m_sql"] = "clie_nm_reduzido";
$proto8["m_srcTableName"] = "tb_clientes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_email",
	"m_strTable" => "tb_clientes",
	"m_srcTableName" => "tb_clientes"
));

$proto10["m_sql"] = "clie_email";
$proto10["m_srcTableName"] = "tb_clientes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_endereco",
	"m_strTable" => "tb_clientes",
	"m_srcTableName" => "tb_clientes"
));

$proto12["m_sql"] = "clie_endereco";
$proto12["m_srcTableName"] = "tb_clientes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_pais",
	"m_strTable" => "tb_clientes",
	"m_srcTableName" => "tb_clientes"
));

$proto14["m_sql"] = "clie_pais";
$proto14["m_srcTableName"] = "tb_clientes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_domi_status",
	"m_strTable" => "tb_clientes",
	"m_srcTableName" => "tb_clientes"
));

$proto16["m_sql"] = "clie_domi_status";
$proto16["m_srcTableName"] = "tb_clientes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_nm_completo",
	"m_strTable" => "tb_clientes",
	"m_srcTableName" => "tb_clientes"
));

$proto18["m_sql"] = "clie_nm_completo";
$proto18["m_srcTableName"] = "tb_clientes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_fones_contato",
	"m_strTable" => "tb_clientes",
	"m_srcTableName" => "tb_clientes"
));

$proto20["m_sql"] = "clie_fones_contato";
$proto20["m_srcTableName"] = "tb_clientes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_clientes",
	"m_srcTableName" => "tb_clientes"
));

$proto22["m_sql"] = "inclu_login";
$proto22["m_srcTableName"] = "tb_clientes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_clientes",
	"m_srcTableName" => "tb_clientes"
));

$proto24["m_sql"] = "inclu_dt";
$proto24["m_srcTableName"] = "tb_clientes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_clientes",
	"m_srcTableName" => "tb_clientes"
));

$proto26["m_sql"] = "alter_login";
$proto26["m_srcTableName"] = "tb_clientes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_clientes",
	"m_srcTableName" => "tb_clientes"
));

$proto28["m_sql"] = "alter_dt";
$proto28["m_srcTableName"] = "tb_clientes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tb_clientes";
$proto31["m_srcTableName"] = "tb_clientes";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "clie_id";
$proto31["m_columns"][] = "clie_nm_reduzido";
$proto31["m_columns"][] = "clie_email";
$proto31["m_columns"][] = "clie_endereco";
$proto31["m_columns"][] = "clie_pais";
$proto31["m_columns"][] = "clie_domi_status";
$proto31["m_columns"][] = "clie_nm_completo";
$proto31["m_columns"][] = "clie_fones_contato";
$proto31["m_columns"][] = "inclu_login";
$proto31["m_columns"][] = "inclu_dt";
$proto31["m_columns"][] = "alter_login";
$proto31["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "tb_clientes";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "tb_clientes";
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
$proto0["m_srcTableName"]="tb_clientes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_clientes = createSqlQuery_tb_clientes();


	
		;

												

$tdatatb_clientes[".sqlquery"] = $queryData_tb_clientes;

include_once(getabspath("include/tb_clientes_events.php"));
$tableEvents["tb_clientes"] = new eventclass_tb_clientes;
$tdatatb_clientes[".hasEvents"] = true;

?>