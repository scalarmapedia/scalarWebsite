<?php

/**             403 Error                    */

error_reporting(E_ALL);
ini_set('display_errors', '1');
   
define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT'] );
define("SITE_HOST", 'http://'.$_SERVER['HTTP_HOST'] );

require_once(SITE_ROOT.'/php/svg.php');

?>

<!doctype html>
<html lang="en">

	<head>
	
		<meta charset="utf-8">
		<title>Scalar 403</title>
		<meta name="keywords" content="United Kingdom" />
		<meta name="description" content="" />
		<meta name="author" content="Chris Thomas" />
		
		<script src="/js/util.js"></script>
		<script src="/js/jquery-1.8.3.min.js"></script>
		<script src="/js/jsBezier-0.4.js"></script>
		
		<script src="/js/svg.js"></script>
		
		<script> 
		</script>
		
		<script src="/media/svg_compiled/svg_fragments.js"></script>
		
		<link href='http://fonts.googleapis.com/css?family=Sanchez|Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/styles.css">
	
	</head>
	
	<body>
		<page>
			<header>
				<logoCont id="scalarlogocont">
					<logo>
						<img src="/null.png" class="scalarLogo" onLoad="scalar.icon(event,'scalarLogo',null,Array(Array('icon_scalar_logo',10,10,0,.8)),['glow',1,.55,1],null,scalarSetEvents)">
					</logo>

				</logoCont>
				
				<txtCont>
					<txt>
						403 Error
					</txt>
				</txtCont>
			</header>
			
			<error>
			<p>Oh the shame, this is an...</p>
			
			<h1>403 Error</h1>
			
			<p>Meaning that this page could not be found on our servers. But don't worry, we have just sent an email to the <b>Scalar</b> dev team, letting them know what just happened and they will fix this issue in due course.</p>
			
			<p>Please press back on your browser, to get back on the beaten track.</p>
			</error>
		</page>
	</body>
</html>





	

