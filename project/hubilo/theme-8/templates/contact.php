<!-- Contact Section -->
<?php 
echo'
		<div class="contact-section" id="section-'.$mainvalue["href"].'">
			<div class="container">
					<!-- Section title -->';
					 $arr=array();
                    if($mainvalue["data"])
					{
                        $list=$mainvalue["data"];
                        $contactCount=count($list);
                        if($contactCount==1)
						{
                           $value=$list[0];
							echo'
							
								<h2 class="title-section">'.$mainvalue["sname"].'</h2>';
						echo '<!-- Row -->
						<div class="row">
						<!---contact Detail--->
							<div class="col-lg-4 center-text">';
							if($value['purpose_name'])
							{	
								echo'
								<div class="span4">
									<h3 style="margin-left:0px;font-size:35px;margin-bottom: 5%; font-weight:500;">
											'.$value['purpose_name'].'<h3>
								</div>';
							}
							if($value['contact_details_name']){

								echo '
								<div class="span4" style="font-size:18px;">
										<h5><i class="fa fa-user"></i>
										<span class="title">'.$value['contact_details_name'].'</span></h5>
								</div>';
							}    
							
							if($value['contact_details_phone']){

								echo'
								<div class="span4">
										<h5><i class="fa fa-phone"></i>
										<span class="title">'.$value['contact_details_phone'].'</span></h5>
								</div>';
							}    

							if($value['contact_details_emailid']){
								echo'
								<div class="span4">
									<h5><i class="fa fa-envelope"></i>
									<span class="e-mail">'.$value['contact_details_emailid'].'</span></h5>
								</div>';
							}

							if($value['contact_details_address']){
								echo'
								<div class="span4">
									<h5><i class="fa fa-map-marker"></i>
									<span class="title">'.$value['contact_details_address'].'</span></h5>
								</div>';
							}

							if($value['contact_details_check'])
							{
							  //$toemail=$value['contact_details_emailid'];
								$toemail='premchandsaini779@gmail.com';
							}
							else
							{
								$toemail='premchandsaini779@gmail.com';
								//$toemail=$event_details['emailid'];
							}
                        echo'
						</div>	
					<!---/contact Detail--->
					<div class=" col-lg-8 section-title-wrapper">
						<h3 style="font-size: 35px;text-align: left;padding-bottom: 30px;padding-left: 40px;">Any questions? Drop us a note</h3>
						<form id="contact-us-form" method="post">
						
							<div class="col-sm-12 col-lg-6 form-div">
								<input name="name" id="sname" type="text" class="form-control" placeholder="Name" required>
							</div>
							
							<div class="col-sm-12 col-lg-6 form-div">
								 <input name="email" id="smail" type="email" placeholder="Email" class="form-control" required>
							</div>
							
							<div class="col-sm-12 col-lg-12 form-div">
								<textarea name="message" id="message" type="tex" placeholder="Message" class="form-control" rows="5" cols="30" required></textarea>
							</div>
							
							<div  class="col-lg-12 col-sm-12 form-div" style="text-align:center;">
								<div class="col-sm-12 col-lg-4" style="float:none;margin:auto;">
									<button type="submit" name="submit" class="btn-style-2 button-active">Send</button>
								</div>
							</div>
							<div class="col-md-12" id="contact-success"></div>
                            <input type="hidden" id="organizer-email" value="'.$toemail.'">
                            <input type="hidden" id="eventName-email" value="'.$event_details['event_name'].'">
						</form>
					</div>
				</div>
					<!---/Row end--->';
					}
					else
					{
						echo'
						<div class=" col-lg-12 section-title-wrapper">
							<h3 style="font-size: 42px;text-align: center;padding-bottom: 30px;">Any questions? Drop us a note</h3>
							<form id="contact-us-form" method="post">
						
							<div class="col-sm-12 col-lg-6 form-div">
								<input name="name" id="sname" type="text" class="form-control" placeholder="Name" required>
							</div>
							
							<div class="col-sm-12 col-lg-6 form-div">
								 <input name="email" id="smail" type="email" placeholder="Email" class="form-control" required>
								
							</div>
							
							<div class="col-sm-12 col-lg-12 form-div">
								<textarea name="message" id="message" type="tex" placeholder="Message" class="form-control" rows="5" cols="30" required></textarea>
							</div>
							
							<div  class="col-lg-12 col-sm-12 form-div" style="text-align:center;">
								<div class="col-sm-12 col-lg-4" style="float:none;margin:auto;">
									<button type="submit" name="submit" class="btn-style-2 button-active">Send</button>
								</div>
							</div>
                            <div class="col-md-12" id="contact-success"></div>
							</form>
						</div>';
						echo'
						<!---contact Detail--->
						<div class="row">
							<h3 style="font-size: 42px;text-align:center;padding-bottom: 30px;">'.$mainvalue["sname"].'</h3>
						</div>
						<div class="row">
						<div class="col-lg-12 section-title-wrapper">';
							$i=0;
							foreach ($list as $key => $value) 
							{
								if($i%3==0)
								{
								 echo'<div class="row">';
								 
									if($contactCount>3)
									{
										$n='col-lg-4';
									}
									else
									{
										if($contactCount==2){
											$n='col-lg-6';
										}elseif($contactCount==3){
											$n='col-lg-4';                                            
										}elseif($contactCount==1){
											$n='col-lg-4';
										}                                            
									}
								}
						
						echo'
						<div class="'.$n.' main-contact">';
							if($value['purpose_name'])
							{	
								echo'<div class="col-lg-12" style="margin-left:0px;font-size:30px;margin-bottom: 5%;">
											'.$value['purpose_name'].'
									</div>';
							}
							if($value['contact_details_name']){

								echo '<div class="col-lg-12 contact">
										<i class="fa fa-user"></i>
										<span class="title">'.$value['contact_details_name'].'</span>
									</div>';
							}    
							
							if($value['contact_details_phone']){

								echo '<div class="col-lg-12 contact">
										<i class="fa fa-phone"></i>
										<span class="title">'.$value['contact_details_phone'].'</span>
									</div>';
							}    

							if($value['contact_details_emailid']){
								echo'<div class="col-lg-12 contact">
									<i class="fa fa-envelope"></i>
									<span class="e-mail">'.$value['contact_details_emailid'].'</span><br>
								</div>';
							}

							if($value['contact_details_address']){
								echo'<div class="col-lg-12 contact">
										<i class="fa fa-map-marker"></i>
										<span class="title">'.$value['contact_details_address'].'</span>
									</div>';
							}

							if($value['contact_details_check'])
							{
							   $arr[0]=$value['contact_details_emailid'];
							}
						echo '</div>';
					
							if(($i+1)%3==0 || $contactCount==1)
							{
								echo '</div>';
							}
                             
							$i++; 
							$contactCount--;
						}/*foreach loop ends*/ 
						echo'
						</div>
						</div>
						<!---/contact Detail--->'; 
						if(count($arr)>0)
						{
							$toemail=$arr[0];
						}
						else
						{
							$toemail=$event_details['emailid'];
						}
						
						echo'
						<input type="hidden" id="organizer-email" value="'.$toemail.'">
						<input type="hidden" id="eventName-email" value="'.$event_details['event_name'].'">';

					}/*contactCount else*/
				}
				
                else
				{
					echo'
					<div class=" col-lg-12 section-title-wrapper">
							<h3 style="font-size: 42px;text-align: center;padding-bottom: 30px;padding-left: 40px;">Any questions? Drop us a note</h3>
							<form id="contact-us-form" method="post">
						
							<div class="col-sm-12 col-lg-6 form-div">
								<input name="name" id="sname" type="text" class="form-control" placeholder="Name" required>
							</div>
							
							<div class="col-sm-12 col-lg-6 form-div">
								 <input name="email" id="smail" type="email" placeholder="Email" class="form-control" required>
							</div>
							
							<div class="col-sm-12 col-lg-12 form-div">
								<textarea name="message" id="message" type="tex" placeholder="Message" class="form-control" rows="5" cols="30" required></textarea>
							</div>
							
							<div  class="col-lg-12 col-sm-12 form-div" style="text-align:center;">
								<div class="col-sm-12 col-lg-4" style="float:none;margin:auto;">
									<button type="submit" name="submit" class="btn-style-2 button-active">Send</button>
								</div>
							</div>
							<div class="col-md-12" id="contact-success"></div>
                            <input type="hidden" id="organizer-email" value="'.$event_details['emailid'].'">
                            <input type="hidden" id="eventName-email" value="'.$event_details['event_name'].'">
						</form>
					</div>';
				}
				include('templates/customButton.php');     
	echo'
	</div>	
</div>';
?>
<!-- /Contact Section -->		