<?php
$dDebug = false;
$dSQL = "";

$tables_data = array();
$page_layouts = array();
$page_options = array();
$pd_pages = array();
$all_pd_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$placeHolders = array();
$all_page_layouts = array();
$all_page_types = null;
$all_pages = null;
$detailsTablesData = array();
$masterTablesData = array();

// .NET convertor needs this
$tdataGLOBAL = array();
$pages = array();
$defaultPages = array();

/**
 * Breadcrumb label templates

 *	Label without master table
 *	$breadcrumb_titles[<language>][<table>][<page>]["."] = "..."

 *	Label with master active
 *	$breadcrumb_titles[<language>][<table>][<page>][<master>] = "..."

 *	Label for the page with no table
 *	$breadcrumb_titles[<language>]["."][<page>]["."] = "..."
 */
$breadcrumb_labels = array();


$lookupTableLinks = array();

$_gmdays = array(0=>31,1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);

include(getabspath('classes/layout.php'));
include(getabspath('classes/pdlayout.php'));


//	custom labels
$custom_labels = array();
$custom_labels["English"] = array();
	$custom_labels["English"]['TASKS'] = "Tasks";
			$custom_labels["English"]['TB_ATIVIDADE_DESCRIPTION'] = "Registration of Activities or Tasks";
			$custom_labels["English"]['TB_CLIENTES_DESCRIPTION'] = "Customer Registration";
			$custom_labels["English"]['TB_CLIENTES_PLANOS_DESCRIPTION'] = "Registration of Customer Plans";
			$custom_labels["English"]['TB_DOMINIOS_DESCRIPTION'] = "Domain Registration";
			$custom_labels["English"]['TB_LISTA_ATIVIDADES_DESCRIPTION'] = "Registration of Activities List";
			$custom_labels["English"]['CUSTOM'] = "Registration of Access Plans";
			$custom_labels["English"]['CUSTOM1'] = "Registration of Plan Values";
			$custom_labels["English"]['CUSTOM2'] = "Activity Status Registration";
			$custom_labels["English"]['CUSTOM3'] = "User Registration";
			$custom_labels["English"]['MARCA_REGISTRADA'] = "Copyright, 2020 © GTDTasks";
	$custom_labels["English"]['VERSAO_SISTEMA'] = "GTDTasks © - Build 2021.03.21 (en) \"lang revision...\"";
					$custom_labels["English"]['EMAIL__VALUE__J__CADASTRADO'] = "Email %value% already exists";
			$custom_labels["English"]['THE_VALUE_IS_INVALID'] = "The value is invalid";
			$custom_labels["English"]['VERSAO_SISTEMA02'] = "GTDTasks © - Build 2020.09.07.(10.3)";
			$custom_labels["English"]['Valida_atividade_concluida_sim'] = "End date must be informed for completed task.";
	$custom_labels["English"]['Valida_atividade_concluida_nao'] = "End date can only be informed if task is completed.";
					$custom_labels["English"]['DETAILS_FOUND'] = "Records found";
			$custom_labels["English"]['MENU_PRINCIPAL'] = "Main Menu";
			$custom_labels["English"]['CL_listas'] = "Lists";
	$custom_labels["English"]['CL_quantidade_de_tarefas'] = "Tasks's Quantity";
					$custom_labels["English"]['CL_encerradas'] = "Finished";
	$custom_labels["English"]['CL_iniciadas'] = "Started";
	$custom_labels["English"]['CL_quantidade_de_listas'] = "List's Quantity";
	$custom_labels["English"]['CL_tarefas'] = "Tasks";
									$custom_labels["English"]['CL_tarefas_iniciadas_ultimos_30_dias'] = "Started Tasks in last 30 days";
	$custom_labels["English"]['CL_tarefas_encerradas_ultimos_30_dias'] = "Finished Tasks in last 30 dias";
					$custom_labels["English"]['_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______NOT_FINISHED'] = "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Not Finished";
			$custom_labels["English"]['_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS'] = "<img src=\"images/info.png\" alt=\"\" /> All Tasks";
			$custom_labels["English"]['_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______ENCERRADAS'] = "<img src=\"images/circle_green_16.png\" alt=\"\" /> Finished";
			$custom_labels["English"]['CL_tab_todas'] = "<img src=\"images/info.png\" alt=\"\" /> All Tasks";
	$custom_labels["English"]['CL_tab_nao_concluidas'] = "<img src=\"images/circle_yellow.png\" alt=\"\" /> Not Finished";
					$custom_labels["English"]['GR_FICO_TAREFAS_CRIADAS_POR_USU_RIO_HEADER'] = "Created tasks by user";
			$custom_labels["English"]['GR_FICO_TAREFAS_CRIADAS_POR_USU_RIO_FOOTER'] = "Quantity by User";
			$custom_labels["English"]['GR_FICO_TAREFAS_POR_PRIORIDADE_HEADER'] = "Tasks by Priority";
			$custom_labels["English"]['GR_FICO_TAREFAS_POR_PRIORIDADE_FOOTER'] = "Quantity by Priority";
			$custom_labels["English"]['_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS1'] = "<img src=\"images/info.png\" alt=\"\" /> All Tasks";
			$custom_labels["English"]['_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS'] = "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Not Finished";
			$custom_labels["English"]['_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS'] = "<img src=\"images/circle_green_16.png\" alt=\"\" /> Finished";
			$custom_labels["English"]['_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS2'] = "<img src=\"images/info.png\" alt=\"\" /> All Tasks";
			$custom_labels["English"]['_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS1'] = "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Not Finished";
			$custom_labels["English"]['_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS1'] = "<img src=\"images/circle_green_16.png\" alt=\"\" /> Finished";
			$custom_labels["English"]['GR_FICO_TAREFAS_POR_STATUS_HEADER'] = "Tasks by Status";
			$custom_labels["English"]['GR_FICO_TAREFAS_POR_STATUS_FOOTER'] = "Quantity by Status";
			$custom_labels["English"]['GR_FICO_TAREFAS_POR_LISTA_HEADER'] = "Tasks by List";
			$custom_labels["English"]['GR_FICO_TAREFAS_POR_LISTA_FOOTER'] = "Quantity by List";
			$custom_labels["English"]['_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS3'] = "<img src=\"images/info.png\" alt=\"\" /> All Tasks";
			$custom_labels["English"]['_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS2'] = "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Not Finished";
			$custom_labels["English"]['_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS2'] = "<img src=\"images/circle_green_16.png\" alt=\"\" /> Finished";
			$custom_labels["English"]['MODO_ADMIN_BR__TODOS_OS_REGISTROS_'] = "Admin Mode<br>(all records)";
			$custom_labels["English"]['carga_inicial_cliente_nome'] = "Customer";
	$custom_labels["English"]['carga_inicial_cliente_pais'] = "To_define";
					$custom_labels["English"]['carga_inicial_cliente_endereco'] = "Registered on the Internet";
			$custom_labels["English"]['carga_inicial_cliente_endereco_completo'] = "Registered by user ID";
			$custom_labels["English"]['carga_inicial_categoria_1'] = "Books";
			$custom_labels["English"]['carga_inicial_categoria_2'] = "Personal";
			$custom_labels["English"]['carga_inicial_status_1'] = "Register";
			$custom_labels["English"]['carga_inicial_status_1_detalhe'] = "Task only registered but not started";
			$custom_labels["English"]['carga_inicial_status_2'] = "In progress";
			$custom_labels["English"]['carga_inicial_status_2_detalhe'] = "Task that has already started and is in progress";
			$custom_labels["English"]['carga_inicial_status_3'] = "Completed";
			$custom_labels["English"]['carga_inicial_status_3_detalhe'] = "Task that has already been completed";
			$custom_labels["English"]['carga_inicial_lista_nome_1'] = "Books to be read this year";
			$custom_labels["English"]['carga_inicial_lista_nome_2'] = "Maintenance of my car";
			$custom_labels["English"]['carga_inicial_ler_livro_1'] = "Read the book 'Hamlet (Sheakspeare)'";
			$custom_labels["English"]['carga_inicial_ler_livro_1_detalhe'] = "'Hamlet (Sheakspeare)' is a classic that never read ... Until now.";
			$custom_labels["English"]['carga_inicial_ler_livro_2'] = "Read the book 'Rich Dad, Poor Dad'";
			$custom_labels["English"]['carga_inicial_ler_livro_2_detalhe'] = "Book that helps in financial education.";
			$custom_labels["English"]['DASHBOARD_LISTAS_E_TAREFAS'] = "Dashboard Tasks and Lists";
			$custom_labels["English"]['DASHBOARD_GRAFICOS'] = "Dashboard of Charts";
			$custom_labels["English"]['CATEGORIES'] = "Categories";
			$custom_labels["English"]['CLIENTES___GERAL'] = "Customers - General";
			$custom_labels["English"]['CLIENTES___DETALHES'] = "Customer - Detais";
			$custom_labels["English"]['PARAMETROS'] = "System Parameters";
			$custom_labels["English"]['SEGURAN_A_E_MONITORAMENTO'] = "Log Audit and Security";
			$custom_labels["English"]['PLANOS_DE_ACESSO_DO_SISTEMA'] = "System Access Plans";
			$custom_labels["English"]['VALORES_BASE_DOS_PLANOS'] = "Initial Plans Values";
			$custom_labels["English"]['PLANOS_DO_CLIENTE__REVER_'] = "Customer's Plans (REVER)";
			$custom_labels["English"]['STATUS_DE_TAREFAS'] = "Tasks Status";
			$custom_labels["English"]['CATEGORIAS_DE_ATIVIDADES'] = "Tasks Categories";
			$custom_labels["English"]['VIEW_TAREFAS_CATEGORIAS'] = "Categories Taks's Vw";
			$custom_labels["English"]['GR_FICOS'] = "Charts";
			$custom_labels["English"]['CLIENTES_E_PLANOS'] = "Customer's Plans";
			$custom_labels["English"]['SISTEMA_E_CONFIGURA__O'] = "System and Settings";
			$custom_labels["English"]['TASK_S_LIST'] = "Task's List";
			$custom_labels["English"]['TASKS1'] = "Tasks";
			$custom_labels["English"]['DOMAINS'] = "Domains";
			$custom_labels["English"]['TASKS_BY_LIST_CHART'] = "Tasks by List Chart";
			$custom_labels["English"]['CHART_TASKS_BY_STATUS'] = "Chart Tasks by Status";
			$custom_labels["English"]['CHART_TASKS_BY_PRIORITY'] = "Chart Tasks by Priority";
			$custom_labels["English"]['CHART_TASKS_CREATED_BY_USER'] = "Chart Tasks created by User";
			$custom_labels["English"]['USERS'] = "Users";
			$custom_labels["English"]['SIGN_UP'] = "Sign Up";
			$custom_labels["English"]['CAT_'] = "Cat.";
			$custom_labels["English"]['DELETE'] = "Edi";
			$custom_labels["English"]['EDIT'] = "Edit";
			$custom_labels["English"]['__USUA_IDIOMA_ULT__ONLY_CHANGES_AFTER_A_NEW_LOGIN'] = "Language only changes after a new login";
			$custom_labels["English"]['MONITORAMENTO_DE_ACESSOS_DO_SISTEMA'] = "Monitoramento de acessos do sistema";
			$custom_labels["English"]['EXIBE_UM_GR_FICO_DE_ATIVIDADES_POR_LISTA'] = "Exibe um gráfico de Atividades por Lista";
			$custom_labels["English"]['GRAICO'] = "Graico";
			$custom_labels["English"]['VIS_O_GR_FICA_DAS_TAREFAS_POR_STATUS_ONDE_SE_TEM_UMA_VISUALIZA__O_DA_DISTRIBUI__O_DOS_DADOS_DE_FORMA_AMIG_VEL_'] = "Visão gráfica das Tarefas por Status onde se tem uma visualização da distribuição dos dados de forma amigável.";
			$custom_labels["English"]['E'] = "e";
			$custom_labels["English"]['DASHSBOARD_QUE_CONT_M_UMA_P_GINA_AGRUPADORA_DAS_LISTAS_E_SUAS_TAREFAS_ASSOCIADAS_'] = "Dashsboard que contém uma página agrupadora das Listas e suas tarefas associadas.";
			$custom_labels["English"]['P_GINAS_QUE_EST_O_EM_TESTES_E_DESENVOLVIMENTOS'] = "Páginas que estão em testes e desenvolvimentos";
			$custom_labels["English"]['P_GINAS_EM_DESENVOLVIMENTO'] = "Páginas em Desenvolvimento";
				$custom_labels["English"]['ROTINA_DI_RIA'] = "Daily Routine";
		$custom_labels["English"]['P_GINAS_E_M_DULOS_ACESSADOS_FREQUENTEMENTE'] = "Páginas e módulos acessados frequentemente";
		$custom_labels["Portuguese(Brazil)"] = array();
		$custom_labels["Portuguese(Brazil)"]['TASKS'] = "Tarefas";
			$custom_labels["Portuguese(Brazil)"]['TB_ATIVIDADE_DESCRIPTION'] = "Cadastramento das suas de Atividades ou Tarefas de sua rotina";
			$custom_labels["Portuguese(Brazil)"]['TB_CLIENTES_DESCRIPTION'] = "Cadastramento de Clientes que poderá ter vários usuários vinculados";
			$custom_labels["Portuguese(Brazil)"]['TB_CLIENTES_PLANOS_DESCRIPTION'] = "Cadastramento de Planos de Clientes que tem a opção escolhida de benefícios";
			$custom_labels["Portuguese(Brazil)"]['TB_DOMINIOS_DESCRIPTION'] = "Cadastramento de Domínios que servem para a montagem de lista de opções do sistema.";
			$custom_labels["Portuguese(Brazil)"]['TB_LISTA_ATIVIDADES_DESCRIPTION'] = "Cadastramento de Lista de Atividades que agrupam atividades que estão associadas a um mesmo assunto.";
			$custom_labels["Portuguese(Brazil)"]['CUSTOM'] = "Cadastramento de Planos de Acesso, que são as opções disponíveis no sistema para acesso às funcionalidades.";
			$custom_labels["Portuguese(Brazil)"]['CUSTOM1'] = "Cadastramento de Valores de Planos. Local onde são registrados os valores mensais para os planos de funcionalidades.";
			$custom_labels["Portuguese(Brazil)"]['CUSTOM2'] = "Cadastramento de Status de Atividades que são as situações, posicionamento, em que se encontra cada atividade. Pode ser vista com a visão do Kanban.";
			$custom_labels["Portuguese(Brazil)"]['CUSTOM3'] = "Cadastramento de Usuários que possuem acesso ao sistema. Os usuários que estão abaixo de um mesmo cliente, compartilham dados entre si.";
				$custom_labels["Portuguese(Brazil)"]['MARCA_REGISTRADA'] = "Direitos Autorais, 2020 © GTDTasks ";
	$custom_labels["Portuguese(Brazil)"]['VERSAO_SISTEMA'] = "GTDTasks © - Build 2021.03.21 (pt-br)";
				$custom_labels["Portuguese(Brazil)"]['EMAIL__VALUE__J__CADASTRADO'] = "Email %value% já cadastrado";
			$custom_labels["Portuguese(Brazil)"]['THE_VALUE_IS_INVALID'] = "O valor é inválido (espaços?)";
			$custom_labels["Portuguese(Brazil)"]['VERSAO_SISTEMA02'] = "GTDTasks © - Build 2020.09.07.(10.3)";
				$custom_labels["Portuguese(Brazil)"]['Valida_atividade_concluida_sim'] = "Data fim deve ser informada para atividade concluída.";
	$custom_labels["Portuguese(Brazil)"]['Valida_atividade_concluida_nao'] = "Data fim só pode ser informada se atividade estiver concluída.";
				$custom_labels["Portuguese(Brazil)"]['DETAILS_FOUND'] = "Itens Achados";
			$custom_labels["Portuguese(Brazil)"]['MENU_PRINCIPAL'] = "Menu Principal";
				$custom_labels["Portuguese(Brazil)"]['CL_listas'] = "Listas";
	$custom_labels["Portuguese(Brazil)"]['CL_quantidade_de_tarefas'] = "Quantidade de Tarefas";
							$custom_labels["Portuguese(Brazil)"]['CL_encerradas'] = "Encerradas";
	$custom_labels["Portuguese(Brazil)"]['CL_iniciadas'] = "Iniciadas";
	$custom_labels["Portuguese(Brazil)"]['CL_quantidade_de_listas'] = "Quantidade de Listas";
	$custom_labels["Portuguese(Brazil)"]['CL_tarefas'] = "Tarefas";
							$custom_labels["Portuguese(Brazil)"]['CL_tarefas_iniciadas_ultimos_30_dias'] = "Tarefas Iniciadas nos últimos 30 dias";
	$custom_labels["Portuguese(Brazil)"]['CL_tarefas_encerradas_ultimos_30_dias'] = "Tarefas Encerradas nos últimos 30 dias";
				$custom_labels["Portuguese(Brazil)"]['_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______NOT_FINISHED'] = "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Não Concluídas";
			$custom_labels["Portuguese(Brazil)"]['_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS'] = "<img src=\"images/info.png\" alt=\"\" /> Todas";
			$custom_labels["Portuguese(Brazil)"]['_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______ENCERRADAS'] = "<img src=\"images/circle_green_16.png\" alt=\"\" /> Concluídas";
				$custom_labels["Portuguese(Brazil)"]['CL_tab_todas'] = "<img src=\"images/info.png\" alt=\"\" /> Todas";
	$custom_labels["Portuguese(Brazil)"]['CL_tab_nao_concluidas'] = "<img src=\"images/circle_yellow.png\" alt=\"\" /> Não Encerradas";
				$custom_labels["Portuguese(Brazil)"]['GR_FICO_TAREFAS_CRIADAS_POR_USU_RIO_HEADER'] = "Tarefas criadas por Usuário";
			$custom_labels["Portuguese(Brazil)"]['GR_FICO_TAREFAS_CRIADAS_POR_USU_RIO_FOOTER'] = "Quantidades por Usuário";
			$custom_labels["Portuguese(Brazil)"]['GR_FICO_TAREFAS_POR_PRIORIDADE_HEADER'] = "Tarefas por Prioridade";
			$custom_labels["Portuguese(Brazil)"]['GR_FICO_TAREFAS_POR_PRIORIDADE_FOOTER'] = "Quantidades por Prioridade";
			$custom_labels["Portuguese(Brazil)"]['_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS1'] = "<img src=\"images/info.png\" alt=\"\" /> Todas";
			$custom_labels["Portuguese(Brazil)"]['_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS'] = "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Não Concluídas";
			$custom_labels["Portuguese(Brazil)"]['_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS'] = "<img src=\"images/circle_green_16.png\" alt=\"\" /> Concluídas";
			$custom_labels["Portuguese(Brazil)"]['_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS2'] = "<img src=\"images/info.png\" alt=\"\" /> Todas";
			$custom_labels["Portuguese(Brazil)"]['_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS1'] = "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Não Concluídas";
			$custom_labels["Portuguese(Brazil)"]['_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS1'] = "<img src=\"images/circle_green_16.png\" alt=\"\" /> Concluídas";
			$custom_labels["Portuguese(Brazil)"]['GR_FICO_TAREFAS_POR_STATUS_HEADER'] = "Tarefas por Status";
			$custom_labels["Portuguese(Brazil)"]['GR_FICO_TAREFAS_POR_STATUS_FOOTER'] = "Quantidades por Status";
			$custom_labels["Portuguese(Brazil)"]['GR_FICO_TAREFAS_POR_LISTA_HEADER'] = "Tarefas por Lista";
			$custom_labels["Portuguese(Brazil)"]['GR_FICO_TAREFAS_POR_LISTA_FOOTER'] = "Quantidades por Lista";
			$custom_labels["Portuguese(Brazil)"]['_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS3'] = "<img src=\"images/info.png\" alt=\"\" /> Todas";
			$custom_labels["Portuguese(Brazil)"]['_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS2'] = "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> Não Concluídas";
			$custom_labels["Portuguese(Brazil)"]['_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS2'] = "<img src=\"images/circle_green_16.png\" alt=\"\" /> Concluídas";
			$custom_labels["Portuguese(Brazil)"]['MODO_ADMIN_BR__TODOS_OS_REGISTROS_'] = "Modo Admin<br>(todos os registros)";
				$custom_labels["Portuguese(Brazil)"]['carga_inicial_cliente_nome'] = "Cliente";
	$custom_labels["Portuguese(Brazil)"]['carga_inicial_cliente_pais'] = "A_definir";
				$custom_labels["Portuguese(Brazil)"]['carga_inicial_cliente_endereco'] = "Cadastrado pela Internet";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_cliente_endereco_completo'] = "Cadastrado pelo usuário ID";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_categoria_1'] = "Livros";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_categoria_2'] = "Pessoal";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_status_1'] = "Cadastrada";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_status_1_detalhe'] = "Tarefa apenas cadastrada mas não iniciada";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_status_2'] = "Em Andamento";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_status_2_detalhe'] = "Tarefa que já foi iniciada e está em andamento";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_status_3'] = "Concluída";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_status_3_detalhe'] = "Tarefa que já foi concluída";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_lista_nome_1'] = "Livros a serem lidos neste ano";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_lista_nome_2'] = "Manutenções do meu carro";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_ler_livro_1'] = "Ler o livro 'O Pequeno Príncipe'";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_ler_livro_1_detalhe'] = "'O Pequeno Príncipe' é um clássico que nunca li... Até agora.";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_ler_livro_2'] = "Ler o livro 'Pai Rico, Pai Pobre'";
			$custom_labels["Portuguese(Brazil)"]['carga_inicial_ler_livro_2_detalhe'] = "Livro que ajuda na educação financeira.";
			$custom_labels["Portuguese(Brazil)"]['DASHBOARD_LISTAS_E_TAREFAS'] = "Dashboard Lista E Tarefas";
			$custom_labels["Portuguese(Brazil)"]['DASHBOARD_GRAFICOS'] = "Dashboard Graficos";
			$custom_labels["Portuguese(Brazil)"]['CATEGORIES'] = "Categorias";
			$custom_labels["Portuguese(Brazil)"]['CLIENTES___GERAL'] = "Clientes Geral";
			$custom_labels["Portuguese(Brazil)"]['CLIENTES___DETALHES'] = "Clientes - Detalhes";
			$custom_labels["Portuguese(Brazil)"]['PARAMETROS'] = "Parametros do Sistema";
			$custom_labels["Portuguese(Brazil)"]['SEGURAN_A_E_MONITORAMENTO'] = "Log de Auditoria";
			$custom_labels["Portuguese(Brazil)"]['PLANOS_DE_ACESSO_DO_SISTEMA'] = "Planos de Acesso";
			$custom_labels["Portuguese(Brazil)"]['VALORES_BASE_DOS_PLANOS'] = "Valores de Planos";
			$custom_labels["Portuguese(Brazil)"]['PLANOS_DO_CLIENTE__REVER_'] = "Planos de Clientes";
			$custom_labels["Portuguese(Brazil)"]['STATUS_DE_TAREFAS'] = "Status de Atividades";
			$custom_labels["Portuguese(Brazil)"]['CATEGORIAS_DE_ATIVIDADES'] = "Categorias por Atividades";
			$custom_labels["Portuguese(Brazil)"]['VIEW_TAREFAS_CATEGORIAS'] = "Vw Tarefas Categorias";
			$custom_labels["Portuguese(Brazil)"]['GR_FICOS'] = "Gráficos";
			$custom_labels["Portuguese(Brazil)"]['CLIENTES_E_PLANOS'] = "Clientes e Planos";
			$custom_labels["Portuguese(Brazil)"]['SISTEMA_E_CONFIGURA__O'] = "Sistema e Configuração";
			$custom_labels["Portuguese(Brazil)"]['TASK_S_LIST'] = "Lista de Tarefas";
			$custom_labels["Portuguese(Brazil)"]['TASKS1'] = "Tarefas";
			$custom_labels["Portuguese(Brazil)"]['DOMAINS'] = "Domínios";
			$custom_labels["Portuguese(Brazil)"]['TASKS_BY_LIST_CHART'] = "Gráfico Tarefas por Lista";
			$custom_labels["Portuguese(Brazil)"]['CHART_TASKS_BY_STATUS'] = "Gráfico Tarefas por Status";
			$custom_labels["Portuguese(Brazil)"]['CHART_TASKS_BY_PRIORITY'] = "Gráfico Tarefas por Prioridade";
			$custom_labels["Portuguese(Brazil)"]['CHART_TASKS_CREATED_BY_USER'] = "Gráfico Tarefas criadas por Usuário";
			$custom_labels["Portuguese(Brazil)"]['USERS'] = "Usuários";
			$custom_labels["Portuguese(Brazil)"]['SIGN_UP'] = "Registrar-se";
			$custom_labels["Portuguese(Brazil)"]['CAT_'] = "Cat.";
			$custom_labels["Portuguese(Brazil)"]['DELETE'] = "Excluir";
			$custom_labels["Portuguese(Brazil)"]['EDIT'] = "Editar";
			$custom_labels["Portuguese(Brazil)"]['__USUA_IDIOMA_ULT__ONLY_CHANGES_AFTER_A_NEW_LOGIN'] = "Idioma somente será alterado após um novo login";
			$custom_labels["Portuguese(Brazil)"]['MONITORAMENTO_DE_ACESSOS_DO_SISTEMA'] = "Monitoramento de acessos do sistema. Aqui são registrados todas as alterações importantes nos dados bem como os acessos dos usuários.";
			$custom_labels["Portuguese(Brazil)"]['EXIBE_UM_GR_FICO_DE_ATIVIDADES_POR_LISTA'] = "Exibe um gráfico de Atividades por Lista onde se tem uma visão da distribuição dos dados de forma amigável.";
			$custom_labels["Portuguese(Brazil)"]['GRAICO'] = "Visão gráfica das Tarefas por Status onde se tem uma visualização da distribuição dos dados de forma amigável.";
			$custom_labels["Portuguese(Brazil)"]['VIS_O_GR_FICA_DAS_TAREFAS_POR_STATUS_ONDE_SE_TEM_UMA_VISUALIZA__O_DA_DISTRIBUI__O_DOS_DADOS_DE_FORMA_AMIG_VEL_'] = "Visão gráfica das Tarefas por Prioridade onde se tem uma visualização da distribuição dos dados de forma amigável.";
			$custom_labels["Portuguese(Brazil)"]['E'] = "Visão gráfica das Tarefas por Usuário onde se tem uma visualização da distribuição dos dados de forma amigável.";
			$custom_labels["Portuguese(Brazil)"]['DASHSBOARD_QUE_CONT_M_UMA_P_GINA_AGRUPADORA_DAS_LISTAS_E_SUAS_TAREFAS_ASSOCIADAS_'] = "Dashsboard que contém uma página agrupadora com diversos gráficos de suas tarefas.";
			$custom_labels["Portuguese(Brazil)"]['P_GINAS_QUE_EST_O_EM_TESTES_E_DESENVOLVIMENTOS'] = "Páginas que estão em testes e desenvolvimentos";
			$custom_labels["Portuguese(Brazil)"]['P_GINAS_EM_DESENVOLVIMENTO'] = "Páginas em Desenvolvimento";
		$custom_labels["Portuguese(Brazil)"]['ROTINA_DI_RIA'] = "Rotina Diária";
				$custom_labels["Portuguese(Brazil)"]['P_GINAS_E_M_DULOS_ACESSADOS_FREQUENTEMENTE'] = "Páginas e módulos acessados frequentemente";
	$custom_labels["Spanish"] = array();
			$custom_labels["Spanish"]['TASKS'] = "Actividades";
			$custom_labels["Spanish"]['TB_ATIVIDADE_DESCRIPTION'] = "Registro de actividades o tareas";
			$custom_labels["Spanish"]['TB_CLIENTES_DESCRIPTION'] = "Registro de cliente";
			$custom_labels["Spanish"]['TB_CLIENTES_PLANOS_DESCRIPTION'] = "Registro de planes de clientes";
			$custom_labels["Spanish"]['TB_DOMINIOS_DESCRIPTION'] = "Registro de Dominio";
			$custom_labels["Spanish"]['TB_LISTA_ATIVIDADES_DESCRIPTION'] = "Lista de registro de actividades";
			$custom_labels["Spanish"]['CUSTOM'] = "Registro de planes de acceso";
			$custom_labels["Spanish"]['CUSTOM1'] = "Registro de valores del plan";
			$custom_labels["Spanish"]['CUSTOM2'] = "Registro de estado de actividad";
			$custom_labels["Spanish"]['CUSTOM3'] = "Registro de usuario";
					$custom_labels["Spanish"]['MARCA_REGISTRADA'] = "Copyright, 2020 © GTDTasks";
	$custom_labels["Spanish"]['VERSAO_SISTEMA'] = "GTDTasks © - Build 2021.03.21a (es) \"pendente de revisão\"";
			$custom_labels["Spanish"]['EMAIL__VALUE__J__CADASTRADO'] = "Email %value% já cadastrado";
			$custom_labels["Spanish"]['THE_VALUE_IS_INVALID'] = "The value is invalid";
			$custom_labels["Spanish"]['VERSAO_SISTEMA02'] = "GTDTasks © - Build 2020.09.07.(10.3)";
					$custom_labels["Spanish"]['Valida_atividade_concluida_sim'] = "(es) Data fim deve ser informada para atividade concluída.";
	$custom_labels["Spanish"]['Valida_atividade_concluida_nao'] = "(es) Data fim só pode ser informada se atividade estiver concluída.";
			$custom_labels["Spanish"]['DETAILS_FOUND'] = "";
			$custom_labels["Spanish"]['MENU_PRINCIPAL'] = "Main Menu";
					$custom_labels["Spanish"]['CL_listas'] = "(es) Listas";
	$custom_labels["Spanish"]['CL_quantidade_de_tarefas'] = "(es) Quantidade de Tarefas";
									$custom_labels["Spanish"]['CL_encerradas'] = "(es) Encerradas";
	$custom_labels["Spanish"]['CL_iniciadas'] = "(es) Iniciadas";
	$custom_labels["Spanish"]['CL_quantidade_de_listas'] = "(es) Quantidade de Listas";
	$custom_labels["Spanish"]['CL_tarefas'] = "(es) Tarefas";
					$custom_labels["Spanish"]['CL_tarefas_iniciadas_ultimos_30_dias'] = "(es) Tarefas Iniciadas nos últimos 30 dias";
	$custom_labels["Spanish"]['CL_tarefas_encerradas_ultimos_30_dias'] = "(es) Tarefas Encerradas nos últimos 30 dias";
			$custom_labels["Spanish"]['_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______NOT_FINISHED'] = "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> (es) Não Concluídas";
			$custom_labels["Spanish"]['_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS'] = "<img src=\"images/info.png\" alt=\"\" /> (es) Todas";
			$custom_labels["Spanish"]['_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______ENCERRADAS'] = "<img src=\"images/circle_green_16.png\" alt=\"\" /> (es) Concluídas";
					$custom_labels["Spanish"]['CL_tab_todas'] = "<img src=\"images/info.png\" alt=\"\" /> (es) Todas";
	$custom_labels["Spanish"]['CL_tab_nao_concluidas'] = "<img src=\"images/circle_yellow.png\" alt=\"\" /> (es) Não Encerradas";
			$custom_labels["Spanish"]['GR_FICO_TAREFAS_CRIADAS_POR_USU_RIO_HEADER'] = "(es) Tarefas criadas por Usuário";
			$custom_labels["Spanish"]['GR_FICO_TAREFAS_CRIADAS_POR_USU_RIO_FOOTER'] = "Quantidades por Usuário";
			$custom_labels["Spanish"]['GR_FICO_TAREFAS_POR_PRIORIDADE_HEADER'] = "(es) Tarefas por Prioridade";
			$custom_labels["Spanish"]['GR_FICO_TAREFAS_POR_PRIORIDADE_FOOTER'] = "(es) Quantidades por Prioridade";
			$custom_labels["Spanish"]['_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS1'] = "<img src=\"images/info.png\" alt=\"\" /> (es) Todas";
			$custom_labels["Spanish"]['_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS'] = "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> (es) Não Concluídas";
			$custom_labels["Spanish"]['_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS'] = "<img src=\"images/circle_green_16.png\" alt=\"\" /> (es) Concluídas";
			$custom_labels["Spanish"]['_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS2'] = "<img src=\"images/info.png\" alt=\"\" /> (es) Todas";
			$custom_labels["Spanish"]['_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS1'] = "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> (es) Não Concluídas";
			$custom_labels["Spanish"]['_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS1'] = "<img src=\"images/circle_green_16.png\" alt=\"\" /> (es) Concluídas";
			$custom_labels["Spanish"]['GR_FICO_TAREFAS_POR_STATUS_HEADER'] = "(es) Tarefas por Status";
			$custom_labels["Spanish"]['GR_FICO_TAREFAS_POR_STATUS_FOOTER'] = "(es) Quantidades por Status";
			$custom_labels["Spanish"]['GR_FICO_TAREFAS_POR_LISTA_HEADER'] = "(es) Tarefas por Lista";
			$custom_labels["Spanish"]['GR_FICO_TAREFAS_POR_LISTA_FOOTER'] = "(es) Quantidades por Lista";
			$custom_labels["Spanish"]['_IMG_SRC__IMAGES_INFO_PNG__ALT_______TODAS3'] = "<img src=\"images/info.png\" alt=\"\" /> (es) Todas";
			$custom_labels["Spanish"]['_IMG_SRC__IMAGES_CIRCLE_YELLOW_16_PNG__ALT_______N_O_CONCLU_DAS2'] = "<img src=\"images/circle_yellow_16.png\" alt=\"\" /> (es) Não Concluídas";
			$custom_labels["Spanish"]['_IMG_SRC__IMAGES_CIRCLE_GREEN_16_PNG__ALT_______CONCLU_DAS2'] = "<img src=\"images/circle_green_16.png\" alt=\"\" /> (es) Concluídas";
			$custom_labels["Spanish"]['MODO_ADMIN_BR__TODOS_OS_REGISTROS_'] = "(es) Modo Admin<br>(todos os registros)";
					$custom_labels["Spanish"]['carga_inicial_cliente_nome'] = "(es) Cliente";
	$custom_labels["Spanish"]['carga_inicial_cliente_pais'] = "(es) A definir";
			$custom_labels["Spanish"]['carga_inicial_cliente_endereco'] = "(es) Registrado por Internet";
			$custom_labels["Spanish"]['carga_inicial_cliente_endereco_completo'] = "(es) Registrado por ID de usuario";
			$custom_labels["Spanish"]['carga_inicial_categoria_1'] = "(es) Libros";
			$custom_labels["Spanish"]['carga_inicial_categoria_2'] = "(es) Personal";
			$custom_labels["Spanish"]['carga_inicial_status_1'] = "(es) Registrarse";
			$custom_labels["Spanish"]['carga_inicial_status_1_detalhe'] = "(es) Tarea solo registrada pero no iniciada";
			$custom_labels["Spanish"]['carga_inicial_status_2'] = "(es) En proceso";
			$custom_labels["Spanish"]['carga_inicial_status_2_detalhe'] = "(es) Tarea que ya ha comenzado y está en curso";
			$custom_labels["Spanish"]['carga_inicial_status_3'] = "(es) Terminado";
			$custom_labels["Spanish"]['carga_inicial_status_3_detalhe'] = "(es) Tarea que ya se completó";
			$custom_labels["Spanish"]['carga_inicial_lista_nome_1'] = "(es) Libros para leer este año";
			$custom_labels["Spanish"]['carga_inicial_lista_nome_2'] = "(es) Mantenimiento de mi auto";
			$custom_labels["Spanish"]['carga_inicial_ler_livro_1'] = "(es) Leer el libro 'Pablo Neruda'";
			$custom_labels["Spanish"]['carga_inicial_ler_livro_1_detalhe'] = "(es) 'Pablo Neruda' es un clásico que nunca había leído ... hasta ahora.";
			$custom_labels["Spanish"]['carga_inicial_ler_livro_2'] = "(es) Lea el libro 'Padre rico, papá pobre'";
			$custom_labels["Spanish"]['carga_inicial_ler_livro_2_detalhe'] = "(es) Libro que ayuda en educación financiera.";
			$custom_labels["Spanish"]['DASHBOARD_LISTAS_E_TAREFAS'] = "(es) Dashboard Lista E Tarefas";
			$custom_labels["Spanish"]['DASHBOARD_GRAFICOS'] = "(es) Dashboard Graficos";
			$custom_labels["Spanish"]['CATEGORIES'] = "(es) Categorias";
			$custom_labels["Spanish"]['CLIENTES___GERAL'] = "(es) Clientes Geral";
			$custom_labels["Spanish"]['CLIENTES___DETALHES'] = "(es) Clientes - Detalhes";
			$custom_labels["Spanish"]['PARAMETROS'] = "(es) Parametros";
			$custom_labels["Spanish"]['SEGURAN_A_E_MONITORAMENTO'] = "(es) Log Audit";
			$custom_labels["Spanish"]['PLANOS_DE_ACESSO_DO_SISTEMA'] = "(es) Planes de acceso";
			$custom_labels["Spanish"]['VALORES_BASE_DOS_PLANOS'] = "(es) Plan de valores";
			$custom_labels["Spanish"]['PLANOS_DO_CLIENTE__REVER_'] = "(es) Planes de clientes";
			$custom_labels["Spanish"]['STATUS_DE_TAREFAS'] = "(es) Estado de actividad";
			$custom_labels["Spanish"]['CATEGORIAS_DE_ATIVIDADES'] = "(es) Categorias X Atividades";
			$custom_labels["Spanish"]['VIEW_TAREFAS_CATEGORIAS'] = "(es) Vw Tarefas Categorias";
			$custom_labels["Spanish"]['GR_FICOS'] = "(es) Gráficos";
			$custom_labels["Spanish"]['CLIENTES_E_PLANOS'] = "(es) Clientes e Planos";
			$custom_labels["Spanish"]['SISTEMA_E_CONFIGURA__O'] = "(es) Sistema e Configuração";
			$custom_labels["Spanish"]['TASK_S_LIST'] = "(es) Lista de Tareas";
			$custom_labels["Spanish"]['TASKS1'] = "(es) Tareas";
			$custom_labels["Spanish"]['DOMAINS'] = "(es) Dominios";
			$custom_labels["Spanish"]['TASKS_BY_LIST_CHART'] = "(es) Gráfico Tarefas por Lista";
			$custom_labels["Spanish"]['CHART_TASKS_BY_STATUS'] = "(es) Gráfico Tarefas por Status";
			$custom_labels["Spanish"]['CHART_TASKS_BY_PRIORITY'] = "(es) Gráfico Tarefas por Prioridade";
			$custom_labels["Spanish"]['CHART_TASKS_CREATED_BY_USER'] = "(es) Gráfico Tarefas criadas por Usuário";
			$custom_labels["Spanish"]['USERS'] = "(es) Los usuarios";
			$custom_labels["Spanish"]['SIGN_UP'] = "Registrarse";
			$custom_labels["Spanish"]['CAT_'] = "Cat.";
			$custom_labels["Spanish"]['DELETE'] = "(es) Borrar";
			$custom_labels["Spanish"]['EDIT'] = "Editar";
			$custom_labels["Spanish"]['__USUA_IDIOMA_ULT__ONLY_CHANGES_AFTER_A_NEW_LOGIN'] = "(es) Idioma somente será alterado após um novo login";
			$custom_labels["Spanish"]['MONITORAMENTO_DE_ACESSOS_DO_SISTEMA'] = "Monitoramento de acessos do sistema";
			$custom_labels["Spanish"]['EXIBE_UM_GR_FICO_DE_ATIVIDADES_POR_LISTA'] = "Exibe um gráfico de Atividades por Lista";
			$custom_labels["Spanish"]['GRAICO'] = "Graico";
			$custom_labels["Spanish"]['VIS_O_GR_FICA_DAS_TAREFAS_POR_STATUS_ONDE_SE_TEM_UMA_VISUALIZA__O_DA_DISTRIBUI__O_DOS_DADOS_DE_FORMA_AMIG_VEL_'] = "Visão gráfica das Tarefas por Status onde se tem uma visualização da distribuição dos dados de forma amigável.";
			$custom_labels["Spanish"]['E'] = "e";
			$custom_labels["Spanish"]['DASHSBOARD_QUE_CONT_M_UMA_P_GINA_AGRUPADORA_DAS_LISTAS_E_SUAS_TAREFAS_ASSOCIADAS_'] = "Dashsboard que contém uma página agrupadora das Listas e suas tarefas associadas.";
			$custom_labels["Spanish"]['P_GINAS_QUE_EST_O_EM_TESTES_E_DESENVOLVIMENTOS'] = "Páginas que estão em testes e desenvolvimentos";
			$custom_labels["Spanish"]['P_GINAS_EM_DESENVOLVIMENTO'] = "Páginas em Desenvolvimento";
			$custom_labels["Spanish"]['ROTINA_DI_RIA'] = "(es) Rotina Diária";
			$custom_labels["Spanish"]['P_GINAS_E_M_DULOS_ACESSADOS_FREQUENTEMENTE'] = "Páginas e módulos acessados frequentemente";

