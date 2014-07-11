<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>DOM - Nodes</h1>    



<h1><a id="mainTitle">Welcome</a></h1>

<ul id="optionList">  	// ul= element node    id= attribute node
	<li>first</li>		// text= text node
	<li>second</li>
	<li><a>Third</a></li>
</ul>


<script language="javascript" type="text/javascript">

var mainTitle = document.getElementById("mainTitle");
var noLinks = document.getElementsByTagName("a");

// NODE TYPES
console.log("element type: ", mainTitle.nodeType );  //type = 1

// INNER HTML
console.log("inner html: ", mainTitle.innerHtml );  //type = Welcome

// CHILD NODES
console.log("child nodes: ", mainTitle.childNodes.length );  //how many child nodes = 35

// ALL LI's
console.log("all links: ", noLinks.length );  //how many child nodes = 36



var opList = document.getElementById("optionList");
var opListNoLinks = opList.getElementsByTagName("a");
console.log("all links: ", opListNoLinks.length );  //how many child nodes = 36




</script>



<blockquote>
<p>
NODES
----------------------------

Nodes are: 
- page tags
- text
- attributes
- comments
etc..


Node.ELEMENT_NODE == 1
Node.ATTRIBUTE_NODE == 2
Node.TEXT_NODE == 3


the <ul> and <li> is a element node
the <ul id=""> is a attribute node
the >text<  is a text node



----------------------------

// GRABBING A NODE

- is it unique? 
- does it has an id ?

use:
document.getElementById("someId");


if you want to grab a ul with an id of abc you do this

var myElement = document.getElementById("abc");

or

//This makes an array
var myElement = document.getElementsByTagName("li");


//If you have no a tags the array will be empty
var myElement = document.getElementsByTagName("a");


----------------------------

// GET BY NODE

h1> a id="mainTitle"> Welcome  /a>/h1>

var grabMainTitle = document.getElementById("mainTitle");

// NODE TYPES
console.log("element type: ", grabMainTitle.nodeType );  //type = 1

// INNER HTML
console.log("inner html: ", grabMainTitle.innerHtml );  //type = Welcome

// CHILD NODES
console.log("child nodes: ", grabMainTitle.childNodes.length );  //how many child nodes = 1


----------------------------


// GET BY TAG NAME

h1> a id="mainTitle"> Welcome  /a>/h1>

var MyLinks = document.getElementsByTagName("a");
console.log("Links: ", myLinks.length );  //there is 1


----------------------------

// GET TAGS FOR A SPECIFIC ELEMENT

ul id="abc">
li < Welcome > /li
li < Welcome > /li
li < Welcome > /li
/ul>

ol >
li < Welcome > /li
/ol>

var myFirstList = document.getElementById("abc");
var limitedList = myFirstList.getElementsByTagName("li");

console.log("Links: ", myLinks.length );  //there is 3

</p>
</blockquote>


</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  