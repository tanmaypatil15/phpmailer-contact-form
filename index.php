<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact | AeroNew Logistics Pvt. Ltd.</title>
	<link href="css/contact.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<!--<script type="text/javascript" src="js/contact_mail.js"></script>-->
</head>

<body>
	<header id="MobileHeader">
		<div class="MenuLogoContact">
			<div onclick="openNav()" class="OpenMenu">&#9776;</div>
			<div class="MobileMainLogo"><a href="#"><img src="#"></a></div>
			<div class="NavCall"><a href="tel:#####"><i class="fa fa-phone" aria-hidden="true" ></i> Call Us</a></div>
		</div>
		
		<div class="HiddenMenu" id="NavLinks">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div class="NavLinksContent">
				<a href="index.php">Home</a>
				<a href="#">Services</a>
				<a href="#">About Us</a>
				<a href="contact.php">Contact</a>
			</div>
		</div>
	</header>
	
	<header id="DesktopHeader">
		<div class="SocialContact">
			<div class="HeaderContact">
				<p>Email ID - #####</p>
				<p>Phone No. - #####</p>
			</div>
			<div class="HeaderSocialMedia">
				<a href="#"><img src="#"></a>
				<a href="#"><img src="#"></a>
				<a href="#"><img src="#"></a>
				<a href="#####"><img src="#"></a>
			</div>
		</div>
		<div class="LogoMenu">
			<div class="DesktopMainLogoContainer"><a href="#"><img src="#" id="DesktopMainLogo"></a></div>
			<nav class="NavMenu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">About</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<div class="MainContainer">
		
		<div class="contactcontainer">
			<div class="containerbox call">
				<a href="#" class="containertitle contact">Contact no :</a>
				<a href="#####"><h4>#####</h4></a>
			</div>
			<div class="containerbox mail">
				<a href="#" class="containertitle email">Email Id:</a>
				<h4>#####</h4>
			</div>
		</div>
		
		<div class="addresscontainer">
			<div class="inneraddresscontainer">
				<div class="containerbox add">
					<a href="#" class="containertitle address">Address:</a>
					<h4>#####</h4>
				</div>
				<a href="#" id="mapopenachor"><h4 id="mapopen" >open in map</h4></a>
			</div>
		</div>
		
		
		<?php 
		if(isset($_POST['sendmail'])) {
			require 'PHPMailerAutoload.php';
			require 'credential.php';

			$mail = new PHPMailer;
			// $mail->SMTPDebug = 4;                // Enable verbose debug output
			$mail->isSMTP();                        // Set mailer to use SMTP
			$mail->Host = '#';  										// Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                 // Enable SMTP authentication
			$mail->Username = EMAIL;                // SMTP username
			$mail->Password = PASS;                 // SMTP password
			$mail->SMTPSecure = 'tls';              // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                      // TCP port to connect to

			$mail->setFrom($_POST['email'], $_POST['name']);
			$mail->addAddress(EMAIL, NAME);
			$mail->addReplyTo($_POST['email'], $_POST['name']);			
			$mail->Subject = 'Enquiry Form for Legame Logistics';
			$mail->isHTML(false);
			$mail->Body = <<<EOT
			Full Name: {$_POST['name']}
			Email Address: {$_POST['email']}
			Phone Number: {$_POST['contact']}
			Message: {$_POST['message']}
			EOT;

			if (!$mail->send()) {
				$msg = 'Sorry, something went wrong. Please try again later.';
				} 
				else {
					$msg = 'Message sent! Thanks for contacting us.';
				}
			}
			else {
				$msg = 'Share it with us!';
		}?>
		<div class="formcontainer" id="mailform">
			<div class="innerformcontainer">
				<form method="post" action="">
					<div class="inputbox">
						<h5>Name</h5>
						<input type="text" name="name"  placeholder="Your Name..." >
					</div>
					<div id="coninlline">
						<div class="inputbox" >
							<h5>E-mail</h5>
							<input type="text" name="email" placeholder="Your E-mail .. abc@xyz.com" id="coninlline1">
						</div>
						<div class="inputbox">
							<h5>Phone No.</h5>
							<input type="text" name="contact" placeholder="Your Contact Number" id="coninlline2">
						</div>
					</div>
					<div class="inputbox">
						<h5>Subject</h5>
						<input type="text" name="subject" placeholder="Enter Subject of query..">
					</div>
					<div class="inputbox">
						<h5>Message</h5>
						<textarea type="text" name="message" rows="5" placeholder="Feel free to say or ask anything....."></textarea>
					</div>
					<input type="checkbox" name="agree" value="CheckAgree"><label for="vehicle1">I agree that my submitted data is being collected and stored.</label><br>
					<div class="submitbox"><input type="submit" value="Send" name="sendmail" class="btn" ></div>
				</form>
			</div>
		</div>
		
		<div class="mapcontainer">
			<div class="innermapcontainer" id="map">
				#####
			</div>
		</div>
		
	</div>
	
	<footer id="DesktopFooter">
		<div class="contact">
			<img src="#"><h6>#####</h6>
			<img src="#"><h6>#####</h6>
		</div>
		<h6>AeroNew LOGISTICS PVT. LTD. &#169; ALL RIGHTS RESERVED</h6>
		<h6>#####</h6>
	</footer>
	
	<footer id="MobFooter">
		<div class="contact">
			<div><img src="#"><span>CALL US<br></span>#####</div>
			<div><img src="#"><span>EMAIL US<br></span>#####</div>
		</div>
		<p>AeroNew LOGISTICS PVT. LTD. &#169; ALL RIGHTS RESERVED</p>
		<p>#####</p>
	</footer>
	
	<script>
		function openNav() {
			document.getElementById("NavLinks").style.width = "100%";
		}

		function closeNav() {
			document.getElementById("NavLinks").style.width = "0%";
		}
	</script>

</body>
</html>

