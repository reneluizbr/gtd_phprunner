<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'plva_id',
'plan_id',
'plva_dt_vigenc_ini',
'plva_dt_vigenc_fim',
'plva_vl',
'inclu_login',
'inclu_dt',
'alter_login',
'alter_dt' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'plva_id' => array( 'import_field' ),
'plan_id' => array( 'import_field1' ),
'plva_dt_vigenc_ini' => array( 'import_field2' ),
'plva_dt_vigenc_fim' => array( 'import_field3' ),
'plva_vl' => array( 'import_field4' ),
'inclu_login' => array( 'import_field5' ),
'inclu_dt' => array( 'import_field6' ),
'alter_login' => array( 'import_field7' ),
'alter_dt' => array( 'import_field8' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field6',
'import_field8',
'import_field5',
'import_field7' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field6' => 'grid',
'import_field8' => 'grid',
'import_field5' => 'grid',
'import_field7' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field6',
'import_field8',
'import_field5',
'import_field7' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'plva_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'plan_id',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'plva_dt_vigenc_ini',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'plva_dt_vigenc_fim',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'plva_vl',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'inclu_login',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'inclu_dt',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'alter_login',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'alter_dt',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>