<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => false,
'delete' => false,
'updateSelected' => false,
'addInPopup' => null,
'viewInPopup' => true,
'clickSort' => false,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'allDetails' => array( 'linkType' => 2 ),
'details' => array( 'tb_tarefas_x_rotulos' => array( 'displayPreview' => 2,
'previewPageId' => '',
'showCount' => false,
'hideEmptyChild' => false,
'hideEmptyPreview' => null,
'showProceedLink' => null,
'printDetails' => false ),
'tb_tarefas_ocorrencias' => array( 'displayPreview' => 2,
'previewPageId' => '',
'showCount' => false,
'hideEmptyChild' => false,
'hideEmptyPreview' => null,
'showProceedLink' => null,
'printDetails' => false ) ),
'master' => array( 'tb_lista_atividades' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => false,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'ativ_id' => array( 'totalsType' => '' ),
'clie_id' => array( 'totalsType' => '' ),
'ativ_nm' => array( 'totalsType' => '' ),
'ativ_ds' => array( 'totalsType' => '' ),
'lista_id' => array( 'totalsType' => '' ),
'stat_id' => array( 'totalsType' => '' ),
'ativ_fl_ativo' => array( 'totalsType' => '' ),
'ativ_prioridade' => array( 'totalsType' => '' ),
'ativ_concluida' => array( 'totalsType' => '' ),
'ativ_dt_ini' => array( 'totalsType' => '' ),
'ativ_dt_fim' => array( 'totalsType' => '' ),
'ativ_domi_unid_tempo' => array( 'totalsType' => '' ),
'ativ_tempo_estimado' => array( 'totalsType' => '' ),
'ativ_tempo_real' => array( 'totalsType' => '' ),
'inclu_login' => array( 'totalsType' => '' ),
'inclu_dt' => array( 'totalsType' => '' ),
'alter_login' => array( 'totalsType' => '' ),
'alter_dt' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'ativ_id',
'clie_id',
'ativ_nm',
'stat_id',
'ativ_prioridade',
'ativ_concluida',
'ativ_dt_ini',
'ativ_dt_fim' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'filterFields' => array( 'stat_id',
'ativ_prioridade',
'lista_id' ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'ativ_id' => array( 'simple_grid_field',
'simple_grid_field3' ),
'clie_id' => array( 'simple_grid_field1',
'simple_grid_field4' ),
'ativ_nm' => array( 'simple_grid_field2',
'simple_grid_field6' ),
'stat_id' => array( 'simple_grid_field5',
'simple_grid_field11' ),
'ativ_prioridade' => array( 'simple_grid_field7',
'simple_grid_field12' ),
'ativ_concluida' => array( 'simple_grid_field8',
'simple_grid_field13' ),
'ativ_dt_ini' => array( 'simple_grid_field9',
'simple_grid_field14' ),
'ativ_dt_fim' => array( 'simple_grid_field10',
'simple_grid_field15' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'left' => array( 'logo1',
'expand_button',
'menu',
'filter_panel' ),
'supertop' => array( 'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'above-grid' => array( 'inline_add',
'details_found',
'page_size',
'print_panel',
'snippet' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'master_info' ),
'grid' => array( 'simple_grid_field3',
'simple_grid_field',
'simple_grid_field4',
'simple_grid_field1',
'simple_grid_field6',
'simple_grid_field2',
'simple_grid_field11',
'simple_grid_field5',
'simple_grid_field12',
'simple_grid_field7',
'simple_grid_field13',
'simple_grid_field8',
'simple_grid_field14',
'simple_grid_field9',
'simple_grid_field15',
'simple_grid_field10',
'grid_checkbox_head',
'grid_checkbox',
'grid_edit',
'grid_inline_cancel',
'grid_view' ) ),
'formXtTags' => array( 'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
'itemForms' => array( 'logo1' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'filter_panel' => 'left',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'inline_add' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'snippet' => 'above-grid',
'pagination' => 'below-grid',
'master_info' => 'top',
'simple_grid_field3' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field10' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_view' => 'grid' ),
'itemLocations' => array( 'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ) ),
'itemVisiblity' => array( 'expand_button' => 5,
'menu' => 3,
'filter_panel' => 3,
'collapse_button' => 5,
'simple_search' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3,
'print_panel' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'list_options' => array( 'list_options' ),
'master_info' => array( 'master_info' ),
'-' => array( '-',
'-1',
'-2',
'-3',
'-4' ),
'filter_panel' => array( 'filter_panel' ),
'filter_panel_field' => array( 'filter_panel_field',
'filter_panel_field1',
'filter_panel_field2' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'loginform_login' => array( 'loginform_login' ),
'username_button' => array( 'username_button' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'lang_selector' => array( 'lang_selector' ),
'collapse_button' => array( 'collapse_button' ),
'snippet' => array( 'snippet' ),
'logo' => array( 'logo1' ),
'grid_field' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field5',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10' ),
'grid_field_label' => array( 'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field6',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field14',
'simple_grid_field15' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'expand_button' => array( 'expand_button' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'ativ_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'clie_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'ativ_nm_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'stat_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'ativ_prioridade_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'ativ_concluida_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'ativ_dt_ini_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'ativ_dt_fim_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'inline_cancel',
'view_column' ),
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'ativ_id_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'clie_id_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'ativ_nm_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'stat_id_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'ativ_prioridade_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'ativ_concluida_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'ativ_dt_ini_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'ativ_dt_fim_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 10,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list2_cartoes',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1',
'expand_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'filter_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'collapse_button',
'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c',
'colspan' => 2 ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'inline_add' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'snippet' ),
'nowrap' => false ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'ativ_id',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'ativ_id',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'clie_id',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'clie_id',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'ativ_nm',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'ativ_nm',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'stat_id',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'stat_id',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'ativ_prioridade',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'ativ_prioridade',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'ativ_concluida',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'ativ_concluida',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'ativ_dt_ini',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'ativ_dt_ini',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'ativ_dt_fim',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'ativ_dt_fim',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ),
'columnName' => 'checkbox' ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ),
'columnName' => 'checkbox' ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ),
'columnName' => 'checkbox' ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ),
'columnName' => 'list-icons' ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_view' ),
'columnName' => 'list-icons' ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ),
'columnName' => 'list-icons' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'lang_selector' ) ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'tb_lista_atividades' => 'true' ) ),
'-' => array( 'type' => '-' ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field',
'filter_panel_field2',
'filter_panel_field1' ) ),
'filter_panel_field' => array( 'field' => 'stat_id',
'type' => 'filter_panel_field' ),
'filter_panel_field1' => array( 'field' => 'ativ_prioridade',
'type' => 'filter_panel_field' ),
'filter_panel_field2' => array( 'field' => 'lista_id',
'type' => 'filter_panel_field' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'lang_selector' => array( 'type' => 'lang_selector' ),
'-1' => array( 'type' => '-' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'-2' => array( 'type' => '-' ),
'-3' => array( 'type' => '-' ),
'-4' => array( 'type' => '-' ),
'snippet' => array( 'eventId' => 'tb_atividade_snippet1',
'label' => array( 'text' => 'tb_atividade_snippet1',
'type' => 0 ),
'type' => 'snippet',
'customCSS' => '/* Put  your custom CSS code here */

:host {
  color: red;
}

* {
	margin: 5;
	padding: 5;
	box-sizing: border-box;
}

/* body {
  margin: 0;
} */

/*
body {
	background-color: #ebe835;
	font-family: \'Roboto\', Helvetica, sans-serif;
}*/

#id_posicao {
  color: blue;
}

#id_posicao.cls_posicao_alterada {
  color: red;
}

.app {
	display: flex;
	flex-flow: column;

	width: 100vw;
	height: 100vh;
}

header {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 60px;
}

.cls_listas {
  display: flex;
  flex: 1;
  width: 90%;
  overflow-x: auto;
}


.cls_listas .cls_raia {
	display: flex;
	flex-flow: column;
	flex: 1;

	width: 100%;
	min-width: 250px;
	max-width: 350px;
	height: 90%;
	min-height: 150px;

	background-color: rgba(0, 0, 0, 0.1);
	margin: 0 15px;
	padding: 8px;
	transition: all 0.2s linear;
}

.cls_listas .cls_raia .list-item {
	background-color: #F3F3F3;
	border-radius: 8px;
	padding: 15px 20px;
	text-align: center;
	margin: 4px 0px;
}

.cls_raiaXXX {
  /* -- Rene: inicio do teste de layout */
  /* display: inline-block; */
  display: flex;
  flex: 1;

  flex-flow: column;
	/* overflow-x: scroll; */


  /* OK */
  width: 100%;
	min-width: 250px;
	max-width: 350px;
  /* top: 5px; */
  /* left: 5px; */


  height: 90%;
  min-height: 250px;
  /* -- Rene: fim do teste de layout */

  background-color: rgb(18, 27, 148);
  /* padding: 1rem; */
  /* margin-top: 1rem; */

  margin: 0 15px;
  padding: 8px;
  transition: all 0.2s linear;

	border-radius: 8px;
	padding: 15px 20px;
	text-align: center;
	margin: 4px 0px;
}

.cls_draggable {
  padding: 1rem;
  background-color: white;
  border: 1px solid black;
  cursor: move;
  margin-top: 5px;
  border-radius: 8px;
}

.cls_raia_titulo {
  text-align: center;
  font-weight: bold;
  font-size: larger;
  color: rgb(240, 217, 217);
  background-color: rgb(14, 71, 195);
  font-family: \'Roboto\', Helvetica, sans-serif;
  padding: 10px;
  border-radius: 10px;
}

/* Classe arrastavel com seu atributo ".dragging" */
.cls_draggable.dragging {
  opacity: 0.9;
}

/* Para sobrescrever os textos dos cartoes dentro do PHPRUnner */
.panel-primary .panel-heading {
    color: #3d4068;
}

.r-form {
    margin-bottom: 10px;
    background-color: #ebeef1;
}
' ),
'logo1' => array( 'type' => 'logo' ),
'simple_grid_field' => array( 'field' => 'ativ_id',
'type' => 'grid_field',
'clickSort' => false ),
'simple_grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'ativ_id',
'clickSort' => false ),
'simple_grid_field1' => array( 'field' => 'clie_id',
'type' => 'grid_field',
'clickSort' => false ),
'simple_grid_field4' => array( 'type' => 'grid_field_label',
'field' => 'clie_id',
'clickSort' => false ),
'simple_grid_field2' => array( 'field' => 'ativ_nm',
'type' => 'grid_field',
'clickSort' => false ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'ativ_nm',
'clickSort' => false ),
'simple_grid_field5' => array( 'field' => 'stat_id',
'type' => 'grid_field',
'clickSort' => false ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'stat_id',
'clickSort' => false ),
'simple_grid_field7' => array( 'field' => 'ativ_prioridade',
'type' => 'grid_field',
'clickSort' => false ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'ativ_prioridade',
'clickSort' => false ),
'simple_grid_field8' => array( 'field' => 'ativ_concluida',
'type' => 'grid_field',
'clickSort' => false ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'ativ_concluida',
'clickSort' => false ),
'simple_grid_field9' => array( 'field' => 'ativ_dt_ini',
'type' => 'grid_field',
'clickSort' => false ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'ativ_dt_ini',
'clickSort' => false ),
'simple_grid_field10' => array( 'field' => 'ativ_dt_fim',
'type' => 'grid_field',
'clickSort' => false ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'ativ_dt_fim',
'clickSort' => false ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_edit' => array( 'type' => 'grid_edit' ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => true ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'expand_button' => array( 'type' => 'expand_button' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>