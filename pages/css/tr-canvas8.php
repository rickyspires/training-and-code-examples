<?php
$parentNav="css-home";
$pageName="css-canvas-8";
$category="css-canvas";
?>
<?php include '../../includes/header.php'; ?>
<style type="text/css">
			#Canvas1, #Canvas2 {
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
						ctx.strokeStyle = "blue";
						ctx.lineWidth = 5;
						
						// stroke a simple bezier curve
						ctx.beginPath();
						ctx.moveTo(50,200);
						ctx.bezierCurveTo(50,300,200,100,200,150);
						ctx.stroke();
						// now make the control points visible
						ctx.strokeStyle = "rgba(0,0,0,.25)";
						ctx.lineWidth = 1;
						ctx.beginPath();
						ctx.moveTo(50,200);
						ctx.lineTo(50,300);
						ctx.lineTo(200,100);
						ctx.lineTo(200,150);
						ctx.stroke();

						// stroke a quadratic curve
						ctx.strokeStyle = "green";
						ctx.lineWidth = 5;
						ctx.beginPath();
						ctx.moveTo(400,200);
						ctx.quadraticCurveTo(500,100,600,150);
						ctx.stroke();
						// now make the control points visible
						ctx.strokeStyle = "rgba(0,0,0,.25)";
						ctx.lineWidth = 1;
						ctx.beginPath();
						ctx.moveTo(400,200);
						ctx.lineTo(500,100);
						ctx.lineTo(600,150);
						ctx.stroke();
					}
				}
			}	
</script>
<section id="rightCol1">
<h1>CSS3 Canvas 8 - Bezier & Quadratic</h1>

<br />
<canvas id="Canvas1" width="700" height="300">Your browser does not support canvas.</canvas>

<blockquote>

Bezier curves are drawn starting from a context point to an end point using two control positions to determin the curve.

Quadratic uses a start point, one control point and an end point

 
Bezier = bezierCurveTo(cx1, cy1, cx2, cy2, end1, end2)  
Quadratic = quadraticCurveTo(cx, cy, x, y)           
          
          
          
			var theCanvas = document.getElementById('Canvas1');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						ctx.strokeStyle = "blue";
						ctx.lineWidth = 5;
						
						// stroke a simple bezier curve
						ctx.beginPath();
						ctx.moveTo(50,200);
						ctx.bezierCurveTo(50,300,200,100,200,150);
						ctx.stroke();
						// now make the control points visible
						ctx.strokeStyle = "rgba(0,0,0,.25)";
						ctx.lineWidth = 1;
						ctx.beginPath();
						ctx.moveTo(50,200);
						ctx.lineTo(50,300);
						ctx.lineTo(200,100);
						ctx.lineTo(200,150);
						ctx.stroke();

						// stroke a quadratic curve
						ctx.strokeStyle = "green";
						ctx.lineWidth = 5;
						ctx.beginPath();
						ctx.moveTo(400,200);
						ctx.quadraticCurveTo(500,100,600,150);
						ctx.stroke();
						// now make the control points visible
						ctx.strokeStyle = "rgba(0,0,0,.25)";
						ctx.lineWidth = 1;
						ctx.beginPath();
						ctx.moveTo(400,200);
						ctx.lineTo(500,100);
						ctx.lineTo(600,150);
						ctx.stroke();
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