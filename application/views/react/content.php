<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script type="text/babel">
	<?php include __DIR__ . "/modules/{$_module_name}.jsx"; ?>
</script>

<?php
	// Get component class name to render it.
	$module_class = preg_replace('/[_\/]/', '', ucwords($_module_name, '[_\/]'));
?>
<script type="text/babel">	
	ReactDOM.render( < <?php echo $module_class; ?> /> , document.getElementById( '<?php echo $_module_dom_tag_id; ?>' ) );
</script>