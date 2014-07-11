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
	
#wrapper {
	position: relative;
	border-top: 4px solid #666;
	padding-top: 40px;
}
#header {
	padding: 20px 30px;
	background: #666;
	width: 100%;
	margin: 0 auto;
	color: #fff;
	font-size: 12px;
}
#pulldown {
	padding: 4px 14px;
	position: absolute;
	top: 0;
	left: 0;
	
	background: #666;
	color: #fff;
	font-size: 11px;
}


span.tooltip {
	font-style: italic;
	color: green;
}
span.tooltip:hover {
	cursor: pointer;
}
div.tooltip {
	display: none;
	position: absolute;
	
	background: green;
	padding: 4px 10px;
	color: #fff;
}

#cont .accordion {
	margin: 0;
	padding: 0;
}
#cont .accordion li {
	margin-bottom: 4px;
	padding: 0;
	list-style: none;
	font-size: 13px;
}
#cont .accordion h3 {
	padding: 10px 14px;
	margin: 0;
	background: #eee;
	color: green;
	font-size: 16px;
}
#cont .accordion h3:hover {
	background: #ddd;
	cursor: pointer;
}
#cont .accordion .item {
	padding: 10px 14px;
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


	<div id="header">
		<p>Client Info</p>
	</div>

	<div id="wrapper">
		<div id="pulldown">Client Info &nbsp;&or;</div>
	
		<h1>Beginners jQuery</h1>
		
		<ul id="nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		
		<div id="cont">
		
			<h2><span>Header</span></h2>
			
			<p><b>Lorem ipsum dolor sit amet</b>, consectetur adipiscing elit. Aliquam porta ante et nisi ornare pharetra. Pellentesque in lectus urna, sit amet dignissim ipsum. Sed adipiscing tellus at nunc pretium placerat. Nullam vel ligula ipsum, eu porttitor odio.</p>
			
			

			<p>
				<span title="Tooltip<br/> here" class="tooltip">some text</span>
				some more text some more text some more text some more text some more text
				<span title="Another Tooltip here" class="tooltip">some text</span>
				some more text some more text some more text some more text some more text
			</p>	
			
			
			<ul class="accordion">
				<li>
					<h3>Header</h3>
					<div class="item">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit, diam sed sollicitudin vulputate, tellus enim vulputate erat, vel elementum nulla elit ut dolor.</p>
						<p>Phasellus vitae elit euismod purus malesuada scelerisque. Curabitur magna sapien, hendrerit quis facilisis vel, dictum vitae neque.</p>
					</div>
				</li>
				<li>
					<h3>Another Header</h3>
					<div class="item">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit, diam sed sollicitudin vulputate, tellus enim vulputate erat, vel elementum nulla elit ut dolor. Phasellus vitae elit euismod purus malesuada scelerisque. Curabitur magna sapien, hendrerit quis facilisis vel, dictum vitae neque.</p>
					</div>
				</li>
				<li>
					<h3>A Third Header</h3>
					<div class="item">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p>Morbi hendrerit, diam sed sollicitudin vulputate, tellus enim vulputate erat, vel elementum nulla elit ut dolor. Phasellus vitae elit euismod purus malesuada scelerisque. Curabitur magna sapien, hendrerit quis facilisis vel, dictum vitae neque.</p>
					</div>
				</li>
			</ul>
				
			
		</div>	
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


// PULL DOWN



	$('#header').hide();
	
	$('#pulldown').click(function(){
		$(this).toggleClass('active');
		if ( $(this).hasClass('active') )
		{
			$(this).html('Client Info &nbsp;&and;');
		}else{
			$(this).html('Client Info &nbsp;&or;');
		}
		$('#header').slideToggle();
	});
	
	
// TOOL TIP

	$('span.tooltip').hover(
		function()
		{
			$(this).before('<div class="tooltip">' + $(this).attr('title') + '</div>');
			$(this).removeAttr('title');
			
			//get position
			var pos = $(this).position();
			
			//get the tooltip height
			var height = $('div.tooltip').innerHeight();
			
			
			//set position
			$('div.tooltip')
			.css('top', (pos.top - height - 2) + 'px')
			.css('left', pos.left + 'px');
			
			//fade in
			$('div.tooltip').fadeIn('fast');
		},
		function(){
		
			//put title back in place
			$(this).attr('title', $('div.tooltip').html());
			
			//fade in
			$('div.tooltip').remove();
		}
	);	
	
	
//ACCORDION
	
	$('ul.accordion div.item').hide();
	
	$('ul.accordion h3').click(function() {
	
		if (! $(this).parent().hasClass('active'))
		{
			// hide open
			$('li.active div.item').slideUp();
			$('li.active').toggleClass('active');
		
			// display content
			$(this).parent().addClass('active');
			$('li.active div.item').slideDown();
		}
		else 
		{
			// hide open
			$('li.active div.item').slideUp();
			$('li.active').toggleClass('active');
		}
	});
	
});
</script>
<?php include '../../includes/footer.php'; ?>  