<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="<?= Config::$base_href ?>"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<?php include 'templates/partials/nav.php';?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8" style="min-height:200px;border-right:1px solid #cccccc;">
					<?php include "templates/partials/{$params['content']}.php"; ?>
				</div>
				<div class="col-xs-12 col-sm-4" style="min-height:200px;text-align:center;">
					<?php include 'templates/partials/aside.php';?>
				</div>
			</div>
		</div>
	</body>
</html>