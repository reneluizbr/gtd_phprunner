<?php
$strTableName="vw_dominio_prioridade";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vw_dominio_prioridade";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vw_dominio_prioridade");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vw_dominio_prioridade"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>