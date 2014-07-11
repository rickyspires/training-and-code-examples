<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>FUNCTIONS</h1>    

<script language="javascript" type="text/javascript">


function product_list(){

	var products = new Array();

	products[0] = "hair spray";
	products[1] = "shoes";
	products[2] = "flowers";
	products[3] = "bikes";

	var products = new Array("hair spray", "shoes", "flowers", "bikes", 2);

	for (var i = 0; i < products.length; i++)
	{
	document.write(products[i] + "<br/>");
	}
}


function passvalue(message, messagetwo){

	alert(message + "the next messeage: " + messagetwo);

}





function displayText(textToDisplay){

	var myupperText = makeUpperCase(textToDisplay);
	alert(myupperText);

}
function makeUpperCase(message){

	//return "hi";
	return message.toUpperCase();

}

function create_array(){

	var products = new Array(); 

	products[0] = "hair spray";
	products[1] = "shoes";
	products[2] = "flowers";
	products[3] = "bikes";

	return products;
}
	

function array_counter(my_array){

	for (var i = 0; i < my_array.length; i++)
	{
		document.write(my_array[i] + "<br/>");
	}
}



function get_products(){

	var products = new Array(); 

	products[0] = "hair spray";
	products[1] = "shoes";
	products[2] = "flowers";
	products[3] = "bikes";

	for (var i = 0; i < products.length; i++)
	{
		document.write(products[i] + "<br/>");
	}
}



var items = new Array(); 

	items[0] = "hair spray";
	items[1] = "shoes";
	items[2] = "flowers";
	items[3] = "bikes";


function get_global(){

	for (var i = 0; i < items.length; i++)
	{
		document.write(items[i] + "<br/>");
	}
}




</script>

<h3 onclick="product_list();">Show List</h3>

<h3 onclick="passvalue('hello message', 'two');">Show Message</h3>

<h3 onclick="displayText('make uppercase');">make uppercase</h3>

<h3 onclick="array_counter(create_array());">get array</h3>

<h3 onclick="get_products();">get_products</h3>

<h3 onclick="get_global();">get_global</h3>


<blockquote>
<p>
function product_list(){

	var products = new Array();

	products[0] = "hair spray";
	products[1] = "shoes";
	products[2] = "flowers";
	products[3] = "bikes";

	var products = new Array("hair spray", "shoes", "flowers", "bikes", 2);

	for (var i = 0; i < products.length; i++)
	{
	document.write(products[i] + "<br/>");
	}

}
h3 onclick="product_list();">Show List /h3>



----------------------------------------------



function passvalue(message, messagetwo){

	alert(message + "the next messeage: " + messagetwo);

}
h3 onclick="passvalue('hello message', 'two');">Show Message /h3>



----------------------------------------------



function displayText(textToDisplay){

	var myupperText = makeUpperCase(textToDisplay);
	alert(myupperText);

}
function makeUpperCase(message){

	//return "hi";
	return message.toUpperCase();

}

h3 onclick="displayText('make uppercase');">make uppercase /h3>



----------------------------------------------


function create_array(){

	var products = new Array(); 

	products[0] = "hair spray";
	products[1] = "shoes";
	products[2] = "flowers";
	products[3] = "bikes";

	return products;
}
	

function array_counter(my_array){

	for (var i = 0; i < my_array.length; i++)
	{
		document.write(my_array[i] + "<br/>");
	}
}


h3 onclick="array_counter(create_array());">get array /h3>



----------------------------------------------


function get_products(){

	var products = new Array(); 

	products[0] = "hair spray";
	products[1] = "shoes";
	products[2] = "flowers";
	products[3] = "bikes";

	for (var i = 0; i < products.length; i++)
	{
		document.write(products[i] + "<br/>");
	}
}

h3 onclick="get_products();">get_products /h3>





----------------------------------------------

onclick="product_list();">Show List
onclick="product_list('hello message');">Show Message
onclick="displayText('make uppercase');">make uppercases
onclick="get_products();">get_products








NOTE: IF YOU DEFINE A VARIABLE OUT SIDE THE FUNCTION IT BECOMES GLOBAL
--------------------------------------------------------------------------------------------

var products = new Array(); 

	products[0] = "hair spray";
	products[1] = "shoes";
	products[2] = "flowers";
	products[3] = "bikes";


function get_products(){

	for (var i = 0; i < products.length; i++)
	{
		document.write(products[i] + "<br/>");
	}
}

onclick="get_products();">get_products


</p>
</blockquote>


</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  