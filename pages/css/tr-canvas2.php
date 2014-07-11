<?php
$parentNav="css-home";
$pageName="css-canvas-2";
$category="css-canvas";
?>
<?php include '../../includes/header.php'; ?>
<style type="text/css">
			#Canvas1 {
				border: dotted 3px black;
				/* background-color: red; */	
			}
</style>
<script>
			window.onload = function() {
			
			var theCanvas = document.getElementById('Canvas1'); // GET ELEMENT
				
				
				// FILL BACK GROUND WITH GREY
				
				if (theCanvas && theCanvas.getContext) {

					var ctx = theCanvas.getContext("2d"); // USE 2D

					if (ctx) {

						ctx.fillStyle = "red";  // SET FILL TO LIGHT GREY

						ctx.fillRect(0,0, ctx.canvas.width, ctx.canvas.height);  // SET CONTEXT

					}

				}
			}
		</script>
<section id="rightCol1">
<h1>CSS3 Canvas 2 - Simple drawing</h1>

<br />

<canvas id="Canvas1" width="400" height="300">Your browser does not support canvas.</canvas>








<blockquote>


// FILL BACK GROUND WITH GREY
				
if (theCanvas && theCanvas.getContext) {

    var ctx = theCanvas.getContext("2d"); // USE 2D

    if (ctx) {

        ctx.fillStyle = "lightGray";  // SET FILL TO LIGHT GREY

        ctx.fillRect(0,0, ctx.canvas.width, ctx.canvas.height);  // SET CONTEXT

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