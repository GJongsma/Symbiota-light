    	</td>
	</tr>
	<tr>
		<td id="footer"  colspan="3">
			<div style="text-align:center;margin-top:15px">
			<?php
				if($LANG_TAG=='en'){
			?>
				<b>Funding for this project generously provided by the following organizations:</b>
			<?php
				} else if($LANG_TAG=='es'){
			?>
				<b>Financiamiento para este proyecto proporcionado generosamente por las siguientes organizaciones:</b>
			<?php
			} else{
			?>
				<b>Financement de ce projet généreusement assuré par les organismes suivants:</b>
			<?php
				}
			?>
			</div>
			<p>
				<a href="https://www.gbif.org/" target="_blank"><img src="<?php echo $CLIENT_ROOT; ?>/images/logos/GBIF_logo.png" style="height:50px; padding: 10px" /></a>
				<a href="https://www.nature.org/en-us/about-us/where-we-work/africa/gabon/" target="_blank"><img src="<?php echo $CLIENT_ROOT; ?>/images/logos/TNC_logo.png" style="width:150px; padding: 10px" /></a>
				<a href="https://biokic.asu.edu" target="_blank" title="Biodiversity Knowledge Integration Center"><img src="<?php echo $CLIENT_ROOT; ?>/images/layout/logo-asu-biokic.png" style="width:150px; padding: 10 px" /></a>
				<span style="margin-left: 600px">&nbsp;</span>
			</p>
 		</td>
	</tr>
</table>
