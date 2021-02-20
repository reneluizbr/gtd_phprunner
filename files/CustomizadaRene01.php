// <?php include("include/dbcommon.php"); ?> 
/* Copiado do Site:
	https://asprunner.com/forums/topic/20227-adding-static-pages/
		1- In the custom files under Editor, insert a new file or create a new file from the application editor
		2- Make sure the design you want is there in HTML as a first step and make sure the extension of the file is PHP
		3- on top of the file add the following code: <?php include("include/dbcommon.php"); ?> now we have the db class present and ready for us to use.
		4- Execute any Query using the DB Class object, below is an example:
*/

<?php
$sql = "select * from tb_lista_atividades";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
print_r($data);
?>


