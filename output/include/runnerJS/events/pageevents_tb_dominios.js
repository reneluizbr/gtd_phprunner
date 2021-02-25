	

Runner.pages.PageSettings.addPageEvent('tb_dominios', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
// Rene: converte a entrada de um campo sempre em maiusculas
var ctrl = Runner.getControl(pageid, 'domi_grupo');
ctrl.addStyle('text-transform: uppercase;');

var ctrl = Runner.getControl(pageid, 'domi_valor');
ctrl.addStyle('text-transform: uppercase;');
;
});
	

Runner.pages.PageSettings.addPageEvent('tb_dominios', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
// Rene: converte a entrada de um campo sempre em maiusculas
var ctrl = Runner.getControl(pageid, 'domi_grupo');
ctrl.addStyle('text-transform: uppercase;');

var ctrl = Runner.getControl(pageid, 'domi_valor');
ctrl.addStyle('text-transform: uppercase;');
;
});

//	AJAX snippets

// fields events
