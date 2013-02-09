<?php

DEFINE(PAGE_NAME,'Installation');


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
		<title>Scalar Installation</title>
		<meta name="keywords" content="United Kingdom" />
		<meta name="description" content="" />
		<meta name="author" content="Chris Thomas" />
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<?php require(SITE_ROOT.'/elements/js_code.php'); ?>

		<script> 	
			localStorage["currentPage"] = 'installation';
			
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
					<h2>Download the .zip!</h2>
					<p>Download the latest <i>.zip</i> of <b>Scalar</b>. Unzip it using a GUI util or in a shell, and you should a single folder, called <i>scalar</i>.
					This folder needs to be in root of your website, so for files accessing it, its path would be <i>/mywebsiteroot/scalar</i>.
					
					You can either add it to your local dev version of your webserver and then FTP it to your live site. Or
					alternatively add its files to your versioning system (GIT, SVN or whatever) and upload it to your live
					site by updating your project there. (<i>git pull</i>, or <i>svn update</i>).</p>
					
					<h2>Setting Permissions</h2>
					<p>The scalar folder and its sub-folders and files should all be owned by your site, and given permissions so
					that your webserver can access its files.
					If your webservers user is <i>www</i>,  and your websites home directory is <i>/srv/www/htdocs/mysite</i> this could be something like.</p>
					
					<shell>
					chown root:www -R /srv/www/htdocs/mysite/scalar<br>
					find /srv/www/htdocs/mysite/scalar -type d -print0 | xargs -0 chmod 750<br>
					find /srv/www/htdocs/mysite/scalar -type f -print0 | xargs -0 chmod 740<br>
					</shell>
					
					<p>Which will set your scalar files group to "www" with read/execute privs on it directories and read only
					permissions on its files. Within the <i>scalar</i> directory is the <i>media</i> dir. This is where scalar stores its SVG fragment file.
					As this file is generated on the fly when required, we need to give the webserver permission to write to this directory. So..</p>
					
					<shell>
					find /srv/www/htdocs/mysite/scalar/media/ -name svg_compiled -print0 | xargs -0 chmod 770;
					</shell>
					
					<p>If you do not want this write access on a live server, the only option is to lock it down, and provide the fragment file via
					your versioning system. For this workflow, refer to out FAQ.</p>
					
					<h2>Generate your SVG</h2>
					
					<p>To generate the <i>svg_fragments.js</i> file, we need to run a .php script on each page load of your site.
					So, add this php block to the top of each of your websites pages, BEFORE the <b>&lt;head&gt;</b> block....</p>
					
					<shell>
					&lt;?php<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT'] );<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;require_once(SITE_ROOT.'/scalar/php/svg.php');<br>
					?&gt;
					</shell>
					
					<p>This code examines the source icon folders and compares all of the .svg files creation/modification dates to the same date on 
					your <i>svg_fragments.js</i> file. If ANY of the .svg files are newer, OR the <i>svg_fragments.js</i> does not exist, it gets
					re-generated. Otherwise, this is skipped.</p>
					
					<h2>Setup the Javascript libs</h2>
					<p>To use Scalar, we need its Javascript libraries. Right now it consists of two libraries. One, <i>jsBezier-0.4.js</i> is a bspline
					open-source lib, which is used by <i>Scalar</i> to provide ease-in-out on our filter transitions. The main <i>Scalar</i> functions
					are defined in <i>svg.js</i>. Add these script links WITHIN your <b>&lt;head&gt;</b> block, below the Meta tags.</p>
					
					<shell>
					&lt;script src="../scalar/js/jsBezier-0.4.js"&gt;&lt;/script&gt;<br>
					&lt;script src="../scalar/js/svg.js"&gt;&lt;/script&gt;
					</shell>
					
					<p>When loaded, the svg.js file creates a JS object called <b>scalar</b> on which all the scalar methods such as <i>.icon()</i> or <i>.toggleFilter()</i>
					reside. This is generally known as a "name-space" and ensures that all of scalars methods and properties (functions/variable) do not clash
					with any other JS code you may have on your site. If all of this is plain ole jibberish to you, it might be time to buff up on Javascript
					via the internet, books or whatever.</p>
					
					<h2>Display some icons!</h2>
					<p>OK, now you should be good to display some SVG icons on your web-page, Hoorah! To do so, lets test it out with a single icon.
					The simple disc icon can see bellow is created by the HTML snippet you see below it. The discs colour is applied using its ID and CSS.
					Check it out by inspecting in Chrome, FF dev tools.</p>
					<img src="/scalar/null.png" onLoad="scalar.icon(event,'simpleDisc',null,Array(Array('icon_disc',0,0,0,1)))">
					</p>
					
					<shell>
					&lt;img src="/scalar/null.png" onLoad="scalar.icon(event,'simpleDisc',null,Array(Array('icon_disc',0,0,0,1)))">
					</shell>
					
					<p>
					Its important to note that the second argument of the <i>scalar.icon()</i> method we use here, will be used as the ID of the resulting
					SVG element. In this case its "simpleDisc". This can then be used in your CSS, to apply styles, set its size and so on.
					</p>
					
					
				</explain>
			    
				<?php require(SITE_ROOT.'/elements/nav.php'); ?>
			</section>
			
			<?php require(SITE_ROOT.'/elements/footer.php'); ?>
		</page>
	</body>
</html>





	

