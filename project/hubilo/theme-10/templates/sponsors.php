<?php
if($mainvalue["data"]) {
$list = $mainvalue["data"];
?>
<!-- Sponsor Logo -->
        <div id="<?php echo $mainvalue["href"];?>" class="section dark">
            <!-- Background Image -->
            
            <div class="container">
            
                <div class="title large dark">
                  <span>0<?php echo $n;?></span>
                  <h1 class="uppercase"><?php echo $mainvalue["sname"];?></h1>
                  <p class="subtitle"></p>
                </div>
                <!-- Section Title -->
                <?php 
                    if(trim($mainvalue["tagline"]))
                    {
                    ?>
                    <div class="c-12 tag_line" style="color:#fff;"><span><?php echo $mainvalue["tagline"]; ?></span></div>
                <?php }?>
                
                <div class="c-12" style="padding:0 !important;">
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
                <div  style="width:<?php echo $width;?>%; margin-bottom:20px; display:inline-block; padding:0 !important;text-align:center" class="c-12">
                <h3 class="align-center" style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden; color:#fff;"><?php echo $value[0]['sponsor_assigned_sponsor_title']; ?></h3>
                
                    <div class="sponsor-container-inner c-12" style="padding:0 !important;">
                        <?php $i=0;
                         foreach($value as $k => $v)
                        { 
                            include('templates/sponsor_modal.php'); 
                        ?>
                        <div class="sponsor-category-container-inner" style="width:<?php echo $img;?>%;"><div class="slide-contents sponsor-img-container"><a href="#sponsors-modal-<?php echo $j.''.$i;?>" data-toggle="modal"><img src="<?php echo $path . 'images/sponsor/logo/thumb/' . $v["sponsor_logo_img"]; ?>" alt=""></a></div></div>
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