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
						<a href="<?php echo URL; ?>profile"><img class="profileImg" style="margin-right:15px;" src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" alt=""></a>
								<div class="cell" style="vertical-align:top;">
									<h4><?php echo Session::get('username'); ?></h4>
									<div><strong>Email: </strong> <span><?php echo Session::get('email'); ?></span></div>
									<div><a href="<?php echo URL; ?>profile/view">view details</a></div>
									<!--<div style="font-size:13px;font-family: Arial, Helvetica, sans-serif;color:#555;">About your self</div>-->
								</div>
					<h2 style="margin-top:10px">Messages</h2>
				<!--<div id="myac">
					<!--<h2>My Account</h2>-->
					<!--<br/>-->
					<!--<div style="float:left;"><img src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" alt="image"><br></div>
					<div style="float:left;margin-left:10px;"><h2>Tony</h2>
					<div style="height:7px;"></div>
					<div><strong>Email: </strong> <span>tony@gmail.com</span></div>
					<div style="margin-top:5px;font-family: Arial, Helvetica, sans-serif;;font-size:13px;width:200px;word-wrap:break-word;">
					fdfdfddffdfdfdfffdddddddddddddddddddddddd</div>
					</div>
					<!--<div>
						<span>12 events</span><br>
						<span>1000 followers</span>
					</div>-->
				<!--</div>
			<!--<br clear=both>-->

				<!--<div><strong>About:</strong> <span>Lorem ipsum dolor</span></div>
				<div><strong>Tel: </strong> <span>01234567</span></div>-->
				
				<!--<div><strong>Website: </strong> <span>www.outpost.com</span></div>-->
				<!--<br><br>-->
				<!--<div class="lt" style="float:left;margin-left:15px;margin-top:20px;">
				<button class="nextBtn" name="login" id="editprofile" style="padding:5px 10px;"> EDIT </button>
				<script>
				$(document).ready(function(){
				$("#editprofile").click(function(){
				//alert("ddd");
				window.location.href="<?php echo URL; ?>profile_edit";
				});
				});
				</script>
					<!--<a href=""><img src="<?php echo FILE_URL; ?>style/images/fbbtn.png" alt="facebook"></a>
					<a href=""><img src="<?php echo FILE_URL; ?>style/images/twitterbtn.png" alt="twitter"></a>-->
				<!--</div>
				
				
				<!--<a id="edit" class="rt" href="#" >EDIT</a>-->
				
				<!--<br class="clr">-->
				
				
				
				<div class="commentsBlk">
								<!--<h3>1 comments </h3>-->
								<div class="comments">
									<div class="comment">
										<img class="avatar" src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" alt="">
										<div class="commentLine"><i class="icon-caret-left"><i class="icon-caret-left"></i></i> <textarea></textarea></div>
									</div>
									<div class="rTxt">Public<input type="radio" name="pm" value="0" checked="checked" /> Private<input type="radio" name="pm" value="1" /><a href="#" class="signupBtn" style="font-size:12px;padding:5px 10px;"> Post Message</a></div>
									<div class="comment" style="padding-bottom:0px;">
										<img class="avatar" src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" alt="">
										<div class="commentLine"><i class="icon-caret-left"><i class="icon-caret-left"></i> </i>Great to be here in Beijing!</div>
									</div>				
									
									<!--<div class="rt"><a href="#"><span>options </span><i class="icon-sort-down"></i></a></div>-->
									<div class="eventsControl" style="padding-top:0px;">
										<a href="#"><i class="icon-pencil"></i> John Smith</a> |
										<a href="#"><i class="icon-time"></i> 07.05.2013 11:00 </a> 
									</div>
									
									
								</div>
							</div>
			
			
			
			
				
				
				
			</div>

			
			
			
			
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