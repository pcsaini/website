<!-- Gallery Section   -->
<?php if($mainvalue["data"]){

    $galleryList=$mainvalue["data"];
    foreach($galleryList as $key => $val){
        $gallery[$val['group_name']] = explode(',',$val['gallery_picture']);
    }
} ?>
<?php if($mainvalue["data"])
{
?>
<div id="section-<?php echo $mainvalue["href"];?>" class="section-gallery">
    <div class="container">
        <div class="row">
            <h2>
                <?php echo $mainvalue["sname"];?>
            </h2>
            <?php 
                    if(trim($mainvalue["tagline"]))
                    {
                    ?>
                        <div class="col-lg-12 tag_line"><h3 style="float:left"><?php echo $mainvalue["tagline"];?></h3></div>
                    <?php
                }
                ?>
                <!-- ISO section -->
                <div class="iso-section">
                    <ul class="filter-wrapper clearfix">
                        <?php $i=1;foreach($gallery as $key=> $val)
                        { ?>
                        <li><a href="#" class="opc-main-bg btn-style-1" data-filter=".tab<?php echo $i?>"><?php echo $key ?></a></li>
                        <?php $i++;}
                        ?>
                    </ul>
                    <?php $i=1;
                    foreach($gallery as $key=> $val){
                    ?>

                    <div class="iso-box-section wow fadeIn" data-wow-delay="0.1s">
                        <div class="iso-box-wrapper col4-iso-box">
                            <?php foreach($gallery[$key] as $v){
                            ?>
                            <div class="iso-box tab<?php echo $i?> col-lg-3 col-md-3 col-sm-4 galleryImage" >
                            <div class="ih-item square effect6">
                                <a href="http://www.hubilo.com/eventApp/ws/images/event_gallery/<?php echo $v ?>" title="" data-ngthumb="<?php echo $v ?>" data-lightbox-gallery="portfolio-gallery">
                                   <div class="img"> <img src="http://www.hubilo.com/eventApp/ws/images/event_gallery//<?php echo $v ?>" alt="-"></div>
                                    <div class="info">
                                        <p style="margin-top: 30px !important;"><i class="fa fa-search-plus" style="color: white;border: 1px solid;padding: 5px;border-radius: 5px;"></i></p>
                                    </div>
                                </a></div>

                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php $i++; } ?>

                </div>
            </div>
            <?php include('templates/customButton.php'); ?>
        </div>
</div>
<?php } ?>
<!-- Gallery Section   -->