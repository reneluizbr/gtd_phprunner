<?php
$strTableName="tb_dominios";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tb_dominios";

$gstrOrderBy="ORDER BY domi_grupo, domi_ordem";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tb_dominios");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tb_dominios"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>