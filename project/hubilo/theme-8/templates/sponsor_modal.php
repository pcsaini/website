<!-- Sponsors Modal   -->
<?php
    if($mainvalue["data"]) 
     {
      ?>
<div id="sponsors-modal-<?php echo $j.''.$i; ?>" class="sponsor-modal modal fade eventime_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times; </button>
        <h4 class="modal-title">
        <?php echo $v["sponsor_name"] ?> </h4>
        <small>
        <?php  ?></small>
        <?php if($v['category_name']){ ?>
          <h5><i class="fa fa-life-ring"></i><?php _e($v['category_name']) ?></h5>
        <?php } ?>
      </div>
      <div class="modal-body vcard-photo" style="text-align: center;">
        <img src="<?php echo $path . 'images/sponsor/logo/thumb/' . $v["sponsor_logo_img"]; ?>" alt="img10"/>
      </div>
      <?php if($v["sponsor_description"]){ ?>
        <div class="speaker-modal-description mCustomScrollbar" data-mcs-theme="dark">
            <?php echo $v["sponsor_description"]; ?>
        </div>
    
      <?php } ?>
      <?php if ($v["sponsor_twitter"] || $v["sponsor_fb"] || $v["sponsor_website"]) { ?>
      <div class="modal-footer">
      <ul style="margin-left: -50px;">
      <li>
        <?php if ($v["sponsor_fb"]) { ?>
          <a href="<?php echo $v["sponsor_fb"]; ?>" class="btn btn-style-1">
          <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
        <?php } ?>
        </li>
        <li>
        <?php if($v["sponsor_twitter"] ){ ?>
          <a href="<?php echo $v["sponsor_twitter"]?>" class="btn-style-1">
          <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        <?php } ?>
        </li>
        <li>
        <?php if($v["sponsor_website"] ){ ?>
          <a href="<?php echo $v["sponsor_website"]?>" class="btn-style-1">
          <i class="fa fa-globe" aria-hidden="true"></i>
          </a>
        <?php } ?>
        <li>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<?php } ?>
<!-- /Sponsors Modal   -->