<?php
$parentNav="css-home";
$pageName="css-canvas-11";
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
						
						// create a pattern from an image
						var patImg = new Image();
						patImg.onload = function() {
							ctx.fillStyle = ctx.createPattern(patImg,"repeat");
							ctx.fillRect(0,0,ctx.canvas.width,ctx.canvas.height);
						}
						patImg.src = "../../assets/img/canvas/desert_desc_bug.gif";
					}
				}
				
				
				/*
				var theCanvas = document.getElementById('Canvas2');
				if (theCanvas && theCanvas.getContext) {
					var ctx2 = theCanvas.getContext("2d");
					if (ctx2) {
						
						// create a pattern from a video
					    setTimeout(function() {
							var vid = document.getElementById('vidEl');
							var theCanvas2 = document.getElementById('Canvas2');
							var ctx2 = theCanvas2.getContext("2d");
							var vidPat = ctx2.createPattern(vid,"repeat");
							ctx2.fillStyle = vidPat;
							ctx2.fillRect(0,0,ctx2.canvas.width,ctx2.canvas.height);

						},3000);  // get the snap shot 3 seconds in
					}
				}*/
				
				
				var theCanvas = document.getElementById('Canvas3');
				if (theCanvas && theCanvas.getContext) {
					var ctx3 = theCanvas.getContext("2d");
					if (ctx3) {
						
						
						// create a pattern from an image
						var patImg = new Image();
						patImg.onload = function() {
							ctx.fillStyle = ctx.createPattern(patImg,"repeat");
							ctx.fillRect(0,0,ctx.canvas.width,ctx.canvas.height);
						}
						patImg.src = "../../assets/img/canvas/desert_desc_bug.gif";
						
						
						// create a pattern from another canvas
						var patCanvas = document.getElementById('patCan');
						var patCtx = patCanvas.getContext("2d");
						// draw a line in the canvas
						patCtx.strokeStyle = "red";
						patCtx.lineWidth=1;
						patCtx.beginPath();
						patCtx.moveTo(0,0);
						patCtx.lineTo(25,25);
						patCtx.stroke();
						
						// now use that canvas as a pattern
						var strokePat = ctx3.createPattern(patCanvas,"repeat");
						ctx3.strokeStyle = strokePat;
						ctx3.lineWidth = 25;
						ctx3.strokeRect(50,50,200,200);
					}
				}
					
				
			}
		</script>
<section id="rightCol1">
<h1>CSS3 Canvas 11 - Drawing with patterns</h1>

<br />
	<canvas id="Canvas1" width="700" height="300">Your browser does not support canvas.</canvas>
   <br />
    <canvas id="Canvas2" width="700" height="300">Your browser does not support canvas.</canvas>
    
    <!--
    <video autoplay controls id="vidEl" style="display:block">
    <src="../assets/video/podcast_teaser.mp4" type="video/mp4">
    Your browser does not support the <code>video</code> element.
    </video>  
    -->
    <canvas id="Canvas3" width="700" height="300">Your browser does not support canvas.</canvas>
    <canvas id="patCan" width="25" height="25"></canvas>
    
    
<blockquote>

- you can create a pattern from a video, image or canvas element
- if the image is an animated image, the pattern uses the poster frame
- for video the current playback frame is used as the pattern
- patterns can repeat

			window.onload = function() {
				
				
				var theCanvas = document.getElementById('Canvas1');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					
					
					if (ctx) {
						
						// create a pattern from an image
						var patImg = new Image();
						patImg.onload = function() {
							ctx.fillStyle = ctx.createPattern(patImg,"repeat");
							ctx.fillRect(0,0,ctx.canvas.width,ctx.canvas.height);
						}
						patImg.src = "../../assets/img/canvas/desert_desc_bug.gif";
					}
				}
				
				
				/*
				var theCanvas = document.getElementById('Canvas2');
				if (theCanvas && theCanvas.getContext) {
					var ctx2 = theCanvas.getContext("2d");
					if (ctx2) {
						
						// create a pattern from a video
					    setTimeout(function() {
							var vid = document.getElementById('vidEl');
							var theCanvas2 = document.getElementById('Canvas2');
							var ctx2 = theCanvas2.getContext("2d");
							var vidPat = ctx2.createPattern(vid,"repeat");
							ctx2.fillStyle = vidPat;
							ctx2.fillRect(0,0,ctx2.canvas.width,ctx2.canvas.height);

						},3000);  // get the snap shot 3 seconds in
					}
				}*/
				
				
				var theCanvas = document.getElementById('Canvas3');
				if (theCanvas && theCanvas.getContext) {
					var ctx3 = theCanvas.getContext("2d");
					if (ctx3) {
						
						
						// create a pattern from an image
						var patImg = new Image();
						patImg.onload = function() {
							ctx.fillStyle = ctx.createPattern(patImg,"repeat");
							ctx.fillRect(0,0,ctx.canvas.width,ctx.canvas.height);
						}
						patImg.src = "../../assets/img/canvas/desert_desc_bug.gif";
						
						
						// create a pattern from another canvas
						var patCanvas = document.getElementById('patCan');
						var patCtx = patCanvas.getContext("2d");
						// draw a line in the canvas
						patCtx.strokeStyle = "red";
						patCtx.lineWidth=1;
						patCtx.beginPath();
						patCtx.moveTo(0,0);
						patCtx.lineTo(25,25);
						patCtx.stroke();
						
						// now use that canvas as a pattern
						var strokePat = ctx3.createPattern(patCanvas,"repeat");
						ctx3.strokeStyle = strokePat;
						ctx3.lineWidth = 25;
						ctx3.strokeRect(50,50,200,200);
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