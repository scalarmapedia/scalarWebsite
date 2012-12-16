<?php

/**              GALLERY                  */


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
		<title>Scalar Gallery</title>
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
		
		<?php require(SITE_ROOT.'/elements/fonts.php'); ?>
		<link rel="stylesheet" type="text/css" href="../styles.css">
		
	
	</head>
	
	<body>
		<page>
			<?php require(SITE_ROOT.'/elements/header.php'); ?>
			
			<section>
				<explain>
					<p>
						Here you can see a number of examples, of each of the Filter effects that can be applied to your icons using Scalar.
					</p>
					
					
					<h2>Drop Shadow</h2>
					
					<p>
						The dropshadow effect is similar to that available in CSS3, except that in this case the shadow is based on the form of the actual SVG icon. Notice shadow of the icon on the far right, exceeds the
						border of its SVG element. This is something that can be worked around, by shinking the icon within its SVG element.
					</p>
					
					<row>
						<img class="toggleOff" onClick="scalar.toggleGroupFilters('blue',0,0,.05);" src="/scalar/null.png" onLoad="scalar.icon(event,'toggleOff_Blue',null,Array(Array('icon_minus',15,15,0,.7)))">
						<img class="toggleOn" onClick="scalar.toggleGroupFilters('blue',1,0,.05);" src="/scalar/null.png" onLoad="scalar.icon(event,'toggleOn_Blue',null,Array(Array('icon_plus',15,15,0,.7)))">
					
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_Shadow0','blue',Array(Array('browser_ie_nine',15,15,0,.7)),['dropShadow',null,.6,2,2,.8,Array(25,100,1),1])">
					
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_Shadow1','blue',Array(Array('browser_ie_nine',15,15,0,.7)),['dropShadow',null,1.2,4,4,.8,Array(45,100,1),.6])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_Shadow2','blue',Array(Array('browser_ie_nine',15,15,0,.7)),['dropShadow',null,1.5,6,6,.8,Array(210,100,1.5),.3])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_Shadow3','blue',Array(Array('browser_ie_nine',15,15,0,.7)),['dropShadow',null,6,9,9,.8,Array(210,100,.5),.1])">
					</row>
					
					
					<h2>Keyline</h2>
					
					<p>
						Keyline..
					</p>
					
					<row>
						<img class="toggleOff" onClick="scalar.toggleGroupFilters('Lemons',0,0,.1);" src="/scalar/null.png" onLoad="scalar.icon(event,'toggleOff_Lemons',null,Array(Array('icon_minus',15,15,0,.7)))">
						<img class="toggleOn" onClick="scalar.toggleGroupFilters('Lemons',1,0,.1);" src="/scalar/null.png" onLoad="scalar.icon(event,'toggleOn_Lemons',null,Array(Array('icon_plus',15,15,0,.7)))">
					
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_Keyline0','Lemons',Array(Array('icon_contact',15,15,0,.7)),['keyline',null,2,0,Array(0,100,0),1])">
					
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_Keyline1','Lemons',Array(Array('icon_contact',15,15,0,.7)),['keyline',null,5,8,Array(200,100,1),.5])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_Keyline2','Lemons',Array(Array('icon_contact',15,15,0,.7)),['keyline',null,3,0,Array(0,100,30),.15])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_Keyline3','Lemons',Array(Array('icon_contact',15,15,0,.7)),['keyline',null,4,6,Array(15,100,50),.05])">
					</row>

					
					<h2>Glow</h2>
					
					<p>
						The Glow effect is based on 3 layered and blurred copies of the icon. Right now, we cannot find a true ADD compositing method in the filters, so this effect looks odd on darker icons.
						If you click the minus sign, you'll see the effect slowly fade off. The <i>transition speed</i> is controllable. 
						You'll notice that when the effect is off, the icons are also <i>semi transparent</i>. Fading from this semi-transparent state to full glow can help accentuate the effect. 
					</p>
					
					<row>
						<img class="toggleOff" onClick="scalar.toggleGroupFilters('red',0,0,.015);" src="/scalar/null.png" onLoad="scalar.icon(event,'toggleOff_Red',null,Array(Array('icon_minus',15,15,0,.7)))">
						<img class="toggleOn" onClick="scalar.toggleGroupFilters('red',1,0,.015);" src="/scalar/null.png" onLoad="scalar.icon(event,'toggleOn_Red',null,Array(Array('icon_plus',15,15,0,.7)))">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_mrGlowy1','red',Array(Array('icon_html5',20,20,0,.6)),['glow',1,2,1])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_mrGlowy2','red',Array(Array('icon_html5',20,20,0,.6)),['glow',1,5,.5])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_mrGlowy3','red',Array(Array('icon_html5',20,20,0,.6)),['glow',1,8,.15])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_mrGlowy4','red',Array(Array('icon_html5',20,20,0,.6)),['glow',1,12,.05])">		
					</row>
					
					
					<h2>Gaussian Blur</h2>
					
					<p>
						Here you can see a number of examples, of each of the Filter effects that can be applied to your icons using Scalar.
					</p>
					
					<row>
						<img class="toggleOff" onClick="scalar.toggleGroupFilters('green',0,0,.015);" src="/scalar/null.png" onLoad="scalar.icon(event,'toggleOff_Green',null,Array(Array('icon_minus',15,15,0,.7)))">
						<img class="toggleOn" onClick="scalar.toggleGroupFilters('green',1,0,.015);" src="/scalar/null.png" onLoad="scalar.icon(event,'toggleOn_Green',null,Array(Array('icon_plus',15,15,0,.7)))">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_mrBlurry0','green',Array(Array('icon_note',10,10,0,.8)),['gaussianBlur',1,0,1])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_mrBlurry1','green',Array(Array('icon_note',10,10,0,.8)),['gaussianBlur',1,1,.6])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_mrBlurry2','green',Array(Array('icon_note',10,10,0,.8)),['gaussianBlur',1,2,.3])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_mrBlurry3','green',Array(Array('icon_note',10,10,0,.8)),['gaussianBlur',1,5,0.1])">
					</row>
					
					
					<h2>Greyscale</h2>
					
					<p>
						Here you can see a number of examples, of each of the Filter effects that can be applied to your icons using Scalar.
					</p>
					
					<row>
						<img class="toggleOff" onClick="scalar.toggleGroupFilters('black',0,0,.025);" src="/scalar/null.png" onLoad="scalar.icon(event,'toggleOff_Black',null,Array(Array('icon_minus',15,15,0,.7)))">
						<img class="toggleOn" onClick="scalar.toggleGroupFilters('black',1,0,.025);" src="/scalar/null.png" onLoad="scalar.icon(event,'toggleOn_Black',null,Array(Array('icon_plus',15,15,0,.7)))">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_mrGrey0','black',Array(Array('browser_chrome',10,10,0,.8)),['greyScale',1,.6,.6])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_mrGrey1','black',Array(Array('browser_safari',10,10,0,.8)),['greyScale',1,.7,.4])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_mrGrey2','black',Array(Array('browser_ie_nine',10,10,0,.8)),['greyScale',1,.9,.2])">
						
						<img src="/scalar/null.png" onLoad="scalar.icon(event,'click_mrGrey3','black',Array(Array('browser_opera',10,10,0,.8)),['greyScale',1,1,.1])">
					</row>
				</explain>
			    
				<?php require(SITE_ROOT.'/elements/nav.php'); ?>
			</section>
		</page>
	</body>
</html>





	

