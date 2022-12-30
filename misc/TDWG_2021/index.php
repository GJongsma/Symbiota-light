<?php
include_once('../../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
	<head>
		<title>TDWG 2021 Gabon Biodiversity Poster</title>
		<?php
		$activateJQuery = false;
		include_once($SERVER_ROOT.'/includes/head.php');
		?>
		<style type="text/css">
			#page-title{ font-weight:bold; font-size:125%; margin-bottom:20px; }
		</style>
	</head>
	<body>
		<?php
		$displayLeftMenu = true;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
			<a href="<?php echo $CLIENT_ROOT; ?>/index.php">Home</a> &gt;&gt;
			<b>TDWG-2021 Gabon Biodiversity Poster</b>
		</div>
		<!-- This is inner text! -->
		<div id="innertext">
			<?php
			if($LANG_TAG=='fr'){
				?>
				<div id="page-title">Création d'une base de données nationale sur la biodiversité au Gabon et les défis de la mobilisation des données d'histoire naturelle pour les pays francophones</div>
				<?php
			}
			elseif($LANG_TAG=='es'){
				?>
				<div id="page-title">Creación de una base de datos nacional sobre biodiversidad en Gabón y los desafíos de movilizar datos de historia natural para países francófonos</div>
				<?php
			}
			else{
				?>
				<div id="page-title">Creating a National Biodiversity Database in Gabon and the Challenges of Mobilizing Natural History Data for Francophone Countries</div>
				<?php
			}
			?>
			<div style="">
				Tobi E, Aymar Nziengui Djiembi G, Feistner AT, Midoko Iponga D, Liwouwou JF, Mabala C, Mavoungou J, Moussavou G, Omouendze LP, Gilbert E, Jongsma GF (2021)
				Creating a National Biodiversity Database in Gabon and the Challenges of Mobilizing Natural History Data for Francophone Countries.
				Biodiversity Information Science and Standards 5: e75643. <a href="https://doi.org/10.3897/biss.5.75643" target="_blank">https://doi.org/10.3897/biss.5.75643</a>
			</div>
			<div style="margin-top:30px">
				<iframe src="PS_75643_TOBI.pdf" width="100%" height="500px"></iframe>
			</div>
			<div style="margin-top:20px">
				<div style="float:left;width:50%">
					<div style="width: 330px; margin-left: auto; margin-right: auto;">
						<video width="320" height="240" controls>
							<source src="TDWG_FR.mp4" type="video/mp4" />
							Your browser does not support the video tag.
						</video>
						<div style="font-weight: bold; text-align:center; margin-bottom:10px;">En Français</div>
					</div>
				</div>
				<div style="float:left;width:50%">
					<div style="width: 330px; margin-left: auto; margin-right: auto;">
						<video width="320" height="240" controls>
							<source src="TDWG_EN.mp4" type="video/mp4" />
							Your browser does not support the video tag.
						</video>
						<div style="font-weight: bold; text-align:center; margin-bottom:10px;">In English</div>
					</div>
				</div>
			</div>
			<div style="clear:both"><hr style="margin: 20px 0px" /></div>
			<div style="margin-top:20px">
				<?php
				if($LANG_TAG=='fr'){
					?>
					<h2>Démonstration de cartographie d'occurrence</h2>
					<div style="margin:10px 0px">
						La vidéo suivante présente une brève démonstration de la façon dont les occurrences peuvent être visualisées dans une interface de cartographie dynamique.
					</div>
					<?php
				}
				elseif($LANG_TAG=='es'){
					?>
					<h2>Demostración de mapeo de ocurrencia</h2>
					<div style="margin:10px 0px">
						El siguiente video presenta una breve demostración de cómo las ocurrencias se pueden visualizar dentro de una interfaz de mapeo dinámico.
					</div>
					<?php
				}
				else{
					?>
					<h2>Occurrence Mapping Demonstration</h2>
					<div style="margin:10px 0px">
						Following video presents a brief demostration of how occurrences can be visualized within a dynamic mapping interface.
					</div>
					<?php
				}
				?>
				<video controls="controls" width="100%" height="600" name="Occurrence Mapping Demostration">
					<source src="mapping_video.mov" />
					Your browser does not support the video tag.
				</video>
			</div>
		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>
