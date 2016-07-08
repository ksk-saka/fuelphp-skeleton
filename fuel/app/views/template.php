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
				'bootstrap.min.js',
			));
			?>
	</head>

	<body>
		<div class="container">

			<?php echo $content; ?>

		</div>
	</body>
</html>
