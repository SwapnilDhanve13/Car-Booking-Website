<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Wallpapers</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Responsive 3D Panel Layout" />
        <meta name="keywords" content="responsive, css3, jquery, plugin, layout, web development, 3D" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:100,500' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/modernizr.custom.69142.js"></script> 
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/nojs.css" />
		</noscript>
    </head>
    <body>
        <div class="container">		
			<ul id="sg-panel-container">
				<li data-w="60" data-h="55">
					<img title="Lamborghini" src="images/1.jpg" data-rotate-x="50" />
					<img title="Ferrari" src="images/2.jpg" data-rotate-y="-50" />
					<img title="Bugatti" src="images/3.jpg" data-rotate-x="50" data-translate-z="-700" />
					<div data-translate-z="-500" >
						<div class="sg-content">
							
							
						</div>
					</div>
				</li>
				<li data-w="100" data-h="40">
					<img title="Mercielago" src="images/4.jpg" data-rotate-x="50" />
					<img title="Aventador" src="images/5.jpg" data-rotate-y="-50" />
				</li>
				<li data-w="35" data-h="65">
					<img title="Spider" src="images/6.jpg" data-translate-x="-300"/>
					<img title="Cadillac" src="images/7.jpg" data-translate-y="300"/>
					<img title="Sports GT" src="images/8.jpg" data-translate-y="300"/>
					<img title="Maserati" src="images/9.jpg" data-translate-x="300"/>
				</li>
				<li data-w="60" data-h="55">
					<img title="Bentley" src="images/10.jpg" data-rotate-x="50" />
					<img title="Gallardo" src="images/11.jpg" data-rotate-y="-50" />
					<div>
						<div class="sg-content">
							
							
						</div>
					</div>
					<img title="Porsche" src="images/12.jpg" data-rotate-x="50" data-translate-z="-700" />
				</li>
				<li data-w="40" data-h="100">
					<img title="P539" src="images/13.jpg" data-rotate-x="50" />
					<img title="F10" src="images/14.jpg" data-rotate-x="50" data-translate-z="-700" />
				</li>
				<li data-w="30" data-h="100">
					<img title="Grexit" src="images/21.jpg" data-rotate-x="50" />
					<div data-rotate-y="50">
						<div class="sg-content">
							
							
							
							
							
							
						</div>
					</div>
				</li>
				<li data-w="100" data-h="100">
					<img title="Bugatti" src="images/22.jpg" data-rotate-y="50" data-translate-z="-1700" />
				</li>
				<li data-w="50" data-h="50">
					<img title="Grexit" src="images/23.jpg" data-translate-z="250" />
					<img title="Godwottery" src="images/24.jpg" data-translate-z="250" />
					<img title="Somniloquent" src="images/25.jpg" data-translate-z="250" />
					<img title="Etiquette" src="images/26.jpg" data-translate-z="250" />
				</li>
				<li data-w="100" data-h="40">
					<div>
						<div class="sg-content sg-columns">
							
							
							
							
						</div>
					</div>
					<img title="Spider" src="images/27.jpg" data-rotate-y="-50" />
				</li>
				<li data-w="100" data-h="100">
					<img title="Luxury" src="images/28.jpg" data-rotate-z="20" data-translate-z="700" />
				</li>
				<li data-w="50" data-h="50">
					<img title="Cadillac" src="images/29.jpg" data-rotate-y="90" data-translate-z="-700" />
					<div data-rotate-y="50">
						<div class="sg-content">
							
							
						</div>
					</div>
					<div data-rotate-y="50">
						<div class="sg-content">
							
							
							</div>
						</div>
					<img title="Porsche" src="images/30.jpg" data-rotate-y="-90" data-translate-z="-700" />
				</li>
			</ul>
			
			<!-- Codrops links -->	
			<span class="codrops-demo-link">
				<a href=>
					
				</a>
			</span>
			<span class="codrops-demo-link right">
				<a href=>
					
				</a>
			</span>
			
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="js/jquery.imagesloaded.js"></script>
		<script type="text/javascript" src="js/jquery.ba-dotimeout.min.js"></script>
		<script type="text/javascript" src="js/jquery.gridgallery.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				$( '#sg-panel-container' ).gridgallery();
			
			});
		</script>
    </body>
</html>