define('GLOBAL_PAGES_SHORT', ".global");
define('GLOBAL_PAGES', "<global>");

/**
 *  Define constants of page name
 */
define('PAGE_LIST',"list");
define('PAGE_MASTER_INFO_LIST',"masterlist");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_MASTER_INFO_REPORT',"masterreport");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_MASTER_INFO_PRINT',"masterprint");
define('PAGE_RPRINT',"rprint");
define('PAGE_MASTER_INFO_RPRINT',"masterrprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_INLINEADD',"inlineadd");
define('PAGE_INLINEEDIT',"inlineedit");
define('PAGE_DASHBOARD',"dashboard");
define('PAGE_DASHMAP', "map");
define('PAGE_ADMIN_RIGHTS', "admin_rights_list");
define('PAGE_ADMIN_MEMBERS', "admin_members_list");
define('PAGE_ADMIN_ADMEMBERS', "admin_admembers_list");

define('ADMIN_USERS',"admin_users");


define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_INLINE",2);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_INLINE",5);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);
define("SECURITY_AD", 2);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);
define("nDATABASE_Interbase", 16);

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);
define("ADD_DASHBOARD",5);
define("ADD_MASTER_POPUP",6);
define("ADD_MASTER_DASH",7);

//	Edit page modes
define("EDIT_SIMPLE",0); 	//	standalone Edit page
define("EDIT_INLINE",1);	//	inlineEdit
define("EDIT_POPUP",3);		//	edit page in popup
define("EDIT_DASHBOARD",4);	//	edit page in dashboard
define("EDIT_SELECTED_SIMPLE",5);
define("EDIT_SELECTED_POPUP",6);


