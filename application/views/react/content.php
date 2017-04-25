<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script>
	<?php
		$include_file = "/js/react/components/{$_module_name}.js";
	?>
	System.import('<?php echo $include_file; ?>');
</script>