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
			<div class="col-lg-12 jx-servicebox-1" style="text-align:center !important; cursor:pointer;">
			<?php
            foreach ($mainvalue['dataCustom'] as $key => $value) 
			{

                if($value['action']=='text')
				{ 	?>	
							<div id="customText" class="jx-servicebox-2">
								<dl class="service-title" id="custom_button" style="padding: 15px;">
										<dt style="font-size: 18px !important;" onclick="$('#customText_btn_<?php echo $i ; ?>').slideToggle(400); $(this).toggleClass('faq-open')" class="customText-listing"><a class="jx-outline"><?php echo strtoupper($value["button_name"]); ?></a>	
										</dt>
										<dd id="customText_btn_<?php echo $i ;?>" style="display: none !important;color:#fff; text-align: left; margin-bottom: 0px; padding: 10px;" >
										<?php echo $value["file_name"]; ?></dd>
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
              
		 echo'<div class="col-lg-12 col-md-12 col-xs-12" style="text-align:center;padding-bottom:3%;padding-top:2%">';
					
			$k = 0;
           foreach ($mainvalue['dataCustom'] as $key => $value) 
		   {

			    if($value['action']=='file')
				{
					echo'<div class="jx-btn-center" data-target="#sh_carousel" style="text-align:center;margin:5px; display:inline-block !important;">
                       <a href="' . $path . '/custom_files/'.$value['file_name'].'" target="_blank" class="jx-btn-default jx-outline">'.$value['button_name'].'</a>
						</div>';
				}
                if($value['action']=='link')
				{
					echo'<div class="jx-btn-center" data-target="#sh_carousel" style="text-align:center;margin:5px; display:inline-block !important;">
						<a href="'.$value['file_name'].'" target="_blank" class="jx-btn-default jx-outline">'.$value['button_name'].'</a>
					</div>';
				}
			}
				echo '</div>';
					
		}
        ?>
