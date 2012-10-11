					</div>
				<div id="footer">
					<div id="footer-child">
						Thanks to our sponsors:<br>
						<div id="sponsors">
							<?php
							// Print out all our sponsor logos
							$sponsors = array(
								'icsputnik.ru/en' => 'sputnik.png',
								'www.caterpillar.com' => 'caterpillar.png',
								'www.arm.com' => 'arm.png',
								'www.sytrix.com' => 'citrix.png',
								'www.trendmicro.com' => 'trend.png',
								'www.nanoracksllc.com' => 'nanoracks.png',
								'dspace.dial.pipex.com/town/close/fj73/metapurple/index.htm' => 'metapurple.png',
								'www.marshl-ls.com' => 'marshall.png'
							);

							foreach($sponsors as $link => $image) {
								echo '<a href="http://' . $link . '"><img src="images/sponsors/' . $image . '" alt="' . $link . '"></img></a>';
							}
							?>
						</div>
						<div id="copyright">
							© Copyright Hills Road Sixth Form College 2012
						</div>
						<div id="british">
							Proudly British <img src="images/flag.png" alt="Proudly British"></img>
						</div>
					</div>
				</div>
		<!-- Fetch jQuery from CDN, our JS from the server -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

		<?php
		// Fetch all our own JS
		$files = glob('javascript/*.js');

		// Loop through matched files and print `<script>` tags
		if(!empty($files))
			foreach($files as $file)
			echo '<script type="text/javascript" src="' . $file . '"></script>';
		?>
	</body>
</html>