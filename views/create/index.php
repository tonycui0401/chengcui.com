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
							<!--<div class="accountStat">
								<h4>Account Statics</h4>
								<div>Live listings:0</div>
								<div>Pending listings:0</div>
							</div>--->
						</div>
					</div>
					
					<div class="bodyColumn">
						<div class="content">
						<div class="postingBlk" style="padding-top:8px;">
							<!--<form action="event_page2.html">
							<script>
							$(document).ready(function(){
							$(".holder span").click(function(){
							$(".category").val($(".holder #1").text());
							});
							});
							</script>-->
									<!--<div class="controlGroup">
										<label>Enter your event title:</label>
										<span class="control"><input class="" type="text" value=""></span>
									</div>-->
									<?php
									  // var_dump($_SESSION);
									?>
									<h4 style="padding-bottom:10px;"><a href="<?php echo URL ?>create/new_guest">Add more guests first?</a></h4>
									<form onsubmit="ukPostcodeTest(); return false" action="#">
									<div class="controlGroup">
										<label>Enter your venue postcode:</label>
										<span class="control"><input class="" id="search" type="text" value=""></span>
									</div>
									<!--<div class="controlGroup">
										<label>Address details:</label>
										<span class="control"><textarea>Ajax generated address</textarea></span>
									</div>-->
									<div class="controlGroup rTxt">
										<input class="nextBtn" type="submit"  value="SEARCH" />
										<script>
										/*$(document).ready(function(){
							$("#search_guest").click(function(e){
							e.preventDefault();
							window.location.href="<?php echo URL ?>create/step2";
							});
							});*/
										</script>
									</div>
									
								</form>
								<br/>
								<div id="message" style="font-size:15pt; color:#24168f"></div>
								
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