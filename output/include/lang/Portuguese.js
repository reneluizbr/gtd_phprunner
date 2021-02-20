Runner.namespace('Runner.lang');

Runner.lang.constants = {

	current_language: "Portuguese(Brazil)",
	
//	for list page
	TEXT_FIRST: 'Primeiro',
	TEXT_PREVIOUS: 'Anterior',
	TEXT_NEXT: 'Próximo',
	TEXT_LAST: 'Último',
	TEXT_PROCEED_TO: 'Prossiga para',
	TEXT_DETAIL_NOT_SAVED: 'Registros em %s não foram salvos',
	TEXT_NO_RECORDS: 'Nenhum Registro Encontrado',
	TEXT_DETAIL_GOTO: 'Ir para',
	TEXT_SHOW_ALL: 'Mostrar Todos',
	TEXT_SHOW_OPTIONS: 'Mostrar opções',
	TEXT_HIDE_OPTIONS: 'Ocultar opções',
	TEXT_SEARCH_SHOW_OPTIONS:'Mostrar opções de busca',
	TEXT_SEARCH_HIDE_OPTIONS:'Ocultar opções de busca',
	TEXT_SHOW_SEARCH_PANEL:'Mostrar painel de busca',
	TEXT_HIDE_SEARCH_PANEL:'Ocultar painel de busca',


	TEXT_LOADING: 'Carregando',
	TEXT_DELETE_CONFIRM: 'Tem certeza que desejar eliminar estes registros?',
	TEXT_PAGE: 'Página',
	TEXT_PAGEMAX: 'de',

//	for editing pages	
	TEXT_INVALID_CAPTCHA_CODE: 'Código de segurança inválido',	
	TEXT_PLEASE_SELECT: 'Favor Selecionar',
	TEXT_CTRL_CLICK: 'CTRL + click para classificação múltipla',
	TEXT_SAVE: 'Salvar',
	TEXT_CANCEL: 'Cancela',
	TEXT_PREVIEW: 'prévia',
	TEXT_HIDE: 'ocultar',
	TEXT_QUESTION_UNSAVED_CHANGES: 'Deseja navegar para fora desta página e perder dados não salvos?',
	
	TEXT_EDIT: 'Editar', 
	TEXT_COPY: 'Copiar',
	TEXT_VIEW: 'Exibir',
	TEXT_INLINE_EDIT: 'Editar',
	TEXT_INLINE_ADD: 'Adicionar Novo',
	TEXT_AA_P_ADD: 'Adicionar',

//	for calendar
	TEXT_MONTH_JAN: 'Janeiro',
	TEXT_MONTH_FEB: 'Fevereiro',
	TEXT_MONTH_MAR: 'Março',
	TEXT_MONTH_APR: 'Abril',
	TEXT_MONTH_MAY: 'Maio',
	TEXT_MONTH_JUN: 'Junho',
	TEXT_MONTH_JUL: 'Julho',
	TEXT_MONTH_AUG: 'Agosto',
	TEXT_MONTH_SEP: 'Setembro',
	TEXT_MONTH_OCT: 'Outubro',
	TEXT_MONTH_NOV: 'Novembro',
	TEXT_MONTH_DEC: 'Dezembro',
	TEXT_DAY_SU: 'Dom',
	TEXT_DAY_MO: 'Seg',
	TEXT_DAY_TU: 'Ter',
	TEXT_DAY_WE: 'Qua',
	TEXT_DAY_TH: 'Qui',
	TEXT_DAY_FR: 'Sex',
	TEXT_DAY_SA: 'Sab',
	TEXT_TODAY: 'hoje',
	TEXT_SELECT_DATE: 'Selecione a Data',
	TEXT_TIME: 'Hora',
	TEXT_TIME_HOUR: 'Hora',
	TEXT_TIME_MINUTE: 'Minuto',
	TEXT_TIME_SECOND: 'Segundo',
	
//	for inline message	
	TEXT_INLINE_FIELD_REQUIRED: 'Campo requerido',
	TEXT_INLINE_FIELD_ZIPCODE: 'Campo deve ter um código postal válido (Zipcode)',
	TEXT_INLINE_FIELD_EMAIL: 'Campo deve ter um endereço de E-mail válido',
	TEXT_INLINE_FIELD_NUMBER: 'Campo deve ser um número',
	TEXT_INLINE_FIELD_CURRENCY: 'Campo deve ser em moeda',
	TEXT_INLINE_FIELD_PHONE: 'Campo deve ter um número de Telefone válido',
	TEXT_INLINE_FIELD_PASSWORD1: 'Campo não pode ser do tipo ',
	TEXT_INLINE_FIELD_PASSWORD2: 'Campo deve ter pelo menos 4 caracteres',
	TEXT_INLINE_FIELD_STATE: 'Campo deve ser um nome de Estado',
	TEXT_INLINE_FIELD_SSN: 'Campo deve ser um número de ',
	TEXT_INLINE_FIELD_DATE: 'Campo deve ter uma data válida',
	TEXT_INLINE_FIELD_DATE_NOT_ALLOWED_DAY: '',
	TEXT_INLINE_FIELD_DATE_NOT_IN_INTERVAL: '',
	TEXT_INLINE_FIELD_DATE_EARLIER_THAN_START: '',
	TEXT_INLINE_FIELD_DATE_LATER_THAN_END: '',
	TEXT_INLINE_FIELD_TIME: 'Campo deve ter horário no formato de 24 horas',
	TEXT_INLINE_FIELD_CC: 'Campo de ter um número de Cartão de Crédito válido',
	TEXT_INLINE_ERROR: 'Ocorreu um erro!',
	TEXT_INLINE_DENY_DUPLICATES: 'Campo n~]ao deve conter valor duplicado',
	TEXT_INLINE_USERNAME_EXISTS1: 'Nome do Usuário', 
	TEXT_INLINE_USERNAME_EXISTS2: 'já existe. Escolha outro nome',
	TEXT_INLINE_EMAIL_ALREADY1: 'Email', 
	TEXT_INLINE_EMAIL_ALREADY2: 'já registrado. Se você esqueceu seu Nome de Usuário ou Senha, use o formulário de ‘Esqueci Minha Senha’',

	//for RTE
	TEXT_VIEW_SOURCE: 'Visualizar Fonte',
	//for tree-like menu
	TEXT_EXPAND_ALL: 'Abrir Menu',
	TEXT_COLLAPSE_ALL: 'Fechar Menu',
	
	//for register page
	SEC_PWD_LEN: 'A senha deverá conter ao menos %%  caracteres.',
	SEC_PWD_CASE: 'A senha deve conter letras maiúculas e minúsculas',
	SEC_PWD_DIGIT: 'A senha deverá conter %% dígitos ou símbolos',
	SEC_PWD_UNIQUE: 'A senha deverá conter %% caracteres sem repetição',
	PASSWORDS_DONT_MATCH: 'Senha não confere',
	SUCCES_LOGGED_IN: 'Logado com sucesso.',
	
	//for pdf
	TEXT_PDF_BUILD1: 'Criando PDF',
	TEXT_PDF_BUILD2: 'Concluído',
	TEXT_PDF_BUILD3: 'Não foi possível criar PDF',

	CLOSE_WINDOW: 'Fechar Janela',
	CLOSE: 'Fechar',
	RESET: 'Limpar',
	
	//for search options
	CONTAINS: 'Contém',
	EQUALS: 'Igual a',
	STARTS_WITH: 'Inicia com',
	MORE_THAN: 'Maior que',
	LESS_THAN: 'Menor  que',
	BETWEEN: 'Entre',
	EMPTY: 'Vazio',
	
	NOT_CONTAINS: 'Não contém',
	NOT_EQUALS: 'Não é igual a',
	NOT_STARTS_WITH: 'Não começa com',
	NOT_MORE_THAN: 'Não é maior que',
	NOT_LESS_THAN: 'Não é menor que',
	NOT_BETWEEN: 'Não é entre',
	NOT_EMPTY: 'Não é nulo',
	
	SEARCH_FOR: 'Buscar',
	
	ERROR_MISSING_FILE_NAME: 'O nome do arquivo não foi fornecido',
	ERROR_ACCEPT_FILE_TYPES: 'O tipo de arquivo não é permitido',
	ERROR_MAX_FILE_SIZE: 'O tamanho do arquivo excede o limite de %s kbytes',
	ERROR_MIN_FILE_SIZE: 'O tamanho do arquivo não poderá ser menor que %s kbytes',
	ERROR_MAX_TOTAL_FILE_SIZE: 'O tamanho total dos arquivos excede o limite de %s kbytes',
	ERROR_MAX_NUMBER_OF_FILES_ONE: 'Só pode ser feito o upload de um único arquivo',
	ERROR_MAX_NUMBER_OF_FILES_MANY: 'Não poderá ser feito o upload de mais de %s arquivos',
	
	TEXT_SERVER_ERROR_OCCURRED: 'Ocorreu erro no servidor',
	TEXT_SEE_DETAILS: 'Veja detalhes',

	ERROR_UPLOAD: 'Houve falha no processo de upload',
	START_UPLOAD: 'Upload',
	CANCEL: 'Cancela',
	DELETE: 'Elimina Selecionados',
	
	UPLOAD_DRAG: 'Arraste os arquivos aqui',
	
	SELECT_ALL: 'Selecionar Tudo',
	UNSELECT_ALL: 'Deselecionar',
	
	TEXT_WR_REPORT_SAVED: 'Relatório foi salvo',
	TEXT_WR_SOME_PROBLEM: 'Algum problema ocorreu enquanto salvava',
	TEXT_WR_CROSS_GROUP: 'Grupo',
	TEXT_WR_HEADER: 'Cabeçalho',
	TEXT_WR_CROSS_GROUP: 'Grupo',
	TEXT_COUNT: 'Contar', 
	TEXT_MIN: 'Min',
	TEXT_MAX: 'Max', 
	TEXT_SUM: 'Soma',
	TEXT_AVG: 'Média',
	TEXT_WR_TOTAL_DATA: 'Dados da tabela', 
	TEXT_PAGE_SUMMARY: 'Página de resumo',
	TEXT_GLOBAL_SUMMARY: 'Resumo Global',
	TEXT_WR_SUMMARY: 'Sumário',
	TEXT_FIELD: 'Campo',
	TEXT_WR_NO_COLOR: 'Nenhuma cor',
	
	TEXT_SEARCH_SAVING: 'Salvando a busca',
	TEXT_SEARCH_NAME: 'Nome da busca:',
	TEXT_DELETE_SEARCH_CAPTION: 'Eliminar busca salva',
	TEXT_DELETE_SEARCH: 'Deseja realmente eliminar esta busca?',
	TEXT_YES: 'Sim',
	TEXT_NO: 'Não',
	
	TEXT_FILTER_APPLY: 'Aplicar',
	TEXT_FILTER_CLEAR: 'limpar',
	TEXT_FILTER_MULTISELECT: 'Multiseleção',
	
	// for rights page
	AA_ADD_NEW_GROUP: 'Adicionar novo Grupo',
	AA_RENAMEGROUP: 'Renomear Grupo',
	AA_GROUP_NEW: 'novo grupo',
	AA_DELETEGROUP: 'Deseja de fato eliminar o grupo',
	AA_COPY_PERMISS_FROM: 'Escolha o grupo do qual deseja copiar permissões:',
	AA_CHOOSE_COLUMNS_TO_DIPLAY: 'Escolha coluna a exibir',
	AA_SELECT_NONE: 'Nenhuma seleção',
	AA_OK: 'OK',
	
	PREPARE_PAGE_FOR_PRINTING: 'Preparando página para imprimir',
	
	// import page
	IMPORT_PROCESSING_RECORDS: 'Processando os registros',
	IMPORT_FAILED: 'A importação falhou',

	LOADING_FONTS: 'Carregando fontes'

};

