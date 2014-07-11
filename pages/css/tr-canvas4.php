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
						// draw just a stroked rectangle
						ctx.strokeStyle = "blue";
						ctx.lineWidth = 5;
						ctx.strokeRect(25,25,100,125);
						
						// draw just a filled rectangle
						ctx.fillStyle = "green";
						ctx.fillRect(175, 25, 100, 125);
						
						// draw a stroked and filled rectangle
						ctx.strokeStyle = "red";
						ctx.fillStyle = "yellow";
						ctx.lineWidth = 10;
						ctx.fillRect(325, 25, 100, 125);
						ctx.strokeRect(325,25,100,125);
						
						// clear a rectangle
						ctx.clearRect(15, 75, 450, 50);
					}
				}
			}
		</script>
<section id="rightCol1">
<h1>CSS3 Canvas 4 - Simple SHAPES</h1>

<br />

<canvas id="Canvas1" width="500" height="200">Your browser does not support canvas.</canvas>








<blockquote>

RECTANGLES:
clearRect (x,y,w,h) = transparancy
strokeRect (x,y,w,h) = stroke
fillRect (x,y,w,h) = fill


RECTANGLES AND CLEAR

	window.onload = function() {
				var theCanvas = document.getElementById('Canvas1');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						// draw just a stroked rectangle
						ctx.strokeStyle = "blue";
						ctx.lineWidth = 5;
						ctx.strokeRect(25,25,100,125);
						
						// draw just a filled rectangle
						ctx.fillStyle = "green";
						ctx.fillRect(175, 25, 100, 125);
						
						// draw a stroked and filled rectangle
						ctx.strokeStyle = "red";
						ctx.fillStyle = "yellow";
						ctx.lineWidth = 10;
						ctx.fillRect(325, 25, 100, 125);
						ctx.strokeRect(325,25,100,125);
						
                        
						// CLEAR a rectangle
						ctx.clearRect(15, 75, 450, 50);
					
                    
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