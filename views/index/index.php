<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>Outpost</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="#" />
    <meta name="author" content="">
    <link href="style/style.css" rel="stylesheet">
	<link rel="stylesheet" href="style/css/font-awesome.min.css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="style/css/font-awesome-ie7.min.css">
	<![endif]-->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>
	<div id="wrapper" class="home">
			<section>
		<div id="headerSection">
			<div class="container">
				<a id="logo" href="<?php echo URL; ?>"><img src="<?php echo FILE_URL; ?>style/images/logo.png" alt="logo"></a>
				<div class="hdrBtnWrapper">
					<a class="loginBtn" href="<?php echo URL; ?>">LOG IN</a>
					<a class="signupBtn" href="<?php echo URL; ?>register">SIGN UP</a>
				</div>
				<!--<div class="topMenuH"><a href=""><i class="icon-mobile-phone"></i> Download our apps</a></div>-->
			</div>
		</div>
		</section>
		<section id="bodySection">
			<div class="container">
				<div class="liquid">
					<div class="row cntr">
					<h2>Discover events and place in london</h2>
					</div>
					<div class="row">
						<div class="searchBlk">
							<form>
								<div class="controlGroup event">
									<label>I am searching for</label>
									<span class="control"><i class="icon-search"></i><input class="search" type="text" value="Cinema"></span>
								</div>
								<div class="controlGroup location">
									<label>Location:</label>
									<span class="control"><i class="icon-map-marker"></i><input class="location" type="text" value="City of London"><i class="icon-caret-down"></i></span>
									<div class="dropDownList">
											<i class="icon-caret-up"></i>
										<div class="holder">
											<span>Item One</span>
											<span>Item One</span>
											<span>Item One</span>
											<span>Item One</span>
											<span>Item One</span>
										</div>
										</div>
								</div>
								<div class="controlGroup date">
									<label>Date from:</label>
									<span class="control"><i class="icon-calendar"></i><input class="calendar" type="text" value="March 11, 2013"></span>
								</div>
								<div class="controlGroup date">
									<label>Date to:</label>
									<span class="control"><i class="icon-calendar"></i><input class="calendar" type="text" value="March 13, 2013"></span>
								</div>
								<div class="controlGroup searchBtn">
									<button class="btn">SEARCH </button>
								</div>
							</form>
						</div>
					</div>
					<div class="row">
					<h4 class="upcomming">
						<!--<div class="rt"><a href="#">Promoting your events</a></div>-->
						<div class="">Upcoming events in London</div>
					</h4>
					</div>
					<div class="row">
						<ul class="popularMenu">
							<li class="active"><a href="#">Recommended </a></li>
							<li><a href="#">Art (50)</a></li>
							<li><a href="#">Theater (45)</a></li>
							<li><a href="#">Nightlife (24)</a></li>
							<li><a href="#">Sports (19)</a></li>
							<li><a href="#">Music (18)</a></li>
						</ul>
					</div>
					<div class="thumb">
					<div class="row cntr">
						<div class="span5">
							<img src="<?php echo FILE_URL; ?>style/images/gmic-1.jpg" height="120" alt="image1">
							<div class="caption">
							<h4>Fote</h4>
							<p>Senate House Malet St<br><br></p>
							<div class="rTxt"><a href="#">View</a></div>
							</div>
						</div>
						<div class="span5">
							<img src="<?php echo FILE_URL; ?>style/images/gmic-0.jpg" height="120" alt="image1">
							<div class="caption">
							<h4>Master Investor 2013</h4>
							<p>52 Upper St<br><br></p>
							<div class="rTxt"><a href="#">View</a></div>
							</div>
						</div>
						<div class="span5">
							<img src="<?php echo FILE_URL; ?>style/images/gmic-3.jpg" height="120" alt="image1">
							<div class="caption">
							<h4>Interiors LDN</h4>
							<p>1 Western Gateway<br><br></p>
							<div class="rTxt"><a href="#">View</a></div>
							</div>
						</div>
						<div class="span5">
							<img src="<?php echo FILE_URL; ?>style/images/gmic-4.jpg"  height="120" alt="image1">
							<div class="caption">
							<h4>M2M Conference</h4>
							<p>145-157 St.John St<br><br></p>
							<div class="rTxt"><a href="#">View</a></div>
							</div>
						</div>
						<div class="span5">
							<img src="<?php echo FILE_URL; ?>style/images/gmic-6.jpg"  height="120" alt="image1">
							<div class="caption">
							<h4>Wayra</h4>
							<p>10 Capper St<br><br></p>
							<div class="rTxt"><a href="#">View</a></div>
							</div>
						</div>
					</div><br class="clr">
					</div>
					<div class="rTxt">
					<a href="#"><strong>more...</strong></a>
					</div>
				</div>
				
				<div class="row cntr">
					<div class="downloadBlk">
						<div class="contentHolder">
							<a href="#"><img src="<?php echo FILE_URL; ?>style/images/contact_us_mobile.png" alt="application"></a>
						</div>
						<div class="contentHolder"><br><br><br>
							<h2><img src="<?php echo FILE_URL; ?>style/images/downloads_free_aps.png" alt="application"></h2>
							<p>
							Lorem ipsum dolor gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit. 
							</p>
							<br>
							<p>
							<a href="#"><img src="<?php echo FILE_URL; ?>style/images/androids_apps_download.png" alt="androids apps"></a>&nbsp;&nbsp;
							<a href="#"><img src="<?php echo FILE_URL; ?>style/images/app_application.png" alt="apple apps"></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>
		
	
</body>
</html>