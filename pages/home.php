
<div id="homepage">
	<div id="top">
		<h1>Welcome to Systemetric - Team 759</h1>
			<?php
				include_once("lib/carousel.php");
				$carousel = new Carousel();
				$carousel->addImagesFromFolder("images/carousel");
				$carousel->printCarousel();
			?>
		<div id="introduction">
		<p>Systemetric is a Robotics Team comprised of students aged 16-18 from Hills Road Sixth Form College in Cambridge, UK. We have been competing in the FIRST Robotics Competition since 2002, becoming the first British team to compete, and since then have competed every year at the competition regional in New York City. We also mentor FIRST Lego League teams in the East of England and often take part in other smaller robotics competitions.</p>
		<p>
			<a href="">Read More</a>
		</p>
		</div>
	</div>


	<div id="bottom">
		<div class="halfContent">
			<h3>Latest from out Blog</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum leo viverra ipsum laoreet non iaculis massa dictum. Aenean ac orci lacus, sed placerat nunc. Morbi at ipsum lectus, at sollicitudin sapien. Sed semper, urna nec consequat adipiscing, diam quam congue lacus.</p>

		</div>
		<div class="halfContent">
			<h3>Links</h3>
			<p>
				<a href="" target="_blank">
					<img src="/images/first.png"/>
				</a>
				<a href="" target="_blank">
					<img src="/images/hrsfc.png" />
				</a>
			</p>
			<p>
				<a href="" target="_blank">
					<img src="/images/sturobo.png" />
				</a>
			</p>
		</div>
	</div>
</div>

<!--

<h1>Welcome to Systemetric - Team 759</h1>
<div class="contentBox genericIntro">
	<div class="contentBox half carousel">
		<img src="/images/carousel.png" />
	</div>
	<div class="contentBox half introduction">
		<p>Systemetric is a Robotics Team comprised of students aged 16-18 from Hills Road Sixth Form College in Cambridge, UK. We have been competing in the FIRST Robotics Competition since 2002, becoming the first British team to compete, and since then have competed every year at the competition regional in New York City. We also mentor FIRST Lego League teams in the East of England and often take part in other smaller robotics competitions.</p>
		<p>Read more about us...</p>
	</div>
</div>
<div style="width:70%;margin:250px auto;">
	<div class="contentBox half layoutSplit" style="float:left;">
		<h3>Latest from out Blog</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum leo viverra ipsum laoreet non iaculis massa dictum. Aenean ac orci lacus, sed placerat nunc. Morbi at ipsum lectus, at sollicitudin sapien. Sed semper, urna nec consequat adipiscing, diam quam congue lacus.</p>
	</div>	

	<div class="contentBox half layoutSplit" style="float:right;">
		
	</div>
</div>
-->
