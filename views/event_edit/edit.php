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
							    <a href="<?php echo URL; ?>create"><span><i class="icon-flag enlarge"></i><i class="icon-plus-sign tiny"></i> </span>Add a new events</a>
								<a href="<?php echo URL; ?>event_edit" class="active"><span><i class="icon-flag enlarge"></i><i class="icon-question-sign tiny"></i></span> Manage my events</a>
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
						<div class="cntr">
						 <iframe name="upload_iframe" id="upload_iframe" style="display:none;"></iframe>
							<form id="pictureForm" name="pictureForm" method="post" autocomplete="off" enctype="multipart/form-data">
							<div id="image_upload"><img class="pictureEvent" src="<?php echo URL."files/users/".Session::get('user_id')."/events/small_".$this->editDetail[0]['imgname'].".jpg"; ?>" alt="events"></div>
							<p><input style="border:1px solid #aaa;width:150px;height:20px;" type="file" name="picture" id="picture" onchange='return ajaxFileUpload(this);' /></p></form>
						</div>
						
						
						<div class="postingBlk">
							<form action="<?php echo URL; ?>event_edit/saveEdit/<?php echo $this->editDetail[0]['id']; ?>" method="post" >
							<div class="controlGroup">
							<a style="font-weight:bold;" href="<?php echo URL; ?>event_edit/edit_guest/<?php echo $this->editDetail[0]['id']; ?>">Edit guest list</a>
							</div>
									<div class="controlGroup">
										<label>Title:</label>
										<span class="control"><input class="" name ="title" type="text" value="<?php echo $this->editDetail[0]['title']; ?>"></span>
									</div>
								 <?php 
								 
								$start  = explode(" ",$this->editDetail[0]['starttime']);
								$stime = $start[0];
								$sstime = explode(":",$stime);
								$shour = $sstime[0];
								$smin = $sstime[1];
								$sdate = $start[1];
								
								$end  = explode(" ",$this->editDetail[0]['endtime']);
								$etime = $end[0];
								$eetime = explode(":",$etime);
								$ehour = $eetime[0];
								$emin = $eetime[1];
								$edate = $end[1];
								 ?>
									
																<div class="divideHalf">
										<div class="controlGroup">
											<label>Date from:</label>
											<span class="control"><i class="icon-calendar"></i><input style="font-size:13pt;" name = "date_from" id="edit_start" class="date" type="text" value="<?php echo $sdate; ?>"></span>
										</div>
										<div class="controlGroup">
											<label>Time from:</label>
											<span class="control" style="padding:5px;">
											<select name="hour1" style="font-size:13pt;color:#828285">
      <?php
         $hour = Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "0");
         for ($x=1; $x <= count($hour); $x++) {
	echo"<option value=\"$x\"";
	if ($x == $shour) {
		echo " selected";
	}
	echo ">".$hour[$x-1]."</option>";
}
         ?>
    </select>:
<select name="minute1" style="font-size:13pt;color:#828285">
       <?php
         $minute = Array("00", "05", "10", "15", "20", "25", "30", "35", "40", "45", "50", "55", "60");
         for ($x=1; $x <= count($minute); $x++) {
	echo"<option value=\"".$minute[$x-1]."\"";
	if ($minute[$x-1] == $smin) {
		echo " selected";
	}
	echo ">".$minute[$x-1]."</option>";
}
         ?>
    </select>
											</span>
										</div>
										<!--<div class="controlGroup">
											<label>Date to:</label>
											<span class="control"><i class="icon-calendar"></i><input style="font-size:12px" id="create_end" class="date" type="text" value=""></span>
										</div>-->
									 </div>
									 
									 
									 
									 
									 
									 <div class="divideHalf">
										<div class="controlGroup">
											<label>Date to:</label>
											<span class="control"><i class="icon-calendar"></i><input style="font-size:13pt;" name ="date_to" id="edit_end" class="date" type="text" value="<?php echo $edate; ?>"></span>
										</div>
										<div class="controlGroup">
											<label>Time to:</label>
											<span class="control" style="padding:5px;">
											<select name="hour2" style="font-size:13pt;color:#828285">
       <?php
         $hour = Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "0");
         for ($x=1; $x <= count($hour); $x++) {
	echo"<option value=\"$x\"";
	if ($x == $ehour) {
		echo " selected";
	}
	echo ">".$hour[$x-1]."</option>";
}
?>
    </select>:
<select name="minute2" style="font-size:13pt;color:#828285">
        <?php
         $minute = Array("00", "05", "10", "15", "20", "25", "30", "35", "40", "45", "50", "55", "60");
         for ($x=1; $x <= count($minute); $x++) {
	echo"<option value=\"".$minute[$x-1]."\"";
	if ($minute[$x-1] == $emin) {
		echo " selected";
	}
	echo ">".$minute[$x-1]."</option>";
}
         ?>
    </select>
											</span>
										</div>
										<!--<div class="controlGroup">
											<label>Date to:</label>
											<span class="control"><i class="icon-calendar"></i><input style="font-size:12px" id="create_end" class="date" type="text" value=""></span>
										</div>-->
									 </div>	 
									<!--<script>
							$(document).ready(function(){
							$(".holder span").click(function(){
							$(".category").val($(".holder #1").text());
							});
							});
							</script>
									<div class="controlGroup">
										<label>Choose category:</label>
										<span class="control"><input class="category" type="text" value="Sport"><i class="icon-caret-down"></i></span>
										<div class="dropDownList">
											<i class="icon-caret-up"></i>
										<div class="holder">
											<span id="1">Item One</span>
											<span>Item One</span>
											<span>Item One</span>
											<span>Item One</span>
											<span>Item One</span>
										</div>
										</div>
									</div>-->
									
									
									<!--<div class="controlGroup">
										<label>Telephone:</label>
										<span class="control"><input class="" type="text" value=""></span>
									</div>
									<div class="controlGroup">
										<label>URL:</label>
										<span class="control"><input class="" type="text" value=""></span>
									</div>-->
										<!--<div class="controlGroup">
										<label>Venue:</label>
										<span class="control"><input class="" type="text" value=""></span>
									</div>-->
									<!--<div class="controlGroup">
										<label>Enter your venue postcode:</label>
										<span class="control"><input class="" type="text" value=""></span>
									</div>-->
									<div class="controlGroup">
										<label>Address:</label>
										<span class="control"><textarea name="address"><?php echo $this->editDetail[0]['address']; ?></textarea></span>
									</div>
									<div class="controlGroup">
										<label>Description:</label>
										<span class="control"><textarea name="description"><?php echo $this->editDetail[0]['description']; ?></textarea></span>
									</div>
									
									<div class="controlGroup">
										<label>Who can see it:</label>
										
                                        <select style="font-size:13pt;color:#828285">
                                       <option>everyone </option>
                                        <option>only guests</option>
                                      </select>
                                         
										 </div>
								
									<div class="controlGroup rTxt">
										<button class="nextBtn"> SUBMIT </button>
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
}else{
die("");
}
?>