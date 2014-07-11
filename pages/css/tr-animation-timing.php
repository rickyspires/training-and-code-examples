<?php
$parentNav="css-home";
$pageName="css-home";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1" class="clearfix">
<!-- PAGE CODE STARTS HERE-->

<h1>CSS3 Animation Easing & Timing</h1>
<img class="ballTiming" src="../../../assets/img/ball.png" alt="ball" width="111" height="111"/>    


<blockquote>
<p>
EASING AND TIME (timing-function)
ease: this is default ( its a bit like ease-in-out)
ease-in: start slow
ease-out: end slow
ease-in-out: start slow and end slow
linear: Same from start to finish
custom: Cubic-Bezier.com 


.ballTiming{
	
	position: relative;
	top:20px;
	left:20px;
	
-webkit-animation-name: move-right;
	-moz-animation-name: move-right;
	-o-animation-name: move-right;
	animation-name: move-right;
	
	-webkit-animation-duration: 3s;
	-moz-animation-duration: 3s;
	animation-duration: 3s;
	animation-duration: 3s;
			
	-webkit-animation-iteration-count: 4;
	-moz-animation-iteration-count: 4;
	-o-animation-iteration-count: 4;
	animation-iteration-count: 4;
	
	-webkit-animation-fill-mode: forwards;
	-moz-animation-fill-mode: forwards;
	-o-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
	
	-webkit-transition-timing-function: cubic-bezier(.38,.95,.67,-0.04);
   -moz-transition-timing-function: cubic-bezier(.38,.95,.67,-0.04);
    -ms-transition-timing-function: cubic-bezier(.38,.95,.67,-0.04);
     -o-transition-timing-function: cubic-bezier(.38,.95,.67,-0.04);
        transition-timing-function: cubic-bezier(.38,.95,.67,-0.04); /* easeInExpo */
}

/* KEYFRAME "move-right" */ 
@-webkit-keyframes move-right { 
from{-webkit-transform: translateX(0px);transform: translateX(0px);} 
to{-webkit-transform: translateX(400px);transform: translateX(400px);} 
} 

@-moz-keyframes move-right { 
from{-moz-transform: translateX(0px);transform: translateX(0px);} 
to{-moz-transform: translateX(400px);transform: translateX(400px);} 
} 

@-o-keyframes move-right { 
from{-o-transform: translateX(0px);transform: translateX(0px);} 
to{-o-transform: translateX(400px);transform: translateX(400px);} 
} 

/* For our forwards animation-fill-mode */ 
@-webkit-keyframes move-right { 
from {-webkit-transform: translateX(0);} 
to {-webkit-transform: translateX(400px);} 
}
		

</p>
</blockquote>



<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  