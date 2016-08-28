<?php
if($mainvalue)
{
    $list=$mainvalue;
    $contact_count = count($list);
?>
<!-- Section -->
<section id="<?php echo $mainvalue['href'];?>">

	<div class="map" id="map"></div>
	<?php include('templates/customButton.php'); ?>
</section>
<!-- End Section -->
<?php }?>