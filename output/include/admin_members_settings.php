<?php



$tdataadmin_members = array();
$tdataadmin_members[".searchableFields"] = array();
$tdataadmin_members[".ShortName"] = "admin_members";
$tdataadmin_members[".OwnerID"] = "clie_id";
$tdataadmin_members[".OriginalTable"] = "tb_usuarios";


$defaultPages = my_json_decode( "{\"search\":\"search\"}" );

$tdataadmin_members[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataadmin_members[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataadmin_members[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();
$placeHoldersadmin_members = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$placeHoldersadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["usua_id"] = "ID";
	$fieldToolTipsadmin_members["English"]["usua_id"] = "";
	$placeHoldersadmin_members["English"]["usua_id"] = "";
	$fieldLabelsadmin_members["English"]["clie_id"] = "Customer ID";
	$fieldToolTipsadmin_members["English"]["clie_id"] = "";
	$placeHoldersadmin_members["English"]["clie_id"] = "";
	$fieldLabelsadmin_members["English"]["usua_domi_status"] = "Domi Status";
	$fieldToolTipsadmin_members["English"]["usua_domi_status"] = "";
	$placeHoldersadmin_members["English"]["usua_domi_status"] = "";
	$fieldLabelsadmin_members["English"]["usua_email"] = "Email";
	$fieldToolTipsadmin_members["English"]["usua_email"] = "";
	$placeHoldersadmin_members["English"]["usua_email"] = "";
	$fieldLabelsadmin_members["English"]["usua_username"] = "Username";
	$fieldToolTipsadmin_members["English"]["usua_username"] = "";
	$placeHoldersadmin_members["English"]["usua_username"] = "";
	$fieldLabelsadmin_members["English"]["usua_senha"] = "Password";
	$fieldToolTipsadmin_members["English"]["usua_senha"] = "";
	$placeHoldersadmin_members["English"]["usua_senha"] = "";
	$fieldLabelsadmin_members["English"]["usua_login_ulti"] = "Last Login";
	$fieldToolTipsadmin_members["English"]["usua_login_ulti"] = "";
	$placeHoldersadmin_members["English"]["usua_login_ulti"] = "";
	$fieldLabelsadmin_members["English"]["inclu_dt"] = "Included on";
	$fieldToolTipsadmin_members["English"]["inclu_dt"] = "";
	$placeHoldersadmin_members["English"]["inclu_dt"] = "";
	$fieldLabelsadmin_members["English"]["alter_dt"] = "Changed on";
	$fieldToolTipsadmin_members["English"]["alter_dt"] = "";
	$placeHoldersadmin_members["English"]["alter_dt"] = "";
	$fieldLabelsadmin_members["English"]["inclu_login"] = "Included by";
	$fieldToolTipsadmin_members["English"]["inclu_login"] = "";
	$placeHoldersadmin_members["English"]["inclu_login"] = "";
	$fieldLabelsadmin_members["English"]["alter_login"] = "Changed by";
	$fieldToolTipsadmin_members["English"]["alter_login"] = "";
	$placeHoldersadmin_members["English"]["alter_login"] = "";
	$fieldLabelsadmin_members["English"]["usua_idioma_ulti"] = "Usua Idioma Ulti";
	$fieldToolTipsadmin_members["English"]["usua_idioma_ulti"] = "";
	$placeHoldersadmin_members["English"]["usua_idioma_ulti"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadmin_members["Portuguese(Brazil)"] = array();
	$fieldToolTipsadmin_members["Portuguese(Brazil)"] = array();
	$placeHoldersadmin_members["Portuguese(Brazil)"] = array();
	$pageTitlesadmin_members["Portuguese(Brazil)"] = array();
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["usua_id"] = "ID";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["usua_id"] = "";
	$placeHoldersadmin_members["Portuguese(Brazil)"]["usua_id"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["clie_id"] = "ID Cliente";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["clie_id"] = "";
	$placeHoldersadmin_members["Portuguese(Brazil)"]["clie_id"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["usua_domi_status"] = "Status";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["usua_domi_status"] = "";
	$placeHoldersadmin_members["Portuguese(Brazil)"]["usua_domi_status"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["usua_email"] = "Email";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["usua_email"] = "";
	$placeHoldersadmin_members["Portuguese(Brazil)"]["usua_email"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["usua_username"] = "Username";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["usua_username"] = "";
	$placeHoldersadmin_members["Portuguese(Brazil)"]["usua_username"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["usua_senha"] = "Senha";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["usua_senha"] = "";
	$placeHoldersadmin_members["Portuguese(Brazil)"]["usua_senha"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["usua_login_ulti"] = "Último Login";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["usua_login_ulti"] = "";
	$placeHoldersadmin_members["Portuguese(Brazil)"]["usua_login_ulti"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["inclu_dt"] = "Incluído em";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["inclu_dt"] = "";
	$placeHoldersadmin_members["Portuguese(Brazil)"]["inclu_dt"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["alter_dt"] = "Alterado em";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["alter_dt"] = "";
	$placeHoldersadmin_members["Portuguese(Brazil)"]["alter_dt"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["inclu_login"] = "Incluído por";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["inclu_login"] = "";
	$placeHoldersadmin_members["Portuguese(Brazil)"]["inclu_login"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["alter_login"] = "Alterado por";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["alter_login"] = "";
	$placeHoldersadmin_members["Portuguese(Brazil)"]["alter_login"] = "";
	$fieldLabelsadmin_members["Portuguese(Brazil)"]["usua_idioma_ulti"] = "Usua Idioma Ulti";
	$fieldToolTipsadmin_members["Portuguese(Brazil)"]["usua_idioma_ulti"] = "";
	$placeHoldersadmin_members["Portuguese(Brazil)"]["usua_idioma_ulti"] = "";
	if (count($fieldToolTipsadmin_members["Portuguese(Brazil)"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_members["Spanish"] = array();
	$fieldToolTipsadmin_members["Spanish"] = array();
	$placeHoldersadmin_members["Spanish"] = array();
	$pageTitlesadmin_members["Spanish"] = array();
	$fieldLabelsadmin_members["Spanish"]["usua_id"] = "ID";
	$fieldToolTipsadmin_members["Spanish"]["usua_id"] = "";
	$placeHoldersadmin_members["Spanish"]["usua_id"] = "";
	$fieldLabelsadmin_members["Spanish"]["clie_id"] = "Identificación del cliente";
	$fieldToolTipsadmin_members["Spanish"]["clie_id"] = "";
	$placeHoldersadmin_members["Spanish"]["clie_id"] = "";
	$fieldLabelsadmin_members["Spanish"]["usua_email"] = "Correo electrónico";
	$fieldToolTipsadmin_members["Spanish"]["usua_email"] = "";
	$placeHoldersadmin_members["Spanish"]["usua_email"] = "";
	$fieldLabelsadmin_members["Spanish"]["usua_username"] = "Nombre de usuario";
	$fieldToolTipsadmin_members["Spanish"]["usua_username"] = "";
	$placeHoldersadmin_members["Spanish"]["usua_username"] = "";
	$fieldLabelsadmin_members["Spanish"]["usua_senha"] = "Contraseña";
	$fieldToolTipsadmin_members["Spanish"]["usua_senha"] = "";
	$placeHoldersadmin_members["Spanish"]["usua_senha"] = "";
	$fieldLabelsadmin_members["Spanish"]["usua_domi_status"] = "Domi Status";
	$fieldToolTipsadmin_members["Spanish"]["usua_domi_status"] = "";
	$placeHoldersadmin_members["Spanish"]["usua_domi_status"] = "";
	$fieldLabelsadmin_members["Spanish"]["usua_login_ulti"] = "Último acceso";
	$fieldToolTipsadmin_members["Spanish"]["usua_login_ulti"] = "";
	$placeHoldersadmin_members["Spanish"]["usua_login_ulti"] = "";
	$fieldLabelsadmin_members["Spanish"]["inclu_dt"] = "Incluido en";
	$fieldToolTipsadmin_members["Spanish"]["inclu_dt"] = "";
	$placeHoldersadmin_members["Spanish"]["inclu_dt"] = "";
	$fieldLabelsadmin_members["Spanish"]["alter_dt"] = "Cambiado en";
	$fieldToolTipsadmin_members["Spanish"]["alter_dt"] = "";
	$placeHoldersadmin_members["Spanish"]["alter_dt"] = "";
	$fieldLabelsadmin_members["Spanish"]["inclu_login"] = "Inclu Login";
	$fieldToolTipsadmin_members["Spanish"]["inclu_login"] = "";
	$placeHoldersadmin_members["Spanish"]["inclu_login"] = "";
	$fieldLabelsadmin_members["Spanish"]["alter_login"] = "Alter Login";
	$fieldToolTipsadmin_members["Spanish"]["alter_login"] = "";
	$placeHoldersadmin_members["Spanish"]["alter_login"] = "";
	$fieldLabelsadmin_members["Spanish"]["usua_idioma_ulti"] = "Usua Idioma Ulti";
	$fieldToolTipsadmin_members["Spanish"]["usua_idioma_ulti"] = "";
	$placeHoldersadmin_members["Spanish"]["usua_idioma_ulti"] = "";
	if (count($fieldToolTipsadmin_members["Spanish"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 2;

$tdataadmin_members[".mainTableOwnerID"] = "clie_id";
$tdataadmin_members[".entityType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "tb_usuarios";

	



$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".listAjax"] = false;
//	temporary
$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = true;

	$tdataadmin_members[".locking"] = false;


$pages = $tdataadmin_members[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadmin_members[".edit"] = true;
	$tdataadmin_members[".afterEditAction"] = 0;
	$tdataadmin_members[".closePopupAfterEdit"] = 1;
	$tdataadmin_members[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadmin_members[".add"] = true;
$tdataadmin_members[".afterAddAction"] = 0;
$tdataadmin_members[".closePopupAfterAdd"] = 1;
$tdataadmin_members[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadmin_members[".list"] = true;
}



$tdataadmin_members[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadmin_members[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadmin_members[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadmin_members[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadmin_members[".printFriendly"] = true;
}



$tdataadmin_members[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadmin_members[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadmin_members[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;



									

$tdataadmin_members[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_members[".buttonsAdded"] = false;

$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;


$tdataadmin_members[".badgeColor"] = "4169E1";


$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "usua_id";
$tdataadmin_members[".googleLikeFields"][] = "clie_id";
$tdataadmin_members[".googleLikeFields"][] = "usua_domi_status";
$tdataadmin_members[".googleLikeFields"][] = "usua_email";
$tdataadmin_members[".googleLikeFields"][] = "usua_username";
$tdataadmin_members[".googleLikeFields"][] = "usua_senha";
$tdataadmin_members[".googleLikeFields"][] = "usua_login_ulti";
$tdataadmin_members[".googleLikeFields"][] = "inclu_login";
$tdataadmin_members[".googleLikeFields"][] = "inclu_dt";
$tdataadmin_members[".googleLikeFields"][] = "alter_login";
$tdataadmin_members[".googleLikeFields"][] = "alter_dt";
$tdataadmin_members[".googleLikeFields"][] = "usua_idioma_ulti";



$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".geocodingEnabled"] = false;










$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT usua_id,  	clie_id,  	usua_domi_status,  	usua_email,  	usua_username,  	usua_senha,  	usua_login_ulti,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt,  	usua_idioma_ulti";
$tdataadmin_members[".sqlFrom"] = "FROM tb_usuarios";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "usua_id";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;


$tdataadmin_members[".hideMobileList"] = array();




//	usua_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "usua_id";
	$fdata["GoodName"] = "usua_id";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","usua_id");
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


	$tdataadmin_members["usua_id"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usua_id";
//	clie_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clie_id";
	$fdata["GoodName"] = "clie_id";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","clie_id");
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


	$tdataadmin_members["clie_id"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "clie_id";
//	usua_domi_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "usua_domi_status";
	$fdata["GoodName"] = "usua_domi_status";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","usua_domi_status");
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


	$tdataadmin_members["usua_domi_status"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usua_domi_status";
//	usua_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "usua_email";
	$fdata["GoodName"] = "usua_email";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","usua_email");
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


	$tdataadmin_members["usua_email"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usua_email";
//	usua_username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usua_username";
	$fdata["GoodName"] = "usua_username";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","usua_username");
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


	$tdataadmin_members["usua_username"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usua_username";
//	usua_senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usua_senha";
	$fdata["GoodName"] = "usua_senha";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","usua_senha");
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


	$tdataadmin_members["usua_senha"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usua_senha";
//	usua_login_ulti
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usua_login_ulti";
	$fdata["GoodName"] = "usua_login_ulti";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","usua_login_ulti");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "usua_login_ulti";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usua_login_ulti";

	
	
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


	$tdataadmin_members["usua_login_ulti"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usua_login_ulti";
//	inclu_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "inclu_login";
	$fdata["GoodName"] = "inclu_login";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","inclu_login");
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


	$tdataadmin_members["inclu_login"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "inclu_login";
//	inclu_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "inclu_dt";
	$fdata["GoodName"] = "inclu_dt";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","inclu_dt");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "inclu_dt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inclu_dt";

	
	
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


	$tdataadmin_members["inclu_dt"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "inclu_dt";
//	alter_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "alter_login";
	$fdata["GoodName"] = "alter_login";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","alter_login");
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


	$tdataadmin_members["alter_login"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "alter_login";
//	alter_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "alter_dt";
	$fdata["GoodName"] = "alter_dt";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","alter_dt");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "alter_dt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alter_dt";

	
	
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


	$tdataadmin_members["alter_dt"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "alter_dt";
//	usua_idioma_ulti
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "usua_idioma_ulti";
	$fdata["GoodName"] = "usua_idioma_ulti";
	$fdata["ownerTable"] = "tb_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","usua_idioma_ulti");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "usua_idioma_ulti";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usua_idioma_ulti";

	
	
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


	$tdataadmin_members["usua_idioma_ulti"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "usua_idioma_ulti";


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$placeHolders["admin_members"] = &$placeHoldersadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "usua_id,  	clie_id,  	usua_domi_status,  	usua_email,  	usua_username,  	usua_senha,  	usua_login_ulti,  	inclu_login,  	inclu_dt,  	alter_login,  	alter_dt,  	usua_idioma_ulti";
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
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "usua_id";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clie_id",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "clie_id";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "usua_domi_status",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "usua_domi_status";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "usua_email",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto12["m_sql"] = "usua_email";
$proto12["m_srcTableName"] = "admin_members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usua_username",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto14["m_sql"] = "usua_username";
$proto14["m_srcTableName"] = "admin_members";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usua_senha",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto16["m_sql"] = "usua_senha";
$proto16["m_srcTableName"] = "admin_members";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usua_login_ulti",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto18["m_sql"] = "usua_login_ulti";
$proto18["m_srcTableName"] = "admin_members";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_login",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto20["m_sql"] = "inclu_login";
$proto20["m_srcTableName"] = "admin_members";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "inclu_dt",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto22["m_sql"] = "inclu_dt";
$proto22["m_srcTableName"] = "admin_members";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_login",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto24["m_sql"] = "alter_login";
$proto24["m_srcTableName"] = "admin_members";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "alter_dt",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto26["m_sql"] = "alter_dt";
$proto26["m_srcTableName"] = "admin_members";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "usua_idioma_ulti",
	"m_strTable" => "tb_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto28["m_sql"] = "usua_idioma_ulti";
$proto28["m_srcTableName"] = "admin_members";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tb_usuarios";
$proto31["m_srcTableName"] = "admin_members";
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
$proto31["m_columns"][] = "usua_idioma_ulti";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "tb_usuarios";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "admin_members";
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
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
		;

												

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

?>