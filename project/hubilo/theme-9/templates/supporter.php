<?php
if($mainvalue["data"]) {
$list = $mainvalue["data"];
?>
<!-- Sponsor Logo -->
        <div id="<?php echo $mainvalue["href"];?>" class="jx-container jx-padding jx-grey-bg">
            
            <div class="container">
            
                <div class="jx-section-title-1">
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
                <div class="col-lg-12" style="padding:0 80px;">
                <?php
                $j=0;
                foreach($list as $key => $value)
                { 
                $count = count($value);
            
                if($count >= 5){
                    $width = 100;
                }
                else
                {
                        $width = 16.66*count($value);
                }
                if(isMobile()){
                            $width = 100;
                            $img = 100;
                      }
                ?> 
                <div  style="width:<?php echo $width;?>%; margin-bottom:20px; display:inline-block;" class="col-xs-12 no-padding">
                <h6 class="text-center no-padding" style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden; color:#000;"><?php echo $value[0]['supporter_assigned_supporter_title']; ?></h6>
                
                    <div class="supporter-container-inner col-xs-12 no-padding" style="padding:0 !important; text-align: center;">
                        <?php $i=0;
                         foreach($value as $k => $v)
                        { ?>
                        <div class="supporter-category-container-inner no-padding" style="width:<?php echo $img;?>%;"><div class="slide-contents supporter-img-container"><img src="<?php echo $path . 'images/supporter/logo/thumb/' . $v["supporter_logo_img"]; ?>" alt=""></div></div>
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