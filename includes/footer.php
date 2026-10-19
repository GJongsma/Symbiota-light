<footer>
	<p>
                <?= $LANG['F_FUNDING_PROVIDED_BY'] ?>
        </p>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="https://www.gbif.org/" target="_blank" aria-label="<?= $LANG['F_GBIF_LOGO'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/logos/GBIF_logo.png" alt="<?= $LANG['F_GBIF_LOGO'] ?>" />
		</a>
		<a href="https://www.nature.org/en-us/about-us/where-we-work/africa/gabon/" target="_blank" aria-label="<?= $LANG['F_NATURE_CONSERVE_LOGO'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/logos/TNC_logo.png" alt="<?= $LANG['F_NATURE_CONSERVE_LOGO'] ?>" />
		</a>
		<a href="https://biodiversity.ku.edu" target="_blank" title="<?= $LANG['F_KU-BI'] ?>" aria-label="<?= $LANG['F_KU-BI'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/ku-bi_logo.png"  alt="<?= $LANG['F_KU-BI_LOGO'] ?>" />
		</a>
	</div>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
