<?php
$parentNav="css-home";
$pageName="css-home";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1" class="clearfix">
<!-- PAGE CODE STARTS HERE-->

<h1>CSS3 Animation All Directions</h1>
<img class="ballMoveAllOver" src="../../../assets/img/ball.png" alt="ball" width="111" height="111"/>    


<blockquote>
<p>
EASING AND TIME (timing-function)
ease: this is default ( its a bit like ease-in-out)
ease-in: start slow
ease-out: end slow
ease-in-out: start slow and end slow
linear: Same from start to finish
custom: Cubic-Bezier.com 



	position: relative;
	top:20px;
	left:20px;
	
	-webkit-animation-name: move-all-over;
	-moz-animation-name: move-all-over;
	-o-animation-name: move-all-over;
	animation-name: move-all-over;
	
	-webkit-animation-duration: 4s;
	-moz-animation-duration: 4s;
	animation-duration: 4s;
	animation-duration: 4s;
	
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



/* Move all directions */
@-webkit-keyframes move-all-over {
	0% {-webkit-transform: translateX(100px);transform: translateX(100px);}
	20% {-webkit-transform: translateY(-10px);transform: translateY(-10px);}
	40% {-webkit-transform:translateX(250px);transform:translateY(250px);}		
	60% {-webkit-transform: translateY(100px);transform: translateY(100px);}
	80% {-webkit-transform: translateX(10px);transform: translateX(10px);}
	100% {-webkit-transform:translateY(450px);transform:translateY(450px);}			
}

@-moz-keyframes move-all-over { 
	0% {-webkit-transform: translateX(100px);transform: translateX(100px);}
	20% {-webkit-transform: translateY(-10px);transform: translateY(-10px);}
	40% {-webkit-transform:translateX(250px);transform:translateY(250px);}		
	60% {-webkit-transform: translateY(100px);transform: translateY(100px);}
	80% {-webkit-transform: translateX(10px);transform: translateX(10px);}
	100% {-webkit-transform:translateY(450px);transform:translateY(450px);}			
} 

@-o-keyframes move-all-over { 
0% {-webkit-transform: translateX(100px);transform: translateX(100px);}
	20% {-webkit-transform: translateY(-10px);transform: translateY(-10px);}
	40% {-webkit-transform:translateX(250px);transform:translateY(250px);}		
	60% {-webkit-transform: translateY(100px);transform: translateY(100px);}
	80% {-webkit-transform: translateX(10px);transform: translateX(10px);}
	100% {-webkit-transform:translateY(450px);transform:translateY(450px);}		
} 

/* For our forwards animation-fill-mode */ 
@-webkit-keyframes move-all-over { 
0% {-webkit-transform: translateX(100px);transform: translateX(100px);}
	20% {-webkit-transform: translateY(-10px);transform: translateY(-10px);}
	40% {-webkit-transform:translateX(250px);transform:translateY(250px);}		
	60% {-webkit-transform: translateY(100px);transform: translateY(100px);}
	80% {-webkit-transform: translateX(10px);transform: translateX(10px);}
	100% {-webkit-transform:translateY(450px);transform:translateY(450px);}	
}

	

</p>
</blockquote>



<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  