//	View page modes
define("VIEW_SIMPLE",0); 	//	standalone View page
define("VIEW_POPUP",1); 	//	View page in popup
define("VIEW_DASHBOARD",2); 	//	View page in dashboard
define("VIEW_PDFJSON",3); 	//	prepare json for PDF

define("LOGIN_SIMPLE", 0);
define("LOGIN_POPUP", 1);
define("LOGIN_EMBEDED", 2);

define("REGISTER_SIMPLE", 0);
define("REGISTER_POPUP", 1);

define("REMIND_SIMPLE", 0);
define("REMIND_POPUP", 1);

define("EXPORT_SIMPLE", 0);
define("EXPORT_POPUP", 1);

define("EXPORT_RAW", 0);
define("EXPORT_FORMATTED", 1);
define("EXPORT_BOTH", 2);


define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);
define("titDASHBOARD",4);

define("TAB_TYPE_TAB", 0);
define("TAB_TYPE_SECTION", 1);
define("TAB_TYPE_STEP", 2);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);
define("LIST_DASHBOARD", 7);
define("LIST_DASHDETAILS", 8);
define("MAP_DASHBOARD", 9);
define("LIST_MASTER",10);
define("PRINT_MASTER",11);
define("LIST_POPUPDETAILS",12);
define("PRINT_SIMPLE",13);
define("PRINT_PDFJSON",14); 	//	prepare json for PDF
define("LIST_PDFJSON",15); 	//	prepare details table json for PDF



