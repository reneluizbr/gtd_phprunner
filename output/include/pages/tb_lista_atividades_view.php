<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'tb_atividade' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'Gráfico Tarefas por Lista' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'fields' => array( 'gridFields' => array( 'lista_id',
'clie_id',
'lista_nm',
'inclu_dt',
'alter_dt',
'inclu_login',
'alter_login' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'lista_id' => array( 'integrated_edit_field' ),
'clie_id' => array( 'integrated_edit_field1' ),
'lista_nm' => array( 'integrated_edit_field2' ),
'inclu_dt' => array( 'integrated_edit_field4' ),
'alter_dt' => array( 'integrated_edit_field6' ),
'inclu_login' => array( 'integrated_edit_field3' ),
'alter_login' => array( 'integrated_edit_field5' ) ) ),
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
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field6' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c5' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field6',
'integrated_edit_field3',
'integrated_edit_field5' ) ),
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
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3',
'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5',
'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 2 ) ) ),
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
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 1,
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
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ) ),
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
'items' => array( 'integrated_edit_field3',
'integrated_edit_field4' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5',
'integrated_edit_field6' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 2,
'inlineLabels' => true,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'lista_id',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field1' => array( 'field' => 'clie_id',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field2' => array( 'field' => 'lista_nm',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field4' => array( 'field' => 'inclu_dt',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field6' => array( 'field' => 'alter_dt',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field3' => array( 'field' => 'inclu_login',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field5' => array( 'field' => 'alter_login',
'type' => 'integrated_edit_field',
'orientation' => 1 ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>