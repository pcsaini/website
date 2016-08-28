<?php

if($mainvalue["data"]) {
  $list = $mainvalue["data"];
  $committeeCount=count($list);
  $organizer_left=($committeeCount%6);
  if($organizer_left != 0 ){
    $organizerSpanActive=1;
  }else{
    $organizerSpanActive=0;                    
  }
  $in_one_line = 5;
  $i=0;
  $k=0;
?>
<!-- Section -->
<section class="section" id="<?php echo $mainvalue["href"];?>">
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
      <?php $i=0; 
        foreach($list as $key => $val)
        {
           
          $liClass="c-2";
          $speaker_margin ='';
          if($organizerSpanActive && $committeeCount == $organizer_left)
          {
            if($committeeCount == 3){
              $liClass="c-2 offset-3";
              
            }elseif($committeeCount == 2){
              $liClass="c-2 offset-4";
              
            }elseif($committeeCount == 1){
              $liClass="c-2 offset-5";
              
            }                                
          }
      
        if($i%6==0)
        {   
          echo '<div class="row" style="
    margin-top: 40px; */
">';
        }
       ?>
      <div class="<?php echo $liClass;?> accomodation">
        <div class="accomodation-media">

          <img src="<?php echo $path.'/images/committee_member/profile/thumb/'.$val["committee_member_profile_img"] ?>" alt="" class="image-responsive" style="height:100%;">
         

          <!-- Accomodation Info -->
          <a href="#organizer-modal-<?php echo $i; ?>" data-toggle="modal">
          <div class="accomodation-meta">
            <p style="text-align:center;"><?php echo $val["title_name"]; ?> <?php echo $val["committee_member_name"]; ?></p>
          </div>
          </a>
          <!-- End Accomodation Info -->

        </div>
      </div>  


        <?php 
          if(($i+1)%6==0 || $committeeCount==1){
            echo'</div>';    
        }
                    
        $i++;
        $committeeCount--; 
        } 
        ?>
       <?php include('templates/customButton.php'); ?>

      
      <!-- End Accomodation -->

      

    </div>
  </div>
  <?php $i=0; foreach($list as $key => $val){ ?>
    <?php include('templates/committee-modal.php'); ?>
  <?php $i++;} ?>
</section>
<!-- End Section -->
<?php }?>