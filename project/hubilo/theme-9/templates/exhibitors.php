<!-- Exhibitor Section -->
<?php if($mainvalue["data"]) {
    $list = $mainvalue["data"]; ?>
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

                <div class="col-lg-12 no-padding">
                    <div class="sponsor-container-inner col-xs-12 no-padding">
                        <?php $i=0;foreach($list as $key => $value){  ?>
                        <div class="sponsor-category-container-inner no-padding" style="width:100%;"><div class="slide-contents sponsor-img-container" href="#exhibitor-modal-<?php echo $i; ?>" data-toggle="modal"><img src="<?php echo $path.'images/exhibitor/logo/thumb/'.$value['exhibitor_logo_img']; ?>" alt=""></div></div>
                        <?php include('templates/exhibitor_modal.php'); ?>
                        <?php $i++;
                        } ?>
                    </div>
                </div>
            <?php include('templates/customButton.php'); ?>    
        </div>
    </div>
<?php } ?>
<!-- /Exhibitor Section -->