<?php
$strTableName="tb_planos_valores";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tb_planos_valores";

$gstrOrderBy="ORDER BY plan_id, plva_dt_vigenc_ini DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tb_planos_valores");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tb_planos_valores"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>