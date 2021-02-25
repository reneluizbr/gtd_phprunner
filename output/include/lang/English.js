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
	CUSTOM_LABEL_TASKS: 'Activities',
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
	CUSTOM_LABEL_VERSAO_SISTEMA: 'GTDTasks © - Build 2021.02.24 (en)',
	CUSTOM_LABEL_EMAIL__VALUE__J__CADASTRADO: 'Email %value% already exists',
	CUSTOM_LABEL_THE_VALUE_IS_INVALID: 'The value is invalid',
	CUSTOM_LABEL_VERSAO_SISTEMA02: 'GTDTasks © - Build 2020.09.07.(10.3)',
	CUSTOM_LABEL_VERSAO_SISTEMA03: 'GTD Build 2020.07.26 (en)',
	CUSTOM_LABEL_Valida_atividade_concluida_sim: '(en) Data fim deve ser informada para atividade concluída.',
	CUSTOM_LABEL_Valida_atividade_concluida_nao: '(en) Data fim só pode ser informada se atividade estiver concluída.',
	CUSTOM_LABEL_VERSAO_SISTEMA04: 'GTDTasks © - Build 2021.02.19 (en)',
	CUSTOM_LABEL_VERSAO_SISTEMA05: 'GTDTasks © - Build 2021.02.22 (pt)'
};