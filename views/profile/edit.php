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
						    <iframe name="upload_iframe_edit" id="upload_iframe_edit" style="display:none;"></iframe>
							<form id="pictureForm" name="pictureForm" method="post" autocomplete="off" enctype="multipart/form-data">
							<div id="image_upload_edit"><img class="pictureEvent" src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" alt=""></div>
							<p><input style="border:1px solid #aaa;width:150px;height:20px;" type="file" name="picture" id="picture" onchange='return ajaxFileUploadEdit(this);' /></p></form>
						</div>
						
						
						<div class="postingBlk">
							<form action="<?php echo URL; ?>profile/editUserData" method="post" />
							<a href="<?php echo URL; ?>profile/account/<?php echo $this->user_detail[0]['user_id']; ?>">Edit your account</a>
							<div class="controlGroup">
							
							<?php //echo Hash::create('md5', '000000', HASH_PASSWORD_KEY); ?>
							
										<label style="color:#aaa">Gender:</label>
										
                                        <select style="font-size:13pt;color:#828285" name="gender">
                                       <option value="male">male</option>
                                        <option value="female">female</option>
                                      </select>
                                         
										 </div>
										 <div class="controlGroup">
										<label style="color:#aaa">Birthday:</label>
										<select name="day" style="font-size:13pt;color:#828285">
        <?php
       


//$types = $geo_result->address_components[1]->types[0];

//echo $formatted_address."<br/>";


 
        $days1 = Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31");
      echo "<option>Day</option>";
	  for ($x=1; $x <= count($days1); $x++) {
	
	echo "<option value=\"$x\"";
	echo ">".$days1[$x-1]."</option>";
}
?>
        
    </select><select name="month" style="font-size:13pt;color:#828285">
        <?php
		echo "<option>Month</option>";
         $month1 = Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
          for ($x=1; $x <= count($month1); $x++) {
		
	echo"<option value=\"$x\"";
	echo ">".$month1[$x-1]."</option>";
}
        ?>
    </select> <select name="year" style="font-size:13pt;color:#828285">
        <?php
			echo "<option>Year</option>";
        for ($x=2013; $x>=1900; $x--) {
	
	echo "<option value=\"$x\"";
	echo ">$x</option>";
}
        ?>
    </select>
										 </div>
									<div class="controlGroup">
										<span class="control"><input class="" type="text" name="contact_name" value="<?php echo $this->user_detail[0]['contact_name']; ?>" placeholder="Contact name"></span>
									</div>
									
									<!--<div class="controlGroup">
										<span class="control"><input class="" type="text" value="" placeholder="password"></span>
									</div>-->
									
									
									<!--<div class="controlGroup">
										<span class="control"><input class="" type="text" value="" placeholder="Contact name" ></span>
									</div>-->
									<div class="controlGroup">
										<span class="control"><textarea name="about">about your self</textarea></span>
									</div>
									
									<div class="controlGroup">
										<span class="control"><input name="contact_number" class="" type="text" value="<?php echo $this->user_detail[0]['tel']; ?>"  placeholder="Contact number" ></span>
									</div>
									<div class="controlGroup">
										<span class="control"><input name="website" class="" type="text" value="" placeholder="Website"></span>
									</div>
									<div class="controlGroup">
										<span class="control"><input name="contact_email" class="" type="text" value=""  placeholder="Contact email" ></span>
									</div>
									<!--<div class="controlGroup">
										<label style="color:#aaa">Who can see my profile:</label>
										
                                        <select style="font-size:13pt;color:#828285">
                                       <option>everyone </option>
                                        <option>only guests</option>
                                      </select>
                                         
										 </div>-->
									<div class="controlGroup rTxt">
										<input type="submit" class="nextBtn" value="SAVE" />
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