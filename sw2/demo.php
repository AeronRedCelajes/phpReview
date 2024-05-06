<html>
	<head>
		<title>Demo Pic</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<script
		src="https://code.jquery.com/jquery-3.7.1.js"
		integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
		crossorigin="anonymous"></script>
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<h1>Demo Pic</h1>
		<div class="container">
			<div id="mycarousel" class="carousel slide" data-ride="carousel" style="width:1000px;">
				<ol class="carousel-indicators">
					<?php
						
						$folder = 'pic/';
						$images = glob($folder.'*.{jpg,jpeg,png,gif}',GLOB_BRACE);
					
						$x = 0;
						foreach($images as $image){
							if($x == 0){

								echo "<li data-target='#mycarousel' data-slide-to='0' class = 'active'></li>";

							}
							else{

								echo "<li data-target='#mycarousel' data-slide-to='$x'></li>";
								
							}
							$x++;
						}
					
					?>
				</ol>
				<div class="carousel-inner">
				
					<?php

						$y = 0;
						foreach($images as $image){
							if($y == 0){
								echo"
								<div class='item active'>
									<img src='$image'>
									<div class='carousel-caption'>
										<h3>Beautiful Minecraft Houses</h3>
										<p>Using Shaders</p>
									</div>
								</div>
								";
							}else{
								echo"
								<div class='item'>
									<img src='$image'>
									<div class='carousel-caption'>
										<h3>More Beautiful Minecraft Houses</h3>
										<p>Using Shaders</p>
									</div>
								</div>
								";
							}
							$y++;
						}

					?>

					<a class="left carousel-control" href="#mycarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#mycarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
	</body>
</html>