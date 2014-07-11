<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>Creating DOM elements</h1>    

<script language="javascript" type="text/javascript">

</script>

<blockquote>
<p>

// STEP 1 - CREATE ELEMENT
var myNewElement = document.createElement("li");


// STEP 2 - APPEND ELEMENT
var myNewElement = document.createElement("li");
myElement.appendChild(myNewElement);



// STEP 3 - APPEND TEXT TO ELEMENT
var myNewElement = document.createElement("li");
myElement.appendChild(myNewElement);
myNewElement.appendChild(myText);


--------------------------------------------------------------------

// EXAMPLE 1


// STEP 1 - CREATE PLACE HOLDER

div id="trivia">
	//NEW CONTENT GOES HERE
/div


// STEP 2 - CREATE THE ELEMENTS

var newHeading = document.createElement("h1");
var newParagraph = document.createElement("p");


// STEP 3 - ADD CONTENT USING INNER HTML

newHeading.innerHTML = "Did you know?";
newParagraph.innerHTML = "that my name is ricky";


// STEP 4 - GET THE ID = TRIVIA & APPEND NEW 

document.getElementById("trivia").appendChild(newHeading);
document.getElementById("trivia").appendChild(newParagraph);



// NOW IF YOU LOOK AT YOUR PAGE YOU WILL SEE IT.






--------------------------------------------------------------------

// EXAMPLE 2 (better way)


// STEP 1 - CREATE PLACE HOLDER

div id="trivia">
	//NEW CONTENT GOES HERE
/div


// STEP 2 - CREATE THE ELEMENTS

var newHeading = document.createElement("h1");
var newParagraph = document.createElement("p");


// STEP 3 - ADD CONTENT USING INNER HTML

var h1Text = document.createTextNode("Did you know?");
var paraText = document.createTextNode("that my name is ricky");


// STEP 4 - ASSOCIATE THE STEP3 VARS WITH THE STEP4 VARS

newHeading.appendChild(h1Text);
newParagraph.appendChild(paraText);


// STEP 5 - GET THE ID = TRIVIA & APPEND NEW 

document.getElementById("trivia").appendChild(newHeading);
document.getElementById("trivia").appendChild(newParagraph);



// NOW IF YOU LOOK AT YOUR PAGE YOU WILL SEE IT.






--------------------------------------------------------------------

// ALTERNATIVE TO APPEND CHILD
// THE FIRST WAY APPENDS TO THE END
// THIS WAY LETS YOU PLACE IT WHERE YOU WANT

parent.insertBefore(newElement, existingElement);


// EXAMPLE

var myNewElement = document.createElement("li");
var secondItem = myElement.getElementsByTagName("li")[1];   //starts at 0

myElement.insertBefore(myNewElement, secondItem);










</p>
</blockquote>


</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  