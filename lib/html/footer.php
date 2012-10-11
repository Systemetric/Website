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
		if(!empty($files))
			foreach($files as $file)
			echo '<script type="text/javascript" src="' . $file . '"></script>';
		?>
	</body>
</html>