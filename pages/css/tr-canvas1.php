<?php
$parentNav="css-home";
$pageName="css-canvas-1";
$category="css-canvas";
?>
<?php include '../../includes/header.php'; ?>
<style type="text/css">
			#Canvas1 {
				border: dotted 3px black;
				/* background-color: lightGray; */	
			}
</style>
<script>
	window.onload = function() {
		
		// CHANGE THE HEIGHT AND WIDTH
		/*
		var theCanvas = document.getElementById('Canvas1');
			theCanvas.width = 150;
			theCanvas.height = 150;
		*/	
		
		
				
		var theCanvas = document.getElementById('Canvas1');
		if (theCanvas && theCanvas.getContext) {
			var ctx = theCanvas.getContext("2d");
			if (ctx) {
				ctx.fillStyle = "lightGray";
				ctx.fillRect(0,0, ctx.canvas.width, ctx.canvas.height);
			}
		}
		
	}
</script>
<section id="rightCol1">
<h1>CSS3 Canvas 1</h1>

<br />

<canvas id="Canvas1" width="400" height="300">Your browser does not support canvas.</canvas>








<blockquote>
IE 9+, Chrome 3+, Safari 3+, Opera 10+, Firefox 3+

starts upper left, invisible

canvas needs width, height, toDateURl(type), getContext(ctxID)

width & height defaul = 300x150 w/h

toDateURl(type) = 
image/png
canvas takes a snap shot then makes a stack image of it at 64bit

getContext(ctxID) = gets the drawing context



CANVAS = 
- elements drawn programmatically
- done in pixels
- animations are not built in
- high performance for pixel based drawing operations


SVG = 
- stored in the dom
- done in vectors
- animations built in
- based on XML syntax (slower but better accesability)

you can use both together on the page (but together)



DRAWING:

SHAPES = 
- rectangles
- lines
- arcs
- paths
- colors/atyles
- bezier curces
- quadratic curves
- text

HOW = 
- compositing
- patterns
- gradients
- shadows
- clipping paths

METHODS = 
- transforms
- images
- video
- raw pixel









</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  