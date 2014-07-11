<?php
$parentNav="css-home";
$pageName="css-home";
$category="css-animations";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1" class="clearfix">
<!-- PAGE CODE STARTS HERE-->

<h1>CSS3 Animation Delay</h1>

		<img src="../../../assets/img/unicycle_man.png" alt="unicycle_man" width="100" height="205" class="cycle-delay" />
    
<blockquote>
<p>
.cycle-delay {
	position: relative;
	top:20px;
	left:20px;

// REFERENCE KEYFRAME "RIDE"
    
	-webkit-animation-name: ride; 
	-moz-animation-name: ride;
	-o-animation-name: ride;
	animation-name: ride;
	
// SET DURATION
	-webkit-animation-duration: 2s;
	-moz-animation-duration: 2s;
	animation-duration: 2s;
	-o-animation-duration: 2s;
	animation-duration: 2s;

// SET EASE IN/OUT
//ease, ease-in, ease-out, ease-in-out, linear, custom, awesome

	-webkit-animation-timing-function: ease-in;
	-moz-animation-timing-function: ease-in;
	-o-animation-timing-function: ease-in;
	animation-timing-function: ease-in;
			
// SET HOW MANY TIMES IT SHOULD PLAYBACK
// 1, 2, 3 etc... or infinate

	-webkit-animation-iteration-count: 1;
	-moz-animation-iteration-count: 1;
	-o-animation-iteration-count: 1;
	animation-iteration-count: 1;
    
// SET START DELAY

    -webkit-animation-delay: 2s;
	-moz-animation-delay: 2s;
	-o-animation-delay: 2s;
	animation-delay: 2s;

}



// KEYFRAME "RIDE"
@-webkit-keyframes ride {
	from{-webkit-transform: translateX(0px);transform: translateX(0px);}
	to{-webkit-transform: translateX(400px);transform: translateX(400px);}
}

@-moz-keyframes ride {
	from{-moz-transform: translateX(0px);transform: translateX(0px);}
	to{-moz-transform: translateX(400px);transform: translateX(400px);}
}

@-o-keyframes ride {
	from{-o-transform: translateX(0px);transform: translateX(0px);}
	to{-o-transform: translateX(400px);transform: translateX(400px);}
}
/* For our forwards animation-fill-mode */
@-webkit-keyframes move-right {
	from {-webkit-transform: translateX(0);}
	to {-webkit-transform: translateX(450px);}
}
</p>
</blockquote>



<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  