<!-- Custom Btton section -->
    <?php

        /*for merging text into section*/
        if($mainvalue['dataCustom'])
		{
            foreach ($mainvalue['dataCustom'] as $key => $value)
			{
                if($value['action']=='section'){
                    echo'<div class="row">
                   			<div class="entry-contents">
                            	<div class="col-lg-12">
                               		'.$value['file_name'].'
                            	</div>
                        	</div>
						</div>';
                }
            }
        }
        /*for adding button with text into section*/
        if($mainvalue['dataCustom'])
		{
			$customText_list	=	$mainvalue['dataCustom'];
			$customText_count	=	count($customText_list);
           
			$i = 0; ?>
			<div class="col-lg-12 left-margin" style="text-align:center; padding:10px;">
			<?php
            foreach ($mainvalue['dataCustom'] as $key => $value) 
			{

                if($value['action']=='text')
				{ 	?>
						
							<div id="customText" class="custom_btn schedule-item-content" style="display:inline-table;">
									<dl class="customText" id="custom_button" style="padding: 1%;">
										<dt style="text-align:center !important;" onclick="$('#customText_btn_<?php echo $i ; ?>').slideToggle(400); $(this).toggleClass('faq-open')" class="customText-listing"><?php echo strtoupper($value["button_name"]); ?>
										</dt>
										<dd id="customText_btn_<?php echo $i ;?>" class="custom_content"><?php echo $value["file_name"]; ?></dd>
									 </dl>
							</div>
						
	                
	                <?php
            	}
	        	$i++;
        	$customText_count--;
        }?>
        </div>
           <?php 
    }


        /*for all the buttons*/
        if($mainvalue['dataCustom'])
		{
		 	$custombtn_list		=	$mainvalue['dataCustom'];
			$custombtn_count	=	count($custombtn_list);
              
		 echo'<div class="col-lg-12 col-md-12 col-xs-12" style="text-align:center;padding-bottom:3%;padding-top:2%"><ul class="btn_list">';
					
			$k = 0;
           foreach ($mainvalue['dataCustom'] as $key => $value) 
		   {


			    if($value['action']=='file')
				{
					echo'<li>
                       <a href="' . $path . '/custom_files/'.$value['file_name'].'" target="_blank" class="btn-style-1">'.$value['button_name'].'</a>
						</li>';
				}
                if($value['action']=='link')
				{
					echo'<li>
						<a href="'.$value['file_name'].'" target="_blank" class="btn-style-1">'.$value['button_name'].'</a></li>
					';
				}
			}
				echo '</ul></div>';
					
			}
        ?>
<!-- /Custom Btton section -->