<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to the React Application using Codeigniter.</title>
		<link href="/assets/css/lib/bootstrap.min.css" rel="stylesheet">
		<link href="/assets/css/style.css" rel="stylesheet">
	</head>
	<body>
		<header id="header">
			<?php echo $header; ?>
		</header>
		<div id="content" class="container">
			<?php echo $content; ?>
		</div>
		<footer id="footer">
			<?php echo $footer; ?>
		</footer>
		<script src="/assets/js/lib/react.js"></script>
		<script src="/assets/js/lib/react-dom.js"></script>
		<script src="/assets/js/lib/babel.min.js"></script>
	</body>
</html>