<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script type="text/babel">
	<?php include __DIR__ . "/react_components/{$_component_name}.jsx"; ?>
</script>

<?php
	// Get component class name to render it.
	$component_class = str_replace('_', '', ucwords($_component_name, '_'));

	if( strpos( $component_class, '/' ) ) {
		$component_class = ucwords( basename( $component_class ) );	
	}
?>
<script type="text/babel">	
	ReactDOM.render( < <?php echo $component_class; ?> /> , document.getElementById( '<?php echo $_component_dom_tag_id; ?>' ) );
</script>