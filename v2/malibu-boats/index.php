<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"><link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../stylesheet.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
</head>
<body>

	<?php include("../includes/nav.php"); ?>
	
	<div class="project-description-panel">
		<h1>Malibu Boats</h1>
		<p>This is a description about the project with Malibu Boats.</p>
		<p><strong>Project:</strong> Malibu Boats Brochure<br />
		<strong>Role:</strong> Art Director / Designer</p>
		<a class="button" href="">Get in touch</a>
		<div class="down-arrow"></div>
	</div>
	
	<section class="project airstream">
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/malibu1.jpg" alt="Airstream" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/malibu2.jpg" alt="Airstream" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/malibu3.jpg" alt="Airstream" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/malibuad1.jpg" alt="Airstream" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/malibuad2.jpg" alt="Airstream" />
	</section>
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			//nav();
			resizeCover('.project-description-panel');
			$('.project-description-panel').find('.down-arrow').on('click', function() {
				$('html, body').animate({
    				scrollTop: $('.project-description-panel').next().offset().top
				}, 1000);
			});
		});
	</script>
</body>
</html>