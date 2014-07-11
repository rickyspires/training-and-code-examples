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
						ctx.fillStyle = "green";    // SET COLOR
						ctx.fillRect(20,20,100,100); // FILL RECTANGLE - X,Y,W,H
						
						ctx.lineWidth = 5;  // STROKE WIDTH
						ctx.strokeStyle="rgba(0,0,255,1)"; // SET COLOR
						ctx.strokeRect(20,20,100,100); '' // SET STROKE - X,Y,W,H
					}
				}
			}
		</script>
<section id="rightCol1">
<h1>CSS3 Canvas 2 - Simple drawing</h1>

<br />

<canvas id="Canvas1" width="500" height="200">Your browser does not support canvas.</canvas>








<blockquote>

STYLES: fill with gradient, color or pattern 

fillStyle
strokeStyle
lineWidth


STEPS:
- set the line width
- call a drawing operation



	var theCanvas = document.getElementById('Canvas1');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						ctx.fillStyle = "green";    // SET COLOR
						ctx.fillRect(20,20,100,100); // FILL RECTANGLE - X,Y,W,H
						
						ctx.lineWidth = 5;  // STROKE WIDTH
						ctx.strokeStyle="rgba(0,0,255,1)"; // SET COLOR
						ctx.strokeRect(20,20,100,100); '' // SET STROKE - X,Y,W,H
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