define("REPORT_SIMPLE", 0);
define("REPORT_POPUPDETAILS", 1);
define("REPORT_DASHBOARD", 2);
define("REPORT_DETAILS", 3);
define("REPORT_DASHDETAILS", 4);

define("CHART_SIMPLE", 0);
define("CHART_POPUPDETAILS", 1);
define("CHART_DASHBOARD", 2);
define("CHART_DETAILS", 3);
define("CHART_DASHDETAILS", 4);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("DL_SINGLE",0);
define("DL_INDIVIDUAL",1);
define("DL_NONE",2);

define("SEARCH_SIMPLE", 0);
define("SEARCH_LOAD_CONTROL", 1);
define("SEARCH_DASHBOARD", 2);
define("SEARCH_POPUP", 3);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
// lookup table is not added to the project
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);
define("ENCRYPTION_ALG_DES", 1);
define("ENCRYPTION_ALG_AES", 128);
define("ENCRYPTION_ALG_AES_256", 256);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

define("SEARCHID_SIMPLE", 1);
define("SEARCHID_PANEL", 10);
define("SEARCHID_ALL", 10000);


/* Define constants for the filters settings */
//fiter totals
define("FT_NONE", 0);
define("FT_COUNT", 1);
define("FT_MIN", 2);
define("FT_MAX", 3);
//filter multiselect
define("FM_NONE", 0);
define("FM_ON_DEMAND", 1);
define("FM_ALWAYS", 2);
//filter format
define("FF_VALUE_LIST", "Values list");
define("FF_BOOLEAN", "Options list");
define("FF_INTERVAL_LIST", "Interval list");
define("FF_INTERVAL_SLIDER", "Interval slider");
//define filter interval limits' constants
define("FIL_NONE", 0);
define("FIL_MORE_THAN", 1);
define("FIL_LESS_THAN", 1);
define("FIL_LESS_THAN_OR_EQUAL", 2);
define("FIL_MORE_THAN_OR_EQUAL", 2);
define("FIL_REMAINDER", 3);
//define slider filter constants
define("FS_BOTH", 0);
define("FS_MIN_ONLY", 1);
define("FS_MAX_ONLY", 2);
//define slider step types
define("FSST_SECONDS", 0);
define("FSST_MINUTES", 1);
define("FSST_HOURS", 2);
define("FSST_DAYS", 3);
define("FSST_MONTHS", 4);
define("FSST_YEARS", 5);
//sorting constants
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);
/**/


