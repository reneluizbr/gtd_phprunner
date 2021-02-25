Runner.buttonEvents["CmdPaginaRemoverAtividades"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'CmdPaginaRemoverAtividades';
	
	if ( !pageObj.buttonEventBefore['CmdPaginaRemoverAtividades'] ) {
		pageObj.buttonEventBefore['CmdPaginaRemoverAtividades'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 //return false;


//params["par_lista_id"] = rowData.fields["lista_id"][0];
//alert( 'RowData: ' + params["par_lista_id"]);


// Rene: Passagem de parametro atraves de params["par_lista_id"] = row.getFieldValue("lista_id");
params["par_lista_id"] = row.getFieldValue("lista_id"); // rowData.id;
params["par_lista_nm"] = row.getFieldValue("lista_nm");
//ctrl.setMessage("Parametro: " + params["par_lista_id"]);  //  Exibe mensagem abaixo do botao


//alert (params["par_lista_id"] +  params["par_lista_nm"] );
// alert ( row.fields['lista_nm']);

		}
	}
	
	if ( !pageObj.buttonEventAfter['CmdPaginaRemoverAtividades'] ) {
		pageObj.buttonEventAfter['CmdPaginaRemoverAtividades'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
// Put your code here.
var message = 'Ok, ' + result["txt"] + " !";
ctrl.setMessage(message);

// Rene: Chama a pagina que deve buscar seu parametro em $_SESSION['par_lista_id']
location.href="proc_limpar_tarefas_de_lista_add.php";

		}
	}
	
	$('a[id="CmdPaginaRemoverAtividades"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "CmdPaginaRemoverAtividades" + "_" + Runner.genId();
		
		// create object
		var button_CmdPaginaRemoverAtividades = new Runner.form.Button({
			id: this.id ,
			btnName: "CmdPaginaRemoverAtividades"
		});
		
		// init
		button_CmdPaginaRemoverAtividades.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

