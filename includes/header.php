<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/header.en.php');
else include_once($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php');
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<nav class="top-login">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<span class="button button-secondary">
						<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout"><?php echo (isset($LANG['H_LOGOUT'])?$LANG['H_LOGOUT']:'Logout')?></a>
					</span>
					<span class="button button-tertiary">
						<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php"><?php echo (isset($LANG['H_MY_PROFILE'])?$LANG['H_MY_PROFILE']:'My Profile')?></a>
					</span>
					<span style="">
						<?php echo (isset($LANG['H_WELCOME'])?$LANG['H_WELCOME']:'Welcome').' '.$USER_DISPLAY_NAME; ?>
					</span>
					<?php
				}
				else {
					?>
					<span class="button button-secondary">
						<a href="<?php echo $CLIENT_ROOT . '/profile/index.php?refurl=' . $_SERVER['SCRIPT_NAME'] . '?' . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							<?php echo (isset($LANG['H_LOGIN'])?$LANG['H_LOGIN']:'Login')?>
						</a>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<a href="https://www.nbm-mnb.ca/natural-sciences/" target="_blank">
					<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/NBM_White-325.png" alt="New Brunswick logo" width="100%">
				</a>
				<div class="brand-name">
					<h1></h1>
					<h2></h2>
				</div>
			</div>
			<div></div>
			<div style="text-align: right; margin-right:5px;">
				<select onchange="setLanguage(this)">
					<option value="en">English</option>
					<option value="fr" <?php echo ($LANG_TAG=='fr'?'SELECTED':''); ?>>Français</option>
				</select>
			</div>
		</div>
		<div class="menu-wrapper">
			<!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" />
			<label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
			<!-- Menu -->
			<nav class="top-menu">
				<ul class="menu">
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php">
							<?php echo (isset($LANG['H_HOME'])?$LANG['H_HOME']:'Home'); ?>
						</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php">
							<?php echo (isset($LANG['H_SEARCH_COLLECTIONS'])?$LANG['H_SEARCH_COLLECTIONS']:'Search Collections'); ?>
						</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank" rel="noopener noreferrer">
							<?php echo (isset($LANG['H_MAP_SEARCH'])?$LANG['H_MAP_SEARCH']:'Map Search'); ?>
						</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/checklists/index.php">
							<?php echo (isset($LANG['H_INVENTORIES'])?$LANG['H_INVENTORIES']:'Checklists'); ?>
						</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php">
							<?php echo (isset($LANG['H_IMAGE_SEARCH'])?$LANG['H_IMAGE_SEARCH']:'Search Images'); ?>
						</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/includes/usagepolicy.php">
							<?php echo (isset($LANG['H_DATA_USAGE'])?$LANG['H_DATA_USAGE']:'Data Use'); ?>
						</a>
					</li>
					<li>
						<a href="https://symbiota.org/docs" target="_blank" rel="noopener noreferrer">
							<?php echo (isset($LANG['H_HELP'])?$LANG['H_HELP']:'Help'); ?>
						</a>
					</li>
					<li>
						<a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php'>
							<?php echo (isset($LANG['H_SITEMAP'])?$LANG['H_SITEMAP']:'Sitemap'); ?>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
</div>