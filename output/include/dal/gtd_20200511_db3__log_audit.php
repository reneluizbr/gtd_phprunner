<?php
$dalTablelog_audit = array();
$dalTablelog_audit["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablelog_audit["datetime"] = array("type"=>135,"varname"=>"datetime", "name" => "datetime");
$dalTablelog_audit["ip"] = array("type"=>202,"varname"=>"ip", "name" => "ip");
$dalTablelog_audit["user"] = array("type"=>202,"varname"=>"user", "name" => "user");
$dalTablelog_audit["table"] = array("type"=>202,"varname"=>"table", "name" => "table");
$dalTablelog_audit["action"] = array("type"=>202,"varname"=>"action", "name" => "action");
$dalTablelog_audit["description"] = array("type"=>202,"varname"=>"description", "name" => "description");
	$dalTablelog_audit["id"]["key"]=true;

$dal_info["gtd_20200511_db3__log_audit"] = &$dalTablelog_audit;
?>