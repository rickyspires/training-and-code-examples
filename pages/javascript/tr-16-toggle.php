<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>DOM - Toggle</h1>    

<script language="javascript" type="text/javascript">

//MAKE PRODUCT LIST
function list_products(){

	//get products
	var products = new Array(); 

	products[0] = "hair spray";
	products[1] = "shoes";
	products[2] = "flowers";
	products[3] = "bikes";

	var text="";

	for (var i = 0; i < products.length; i++)
	{
		text = text + "<a href='http:/#'>" + products[i] + "</a><br>";
	}

	return text;
}



// create a toggle

var onOff = "off"

function insertText(){

	//alert(onOff);
	
	if(onOff == "off")
	{
		var paragraph = document.getElementById("menu-items")
		var product_list = list_products(); //PUT PRODUCTS INTO MENU-ITEMS
		paragraph.innerHTML = product_list; //ALLOW HTML
		onOff = "on"
	}
	else
	{
		var paragraph = document.getElementById("menu-items")
		var product_list = "";
		paragraph.innerHTML = product_list;
		onOff = "off"
	}
}



</script>

<p id="menu-title" onclick="insertText();">Main Menu</p>

<p id="menu-items"></p>



<blockquote>
<p>
DOM - Toggle
----------------------------

//MAKE PRODUCT LIST
function list_products(){

	//get products
	var products = new Array(); 

	products[0] = "hair spray";
	products[1] = "shoes";
	products[2] = "flowers";
	products[3] = "bikes";

	var text="";

	for (var i = 0; i < products.length; i++)
	{
		text = text + "a href='http://#'>" + products[i] + "a>br>";
	}

	return text;
}



// create a toggle

var onOff = "off"

function insertText(){

	//alert(onOff);
	
	if(onOff == "off")
	{
		var paragraph = document.getElementById("menu-items")
		var product_list = list_products(); //PUT PRODUCTS INTO MENU-ITEMS
		paragraph.innerHTML = product_list; //ALLOW HTML
		onOff = "on"
	}
	else
	{
		var paragraph = document.getElementById("menu-items")
		var product_list = "";
		paragraph.innerHTML = product_list;
		onOff = "off"
	}
}



script>

p id="menu-title" onclick="insertText();">Main Menu</p>
p id="menu-items"></p>



</blockquote>


</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  