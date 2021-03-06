<?php

DEFINE(PAGE_NAME,'The SVG Framework'); // Homepage


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
		<title>Scalar SVG Framework</title>
		<meta name="keywords" content="United Kingdom" />
		<meta name="description" content="" />
		<meta name="author" content="Chris Thomas" />
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<?php require(SITE_ROOT.'/elements/js_code.php'); ?>
		
		<script> 	
			localStorage["currentPage"] = 'about';
			
			$(document).ready(function(){
					setupPage();
			});		
		</script>
		
		<script src="/scalar/media/svg_compiled/svg_fragments.js"></script>
		
		<?php require(SITE_ROOT.'/elements/analytics.php'); ?>	
		<?php require(SITE_ROOT.'/elements/fonts.php'); ?>
		<?php require(SITE_ROOT.'/elements/styles.php'); ?>
	
	</head>
	
	<body>
		<page>
			<?php require(SITE_ROOT.'/elements/header.php'); ?>
			
			<section>
				<explain>
					<h1>What is Scalar?</h1>
					
					<iconset>				
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'hover1_Shadow','blue',Array(Array('browser_ie_nine',15,15,0,.7)),['dropShadow',0,1,6,7,0.8,Array(135,20,1),.5])">
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'hover1_Keyline','lemon',Array(Array('browser_chrome',20,20,0,.6)),['keyline',0,2,0,Array(0,100,100),.4])">
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'hover1_Glowy','red',Array(Array('web_html5',20,20,0,.6)),['glow',0,1.3,.5])">		
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'hover0_Blurry','green',Array(Array('icon_note',12.5,12.5,0,.75),Array('icon_disc',50,15,0,.3),Array('icon_clock',50,15.5,0,.3)),['gaussianBlur',1,3,0.6])">
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'hover0_Grey','black',Array(Array('browser_firefox',17.5,17.5,0,.65)),['greyScale',1,1,.4])">
					</iconset>
					
					<p>Scalar is a simple framework for using SVG icons on a website. I ( Chris Thomas ) developed Scalar, whilst working on my own project, <b>Mapedia</b>. For Mapedia, we needed to
					use a great number of icons, in a image/sprint like manner, but using SVG. I also thought that being able to specify effects, such as drop-shadows and glows would be of use. In my original implementation, these effects were fixed, but in Scalar, they are dynamic and can be animated. Currently Scalar supports <i>Drop-Shadows</i>,<i>Outlines</i>, <i>Glows</i>, <i>Blurs</i> and <i>GreyScale</i> effects.
					</p>
					
					<h2>Scalars is...</h2>
					<ul>
						<li>Simple - Easy to use syntax...</li>
						<li>Efficient - only core of SVG data is served (we call these fragments).</li>
						<li>Compositing - you can combine multiple fragments to create composite icons.</li>
						<li>Effects - Each icon can have one effect applied.</li>
						<li>Dynamic - Each icon OR groups of icons can have their effect toggled on or off.</li>
					</ul>
					
					<h2>Scalars is not...</h2>
					<ul>
						<li>A "from scratch" SVG icon drawing library <i>( <a href="http://raphaeljs.com/" target="_blank">look to <b>Raphaël</b> for this</a> )</i></li>
					</ul>
					
					<h2>Requirements</h2>
					<ul>
						<li>PHP installed on your webserver</li>
						<li>Javascript enabled on the viewers web-browser</li>
					</ul>
				</explain>
			    
				<?php require(SITE_ROOT.'/elements/nav.php'); ?>
			</section>
			
			<?php require(SITE_ROOT.'/elements/footer.php'); ?>
		</page>
	</body>
</html>





	