define("gltHORIZONTAL", 0);
define("gltVERTICAL", 1);
define("gltCOLUMNS", 2);
define("gltFLEXIBLE", 3);

/* Define comstamts for hidden columns devices*/
define("DESKTOP", 1);
define("TABLET_10_IN", 2);
define("TABLET_7_IN", 3);
define("SMARTPHONE_LANDSCAPE", 4);
define("SMARTPHONE_PORTRAIT", 5);
/**/

/* Dashboard types */
define("DASHBOARD_LIST", 0);
define("DASHBOARD_CHART", 1);
define("DASHBOARD_REPORT", 2);
define("DASHBOARD_RECORD", 3);
define("DASHBOARD_SEARCH", 4);
define("DASHBOARD_DETAILS", 5);
define("DASHBOARD_MAP", 6);
define("DASHBOARD_SNIPPET", 7);
/**/

/* Define message type constants */
define("MESSAGE_INFO", 1);
define("MESSAGE_ERROR", 2);

/* Define ML String type constants */
define("ML_TEXT", 0);
define("ML_CUSTOM_LABEL", 1);
define("ML_MESSAGE", 2);


/* Define print page and pdf page constants */
define("PRINT_PAGE_WIDTH", 700);
define("PRINT_PAGE_HEIGHT", 900);
define("PDF_PAGE_WIDTH", 750);
define("PDF_PAGE_HEIGHT", 1060);

