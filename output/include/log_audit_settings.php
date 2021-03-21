<?php



$tdatalog_audit = array();
$tdatalog_audit[".searchableFields"] = array();
$tdatalog_audit[".ShortName"] = "log_audit";
$tdatalog_audit[".OwnerID"] = "";
$tdatalog_audit[".OriginalTable"] = "log_audit";


$defaultPages = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatalog_audit[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalog_audit[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalog_audit[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelslog_audit = array();
$fieldToolTipslog_audit = array();
$pageTitleslog_audit = array();
$placeHolderslog_audit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslog_audit["English"] = array();
	$fieldToolTipslog_audit["English"] = array();
	$placeHolderslog_audit["English"] = array();
	$pageTitleslog_audit["English"] = array();
	$fieldLabelslog_audit["English"]["id"] = "Id";
	$fieldToolTipslog_audit["English"]["id"] = "";
	$placeHolderslog_audit["English"]["id"] = "";
	$fieldLabelslog_audit["English"]["datetime"] = "Datetime";
	$fieldToolTipslog_audit["English"]["datetime"] = "";
	$placeHolderslog_audit["English"]["datetime"] = "";
	$fieldLabelslog_audit["English"]["ip"] = "IP";
	$fieldToolTipslog_audit["English"]["ip"] = "";
	$placeHolderslog_audit["English"]["ip"] = "";
	$fieldLabelslog_audit["English"]["user"] = "User";
	$fieldToolTipslog_audit["English"]["user"] = "";
	$placeHolderslog_audit["English"]["user"] = "";
	$fieldLabelslog_audit["English"]["table"] = "Table";
	$fieldToolTipslog_audit["English"]["table"] = "";
	$placeHolderslog_audit["English"]["table"] = "";
	$fieldLabelslog_audit["English"]["action"] = "Action";
	$fieldToolTipslog_audit["English"]["action"] = "";
	$placeHolderslog_audit["English"]["action"] = "";
	$fieldLabelslog_audit["English"]["description"] = "Description";
	$fieldToolTipslog_audit["English"]["description"] = "";
	$placeHolderslog_audit["English"]["description"] = "";
	if (count($fieldToolTipslog_audit["English"]))
		$tdatalog_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelslog_audit["Portuguese(Brazil)"] = array();
	$fieldToolTipslog_audit["Portuguese(Brazil)"] = array();
	$placeHolderslog_audit["Portuguese(Brazil)"] = array();
	$pageTitleslog_audit["Portuguese(Brazil)"] = array();
	$fieldLabelslog_audit["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipslog_audit["Portuguese(Brazil)"]["id"] = "";
	$placeHolderslog_audit["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelslog_audit["Portuguese(Brazil)"]["datetime"] = "Data/Hora";
	$fieldToolTipslog_audit["Portuguese(Brazil)"]["datetime"] = "";
	$placeHolderslog_audit["Portuguese(Brazil)"]["datetime"] = "";
	$fieldLabelslog_audit["Portuguese(Brazil)"]["ip"] = "IP";
	$fieldToolTipslog_audit["Portuguese(Brazil)"]["ip"] = "";
	$placeHolderslog_audit["Portuguese(Brazil)"]["ip"] = "";
	$fieldLabelslog_audit["Portuguese(Brazil)"]["user"] = "Usuário";
	$fieldToolTipslog_audit["Portuguese(Brazil)"]["user"] = "";
	$placeHolderslog_audit["Portuguese(Brazil)"]["user"] = "";
	$fieldLabelslog_audit["Portuguese(Brazil)"]["table"] = "Tabela";
	$fieldToolTipslog_audit["Portuguese(Brazil)"]["table"] = "";
	$placeHolderslog_audit["Portuguese(Brazil)"]["table"] = "";
	$fieldLabelslog_audit["Portuguese(Brazil)"]["action"] = "Ação";
	$fieldToolTipslog_audit["Portuguese(Brazil)"]["action"] = "";
	$placeHolderslog_audit["Portuguese(Brazil)"]["action"] = "";
	$fieldLabelslog_audit["Portuguese(Brazil)"]["description"] = "Descrição";
	$fieldToolTipslog_audit["Portuguese(Brazil)"]["description"] = "";
	$placeHolderslog_audit["Portuguese(Brazil)"]["description"] = "";
	if (count($fieldToolTipslog_audit["Portuguese(Brazil)"]))
		$tdatalog_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslog_audit["Spanish"] = array();
	$fieldToolTipslog_audit["Spanish"] = array();
	$placeHolderslog_audit["Spanish"] = array();
	$pageTitleslog_audit["Spanish"] = array();
	$fieldLabelslog_audit["Spanish"]["id"] = "Id";
	$fieldToolTipslog_audit["Spanish"]["id"] = "";
	$placeHolderslog_audit["Spanish"]["id"] = "";
	$fieldLabelslog_audit["Spanish"]["datetime"] = "Datetime";
	$fieldToolTipslog_audit["Spanish"]["datetime"] = "";
	$placeHolderslog_audit["Spanish"]["datetime"] = "";
	$fieldLabelslog_audit["Spanish"]["ip"] = "Ip";
	$fieldToolTipslog_audit["Spanish"]["ip"] = "";
	$placeHolderslog_audit["Spanish"]["ip"] = "";
	$fieldLabelslog_audit["Spanish"]["user"] = "User";
	$fieldToolTipslog_audit["Spanish"]["user"] = "";
	$placeHolderslog_audit["Spanish"]["user"] = "";
	$fieldLabelslog_audit["Spanish"]["table"] = "Table";
	$fieldToolTipslog_audit["Spanish"]["table"] = "";
	$placeHolderslog_audit["Spanish"]["table"] = "";
	$fieldLabelslog_audit["Spanish"]["action"] = "Action";
	$fieldToolTipslog_audit["Spanish"]["action"] = "";
	$placeHolderslog_audit["Spanish"]["action"] = "";
	$fieldLabelslog_audit["Spanish"]["description"] = "Description";
	$fieldToolTipslog_audit["Spanish"]["description"] = "";
	$placeHolderslog_audit["Spanish"]["description"] = "";
	if (count($fieldToolTipslog_audit["Spanish"]))
		$tdatalog_audit[".isUseToolTips"] = true;
}


	$tdatalog_audit[".NCSearch"] = true;



$tdatalog_audit[".shortTableName"] = "log_audit";
$tdatalog_audit[".nSecOptions"] = 0;

$tdatalog_audit[".mainTableOwnerID"] = "";
$tdatalog_audit[".entityType"] = 0;

$tdatalog_audit[".strOriginalTableName"] = "log_audit";

	



$tdatalog_audit[".showAddInPopup"] = false;

$tdatalog_audit[".showEditInPopup"] = false;

$tdatalog_audit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalog_audit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatalog_audit[".listAjax"] = true;
//	temporary
$tdatalog_audit[".listAjax"] = false;

	$tdatalog_audit[".audit"] = false;

	$tdatalog_audit[".locking"] = false;


$pages = $tdatalog_audit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalog_audit[".edit"] = true;
	$tdatalog_audit[".afterEditAction"] = 1;
	$tdatalog_audit[".closePopupAfterEdit"] = 1;
	$tdatalog_audit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalog_audit[".add"] = true;
$tdatalog_audit[".afterAddAction"] = 1;
$tdatalog_audit[".closePopupAfterAdd"] = 1;
$tdatalog_audit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalog_audit[".list"] = true;
}



$tdatalog_audit[".strSortControlSettingsJSON"] = "[]";




if( $pages[PAGE_VIEW] ) {
$tdatalog_audit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalog_audit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalog_audit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalog_audit[".printFriendly"] = true;
}



$tdatalog_audit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalog_audit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalog_audit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalog_audit[".isUseAjaxSuggest"] = true;

$tdatalog_audit[".rowHighlite"] = true;



									

$tdatalog_audit[".ajaxCodeSnippetAdded"] = false;

$tdatalog_audit[".buttonsAdded"] = false;

$tdatalog_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalog_audit[".isUseTimeForSearch"] = false;


$tdatalog_audit[".badgeColor"] = "CD853F";


$tdatalog_audit[".allSearchFields"] = array();
$tdatalog_audit[".filterFields"] = array();
$tdatalog_audit[".requiredSearchFields"] = array();

$tdatalog_audit[".googleLikeFields"] = array();
$tdatalog_audit[".googleLikeFields"][] = "id";
$tdatalog_audit[".googleLikeFields"][] = "datetime";
$tdatalog_audit[".googleLikeFields"][] = "ip";
$tdatalog_audit[".googleLikeFields"][] = "user";
$tdatalog_audit[".googleLikeFields"][] = "table";
$tdatalog_audit[".googleLikeFields"][] = "action";
$tdatalog_audit[".googleLikeFields"][] = "description";



$tdatalog_audit[".tableType"] = "list";

$tdatalog_audit[".printerPageOrientation"] = 0;
$tdatalog_audit[".nPrinterPageScale"] = 100;

$tdatalog_audit[".nPrinterSplitRecords"] = 40;

$tdatalog_audit[".geocodingEnabled"] = false;










$tdatalog_audit[".pageSize"] = 20;

$tdatalog_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalog_audit[".strOrderBy"] = $tstrOrderBy;

$tdatalog_audit[".orderindexes"] = array();
	$tdatalog_audit[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");


$tdatalog_audit[".sqlHead"] = "SELECT id, \"datetime\", ip, \"user\", \"table\", \"action\", description";
$tdatalog_audit[".sqlFrom"] = "FROM log_audit";
$tdatalog_audit[".sqlWhereExpr"] = "";
$tdatalog_audit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalog_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalog_audit[".arrGroupsPerPage"] = $arrGPP;

$tdatalog_audit[".highlightSearchResults"] = true;

$tableKeyslog_audit = array();
$tableKeyslog_audit[] = "id";
$tdatalog_audit[".Keys"] = $tableKeyslog_audit;


$tdatalog_audit[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "log_audit";
	$fdata["Label"] = GetFieldLabel("log_audit","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatalog_audit["id"] = $fdata;
		$tdatalog_audit[".searchableFields"][] = "id";
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "log_audit";
	$fdata["Label"] = GetFieldLabel("log_audit","datetime");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"datetime\"";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalog_audit["datetime"] = $fdata;
		$tdatalog_audit[".searchableFields"][] = "datetime";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "log_audit";
	$fdata["Label"] = GetFieldLabel("log_audit","ip");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "ip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

		$fdata["parentFilterField"] = "user";


	
	
//end of Filters settings


	$tdatalog_audit["ip"] = $fdata;
		$tdatalog_audit[".searchableFields"][] = "ip";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "log_audit";
	$fdata["Label"] = GetFieldLabel("log_audit","user");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"user\"";

	
	
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalog_audit["user"] = $fdata;
		$tdatalog_audit[".searchableFields"][] = "user";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "log_audit";
	$fdata["Label"] = GetFieldLabel("log_audit","table");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"table\"";

	
	
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalog_audit["table"] = $fdata;
		$tdatalog_audit[".searchableFields"][] = "table";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "log_audit";
	$fdata["Label"] = GetFieldLabel("log_audit","action");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "action";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"action\"";

	
	
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

		$fdata["parentFilterField"] = "table";


	
	
//end of Filters settings


	$tdatalog_audit["action"] = $fdata;
		$tdatalog_audit[".searchableFields"][] = "action";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "log_audit";
	$fdata["Label"] = GetFieldLabel("log_audit","description");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdatalog_audit["description"] = $fdata;
		$tdatalog_audit[".searchableFields"][] = "description";


$tables_data["log_audit"]=&$tdatalog_audit;
$field_labels["log_audit"] = &$fieldLabelslog_audit;
$fieldToolTips["log_audit"] = &$fieldToolTipslog_audit;
$placeHolders["log_audit"] = &$placeHolderslog_audit;
$page_titles["log_audit"] = &$pageTitleslog_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["log_audit"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["log_audit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_log_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id, \"datetime\", ip, \"user\", \"table\", \"action\", description";
$proto0["m_strFrom"] = "FROM log_audit";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
	
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
	"m_strName" => "id",
	"m_strTable" => "log_audit",
	"m_srcTableName" => "log_audit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "log_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "log_audit",
	"m_srcTableName" => "log_audit"
));

$proto8["m_sql"] = "\"datetime\"";
$proto8["m_srcTableName"] = "log_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "log_audit",
	"m_srcTableName" => "log_audit"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "log_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "log_audit",
	"m_srcTableName" => "log_audit"
));

$proto12["m_sql"] = "\"user\"";
$proto12["m_srcTableName"] = "log_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "log_audit",
	"m_srcTableName" => "log_audit"
));

$proto14["m_sql"] = "\"table\"";
$proto14["m_srcTableName"] = "log_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "log_audit",
	"m_srcTableName" => "log_audit"
));

$proto16["m_sql"] = "\"action\"";
$proto16["m_srcTableName"] = "log_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "log_audit",
	"m_srcTableName" => "log_audit"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "log_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "log_audit";
$proto21["m_srcTableName"] = "log_audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "log_audit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "log_audit";
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
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "log_audit",
	"m_srcTableName" => "log_audit"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="log_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_log_audit = createSqlQuery_log_audit();


	
		;

							

$tdatalog_audit[".sqlquery"] = $queryData_log_audit;

$tableEvents["log_audit"] = new eventsBase;
$tdatalog_audit[".hasEvents"] = false;

?>