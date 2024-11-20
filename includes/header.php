<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
$SHOULD_USE_HARVESTPARAMS = $SHOULD_USE_HARVESTPARAMS ?? false;
$collectionSearchPage = $SHOULD_USE_HARVESTPARAMS ? '/collections/index.php' : '/collections/search/index.php';
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<a class="screen-reader-only" href="#end-nav"><?= $LANG['H_SKIP_NAV'] ?></a>
			<nav class="top-login" aria-label="horizontal-nav">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<div class="welcome-text bottom-breathing-room-rel">
						<?= $LANG['H_WELCOME'] . ' ' . $USER_DISPLAY_NAME ?>!
					</div>
					<span style="white-space: nowrap;" class="button button-tertiary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/viewprofile.php"><?= $LANG['H_MY_PROFILE'] ?></a>
					</span>
					<span style="white-space: nowrap;" class="button button-secondary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout"><?= $LANG['H_LOGOUT'] ?></a>
					</span>
					<?php
				} else {
					?>
					<span class="button button-secondary">
						<a href="<?= $CLIENT_ROOT . "/profile/index.php?refurl=" . htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							<?= $LANG['H_LOGIN'] ?>
						</a>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<div class="brand-name">
					<h1><?= $LANG['BIODIVERSITY_GABON'] ?></h1>
				</div>
			</div>
		</div>
		<div class="menu-wrapper">
			<!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" name="side-menu" />
			<label class="hamb hamb-line hamb-label" for="side-menu" tabindex="0">☰</label>
			<!-- Menu -->
			<nav class="top-menu" aria-label="hamburger-nav">
				<ul class="menu">
					<li>
						<a href="<?= $CLIENT_ROOT ?>/index.php">
							<?= $LANG['H_HOME'] ?>
						</a>
					</li>
                                        <li>
                                                <a href="#"><?= $LANG['H_SEARCH'] ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>"><?= $LANG['H_COLLECTIONS'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/collections/map/index.php"><?= $LANG['H_MAP'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist"><?= $LANG['H_DYNAMIC_SPECIES_LIST'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/taxa/taxonomy/taxonomydynamicdisplay.php"><?= $LANG['H_TAXONOMIC_EXPLORER'] ?></a>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="#"><?= $LANG['H_IMAGES'] ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/imagelib/index.php"><?= $LANG['H_IMAGE_BROWSER'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/imagelib/search.php"><?= $LANG['H_IMAGE_SEARCH'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/imagelib/contributors.php"><?= $LANG['H_IMG_CONTRIBUTORS'] ?></a>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php"><?= $LANG['H_INVENTORIES'] ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=3"><?= $LANG['H_AMPHIBIANS_REPTILES'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=9"><?= $LANG['H_FISH'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=1"><?= $LANG['H_ANIMALIA'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=2"><?= $LANG['H_PLANTS'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=6"><?= $LANG['H_CITES'] ?></a>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php"><?= $LANG['H_DYNAMIC_SPP_LIST'] ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist&taxa=Amphibia"><?= $LANG['H_AMPHIBIANS'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist&taxa=Arthropoda"><?= $LANG['H_ARTHROPODS'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist&taxa=Mammalia"><?= $LANG['H_MAMMALS'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist&taxa=Aves"><?= $LANG['H_BIRDS'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist&taxa=Plantae"><?= $LANG['H_PLANTS'] ?></a>
                                                        </li>
														<li>
                                                                <a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist&taxa=Actinopterygii"><?= $LANG['H_FISH'] ?></a>
                                                        </li>
														<li>
                                                                <a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist&taxa=Reptilia"><?= $LANG['H_REPTILES'] ?></a>
                                                        </li>
                                                </ul>
                                        </li>
										<li>
                                                <a href="#"><?= $LANG['H_MORE_INFO'] ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/collections/misc/collprofiles.php"><?= $LANG['H_PARTNERS'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="https://www.gbif.org/project/BID-AF2020-122-NAC/the-gabon-biodiversity-portal" target="_blank"><?= $LANG['H_GBIF_BID'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/misc/TDWG_2021/index.php"><?= $LANG['H_TDWG_POSTER'] ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="https://github.com/GJongsma/Symbiota-light/blob/master/docs/SymbiotaGuide_v5.pdf"><?= $LANG['H_SYMBIOTA_HELP'] ?></a>
                                                        </li>
                                                </ul>
                                        </li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/includes/usagepolicy.php">
							<?= $LANG['H_DATA_USAGE'] ?>
						</a>
					</li>
					<li>
						<a href='<?= $CLIENT_ROOT ?>/sitemap.php'>
							<?= $LANG['H_SITEMAP'] ?>
						</a>
					</li>
					<li id="lang-select-li" style="margin-top:10px;">
						<label for="language-selection"><?= $LANG['H_SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':'') ?>>Español</option>
							<option value="fr" <?= ($LANG_TAG=='fr'?'SELECTED':'') ?>>Français</option>
						</select>
					</li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
