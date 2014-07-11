<?php
$parentNav="css-home";
$pageName="css-home";
$category="css-animations";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1" class="clearfix">
<!-- PAGE CODE STARTS HERE-->

<h1>CSS3 Animation Direction</h1>
<img class="ballDirection" src="../../../assets/img/ball.png" alt="ball" width="111" height="111"/>    


<blockquote>
<p>
DIRECTIONS:
normal: Played as normal, keyframes play from start to end
reverse: keyframes play from end to start
alternate: it will start with normal then reverse the the second time it plays it will be in reverse (interation count needs to be more that 1)
alternate reverse: it will start with in reverse then normal the the second time it plays it will be in reverse


.ballDirection{
	position: relative;
	top:20px;
	left:20px;
	
	-webkit-animation-name: move-right;
	-moz-animation-name: move-right;
	-o-animation-name: move-right;
	animation-name: move-right;
	
	-webkit-animation-duration: 2s;
	-moz-animation-duration: 2s;
	animation-duration: 2s;
	animation-duration: 2s;
	
	-webkit-animation-timing-function: ease-in;
	-moz-animation-timing-function: ease-in;
	-o-animation-timing-function: ease-in;
	animation-timing-function: ease-in;
			
	-webkit-animation-iteration-count: 4;
	-moz-animation-iteration-count: 4;
	-o-animation-iteration-count: 4;
	animation-iteration-count: 4;
	
	-webkit-animation-fill-mode: forwards;
	-moz-animation-fill-mode: forwards;
	-o-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
    
    -webkit-animation-direction: alternate;
	-moz-animation-direction: alternate;
	-o-animation-direction: alternate;
	animation-direction: alternate;
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