	

Runner.pages.PageSettings.addPageEvent('tb_parametros', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
// Rene: converte a entrada de um campo sempre em maiusculas
var ctrl = Runner.getControl(pageid, 'para_nome');
ctrl.addStyle('text-transform: uppercase;');

;
});
	

Runner.pages.PageSettings.addPageEvent('tb_parametros', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
// Rene: converte a entrada de um campo sempre em maiusculas
var ctrl = Runner.getControl(pageid, 'para_nome');
ctrl.addStyle('text-transform: uppercase;');

;
});

//	AJAX snippets

// fields events
