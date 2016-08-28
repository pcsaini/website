<!-- Section -->
<?php if($mainvalue["data"]){

    $galleryList=$mainvalue["data"];
    foreach($galleryList as $key => $val){
        $gallery[$val['group_name']] = explode(',',$val['gallery_picture']);
    }
} ?>
<?php if($mainvalue["data"])
{
?>
<section id="<?php echo $mainvalue["href"];?>" class="section">
  <div class="container">
    
    <!-- Title -->
    <div class="title large">
      <span>0<?php echo $n;?></span>
      <h1 class="uppercase"><?php echo $mainvalue["sname"];?></h1>
    </div>
    <!-- End Title -->
    <?php 
          if(trim($mainvalue["tagline"]))
          {
          ?>
          <div class="c-12 tag_line"><span><?php echo $mainvalue["tagline"]; ?></span></div>
        <?php }?>
    <div>
      <ul id="tabs">
        <?php $i=1;foreach($gallery as $key=> $val)
          { ?>
          <li><a class="btn medium" href="#tab-<?php echo $i ?>"><?php echo $key; ?></a></li>
          <?php $i++;}
          ?>
      </ul>
    <div class="row">
    <?php $i=1;
      foreach($gallery as $key=> $val){
    ?>
    <div id="tab-<?php echo $i; ?>" class="tab-section">
      <!-- Gallery -->
      <div class="grid">
        <?php foreach($gallery[$key] as $v){
        ?>
        <!-- Gallery Item -->
        <div class="grid-item">
          <a href="http://www.hubilo.com/eventApp/ws/images/event_gallery/<?php echo $v ?>" title="" data-ngthumb="<?php echo $v ?>" title="Image caption here">
            <i class="caption-zoom icon-magnifying-glass"></i>
            <img class="image-responsive" src="http://www.hubilo.com/eventApp/ws/images/event_gallery//<?php echo $v ?>" alt="">
          </a>
        </div>
        <!-- End Gallery Item -->
        <?php } ?>
      </div>
      <!-- End Gallery -->
      </div>
      <?php $i++; } ?>
    </div>
    </div>
  </div>
</section>
<!-- End Section -->
<?php }?>
