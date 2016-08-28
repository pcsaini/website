<!-- Google Map -->
<?php
if($mainvalue)
{
    $list=$mainvalue;
    $contact_count = count($list);
?>
<div id="<?php echo $mainvalue['href'];?>">
    <div class="" style="z-index:-1;">
        <div class="container">
        	<div class="jx-venue-box jx-default-bg">
                <h1>VENUE</h1>
                <div class="jx-venue-address">
            	   <div class="jx-venue-heading"><i class="fa fa-map-marker"></i>Address</div>
            	   <div class="jx-address-1"><?php echo $location['address'] ?></div>
                </div>
            </div>
            <?php 
                if(trim($mainvalue["tagline"]))
                {
                ?>
                    <div class="col-lg-12 tag_line"><h3><?php echo $mainvalue["tagline"];?></h3></div>
                <?php
            }
            ?>
        </div>
        <div class="jx-google-map">
            <div id="map" class="jx-map"></div>
        </div>
        <?php 
        include('templates/customButton.php');
        ?>
    </div>
</div>        <!-- EOF Google Map -->
<?php }?>