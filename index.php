<?php
include_once('config/symbini.php');
include_once('content/lang/index.' . $LANG_TAG . '.php');
header("Content-Type: text/html; charset=" . $CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
	<script src="<?php echo $CLIENT_ROOT; ?>/js/symb/lang.js" type="text/javascript"></script>
	<style type="text/css">
		.headline{ text-align: center; line-height: 1.4em; }
	</style>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div id="hero-area" style="background-image:url(https://www.nbm-mnb.ca/wp-content/uploads/2021/06/Natural-History-Banner.png);">
	</div>
	<div class="navpath"></div>
	<div id="innertext">
		<div class="lang en">
			<h1 class="headline">Natural Sciences</h1>
			<p>The scientific collections of the New Brunswick Museum are the result of more than a century and a half of collection and study.
			From our beginning in 1842 as Gesner’s Museum of Natural History the collections have grown from 2,173 items listed in Gesner's catalogue to more than
			300,000 natural history specimens.</p>
		</div>
		<div class="lang fr">
			<h1 class="headline">Les sciences</h1>
			<p>Les collections de recherche scientifiques du Musée du Nouveau-Brunswick sont le résultat d’un travail s’échelonnant sur plus d’un siècle et demi.
			Depuis ses débuts en 1842, comme Musée Gesner, les collections sont passées de 2 173 objets énumérés dans le catalogue Gesner à plus de 300 000 spécimens aujourd'hui.</p>
		</div>
	</div>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
	<script type="text/javascript">
		//Uncomment setLanguageDiv() to support toggling of language content containing DIVs with lang classes in form of:
		// <div class="lang en">Content in English</div><div class="lang es">Content in Spanish</div>
		setLanguageDiv();
	</script>
</body>
</html>
