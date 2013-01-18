<?php

/**              FEATURES                    */


error_reporting(E_ALL);
ini_set('display_errors', '1');
   
define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT'] );
define("SITE_HOST", 'http://'.$_SERVER['HTTP_HOST'] );

require_once(SITE_ROOT.'/scalar/php/svg.php');

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Scalar Features</title>
		<meta name="keywords" content="United Kingdom" />
		<meta name="description" content="" />
		<meta name="author" content="Chris Thomas" />
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<script src="../js/util.js"></script>
		<script src="../scalar/js/jsBezier-0.4.js"></script>
		<script src="../scalar/js/svg.js"></script>
		
		<script src="../js/jquery-1.8.3.min.js"></script>
		
		<script> 	
			localStorage["currentPage"] = 'about';
			
			$(document).ready(function(){
					setupPage();
			});		
		</script>
		
		<script src="../scalar/media/svg_compiled/svg_fragments.js"></script>
		
		<?php require(SITE_ROOT.'/elements/analytics.php'); ?>
		
		<?php require(SITE_ROOT.'/elements/fonts.php'); ?>
		<link rel="stylesheet" type="text/css" href="../styles.css">
	
	</head>
	
	<body>
		<page>
			<?php require(SITE_ROOT.'/elements/header.php'); ?>
			
			<section>
				<explain>
					<h1>What can Scalar do for you?</h1>
					
					<p>
					Scalar has a relatively small feature set, as its main goal was to make using SVG as simple as possible. With that bourne in mind, its remit expanded as we developed it for
					our own use on Mapedia. So, the current version can do quite a bit more than was originally envisaged. They key though, is to still keep the general feature set trim, to 
					avoid bloat. So, lets take a look at some of its features...
					</p>
				
					
					<h2>
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'creation','blue',Array(Array('icon_disc',10,10,0,.8),Array('icon_creation',12.5,12.5,0,.75,false)),['keyline',1,3,6,Array(20,100,60),1])">
						Creation
					</h2>
					
					<ul>
						<li>Simply add SVG icons on your websites from a structured visual library.</li>
						<li>Create complex layered/composite icons, simply by stacking icons in your definition.</li>
						<li>Control the position and angle of each icon layer.</li>
					</ul>
				
					<h2>
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'effects','blue',Array(Array('icon_disc',10,10,0,.8),Array('icon_star',22,18,0,.4,false),Array('icon_star',56,38,0,.25,false),Array('icon_star',38,57,0,.2,false)),['keyline',1,3,6,Array(20,100,60),1])">
						Effects
					</h2>
					
					<ul>
						<li>Apply commonly required effects to each icon, which include...</li>
						<li><i>Drop Shadow</i></li>
						<li><i>Keyline</i></li>
						<li><i>Glow</i></li>
						<li><i>Blur</i></li>
						<li><i>Greyscale</i></li>

						<li>Define opacity levels for each effect, for when it is in-active.</li>
					</ul>
					
					<h2>
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'control','blue',Array(Array('icon_disc',10,10,0,.8),Array('icon_activate',23,23,0,.5,false)),['keyline',1,3,6,Array(20,100,60),1])">
						Control
						
					</h2>
					
					<ul>
						<li>You can specify which layers of a composite icon have the effect applied.</li>
						<li>Toggle the effect applied to single icons On/Off ( with speed control ).</li>
						<li>Toggle the effect applied to icon groups On/Off ( with speed control ).</li>
						<li>Icons can be members of ANY number of groups</li>
					</ul>
					
				</explain>
			    
				<?php require(SITE_ROOT.'/elements/nav.php'); ?>
			</section>
		</page>
	</body>
</html>





	

