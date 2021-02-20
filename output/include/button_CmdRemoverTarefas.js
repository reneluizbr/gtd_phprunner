Runner.buttonEvents["CmdRemoverTarefas"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'CmdRemoverTarefas';
	
	if ( !pageObj.buttonEventBefore['CmdRemoverTarefas'] ) {
		pageObj.buttonEventBefore['CmdRemoverTarefas'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['CmdRemoverTarefas'] ) {
		pageObj.buttonEventAfter['CmdRemoverTarefas'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

// Rene: Tentativa de desviar para uma pagina customizada
location.href="CustomizadaRene01.php";
		}
	}
	
	$('a[id="CmdRemoverTarefas"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "CmdRemoverTarefas" + "_" + Runner.genId();
		
		// create object
		var button_CmdRemoverTarefas = new Runner.form.Button({
			id: this.id ,
			btnName: "CmdRemoverTarefas"
		});
		
		// init
		button_CmdRemoverTarefas.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

