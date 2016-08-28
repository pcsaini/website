<!-- Exhibitor Section -->
<?php if($mainvalue["data"]) {
    $list = $mainvalue["data"]; ?>
    <div id="section-<?php echo $mainvalue["href"];?>" class="section-exhibitors">
        <div class="container">
            <!-- Section title -->
            <h2><?php echo $mainvalue["sname"];?></h2>
            <!-- /Section title -->

            <div class="exhibitors-list col-lg-12 col-xs-12">
                <?php $i=0;foreach($list as $key => $value){  ?>
                <div class="exhibitor-item col-lg-3 col-xs-12">
                    <div class="exhibitor-each-item box" href="#exhibitor-modal-<?php echo $i; ?>" data-toggle="modal">

                            <img src="<?php echo $path.'images/exhibitor/logo/thumb/'.$value['exhibitor_logo_img']; ?>"/>
                    </div>
                </div>
                <!-- Modals -->
                <?php include('templates/exhibitor_modal.php'); ?>
                <?php $i++;} ?>
            </div>
            <?php include('templates/customButton.php'); ?>
        </div>
    </div>
<?php } ?>
<!-- /Exhibitor Section -->