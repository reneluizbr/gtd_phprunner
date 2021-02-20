<?php

$langfile="";
if(mlang_getcurrentlang() == "English")
	$langfile="English.php";
if(mlang_getcurrentlang() == "Portuguese(Brazil)")
	$langfile="Portuguese.php";
if(mlang_getcurrentlang() == "Spanish")
	$langfile="Spanish.php";

if($langfile)
	include(getabspath("include/lang/".$langfile));

function mlang_message($tag)
{
	global $mlang_messages,$mlang_defaultlang;
	return @$mlang_messages[mlang_getcurrentlang()][$tag];
}

?>