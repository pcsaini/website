<?php
if($mainvalue["data"]) {
$supp_list = $mainvalue["data"];
?>
<!-- Sponsor Logo -->
        <div id="<?php echo $mainvalue["href"];?>" class="section">
            <!-- Background Image -->
            
            <div class="container">
            
                <div class="title large">
                  <span></span>
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
                
                <div class="c-12" style="padding:0 80px !important;">
                <?php
                $j=0;
                foreach($supp_list as $key => $value)
                { 
                $count = count($value);
            
                if($count >= 6){
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
                <div  style="width:<?php echo $width;?>%; margin-bottom:20px; display:inline-block; padding:0 !important;text-align:center" class="c-12">
                <h6 class="align-center" style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden; color:#000;"><?php echo $value[0]['supporter_assigned_supporter_title']; ?></h6>
                
                    <div class="supporter-container-inner c-12" style="padding:0 !important;">
                        <?php $i=0;
                         foreach($value as $k => $v)
                        { ?>
                        <div class="supporter-category-container-inner" style="width:<?php echo $img;?>%;"><div class="slide-contents supporter-img-container"><a><img src="<?php echo $path . 'images/supporter/logo/thumb/' . $v["supporter_logo_img"]; ?>" alt=""></a></div></div>
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