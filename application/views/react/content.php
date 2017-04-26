<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script>
	<?php
		$include_file = "/js/react/components/{$_module_name}.js";
	?>
	System.import('<?php echo $include_file; ?>').then(function(module) {
		var props = <?php echo json_encode($react_vars, JSON_FORCE_OBJECT); ?>;
		ReactDOM.render( React.createElement(module.default, props), document.getElementById('content') )
	})
</script>
