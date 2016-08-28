<?php if($mainvalue["data"]) {
  $list = $mainvalue["data"]; 
?>
<!-- Section -->
<section id="<?php echo $mainvalue["href"];?>" class="section">
  <div class="container">
    
    <!-- Title -->
    <div class="title large">
      <span>0<?php echo $n;?></span>
      <h1 class="uppercase"><?php echo $mainvalue["sname"];?></h1>
      <p class="subtitle"></p>
    </div>
    <!-- End Title -->
    <?php 
      if(trim($mainvalue["tagline"]))
      {
      ?>
      <div class="c-12 tag_line"><span><?php echo $mainvalue["tagline"]; ?></span></div>
    <?php }?>
  <div class="row">
    <?php $i=0;foreach($list as $key => $value){  ?>
    <!-- Sponsor -->
    <div class="c-4 sponsor">
      <div class="align-center image-container">
      <a href="#exhibitor-modal-<?php echo $i; ?>" data-toggle="modal">
        <img src="<?php echo $path.'images/exhibitor/logo/thumb/'.$value['exhibitor_logo_img']; ?>" alt=""></a>
      </div>
    </div>
    <!-- End Sponsor -->
    <?php include('templates/exhibitor_modal.php'); ?>
    <?php $i++; } ?>

    

  </div>
  <?php include('templates/customButton.php'); ?>
  </div>
</section>
<!-- End Section -->
<?php }?>