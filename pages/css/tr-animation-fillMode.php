<?php
$parentNav="css-home";
$pageName="css-home";
$category="css-animations";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1" class="clearfix">
<!-- PAGE CODE STARTS HERE-->

<h1>CSS3 Animation Fill Mode</h1>
<img class="ballFillMode" src="../../../assets/img/ball.png" alt="ball" width="111" height="111"/>    


<blockquote>
<p>
Fill modes:

none: Makes it pop back to the start
forwards: Will go to the last keyframe point (for this it is to{transform: translateX(400px);} )
backwards: the same as above in reverse
both: forwars and backward behaviours



.ballFillMode{
	position: relative;
	top:20px;
	left:20px;
	
    /*
	-webkit-animation-name: move-right;
	-moz-animation-name: move-right;
	-o-animation-name: move-right;
	animation-name: move-right;
	*/
    
    -webkit-animation-name: move-left-right;
	-moz-animation-name: move-left-right;
	-o-animation-name: move-left-right;
	animation-name: move-left-right;
    
	-webkit-animation-duration: 2s;
	-moz-animation-duration: 2s;
	animation-duration: 2s;
	animation-duration: 2s;
	
	-webkit-animation-timing-function: ease-in;
	-moz-animation-timing-function: ease-in;
	-o-animation-timing-function: ease-in;
	animation-timing-function: ease-in;
			
	-webkit-animation-iteration-count: 1;
	-moz-animation-iteration-count: 1;
	-o-animation-iteration-count: 1;
	animation-iteration-count: 1;
	
	-webkit-animation-delay: 1s;
	-moz-animation-delay: 1s;
	-o-animation-delay: 1s;
	animation-delay: 1s;
	
	-webkit-animation-fill-mode: both;
	-moz-animation-fill-mode: both;
	-o-animation-fill-mode: both;
	animation-fill-mode: both;
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


		
/* NOTICE THE USE OF % AND NOT FROM / TO */

/* For our backwards animation-fill-mode example */
@-webkit-keyframes move-left-right {
	0% {-webkit-transform: translateX(100px);transform: translateX(100px);}
	20% {-webkit-transform: translateX(-10px);transform: translateX(-10px);}
	100% {-webkit-transform:translateX(450px);transform:translateX(450px);}			
}

@-moz-keyframes move-left-right { 
	0% {-moz-transform: translateX(100px);transform: translateX(100px);}
	20% {-moz-transform: translateX(-10px);transform: translateX(-10px);}
	100% {-moz-transform:translateX(450px);transform:translateX(450px);}	
} 

@-o-keyframes move-left-right { 
	0% {-o-transform: translateX(100px);transform: translateX(100px);}
	20% {-o-transform: translateX(-10px);transform: translateX(-10px);}
	100% {-o-transform:translateX(450px);transform:translateX(450px);}	
} 

/* For our forwards animation-fill-mode */ 
@-webkit-keyframes move-left-right { 
	0% {-webkit-transform: translateX(100px);}
	20% {-webkit-transform: translateX(-10px);}
	100% {-webkit-transform:translateX(450px);}	
}
</p>
</blockquote>



<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  