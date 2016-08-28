<!-- Supporters Section   -->
<?php
if($mainvalue["data"]) {
    $list = $mainvalue["data"];
    ?>
    <div class="partners-section" id="section-<?php echo $mainvalue["href"];?>">
        <div class="container">
            <h2><?php echo $mainvalue["sname"];?></h2>
            <?php 
                if(trim($mainvalue["tagline"]))
                {
                ?>
                    <div class="col-lg-12 tag_line"><h3 style="float:left"><?php echo $mainvalue["tagline"];?></h3></div>
                <?php
            }
            ?>
            <div class="partners-box ">
                <div class="row">
                    <div class="col-lg-12" style="padding:0px 80px;">
                        <?php
                        $j=0;
                        foreach($list as $key => $value)
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
                            <div  style="width:<?php echo $width;?>%; padding:0px !important;margin-bottom:20px; display:inline-block; " class="col-xs-12">
                                <h5 class="text-center" style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo $value[0]['supporter_assigned_supporter_title']; ?></h5>
                                <div class="supporter-category-container col-xs-12" style="text-align:center;">
                                    <?php $i=0;
                                    foreach($value as $k => $v)
                                    { ?>
                                        <div class="supporter-category-container-inner" style="width:<?php echo $img;?>%;">
                                            <div class="supporter-img-container">
                                                <img src="<?php echo $path . 'images/supporter/logo/thumb/' . $v["supporter_logo_img"]; ?>"/>
                                            </div>
                                        </div>
                                        <?php $i++;
                                    } ?>
                                </div>
                            </div>

                            <?php
                            $j++;} ?>
                    </div>
                </div>
            </div>
            <?php include('templates/customButton.php'); ?>
        </div>
    </div>
<?php } ?>
<!--/Sponsors Section-->