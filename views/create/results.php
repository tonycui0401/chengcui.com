<?php
if(Session::get('loggedin')==true)
{
 ?>
	
		<section id="bodySection">
			<div class="container">
				<!-- ------------------------- -->
				<div class="innerTypeOne">
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
							    <a href="<?php echo URL; ?>create" class="active"><span><i class="icon-flag enlarge"></i><i class="icon-plus-sign tiny"></i> </span>Add a new events</a>
								<a href="<?php echo URL; ?>event_edit"><span><i class="icon-flag enlarge"></i><i class="icon-question-sign tiny"></i></span> Manage my events</a>
								<a href="<?php echo URL; ?>guest"><span><i class="icon-group enlarge"></i><i class="icon-question-sign tiny"></i></span> My Guests</a>
							    <a href="<?php echo URL; ?>invitations"><span><i class="icon-flag enlarge"></i><i class="icon-user tiny"></i></span> My Invitations</a>
								<!--<a href="<?php echo URL; ?>favourites"><span><i class="icon-star enlarge"></i> </span> Favourites</a>-->
							<a href="<?php echo URL; ?>event_coming"><span><i class="icon-flag enlarge"></i><i class="icon-time tiny"></i></span> Upcoming Events</a>
								<a href="<?php echo URL; ?>event_attend"><span><i class="icon-flag enlarge"></i><i class="icon-ok tiny"></i></span> Attended Events</a>
							</div>
							
							<div class="accountStat">
								<!--<h4>Account Statics</h4>
								<div>Live listings:0</div>
								<div>Pending listings:0</div>-->
							</div>
						</div>
					</div>
					<!-- ===================================================== -->
					<div class="bodyColumn">
						<div class="content">
						<br/>
						<?php
						//var_dump($this->data);
						?>
						<h2 style="color:#333333;line-height:1.5em;">event created please <a  style="float:left;" href="<?php echo URL ?>create/new_guest" style="text-decoration:underline">add guests</a></h2>
							<div>
						<!--<a  style="float:right;" href="<?php echo URL ?>event_edit/edit">Back to edit event</a>-->
						</div>
						<br/><br/>
						
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