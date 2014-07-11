<?php
if(Session::get('loggedin')==true)
{
 ?>

		<section id="bodySection">
			<div class="container">
				<!-- ------------------------- -->
				<div class="innerTypeTwo">
					<div class="mainColumn">
					<div class="sideColumn">
						<div class="content">
							<div class="profileImgsection">
								<img class="profileImg" src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" alt="">
								<div class="cell">
									<h4>Name</h4>
									<!--<a href="#">Account Settings</a>-->
								</div>
							</div>

							
							<div class="profileMenu">
							    <a href="<?php echo URL; ?>create"><span><i class="icon-flag enlarge"></i><i class="icon-plus-sign tiny"></i> </span>Add a new events</a>
								<a href="<?php echo URL; ?>event_edit" class="active"><span><i class="icon-flag enlarge"></i><i class="icon-question-sign tiny"></i></span> Manage my events</a>
								<a href="<?php echo URL; ?>guest"><span><i class="icon-group enlarge"></i><i class="icon-question-sign tiny"></i></span> My Guests</a>
							    <a href="<?php echo URL; ?>invitations"><span><i class="icon-flag enlarge"></i><i class="icon-user tiny"></i></span> My Invitations</a>
								<!--<a href="<?php echo URL; ?>favourites"><span><i class="icon-star enlarge"></i> </span> Favourites</a>-->
								<a href="<?php echo URL; ?>event_coming"><span><i class="icon-flag enlarge"></i><i class="icon-time tiny"></i></span> Upcoming Events</a>
								<a href="<?php echo URL; ?>event_attend"><span><i class="icon-flag enlarge"></i><i class="icon-ok tiny"></i></span> Attended Events</a>
							</div>
							<!--<div class="accountStat">
								<h4>Account Statics</h4>
								<div>Live listings:0</div>
								<div>Pending listings:0</div>
							</div>-->
						</div>
					</div>
					
					<div class="bodyColumn">
						<div class="content">
						 <?php 
						 foreach($this->eventsEdit as $key => $values)
						   {
						   ?>
						<div class="eventBlk">
							<div class="eventContent">
								<img class="eventImg" src="<?php echo URL."files/users/".Session::get('user_id')."/events/crop_".$values['imgname'].".jpg"; ?>" alt="events">
								<h4><?php echo $values['title']; ?></h4>
								<p>
								<?php echo substr($values['description'], 0, 120)."..."; ?>
								</p>
								<!--<a href="#"><i class="icon-calendar"></i> 01.03.2013 - 01.04.2013 </a>-->
							</div>
							<div class="eventsControl" style="margin-top:20px;">
								<!--<a href="#"><i class="icon-tag"></i> sports</a> |-->
								<a href="#"><i class="icon-calendar"></i> <?php echo $values['starttime']; ?> - <?php echo $values['endtime']; ?> </a>
								<!--<a href="#"><i class="icon-eye-open"></i> 40</a>-->
								<span class="rt">
								<a href="<?php echo URL; ?>event_edit/edit/<?php echo $values['id']; ?>"><i class="icon-pencil"></i> Edit</a> |
								<a class="danger" href="#"><i class="icon-remove"></i> Delete</a>
								</span>
							</div>
							
						</div>
						<?php
						}
						?>
						<!--<div class="eventBlk">
							<div class="eventContent">
								<img class="eventImg" src="<?php echo FILE_URL; ?>style/images/event_1.jpg" alt="events">
								<h4>Betfair</h4>
								<p>
								How excited are you ahead of the Cheltenham Festival? There aare only three days to go!
								</p>
								
							</div>
							<div class="eventsControl">
							
								<a href="#"><i class="icon-calendar"></i> 01.03.2013 - 01.04.2013 </a>
							
								<span class="rt">
								<a href="<?php echo URL; ?>event_edit/edit"><i class="icon-pencil"></i> Edit</a> |
								<a class="danger" href="#"><i class="icon-remove"></i> Delete</a>
								</span>
							</div>
							
						</div>-->
						
						
					

						</div>
					</div>
					</div>
				</div>
			
			
				
				
				
				<!-- ------------------------- -->
			</div>
		</section>
		
		<?php
}else{
die("");
}
?>