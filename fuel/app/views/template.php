<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<?php
			echo Asset::css(array(
				'bootstrap.min.css',
			));
			?>
		<?php
			echo Asset::js(array(
				'jquery-3.0.0.min.js',
				'bootstrap.min.js',
			));
			?>
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<?php echo $content; ?>
			</div>
		</div>
	</body>
</html>