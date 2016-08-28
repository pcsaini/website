<!-- <section class="about-section">
  <div class="container">
    <div class="holder">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <b>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</b> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      <a href="#" class="btn-style-1"><i class="fa fa-chevron-circle-right"></i>Read More</a> </div>
  </div>
</section> -->

<div class="section-about" id="<?php echo'section-'.$mainvalue["href"];?>">
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
        <div style="font-size: 18px">
        <p><?php echo $event_details['event_description'];?></p>
        </div>   
        <?php include('templates/customButton.php'); ?>
        
    </div>
</div>