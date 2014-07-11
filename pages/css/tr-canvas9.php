<?php
$parentNav="css-home";
$pageName="css-canvas-9";
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
				var theString = "Drawing Text on a Canvas";
				
				// draw a simple text string using the default settings
				ctx.fillText(theString, 20,20);
				
				// draw the string with some font information
				ctx.font = "25pt Georgia"
				ctx.fillText(theString, 20,60);

				// draw the string with a fillStyle color
				ctx.fillStyle = "blue";
				ctx.fillText(theString, 20,100);
				
				// draw the string with both a stroke and a fill with some opacity setting
				ctx.font = "32pt Verdana"
				//ctx.textBaseline="middle";
				ctx.fillStyle = "yellow";
				ctx.strokeStyle = "rgba(0,255,0,0.8)";
				ctx.fillText(theString, 20,160);						
				ctx.strokeText(theString, 20,160);
				
				// use measureText to draw a line under the text
				var textW = ctx.measureText(theString);
				ctx.beginPath();
				ctx.strokeStyle="black";
				ctx.moveTo(20,170);
				ctx.lineTo(textW.width,170);
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

- Drawing text is simular to drawing any other path

- text can be stroked and filled

- dont use text on the canvas as a replacement for regular text


Properties include:
font
textAlign
textBaseline
fillText(txt, x, y, [maxW])
strokeText(txt, x, y, [maxW])
measureText(text)




window.onload = function() {
		var theCanvas = document.getElementById('Canvas1');
		if (theCanvas && theCanvas.getContext) {
			var ctx = theCanvas.getContext("2d");
			if (ctx) {
				var theString = "Drawing Text on a Canvas";
				
				// draw a simple text string using the default settings
				ctx.fillText(theString, 20,20);
				
				// draw the string with some font information
				ctx.font = "25pt Georgia"
				ctx.fillText(theString, 20,60);

				// draw the string with a fillStyle color
				ctx.fillStyle = "blue";
				ctx.fillText(theString, 20,100);
				
				// draw the string with both a stroke and a fill with some opacity setting
				ctx.font = "32pt Verdana"
				//ctx.textBaseline="middle";
				ctx.fillStyle = "yellow";
				ctx.strokeStyle = "rgba(0,255,0,0.8)";
				ctx.fillText(theString, 20,160);						
				ctx.strokeText(theString, 20,160);
				
				// use measureText to draw a line under the text
				var textW = ctx.measureText(theString);
				ctx.beginPath();
				ctx.strokeStyle="black";
				ctx.moveTo(20,170);
				ctx.lineTo(textW.width,170);
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