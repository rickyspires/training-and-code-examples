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


		<h1>Select Elements</h1>
		
		<ul id="nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		
		<div id="cont">

			<ul class="parent">
				<li>Parent List Item  
					<ul class="child">
						<li>Child List Item</li>
						<li>Child List Item</li>
						<li>Child List Item</li>
					</ul>
				</li>
				<li>Parent List Item</li>
				<li>Parent List Item</li>
				<li>Parent List Item</li>
				<li>Parent List Item</li>
			</ul>	
		</div>	
		


<blockquote>
<p>
the * symbol means all the elements on the page.

$("*").addClass("selected");


 // SELECT ALL ELEMENTS   
	
	$("*").addClass("selected");
		
	//SELECT BY LI TAGS
	$("li").addClass("selected");
	
	//SELECT BY CHILD LI TAGS
	$("#content li").addClass("selected");
	$("ul.child li").addClass("selected");
	
	//SELECT MULTIPLE ITEMS
	$("h1, #content li").addClass("selected");
	
	//SELECT FIRST, LAST ELEMENT
	$("ul.child li:first").addClass("selected");
	$("ul.child li:last").addClass("selected");
	$("ul.child li:odd").addClass("selected"); // NUMBERS START AT 0
	$("ul.child li:even").addClass("selected");
	
	
	//SELECT PARENT
	$("li").click(function(){
		$(this).parent().addClass("selected"); //THIS SELECTS THE UL
	}	
	
	
	//CHAINING 
	$("ul.child")
		.addClass("selected")
		.addClass("sample");
	
	
	//SELECT CHILDREN   //THIS ADDS THE CLASS TO THE LI
	$("ul.child")
		.children()
		.addClass("selected");
	
	
	//SELECT SIBLINGS
	$("li").click(function(){
		$(this)
			.siblings()
			.addClass("selected"); 
			//THIS SELECTS ALL THE SIBLINGS BUT NOT THE ONE CLICKED ON
	}
	
	
	//SELECT NEXT ITEM
	$("li").click(function(){
		$(this)
		.next()
		.addClass("selected"); //THIS SELECTS NEXT ITEM
	}	
	
	
	//SELECT PREVIOUS ITEM
	$("li").click(function(){
		$(this)
		.prev()
		.addClass("selected"); //THIS SELECTS NEXT ITEM
	}	
	
	
	// FIND ALL LI IN ul.child
	$('ul.child li')
		.eq(2)
		.addClass("selected");    
		//index starts at 0 
		
		
	// FIND ALL LI IN PARENT
	$('ul.parent li')
		.eq(1)
		.addClass("selected");    
	
</p>
</blockquote>
<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
       
    // SELECT ALL ELEMENTS   
	//$("*").addClass("selected");
		
	//SELECT BY LI TAGS
	//$("li").addClass("selected");
	
	//SELECT BY CHILD LI TAGS
	//$("#content li").addClass("selected");
	//$("ul.child li").addClass("selected");
	
	//SELECT MULTIPLE ITEMS
	//$("h1, #content li").addClass("selected");
	
	//SELECT FIRST, LAST ELEMENT
	//$("ul.child li:first").addClass("selected");
	//$("ul.child li:last").addClass("selected");
	//$("ul.child li:odd").addClass("selected"); // NUMBERS START AT 0
	//$("ul.child li:even").addClass("selected");
		
	//SELECT PARENT
	/*
	$("li").click(function(){
		$(this).parent().addClass("selected"); //THIS SELECTS THE UL
	}	
	*/
	
	
	//CHAINING 
	/*
	$("ul.child")
	.addClass("selected")
	.addClass("sample");
	*/
	
		
	//SELECT CHILDREN   //THIS ADDS THE CLASS TO THE LI
	/*
	$("ul.child")
		.children()
		.addClass("selected");
	*/
	
	//SELECT SIBLINGS
	/*
	$("li").click(function(){
		$(this)
			.siblings()
			.addClass("selected"); 
			//THIS SELECTS ALL THE SIBLINGS BUT NOT THE ONE CLICKED ON
	}
	*/
	
	//SELECT NEXT ITEM
	/*
	$("li").click(function(){
		$(this)
		.next()
		.addClass("selected"); //THIS SELECTS NEXT ITEM
	}	
	*/
	
	//SELECT PREVIOUS ITEM
	/*
	$("li").click(function(){
		$(this)
		.prev()
		.addClass("selected"); //THIS SELECTS NEXT ITEM
	}	
	*/
	
	// FIND ALL LI IN ul.child
	/*
	$('ul.child li')
		.eq(2)
		.addClass("selected");    
		//index starts at 0 
	*/	
		
	// FIND ALL LI IN PARENT
	/*
	$('ul.parent li')
		.eq(1)
		.addClass("selected");    
	*/
	
});
</script>
<?php include '../../includes/footer.php'; ?>  