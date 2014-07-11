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
								<a href="<?php echo URL; ?>event_edit"><span><i class="icon-flag enlarge"></i><i class="icon-question-sign tiny"></i></span> Manage my events</a>
								<a href="<?php echo URL; ?>guest" class="active"><span><i class="icon-group enlarge"></i><i class="icon-question-sign tiny"></i></span> My Guests</a>
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
						<div class="content" style="overflow:auto;">
						<div class="postingBlk">
						<form action="<?php echo URL; ?>guest/addGuest" method="post" />
						<div class="controlGroup">
						                 <?php //$this->result[0]['id'];; ?>
										<label>Enter your guest email:</label>
										<span class="control"><input class="" name="email" type="text" value=""></span>
									</div>
									<!--<div class="controlGroup">
										<label>Address details:</label>
										<span class="control"><textarea>Ajax generated address</textarea></span>
									</div>-->
									
									<div class="controlGroup rTxt">
										<button class="nextBtn"> SEARCH </button>
									</div>
									</form>
				        </div>
						<?php
						if($this->result!="")
						{
						?>
							<div id="guest_result" style="margin-top:10px;height:70px;width:180px;border:0px solid #ccc;float:left;margin-left:30px;">
					<div style="float:left;"><img src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" style="border:1px solid #ccc;padding:4px;background:#fff;" width="60" height="60" alt="image"></div>
					<div style="float:left;width:70px;height:30px;border:0px solid #ff0000;font-size:11pt;margin-left:10px;margin-bottom:5px;word-wrap:break-word;"><?php echo $this->result[0]['username']; ?></div>
					<div style="float:left;width:70px;height:20px;border:0px solid #ff0000;margin-left:10px;margin-top:0px;"><a id="addguest" href="#" rel="<?php echo $this->result[0]['id']; ?>" class="signupBtn" style="font-size:14px;padding:5px 10px;">add</a></div>
					</div>
					<script>
					$(document).ready(function(){
$("#addguest").click(function(e){
e.preventDefault();
//alert("dd");
   var id = $(this).attr('rel');
   //alert(id);
    $.ajax({
        type:         'post',
        cache:         false,
        url:          Globals.url+'guest/addtolist',
        data:      "id="+id, /* {'my_flags' : flags,
                  'my_description' : description,
		  		  'my_set' : selectedset_str},*/
        success: function(msg){
		//alert(msg);
			             $("#guest_result").html("guest added");/*.ajaxComplete(function(){
						 $(this).fadeIn("slow").html("guest added");
						 });*/
					      }		
              });
});
});
					</script>
					<?php
					}
					?>
					
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