<?php 
if(isset($_SESSION['loggedin']))
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
					<!-- ===================================================== -->
					<div class="bodyColumn">
						<div class="content">
						<div class="cntr">
							<img class="pictureEvent" src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" alt="">
							<p><input style="border:1px solid #aaa;width:150px;height:20px;" type="file" name="picture" id="picture" onchange='return ajaxFileUpload(this);' /></p>
						</div>
						
						
						<div class="postingBlk">
							<form action="<?php echo URL; ?>profile/editAccount/<?php echo $this->user_account[0]['id']; ?>" method="post" />
							
									<div class="controlGroup">
										<span class="control"><input name="username" class="" type="text" value="<?php echo $this->user_account[0]['username']; ?>" placeholder=" username"></span>
									</div>
									
									<div class="controlGroup">
										<span class="control"><input name="old_password" class="" type="text" value="" placeholder=" old password"></span>
									</div>
									
									<div class="controlGroup">
										<span class="control"><input name="new_password" class="" type="text" value="" placeholder=" new password"></span>
									</div>
									
									<div class="controlGroup">
										<span class="control"><input name="email" class="email" type="text" value="<?php echo $this->user_account[0]['myemail']; ?>"  placeholder="Contact email" ></span>
									</div>
									<div class="controlGroup">
										<label style="color:#aaa">Who can see my profile:</label>
										
                                        <select style="font-size:13pt;color:#828285">
                                       <option>everyone </option>
                                        <option>only guests</option>
                                      </select>
                                         
										 </div>
									<div class="controlGroup rTxt">
										<button class="nextBtn"> SAVE </button>
									</div>
								</form>
						</div>
						</div>
					</div>
					</div>
				</div>
			
			
				
				
				
				<!-- ------------------------- -->
			</div>
		</section>
		
<?php
}
?>