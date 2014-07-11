
		<script>
		$(document).ready(function(){
		$("#wrapper").addClass("homeBg");
		});
		</script>
		<section id="bodySection">
			<div class="container">
			<div class="innerMdlBlk">
			<br>
			<br>
			<div id="loginLogoWrapper"><img src="<?php echo FILE_URL; ?>style/images/login_logo.png" alt=""></div>
			<div class="innerWrapper">
			<div class="row" style="color:#ff0000;"><!--<a href="#"><strong>Upload profile picture </strong></a>-->
				<?php 
			if(isset($_POST['login'])&&($this->error !=""))
			{
				 foreach($this->error as $key => $value)
		      {
		 
		      echo $key . ': ' . $value . "<br/>";
			  
		      }
			}
			
			    echo $this->loginerror;
				?>
				</div>
			<h1>Login with email</h1>
			<form method="post" action="<?php echo URL; ?>login">
				<div class="controlGroup">
					<label>Email:</label>
					<span class="control"><input class="" name="email" type="text" placeholder="enter your Email" value="<?php echo isset($_POST['login'])? $this->email : ""?>"></span>
				</div>
				<div class="controlGroup">
					<label>Password:</label>
					<span class="control"><input class="" name="password" type="password" placeholder="Enter your password" value="<?php echo isset($_POST['login'])? $this->password : ""?>"></span>
				</div>

				<div class="controlGroup rTxt">
					<a class="signupBtn" href="<?php echo URL; ?>register">SIGN UP</a>
					<button class="nextBtn" name="login"> LOG IN </button>
				</div>
				<div style="height:20px;">
				<a href="<?php echo URL ?>login/forgot" id="forgot" style="float:left;">forgot your password</a>
				</div>
			</form>
			<!--<a id="fb" href="#"><img src="<?php echo FILE_URL; ?>style/images/facebookBtn_long.png" alt="facebook"></a>-->
			

			</div>
			</div>
		</section>
		</div>
		

