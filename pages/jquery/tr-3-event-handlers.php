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


		<h1>Event handlers</h1>
		
		<ul id="nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		
		<div id="cont">
	
			<p><a href="#">Click me!</a></p>
			
			<form action="" method="post" id="my_form">
				<input type="text" name="test">
				<input type="submit" name="submit" value="submit">
			</form>
		</div>	
		


<blockquote>
<p>
	<!-- CLICK FUNCTION -->
 	
 	$('p').click(function(){
		$(this).addClass('selected');
 	});
	
	
	<!-- CLICK FUNCTION - PREVENT DEFAULT LINK ACTION -->
	
 	$('p').click(function(event){
 		event.preventDefault();
		$(this).addClass('selected');
 	});
 	
 	
 	<!-- HOVER FUNCTION - ON / OFF -->
 	
 	$('p').hover(
		
		function(){
		$(this).addClass('selected');
		},
		function(){
		$(this).removeClass('selected');
		}
 	); 
 	
 	
 	<!-- FORMS - FOCUS -->
 	
 	$('form input').focus(function(){
		$(this).addClass('selected');
 	});
 	
 	 
 	 <!-- FORMS - SUBMIT -->
 	
 	$('#my_form').submit(function(event){
 		event.preventDefault();
 		alert("testing");
 	});
 	
 	NOTE: THERE ARE LOTS OF "EVENTS" TO USE ON THE JQ WEBSITE
 	
</p>
</blockquote>
<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

 	<!-- CLICK FUNCTION -->
 	/*
 	$('p').click(function(){
		$(this).addClass('selected');
 	});
	*/
	
	<!-- CLICK FUNCTION - PREVENT DEFAULT LINK ACTION -->
	/*
 	$('p').click(function(event){
 		event.preventDefault();
		$(this).addClass('selected');
 	});
 	*/
 	
 	<!-- HOVER FUNCTION - ON / OFF -->
 	/*
 	$('p').hover(
		
		function(){
		$(this).addClass('selected');
		},
		function(){
		$(this).removeClass('selected');
		}
 	); */
 	
 	
 	<!-- FORMS - FOCUS -->
 	/*
 	$('form input').focus(function(){
		$(this).addClass('selected');
 	});
 	 */
 	 
 	 
 	 <!-- FORMS - SUBMIT -->
 	
 	$('#my_form').submit(function(event){
 		event.preventDefault();
 		alert("testing");
 	});
	
});
</script>
<?php include '../../includes/footer.php'; ?>  