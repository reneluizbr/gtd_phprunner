<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_tb_atividade  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["BeforeShowList"]=true;

		$this->events["IsRecordEditable"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		
// Rene: Guarda dados de log antes de incluir ou alterar um registro
fctConfigura_Usuario($values['inclu_login'], $values['inclu_dt']);

// Rene: Validacao de regra, se ativ_concluida == 1 entao ativ_dt_fim deve ser informada
$wlRetorno = true;
if (($values['ativ_concluida'] == 1) and empty($values['ativ_dt_fim'])) {
		// 'Data fim deve ser informada para atividade concluída.'
		$message = GetCustomLabel ("Valida_atividade_concluida_sim");
		$wlRetorno = false;
} else if(($values['ativ_concluida'] == 0) and !empty($values['ativ_dt_fim'])) {
		// 'Data fim só pode ser informada se atividade estiver concluída.'
		$message = GetCustomLabel ("Valida_atividade_concluida_nao");
		$wlRetorno = false;
}
/*
echo 'Debug:';
echo $message;
echo '<br>-------------------';
echo '<br>' . $values['ativ_concluida'];
echo '<br>' . $values['ativ_dt_fim'];
return false;

echo $wlRetorno;
*/

return $wlRetorno;
return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		
// Rene: Guarda dados de log antes de incluir ou alterar um registro
fctConfigura_Usuario($values['alter_login'], $values['alter_dt']);

// Rene: Validacao de regra, se ativ_concluida == 1 entao ativ_dt_fim deve ser informada
$wlRetorno = true;
if (($values['ativ_concluida'] == 1) and empty($values['ativ_dt_fim'])) {
		// 'Data fim deve ser informada para atividade concluída.'
		$message = GetCustomLabel ("Valida_atividade_concluida_sim");
		$wlRetorno = false;
} else if(($values['ativ_concluida'] == 0) and !empty($values['ativ_dt_fim'])) {
		// 'Data fim só pode ser informada se atividade estiver concluída.'
		$message = GetCustomLabel ("Valida_atividade_concluida_nao");
		$wlRetorno = false;
}
/*
echo 'Debug:';
echo $message;
echo '<br>-------------------';
echo '<br>' . $values['ativ_concluida'];
echo '<br>' . $values['ativ_dt_fim'];
return false;

echo $wlRetorno;
*/

return $wlRetorno;

;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		
// Rene: Esconde o botao que exibe cartoes porque ainda nao tem funcionalidade finalizada
$pageObject->hideItem("cmd_cartoes");
//$pageObject->showItem("cmd_cartoes");


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

// Rene: Habilita o DELETE e exibe o ícone Edit no Grid (para paginas que exibem somente os dados do proprio cliente!)
$isEditable = true;

return $isEditable;
;		
} // function IsRecordEditable

		
		
		
		
		
		
		



}
?>
