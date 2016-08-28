<?php if($mainvalue["data"]){

    $galleryList=$mainvalue["data"];
    foreach($galleryList as $key => $val){
        $gallery[$val['group_name']] = explode(',',$val['gallery_picture']);
    }
} ?>
<?php if($mainvalue["data"])
{
?>
<!-- BOF PROTFOLIO -->
        <div id="<?php echo $mainvalue["href"];?>" class="jx-container jx-padding jx-white-bg">
        
            <div class="container container-margin">
                
                <div class="jx-section-title-1">
                    <div class="jx-pre-title jx-short-border">
                        <div class="jx-title-border left"></div>
                        <div class="jx-title-icon"><i class="line-icon icon-camera"></i></div>
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

                <div class="container"> 
                <div>
                    <ul id="tabs">
                     <?php $i=1;foreach($gallery as $key=> $val)
                        { ?>
                        <li class="jx-btn-center active"><a class="jx-btn-default jx-outline" href="#tab<?php echo $i ?>"><?php echo $key ?></a></li>
                        <?php $i++;}
                        ?>
                    </ul>
                       
                    <div class="jx-protfolio">
                    <?php $i=1;
                    foreach($gallery as $key=> $val){
                    ?>

                        <div id="tab<?php echo $i ?>" class="tab-section">
                            <div class="container">
                            <div class="row"><div class="col-lg-12">
                            <?php foreach($gallery[$key] as $v){
                            ?>
                            
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="padding:10px !important;">
                                <div class="ih-item square effect12 jx-image-wrapper">
                                    <a href="http://www.hubilo.com/eventApp/ws/images/event_gallery/<?php echo $v ?>" title="" data-ngthumb="<?php echo $v ?>" data-rel="prettyPhoto">
                                       <div class="img"> <img src="http://www.hubilo.com/eventApp/ws/images/event_gallery//<?php echo $v ?>" alt="-"></div>
                                        <div class="info"><div class="jx-image-overlayer"></div>
                                            <p style="margin-top: 50px !important;"><i class="fa fa-expand fa-2x" style="color: white;border: 1px solid;padding: 5px;border-radius: 5px;"></i></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?></div></div></div>
                        </div>
                        <?php $i++; } ?>
                    </div>
                    </div>
                </div>
                <?php include('templates/customButton.php'); ?>
                <div class="row"></div>
                <div class="row"></div>
            </div>        
        </div>
        <!-- EOF PROTFOLO -->
<?php }?>