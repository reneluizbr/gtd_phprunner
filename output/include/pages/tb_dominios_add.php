<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'domi_grupo',
'domi_ordem',
'domi_valor',
'domi_exibe' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'domi_grupo' => array( 'integrated_edit_field1' ),
'domi_ordem' => array( 'integrated_edit_field2' ),
'domi_valor' => array( 'integrated_edit_field3' ),
'domi_exibe' => array( 'integrated_edit_field4' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'add_header' ),
'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'grid' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'add_header' => 'top',
'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1',
'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3',
'integrated_edit_field4' ),
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
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 1 ),
array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1',
'integrated_edit_field2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3',
'integrated_edit_field4' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 2,
'inlineLabels' => true,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'integrated_edit_field1' => array( 'field' => 'domi_grupo',
'type' => 'integrated_edit_field',
'orientation' => 1,
'tooltip' => array( 'field' => 'domi_grupo',
'table' => 'tb_dominios',
'type' => 4 ),
'placeholder' => array( 'field' => 'domi_grupo',
'table' => 'tb_dominios',
'type' => 5 ) ),
'integrated_edit_field2' => array( 'field' => 'domi_ordem',
'type' => 'integrated_edit_field',
'orientation' => 1,
'placeholder' => array( 'field' => 'domi_ordem',
'table' => 'tb_dominios',
'type' => 5 ),
'tooltip' => array( 'field' => 'domi_ordem',
'table' => 'tb_dominios',
'type' => 4 ) ),
'integrated_edit_field3' => array( 'field' => 'domi_valor',
'type' => 'integrated_edit_field',
'orientation' => 1,
'placeholder' => array( 'field' => 'domi_valor',
'table' => 'tb_dominios',
'type' => 5 ),
'tooltip' => array( 'field' => 'domi_valor',
'table' => 'tb_dominios',
'type' => 4 ) ),
'integrated_edit_field4' => array( 'field' => 'domi_exibe',
'type' => 'integrated_edit_field',
'orientation' => 1,
'placeholder' => array( 'field' => 'domi_exibe',
'table' => 'tb_dominios',
'type' => 5 ),
'tooltip' => array( 'field' => 'domi_exibe',
'table' => 'tb_dominios',
'type' => 4 ) ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>