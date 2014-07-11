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
									<h4><?php echo Session::get('username'); ?></h4>
									<a href="<?php echo URL; ?>profile/edit/<?php echo Session::get('user_id'); ?>">Edit</a>
								</div>
							</div>

							<div class="profileMenu">
							    <a href="<?php echo URL; ?>create"><span><i class="icon-flag enlarge"></i><i class="icon-plus-sign tiny"></i> </span>Add a new events</a>
								<a href="<?php echo URL; ?>event_edit"><span><i class="icon-flag enlarge"></i><i class="icon-question-sign tiny"></i></span> Manage my events</a>
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
						<div class="innerWrapper">
					
			
				<div style="text-align:center;"><img style="padding:5px;border:1px solid #aaa;background:#ffffff;" src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" alt="image"></div>
		<h2 style="text-align:center;">Name</h2>
		<!--<div>
			<span>male</span><br>
			<span>25</span>
		</div>-->
	
<br>
    <div style="margin-left:100px;">
	<table>
	<tr><td><strong>Contact Name: </strong></td><td> <span>aivar blaen</span></td></tr>
    <tr><td><strong>gender: </strong></td><td> <span>male</span></td></tr>
    <tr><td><strong>age: </strong></td><td> <span>25</span></td></tr>
	<tr><td><strong>About: </strong></td><td> <span>Lorem ipsum dolor</span></td></tr>
	<tr><td><strong>Tel: </strong></td><td> <span>01234567</span></td></tr>
	<tr><td><strong>Email: </strong></td><td> <span>tony@gmail.com</span></td></tr>
	<tr><td><strong>Website: </strong></td><td> <span>www.geegpost.com</span></td></tr>
	</table>
	</div>
	<br><br>
	<!--<div class="rTxt">
	<a class="fb" href=""><img src="style/images/fb.png" alt="facebook"></a>
	<a class="tw" href=""><img src="style/images/twitter.png" alt="twitter"></a>
	
			
				
				
				
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