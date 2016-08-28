
<!-- About Section -->

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
      <div class="c-12">
          <?php echo $event_details['event_description']; ?>

        <?php include('templates/customButton.php'); ?>
      </div>

    </div>
    
  </div>

</section>
<!-- /About Section -->
<script type="text/javascript">
document.getElementById("about-tagline").innerHTML = "<?php echo $mainvalue['tagline'] ?>";
</script>

    <?php include_once('templates/event-highlights.php');?>

