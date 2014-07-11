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
		
		
				// draw lines of varying widths
				var theCanvas = document.getElementById('Canvas1');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						for (var i = 0; i < 10; i++){   // CREATE A FORLOOP FROM 0 TO 10
							ctx.beginPath();			//ALLWAYS START WITH THIS FUNCTION
							ctx.lineWidth = i+1;		//SET THE WIDTH TO WHATEVER THE COUNTER IS PLUS 1PX
							ctx.moveTo(25, 25+i*15);	// SET PEN X TO 25 AND Y TO 25+ THE LINE WIDTH / 15
							ctx.lineTo(475, 25+i*15);	// MOVE PEN X TO 475 AND Y TO 25+ THE LINE WIDTH / 15
							ctx.stroke();				// ADD NO STROKE - YOU NEED THIS TO FILL IN THE LINE
						}						
					}
				}
				
				
				
				
				// demonstrate the lineCap endings
				var theCanvas = document.getElementById('Canvas2');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						
						// draw the guidelines
						ctx.strokeStyle="cyan";
						ctx.lineWidth=1;
						ctx.beginPath();
						ctx.moveTo(50,25);
						ctx.lineTo(50,175);
						ctx.moveTo(450,25);
						ctx.lineTo(450,175);
						ctx.stroke();
						
						// draw lines using each lineCap;
						ctx.lineWidth = 25;
						ctx.strokeStyle="black";
						
						ctx.lineCap="butt"; //BUTT END
						ctx.beginPath();
						ctx.moveTo(50,50);
						ctx.lineTo(450,50);
						ctx.stroke();		
										
						ctx.lineCap="round"; //ROUND END
						ctx.beginPath();
						ctx.moveTo(50,100);
						ctx.lineTo(450,100);
						ctx.stroke();		
										
						ctx.lineCap="square"; //SQUARE END
						ctx.beginPath();
						ctx.moveTo(50,150);
						ctx.lineTo(450,150);
						ctx.stroke();	
											
					}
				}




				// Show the lineJoin variations
				var theCanvas = document.getElementById('Canvas3');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						ctx.lineWidth = 15;
						ctx.strokeStyle="black";
						
						ctx.lineJoin="round";
						ctx.beginPath();
						ctx.moveTo(25,150);
						ctx.lineTo(75,50);
						ctx.lineTo(125,150);
						ctx.stroke();
												
						ctx.lineJoin="bevel";
						ctx.beginPath();
						ctx.moveTo(175,150);
						ctx.lineTo(225,50);
						ctx.lineTo(275,150);
						ctx.stroke();		
										
						ctx.lineJoin="miter";
						ctx.miterLim = 1;
						ctx.beginPath();
						ctx.moveTo(325,150);
						ctx.lineTo(375,50);
						ctx.lineTo(425,150);
						ctx.stroke();						
					}
				}
			}
		</script>
<section id="rightCol1">
<h1>CSS3 Canvas 4 - Simple LINES</h1>

<br />

	<p>This example will draw several styles of lines. First: basic line width</p>
		<canvas id="Canvas1" width="500" height="200">Your browser does not support canvas.</canvas>

		<p>Next: different settings for lineCap</p>
		<canvas id="Canvas2" width="500" height="200">Your browser does not support canvas.</canvas>

		<p>Next: different settings for lineJoin</p>
		<canvas id="Canvas3" width="500" height="200">Your browser does not support canvas.</canvas>



<blockquote>


LINES:
moveTo(x,y)   = moves pen to point
lineTo(x,y)   = draw line from where pen is
lineWidth	= width
libeCap		= line ending
lineJoin	= joining
miterLimit	= joining limit	
beginPath()	= new drawing operations
stroke()



LINES

		window.onload = function() {
		
		
				// draw lines of varying widths
				var theCanvas = document.getElementById('Canvas1');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						for (var i = 0; i < 10; i++){   // CREATE A FORLOOP FROM 0 TO 10
							ctx.beginPath();			//ALLWAYS START WITH THIS FUNCTION
							ctx.lineWidth = i+1;		//SET THE WIDTH TO WHATEVER THE COUNTER IS PLUS 1PX
							ctx.moveTo(25, 25+i*15);	// SET PEN X TO 25 AND Y TO 25+ THE LINE WIDTH / 15
							ctx.lineTo(475, 25+i*15);	// MOVE PEN X TO 475 AND Y TO 25+ THE LINE WIDTH / 15
							ctx.stroke();				// ADD NO STROKE - YOU NEED THIS TO FILL IN THE LINE
						}						
					}
				}
				
				
				
				
				// demonstrate the lineCap endings
				var theCanvas = document.getElementById('Canvas2');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						
						// draw the guidelines
						ctx.strokeStyle="cyan";
						ctx.lineWidth=1;
						ctx.beginPath();
						ctx.moveTo(50,25);
						ctx.lineTo(50,175);
						ctx.moveTo(450,25);
						ctx.lineTo(450,175);
						ctx.stroke();
						
						// draw lines using each lineCap;
						ctx.lineWidth = 25;
						ctx.strokeStyle="black";
						
						ctx.lineCap="butt"; //BUTT END
						ctx.beginPath();
						ctx.moveTo(50,50);
						ctx.lineTo(450,50);
						ctx.stroke();		
										
						ctx.lineCap="round"; //ROUND END
						ctx.beginPath();
						ctx.moveTo(50,100);
						ctx.lineTo(450,100);
						ctx.stroke();		
										
						ctx.lineCap="square"; //SQUARE END
						ctx.beginPath();
						ctx.moveTo(50,150);
						ctx.lineTo(450,150);
						ctx.stroke();	
											
					}
				}




				// Show the lineJoin variations
				var theCanvas = document.getElementById('Canvas3');
				if (theCanvas && theCanvas.getContext) {
					var ctx = theCanvas.getContext("2d");
					if (ctx) {
						ctx.lineWidth = 15;
						ctx.strokeStyle="black";
						
						ctx.lineJoin="round";
						ctx.beginPath();
						ctx.moveTo(25,150);
						ctx.lineTo(75,50);
						ctx.lineTo(125,150);
						ctx.stroke();
												
						ctx.lineJoin="bevel";
						ctx.beginPath();
						ctx.moveTo(175,150);
						ctx.lineTo(225,50);
						ctx.lineTo(275,150);
						ctx.stroke();		
										
						ctx.lineJoin="miter";
						ctx.miterLim = 1;
						ctx.beginPath();
						ctx.moveTo(325,150);
						ctx.lineTo(375,50);
						ctx.lineTo(425,150);
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