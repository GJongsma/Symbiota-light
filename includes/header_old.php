<?php
if($LANG_TAG == 'fr' || !file_exists($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/header.fr.php');
else include_once($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php');
?>
<table id="maintable" cellspacing="0">
	<tr>
		<td id="header" colspan="3">
			<div style="background-color:black;height:150px;">
				<div style="float:right;">
					<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/GabonHeader.jpg" style="height:150px;" />
				</div>
				<div style="margin-left: 50px; color: #fff; font-family: 'Mate', serif; letter-spacing: 1px; text-shadow: 0 0 7px rgba(0,0,0,0.5);">
					<div style="padding-top:45px; font-size:55px; line-height:48px;">
						Biodiversité du Gabon
					</div>
				</div>
			</div>
			<div id="top_navbar">
				<div id="right_navbarlinks">
					<?php
					if($USER_DISPLAY_NAME){
						?>
						<span style="">
							<?php echo (isset($LANG['H_WELCOME'])?$LANG['H_WELCOME']:'Welcome').' '.$USER_DISPLAY_NAME; ?>!
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php"><?php echo (isset($LANG['H_MY_PROFILE'])?$LANG['H_MY_PROFILE']:'My Profile')?></a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout"><?php echo (isset($LANG['H_LOGOUT'])?$LANG['H_LOGOUT']:'Logout')?></a>
						</span>
						<?php
					}
					else{
						?>
						<span style="">
							<a href="<?php echo $CLIENT_ROOT.'/profile/index.php?refurl='.$_SERVER['SCRIPT_NAME'].'?'.htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>"><?php echo (isset($LANG['H_LOGIN'])?$LANG['H_LOGIN']:'Login')?></a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php"><?php echo (isset($LANG['H_NEW_ACCOUNT'])?$LANG['H_NEW_ACCOUNT']:'New Account')?></a>
						</span>
						<?php
					}
					?>
					<span style="margin-left:5px;margin-right:5px;">
						<select onchange="setLanguage(this)">
							<option value="en">English</option>
							<option value="es" <?php echo ($LANG_TAG=='es'?'SELECTED':''); ?>>Espa&ntilde;ol</option>
							<option value="fr" <?php echo ($LANG_TAG=='fr'?'SELECTED':''); ?>>Français</option>
						</select>
						<?php
						//if($IS_ADMIN) echo '<a href="'.$CLIENT_ROOT.'/content/lang/admin/langmanager.php?refurl='.$_SERVER['SCRIPT_NAME'].'"><img src="'.$CLIENT_ROOT.'/images/edit.png" style="width:12px" /></a>';
						?>
					</span>
				</div>
				<ul id="hor_dropdown">
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php"><?php echo (isset($LANG['H_HOME'])?$LANG['H_HOME']:'Home'); ?></a>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_SEARCH'])?$LANG['H_SEARCH']:'Search'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php"><?php echo (isset($LANG['H_COLLECTIONS'])?$LANG['H_COLLECTIONS']:'Collections'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank"><?php echo (isset($LANG['H_MAP'])?$LANG['H_MAP']:'Map'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" ><?php echo (isset($LANG['H_DYN_LISTS'])?$LANG['H_DYN_LISTS']:'Dynamic Species List'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php" ><?php echo (isset($LANG['H_TAXONOMIC_EXPLORER'])?$LANG['H_TAXONOMIC_EXPLORER']:'Taxonomic Explorer'); ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" ><?php echo $LANG['H_IMAGES']; ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php"><?php echo (isset($LANG['H_IMAGE_BROWSER'])?$LANG['H_IMAGE_BROWSER']:'Image Browser'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php"><?php echo (isset($LANG['H_IMAGE_SEARCH'])?$LANG['H_IMAGE_SEARCH']:'Search Images'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/contributors.php"><?php echo (isset($LANG['H_PHOTO_CONT'])?$LANG['H_PHOTO_CONT']:"Contributeurs d'Images"); ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php"><?php echo (isset($LANG['H_INVENTORIES'])?$LANG['H_INVENTORIES']:'Inventaires'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=3"><?php echo (isset($LANG['H_HERPS'])?$LANG['H_HERPS']:'Amphibians & Reptiles'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=9"><?php echo (isset($LANG['H_POISSON'])?$LANG['H_POISSON']:'Poisson (Fish)'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=1"><?php echo (isset($LANG['H_ANIMALIA'])?$LANG['H_ANIMALIA']:'Animalia'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=2"><?php echo (isset($LANG['H_PLANTS'])?$LANG['H_PLANTS']:'Plants'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=6"><?php echo 'CITES'; ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_DYN_LISTS'])?$LANG['H_DYN_LISTS']:'Dynamic Species List'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Amphibia" ><?php echo (isset($LANG['H_AMPHIBIA'])?$LANG['H_AMPHIBIA']:'Amphibians'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Arthropoda" ><?php echo (isset($LANG['H_ARTHROPODA'])?$LANG['H_ARTHROPODA']:'Arthropods'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Mammalia" ><?php echo (isset($LANG['H_MAMMALIA'])?$LANG['H_MAMMALIA']:'Mammals'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Aves" ><?php echo (isset($LANG['H_AVES'])?$LANG['H_AVES']:'Birds'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Plantae" ><?php echo (isset($LANG['H_PLANTA'])?$LANG['H_PLANTA']:'Plants'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Actinopterygii" ><?php echo (isset($LANG['H_FISH'])?$LANG['H_FISH']:'Fish'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Reptilia" ><?php echo (isset($LANG['H_REPTILIA'])?$LANG['H_REPTILIA']:'Reptiles'); ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_MORE_INFO'])?$LANG['H_MORE_INFO']:'Additional Info'); ?></a>
						<ul>
							<!--
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/misc/aboutproject.php" ><?php echo (isset($LANG['H_ABOUT_PROJECT'])?$LANG['H_ABOUT_PROJECT']:'About Project'); ?></a>
							</li>
							-->
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/misc/collprofiles.php" ><?php echo (isset($LANG['H_PARTNERS'])?$LANG['H_PARTNERS']:'Partners'); ?></a>
							</li>
 							<li>
								<a href="https://www.gbif.org/project/BID-AF2020-122-NAC/the-gabon-biodiversity-portal" target="_blank">GBIF BID-AF2020-122-NAC</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/misc/TDWG_2021/index.php" ><?php echo (isset($LANG['H_TDWG_POSTER'])?$LANG['H_TDWG_POSTER']:'TDWG-2021 Poster'); ?></a>
							</li>
							<!--
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/misc/contacts.php" ><?php echo (isset($LANG['H_CONTACTS'])?$LANG['H_CONTACTS']:'Contacts'); ?></a>
							</li>
							-->
							<?php
							if($LANG_TAG=='fr'){
								?>
								<li>
									<a href="https://github.com/GJongsma/Symbiota-light/blob/master/docs/SymbiotaGuide_French_v1.1.pdf" target="_blank" ><?php echo (isset($LANG['H_HELP'])?$LANG['H_HELP']:'Help'); ?></a>
								</li>
								<?php
							} else{
								?>
								<li>
								<a href="https://github.com/GJongsma/Symbiota-light/blob/master/docs/SymbiotaGuide_v5.pdf" target="_blank" ><?php echo (isset($LANG['H_HELP'])?$LANG['H_HELP']:'Help'); ?></a>
								</li>
								<?php
							}
							?>
						</ul>
					</li>
					<li>
						<a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php'><?php echo (isset($LANG['H_SITEMAP'])?$LANG['H_SITEMAP']:'Sitemap'); ?></a>
					</li>
				</ul>
			</div>
		</td>
	</tr>
	<tr>
		<td id='middlecenter'  colspan="3">
