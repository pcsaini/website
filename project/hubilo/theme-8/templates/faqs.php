<!-- FAQs Section  -->
<?php if($mainvalue["data"])
{
    $list=$mainvalue["data"]; ?>
		<div class="section-faq" id="section-<?php echo $mainvalue['href'];?>">
			<div class="container">
				<!-- Section title -->
					<h2>Faq</h2>				
				<!-- /Section title -->
				<?php 
		            if(trim($mainvalue["tagline"]))
		            {
		            ?>
		                <div class="col-lg-12 tag_line"><h3 style="float:left"><?php echo $mainvalue["tagline"];?></h3></div>
		            <?php
		        }
		        ?>
				
				<!-- FAQ list -->
					<!-- FAQ item -->
				<div class="row">
					<?php 
						$i=0;
						foreach ($list as $key => $value) { 
					?>
						<div class="container">
							<div class="col-lg-10">
							<div class="faq-wrapper">
							<!-- FAQ Question -->
							<a class="faq-title" onclick="$('#faq-<?php echo $i; ?>').slideToggle(400); $(this).toggleClass('faq-open')"><?php echo $value["faq_question"]; ?>
							 	<span style="float:left;padding-right: 10px;">
									<i class="fa fa-angle-double-right"></i>
									<i class="fa fa-angle-double-down"></i>
								</span>
							</a>
							<!-- /FAQ Question -->
							<!-- FAQ reply -->
							<div id="faq-<?php echo $i++; ?>" class="faq-content" style="display:none">
								<?php echo $value["faq_answer"]; ?>
							</div>	
							<!-- /FAQ reply -->
							</div>
							</div>
						</div>
					<?php }
					include('templates/customButton.php');					
					?>
				</div>
	    		<!-- /FAQ list -->
			</div>

		</div>
		<?php } ?>
		<!-- /FAQs Section  -->