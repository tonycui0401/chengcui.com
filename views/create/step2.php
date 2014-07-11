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
							<!--<div><a  style="float:left;" href="<?php echo URL ?>create/new_guest">ADD NEW GUEST</a>
						<!--<a  style="float:right;" href="<?php echo URL ?>event_edit/edit">Back to edit event</a>-->
						<!--</div>-->
						<!--<br/><br/>-->
						<div class="cntr">
						 <iframe name="upload_iframe" id="upload_iframe" style="display:none;"></iframe>
							<form id="pictureForm" name="pictureForm" method="post" autocomplete="off" enctype="multipart/form-data">
							<div id="image_upload"><img class="pictureEvent" src="<?php echo FILE_URL; ?>style/images/eventsImg.jpg" alt=""></div>
							<p><input style="border:1px solid #aaa;width:150px;height:20px;" type="file" name="picture" id="picture" onchange='return ajaxFileUpload(this);' /></p></form>
						</div>
						 
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						<div class="postingBlk">
							<form action="<?php echo URL; ?>create/save" method="post" />
									<div class="controlGroup">
										<label>Title:</label>
										<span class="control"><input name="title" class="" type="text" value=""></span>
									</div>
									
									
									<div class="divideHalf">
										<div class="controlGroup">
											<label>Date from:</label>
											<span class="control"><i class="icon-calendar"></i><input name="date_from" style="font-size:13pt;" id="create_start" class="date" type="text" value=""></span>
										</div>
										<div class="controlGroup">
											<label>Time from:</label>
											<span class="control" style="padding:5px;">
											<select name="hour1" style="font-size:13pt;color:#828285">
        <option value="1" >1</option>
        <option value="2" >2</option>
        <option value="3" >3</option>
        <option value="4" >4</option>
        <option value="5" >5</option>
        <option value="6" >6</option>
        <option value="7" >7</option>
        <option value="8" selected>8</option>
        <option value="9" >9</option>
        <option value="10" >10</option>
        <option value="11" >11</option>
        <option value="12" >12</option>
        <option value="13" >13</option>
        <option value="14" >14</option>
        <option value="15" >15</option>
        <option value="16" >16</option>
        <option value="17" >17</option>
        <option value="18" >18</option>
        <option value="19" >19</option>
        <option value="20" >20</option>
        <option value="21" >21</option>
        <option value="22" >22</option>
        <option value="23" >23</option>
        <option value="0" >0</option>
    </select>:
<select name="minute1" style="font-size:13pt;color:#828285">
        <option value="00" selected>00</option>
        <option value="05" >05</option>
        <option value="10" >10</option>
        <option value="15" >15</option>
        <option value="20" >20</option>
        <option value="25" >25</option>
        <option value="30" >30</option>
        <option value="35" >35</option>
        <option value="40" >40</option>
        <option value="45" >45</option>
        <option value="50" >50</option>
        <option value="55" >55</option>
        <option value="60" >60</option>
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
											<span class="control"><i class="icon-calendar"></i><input name="date_to" tyle="font-size:13pt;" id="create_end" class="date" type="text" value=""></span>
										</div>
										<div class="controlGroup">
											<label>Time to:</label>
											<span class="control" style="padding:5px;">
											<select name="hour2" style="font-size:13pt;color:#828285">
        <option value="1" >1</option>
        <option value="2" >2</option>
        <option value="3" >3</option>
        <option value="4" >4</option>
        <option value="5" >5</option>
        <option value="6" >6</option>
        <option value="7" >7</option>
        <option value="8" >8</option>
        <option value="9" selected>9</option>
        <option value="10" >10</option>
        <option value="11" >11</option>
        <option value="12" >12</option>
        <option value="13" >13</option>
        <option value="14" >14</option>
        <option value="15" >15</option>
        <option value="16" >16</option>
        <option value="17" >17</option>
        <option value="18" >18</option>
        <option value="19" >19</option>
        <option value="20" >20</option>
        <option value="21" >21</option>
        <option value="22" >22</option>
        <option value="23" >23</option>
        <option value="0" >0</option>
    </select>:
<select name="minute2" style="font-size:13pt;color:#828285">
        <option value="00" selected>00</option>
        <option value="05" >05</option>
        <option value="10" >10</option>
        <option value="15" >15</option>
        <option value="20" >20</option>
        <option value="25" >25</option>
        <option value="30" >30</option>
        <option value="35" >35</option>
        <option value="40" >40</option>
        <option value="45" >45</option>
        <option value="50" >50</option>
        <option value="55" >55</option>
        <option value="60" >60</option>
    </select>
											</span>
										</div>
										<!--<div class="controlGroup">
											<label>Date to:</label>
											<span class="control"><i class="icon-calendar"></i><input style="font-size:12px" id="create_end" class="date" type="text" value=""></span>
										</div>-->
									 </div>	 
									 
									 
									 
									 
									 
									 
									
									
									<!--<div class="controlGroup">
										<label>Telephone:</label>
										<span class="control"><input class="" type="text" value=""></span>
									</div>
									<div class="controlGroup">
										<label>URL:</label>
										<span class="control"><input class="" type="text" value=""></span>
									</div>
									<div class="controlGroup">
										<label>Venue:</label>
										<span class="control"><input class="" type="text" value=""></span>
									</div>-->
									<div class="controlGroup" >
									    <label>Postcode:</label>
										<span class="control"><input  name="postal" class="" type="text" value="<?php echo $this->postal; ?>"></span>
									</div>
									<div class="controlGroup">
										<label>Address:</label>
										<span class="control"><textarea name="address"><?php echo $this->address; ?></textarea></span>
									</div>
									<div class="controlGroup">
										<label>Description:</label>
										<span class="control"><textarea name="description">
										</textarea></span>
									</div>
									<div class="controlGroup">
										<label>Who can see it:</label>
										
                                        <select style="font-size:13pt;color:#828285">
                                       <option>everyone </option>
                                        <option>only guests</option>
                                      </select>
                                        
										 </div>
										 <div class="controlGroup" style="display:none;">
										
										<span class="control"><input  name="lati" class="" type="text" value="<?php echo $this->lati; ?>"></span>
									</div>
									<div class="controlGroup" style="display:none;">
									
										<span class="control"><input  name="long" class="" type="text" value="<?php echo $this->long; ?>"></span>
									</div>
									
									<div class="controlGroup rTxt">
										<button class="nextBtn" id="submit_event"> SUBMIT </button>
										<!--<script>
										$(document).ready(function(){
							$("#submit_event").click(function(e){
							e.preventDefault();
							window.location.href="<?php echo URL ?>create/save";
							});
							});
										</script>-->
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