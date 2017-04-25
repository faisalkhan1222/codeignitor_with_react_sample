<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to the React Application using Codeigniter.</title>
		<link href="/css/lib/bootstrap.min.css" rel="stylesheet">
		<link href="/css/style.css" rel="stylesheet">
		<script src="/js/lib/jspm-system.js"></script>
		<script>
			System.config({
			  transpiler: 'babel',
			  babelOptions: {}
			});
		</script>
	</head>
	<body>
		<div class="container" id="content">
			<?php echo $content; ?>
		</div>
		<script src="/js/lib/react.js"></script>
		<script src="/js/lib/react-dom.js"></script>
	</body>
</html>