<?php
$strTableName="vw_tarefas_rotulos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vw_tarefas_rotulos";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vw_tarefas_rotulos");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vw_tarefas_rotulos"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>