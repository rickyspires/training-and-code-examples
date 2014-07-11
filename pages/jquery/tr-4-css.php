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


		<h1>CSS</h1>
		
		<ul id="nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		
		<div id="cont">
	
			<p>Click me!</p>
			
			<div style="
				height:40px;
				width:40px;
				padding:20px;
				margin:20px 0;
				background: green;
				border: 5px solid #000;
			"></div>
		</div>	
		


<blockquote>
<p>
	
</p>
</blockquote>
<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	// ADD CLASS
	/*
	$('p').addClass('selected');
	*/
	
	
	// REMOVE CLASS
	/*
	$('p').removeClass('selected');
	*/
	
	
	// TOGGLE CLASS - click
	/*
	$('p').click(function(){
		$(this).toggleClass('selected');
	});
	*/
	
	
	// TOGGLE CLASS - hover
	/*
	$('p').hover(
		function(){
			$(this).toggleClass('selected');
		},
		function(){
			$(this).toggleClass('selected');
		}
	);
	*/
	
	
	// FIND HEIGHT & WIDTH
	/*
		alert('height:' + $('#cont div').height() );
	*/
	
	
	// SET HEIGHT & WIDTH 
	/*
		$('#cont div').height('100px');
	*/
	
	
	// MARGIN & PADDING = 
	// INNER WIDTH & OUTER WIDTH 
	// INNER HEIGHT & OUTER HEIGHT
	/*
		alert('innerHeight:' + $('#cont div').innerHeight() );
		//this will return 80 (height=40 + 2xpadding=20=40  == 80)
	*/
	/*
		alert('outerHeight:' + $('#cont div').outerHeight() );
		//this will return 90 (height=40 + 2xpadding=20=40 + 2x5px border)  == 90)
	*/
	
	//TO INCLUDE THE MARGIN ADD "TRUE"LIKE THIS:  .outerHeight(true)
	// that would return 130
	
	
	
	// SET A CSS PROPERTY
	/*
		$('#cont div').css('background-color','yellow');	
	*/
	
	
	// GET A CSS PROPERTY
	/*
		alert('background-color: ' + $('#cont div').css('background-color'));	
	*/
	
	
	
	
	
	
	
	
	
	
	
});
</script>
<?php include '../../includes/footer.php'; ?>  