<?php
$parentNav="css-home";
$pageName="css-canvas-12";
$category="css-canvas";
?>
<?php include '../../includes/header.php'; ?>
<style type="text/css">
			#Canvas1, #Canvas2, #Canvas3, #Canvas4, #Canvas5 {
				border: dotted 3px black;
				margin:20px 0;
				/* background-color: lightGray; */	
			}
</style>
	<script>
		window.onload = function() {
				var theCanvas = document.getElementById('Canvas1');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						// create a linear gradient
						var linGrd = ctx.createLinearGradient(20,20,220,280);
						// add some color stops: red to blue, blue to green
						linGrd.addColorStop(0, "#f00"); // start with red at 0
						linGrd.addColorStop(0.5, "#00f"); // put blue at the halfway point
						linGrd.addColorStop(1,"#0f0"); // finish with green
						
						// create a rectangle and fill it with the gradient
						ctx.fillStyle = linGrd;
						ctx.fillRect(20,20,200,260);
						ctx.lineWidth = 3;
						ctx.strokeRect(20,20,200,260);
						
						// create a radial gradient
						var radGrd = ctx.createRadialGradient(500,100,20,525,150,100);
						radGrd.addColorStop(0, "#f00"); // start with red at 0
						radGrd.addColorStop(0.5, "#00f"); // put blue at the halfway point
						radGrd.addColorStop(1,"#0f0"); // finish with green
						ctx.fillStyle = radGrd;
						
						ctx.beginPath();
						ctx.arc(525,150,100,0,2*Math.PI);
						ctx.stroke();
						ctx.fill(); 
					}
				}
			}
	</script>
<section id="rightCol1">
<h1>CSS3 Canvas 12 - Drawing Gradients</h1>

<br />
	<canvas id="Canvas1" width="700" height="300">Your browser does not support canvas.</canvas>
  
<blockquote>

Gradients are make first then you use the fill() to use them.

Linier Gradients are formed along a path. (x0,y0) to (x1, y1)
Radial Gradients travel from the edge of the inner circle to the edge of the outter circle.


createLinearGradient(x0, y0,x1, y1)
createRadialGradient(x0, y0,r0, x1, y1)
addColorStop(position, color)  = 0.0 to 1.0

</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  