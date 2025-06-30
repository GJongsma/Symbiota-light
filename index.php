<?php
include_once('config/symbini.php');
include_once('content/lang/index.' . $LANG_TAG . '.php');
include_once('classes/CountOccurrenceRecords.php');
header("Content-Type: text/html; charset=" . $CHARSET);

$countRecords = new CountOccurrenceRecords();
?>

<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
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
	<?php
		if($LANG_TAG == 'fr'){
			?>
			<div>
			<h1 class="headline">Histoire naturelle</h1>
				<p>Les collections de recherche scientifiques du Musée du Nouveau-Brunswick sont le résultat d'un travail s'échelonnant
					sur plus d'un siècle et demi. Depuis ses débuts en 1842, comme Musée Gesner, les collections sont passées de 2 173
					objets énumérés dans le catalogue Gesner à plus de 300 000 spécimens aujourd'hui.</p>
		</div>
		<div style="width:400px;border: 15px solid #236192;padding:30px;margin:20px auto;">
			Ce portail comprend actuellement:
			<li>
				<b><?= number_format($countRecords->countPlants()) ?></b> enregistrements de plantes
			</li>
			<li>
				<b><?= number_format($countRecords->countAnimals()) ?></b> enregistrements d'animaux
			</li>
			<li>
				<b><?= number_format($countRecords->countFungi()) ?></b> enregistrements de champignons
			</li>
		</div>
			<?php
		}
		else{
			//Default Language
			?>
		<div class="lang en">
			<h1 class="headline">Natural History</h1>
			<p>The scientific collections of the New Brunswick Museum are the result of more than a century and a half of collection and study.
			From our beginning in 1842 as Gesner's Museum of Natural History the collections have grown from 2,173 items listed in Gesner's catalogue to more than
			300,000 natural history specimens.</p>
		</div>
		<div style="width:400px;border: 15px solid #236192;padding:30px;margin:20px auto;">
			This portal currently includes:
			<li>
				<b><?= number_format($countRecords->countPlants()) ?></b> records of plants
			</li>
			<li>
				<b><?= number_format($countRecords->countAnimals()) ?></b> records of animals
			</li>
			<li>
				<b><?= number_format($countRecords->countFungi()) ?></b> records of fungi
			</li>
		</div>
		<?php
		}
		?>
	</div>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
	<script type="text/javascript">
		setLanguageDiv();
	</script>
</body>
</html>
