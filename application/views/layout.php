<!DOCTYPE HTML>
<html lang="fr-BE">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Curl" >
	<title><?php echo $titre; ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo site_url() . CSS_DIR;?>/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo site_url() . CSS_DIR;?>bootstrap.min.css" />
</head>
<body>
	<div id="container" class="container">
		<header span="12">
			<h1> <a href="<?php echo site_url(); ?>">Curl</a></h1>
		</header>
		
		<section>
				<?php echo $vue; ?>
		</section>
	</div>
	
		<script src="<?php echo site_url(); ?>/web/js/vendor/modernizr-2.6.1.min.js"></script>	
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script>window.jQuery || document.write('<script src="web/js/vendor/jquery-1.8.2.js"><\/script>')</script>
		<script src="<?php echo site_url(); ?>/web/js/main.js" type="text/javascript"></script>
		<script src="<?php echo site_url(); ?>/web/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>