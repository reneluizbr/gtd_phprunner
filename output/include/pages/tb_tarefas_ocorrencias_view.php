<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'master' => array( 'tb_atividade' => array( 'preview' => true ) ),
'fields' => array( 'gridFields' => array( 'ativ_id',
'clie_id',
'Data_Hora',
'Comentario',
'Concluida',
'inclu_dt',
'inclu_login',
'alter_login',
'alter_dt' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'ativ_id' => array( 'integrated_edit_field',
'integrated_edit_field5' ),
'clie_id' => array( 'integrated_edit_field1',
'integrated_edit_field6' ),
'Data_Hora' => array( 'integrated_edit_field2',
'integrated_edit_field7' ),
'Comentario' => array( 'integrated_edit_field3',
'integrated_edit_field8' ),
'Concluida' => array( 'integrated_edit_field4',
'integrated_edit_field9' ),
'inclu_dt' => array( 'edit_field',
'edit_field_label' ),
'inclu_login' => array( 'edit_field1',
'edit_field_label1' ),
'alter_login' => array( 'edit_field2',
'edit_field_label2' ),
'alter_dt' => array( 'edit_field3',
'edit_field_label3' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'integrated_edit_field5',
'integrated_edit_field',
'integrated_edit_field7',
'integrated_edit_field2',
'integrated_edit_field6',
'integrated_edit_field1',
'integrated_edit_field9',
'integrated_edit_field4',
'integrated_edit_field8',
'integrated_edit_field3',
'edit_field_label1',
'edit_field1',
'edit_field_label2',
'edit_field2',
'edit_field_label',
'edit_field',
'edit_field_label3',
'edit_field3',
'master_info' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field3' => 'grid',
'edit_field_label1' => 'grid',
'edit_field1' => 'grid',
'edit_field_label2' => 'grid',
'edit_field2' => 'grid',
'edit_field_label' => 'grid',
'edit_field' => 'grid',
'edit_field_label3' => 'grid',
'edit_field3' => 'grid',
'master_info' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c2' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c8' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'edit_field_label1' => array( 'location' => 'grid',
'cellId' => 'c13' ),
'edit_field1' => array( 'location' => 'grid',
'cellId' => 'c14' ),
'edit_field_label2' => array( 'location' => 'grid',
'cellId' => 'c15' ),
'edit_field2' => array( 'location' => 'grid',
'cellId' => 'c16' ),
'edit_field_label' => array( 'location' => 'grid',
'cellId' => 'c17' ),
'edit_field' => array( 'location' => 'grid',
'cellId' => 'c18' ),
'edit_field_label3' => array( 'location' => 'grid',
'cellId' => 'c19' ),
'edit_field3' => array( 'location' => 'grid',
'cellId' => 'c20' ),
'master_info' => array( 'location' => 'grid',
'cellId' => 'c1' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'edit_field',
'edit_field1',
'edit_field2',
'edit_field3' ),
'edit_field_label' => array( 'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'edit_field_label',
'edit_field_label1',
'edit_field_label2',
'edit_field_label3' ),
'view_pdf' => array( 'view_pdf' ),
'master_info' => array( 'master_info' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'ativ_id_fieldblock' ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'Data_Hora_fieldblock' ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array( 'clie_id_fieldblock' ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array( 'Concluida_fieldblock' ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array( 'Comentario_fieldblock' ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 1,
2,
3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c17' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array( 'inclu_dt_fieldblock' ),
'items' => array( 'edit_field_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c18' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c19' => array( 'cols' => array( 2 ),
'rows' => array( 4 ),
'tags' => array( 'alter_dt_fieldblock' ),
'items' => array( 'edit_field_label3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c20' => array( 'cols' => array( 3 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array( 'inclu_login_fieldblock' ),
'items' => array( 'edit_field_label1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c15' => array( 'cols' => array( 2 ),
'rows' => array( 5 ),
'tags' => array( 'alter_login_fieldblock' ),
'items' => array( 'edit_field_label2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c16' => array( 'cols' => array( 3 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c21' => array( 'cols' => array( 0 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c22' => array( 'cols' => array( 1 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c23' => array( 'cols' => array( 2 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c24' => array( 'cols' => array( 3 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 4,
'height' => 7 ) ) ),
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
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 4 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c' ),
array( 'cell' => 'c3' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c5' ),
array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ),
array( 'cell' => 'c8' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c9' ),
array( 'cell' => 'c10',
'colspan' => 3 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c17' ),
array( 'cell' => 'c18' ),
array( 'cell' => 'c19' ),
array( 'cell' => 'c20' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c13' ),
array( 'cell' => 'c14' ),
array( 'cell' => 'c15' ),
array( 'cell' => 'c16' ) ) ),
array( 'cells' => array( array( 'cell' => 'c21' ),
array( 'cell' => 'c22' ),
array( 'cell' => 'c23' ),
array( 'cell' => 'c24' ) ),
'section' => '' ) ),
'cells' => array( 'c4' => array( 'model' => 'c4',
'items' => array( 'integrated_edit_field5' ),
'field' => 'ativ_id' ),
'c2' => array( 'model' => 'c2',
'items' => array( 'integrated_edit_field' ),
'field' => 'ativ_id' ),
'c' => array( 'model' => 'c4',
'items' => array( 'integrated_edit_field7' ),
'field' => 'clie_id' ),
'c3' => array( 'model' => 'c2',
'items' => array( 'integrated_edit_field2' ),
'field' => 'clie_id' ),
'c5' => array( 'model' => 'c4',
'items' => array( 'integrated_edit_field6' ),
'field' => 'Data_Hora' ),
'c6' => array( 'model' => 'c2',
'items' => array( 'integrated_edit_field1' ),
'field' => 'Data_Hora' ),
'c7' => array( 'model' => 'c4',
'items' => array( 'integrated_edit_field9' ),
'field' => 'Comentario' ),
'c8' => array( 'model' => 'c2',
'items' => array( 'integrated_edit_field4' ),
'field' => 'Comentario' ),
'c9' => array( 'model' => 'c4',
'items' => array( 'integrated_edit_field8' ),
'field' => 'Concluida' ),
'c10' => array( 'model' => 'c2',
'items' => array( 'integrated_edit_field3' ),
'field' => 'Concluida' ),
'c13' => array( 'model' => 'c4',
'items' => array( 'edit_field_label1' ) ),
'c14' => array( 'model' => 'c2',
'items' => array( 'edit_field1' ) ),
'c15' => array( 'model' => 'c4',
'items' => array( 'edit_field_label2' ),
'field' => 'alter_login' ),
'c16' => array( 'model' => 'c2',
'items' => array( 'edit_field2' ),
'field' => 'alter_login' ),
'c17' => array( 'model' => 'c4',
'items' => array( 'edit_field_label' ) ),
'c18' => array( 'model' => 'c2',
'items' => array( 'edit_field' ) ),
'c19' => array( 'model' => 'c4',
'items' => array( 'edit_field_label3' ),
'field' => 'inclu_login' ),
'c20' => array( 'model' => 'c2',
'items' => array( 'edit_field3' ),
'field' => 'inclu_login' ),
'c21' => array( 'model' => 'c4',
'items' => array(  ),
'field' => 'alter_dt' ),
'c22' => array( 'model' => 'c2',
'items' => array(  ),
'field' => 'alter_dt' ),
'c23' => array( 'model' => 'c4',
'items' => array(  ) ),
'c24' => array( 'model' => 'c2',
'items' => array(  ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'master_info' ),
'field' => null ) ),
'deferredItems' => array(  ),
'columnCount' => 2,
'inlineLabels' => true,
'separateLabels' => true ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit',
'view_pdf' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'ativ_id',
'type' => 'edit_field' ),
'integrated_edit_field1' => array( 'field' => 'clie_id',
'type' => 'edit_field' ),
'integrated_edit_field2' => array( 'field' => 'Data_Hora',
'type' => 'edit_field' ),
'integrated_edit_field3' => array( 'field' => 'Comentario',
'type' => 'edit_field' ),
'integrated_edit_field4' => array( 'field' => 'Concluida',
'type' => 'edit_field' ),
'integrated_edit_field5' => array( 'type' => 'edit_field_label',
'field' => 'ativ_id' ),
'integrated_edit_field6' => array( 'type' => 'edit_field_label',
'field' => 'clie_id' ),
'integrated_edit_field7' => array( 'type' => 'edit_field_label',
'field' => 'Data_Hora' ),
'integrated_edit_field8' => array( 'type' => 'edit_field_label',
'field' => 'Comentario' ),
'integrated_edit_field9' => array( 'type' => 'edit_field_label',
'field' => 'Concluida' ),
'view_pdf' => array( 'type' => 'view_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'edit_field' => array( 'field' => 'inclu_dt',
'type' => 'edit_field' ),
'edit_field_label' => array( 'type' => 'edit_field_label',
'field' => 'inclu_dt' ),
'edit_field1' => array( 'field' => 'inclu_login',
'type' => 'edit_field' ),
'edit_field_label1' => array( 'type' => 'edit_field_label',
'field' => 'inclu_login' ),
'edit_field2' => array( 'field' => 'alter_login',
'type' => 'edit_field' ),
'edit_field_label2' => array( 'type' => 'edit_field_label',
'field' => 'alter_login' ),
'edit_field3' => array( 'field' => 'alter_dt',
'type' => 'edit_field' ),
'edit_field_label3' => array( 'type' => 'edit_field_label',
'field' => 'alter_dt' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'tb_atividade' => 'true' ) ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>