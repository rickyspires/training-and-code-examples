<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->

<h1>Event Handlers</h1>    

<p onclick="alert('you clicked me');">onclick alert ... </p>
<br/>
<p style="width:200px; border: thin dashed #930;" onmouseover="alert('you clicked me');">onMouseover alert ... </p> 

<!-- PAGE CODE ENDS HERE-->

<blockquote>
<p>

Examples: onClick, onMouseover, onLoad, onBlur, onFocus

---------------------------------------------------------------------

//EXAMPLE 1  - not the best way

button onclick="alert('Hello, world');">
	//some other code
/button>


---------------------------------------------------------------------

//EXAMPLE 2

element.event = 

	window.onload =
	nameField.onblur = 
	myElement.onclick = 
	

myElement.onclick = function(){
	
	// your event handler code

}; // you need to put the ; at the end because its a statement.


---------------------------------------------------------------------

//EXAMPLE 3  /*** DOES NOT WORK BEFORE IE 9 ***/

document.addEventListener('click', myFunction, false );  // dont us ON . i.e onclick

document.addEventListener('click', anotherFunction, false );

document.removeEventListener('click', anotherFunction, false );


---------------------------------------------------------------------

//EXAMPLE 4  /*** WORKS BEFORE IE 9 ***/

document.attachEvent('onclick', myFunction);


---------------------------------------------------------------------

// CROSS BROWSER METHOD - or use jquery :)

function addCrossBrowserListener (elementname, eventName, functionName){

	// does the addEventListener function exist? 
	if (elementName.addEventListener){
		//yes - use it
		elementName.addEventListener(eventName, functionName, false);
		return true;
	} else {
		//no - use attachEvent
		elementName.attachEvent("on" + eventName, functionName);
		return true;
	}

}



---------------------------------------------------------------------
---------------------------------------------------------------------
---------------------------------------------------------------------


// DOCUMENT.ONCLICK 

document.onclick = function(){
	alert("You clicked something")
}


--------------------------------------------------

var myImage = document.getElementById("mainImage");
myImage.onclick = function(){
	alert("You clicked the image");
}



---------------------------------------------------------------------
// NOTE: SOMETIME YOU SHOULD PU THE JS FILE AT THE TOP
---------------------------------------------------------------------

//USING WINDOW.ONLOAD

//window is the top level
//it can tell you when everything is loaded
//if you js file is at the top you can do this:


function prepareEventHandlers(){

	var myImage = document.getElementById("mainImage");
	myImage.onclick = function(){
		alert("You clicked the image");
	}
}

window.onload = function(){
	prepare anything we need to load
}










</p>
</blockquote>

<script language="javascript">
// this will alert on page load
//alert('Automatic alert ...');
</script>

</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  