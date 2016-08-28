<!-- Exhibitor Modal Section -->
<?php
if($mainvalue["data"])
{
    ?>
    <div id="exhibitor-modal-<?php echo $i; ?>" class="exhibitor-modal modal fade eventime_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times; </button>
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
                </div>
                <?php if($value['exhibitor_description']){ ?>
                    <div class="speaker-modal-description mCustomScrollbar" data-mcs-theme="dark">
                        <?php echo $value["exhibitor_description"]; ?>
                    </div>
                <?php } ?>
                
                <?php if ($value["exhibitor_twitter"] || $value["exhibitor_fb"] || $value["exhibitor_website"]) { ?>
                    <div class="modal-footer">
                        <ul>
                            <li>
                                <?php if ($value["exhibitor_fb"]) { ?>
                                    <a href="<?php echo $v["exhibitor_fb"]; ?>" class="btn btn-style-1">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                <?php } ?>
                            </li>
                            <li>
                                <?php if($value["exhibitor_twitter"] ){ ?>
                                    <a href="<?php echo $v["exhibitor_twitter"]?>" class="btn-style-1">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                <?php } ?>
                            </li>
                            <li>
                                <?php if($value["exhibitor_website"] ){ ?>
                                    <a href="<?php echo $v["exhibitor_website"]?>" class="btn-style-1">
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
<!-- /Exhibitor Modal Section -->