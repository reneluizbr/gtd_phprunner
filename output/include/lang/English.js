Runner.namespace('Runner.lang');

Runner.lang.constants = {

	current_language: "English",
	
//	for list page
	TEXT_FIRST: 'First',
	TEXT_PREVIOUS: 'Previous',
	TEXT_NEXT: 'Next',
	TEXT_LAST: 'Last',
	TEXT_PROCEED_TO: 'Proceed to',
	TEXT_DETAIL_NOT_SAVED: 'Records in %s haven\'t been saved',
	TEXT_NO_RECORDS: 'No results found.',
	TEXT_DETAIL_GOTO: 'Go to',
	TEXT_SHOW_ALL: 'Show all',
	TEXT_SHOW_OPTIONS: 'Show options',
	TEXT_HIDE_OPTIONS: 'Hide options',
	TEXT_SEARCH_SHOW_OPTIONS:'Show search options',
	TEXT_SEARCH_HIDE_OPTIONS:'Hide search options',
	TEXT_SHOW_SEARCH_PANEL:'Show search panel',
	TEXT_HIDE_SEARCH_PANEL:'Hide search panel',


	TEXT_LOADING: 'loading',
	TEXT_DELETE_CONFIRM: 'Do you really want to delete these records?',
	TEXT_PAGE: 'Page',
	TEXT_PAGEMAX: 'of',

//	for editing pages	
	TEXT_INVALID_CAPTCHA_CODE: 'Invalid security code.',	
	TEXT_PLEASE_SELECT: 'Please select',
	TEXT_CTRL_CLICK: 'CTRL + click for multiple sorting',
	TEXT_SAVE: 'Save',
	TEXT_CANCEL: 'Cancel',
	TEXT_PREVIEW: 'preview',
	TEXT_HIDE: 'hide',
	TEXT_QUESTION_UNSAVED_CHANGES: 'Do you want to navigate away from this page and lose unsaved changes?',
	
	TEXT_EDIT: 'Edit', 
	TEXT_COPY: 'Copy',
	TEXT_VIEW: 'View',
	TEXT_INLINE_EDIT: 'Inline Edit',
	TEXT_INLINE_ADD: 'Inline Add',
	TEXT_AA_P_ADD: 'Add',

//	for calendar
	TEXT_MONTH_JAN: 'January',
	TEXT_MONTH_FEB: 'February',
	TEXT_MONTH_MAR: 'March',
	TEXT_MONTH_APR: 'April',
	TEXT_MONTH_MAY: 'May',
	TEXT_MONTH_JUN: 'June',
	TEXT_MONTH_JUL: 'July',
	TEXT_MONTH_AUG: 'August',
	TEXT_MONTH_SEP: 'September',
	TEXT_MONTH_OCT: 'October',
	TEXT_MONTH_NOV: 'November',
	TEXT_MONTH_DEC: 'December',
	TEXT_DAY_SU: 'Su',
	TEXT_DAY_MO: 'Mo',
	TEXT_DAY_TU: 'Tu',
	TEXT_DAY_WE: 'We',
	TEXT_DAY_TH: 'Th',
	TEXT_DAY_FR: 'Fr',
	TEXT_DAY_SA: 'Sa',
	TEXT_TODAY: 'today',
	TEXT_SELECT_DATE: 'Select Date',
	TEXT_TIME: 'Time',
	TEXT_TIME_HOUR: 'Hour',
	TEXT_TIME_MINUTE: 'Minute',
	TEXT_TIME_SECOND: 'Second',
	
//	for inline message	
	TEXT_INLINE_FIELD_REQUIRED: 'Required field',
	TEXT_INLINE_FIELD_ZIPCODE: 'Field should be a valid zipcode',
	TEXT_INLINE_FIELD_EMAIL: 'Field should be a valid email address',
	TEXT_INLINE_FIELD_NUMBER: 'Field should be a valid number',
	TEXT_INLINE_FIELD_CURRENCY: 'Field should be a valid currency',
	TEXT_INLINE_FIELD_PHONE: 'Field should be a valid phone number',
	TEXT_INLINE_FIELD_PASSWORD1: 'Field can not be \'password\'',
	TEXT_INLINE_FIELD_PASSWORD2: 'Field should be at least 4 characters long',
	TEXT_INLINE_FIELD_STATE: 'Field should be a valid US state name',
	TEXT_INLINE_FIELD_SSN: 'Field should be a valid Social Security Number',
	TEXT_INLINE_FIELD_DATE: 'Field should be a valid date',
	TEXT_INLINE_FIELD_DATE_NOT_ALLOWED_DAY: '',
	TEXT_INLINE_FIELD_DATE_NOT_IN_INTERVAL: '',
	TEXT_INLINE_FIELD_DATE_EARLIER_THAN_START: '',
	TEXT_INLINE_FIELD_DATE_LATER_THAN_END: '',
	TEXT_INLINE_FIELD_TIME: 'Field should be a valid time in 24-hour format',
	TEXT_INLINE_FIELD_CC: 'Field should be a valid credit card number',
	TEXT_INLINE_ERROR: 'Error occurred',
	TEXT_INLINE_DENY_DUPLICATES: 'Field should not contain a duplicate value',
	TEXT_INLINE_USERNAME_EXISTS1: 'Username', 
	TEXT_INLINE_USERNAME_EXISTS2: 'already exists. Choose another username.',
	TEXT_INLINE_EMAIL_ALREADY1: 'Email', 
	TEXT_INLINE_EMAIL_ALREADY2: 'already registered. If you forgot your username or password use the password reminder form.',

	//for RTE
	TEXT_VIEW_SOURCE: 'View Source',
	//for tree-like menu
	TEXT_EXPAND_ALL: 'expand all',
	TEXT_COLLAPSE_ALL: 'collapse all',
	
	//for register page
	SEC_PWD_LEN: 'Password must be at least %% characters length.',
	SEC_PWD_CASE: 'Password must contain letters in upper and lower case.',
	SEC_PWD_DIGIT: 'Password must contain %% digits or symbols.',
	SEC_PWD_UNIQUE: 'Password must contain %% unique characters.',
	PASSWORDS_DONT_MATCH: 'Passwords do not match',
	SUCCES_LOGGED_IN: 'You have successfully logged in.',
	
	//for pdf
	TEXT_PDF_BUILD1: 'Building PDF',
	TEXT_PDF_BUILD2: 'done',
	TEXT_PDF_BUILD3: 'Could not create PDF',

	CLOSE_WINDOW: 'Close window',
	CLOSE: 'Close',
	RESET: 'Reset',
	
	//for search options
	CONTAINS: 'Contains',
	EQUALS: 'Equals',
	STARTS_WITH: 'Starts with',
	MORE_THAN: 'More than',
	LESS_THAN: 'Less than',
	BETWEEN: 'Between',
	EMPTY: 'Empty',
	
	NOT_CONTAINS: 'Doesn\'t contain',
	NOT_EQUALS: 'Doesn\'t equal',
	NOT_STARTS_WITH: 'Doesn\'t start with',
	NOT_MORE_THAN: 'Is not more than',
	NOT_LESS_THAN: 'Is not less than',
	NOT_BETWEEN: 'Is not between',
	NOT_EMPTY: 'Is not empty',
	
	SEARCH_FOR: 'Search for',
	
	ERROR_MISSING_FILE_NAME: 'File name was not provided',
	ERROR_ACCEPT_FILE_TYPES: 'File type is not acceptable',
	ERROR_MAX_FILE_SIZE: 'File size exceeds limit of %s kbytes',
	ERROR_MIN_FILE_SIZE: 'File size must not be less than %s kbytes',
	ERROR_MAX_TOTAL_FILE_SIZE: 'Total files size exceeds limit of %s kbytes',
	ERROR_MAX_NUMBER_OF_FILES_ONE: 'You can upload only one file',
	ERROR_MAX_NUMBER_OF_FILES_MANY: 'You can upload no more than %s files',
	
	TEXT_SERVER_ERROR_OCCURRED: 'Server error occurred',
	TEXT_SEE_DETAILS: 'See details',

	ERROR_UPLOAD: 'Uploading failed',
	START_UPLOAD: 'Upload',
	CANCEL: 'Cancel',
	DELETE: 'Delete',
	
	UPLOAD_DRAG: 'Drag files here',
	
	SELECT_ALL: 'Select all',
	UNSELECT_ALL: 'Unselect all',
	
	TEXT_WR_REPORT_SAVED: 'Report Saved',
	TEXT_WR_SOME_PROBLEM: 'Some problems appear during saving',
	TEXT_WR_CROSS_GROUP: 'Group',
	TEXT_WR_HEADER: 'Header',
	TEXT_WR_CROSS_GROUP: 'Group',
	TEXT_COUNT: 'Count', 
	TEXT_MIN: 'Min',
	TEXT_MAX: 'Max', 
	TEXT_SUM: 'Sum',
	TEXT_AVG: 'Avg',
	TEXT_WR_TOTAL_DATA: 'Table Data', 
	TEXT_PAGE_SUMMARY: 'Page summary',
	TEXT_GLOBAL_SUMMARY: 'Global summary',
	TEXT_WR_SUMMARY: 'Summary',
	TEXT_FIELD: 'Field',
	TEXT_WR_NO_COLOR: 'No color',
	
	TEXT_SEARCH_SAVING: 'Search saving',
	TEXT_SEARCH_NAME: 'Search name:',
	TEXT_DELETE_SEARCH_CAPTION: 'Delete saved search',
	TEXT_DELETE_SEARCH: 'Do you really want to delete this search?',
	TEXT_YES: 'Yes',
	TEXT_NO: 'No',
	
	TEXT_FILTER_APPLY: 'Apply',
	TEXT_FILTER_CLEAR: 'Clear',
	TEXT_FILTER_MULTISELECT: 'Multiselect',
	
	// for rights page
	AA_ADD_NEW_GROUP: 'Add new group',
	AA_RENAMEGROUP: 'Rename group',
	AA_GROUP_NEW: 'newgroup',
	AA_DELETEGROUP: 'Do you really want to delete group',
	AA_COPY_PERMISS_FROM: 'Choose the group to copy permissions from:',
	AA_CHOOSE_COLUMNS_TO_DIPLAY: 'Choose columns to display',
	AA_SELECT_NONE: 'Select none',
	AA_OK: 'OK',
	
	PREPARE_PAGE_FOR_PRINTING: 'Preparing page for printing',
	
	// import page
	IMPORT_PROCESSING_RECORDS: 'Processing records',
	IMPORT_FAILED: 'Import Failed',

	LOADING_FONTS: 'Loading fonts'

};

