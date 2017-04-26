<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

// If the meta args are not set, then don't execute the below code
if( ! isset( $meta_args ) ) {
	return;
}
?>
<title><?php echo $meta_args['title']; ?></title>
<meta name='description' content="<?php echo $meta_args['description']; ?>"/>
<meta name='keywords' content="<?php echo $meta_args['keywords']; ?>"/>