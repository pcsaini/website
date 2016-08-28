<?php
if($mainvalue["data"]) {
$list = $mainvalue["data"];
?>
<!-- Sponsor Logo -->
        <div id="<?php echo $mainvalue["href"];?>" class="jx-container jx-padding jx-black">
            <div class="parallax-no-height jx-tint-black"></div>
            <!-- Background Image -->
            
            <div class="container">
            
                <div class="jx-section-title-1 jx-light">
                    <div class="jx-pre-title jx-short-border">
                        <div class="jx-title-border left"></div>
                        <div class="jx-title-icon"><i class="line-icon icon-graduation-cap"></i></div>
                        <div class="jx-title-border right"></div> 
                    </div>
                    <div class="jx-title jx-uppercase"><?php echo $mainvalue["sname"];?></div>
                </div>
                <!-- Section Title -->
                
                <div class="row"></div>
                <div class="row"></div>
                <?php 
                        if(trim($mainvalue["tagline"]))
                        {
                        ?>
                            <div class="col-lg-12 tag_line"><h3><?php echo $mainvalue["tagline"];?></h3></div>
                        <?php
                    }
                    ?>
                <div class="col-lg-12">
                <?php
                $j=0;
                foreach($list as $key => $value)
                { 
                $count = count($value);
            
                if($count >= 5){
                    $width = 100;
                    $img = 25;
                }
                else
                {
                        $width = 25*count($value);
                        $img = 100/count($value);
                }
                if(isMobile()){
                            $width = 100;
                            $img = 100;
                      }
                ?> 
                <div  style="width:<?php echo $width;?>%; margin-bottom:20px; display:inline-block;" class="col-xs-12 no-padding">
                <h3 class="text-center no-padding" style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden; color:#fff;"><?php echo $value[0]['sponsor_assigned_sponsor_title']; ?></h3>
                
                    <div class="sponsor-container-inner col-xs-12 no-padding" style="padding:0 !important;">
                        <?php $i=0;
                         foreach($value as $k => $v)
                        { 
                            include('templates/sponsor_modal.php'); 
                        ?>
                        <div class="sponsor-category-container-inner no-padding" style="width:<?php echo $img;?>%;"><div class="slide-contents sponsor-img-container" href="#sponsors-modal-<?php echo $j.''.$i;?>" data-toggle="modal"><img src="<?php echo $path . 'images/sponsor/logo/thumb/' . $v["sponsor_logo_img"]; ?>" alt=""></div></div>
                        <?php $i++;
                        } ?>
                    </div>
                </div>
                
                <?php $j++;}?>
                </div>
                <?php include('templates/customButton.php'); ?>
            </div>
        </div>
        <!-- EOF Sponsor Logo -->
<?php }?>