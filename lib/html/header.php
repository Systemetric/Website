<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<link rel="stylesheet" href="style/global.less">
		<link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
	</head>

	<body>
		<div id="wrap">
			<div id="header">
				<div>
					<a class="logo" href="/">
						<img src="images/logo.png" alt="Systemetric Logo">
					</a>

					<div class="slogan">
						Don't walk<br>
						Do the robot
					</div>

					<div id="nav">
						<?php
						// Print out all our nav buttons
						$buttons = array(
							'home' => 'Home',
							'blog' => 'Blog',
							'about' => 'About Us',
							'robots' => 'The Robots',
							'photos' => 'Photos',
							'resources' => 'Resources',
							'getinvolved' => 'Get Involved',
							'contact' => 'Contact Us'
						);

						foreach($buttons as $link => $text) {
							if(Page::GET('page') == $link) {
								echo '<a class="current" href="/' . $link . '">' . $text . '</a>';
							} else {
								echo '<a href="/' . $link . '">' . $text . '</a>';
							}
						}
						?>
					</div>
				</div>
			</div>

			<div id="main">