<?php
$strTableName="Gráfico Tarefas por Prioridade";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tb_atividade";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Gráfico Tarefas por Prioridade");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Gráfico Tarefas por Prioridade"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>