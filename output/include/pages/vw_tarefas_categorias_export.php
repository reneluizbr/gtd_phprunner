<?php
			$optionsArray = array( 'totals' => array( 'Categorias' => array( 'totalsType' => '' ),
'ativ_id' => array( 'totalsType' => '' ),
'clie_id' => array( 'totalsType' => '' ),
'ativ_nm' => array( 'totalsType' => '' ),
'cate_nm' => array( 'totalsType' => '' ),
'ativ_ds' => array( 'totalsType' => '' ),
'lista_id' => array( 'totalsType' => '' ),
'lista_nm' => array( 'totalsType' => '' ),
'stat_id' => array( 'totalsType' => '' ),
'stat_nm' => array( 'totalsType' => '' ),
'ativ_fl_ativo' => array( 'totalsType' => '' ),
'ativ_prioridade' => array( 'totalsType' => '' ),
'ativ_concluida' => array( 'totalsType' => '' ),
'ativ_dt_ini' => array( 'totalsType' => '' ),
'ativ_dt_fim' => array( 'totalsType' => '' ),
'inclu_login' => array( 'totalsType' => '' ),
'inclu_dt' => array( 'totalsType' => '' ),
'alter_login' => array( 'totalsType' => '' ),
'alter_dt' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'ativ_id',
'clie_id',
'ativ_nm',
'cate_nm',
'ativ_ds',
'lista_id',
'lista_nm',
'stat_id',
'stat_nm',
'ativ_fl_ativo',
'ativ_prioridade',
'ativ_concluida',
'ativ_dt_ini',
'ativ_dt_fim',
'inclu_login',
'inclu_dt',
'alter_login',
'alter_dt' ),
'exportFields' => array( 'ativ_id',
'clie_id',
'ativ_nm',
'cate_nm',
'ativ_ds',
'lista_id',
'lista_nm',
'stat_id',
'stat_nm',
'ativ_fl_ativo',
'ativ_prioridade',
'ativ_concluida',
'ativ_dt_ini',
'ativ_dt_fim',
'inclu_login',
'inclu_dt',
'alter_login',
'alter_dt' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'ativ_id' => array( 'export_field' ),
'clie_id' => array( 'export_field1' ),
'ativ_nm' => array( 'export_field2' ),
'cate_nm' => array( 'export_field3' ),
'ativ_ds' => array( 'export_field4' ),
'lista_id' => array( 'export_field5' ),
'lista_nm' => array( 'export_field6' ),
'stat_id' => array( 'export_field7' ),
'stat_nm' => array( 'export_field8' ),
'ativ_fl_ativo' => array( 'export_field9' ),
'ativ_prioridade' => array( 'export_field10' ),
'ativ_concluida' => array( 'export_field11' ),
'ativ_dt_ini' => array( 'export_field12' ),
'ativ_dt_fim' => array( 'export_field13' ),
'inclu_login' => array( 'export_field14' ),
'inclu_dt' => array( 'export_field15' ),
'alter_login' => array( 'export_field16' ),
'alter_dt' => array( 'export_field17' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_field14' => 'grid',
'export_field15' => 'grid',
'export_field16' => 'grid',
'export_field17' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
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
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'ativ_id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'clie_id',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'ativ_nm',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'cate_nm',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'ativ_ds',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'lista_id',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'lista_nm',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'stat_id',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'stat_nm',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'ativ_fl_ativo',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'ativ_prioridade',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'ativ_concluida',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'ativ_dt_ini',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'ativ_dt_fim',
'type' => 'export_field' ),
'export_field14' => array( 'field' => 'inclu_login',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'inclu_dt',
'type' => 'export_field' ),
'export_field16' => array( 'field' => 'alter_login',
'type' => 'export_field' ),
'export_field17' => array( 'field' => 'alter_dt',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>