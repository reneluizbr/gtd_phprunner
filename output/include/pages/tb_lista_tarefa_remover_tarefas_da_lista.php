<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'tb_tarefa' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'Gráfico Tarefas por Lista' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'fields' => array( 'gridFields' => array( 'lista_nm',
'inclu_login',
'alter_login' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'lista_nm' => array( 'integrated_edit_field2' ),
'inclu_login' => array( 'integrated_edit_field' ),
'alter_login' => array( 'integrated_edit_field1' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'text',
'section',
'integrated_edit_field2',
'integrated_edit_field',
'integrated_edit_field1' ),
'section' => array( 'custom_button',
'text1',
'text2' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'text' => 'grid',
'section' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field1' => 'grid',
'custom_button' => 'section',
'text1' => 'section',
'text2' => 'section' ),
'itemLocations' => array( 'text' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'section' => array( 'location' => 'grid',
'cellId' => 'c2' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'custom_button' => array( 'location' => 'section',
'cellId' => 'c1' ),
'text1' => array( 'location' => 'section',
'cellId' => 'c' ),
'text2' => array( 'location' => 'section',
'cellId' => 'c2' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field2',
'integrated_edit_field',
'integrated_edit_field1' ),
'section' => array( 'section' ),
'text' => array( 'text',
'text1',
'text2' ),
'custom_button' => array( 'custom_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'text' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 0,
1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0,
1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'section' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0,
1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 4 ),
'section' => array( 'cells' => array( 'c' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'text1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'text2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => true ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 2 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => true ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'CmdRemoverTarefas' ) ) );
			$pageArray = array( 'id' => 'remover_tarefas_da_lista',
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
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c1',
'colspan' => 1 ),
array( 'cell' => 'c4' ) ) ),
array( 'cells' => array( array( 'cell' => 'c7',
'colspan' => 2 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2',
'colspan' => 2 ) ) ),
array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c4' => array( 'model' => 'c3',
'items' => array(  ) ),
'c1' => array( 'model' => 'c3',
'items' => array( 'text' ) ),
'c2' => array( 'model' => 'c3',
'items' => array( 'section' ) ),
'c7' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field',
'integrated_edit_field1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => true,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c2' ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'custom_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'text1' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'text2' ) ),
'c3' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header',
'title' => array( 'page' => 'remover_tarefas_da_lista',
'table' => 'tb_lista_atividades',
'type' => 7 ) ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field2' => array( 'field' => 'lista_nm',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'section' => array( 'type' => 'section',
'title' => array( 'text' => 'Parâmetros de remoção de tarefas da lista',
'type' => 0 ),
'location' => 'section' ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => 'Remover tarefas da lista',
'type' => 0 ),
'mobileDisplay' => 'both',
'font-size' => '20px' ),
'custom_button' => array( 'eventId' => 'CmdRemoverTarefas',
'label' => array( 'text' => 'Cmd Remover Tarefas',
'type' => 0 ),
'type' => 'custom_button',
'icon' => array( 'fa' => 'trash-o' ) ),
'text1' => array( 'type' => 'text',
'label' => array( 'text' => 'Anteriores à data:',
'type' => 0 ) ),
'text2' => array( 'type' => 'text',
'label' => array( 'text' => 'xxx',
'type' => 0 ) ),
'integrated_edit_field' => array( 'field' => 'inclu_login',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field1' => array( 'field' => 'alter_login',
'type' => 'integrated_edit_field',
'orientation' => 1 ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>