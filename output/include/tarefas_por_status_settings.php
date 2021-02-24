<?php



$tdatatarefas_por_status = array();
$tdatatarefas_por_status[".searchableFields"] = array();
$tdatatarefas_por_status[".ShortName"] = "tarefas_por_status";
$tdatatarefas_por_status[".OwnerID"] = "";
$tdatatarefas_por_status[".OriginalTable"] = "tb_atividade";


$defaultPages = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );

$tdatatarefas_por_status[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatatarefas_por_status[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatatarefas_por_status[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstarefas_por_status = array();
$fieldToolTipstarefas_por_status = array();
$pageTitlestarefas_por_status = array();
$placeHolderstarefas_por_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstarefas_por_status["English"] = array();
	$fieldToolTipstarefas_por_status["English"] = array();
	$placeHolderstarefas_por_status["English"] = array();
	$pageTitlestarefas_por_status["English"] = array();
	$fieldLabelstarefas_por_status["English"]["stat_nm"] = "Stat Nm";
	$fieldToolTipstarefas_por_status["English"]["stat_nm"] = "";
	$placeHolderstarefas_por_status["English"]["stat_nm"] = "";
	$fieldLabelstarefas_por_status["English"]["qtde"] = "Qtde";
	$fieldToolTipstarefas_por_status["English"]["qtde"] = "";
	$placeHolderstarefas_por_status["English"]["qtde"] = "";
	if (count($fieldToolTipstarefas_por_status["English"]))
		$tdatatarefas_por_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstarefas_por_status["Portuguese(Brazil)"] = array();
	$fieldToolTipstarefas_por_status["Portuguese(Brazil)"] = array();
	$placeHolderstarefas_por_status["Portuguese(Brazil)"] = array();
	$pageTitlestarefas_por_status["Portuguese(Brazil)"] = array();
	$fieldLabelstarefas_por_status["Portuguese(Brazil)"]["stat_nm"] = "Status";
	$fieldToolTipstarefas_por_status["Portuguese(Brazil)"]["stat_nm"] = "";
	$placeHolderstarefas_por_status["Portuguese(Brazil)"]["stat_nm"] = "";
	$fieldLabelstarefas_por_status["Portuguese(Brazil)"]["qtde"] = "Qtde";
	$fieldToolTipstarefas_por_status["Portuguese(Brazil)"]["qtde"] = "";
	$placeHolderstarefas_por_status["Portuguese(Brazil)"]["qtde"] = "";
	if (count($fieldToolTipstarefas_por_status["Portuguese(Brazil)"]))
		$tdatatarefas_por_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstarefas_por_status["Spanish"] = array();
	$fieldToolTipstarefas_por_status["Spanish"] = array();
	$placeHolderstarefas_por_status["Spanish"] = array();
	$pageTitlestarefas_por_status["Spanish"] = array();
	$fieldLabelstarefas_por_status["Spanish"]["stat_nm"] = "Stat Nm";
	$fieldToolTipstarefas_por_status["Spanish"]["stat_nm"] = "";
	$placeHolderstarefas_por_status["Spanish"]["stat_nm"] = "";
	$fieldLabelstarefas_por_status["Spanish"]["qtde"] = "Qtde";
	$fieldToolTipstarefas_por_status["Spanish"]["qtde"] = "";
	$placeHolderstarefas_por_status["Spanish"]["qtde"] = "";
	if (count($fieldToolTipstarefas_por_status["Spanish"]))
		$tdatatarefas_por_status[".isUseToolTips"] = true;
}


	$tdatatarefas_por_status[".NCSearch"] = true;

	$tdatatarefas_por_status[".ChartRefreshTime"] = 0;


$tdatatarefas_por_status[".shortTableName"] = "tarefas_por_status";
$tdatatarefas_por_status[".nSecOptions"] = 0;

$tdatatarefas_por_status[".mainTableOwnerID"] = "";
$tdatatarefas_por_status[".entityType"] = 3;

$tdatatarefas_por_status[".strOriginalTableName"] = "tb_atividade";

	



$tdatatarefas_por_status[".showAddInPopup"] = false;

$tdatatarefas_por_status[".showEditInPopup"] = false;

$tdatatarefas_por_status[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatarefas_por_status[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatarefas_por_status[".listAjax"] = false;
//	temporary
$tdatatarefas_por_status[".listAjax"] = false;

	$tdatatarefas_por_status[".audit"] = false;

	$tdatatarefas_por_status[".locking"] = false;


$pages = $tdatatarefas_por_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatarefas_por_status[".edit"] = true;
	$tdatatarefas_por_status[".afterEditAction"] = 1;
	$tdatatarefas_por_status[".closePopupAfterEdit"] = 1;
	$tdatatarefas_por_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatarefas_por_status[".add"] = true;
$tdatatarefas_por_status[".afterAddAction"] = 1;
$tdatatarefas_por_status[".closePopupAfterAdd"] = 1;
$tdatatarefas_por_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatarefas_por_status[".list"] = true;
}



$tdatatarefas_por_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatarefas_por_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatarefas_por_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatarefas_por_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatarefas_por_status[".printFriendly"] = true;
}



$tdatatarefas_por_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatarefas_por_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatarefas_por_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatarefas_por_status[".isUseAjaxSuggest"] = true;




									

$tdatatarefas_por_status[".ajaxCodeSnippetAdded"] = false;

$tdatatarefas_por_status[".buttonsAdded"] = false;

$tdatatarefas_por_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatarefas_por_status[".isUseTimeForSearch"] = false;


$tdatatarefas_por_status[".badgeColor"] = "778899";


$tdatatarefas_por_status[".allSearchFields"] = array();
$tdatatarefas_por_status[".filterFields"] = array();
$tdatatarefas_por_status[".requiredSearchFields"] = array();

$tdatatarefas_por_status[".googleLikeFields"] = array();
$tdatatarefas_por_status[".googleLikeFields"][] = "stat_nm";
$tdatatarefas_por_status[".googleLikeFields"][] = "qtde";



$tdatatarefas_por_status[".tableType"] = "chart";

$tdatatarefas_por_status[".printerPageOrientation"] = 0;
$tdatatarefas_por_status[".nPrinterPageScale"] = 100;

$tdatatarefas_por_status[".nPrinterSplitRecords"] = 40;

$tdatatarefas_por_status[".geocodingEnabled"] = false;



// chart settings
$tdatatarefas_por_status[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatarefas_por_status[".strOrderBy"] = $tstrOrderBy;

$tdatatarefas_por_status[".orderindexes"] = array();

$tdatatarefas_por_status[".sqlHead"] = "SELECT tb_status_atividades.stat_nm,  count(ativ_id) as qtde";
$tdatatarefas_por_status[".sqlFrom"] = "FROM tb_atividade  INNER JOIN tb_status_atividades ON tb_atividade.stat_id = tb_status_atividades.stat_id";
$tdatatarefas_por_status[".sqlWhereExpr"] = "";
$tdatatarefas_por_status[".sqlTail"] = "";

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
	'tabId' => "Em_Andamento",
	'name' => "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Em Andamento",
	'nameType' => 'Text',
	'where' => "ativ_concluida = 0",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Concluida",
	'name' => "<img src=\"images/circle_green_16.png\" alt=\"\" /> Concluída",
	'nameType' => 'Text',
	'where' => "ativ_concluida = 1",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatatarefas_por_status[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatarefas_por_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatarefas_por_status[".arrGroupsPerPage"] = $arrGPP;

$tdatatarefas_por_status[".highlightSearchResults"] = true;

$tableKeystarefas_por_status = array();
$tdatatarefas_por_status[".Keys"] = $tableKeystarefas_por_status;


$tdatatarefas_por_status[".hideMobileList"] = array();




//	stat_nm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "stat_nm";
	$fdata["GoodName"] = "stat_nm";
	$fdata["ownerTable"] = "tb_status_atividades";
	$fdata["Label"] = GetFieldLabel("Tarefas_por_Status","stat_nm");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "stat_nm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tb_status_atividades.stat_nm";

	
	
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


	$tdatatarefas_por_status["stat_nm"] = $fdata;
		$tdatatarefas_por_status[".searchableFields"][] = "stat_nm";
//	qtde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qtde";
	$fdata["GoodName"] = "qtde";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Tarefas_por_Status","qtde");
	$fdata["FieldType"] = 202;

	
	
	
			

		$fdata["strField"] = "qtde";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "count(ativ_id)";

	
	
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


	$tdatatarefas_por_status["qtde"] = $fdata;
		$tdatatarefas_por_status[".searchableFields"][] = "qtde";

	$tdatatarefas_por_status[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Tarefas por Status</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatatarefas_por_status[".chartXml"] .= '<attr value="0">
			<attr value="name">qtde</attr>';
	$tdatatarefas_por_status[".chartXml"] .= '</attr>';
	$tdatatarefas_por_status[".chartXml"] .= '<attr value="1">
		<attr value="name">stat_nm</attr>
	</attr>';
	$tdatatarefas_por_status[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatatarefas_por_status[".chartXml"] .= '<attr value="head">'.xmlencode("Tarefas por Status").'</attr>
<attr value="foot">'.xmlencode("Tarefas agrupadas por Status").'</attr>
<attr value="y_axis_label">'.xmlencode("clie_id").'</attr>


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
$tdatatarefas_por_status[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatatarefas_por_status[".chartXml"] .= '<attr value="0">
		<attr value="name">stat_nm</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Tarefas_por_Status","stat_nm")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatarefas_por_status[".chartXml"] .= '<attr value="1">
		<attr value="name">qtde</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Tarefas_por_Status","qtde")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatatarefas_por_status[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Tarefas por Status</attr>
<attr value="short_table_name">tarefas_por_status</attr>
</attr>

</chart>';

$tables_data["Tarefas por Status"]=&$tdatatarefas_por_status;
$field_labels["Tarefas_por_Status"] = &$fieldLabelstarefas_por_status;
$fieldToolTips["Tarefas_por_Status"] = &$fieldToolTipstarefas_por_status;
$placeHolders["Tarefas_por_Status"] = &$placeHolderstarefas_por_status;
$page_titles["Tarefas_por_Status"] = &$pageTitlestarefas_por_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Tarefas por Status"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Tarefas por Status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tarefas_por_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tb_status_atividades.stat_nm,  count(ativ_id) as qtde";
$proto0["m_strFrom"] = "FROM tb_atividade  INNER JOIN tb_status_atividades ON tb_atividade.stat_id = tb_status_atividades.stat_id";
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
	"m_strName" => "stat_nm",
	"m_strTable" => "tb_status_atividades",
	"m_srcTableName" => "Tarefas por Status"
));

$proto6["m_sql"] = "tb_status_atividades.stat_nm";
$proto6["m_srcTableName"] = "Tarefas por Status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_COUNT";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ativ_id",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "Tarefas por Status"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "count";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "count(ativ_id)";
$proto8["m_srcTableName"] = "Tarefas por Status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "qtde";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "tb_atividade";
$proto12["m_srcTableName"] = "Tarefas por Status";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "ativ_id";
$proto12["m_columns"][] = "clie_id";
$proto12["m_columns"][] = "ativ_nm";
$proto12["m_columns"][] = "ativ_ds";
$proto12["m_columns"][] = "lista_id";
$proto12["m_columns"][] = "stat_id";
$proto12["m_columns"][] = "ativ_fl_ativo";
$proto12["m_columns"][] = "ativ_prioridade";
$proto12["m_columns"][] = "ativ_concluida";
$proto12["m_columns"][] = "ativ_dt_ini";
$proto12["m_columns"][] = "ativ_dt_fim";
$proto12["m_columns"][] = "inclu_login";
$proto12["m_columns"][] = "inclu_dt";
$proto12["m_columns"][] = "alter_login";
$proto12["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "tb_atividade";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "Tarefas por Status";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
												$proto15=array();
$proto15["m_link"] = "SQLL_INNERJOIN";
			$proto16=array();
$proto16["m_strName"] = "tb_status_atividades";
$proto16["m_srcTableName"] = "Tarefas por Status";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "stat_id";
$proto16["m_columns"][] = "clie_id";
$proto16["m_columns"][] = "stat_nm";
$proto16["m_columns"][] = "stat_ds";
$proto16["m_columns"][] = "stat_fl_ativo";
$proto16["m_columns"][] = "inclu_login";
$proto16["m_columns"][] = "inclu_dt";
$proto16["m_columns"][] = "alter_login";
$proto16["m_columns"][] = "alter_dt";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "INNER JOIN tb_status_atividades ON tb_atividade.stat_id = tb_status_atividades.stat_id";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "Tarefas por Status";
$proto17=array();
$proto17["m_sql"] = "tb_atividade.stat_id = tb_status_atividades.stat_id";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "stat_id",
	"m_strTable" => "tb_atividade",
	"m_srcTableName" => "Tarefas por Status"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "= tb_status_atividades.stat_id";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "stat_nm",
	"m_strTable" => "tb_status_atividades",
	"m_srcTableName" => "Tarefas por Status"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Tarefas por Status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tarefas_por_status = createSqlQuery_tarefas_por_status();


	
		;

		

$tdatatarefas_por_status[".sqlquery"] = $queryData_tarefas_por_status;

$tableEvents["Tarefas por Status"] = new eventsBase;
$tdatatarefas_por_status[".hasEvents"] = false;

?>