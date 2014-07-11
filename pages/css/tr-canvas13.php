<?php
$parentNav="css-home";
$pageName="css-canvas-13";
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
						// draw an image directly onto the canvas at the top left
						var srcImg = document.getElementById("img1");
						ctx.drawImage(srcImg, 0,0);
						
						// draw the image scaled down onto the canvas
						//ctx.drawImage(srcImg, 50,50,350,150);
						
						// draw just a portion of the source image onto the canvas
						//ctx.drawImage(srcImg, 350,200,125,100,50,50,125,100);
						
						// draw the video onto the canvas. We need to set an interval function
						// in order to grab each frame from the video and paint it onto the canvas.
						//var srcVid = document.getElementById("vid1");
						//srcVid.play();
						//setInterval(function () {
							//var theCanvas = document.getElementById('Canvas1');
							//var ctx = theCanvas.getContext("2d");
							//var srcVid = document.getElementById("vid1");
							//ctx.drawImage(srcVid, 0,0);							
						//}, 16);
					}
				}
			}
	</script>
<section id="rightCol1">
<h1>CSS3 Canvas 13 - Drawing Images & video</h1>

<br />
	<canvas id="Canvas1" width="700" height="300">Your browser does not support canvas.</canvas>
  	<!-- source images used in this example -->
		<img id="img1" src="../../images/emerald_bay.jpg" width="715" height="315" style="display:none;">
		<video id="vid1" src="../../video/podcast_teaser.mp4" loop style="display:none"></video>
        
        
        
<blockquote>
- You can draw an image either from a video, an image or another canvas element
- you can also re-size or crop an image

drawImage(scrImg, dx, dy) = draws img	
drawImage(scrImg, dx, dy, dw, dh) = draws img and scales
drawImage(scrImg, sx, sy, sw, sh, dx, dy, dw, dh) =  draws a portion of an image img and scales to fit dw


	window.onload = function() {
				var theCanvas = document.getElementById('Canvas1');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						// draw an image directly onto the canvas at the top left
						var srcImg = document.getElementById("img1");
						ctx.drawImage(srcImg, 0,0);
						
						// draw the image scaled down onto the canvas
						//ctx.drawImage(srcImg, 50,50,350,150);
						
						// draw just a portion of the source image onto the canvas
						//ctx.drawImage(srcImg, 350,200,125,100,50,50,125,100);
						
						// draw the video onto the canvas. We need to set an interval function
						// in order to grab each frame from the video and paint it onto the canvas.
						//var srcVid = document.getElementById("vid1");
						//srcVid.play();
						//setInterval(function () {
							//var theCanvas = document.getElementById('Canvas1');
							//var ctx = theCanvas.getContext("2d");
							//var srcVid = document.getElementById("vid1");
							//ctx.drawImage(srcVid, 0,0);							
						//}, 16);
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