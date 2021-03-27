<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'details' => array( 'tb_tarefas_x_rotulos' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'tb_tarefas_ocorrencias' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'master' => array( 'tb_lista_atividades' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'ativ_id',
'clie_id',
'ativ_nm',
'ativ_ds',
'lista_id',
'stat_id',
'ativ_prioridade',
'ativ_concluida',
'ativ_dt_ini',
'ativ_dt_fim',
'inclu_login',
'inclu_dt',
'alter_login',
'alter_dt',
'ativ_domi_unid_tempo',
'ativ_tempo_estimado',
'ativ_tempo_real' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'ativ_id' => array( 'integrated_edit_field' ),
'clie_id' => array( 'integrated_edit_field1' ),
'ativ_nm' => array( 'integrated_edit_field2' ),
'ativ_ds' => array( 'integrated_edit_field3' ),
'lista_id' => array( 'integrated_edit_field4' ),
'stat_id' => array( 'integrated_edit_field5' ),
'ativ_prioridade' => array( 'integrated_edit_field7' ),
'ativ_concluida' => array( 'integrated_edit_field8' ),
'ativ_dt_ini' => array( 'integrated_edit_field9' ),
'ativ_dt_fim' => array( 'integrated_edit_field10' ),
'inclu_login' => array( 'integrated_edit_field11' ),
'inclu_dt' => array( 'integrated_edit_field12' ),
'alter_login' => array( 'integrated_edit_field13' ),
'alter_dt' => array( 'integrated_edit_field14' ),
'ativ_domi_unid_tempo' => array( 'integrated_edit_field6' ),
'ativ_tempo_estimado' => array( 'integrated_edit_field15' ),
'ativ_tempo_real' => array( 'integrated_edit_field16' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field1',
'section',
'section1',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field8',
'integrated_edit_field5',
'integrated_edit_field7' ),
'section2' => array( 'integrated_edit_field9',
'integrated_edit_field6',
'integrated_edit_field10',
'integrated_edit_field15',
'integrated_edit_field16' ),
'section3' => array( 'integrated_edit_field12',
'integrated_edit_field11',
'integrated_edit_field14',
'integrated_edit_field13' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field1' => 'grid',
'section' => 'grid',
'section1' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field9' => 'section2',
'integrated_edit_field6' => 'section2',
'integrated_edit_field10' => 'section2',
'integrated_edit_field15' => 'section2',
'integrated_edit_field16' => 'section2',
'integrated_edit_field12' => 'section3',
'integrated_edit_field11' => 'section3',
'integrated_edit_field14' => 'section3',
'integrated_edit_field13' => 'section3' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c' ),
'section' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'section1' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c11' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c11' ),
'integrated_edit_field9' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field6' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field10' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field15' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field16' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field12' => array( 'location' => 'section3',
'cellId' => 'c1' ),
'integrated_edit_field11' => array( 'location' => 'section3',
'cellId' => 'c1' ),
'integrated_edit_field14' => array( 'location' => 'section3',
'cellId' => 'c' ),
'integrated_edit_field13' => array( 'location' => 'section3',
'cellId' => 'c' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field6',
'integrated_edit_field15',
'integrated_edit_field16' ),
'view_pdf' => array( 'view_pdf' ),
'section' => array( 'section',
'section1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0,
1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4',
'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5',
'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0,
1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'section',
'section1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 5 ),
'section2' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9',
'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10',
'integrated_edit_field15',
'integrated_edit_field16' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 1 ),
'section3' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12',
'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field14',
'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view_original',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c5',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c10' ),
array( 'cell' => 'c11' ) ) ),
array( 'cells' => array( array( 'cell' => 'c4',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field',
'integrated_edit_field2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c4' => array( 'model' => 'c3',
'items' => array( 'section',
'section1' ) ),
'c8' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c9' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c10' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4',
'integrated_edit_field8' ) ),
'c11' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5',
'integrated_edit_field7' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 2,
'inlineLabels' => true,
'separateLabels' => false ),
'section2' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field9',
'integrated_edit_field6' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field10',
'integrated_edit_field15',
'integrated_edit_field16' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section3' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field12',
'integrated_edit_field11' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field14',
'integrated_edit_field13' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit',
'view_pdf' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'ativ_id',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field1' => array( 'field' => 'clie_id',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field2' => array( 'field' => 'ativ_nm',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field3' => array( 'field' => 'ativ_ds',
'type' => 'integrated_edit_field',
'orientation' => 1,
'padding' => array(  ) ),
'integrated_edit_field4' => array( 'field' => 'lista_id',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field5' => array( 'field' => 'stat_id',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field7' => array( 'field' => 'ativ_prioridade',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field8' => array( 'field' => 'ativ_concluida',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field9' => array( 'field' => 'ativ_dt_ini',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field10' => array( 'field' => 'ativ_dt_fim',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field11' => array( 'field' => 'inclu_login',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field12' => array( 'field' => 'inclu_dt',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field13' => array( 'field' => 'alter_login',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field14' => array( 'field' => 'alter_dt',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'view_pdf' => array( 'type' => 'view_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'section' => array( 'type' => 'section',
'title' => array( 'text' => 'Datas da Atividade',
'type' => 0 ),
'location' => 'section2' ),
'section1' => array( 'type' => 'section',
'title' => array( 'text' => 'Controle de Alterações',
'type' => 0 ),
'location' => 'section3' ),
'integrated_edit_field6' => array( 'field' => 'ativ_domi_unid_tempo',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field15' => array( 'field' => 'ativ_tempo_estimado',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field16' => array( 'field' => 'ativ_tempo_real',
'type' => 'integrated_edit_field',
'orientation' => 1 ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>