<?php
include_once('config/symbini.php');
include_once('content/lang/index.'.$LANG_TAG.'.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	$activateJQuery = true;
	include_once($SERVER_ROOT.'/includes/head.php');
	include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<link href="css/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<script src="<?PHP echo $CLIENT_ROOT; ?>/js/jquery.slides.js"></script>
	<style>
		#slideshowcontainer{ margin-left:auto; margin-right: auto; }
	</style>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
	<!-- This is inner text! -->
	<div  id="innertext">
		<div style="float:right;width:400px;margin-left:20px">
			<div id="quicksearchdiv">
				<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
				<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
					<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Search Taxon'); ?></div>
					<input id="taxa" type="text" name="taxon" />
					<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
				</form>
			</div>
			<div>
				<?php
				//---------------------------SLIDESHOW SETTINGS---------------------------------------
				//If more than one slideshow will be active, assign unique numerical ids for each slideshow.
				//If only one slideshow will be active, leave set to 1.
				$ssId = 1;
				//Enter number of images to be included in slideshow (minimum 5, maximum 10)
				$numSlides = 10;
				//Enter width of slideshow window (in pixels, minimum 275, maximum 800)
				$width = 350;
				//Enter amount of days between image refreshes of images
				$dayInterval = 7;
				//Enter amount of time (in milliseconds) between rotation of images
				$interval = 7000;
				//Enter checklist id, if you wish for images to be pulled from a checklist,
				//leave as 0 if you do not wish for images to come from a checklist
				//if you would like to use more than one checklist, separate their ids with a comma ex. "1,2,3,4"
				$clId = "2";
				//Enter field, specimen, or both to specify whether to use only field or specimen images, or both
				$imageType = "both";
				//Enter number of days of most recent images that should be included
				$numDays = 30;
				//---------------------------DO NOT CHANGE BELOW HERE-----------------------------
				ini_set('max_execution_time', 120);
				include_once($SERVER_ROOT.'/classes/PluginsManager.php');
				$pluginManager = new PluginsManager();
				echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clId,$dayInterval,$interval);
				?>
			</div>
		</div>
		<?php
		if($LANG_TAG=='fr'){
			?>
			<h1>Bienvenue sur le Portail de la Biodiversité du Gabon</h1>
			<div style="padding: 0px 10px;font-size:130%">
				<p>
					Ce portail de données est destiné à servir de ressource collaborative qui intègre le contenu de la biodiversité provenant de diverses sources.
					Le portail peut être utilisé pour gérer les données en direct directement dans le portail ou mapper vers des ensembles de données gérés dans
					des systèmes de gestion externes. Le type de données disponibles dans cette ressource comprend des données sur les spécimens,
					des observations sur le terrain, des inventaires d'espèces, des images de terrain, des informations taxonomiques, des données sur la répartition des espèces, etc.
				</p>
				<p>
					Avez-vous ou connaissez-vous un jeu de données sur la biodiversité compilé de la région du Gabon que vous aimeriez publier sur le portail?
					Si tel est le cas, veuillez nous contacter et nous nous ferons un plaisir de vous aider à vous configurer en tant que contributeur de données.
					Grâce à un effort de collaboration, ce portail de données Symbiota peut devenir une ressource riche en informations qui aidera les chercheurs,
					les éducateurs et le grand public à explorer la flore et la faune du Gabon.
				</p>
				<p>
					Si vous avez des questions, des commentaires ou des recommandations, veuillez partager vos commentaires avec le
					<a class="bodylink" href="mailto:symbiota@asu.edu?subject=Gabon Portal Feedback">Support Hub HelpDesk (symbiota@asu.edu)</a>.
					Visitez la <a href="misc/usagepolicy.php">page politique d'utilisation des données</a> pour savoir comment citer les données obtenues à partir de cette ressource Web.
				</p>
			</div>
			<?php
		}
		elseif($LANG_TAG=='es'){
			?>
			<h1>Bienvenido al Portal de Biodiversidad de la Comunidad de Gabón</h1>
			<div style="padding: 0px 10px;font-size:130%">
				<p>
					Este portal de datos está destinado a servir como un recurso colaborativo que integra contenido de biodiversidad de diversas fuentes.
					El portal se puede utilizar para administrar datos en vivo directamente dentro del portal, o mapear conjuntos de datos administrados en
					sistemas de manejo externos. El tipo de datos disponibles dentro de este recurso incluye datos de especímenes, observaciones de campo,
					inventarios de especies, imágenes de campo, información taxonómica, datos de distribución de especies y más.
				</p>
				<p>
					¿Tiene o conoce un conjunto de datos de biodiversidad de la región de Gabón que le gustaría publicar en el portal?
					Si es así, comuníquese con nosotros y con gusto lo ayudaremos a establecerse como proveedor de datos.
					A través de un esfuerzo colaborativo, este portal de datos Symbiota puede convertirse en un recurso rico en información que ayudará a los investigadores,
					educadores, y al público en general, a explorar la flora y la fauna que se encuentran en Gabón.
				</p>
				<p>
					Si tiene preguntas, comentarios o recomendaciones, comparta sus comentarios con
					<a class="bodylink" href="mailto:symbiota@asu.edu?subject=Gabon Portal Feedback">Support Hub HelpDesk (symbiota@asu.edu)</a>.
					Visite la <a href="misc/usagepolicy.php">página de Política de Uso de Datos</a> para obtener información acerca de cómo citar los datos obtenidos de este recurso web.
				</p>
			</div>
			<?php
		}
		else{
			?>
			<h1>Welcome to the Gabon Community Biodiversity Portal</h1>
			<div style="padding: 0px 10px;font-size:130%">
				<p>
					This data portal is meant to serve as a collaborative resource that integrates
					biodiversity content from various sources. The portal can be used to manage live data directly within the portal or map to datasets
					managed within external management systems. Type of data available within this resource includes specimen data, field observations,
					species inventories, field images, taxonomic information, species distribution data, and more.
				</p>
				<p>
					Do you have or know of a biodiversity dataset compiled from the Gabon region that you would like to publish on the portal? If so,
					please contact us and we will gladly assist in getting you setup as a data contributor. Through a collaborative effort, this Symbiota
					data portal can become an information rich resource that will assist researchers, educators, and the general public in exploring the
					flora and fauna found within Gabon.
				</p>
				<p>
					If you have questions, comments, or recommendations, please share your feedback with the
					<a class="bodylink" href="mailto:symbiota@asu.edu?subject=Gabon Portal Feedback">Support Hub HelpDesk (symbiota@asu.edu)</a>.
					Visit the <a href="misc/usagepolicy.php">Data Usage Policy</a> page for information on how to cite data obtained from this web resource.
				</p>
			</div>
			<div>
				<a href="https://biokic.asu.edu/" ><img src="<?php echo $CLIENT_ROOT; ?>/images/ASU_logo.png" style="height:50px" /></a>
				<img src="<?php echo $CLIENT_ROOT; ?>/images/ENEF_logo.jpeg" style="height:50px" />
				<a href="https://www.floridamuseum.ufl.edu/nhdept/" ><img src="<?php echo $CLIENT_ROOT; ?>/images/ASU_logo.png" style="height:50px" /></a>
				<a href="https://www.gbif.org/" ><img src="<?php echo $CLIENT_ROOT; ?>/images/GBIF_logo.png" style="height:50px" /></a>
				<img src="<?php echo $CLIENT_ROOT; ?>/images/IRET_logo.jpg" style="height:50px" />
				<a href="https://www.gbif.org/" ><img src="<?php echo $CLIENT_ROOT; ?>/images/GBIF_logo.png" style="height:50px" /></a>
				<a href="https://nationalzoo.si.edu/ccs/gabon-program" ><img src="<?php echo $CLIENT_ROOT; ?>/images/Smithsonian_logo.jpg" style="height:50px" /></a>
				<a href="https://www.nature.org/en-us/about-us/where-we-work/africa/gabon/" ><img src="<?php echo $CLIENT_ROOT; ?>/images/TNC_logo.png" style="height:50px" /></a>
				<a href="https://univ-masuku.org/" ><img src="<?php echo $CLIENT_ROOT; ?>/images/USTM_logo.png" style="height:50px" /></a>
			<?php
		}
		?>
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>
