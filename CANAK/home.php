<!DOCTYPE html>
<html>
	<head>
		<title>CANAK University</title>
		<link rel ="stylesheet" href = "style/home.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
		<div class = "nav">
		<div class = "icon">CANAK UNIVERSITY</div>		
		<ul>
			<li class = "active"><a href="#">Home</a></li>
			<li><a href="PROJECT/StdntS.php">Services</a></li>
			<li><a href="../ticket page/faq.php">FAQs</a></li>
			<li><a href="../ticket page/maps.php">Map</a></li>
            
          
			<!--<a href="profile.inc.php">
                <button id="login"> LOG IN</button>
                <button id="logout"> LOG OUT</button>
            </a>-->

		</ul>
			<div class = "space">
			</div>
		<ul>
			<li class = "Profile"><a href="Canak Uni/profile.php"></a></li>
		</ul>
		</div>
		
		<img src = "images/logo new 2.png" class="logo">
		
		<section class = "content">
		
		<section class = "Notices">
		
			
			<h2>Notice for Faculty of Computing</h2>
			<center><p>

			<?php
			
				include("PROJECT/reviwe.php");
			
			?>
			</p></center>
			
		</section>
		<section class = "about lib">
			<img src = "images/online lib.webp" class = "map-image">
			<h1>Online Library</h1>
			<a href="online library.php">View</a>
            
		</section>
		<section class = "about">
			<img src = "images/sup tik.avif" class = "about-image">
			<h1>Support Tickets</h1>
			
			<a href="ticket page/ticketpage.php">View </a>
		</section>
		
		</section>
		
		<section class = "welcome">
			
			<h1>Welcome to CANAK UNIVERSITY</h1>
		</section>
		
		<div class = "footer">
				<div class = "col-1">
				<a href ="akash/feedback.php">Provide Feedback</a>
				<div class = "row-1">
				info@CANAK.lk
				</div>
				<div class = "row-2">
				Copyright 2024 © CANAK. All Rights Reserved.
				</div>
				</div>
				<div class = "col-2">
					<div class = "imgarea">
					<img src = "images/QR-CODE.jpg" div class = "qr-code">
					</div>
					<a href="facebook.com" class="fa fa-facebook"></a>
					<a href="twitter.com" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google"></a>
					<a href="instagram.com" class="fa fa-instagram"></a>
					<a href="linkedin.com" class="fa fa-linkedin"></a>
				</div>
			</div>
		</div>
	</body>
</html>