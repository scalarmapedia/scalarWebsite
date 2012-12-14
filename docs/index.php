<?php

/**             DOCS                   */


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
		
		<script src="../scalar/js/util.js"></script>
		<script src="../scalar/js/jsBezier-0.4.js"></script>
		<script src="../scalar/js/svg.js"></script>
		
		<script src="../js/jquery-1.8.3.min.js"></script>
		
		<script> 	
			localStorage["currentPage"] = 'about';
		
			function menuOut() {
				$("#docs_navmenu").removeClass("docsNavClosed").addClass("docsNavOpen");
			}
		
			$(document).ready(function(){
					setupPage();
					
					//Slide out the docs Nav Menu
					setTimeout('menuOut();',500);
			});		
		</script>
		
		<script src="../scalar/media/svg_compiled/svg_fragments.js"></script>
		
		<?php require(SITE_ROOT.'/elements/fonts.php'); ?>
		<link rel="stylesheet" type="text/css" href="../styles.css">
		
		
	</head>
	
	<body>

			
		<page>
		
			<?php require(SITE_ROOT.'/elements/header.php'); ?>
			
			<a name="scalar_icon_anchor"></a>			
			
			<section>
				<docs>
					<!--  ==========================================  Scalar.icon() =============================================  -->
					
					<funcDef>.icon()</funcDef>
					
					<func>
						scalar.icon(<obj>event</obj>, <str>'iconID'</str>, <str>'groupID'</str>, <array>iconArray</array>, <array>filter</array>, <function>callback</function>)
					</func>
					
					<defBlock>
						<obj>event : <i>object</i></obj>
						<def>
							The event that calls this function, typically this will be an onLoad event, called by the IMG element host node...
						</def>
						
						<str>iconID : <i>string</i></str>
						<def>
							A UNIQUE ID string via which the SVG element will be identified. This will be the SVG elements id="" attribute. Its key that this string is a unique identifier, as it allows to individually identify each icon.
							If the ID is NOT unique, the icon will not be rendered, so bear this in mind, missing icon most likely means a duplicate iconID.
						</def>
						
						<str>groupID : <i>string</i></str>
						<a name="scalar_icon_iconArray"></a>
						<def>
							A shared group id string. This can be used in conjunction with the scalar.toggleGroupFilters method to hide toggle large (or small) groups of icons. As an
							example, you may have an area of yout GUI that is inactive until a user logs in. So have all the icons there as greyed out, until login, then toggle all of them
							to full colour, using their groupID and scalar.toggleGroupFilters (this is used on the Gallery page)
						</def>
						
						
						
						<array>iconArray : <i>array()</i></array>
						<def>
							An Array(), that holds an Array() object for each icon you wish to composite.
						</def>		
							<defBlock>
								<h2>IconArray</h2>
								
								<func>
									Array( <str>iconName</str>, <num>X</num>, <num>Y</num>, <num>Angle</num>, <num>Scale</num>)
								</func>
								<func>
									Array( 'browser_ie_nine', 15, 15, 0, .7 )
								</func>

								<str>iconName : <i>string</i></str>
								<def>
									The name of the icon svg. This should be the same as the file on disk, minus any .svg postfix
								</def>
								
								<num>X : <i>float</i></num>
								<def>
									0-100, The X axis translation of the icon in SVG space, which is 0-100 units on X and Y axis (a square canvas...)
								</def>
								
								<num>Y : <i>float</i></num>
								<def>
									0-100, The Y axis translation of the icon in SVG space.
								</def>
								
								<num>Angle : <i>float</i></num>
								<def>
									0 to 360. The Rotational angle of the icon. When rotated, the X and Y translation spaces are also rotated. So a 90(degree) rotation means X becomes Y and vice versa.
								</def>
								
								<num>Scale : <i>float</i></num>
								
								<a name="scalar_icon_dropshadow"></a>
								
								<def>
									0 to 1. The Scale of the icon. Typically 1. If you reduce it to .7 say, X and Y trans would need to be 15 to keep the icon centered within its element.
								</def>
								
							</defBlock>
							
							
							
							<spc></spc>
							<spc></spc>
							
						
						
						<array>filter : <i>array()</i></array>
						<def>
							An Array() that defines what filter you wish to apply to the icon. Pass null or leave empty if you do not want to apply a filter. Below are listed the various filters.
						</def>		
							
							<defBlock>
								
								<h2>Filter :  <i>Drop Shadow</i></h2>
								
								<func>
									Array( <str>effectName</str>, <num>state</num>, <num>blur</num>, <num>X</num>, <num>Y</num>, <num>opacity</num>, <array>color</array>, <num>offOpacity</num> )
								</func>
								
								<func>
									Array( 'dropShadow', 0, .6, 2, 2, .8, Array( 210, 50, 1 ), 1 )
								</func>
								
								<str>effectName : <i>string</i></str>
								<def>
									The 'dropShadow' keyword is required to apply the drop shadow effect.
								</def>
								
								<num>state : <i>int</i></num>
								<def>
									0 or 1. Defines whether the effect is applied on load. This can vary per effect, in this case, you probably want to use 0 (no dropshadow on page load). If undefined, is ACIVE.
								</def>
								
								<num>blur : <i>float</i></num>
								<def>
									The size of the blur on the shadow. This is in SVG space, typically values from 0 - 5 look good
								</def>
								
								<num>X : <i>float</i></num>
								<def>
									The X axis offset of the dropshadow. This is in SVG space, typically values from 2 - 6 work well. Be carefull not to offset the shadow so much
									that it exceeds the bounds of the SVG icons element.
								</def>
								
								<num>Y : <i>float</i></num>
								<def>
									The Y axis offset of the dropshadow. This is in SVG space, typically values from 2 - 6 work well.
								</def>
								
								<num>opacity : <i>float</i></num>
								<def>
									0 - 1. The alpha/opacity value of the dropshadow.
								</def>
								
								<array>color : <i>array</i></array>
								<def>
									An array of three floats, Hue (0-360), Saturation(0-100) and Luma(0-100), to define the dropshadows color.
								</def>
								
								<num>offOpacity : <i>float</i></num>
								<a name="scalar_icon_keyline"></a>
								<def>
									0 - 1. Inactive effect alpha/opacity. When the effect is NOT active, what opacity should the icon use. This is very much optional, but
									can be used to increase the contrast between the active and inactive effect states.
								</def>
							</defBlock>
							
							
							<spc></spc>
							
							<defBlock>
								<h2>Filter : <i>Keyline</i></h2>
								
								<func>
									Array( <str>effectName</str>, <num>state</num>, <num>keylineSize</num>, <num>blur</num>, <array>color</array>, <num>offOpacity</num> )
								</func>
								
								<func>
									Array( 'keyline', 0, 4, 6, Array(15,100,50), .05 )
								</func>
								
								<str>effectName : <i>string</i></str>
								<def>
									Use 'keyline' here to use the keyline effect.
								</def>
								
								<num>state : <i>int</i></num>
								<def>
									0 or 1. Defines whether the effect is applied on load.
								</def>
								
								<num>keylineSize : <i>float</i></num>
								<def>
									The size of the keyline, to be drawn around the icon. Typically values of 1 - 3 look good.
								</def>
								
								<num>blur : <i>float</i></num>
								<def>
									The size of the blur applied to the keyline. This is in SVG space, typically values from 0 - 4 look good
								</def>
								
								<array>color : <i>array</i></array>
								<a name="scalar_icon_glow"></a>
								<def>
									An array of three floats, Hue (0-360), Saturation(0-100) and Luma(0-100), to define the keylines color.
								</def>
								
								
								<num>offOpacity : <i>float</i></num>
								<def>
									0 - 1. Inactive effect alpha/opacity.
								</def>
							</defBlock>
					
							
							<spc></spc>
							
							<defBlock>
								<h2>Filter : <i>Glow</i></h2>
								
								<func>
									Array( <str>effectName</str>, <num>state</num>, <num>glowSize</num>, <num>offOpacity</num> )
								</func>
								
								<func>
									Array( 'glow', 1, 6, 1 )
								</func>
								
								<str>effectName : <i>string</i></str>
								<def>
									Use 'glow' here to use the glow effect.
								</def>
								
								<num>state : <i>int</i></num>
								<def>
									0 or 1. Defines whether the effect is applied on load.
								</def>
								
								<a name="scalar_icon_gaussianblur"></a>
								<num>glowSize : <i>float</i></num>
								<def>
									The size of the glow, to be drawn around the icon. Typically values of 1 - 12 look good.
								</def>
								
								<num>offOpacity : <i>float</i></num>
								<def>
									0 - 1. Inactive effect alpha/opacity.
								</def>
							</defBlock>							
					
							
							<spc></spc>
							
							<defBlock>
								<h2>Filter : <i>Gussian Blur</i></h2>
								
								<func>
									Array( <str>effectName</str>, <num>state</num>, <num>blur</num>, <num>offOpacity</num> )
								</func>
								
								<func>
									Array( 'gaussianBlur', 1, 6, 1 )
								</func>
								
								<str>effectName : <i>string</i></str>
								<def>
									Use 'gaussianBlur' here to use the gaussian blur effect.
								</def>
								
								<num>state : <i>int</i></num>
								<def>
									0 or 1. Defines whether the effect is applied on load.
								</def>
								
								<a name="scalar_icon_greyscale"></a>
								<num>blur : <i>float</i></num>
								<def>
									Blur to be applied, in SVG space. Typically, values of 1 - 12 look good.
								</def>
								
								<num>offOpacity : <i>float</i></num>
								<def>
									0 - 1. Inactive effect alpha/opacity.
								</def>
							</defBlock>
							
							<spc></spc>
							
							<defBlock>
								<h2>Filter : <i>Greyscale</i></h2>
								
								<func>
									Array( <str>effectName</str>, <num>state</num>, <num>maxGrey</num>, <num>offOpacity</num> )
								</func>
								
								<func>
									Array( 'glow', 1, 6, 1 )
								</func>
								
								<str>effectName : <i>string</i></str>
								<def>
									Use 'greyScale' here to use the greyscale effect.
								</def>
								
								<num>state : <i>int</i></num>
								<def>
									0 or 1. Defines whether the effect is applied on load.
								</def>
								
								<num>maxGrey : <i>float</i></num>
								<def>
									0 - 1. When active, how much greyscale effect should be applied.
								</def>
								
								<num>offOpacity : <i>float</i></num>
								<def>
									0 - 1. Inactive effect alpha/opacity.
								</def>
							</defBlock>
							
						
						<spc></spc>
						<spc></spc>
						
						<function>callback : <i>function handle</i></function>
						
						
						<a name="scalar_icon_examples"></a>
						<def>
							A function handle. Supply the name of a function (without the brackets). This can be used to trigger a post SVG icon load callback. This is very useful if you are
							using the BODY onLoad event to attach events or whatever to SVG icons. Remember, the onLoad event of the IMG element is used to trigger the SVG icon creation process.
							So generally the SVG icons will be ready to act on, shortly AFTER the Body onLoad (or jQuery equivalent) has been triggered. 
							This should only be defined on ONE icon to trigger a single post load function. Leave empty or define as null not to use...
						</def>
						
					</defBlock>
					
					
					
					<examples>
						<h2>Examples</h2>
						
						<p>
						scalar.icon is THE meat and potatoes of the scalar system. It allows you to replace an IMG element on a page, with a procedurally generated SVG icon.
						You trigger this replacement, by using this command within the IMG nodes <i>onLoad</i> event. You pass icon definitions to .icon() via an array of arrays.
						In its most basic form, we pass a single array to icon, to produce a single icon i.e.
						</p>
						
						<func>
							.icon( event,'exampleIcon_01',null,Array(<array>Array('icon_disc',0,0,0,1)</array>) )
						</func>
						
						<exampleSVG>
							<img src="/null.png" onLoad="scalar.icon(event,'iconDef_example1_01',null,Array(Array('icon_disc',0,0,0,1)))">
						</exampleSVG>
						
						<p>
						To composite another icon (fragment) onto this disk, we just add it as the next item in the Array().
						Note that I have also scaled the icon via its scale and X/Y offset values.
						In this example, I'll change the Array notation, and leave off the rest of the icon function code, to give us more space.
						</p>
						
						<func>
							<array>[['icon_disc',0,0,0,1], ['icon_contact',10,10,0,.8]]</array>
						</func>
						
						<exampleSVG>
							<img src="/null.png" onLoad="scalar.icon(event,'iconDef_example1_02',null,[['icon_disc',0,0,0,1],['icon_contact',5,5,0,.9]])">
						</exampleSVG>
						
						<p>
						And we can carry on in this manner. Lets add a clock icon to this mix.
						And I'll need to add a black disc behind it, to make it stand out against the rest of the icon.
						In this case, we have a white AND a black disk. How do we separate the two in CSS? Each layer of the SVG has its own transform group and the ID of this group is icon_layer_x.
						With x being the current layer. Not the layer index starts at <b>zero</b>.
						</p>
						
						<func>
							<array>[['icon_disc',0,0,0,1], ['icon_contact',10,10,0,.8]]</array>
						</func>
						
						<exampleSVG>
							<img src="/null.png" onLoad="scalar.icon(event,'iconDef_example1_03',null,[['icon_disc',0,0,0,1],['icon_contact',5,5,0,.9],['icon_disc',50,0,0,.5],['icon_clock',51,1,0,.48]])">
						</exampleSVG>
	
						<p>
						Now, lets add to this example, by adding a keyline effect to it.
						</p>
						
						<func>
							<array>[['icon_disc',0,0,0,1],['icon_contact',5,5,0,.9],['icon_disc',50,0,0,.5],['icon_clock',51,1,0,.48]],['keyline',1,5,0,Array(0,100,0),1]</array>
						</func>
						
						<exampleSVG>
							<img src="/null.png" onLoad="scalar.icon(event,'iconDef_example1_04',null,[['icon_disc',0,0,0,1],['icon_contact',5,5,0,.9],['icon_disc',50,0,0,.5],['icon_clock',51,1,0,.48]],['keyline',1,5,0,Array(0,100,0),1])">
						</exampleSVG>
						
						<p>
						That doesn't look to good, because the keyline is applied to everything, and it also exceeds the bounds of the icons element in a few places. To remedy these issues we need to.
						Reduce the size of the first disc a little. Then add a false attrib to all of the layers on which the effect should not be applied. I'll also add a small bur to the keyline as well.
						</p>
						
						<func>
							<array>[['icon_disc',10,10,0,.8],['icon_contact',10,10,0,.8,false],['icon_disc',50,0,0,.5,false],['icon_clock',51,1,0,.48,false]],['keyline',1,4,4,Array(0,100,0),1]</array>
						</func>
						
						<a name="scalar_toggleFilter"></a>
						
						<exampleSVG>
							<img src="/null.png" onLoad="scalar.icon(event,'iconDef_example1_5',null,[['icon_disc',10,10,0,.8],['icon_contact',10,10,0,.8,false],['icon_disc',50,0,0,.5,false],['icon_clock',51,1,0,.48,false]],['keyline',1,4,4,Array(0,100,0),1])">
						</exampleSVG>
						
					</examples>
					
					

					<!--  ==========================================  scalar.toggleFilter() =============================================  -->
					
					<funcDef>.toggleFilter()</funcDef>

					<p>
					.toggleFilter will switch the state of an icons Filter.
					Generally, it should be attached programmaticaly to elements using .addEventListener() or better yet, jQuery's .mouseover(), .click() etc event registration methods.
					When set with jQuery, you can also pass an eventData object, that can contain setAs and speed attributes to be used for that toggle.
					</p>
						
					<func>
						scalar.toggleFilter( <obj>event</obj>, <obj>this</obj>, <str>iconID</str>, <num>state</num>, <num>speed</num> )
					</func>
											
					<defBlock>
						<obj>event : <i>object</i></obj>
						<def>
							This is passed an event object reference, when the method is called via an attached event on an element.
						</def>
						
						<obj>this : <i>object</i></obj>
						<def>
							This is passed a <i>this</i> (the calling element) reference, when the method is called via an attached event on an element.
						</def>
						
						<str>iconID : <i>string</i></str>
						<def>
							If this method is called via an element other than the one you wish to toggle, then you should pass a valid iconID string to this parameter.
							When this is the case, pass null values for the event and this parameters, as they are not required.
						</def>
						
						<num>state : <i>number</i></num>
						<a name="scalar_toggleFilter_examples"></a>
						<def>
							0 or 1. The state to which you wish to toggle the icon. If the current state matches the defined state, the method will cease operation.
						</def>
						
						<num>speed : <i>number</i></num>
						<def>
							The speed at which you wish the transition to take place at. Values of .5 to .025 produce generally pleasing results.
						</def>
												
					</defBlock>		
					
					<examples>
						<h2>Examples</h2>
						
						<p>
						All of the icons below have been defined as belonging to group_A. Their containing element has the function below defined for its onClick.
						Just click on any of the icons to see group_A, toggled to state 0, with no random offset, and using a speed of .05
						</p>
						
						<func>
							.toggleFilter( 'group_A', 0, 0, .05 )
						</func>
						
						<a name="scalar_toggleGroupFilters"></a>
						
						<exampleSVG onClick="scalar.toggleFilter('group_A',0,0,.05)" >
							<img src="/null.png" onLoad="scalar.icon(event,'click_toggleFilter_example1_1',null,[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,1,1])">
							<img src="/null.png" onLoad="scalar.icon(event,'click_toggleFilter_example1_2',null,[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,2,1])">
							<img src="/null.png" onLoad="scalar.icon(event,'click_toggleFilter_example1_3',null,[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,3,1])">
							<img src="/null.png" onLoad="scalar.icon(event,'click_toggleFilter_example1_4',null,[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,5,1])">
							<img src="/null.png" onLoad="scalar.icon(event,'click_toggleFilter_example1_5',null,[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,6,1])">
						</exampleSVG>	
					</examples>
					
					
					
					
					<!--  ==========================================  scalar.toggleGroupFilters() =============================================  -->
					
					<funcDef>.toggleGroupFilters()</funcDef>
					
					<func>
						scalar.toggleGroupFilters( <str>groupID</str>, <num>state</num>, <num>delayMax</num>, <num>speed</num> )
					</func>
					
					<defBlock>
						<str>groupID : <i>string</i></str>
						<def>
							The groupID to toggle, for this to work, you have to applied this string to some icons during creation, via their groupID parameter.
						</def>
						
						<num>state : <i>number</i></num>
						<def>
							0 or 1. The state to toggle too. 0 = off, 1 = applied.
						</def>
						
						<num>delayMax : <i>number</i></num>
						<def>
							A Maximum random delay (Milliseconds) over which the toggle can start, per icon.
							A value of 500 would mean icons could switch state up to half a second after the method was triggered.
						</def>
						
						<num>speed : <i>number</i></num>
						<def>
							The speed at which the state transition should take place during the toggle.
							All transitions have a frame rate of 50fps. This values applies to a transition from 0 to 1, at 50 fps.
							Meaning a speed value of .1 should transtion states in 10 frames, or 1/20th of a second i.e. pretty fast. So use values of say .02 and lower for more gradual transitions.
							Values of .5 to .025 produce generally pleasing results.
						</def>
					</defBlock>	
					
					<a name="scalar_toggleGroupFilters_examples"></a>
					
					<examples>
						<h2>Examples</h2>
						
						<p>
						All of the icons below have been defined as belonging to group_A. Their containing element has the function below defined for its onClick.
						Just click on any of the icons to see group_A, toggled to state 0, with no random offset, and using a speed of .05
						</p>
						
						<func>
							.toggleGroupFilters( 'group_A', 0, 0, .05 )
						</func>
						
						<exampleSVG onClick="scalar.toggleGroupFilters('group_A',null,0,.05)" >
							<img src="/null.png" onLoad="scalar.icon(event,'toggleGroupFilters_example1_1','group_A',[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,1,1])">
							<img src="/null.png" onLoad="scalar.icon(event,'toggleGroupFilters_example1_2','group_A',[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,2,1])">
							<img src="/null.png" onLoad="scalar.icon(event,'toggleGroupFilters_example1_3','group_A',[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,3,1])">
							<img src="/null.png" onLoad="scalar.icon(event,'toggleGroupFilters_example1_4','group_A',[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,5,1])">
							<img src="/null.png" onLoad="scalar.icon(event,'toggleGroupFilters_example1_5','group_A',[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,6,1])">
						</exampleSVG>
						
						<p>
						A similar setup here, but we have added a ramdom offset to the toggle start.
						Just click on any of the icons to see group_A, toggled to state 0, with a 500ms max random offset, and using a speed of .02
						</p>
						
						<func>
							scalar.toggleGroupFilters( 'group_A', 0, 500, .02 )
						</func>
						
						<exampleSVG onClick="scalar.toggleGroupFilters('group_B',null,500,.1)" >
							<img src="/null.png" onLoad="scalar.icon(event,'toggleGroupFilters_example2_1','group_B',[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,1,1])">
							<img src="/null.png" onLoad="scalar.icon(event,'toggleGroupFilters_example2_2','group_B',[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,2,1])">
							<img src="/null.png" onLoad="scalar.icon(event,'toggleGroupFilters_example2_3','group_B',[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,3,1])">
							<img src="/null.png" onLoad="scalar.icon(event,'toggleGroupFilters_example2_4','group_B',[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,5,1])">
							<img src="/null.png" onLoad="scalar.icon(event,'toggleGroupFilters_example2_5','group_B',[['icon_disc',12.5,12.5,0,.75],['icon_contact',15,15,0,.7],['icon_disc',48,4,0,.45],['icon_clock',49,5,0,.43]],['gaussianBlur',1,6,1])">
						</exampleSVG>
						
					</examples>
					
				</docs>
			    
				<?php require(SITE_ROOT.'/elements/nav.php'); ?>
				
			</section>
			
			<?php require(SITE_ROOT.'/elements/docs_nav.php'); ?>
			
		</page>
	</body>
</html>





	

