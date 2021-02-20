<?php
$strTableName="proc_limpar_tarefas_de_lista";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="proc_limpar_tarefas_de_lista";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("proc_limpar_tarefas_de_lista");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["proc_limpar_tarefas_de_lista"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>