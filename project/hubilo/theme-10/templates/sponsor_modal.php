<!-- Exhibitor Modal   -->
<?php
  if($mainvalue["data"]) 
{?>

<div class="remodal speaker-modal eventime_modal" data-remodal-id="sponsors-modal-<?php echo $j.''.$i; ?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <div class="modal-contant">
    <div class="modal-header">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <h4 class="modal-title">
        <h4 class="modal-title">
        <?php echo $v["sponsor_name"] ?> </h4>
        <small>
        <?php  ?></small>
        <?php if($v['category_name']){ ?>
          <h5><i class="fa fa-life-ring"></i><?php _e($v['category_name']) ?></h5>
        <?php } ?>
    </div>

    <div class="modal-body vcard-photo">
      <img src="<?php echo $path . 'images/sponsor/logo/thumb/' . $v["sponsor_logo_img"]; ?>" alt="img10"/>
      <div class="speaker-modal-description mCustomScrollbar" data-mcs-theme="dark">
          <?php echo $v["sponsor_description"]; ?>
      </div>
    </div>  

     <?php if ($v["sponsor_twitter"] || $v["sponsor_fb"] || $v["sponsor_website"]) { ?>
      <div class="modal-footer">
        <nav class="social-icons align-center">
          <?php if ($v["sponsor_fb"]) { ?>
            <a href="<?php echo $v["sponsor_fb"]; ?>" class="fa fa-facebook btn"></a>
          <?php } ?>
          <?php if($v["sponsor_twitter"] ){ ?>
            <a href="<?php echo $v["sponsor_twitter"]?>" class="fa fa-twitter btn"></a>
         <?php } ?>
         <?php if($v["sponsor_website"] ){ ?>
            <a href="<?php echo $v["sponsor_website"]?>" class="fa fa-globe btn"></a>
         <?php } ?>
        </nav>
      </div>
    <?php } ?>  
  </div>
</div>
<?php }?>