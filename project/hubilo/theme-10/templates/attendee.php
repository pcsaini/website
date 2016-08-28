
<!-- Attendee Section -->
<?php if($mainvalue["data"]) {
        $list = $mainvalue["data"];
       $communitySize = count($mainvalue["data"]);
       if($communitySize<8)
       {
        $attendees_span = 0;
        $text_span = 12;
      }
      else
      {
        $attendees_span = 6;
        $text_span = 6;
      }
 ?>
<section id="<?php echo $mainvalue["href"];?>" class="section dark">
  <div class="container">

    <!-- Title -->
    <div class="title large dark">
      <span>0<?php echo $n;?></span>
      <h1 class="uppercase"><?php echo $mainvalue["sname"];?></h1>
      <p class="subtitle">Grab this opportunity to discover and connect with people coming to the event, sharing similar interests, industry or organisation and stay connected with them before, during and after the event.</p>
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
          
          <div class="slider testimonials" data-items="6" data-navigation="true">
            <?php if($communitySize>=8){
              foreach($list as $key => $value)
            { ?> 
            <!-- Testimonial -->
            <div class="item">
              <!-- Media -->
              
              <div class="media">
                <img src="<?php echo $path . '/images/profile/thumb/'.$value["profile_img"]; ?>" width="150" height="150" alt="">
              
              

              <!-- User Information -->
              <div class="user-information">
                <h4 class="uppercase"><?php echo ucfirst($value["firstname"]); ?></h4>
              </div>
              <!-- End User Information -->
             </div>
             <!-- End Media -->
            </div>
            <!-- End Testimonial -->
            <?php } }?>
          </div>
        </div>
      </div>
      <div class="start-network row" style="text-align:center; margin-top:30px;">
        <a class="btn light medium" href="<?php echo $community_website ?>" target="_blank">Start Networking</a>
      </div>
    <?php include('templates/customButton.php'); ?>

  </div>
</section>  
<?php } ?>
<!-- /Attendee Section -->
