<?php
$parentNav="css-home";
$pageName="css-canvas-10";
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
						// set up our basic shadow settings
						ctx.shadowColor = "#000000";
						ctx.shadowOffsetX = 10;
						ctx.shadowOffsetY = 10;
						ctx.shadowBlur = 10;
						
						// draw a simple rectangle with a shadow effect
						ctx.fillStyle = "rgba(0,0,255,1)";
						ctx.fillRect(20,20,200,100);
						
						var theString = "Drawing Text on a Canvas";
						// draw the string with some font information
						// change the shadow settings to be a bit lighter
						ctx.fillStyle = "green";
						ctx.shadowColor = "rgba(0,100,100,0.5)";
						ctx.shadowOffsetX = 5;
						ctx.shadowOffsetY = 5;
						ctx.shadowBlur = 5;
						ctx.font = "25pt Georgia";
						ctx.fillText(theString, 250,75);
						
						// draw a red line with a purplish shadow
						ctx.lineCap="round";
						ctx.lineWidth = 25;
						ctx.shadowColor = "rgba(150,0,150,0.5)";
						ctx.shadowBlur = 15;
						ctx.shadowOffsetX = -15;
						ctx.shadowOffsetY = -15;
						ctx.strokeStyle = "red";
						ctx.beginPath();
						ctx.moveTo(50,200);
						ctx.lineTo(450,200);
						ctx.stroke();												
					}
				}
			}
		</script>
<section id="rightCol1">
<h1>CSS3 Canvas 10 - Drawing Shadows</h1>

<br />
<canvas id="Canvas1" width="700" height="300">Your browser does not support canvas.</canvas>

<blockquote>

- all drawing operations on the canvas are affected by the shaow attribute

properties = 

shadowColor
shadowOffsetX
shadowOffsetY
shadowBlur


window.onload = function() {
        var theCanvas = document.getElementById('Canvas1');
        if (theCanvas && theCanvas.getContext) {
            var ctx = theCanvas.getContext("2d");
            if (ctx) {
                // set up our basic shadow settings
                ctx.shadowColor = "#000000";
                ctx.shadowOffsetX = 10;
                ctx.shadowOffsetY = 10;
                ctx.shadowBlur = 10;
                
                // draw a simple rectangle with a shadow effect
                ctx.fillStyle = "rgba(0,0,255,1)";
                ctx.fillRect(20,20,200,100);
                
                var theString = "Drawing Text on a Canvas";
                // draw the string with some font information
                // change the shadow settings to be a bit lighter
                ctx.fillStyle = "green";
                ctx.shadowColor = "rgba(0,100,100,0.5)";
                ctx.shadowOffsetX = 5;
                ctx.shadowOffsetY = 5;
                ctx.shadowBlur = 5;
                ctx.font = "25pt Georgia";
                ctx.fillText(theString, 250,75);
                
                // draw a red line with a purplish shadow
                ctx.lineCap="round";
                ctx.lineWidth = 25;
                ctx.shadowColor = "rgba(150,0,150,0.5)";
                ctx.shadowBlur = 15;
                ctx.shadowOffsetX = -15;
                ctx.shadowOffsetY = -15;
                ctx.strokeStyle = "red";
                ctx.beginPath();
                ctx.moveTo(50,200);
                ctx.lineTo(450,200);
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