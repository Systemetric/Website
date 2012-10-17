<?php

class Carousel {
	private $_images = array();
	private $_width = 445;
	private $_height = 200;

	public function addImage($title, $src) {
		$this->addImageObj(new Image(htmlentities($title), htmlentities($src)));
	}

	public function addImageObj($img) {
		$this->images[] = $img;
	}

	public function printCarousel() {
		$count = count($this->images);
		echo '<link href="style/carousel.css" rel="stylesheet" type="test/css" />
			<script type="text/javascript">
				var cwidth = ' . $this->_width . ';
				var cheight = ' . $this->_height . ';
				var count = ' . $count . ';
			</script>
			<script type="text/javascript" src="gallery.js"></script>';

		echo '<ul id="carousel">';
		for($i = 0; $i < $count; $i++) {
			$img = $this->images[$i];
			echo '<li id="cimg' . $i . '"><img src="' . $img->src . '" alt="' . $img->title . '"></li>';
		}
		echo '</ul>';
	}

	public function setSize($w, $h) {
		if($w > 0)
			$_width = $w;
		if($h > 0)
			$_height = $h;
	}

	public function addImagesFromFolder($dir) {
		foreach(glob($dir . "/*") as $img) {
			$this->addImage(preg_replace('/([a-z])([A-Z])/', '\1 \2', preg_replace('/\.\w+$/', '', $img)), $img);
		}
	}
}

class Image {
	public $title = "";
	public $src = "";

	public function __construct($t, $s) {
		$this->title = $t;
		$this->src = $s;
	}
}
