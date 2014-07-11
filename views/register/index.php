
		<section id="bodySection">
			<div class="container">
				<!-- ------------------------- -->
				<div class="registerBlk">
				<div class="row"><h2>Join Geegpost</h2></div>
				<div class="row"><!--<img class="decorate" src="<?php echo FILE_URL; ?>style/images/profile_image_placeholder.jpg" alt="Profile Image">--></div>
				<div class="row" style="color:#ff0000;"><!--<a href="#"><strong>Upload profile picture </strong></a>-->
				<?php 
			if(isset($_POST['signup'])&&($this->error !=""))
			{
				 foreach($this->error as $key => $value)
		      {
		 
		      echo $key . ': ' . $value . "<br/>";
			  
		      }
			}
				?>
				</div>
				<form action="<?php echo URL; ?>register/register" method="post">
					<div class="controlGroup">
						<span class="control"><input class="search" type="text" name="username" value="<?php echo isset($_POST['signup'])? $this->username : ""?>" placeholder="Enter your desire name"></span>
					</div>
					<div class="controlGroup">
						<span class="control"><input class="search" type="text" name="email" value="<?php echo isset($_POST['signup'])? $this->email : ""?>" placeholder="Enter your email"></span>
					</div>
					<div class="controlGroup">
						<span class="control"><input class="search" type="text" name="password" value="<?php echo isset($_POST['signup'])? $this->username : ""?>" placeholder="Enter your password"></span>
					</div>
					<div class="controlGroup rTxt">
						<button class="registerBtn" name="signup">JOIN NOW! </button>
					</div>
				</form>
				
				
				</div>
			
			
				
				
				
				
				<!-- ------------------------- -->
			</div>
		</section>
		