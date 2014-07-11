<?php
if(Session::get('loggedin')==true)
{
 ?>
	
		<section id="bodySection">
			<div class="container">
				<!-- ------------------------- -->
				<div class="innerTypeThree">
					<div class="mainColumn">
					<!-- Left Column Start -->
					<div class="sideColumn">
						<div class="content">
							<div class="profileImageHolder">
							<img class="eventAvatar" src="<?php echo FILE_URL; ?>style/images/gmic-0.jpg" width="180" alt="">
							</div>
							<div class="seperatorH"></div>
							<div class="profileMenu">
								<a class="active" href="<?php echo URL; ?>event/view"><span><i class="icon-list-alt enlarge"></i> </span> Details</a>
								<!--<a href="<?php echo URL; ?>event/timeline"><span><i class="icon-tasks enlarge"></i> </span> Timeline</a>-->
							</div>
							
							<!--<div class="seperatorH" style="margin-bottom:10px;padding-bottom:0px;"></div>
								<span style="float:left;">created by</span> <a href="<?php echo URL; ?>profile" style="line-height:30px;float:left;margin-bottom:10px;margin-top:0px;padding-top:0px;clear:both;"><img class="avatarH" src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" alt=""> ffgdfdfgfdg</a>
							<div style="clear:both;margin-top:10px;"><a href="<?php echo URL; ?>event_attend/guest_list"/>Guest list</a></div>-->
							<div style="clear:both;margin-top:10px;"><a href="<?php echo URL; ?>invitations/view"/><< Back to invited event</a></div>
		
							<!--<div class="accountStat">
								<h4>Account Statics</h4>
								<div>Live listings:0</div>
								<div>Pending listings:0</div>
							</div>-->
							
							<!--<div class="seperatorH" style="clear:both;"></div>--->
							
							<!--<div class="eventsVenu">
								<h4>More from the venue</h4>
								<div class="indetails">
									<a href="#"><img class="" src="style/images/more-0.jpg" width="60" height="60" alt=""></a>
									<h5>InfoComm China</h5>
									<p><i class="icon-time"></i> 12.04.2013 9:00</p>
								</div>
								<div class="indetails">
									<a href="#"><img class="" src="style/images/more-1.jpg" width="60" height="60" alt=""></a>
									<h5>China Franchise Expo</h5>
									<p><i class="icon-time"></i> 28.04.2013 9:00</p>
								</div>
								<div class="indetails">
									<a href="#"><img class="" src="style/images/more-2.jpg" width="60" height="60" alt=""></a>
									<h5>TopWine China</h5>
									<p><i class="icon-time"></i> 06.06.2013 9:00</p>
								</div>
								<div class="indetails">
									<a href="#"><img class="" src="style/images/more-3.jpg" width="60" height="60" alt=""></a>
									<h5>All in Caravaning</h5>
									<p><i class="icon-time"></i> 17.06.2013 9:00</p>
								</div>
								<div class="indetails">
									<a href="#"><img class="" src="style/images/more-4.jpg" width="60" height="60" alt=""></a>
									<h5>Wind Power China</h5>
									<p><i class="icon-time"></i> 05.07.2013 9:00</p>
								</div>
								<div class="rTxt"><a href="#">View all</a></div>								
							</div>-->
						</div>
					</div>
					<!-- Right Column Start -->
					<div class="sideColumn rt">
						<!--<div class="content">
							<div class="featureEvents">
							<h4>Feature events</h4>
								<div class="indetails">
									<a href="#"><img class="" src="style/images/f-0.jpg" width="60" height="60" alt=""></a>
									<h5>Gridtec China</h5>
									<p><i class="icon-time"></i> 03.07.2013 9:00</p>
								</div>
								<div class="indetails">
									<a href="#"><img class="" src="style/images/f-1.jpg" width="60" height="60" alt=""></a>
									<h5>Solar Thermal China</h5>
									<p><i class="icon-time"></i> 03.07.2013 9:00</p>
								</div>
								<div class="indetails">
									<a href="#"><img class="" src="style/images/f-2.jpg" width="60" height="60" alt=""></a>
									<h5>CIPV EXPO</h5>
									<p><i class="icon-time"></i> 03.07.2013 9:00</p>
								</div>
								<div class="rTxt"><a href="#">View all</a></div>
							</div>
								
							<div class="sponserAds">
								<h4>Sponser ads</h4>
								<div class="sponserAdsDtl">
									<img class="lt" src="style/images/ads-icon.jpg" width="40" alt="events">
									<div class="sponserAdsContent">
										<h5><a href="#">China Mobile</a></h5>
										<p>My Zone, my way!</p>
										<a href="#"><img src="style/images/ads-0.jpg" width="180" alt="events"></a>
									</div>
								</div>
							</div>
						</div>-->
					</div>
					
				<div class="bodyColumn">
						<div class="content" style="overflow:auto;">
						<!--<div><a href="<?php echo URL ?>guest/add">ADD NEW GUEST</a></div>-->
						<!--<div class="innerWrapper">-->
				<!--<div id="myac">-->
					<!--<h2>My Account</h2>
					<br/>-->
					<div style="margin-top:10px;height:70px;width:180px;border:0px solid #ccc;float:left;margin-left:30px;">
					<div style="float:left;"><img src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" style="border:1px solid #ccc;padding:4px;background:#fff;" width="60" height="60" alt="image"></div>
					<div style="float:left;width:70px;height:30px;border:0px solid #ff0000;font-size:11pt;margin-left:10px;margin-bottom:5px;word-wrap:break-word;">rrrr</div>
					<div style="float:left;width:70px;height:20px;border:0px solid #ff0000;margin-left:10px;margin-top:0px;"><a href="#" class="signupBtn" style="font-size:14px;padding:5px 10px;">remove</a></div>
					</div>
					<div style="margin-top:10px;height:70px;width:180px;border:0px solid #ccc;float:left;margin-left:30px;">
					<div style="float:left;"><img src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" style="border:1px solid #ccc;padding:4px;background:#fff;" width="60" height="60" alt="image"></div>
					<div style="float:left;width:70px;height:30px;border:0px solid #ff0000;font-size:11pt;margin-left:10px;margin-bottom:5px;word-wrap:break-word;">rrrr</div>
					<div style="float:left;width:70px;height:20px;border:0px solid #ff0000;margin-left:10px;margin-top:0px;"><a href="#" class="signupBtn" style="font-size:14px;padding:5px 10px;">remove</a></div>
					</div>
					<div style="margin-top:10px;height:70px;width:180px;border:0px solid #ccc;float:left;margin-left:30px;">
					<div style="float:left;"><img src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" style="border:1px solid #ccc;padding:4px;background:#fff;" width="60" height="60" alt="image"></div>
					<div style="float:left;width:70px;height:30px;border:0px solid #ff0000;font-size:11pt;margin-left:10px;margin-bottom:5px;word-wrap:break-word;">rrrr</div>
					<div style="float:left;width:70px;height:20px;border:0px solid #ff0000;margin-left:10px;margin-top:0px;"><a href="#" class="signupBtn" style="font-size:14px;padding:5px 10px;">remove</a></div>
					</div>
					<div style="margin-top:10px;height:70px;width:180px;border:0px solid #ccc;float:left;margin-left:30px;">
					<div style="float:left;"><img src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" style="border:1px solid #ccc;padding:4px;background:#fff;" width="60" height="60" alt="image"></div>
					<div style="float:left;width:70px;height:30px;border:0px solid #ff0000;font-size:11pt;margin-left:10px;margin-bottom:5px;word-wrap:break-word;">rrrr</div>
					<div style="float:left;width:70px;height:20px;border:0px solid #ff0000;margin-left:10px;margin-top:0px;"><a href="#" class="signupBtn" style="font-size:14px;padding:5px 10px;">remove</a></div>
					</div>
					<div style="margin-top:10px;height:70px;width:180px;border:0px solid #ccc;float:left;margin-left:30px;">
					<div style="float:left;"><img src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" style="border:1px solid #ccc;padding:4px;background:#fff;" width="60" height="60" alt="image"></div>
					<div style="float:left;width:70px;height:30px;border:0px solid #ff0000;font-size:11pt;margin-left:10px;margin-bottom:5px;word-wrap:break-word;">rrrr</div>
					<div style="float:left;width:70px;height:20px;border:0px solid #ff0000;margin-left:10px;margin-top:0px;"><a href="#" class="signupBtn" style="font-size:14px;padding:5px 10px;">remove</a></div>
					</div>
					<div style="margin-top:10px;height:70px;width:180px;border:0px solid #ccc;float:left;margin-left:30px;">
					<div style="float:left;"><img src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" style="border:1px solid #ccc;padding:4px;background:#fff;" width="60" height="60" alt="image"></div>
					<div style="float:left;width:70px;height:30px;border:0px solid #ff0000;font-size:11pt;margin-left:10px;margin-bottom:5px;word-wrap:break-word;">rrrr</div>
					<div style="float:left;width:70px;height:20px;border:0px solid #ff0000;margin-left:10px;margin-top:0px;"><a href="#" class="signupBtn" style="font-size:14px;padding:5px 10px;">remove</a></div>
					</div>
				
					<!--<h2>Tony</h2>-->
					<!--<div>
						<span>12 events</span><br>
						<span>1000 followers</span>
					</div>-->
				<!--</div>-->
			<!--<br>-->

				<!--<div><strong>About:</strong> <span>Lorem ipsum dolor</span></div>
				<div><strong>Tel: </strong> <span>01234567</span></div>-->
				<!--<div><strong>Email: </strong> <span>tony@gmail.com</span></div>-->
				<!--<div><strong>Website: </strong> <span>www.outpost.com</span></div>-->
				<!--<br><br>
				<div class="lt">
				<button class="nextBtn" name="login"> EDIT </button>
					<!--<a href=""><img src="<?php echo FILE_URL; ?>style/images/fbbtn.png" alt="facebook"></a>
					<a href=""><img src="<?php echo FILE_URL; ?>style/images/twitterbtn.png" alt="twitter"></a>-->
				<!--</div>-->
				<!--<a id="edit" class="rt" href="#" >EDIT</a>-->
				<!--<br class="clr">-->
				
			<!--</div>-->

						</div>
					</div>
					<div class="clr"></div>
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