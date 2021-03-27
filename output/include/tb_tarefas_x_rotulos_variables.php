<?php
$strTableName="tb_tarefas_x_rotulos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tb_tarefas_x_rotulos";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tb_tarefas_x_rotulos");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tb_tarefas_x_rotulos"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>