Runner.lang.customlabels = {
	
	prefix: 'CUSTOM_LABEL_',
	
	// custom labels
	CUSTOM_LABEL_TASKS: 'Tasks',
	CUSTOM_LABEL_TB_ATIVIDADE_DESCRIPTION: 'Registration of Activities or Tasks',
	CUSTOM_LABEL_TB_CLIENTES_DESCRIPTION: 'Customer Registration',
	CUSTOM_LABEL_TB_CLIENTES_PLANOS_DESCRIPTION: 'Registration of Customer Plans',
	CUSTOM_LABEL_TB_DOMINIOS_DESCRIPTION: 'Domain Registration',
	CUSTOM_LABEL_TB_LISTA_ATIVIDADES_DESCRIPTION: 'Registration of Activities List',
	CUSTOM_LABEL_CUSTOM: 'Registration of Access Plans',
	CUSTOM_LABEL_CUSTOM1: 'Registration of Plan Values',
	CUSTOM_LABEL_CUSTOM2: 'Activity Status Registration',
	CUSTOM_LABEL_CUSTOM3: 'User Registration',
	CUSTOM_LABEL_MARCA_REGISTRADA: 'Copyright, 2020 © GTDTasks',
	CUSTOM_LABEL_VERSAO_SISTEMA: 'GTDTasks © - Build 2021.03.21 (en) "lang revision..."',
	CUSTOM_LABEL_EMAIL__VALUE__J__CADASTRADO: 'Email %value% already exists',
	CUSTOM_LABEL_THE_VALUE_IS_INVALID: 'The value is invalid',
	CUSTOM_LABEL_VERSAO_SISTEMA02: 'GTDTasks © - Build 2020.09.07.(10.3)',
	CUSTOM_LABEL_Valida_atividade_concluida_sim: 'End date must be informed for completed task.',
	CUSTOM_LABEL_Valida_atividade_concluida_nao: 'End date can only be informed if task is completed.',
	CUSTOM_LABEL_DETAILS_FOUND: 'Records found',
	CUSTOM_LABEL_MENU_PRINCIPAL: 'Main Menu',
	CUSTOM_LABEL_CL_listas: 'Lists',
	CUSTOM_LABEL_CL_quantidade_de_tarefas: 'Tasks\'s Quantity',
	CUSTOM_LABEL_CL_encerradas: 'Finished',
	CUSTOM_LABEL_CL_iniciadas: 'Started',
	CUSTOM_LABEL_CL_quantidade_de_listas: 'List\'s Quantity',
	CUSTOM_LABEL_CL_tarefas: 'Tasks',
	CUSTOM_LABEL_CL_tarefas_iniciadas_ultimos_30_dias: 'Started Tasks in last 30 days',
	CUSTOM_LABEL_CL_tarefas_encerradas_ultimos_30_dias: 'Finished Tasks in last 30 dias',
	CUSTOM_LABEL__IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______NOT_FINISHED: '<img src="images/circle_yellow_16.png" alt="" /> Not Finished',
	CUSTOM_LABEL__IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS: '<img src="images/info.png" alt="" /> All Tasks',
	CUSTOM_LABEL__IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______ENCERRADAS: '<img src="images/circle_green_16.png" alt="" /> Finished',
	CUSTOM_LABEL_CL_tab_todas: '<img src="images/info.png" alt="" /> All Tasks',
	CUSTOM_LABEL_CL_tab_nao_concluidas: '<img src="images/circle_yellow.png" alt="" /> Not Finished',
	CUSTOM_LABEL_GR_FICO_TAREFAS_CRIADAS_POR_USU_RIO_HEADER: 'Created tasks by user',
	CUSTOM_LABEL_GR_FICO_TAREFAS_CRIADAS_POR_USU_RIO_FOOTER: 'Quantity by User',
	CUSTOM_LABEL_GR_FICO_TAREFAS_POR_PRIORIDADE_HEADER: 'Tasks by Priority',
	CUSTOM_LABEL_GR_FICO_TAREFAS_POR_PRIORIDADE_FOOTER: 'Quantity by Priority',
	CUSTOM_LABEL__IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS1: '<img src="images/info.png" alt="" /> All Tasks',
	CUSTOM_LABEL__IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS: '<img src="images/circle_yellow_16.png" alt="" /> Not Finished',
	CUSTOM_LABEL__IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS: '<img src="images/circle_green_16.png" alt="" /> Finished',
	CUSTOM_LABEL__IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS2: '<img src="images/info.png" alt="" /> All Tasks',
	CUSTOM_LABEL__IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS1: '<img src="images/circle_yellow_16.png" alt="" /> Not Finished',
	CUSTOM_LABEL__IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS1: '<img src="images/circle_green_16.png" alt="" /> Finished',
	CUSTOM_LABEL_GR_FICO_TAREFAS_POR_STATUS_HEADER: 'Tasks by Status',
	CUSTOM_LABEL_GR_FICO_TAREFAS_POR_STATUS_FOOTER: 'Quantity by Status',
	CUSTOM_LABEL_GR_FICO_TAREFAS_POR_LISTA_HEADER: 'Tasks by List',
	CUSTOM_LABEL_GR_FICO_TAREFAS_POR_LISTA_FOOTER: 'Quantity by List',
	CUSTOM_LABEL__IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS3: '<img src="images/info.png" alt="" /> All Tasks',
	CUSTOM_LABEL__IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS2: '<img src="images/circle_yellow_16.png" alt="" /> Not Finished',
	CUSTOM_LABEL__IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS2: '<img src="images/circle_green_16.png" alt="" /> Finished',
	CUSTOM_LABEL_MODO_ADMIN_BR__TODOS_OS_REGISTROS_: 'Admin Mode<br>(all records)',
	CUSTOM_LABEL_carga_inicial_cliente_nome: 'Customer',
	CUSTOM_LABEL_carga_inicial_cliente_pais: 'To_define',
	CUSTOM_LABEL_carga_inicial_cliente_endereco: 'Registered on the Internet',
	CUSTOM_LABEL_carga_inicial_cliente_endereco_completo: 'Registered by user ID',
	CUSTOM_LABEL_carga_inicial_categoria_1: 'Books',
	CUSTOM_LABEL_carga_inicial_categoria_2: 'Personal',
	CUSTOM_LABEL_carga_inicial_status_1: 'Register',
	CUSTOM_LABEL_carga_inicial_status_1_detalhe: 'Task only registered but not started',
	CUSTOM_LABEL_carga_inicial_status_2: 'In progress',
	CUSTOM_LABEL_carga_inicial_status_2_detalhe: 'Task that has already started and is in progress',
	CUSTOM_LABEL_carga_inicial_status_3: 'Completed',
	CUSTOM_LABEL_carga_inicial_status_3_detalhe: 'Task that has already been completed',
	CUSTOM_LABEL_carga_inicial_lista_nome_1: 'Books to be read this year',
	CUSTOM_LABEL_carga_inicial_lista_nome_2: 'Maintenance of my car',
	CUSTOM_LABEL_carga_inicial_ler_livro_1: 'Read the book \'Hamlet (Sheakspeare)\'',
	CUSTOM_LABEL_carga_inicial_ler_livro_1_detalhe: '\'Hamlet (Sheakspeare)\' is a classic that never read ... Until now.',
	CUSTOM_LABEL_carga_inicial_ler_livro_2: 'Read the book \'Rich Dad, Poor Dad\'',
	CUSTOM_LABEL_carga_inicial_ler_livro_2_detalhe: 'Book that helps in financial education.',
	CUSTOM_LABEL_DASHBOARD_LISTAS_E_TAREFAS: 'Dashboard Tasks and Lists',
	CUSTOM_LABEL_DASHBOARD_GRAFICOS: 'Dashboard of Charts',
	CUSTOM_LABEL_CATEGORIES: 'Categories',
	CUSTOM_LABEL_CLIENTES___GERAL: 'Customers - General',
	CUSTOM_LABEL_CLIENTES___DETALHES: 'Customer - Detais',
	CUSTOM_LABEL_PARAMETROS: 'System Parameters',
	CUSTOM_LABEL_SEGURAN_A_E_MONITORAMENTO: 'Log Audit and Security',
	CUSTOM_LABEL_PLANOS_DE_ACESSO_DO_SISTEMA: 'System Access Plans',
	CUSTOM_LABEL_VALORES_BASE_DOS_PLANOS: 'Initial Plans Values',
	CUSTOM_LABEL_PLANOS_DO_CLIENTE__REVER_: 'Customer\'s Plans (REVER)',
	CUSTOM_LABEL_STATUS_DE_TAREFAS: 'Tasks Status',
	CUSTOM_LABEL_CATEGORIAS_DE_ATIVIDADES: 'Tasks Categories',
	CUSTOM_LABEL_VIEW_TAREFAS_CATEGORIAS: 'Categories Taks\'s Vw',
	CUSTOM_LABEL_GR_FICOS: 'Charts',
	CUSTOM_LABEL_CLIENTES_E_PLANOS: 'Customer\'s Plans',
	CUSTOM_LABEL_SISTEMA_E_CONFIGURA__O: 'System and Settings',
	CUSTOM_LABEL_TASK_S_LIST: 'Task\'s List',
	CUSTOM_LABEL_TASKS1: 'Tasks',
	CUSTOM_LABEL_DOMAINS: 'Domains',
	CUSTOM_LABEL_TASKS_BY_LIST_CHART: 'Tasks by List Chart',
	CUSTOM_LABEL_CHART_TASKS_BY_STATUS: 'Chart Tasks by Status',
	CUSTOM_LABEL_CHART_TASKS_BY_PRIORITY: 'Chart Tasks by Priority',
	CUSTOM_LABEL_CHART_TASKS_CREATED_BY_USER: 'Chart Tasks created by User',
	CUSTOM_LABEL_USERS: 'Users',
	CUSTOM_LABEL_SIGN_UP: 'Sign Up',
	CUSTOM_LABEL_CAT_: 'Cat.',
	CUSTOM_LABEL_DELETE: 'Edi',
	CUSTOM_LABEL_EDIT: 'Edit',
	CUSTOM_LABEL___USUA_IDIOMA_ULT__ONLY_CHANGES_AFTER_A_NEW_LOGIN: 'Language only changes after a new login',
	CUSTOM_LABEL_MONITORAMENTO_DE_ACESSOS_DO_SISTEMA: 'Monitoramento de acessos do sistema',
	CUSTOM_LABEL_EXIBE_UM_GR_FICO_DE_ATIVIDADES_POR_LISTA: 'Exibe um gráfico de Atividades por Lista',
	CUSTOM_LABEL_GRAICO: 'Graico',
	CUSTOM_LABEL_VIS_O_GR_FICA_DAS_TAREFAS_POR_STATUS_ONDE_SE_TEM_UMA_VISUALIZA__O_DA_DISTRIBUI__O_DOS_DADOS_DE_FORMA_AMIG_VEL_: 'Visão gráfica das Tarefas por Status onde se tem uma visualização da distribuição dos dados de forma amigável.',
	CUSTOM_LABEL_E: 'e',
	CUSTOM_LABEL_DASHSBOARD_QUE_CONT_M_UMA_P_GINA_AGRUPADORA_DAS_LISTAS_E_SUAS_TAREFAS_ASSOCIADAS_: 'Dashsboard que contém uma página agrupadora das Listas e suas tarefas associadas.',
	CUSTOM_LABEL_P_GINAS_QUE_EST_O_EM_TESTES_E_DESENVOLVIMENTOS: 'Páginas que estão em testes e desenvolvimentos',
	CUSTOM_LABEL_P_GINAS_EM_DESENVOLVIMENTO: 'Páginas em Desenvolvimento',
	CUSTOM_LABEL_ROTINA_DI_RIA: 'Daily Routine',
	CUSTOM_LABEL_P_GINAS_E_M_DULOS_ACESSADOS_FREQUENTEMENTE: 'Páginas e módulos acessados frequentemente'
};