<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script type="text/babel">
	<?php
		$module_class = preg_replace('/[_\/]/', '', ucwords($_module_name, '[_\/]'));
		include __DIR__ . "/modules/{$_module_name}.jsx"; 
	?>

	ReactDOM.render( < <?php echo $module_class; ?> /> , document.getElementById( '<?php echo $_module_dom_tag_id; ?>' ) );
</script>