/* Defined maps type */
define("GOOGLE_MAPS", 0);
define("OPEN_STREET_MAPS", 1);
define("BING_MAPS", 2);

/* Defined captcha type */
define("FLASH_CAPTCHA", 0);
define("RE_CAPTCHA", 1);

/* Define 'after record added/edited actions' constants*/
define("AA_TO_LIST", 0);
define("AA_TO_ADD", 1);
define("AA_TO_VIEW", 2);
define("AA_TO_EDIT", 3);
define("AA_TO_DETAIL_ADD", 4);
define("AA_TO_DETAIL_LIST", 5);

define("AE_TO_LIST", 0);
define("AE_TO_EDIT", 1);
define("AE_TO_VIEW", 2);
define("AE_TO_NEXT_EDIT", 3);
define("AE_TO_PREV_EDIT", 4);
define("AE_TO_DETAIL_LIST", 5);
/**/

define('BOOTSTRAP_LAYOUT', 3);
define('PD_BS_LAYOUT', 4); // temp

define('ICON_NONE', 0);
define('ICON_FILE', 1);
define('ICON_BOOTSTRAP_GLYPH', 2);



define('WELCOME_MENU', "welcome_page");

define('MENU_VERTICAL', "v");
define('MENU_HORIZONTAL', "h");
define('MENU_QUICKJUMP', "q");

