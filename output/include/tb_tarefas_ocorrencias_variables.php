<?php
$strTableName="tb_tarefas_ocorrencias";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tb_tarefas_ocorrencias";

$gstrOrderBy="ORDER BY Data_Hora DESC, ID_Ocorrencia DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tb_tarefas_ocorrencias");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tb_tarefas_ocorrencias"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>