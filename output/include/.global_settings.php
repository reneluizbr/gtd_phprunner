<?php

$tdataGLOBAL = array();


$allPages = my_json_decode( "{\"admin_members_list\":[\"admin_members_list\"],\"admin_rights_list\":[\"admin_rights_list\"],\"changepwd\":[\"changepwd\"],\"changepwd_success\":[\"changepwd_success\"],\"login\":[\"login\"],\"menu\":[\"menu\"],\"register\":[\"register\"],\"register_success\":[\"register_success\"],\"remind\":[\"remind\"],\"remind_success\":[\"remind_success\"]}" );
$pages = array();

foreach( $allPages as $ptype => $pids ) {
	foreach(  $pids as $pid ) {
		$pages[$pid] = $ptype;
	}
}

$defaultPages = my_json_decode( "{\"admin_members_list\":\"admin_members_list\",\"admin_rights_list\":\"admin_rights_list\",\"changepwd\":\"changepwd\",\"changepwd_success\":\"changepwd_success\",\"login\":\"login\",\"menu\":\"menu\",\"register\":\"register\",\"register_success\":\"register_success\",\"remind\":\"remind\",\"remind_success\":\"remind_success\"}" );

$tdataGLOBAL[".pages"] = $pages;
$tdataGLOBAL[".defaultPages"] = $defaultPages;
$tables_data["<global>"] =& $tdataGLOBAL;

$detailsTablesData["<global>"] = array();
$masterTablesData["<global>"] = array();

?>