<!-- Exhibitor Modal   -->
<?php
  if($mainvalue["data"]) 
{?>

<div class="remodal speaker-modal eventime_modal" data-remodal-id="exhibitor-modal-<?php echo $i; ?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <div class="modal-contant">
    <div class="modal-header">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <h4 class="modal-title">
        <?php echo $value["exhibitor_name"] ?> </h4>
        <small>
            <?php  ?></small>
        <?php if($value['category_name']){ ?>
            <h5><i class="fa fa-life-ring"></i><?php _e($value['category_name']) ?></h5>
        <?php } ?>
        <?php  if($value['exhibitor_assigned_exhibitor_phone_number']){ ?>
            <h5><i class="fa fa-phone"></i><?php _e($value["exhibitor_assigned_exhibitor_phone_number"]) ?></h5>
        <?php } ?>
        <?php if($value['exhibitor_emailid']){ ?>
            <h5><i style="margin-right:5px;" class="fa fa-envelope-o"></i><?php _e($value['exhibitor_emailid']) ?></h5>
        <?php } ?>
    </div>

    <div class="modal-body vcard-photo">
      <img src="<?php echo $path.'images/exhibitor/logo/thumb/'.$value["exhibitor_logo_img"]; ?>" alt="img10"/>
      <div class="speaker-modal-description mCustomScrollbar" data-mcs-theme="dark">
          <?php echo $value["exhibitor_description"]; ?>
      </div>
    </div>  

    <?php if ($value["exhibitor_twitter"] || $value["exhibitor_fb"] || $value["exhibitor_website"]) { ?>
      <div class="modal-footer">
        <nav class="social-icons align-center">
          <?php if ($value["exhibitor_fb"]) { ?>
            <a href="<?php echo $v["exhibitor_fb"]; ?>" class="fa fa-facebook btn"></a>
          <?php } ?>
          <?php if($value["exhibitor_twitter"] ){ ?>
            <a href="<?php echo $v["exhibitor_twitter"]?>" class="fa fa-twitter btn"></a>
         <?php } ?>
         <?php if($value["exhibitor_website"] ){ ?>
            <a href="<?php echo $v["exhibitor_website"]?>" class="fa fa-globe btn"></a>
         <?php } ?>
        </nav>
      </div>
    <?php } ?>  
  </div>
</div>
<?php }?>