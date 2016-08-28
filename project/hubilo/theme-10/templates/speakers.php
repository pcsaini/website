<!-- Speaker section   -->
<?php
if($mainvalue["data"])
{
  $list = $mainvalue["data"];
  $speakerCount=count($list);
  
  $speaker_left=($speakerCount%4);
  if($speaker_left != 0 ){
      $speakerSpanActive=1;
  }else{
      $speakerSpanActive=0;
  }
?>
<section id="<?php echo $mainvalue["href"];?>" class="section grey">
  <div class="container">

    <!-- Title -->
    <div class="title large grey">
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
      <ul class="c-12 speaker-list simple">
        <?php $i=0;
          foreach($list as $key => $val)
          { 
              $string = $val["speaker_long_description"];
              $liClass="c-3";
                $speaker_margin ='';
                if($speakerSpanActive && $speakerCount == $speaker_left)
                {
                    if($speakerCount == 3){
                        $liClass="c-3 offset-1";

                    }elseif($speakerCount == 2){
                        $liClass="c-3 offset-3";

                    }elseif($speakerCount == 1){
                        $liClass="c-3 offset-4-sp";

                    }
                }
                if($i%4==0)
                {
                    echo '<div class="row" style="margin-bottom:30px;"> ';
                }
            ?>
        <!-- Column -->
        <li class="<?php echo $liClass;?>">
          <!-- Speaker -->
          <div class="speaker">

            <!-- Speaker Media -->
            <div class="media">
            <?php
                if(!$val['speaker_profile_img']){
                $val['speaker_profile_img'] = "default.png";
            }?>
              <img class="image-responsive" src="<?php echo $path.'/images/speaker/profile/thumb/'.$val["speaker_profile_img"] ?>" alt="">

              <!-- Info Media -->
              <div class="info-media" style="cursor:pointer;">
                <!-- Speaker Name -->
              <h4 class="uppercase"><?php echo $val["title_name"]; ?> <?php echo $val["speaker_name"];?></h4>
              <div class="company"><p><?php echo $val["speaker_description"];?></p>
              <a class="btn" style="margin-top: 10px;" href="#speaker-modal-<?php echo $i; ?>" data-toggle="modal">View Detail</a>
                <!-- Social Icons -->
                <?php if ($val["speaker_twitter_follow"] || $val["speaker_linkedin_link"]) { ?>
                    <nav class="social-icons">
                      <?php if ($val["speaker_linkedin_link"]) { ?>
                        <a href="<?php echo $val["speaker_linkedin_link"]; ?>" class="fa fa-linkedin"></a>
                      <?php } ?>
                      <?php if($val["speaker_twitter_follow"] ){ ?>
                        <a href="<?php echo $val["speaker_twitter_follow"]?>" class="fa fa-twitter"></a>
                     <?php } ?>
                    </nav>
                <?php } ?>  
                <!-- End Social Icons -->

                
              </div>
              <!-- End Info Media -->
              
            </div>
            <!-- End Speaker Media -->
            <a href="#speaker-modal-<?php echo $i; ?>" data-toggle="modal">
            <div class="speaker-meta">
              <!-- Speaker Name -->
              <h5 class="uppercase"><?php echo $val["title_name"]; ?> <?php echo $val["speaker_name"];?></h5>
              <div class="company"><span><?php echo $val["speaker_description"];?></span></div>
            </div>
            </a>
          </div>
          <!-- End Speaker -->
        </li>
        <!-- End Column -->
        <?php
          if(($i+1)%4==0 || $speakerCount==1){
                    echo'</div>';
                }
            $i++;
            $speakerCount--;
          } ?>
        
      </ul>
    </div>
    <?php include('templates/customButton.php'); ?>
    
    
    <?php $i=0; foreach($list as $key => $val){ ?>
      <?php include('templates/speakers-modal.php'); ?>
    <?php $i++;} ?>

  </div>
</section>
<!-- End Section -->
<?php }?>