Runner.lang.customlabels = {
	
	prefix: 'CUSTOM_LABEL_',
	
	// custom labels
	CUSTOM_LABEL_TASKS: 'Atividades',
	CUSTOM_LABEL_TB_ATIVIDADE_DESCRIPTION: 'Cadastramento de Atividades ou Tarefas',
	CUSTOM_LABEL_TB_CLIENTES_DESCRIPTION: 'Cadastramento de Clientes',
	CUSTOM_LABEL_TB_CLIENTES_PLANOS_DESCRIPTION: 'Cadastramento de Planos de Clientes',
	CUSTOM_LABEL_TB_DOMINIOS_DESCRIPTION: 'Cadastramento de Domínios',
	CUSTOM_LABEL_TB_LISTA_ATIVIDADES_DESCRIPTION: 'Cadastramento de Lista de Atividades',
	CUSTOM_LABEL_CUSTOM: 'Cadastramento de Planos de Acesso',
	CUSTOM_LABEL_CUSTOM1: 'Cadastramento de Valores de Planos',
	CUSTOM_LABEL_CUSTOM2: 'Cadastramento de Status de Atividades',
	CUSTOM_LABEL_CUSTOM3: 'Cadastramento de Usuários',
	CUSTOM_LABEL_MARCA_REGISTRADA: 'Direitos Autorais, 2020 © GTDTasks ',
	CUSTOM_LABEL_VERSAO_SISTEMA: 'GTDTasks © - Build 2021.02.19 (pt)',
	CUSTOM_LABEL_EMAIL__VALUE__J__CADASTRADO: 'Email %value% já cadastrado',
	CUSTOM_LABEL_THE_VALUE_IS_INVALID: 'O valor é inválido (espaços?)',
	CUSTOM_LABEL_VERSAO_SISTEMA02: 'GTDTasks © - Build 2020.09.07.(10.3)',
	CUSTOM_LABEL_VERSAO_SISTEMA03: ''
};