<?php
if($mainvalue)
{
	$list=$mainvalue;
	$contact_count = count($list);

	if($contact_count == 1){
		$map_col = 8;
	}else{
		$map_col = 12;
	}
?>

	<div class="location-section" id="section-<?php echo $mainvalue['href'];?>">
		<div class="row" style="min-height:500px;">
			<div class="col-xs-12 col-lg-<?php echo $map_col ; ?>">
				<div id="map"></div>
			</div>
		</div>
		<?php 
		include('templates/customButton.php');
		?>
	</div>
<?php
 }
 ?>
