<?php

DEFINE(PAGE_NAME,'How To & FAQ');


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
		<title>Scalar How Too & FAQ</title>
		<meta name="keywords" content="United Kingdom" />
		<meta name="description" content="" />
		<meta name="author" content="Chris Thomas" />
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<?php require(SITE_ROOT.'/elements/js_code.php'); ?>
		
		<script> 	
			localStorage["currentPage"] = 'howto';
			
			$(document).ready(function(){
					setupPage();
			});		
		</script>
		
		<script src="../scalar/media/svg_compiled/svg_fragments.js"></script>
		
		<?php require(SITE_ROOT.'/elements/analytics.php'); ?>	
		<?php require(SITE_ROOT.'/elements/fonts.php'); ?>
		<?php require(SITE_ROOT.'/elements/styles.php'); ?>
	
	</head>
	
	<body>
		<page>
			<?php require(SITE_ROOT.'/elements/header.php'); ?>
			
			<section>
				<explain class="questions">
					<h1>How Too</h1>

					<div class="questions">
						<h2><icon><ques>?</ques></icon>How to formt your SVG icons for use in Scalar</h2>
						<p>
						Yeah... unfortunately, for Scalar to do its thing, it had to make certain stipulations. One of these, is that the icons that it works with have to follow a certain format.
						In simple terms, the original Scalar icons were created in Adobe Illustrator at a certain size and on a square canvas. Each icon is created on a document that is
						100 points square. We found this provided us with a stable set of icons, all of which have been designed in the same format, meaning scaling and positioning of the icons is
						consistent. This is key when it comes to compositing your icons using Scalar. Below is a quick video that I put together on how to create icons, how to prep your icons for 
						use in Scalar. Enjoy....
						</p>
						
						<h2><icon><ques>?</ques></icon>How to style your icons</h2>
						<p>
						Here's a quick video on how to style your icons within your document. You need to view the prep video above, for this to totally make sense.
						</p>
						
						<h2><icon><ques>?</ques></icon>How to composite two or more icons in Scalar?</h2>
						<p>
						 Another key feature of Scalar is being able to combine simple icons into more complex composite icons. Why is this such a big thing? Well, if you look at most bitmap icon libraries, you'll
						 note that many icons are simply composites of symbolic elements. Say you have icons of a person, a clock and a padlock. You can combine the person icon with the clock to represent
						 personal time keeping. Or combine it with a padlock to represent personal account auth, security or whatever. So, here's a quick video on how to combine icons in Scalar.
						</p>
						
						<h2><icon><ques>?</ques></icon>How to apply filters to icons</h2>
						<p>
						Another ninja Scalar feature, is being able to apply a range of filters to your icons. These filters can be used statically, simply to add some extra styling to your icons, or 
						dynamically to suggest states in your icons, such as mouse hover, or disabled. Here is another splendid video on how to do this.
						</p>
					</div>
					
					<h1>FAQ</h1>
					
					<div class="questions">
						<h2><icon><ques>?</ques></icon> Why is Scalar more efficient and using image sprites?</h2>
						
						<p>
						To make Scalar as efficient as possible, we remove the <i>&lt;IMG&gt;</i> wrapping element from each SVG icons data. This is just repetition and can be added programatically as Scalar builds each icon from the required fragments. Its a bit like extracting nuts from their shells, we only need the nut, and the shells 
						can be discarded, saving on download weight. On top of this, the individual icons data is combined into a single file. Meaning that only one HTTP request is required for all of your icons to download. This optimises page load speed, and all of your icons are ready for use.
						</p>
						
						<h2><icon><ques>?</ques></icon> How does it replace the containing &lt;IMG&gt; elements with &lt;SVG&gt;?</h2>
						
						<p>To get each icon to load, we use the <i>onLoad</i> event of &lt;IMG&gt; elements, which (conveniently) are triggered as the IMG node is displayed in the browser. At this 
						point Scalar jumps in using Javascript and creates the required icon. It then replaces the original <i>&lt;IMG&gt;</i> node with a spiffing new <i>&lt;SVG&gt;</i> node. And all in the blink of an eye...
						</p>
						
						<h2><icon><ques>?</ques></icon> How do I avoid generating svg_fragments.js on my live server?</h2>
						<p>
						In this workflow you simply generate the svg_fragments.js file on your  development machine and then commit it to your versioning system, 
						or upload it to your live server manually. In this case, you do NOT require the svg.php script to be run on the live server. This is a perfectly
						good way of doing things. But for your dev machine at least, you HAVE to give the <i>scalar/media/svg_compiled</i> folder write permission, 
						or Scalar cannot generate the fragments file and therefor you will have no icon data to use once the page has loaded.
						</p>
					</div>
				</explain>
							
				<?php require(SITE_ROOT.'/elements/nav.php'); ?>
			</section>
			
			<?php require(SITE_ROOT.'/elements/footer.php'); ?>
		</page>
	</body>
</html>





	