// paramsLogger types
define('SSEARCH_PARAMS_TYPE', 1);
define('CRESIZE_PARAMS_TYPE', 2);
define('SHFIELDS_PARAMS_TYPE', 3);
define('FORDER_PARAMS_TYPE', 4);

// remind password method
define('RPM_SEND', 'SEND');
define('RPM_RESET', 'RESET');

define('CONTEXT_GLOBAL', 0);	//	global context
define('CONTEXT_PAGE', 1);		//	page where pageObject is available
define('CONTEXT_BUTTON', 2);	// 	button or other AJAX event
define('CONTEXT_LOOKUP', 3);	//	dependent lookup
define('CONTEXT_ROW', 4);		// 	processing grid row on multiple-records page (list)

define('BOTH_RECORDS', 0);
define('NEXT_RECORD', 1);
define('PREV_RECORD', 2);

// login form types
define('LOGIN_SEPARATE', 0);
//define('LOGIN_POPUP', 1);
//define('LOGIN_EMBEDED', 2);
define('NO_LOGIN', 3);

define('MEDIA_DESKTOP', 0);
define('MEDIA_MOBILE', 1);
define('MEDIA_MOBILE_EXPANDED', 2);


$globalSettings = array();
$g_defaultOptionValues = array();
$g_settingsType = array();

$globalSettings["nLoginMethod"] = 1;

$twilioSID = "";
$twilioAuth = "";
$twilioNumber = "";
$globalSettings["bTwoFactorAuth"] = false;

$globalSettings["bEncryptPasswords"] = true;
$globalSettings["nEncryptPasswordMethod"] = "0";




$globalSettings["popupPagesLayoutNames"] = array();
					
;
$globalSettings["popupPagesLayoutNames"]["login"] = "login";
			;
$globalSettings["popupPagesLayoutNames"]["register"] = "login";
			;
$globalSettings["popupPagesLayoutNames"]["remind"] = "login";

//mail settings
$globalSettings["useBuiltInMailer"] = false;

$globalSettings["useCustomSMTPSettings"] = true;

$globalSettings["strSMTPUser"] = "";
$globalSettings["strSMTPServer"] = "localhost";
$globalSettings["strSMTPPort"] = "25";
$globalSettings["strSMTPPassword"] = "";
$globalSettings["strFromEmail"] = "admin@gtdtasks.com";

//


$ajaxSearchStartsWith = true;

$globalSettings["isDynamicPerm"] = true;




$globalSettings["LandingPageType"] = 2;
$globalSettings["LandingTable"] = "";
$globalSettings["LandingPage"] = "menu";
$globalSettings["LandingURL"] = "ssp/index.html";
$globalSettings["LandingPageId"] = "menu";

$globalSettings["ProjectLogo"] = array();
$globalSettings["ProjectLogo"]["English"] = "<img src=\"../images/app_logo_gtd3.png\" alt=\"GTD 2021\">";
$globalSettings["ProjectLogo"]["Portuguese(Brazil)"] = "<img src=\"../images/app_logo_gtd3.png\" alt=\"GTD 2021\">";
$globalSettings["ProjectLogo"]["Spanish"] = "<img src=\"../images/app_logo_gtd3.png\" alt=\"GTD 2021\">";

$globalSettings["CookieBanner"] = array();
$globalSettings["CookieBanner"]["English"] = "Este sitio web utiliza cookies para mejorar la experiencia del usuario";
$globalSettings["CookieBanner"]["Portuguese(Brazil)"] = "Diese Website benutzt Cookies Benutzerfreundlichkeit zu verbessern";
$globalSettings["CookieBanner"]["Spanish"] = "Este site usa cookies para melhorar a experiência do usuário";

$globalSettings["useCookieBanner"] = 0 != 0;


$globalSettings["createLoginPage"] = true;
$globalSettings["userGroupCount"] = 0;


$globalSettings["apiGoogleMapsCode"] = "";

$globalSettings["SpUserIdField"] = "";

	
	
//password global settings for register page
$globalSettings["pwdStrong"] = true;
$globalSettings["pwdLen"] = 4;
$globalSettings["pwdDigits"] = 1;


/**
 * If true then detail table name will be printed before detail table on the view page
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * The number of seach suggests displayed
 */
$globalSettings["searchSuggestsNumber"] = 10;

$globalSettings["override"] = array();


$styleOverrides = array();


$globalSettings["mapProvider"]=0;

$globalSettings["CaptchaSettings"] = array();
$globalSettings["CaptchaSettings"]["type"] = 0;
$globalSettings["CaptchaSettings"]["siteKey"] = "";
$globalSettings["CaptchaSettings"]["secretKey"] = "";
$globalSettings["CaptchaSettings"]["captchaPassesCount"] = "5";


$bsProjectTheme = "yeti";
$bsProjectSize = "normal";

$wr_pagestylepath = "OfficeOffice";
$wr_is_standalone = false;
$WRAdminPagePassword = "";

$cLoginTable = "tb_usuarios";
$cDisplayNameField = "usua_email";
$cUserNameField	= "usua_username";
$cPasswordField	= "usua_senha";
$cUserGroupField = "usua_username";
$cEmailField = "usua_email";
$globalSettings["usersTableInProject"] = true;
$globalSettings["usersDatasourceTable"] = "tb_usuarios";

$globalSettings["jwtSecret"] = "s2dgfsg-43f";

if( $cDisplayNameField == '' )
	$cDisplayNameField = $cUserNameField;

$cDisplayNameFieldType	= 200;
$cUserNameFieldType	= 200;
$cPasswordFieldType	= 200;
$cEmailFieldType = 200;

$arrCustomPages = array();

																																				$cEmailFieldType = 202;
			$cUserNameFieldType	= 202;
												$cPasswordFieldType	= 202;
																																																									
$gPermissionsRefreshTime = 0;
$gPermissionsRead = false;

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";
$showCustomMarkerOnPrint = false;

$projectBuildKey = "1139_1616299005";
$wizardBuildKey = "33793";
$projectBuildNumber = "1139";

$mlang_messages = array();
$mlang_charsets = array();


$projectMenus = array();
$projectMenus[] = "main";
$projectMenus[] = "menu_tarefas";


$menuTreelikeFlags = array();
$menuTreelikeFlags["main"] = 1;


$menuTreelikeFlags["menu_tarefas"] = 1;



