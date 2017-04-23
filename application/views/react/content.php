<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

$component_class = str_replace('_', '', ucwords($_component_name, '_'));

?>
<script type="text/babel">
	<?php include __DIR__ . "/react_components/{$_component_name}.jsx"; ?>
</script>

<script type="text/babel">	
	ReactDOM.render( < <?php echo $component_class; ?> /> , document.getElementById( '<?php echo $_component_dom_tag_id; ?>' ) );
</script>