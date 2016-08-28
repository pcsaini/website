<!-- Sponsors Section   -->
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
                    <div class="col-lg-12" style="padding:0px;">
                        <?php
                        $j=0;
                        foreach($list as $key => $value)
                        {
                            $count = count($value);

                            if($count >= 4){
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
                            <div  style="width:<?php echo $width;?>%; padding:0px !important;margin-bottom:20px; display:inline-block; " class="col-xs-12">
                                <h3 class="text-center" style="padding-left: 15px;padding-right: 15px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><?php echo $value[0]['sponsor_assigned_sponsor_title']; ?></h3>
                                <ul class="partners-category-container col-xs-12">
                                    <?php $i=0;
                                    foreach($value as $k => $v)
                                    {
                                        include('templates/sponsor_modal.php');
                                        ?>
                                        <li class="partners-category-container-inner" style="width:<?php echo $img;?>%;">
                                            <div class="partners-img-container box" href="#sponsors-modal-<?php echo $j.''.$i;?>" data-toggle="modal">
                                                <img src="<?php echo $path . 'images/sponsor/logo/thumb/' . $v["sponsor_logo_img"]; ?>"/>
                                            </div>
                                        </li>
                                        <?php $i++;
                                    } ?>
                                </ul>
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