// table captions
$tableCaptions = array();
$tableCaptions["English"] = array();
$tableCaptions["English"][""] = "";
$tableCaptions["English"]["tb_atividade"] = "Tasks";
$tableCaptions["English"]["tb_clientes"] = "Customers";
$tableCaptions["English"]["tb_clientes_planos"] = "Customer Plans";
$tableCaptions["English"]["tb_dominios"] = "Domains";
$tableCaptions["English"]["tb_lista_atividades"] = "Task's List";
$tableCaptions["English"]["tb_planos"] = "Access Plans";
$tableCaptions["English"]["tb_planos_valores"] = "Plan's Values";
$tableCaptions["English"]["tb_status_atividades"] = "Activity Status";
$tableCaptions["English"]["tb_usuarios"] = "Users";
$tableCaptions["English"]["admin_members"] = "Admin Members";
$tableCaptions["English"]["admin_users"] = "Admin Users";
$tableCaptions["English"]["admin_rights"] = "Admin Rights";
$tableCaptions["English"]["log_audit"] = "Log Audit";
$tableCaptions["English"]["Gr_fico_Tarefas_por_Lista"] = "Tasks by List Chart";
$tableCaptions["English"]["proc_limpar_tarefas_de_lista"] = "Proc Clean List's Tasks";
$tableCaptions["English"]["tb_parametros"] = "System Parameters";
$tableCaptions["English"]["Gr_fico_Tarefas_por_Status"] = "Chart Tasks by Status";
$tableCaptions["English"]["Gr_fico_Tarefas_por_Prioridade"] = "Chart Tasks by Priority";
$tableCaptions["English"]["Gr_fico_Tarefas_criadas_por_Usu_rio"] = "Chart Tasks created by User";
$tableCaptions["English"]["tb_categorias"] = "Categories";
$tableCaptions["English"]["tb_categorias_x_atividades"] = "Task's Categories";
$tableCaptions["English"]["vw_tarefas_categorias"] = "Vw Tasks and Categories";
$tableCaptions["English"]["Dashboard_Lista_e_Tarefas"] = "Dashboard Lista E Tarefas";
$tableCaptions["English"]["Dashboard_Graficos"] = "Dashboard Graficos";
$tableCaptions["Portuguese(Brazil)"] = array();
$tableCaptions["Portuguese(Brazil)"][""] = "";
$tableCaptions["Portuguese(Brazil)"]["tb_atividade"] = "Tarefas";
$tableCaptions["Portuguese(Brazil)"]["tb_clientes"] = "Clientes";
$tableCaptions["Portuguese(Brazil)"]["tb_clientes_planos"] = "Planos de Clientes";
$tableCaptions["Portuguese(Brazil)"]["tb_dominios"] = "Domínios";
$tableCaptions["Portuguese(Brazil)"]["tb_lista_atividades"] = "Lista de Tarefas";
$tableCaptions["Portuguese(Brazil)"]["tb_planos"] = "Planos de Acesso";
$tableCaptions["Portuguese(Brazil)"]["tb_planos_valores"] = "Valores de Planos";
$tableCaptions["Portuguese(Brazil)"]["tb_status_atividades"] = "Status de Atividades";
$tableCaptions["Portuguese(Brazil)"]["tb_usuarios"] = "Usuários";
$tableCaptions["Portuguese(Brazil)"]["admin_rights"] = "Permissão Admin";
$tableCaptions["Portuguese(Brazil)"]["admin_members"] = "Membro Admin";
$tableCaptions["Portuguese(Brazil)"]["admin_users"] = "Usuários Admin";
$tableCaptions["Portuguese(Brazil)"]["log_audit"] = "Log de Auditoria";
$tableCaptions["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Lista"] = "Gráfico Tarefas por Lista";
$tableCaptions["Portuguese(Brazil)"]["proc_limpar_tarefas_de_lista"] = "Proc Limpar Tarefas De Lista";
$tableCaptions["Portuguese(Brazil)"]["tb_parametros"] = "Parametros do Sistema";
$tableCaptions["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Status"] = "Gráfico Tarefas por Status";
$tableCaptions["Portuguese(Brazil)"]["Gr_fico_Tarefas_por_Prioridade"] = "Gráfico Tarefas por Prioridade";
$tableCaptions["Portuguese(Brazil)"]["Gr_fico_Tarefas_criadas_por_Usu_rio"] = "Gráfico Tarefas criadas por Usuário";
$tableCaptions["Portuguese(Brazil)"]["tb_categorias"] = "Categorias";
$tableCaptions["Portuguese(Brazil)"]["tb_categorias_x_atividades"] = "Categorias por Atividades";
$tableCaptions["Portuguese(Brazil)"]["vw_tarefas_categorias"] = "Vw Tarefas Categorias";
$tableCaptions["Portuguese(Brazil)"]["Dashboard_Lista_e_Tarefas"] = "Dashboard Lista e Tarefas";
$tableCaptions["Portuguese(Brazil)"]["Dashboard_Graficos"] = "Dashboard Graficos";
$tableCaptions["Spanish"] = array();
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"]["tb_atividade"] = "Tareas";
$tableCaptions["Spanish"]["tb_clientes"] = "Clientes";
$tableCaptions["Spanish"]["tb_clientes_planos"] = "Planes de clientes";
$tableCaptions["Spanish"]["tb_dominios"] = "Dominios";
$tableCaptions["Spanish"]["tb_lista_atividades"] = "Lista de Tareas";
$tableCaptions["Spanish"]["tb_planos"] = "Planes de acceso";
$tableCaptions["Spanish"]["tb_planos_valores"] = "Plan de valores";
$tableCaptions["Spanish"]["tb_status_atividades"] = "Estado de actividad";
$tableCaptions["Spanish"]["tb_usuarios"] = "Los usuarios";
$tableCaptions["Spanish"]["admin_members"] = "Admin Members";
$tableCaptions["Spanish"]["admin_users"] = "Admin Users";
$tableCaptions["Spanish"]["admin_rights"] = "Admin Rights";
$tableCaptions["Spanish"]["log_audit"] = "Log Audit";
$tableCaptions["Spanish"]["Gr_fico_Tarefas_por_Lista"] = "Gráfico Tarefas por Lista";
$tableCaptions["Spanish"]["proc_limpar_tarefas_de_lista"] = "Proc Limpar Tarefas De Lista";
$tableCaptions["Spanish"]["tb_parametros"] = "Tb Parametros";
$tableCaptions["Spanish"]["Gr_fico_Tarefas_por_Status"] = "Gráfico Tarefas por Status";
$tableCaptions["Spanish"]["Gr_fico_Tarefas_por_Prioridade"] = "Gráfico Tarefas por Prioridade";
$tableCaptions["Spanish"]["Gr_fico_Tarefas_criadas_por_Usu_rio"] = "Gráfico Tarefas criadas por Usuário";
$tableCaptions["Spanish"]["tb_categorias"] = "Categorias";
$tableCaptions["Spanish"]["tb_categorias_x_atividades"] = "Categorias X Atividades";
$tableCaptions["Spanish"]["vw_tarefas_categorias"] = "Vw Tarefas Categorias";
$tableCaptions["Spanish"]["Dashboard_Lista_e_Tarefas"] = "Dashboard Lista E Tarefas";
$tableCaptions["Spanish"]["Dashboard_Graficos"] = "Dashboard Graficos";


$globalEvents = new class_GlobalEvents;
$tableEvents = array();
$dalTables = array();
$tableinfo_cache = array();

require_once( getabspath('classes/labels.php') );
require_once( getabspath('classes/security.php') );
require_once( getabspath("connections/dbfunctions_legacy.php") );
require_once( getabspath("connections/ConnectionManager.php") );
include(getabspath('classes/searchclause.php'));
include(getabspath('classes/projectsettings.php'));
include_once(getabspath('classes/runnerpage.php'));
include_once(getabspath("classes/controls/ViewControl.php"));
require_once( getabspath('classes/db.php') );
require_once( getabspath('classes/context.php') );
require_once(getabspath("classes/cipherer.php"));
require_once( getabspath('classes/wheretabs.php') );

$contextStack = new RunnerContext;

$cman = new ConnectionManager();

$currentConnection = null;

$mlang_defaultlang = getDefaultLanguage();

include(getabspath("include/languages.php"));

$mediaType = $_COOKIE["mediaType"];
$mediaType = $mediaType ? $mediaType : 0;



$page_titles[".global"] = array();
if(mlang_getcurrentlang()=="English")
{
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
}
if(mlang_getcurrentlang()=="Spanish")
{
}

$globalSettings["showDetailedError"] = true;


// SearchClause::getSearchObject
$_cachedSeachClauses = array();

$auditMaxFieldLength = 300;

// here goes EVENT_INIT_APP event
// Rene: Importacao do arquivo de rotinas e funcoes customizadas
require_once('./funcoes_rene.php');
// Rene: Configuração do Timezone para Brasil, sem horario de verao
date_default_timezone_set('america/Recife');

// Place event code here.
// Use "Add Action" button to add code snippets.

//**********  Display a message on the Web page  ************
// echo "Executada a AfterAppInit()";


;


// default connection link #9875
$conn = $cman->getDefault()->conn;


//	delete old username & password cookies
if( $_COOKIE["password"] ) {
	setcookie("username", "", time() - 1, "", "", false, false);
	setcookie("password", "", time() - 1, "", "", false, false);
}


$logoutPerformed = false;
$scriptname = getFileNameFromURL();
	if(!isLogged() && $scriptname!="login.php" && $scriptname!="remind.php" && $scriptname!="register.php" && $scriptname!="checkduplicates.php")
{
	Security::doGuestLogin();
}


$isGroupSecurity = true;

$isUseRTEBasic = true;

$isUseRTECK = false;

$isUseRTEInnova = false;

$caseInsensitiveUsername = 0;


$menuNodesIndex=0;

/**
 *	Sundry data the page classes want pass to their JS counterparts
 * 	TODO: Move proxy here
 *
 *	$pagesData[<pageid>] = array( 	<key> => <value>
 *									<key> => <value> ... )
 *					)
 */
$pagesData = array();

$pageInConstruction = null;

?>