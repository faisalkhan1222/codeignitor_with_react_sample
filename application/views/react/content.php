<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script>
	<?php
		$module_class = preg_replace('/[_\/]/', '', ucwords($_module_name, '[_\/]'));
		$include_file = "/js/react/components/{$_module_name}.js";
	?>
	System.import('<?php echo $include_file; ?>');
</script>