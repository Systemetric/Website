<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<link rel="stylesheet" href="/style.css">
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
				Main
			</div>
		</div>

		<div id="footer">
			<div>
				Footer
			</div>
		</div>

		<!-- Fetch jQuery from CDN, our JS from the server -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

		<?php
		// Fetch all our own JS
		$files = glob('javascript/*.js');

		// Loop through matched files and print `<script>` tags
		foreach($files as $file) {
			echo '<script type="text/javascript" src="' . $file . '"></script>';
		}
		?>
	</body>
</html>