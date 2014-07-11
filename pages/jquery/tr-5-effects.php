<?php
$parentNav="jquery-home";
$pageName="jquery";
$category="jquery";
?>
<?php include '../../includes/header2.php'; ?>
 <style rel="stylesheet" type="text/css" />
/*
	TEMPLATE STYLES
	-------------------------------------------------------------------
*/


h1
{
	font-size: 24px;
	margin: 0 0 1px 0;
	padding: 30px 20px;
	background: green;
	color: #fff;
	font-weight: normal;
	letter-spacing: 1px;
}

ul#nav 
{
	overflow: hidden;
	margin: 0;
	padding: 0;
	background: #666;
}
	ul#nav li 
	{
		float: left;
		list-style: none;
		border-right: 1px solid #fff;	
	}
	ul#nav a 
	{
		display: block;
		padding: 6px 20px;
		background: #666;
		color: #fff;
		text-decoration: none;
		font-size: 14px;
	}
	ul#nav a:hover
	{
		background: gray;
	}
	li.selected, li .selected, .selected{background-color: red;}
#cont
{
	font-size: 13px;
	padding: 20px;
}
	
#footer
{
	font-size: 11px;
	color: gray;
	border-top: 1px solid #666;
	padding: 10px 20px 0;
}


/*
	MISC STYLES
	-------------------------------------------------------------------
*/
.selected 
{
	color: white !important;
	background: red !important;
}
</style>
<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->


		<h1>EFFECTS</h1>
		
		<ul id="nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		
		<div id="cont">
	
			<p><a href="#">Click me!</a></p>
			
			<div class="show" style="
				padding: 8px 12px;
				color: #fff;
				background: green;">Visible content here...
			</div>
			
			<div class="hide" style="
				display: none;
				padding: 8px 12px;
				color: #fff;
				background: red;">Hidden content here...
			</div>
				
				
		</div>	
		

		<div class="hide">Hide: <p>this</p></div>
		<div class="show">Show: <p>this</p></div>
			
<blockquote>
<p>
	
</p>
</blockquote>
<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {



// HIDE
// you can use 1000, slow, fast
$('div.hide').click(function(){
$('div.hide p').hide(1000);
});
 
// SHOW
$('div.show p').hide();
$('div.show').click(function(){
$('div.show p').show(1000);
});


// HIDE
// you can use 1000, slow, fast
/*
$('#cont').hide(1000);
*/

// HIDE WITH CALL BACK
/*
$('#cont div.show').hide(1000, function(){
	alert("hidden");
}); 
*/


// SHOW
/*
$('#cont div.hide').show(1000, function(){
	console.log("show hidden");
});
*/


// TOGGLE 
/*
$('#cont a').click(function(){
	$('#cont div.hide').toggle(1000);
});
*/


// SLIDE TOGGLE
/*
$('#cont div.show').click(function(){
	$('#cont div.hide').slideToggle(1000);
}); 
*/


// SLIDE UP
/*
$('#cont div.show').slideUp(1000, function(){
	console.log("slideup");
}); 
*/


// SLIDE DOWN
/*
$('#cont div.show').slideDown(1000, function(){
	console.log("slideDown");
}); 
*/


// FADE IN
/*
$('#cont div.hide').fadeIn(1000, function(){
	console.log("fade in");
}); 
*/

// FADE OUT
/*
$('#cont div.show').fadeOut(1000, function(){
	console.log("fade out");
}); 
*/


// FADE TO - to a set opacity
/*
$('#cont div.hide').fadeTo(1000, 0.25, function(){
	console.log("fade in to 0.25");
}); 
*/


// ANIMATE

// note that apacity you can use show, hide, toggle or a value
/*
$('#cont div.show').animate({ height: '200px', width: '200px', opacity: '0.5'},2000); 
*/


// ANIMATE from current size using += or -=
/*
// note that apacity you can use show, hide, toggle or a value
$('#cont div.show').animate({ 
	height: '+=50px', 
	width: '200px', 
	opacity: '0.5'
	},2000); 
*/	
	

// ANIMATE add easing - linear or swing (start fast then slows

// note that apacity you can use show, hide, toggle or a value
$('#cont div.show').animate({ 
	height: '+=50px', 
	width: '200px', 
	opacity: '0.5'
	},
	2000,
	'swing',
	function(){
		console.log('complete');
	}
	); 

});
</script>
<?php include '../../includes/footer.php'; ?>  