<?php
$parentNav="css-home";
$pageName="css-canvas-2";
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
				var theCanvas = document.getElementById('Canvas1');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						
						// set up some drawing information
						ctx.strokeStyle = "red";
						ctx.fillStyle = "yellow";
						ctx.lineWidth = 10;
						
						// draw the first Rectangle
						ctx.fillRect(25,25,100,125);
						ctx.strokeRect(25,25,100,125);



						// now, draw another rectangle with different settings
						ctx.save(); // this will save the current settings
						
						
						//draw second rectangle
						ctx.strokeStyle = "green";
						ctx.fillStyle = "blue";
						ctx.lineWidth = 5;
						ctx.fillRect(175, 25, 100, 125);
						ctx.strokeRect(175, 25, 100, 125);
						
						
						ctx.restore(); // now restore the original settings
						
						// draw a stroked and filled rectangle
						ctx.fillRect(325, 25, 100, 125);
						ctx.strokeRect(325,25,100,125);
					}
				}
			}		
		</script>
<section id="rightCol1">
<h1>CSS3 Canvas 6 - States</h1>

<br />

<canvas id="Canvas1" width="500" height="300">Your browser does not support canvas.</canvas>





<blockquote>

states can be saved
states keeps trake of the lineWidth, strokeStyle, fillStyle, lineCap etc...
keeps track transformations and clippings

to save and restore the state use save() and restore() functions

this example draws a rectangle, saves it then draws another rectangle and then restores the first rectangles properties.


	window.onload = function() {
				var theCanvas = document.getElementById('Canvas1');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						
						// set up some drawing information
						ctx.strokeStyle = "red";
						ctx.fillStyle = "yellow";
						ctx.lineWidth = 10;
						
						// draw the first Rectangle
						ctx.fillRect(25,25,100,125);
						ctx.strokeRect(25,25,100,125);



						// now, draw another rectangle with different settings
						ctx.save(); // this will save the current settings
						
						
						//draw second rectangle
						ctx.strokeStyle = "green";
						ctx.fillStyle = "blue";
						ctx.lineWidth = 5;
						ctx.fillRect(175, 25, 100, 125);
						ctx.strokeRect(175, 25, 100, 125);
						
						
						ctx.restore(); // now restore the original settings
						
						// draw a stroked and filled rectangle
						ctx.fillRect(325, 25, 100, 125);
						ctx.strokeRect(325,25,100,125);
					}
				}
			}

</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  