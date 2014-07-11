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
			
			<h2><span>Header</span></h2>
			<p><b>Lots of test text Lots of test text Lots of test text Lots of test text Lots of test text Lots of test text </b></p>
			
			<form action="" method="POST" id="form">
				<input type="text" id="text" name="text">
				<input type="submit" id="submit" name="submit">
			</form>
			
		</div>	
		


<blockquote>
<p>

// api.jquery.com/category/Manipulation/

	// GET HTML
	/*
	 console.log('HTML:' + $('#cont h2').html() );   //returns HTML: span>Header /span>
	*/

	
	// GET TEXT
	/*
	 console.log('HTML:' + $('#cont h2').text() );   //returns TEXT: Header
	*/


	// SET HTML
	/*
	$('#cont h2').html('i>NEW HEADER /i>');   //H2 becomes NEW HEADER (italic)
	*/
	
	
	// SET TEXT
	/*
	$('#cont h2').html('NEW HEADER');   //H2 becomes NEW HEADER
	*/
	
	
	// PREPEND
	/*
	$('#cont h2').prepend('Test');   //h2>New span>Header /span> /h2>
	*/
	
	
	// APPEND
	/*
	$('#cont h2').append('Test');   // h2> span>Header /span>New /h2>
	*/
	
	
	// BEFORE
	/*
	$('#cont h2').before('Test');   //This becomes Test HEADER =  New h2> span>Header /span> /h2>
	*/
	
	
	// WRAP
	/*
	$('#cont p').wrap('< div class="selected" >');   //This puts the p inside the div
	*/
	
	
	// REMOVE
	/*
	$('#cont p b').remove();   //This removes the b from < p>< b>text</ b>< p>
	*/
	
	
	// GET ATTRIBUTE
	/*
	console.log($('#text').attr('name') );   //This gets the name from the input with an id of text.
	*/
	
	
	// SET ATTRIBUTE
	/*
	console.log($('#text').attr('name','added name') );   //This sets the name for the input with an id of text.
	*/
	
	
	// REMOVE ATTRIBUTE
	/*
	$('#text').attr('name','added name');   //This removes the name attribute for the input with an id of text.
	*/
	
	
	// REMOVE ATTRIBUTE
	/*
	console.log($('#text').attr('name','added name') );   //This removes the name attribute for the input with an id of text.
	*/
	
	
	// SET VAL ATTRIBUTE
	//This sets the value in the form
	/*
	$('#form').submit(function(event){
		event.preventDefault();
		$('#text').val('SET VALUE');
	});  
	*/
	
	
	// VAL ATTRIBUTE
	/*
	//This gets the value submitted in the form
	
	$('#form').submit(function(event){
		event.preventDefault();
		alert( $('#text').val() );
	});   
	
	*/
	
</p>
</blockquote>


<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	// GET HTML
	/*
	 console.log('HTML:' + $('#cont h2').html() );   //returns HTML: <span>Header</span>
	*/

	
	// GET TEXT
	/*
	 console.log('HTML:' + $('#cont h2').text() );   //returns TEXT: Header
	*/


	// SET HTML
	/*
	$('#cont h2').html('<i>NEW HEADER</i>');   //H2 becomes NEW HEADER (italic)
	*/
	
	
	// SET TEXT
	/*
	$('#cont h2').html('NEW HEADER');   //H2 becomes NEW HEADER
	*/
	
	
	// PREPEND
	/*
	$('#cont h2').prepend('Test');   //<h2>New<span>Header</span></h2>
	*/
	
	
	// APPEND
	/*
	$('#cont h2').append('Test');   //<h2><span>Header</span>New</h2>
	*/
	
	
	// BEFORE
	/*
	$('#cont h2').before('Test');   //This becomes Test HEADER =  New<h2><span>Header</span></h2>
	*/
	
	
	// AFTER
	/*
	$('#cont h2').after('Test');   //This becomes Test HEADER =  <h2><span>Header</span></h2>New
	*/
	
		
	
	// WRAP
	/*
	$('#cont p').wrap('< div class="selected" >');   //This puts the p inside the div
	*/
	
	
	// REMOVE
	/*
	$('#cont p b').remove();   //This removes the b from < p>< b>text</ b>< p>
	*/
	
	
	// GET ATTRIBUTE
	/*
	console.log($('#text').attr('name') );   //This gets the name from the input with an id of text.
	*/
	
	
	// SET ATTRIBUTE
	/*
	console.log($('#text').attr('name','added name') );   //This sets the name for the input with an id of text.
	*/
	
	
	// REMOVE ATTRIBUTE
	/*
	$('#text').attr('name','added name');   //This removes the name attribute for the input with an id of text.
	*/
	
	
	// REMOVE ATTRIBUTE
	/*
	console.log($('#text').attr('name','added name') );   //This removes the name attribute for the input with an id of text.
	*/
	
	
	// SET VAL ATTRIBUTE
	//This sets the value in the form
	/*
	$('#form').submit(function(event){
		event.preventDefault();
		$('#text').val('SET VALUE');
	});  
	*/
	
	// GET VAL ATTRIBUTE
	//This gets the value submitted in the form
	
	$('#form').submit(function(event){
		event.preventDefault();
		alert( $('#text').val() );
	});   
	

	
});
</script>
<?php include '../../includes/footer.php'; ?>  