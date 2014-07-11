<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>ARRAYS</h1>    

<script language="javascript" type="text/javascript">

/*
var products = new Array();  //create a new array object

products[0] = "hair spray";
products[1] = "shoes";
products[2] = "flowers";
products[3] = "bikes";

//alert(products.length); //echos 4

document.write(products[2]); // this will echo flowers


for (var i = 0; i < products.length; i++)
{
	document.write(products[i] + "<br/>");
}
*/

var products = new Array("hair spray", "shoes", "flowers", "bikes", 2);

for (var i = 0; i < products.length; i++)
{
	document.write(products[i] + "<br/>");
}

</script>





<blockquote>
<p>
"Arrays" are an object under the "language" object

each objects have functions and properties



-----------------------------

var singleValue;
singleValue = 99;

var multipleValues = [];

multipleValues[0] = 50;
multipleValues[1] = 60;
multipleValues[2] = "flowers";
multipleValues[3] = "bikes";


alert (multipleValues[2]);  //flowers

-----------------------------


//SHORT WAY

var multipleValues = [50, 60, "flowers", "bike" ];


-----------------------------

// LENGHT

var multipleValues = [50, 60, "flowers", "bike" ];

alert(multipleValues.length);  // echos 4   (highest index is 3)



-----------------------------

// ARRAY METHODS
// a method is a function that belongs to a method

someFunction(params); //call function

var multipleValues = [50, 60, 70, 80 ];

var reversedValues = multipleVaues.reverse();   //reverse numbers

var reversedValues = multipleVaues.join();   //join numbers




-----------------------------

var products = new Array();  //create a new array object

products[0] = "hair spray";
products[1] = "shoes";
products[2] = "flowers";
products[3] = "bikes";

//alert(products.length); //echos 4

document.write(products[2]); // this will echo flowers


for (var i = 0; i < products.length; i++)
{
	document.write(products[i] + "<br/>");
}


-----------------------------

var products = new Array("hair spray", "shoes", "flowers", "bikes", 2);

for (var i = 0; i < products.length; i++)
{
	document.write(products[i] + "<br/>");
}


-----------------------------











</p>
</blockquote>


</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  